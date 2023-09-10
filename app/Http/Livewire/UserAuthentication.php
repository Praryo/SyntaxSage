<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;

class UserAuthentication extends Component
{
	public $users, $email, $password, $confirm_password, $name, $remember_me;
    public $registerForm = false;
	
    public function render()
    {
        return view('livewire.user-authentication');
    }
	
	private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->confirm_password = '';
		$this->registerForm = false;
    }
	
	public function initializeLogin() {
		$validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
		
        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password), $this->remember_me)){
			session()->flash('error', 'You have successfully logged in.');
			
			redirect()->route('homepage');
        } else {
			session()->flash('error', 'The credentials you entered is invalid.');
        }
	}
	
	public function registerUser() {
		if (str_contains(strtolower($this->name), 'praryo'))
			session()->flash('error', "Why don't you stop using my name Praryo?");
		
		$validatedDate = $this->validate([
			'name' => 'required|min:3|max:20|unique:users',
			'email' => 'required|email|unique:users',
			'password' => 'min:6|required_with:confirm_password',
			'confirm_password' => 'min:6|same:password'
		]);
		
		$this->password = Hash::make($this->password); 
		
		User::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password]);

        session()->flash('error', 'You have successfully registered.');

        $this->resetInputFields();
	}
	
	public function toggleForm() {
		$this->registerForm = !$this->registerForm;
	}
	
	public function logoutUser() {
		auth()->logout();
		return redirect('/');
	}
}
