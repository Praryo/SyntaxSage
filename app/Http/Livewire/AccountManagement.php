<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use App\Models\SyntaxSageServers;
use OpenAI\Laravel\Facades\OpenAI;
use Hash;
use DB;

class AccountManagement extends Component
{
	use WithFileUploads;
	
	public $avatar, $old_password, $new_password, $confirm_password;
	public $auth_key, $server = "openai";
	
    public function render()
    {
        return view('livewire.account-management')
		->extends('layouts.app');
    }
	
	public function saveProfile() {
		$validate = $this->validate([
			'avatar' => 'required|image|min:500|max:5000' // only 1MB is allowed
        ]);
		
		$avatarName = time().'.'.$this->avatar->getClientOriginalExtension();
		
		$this->avatar->storeAs('avatars', $avatarName, 'public');
		
		User::whereId(auth()->user()->id)->update([
            'avatar' => $avatarName
        ]);
		
		session()->flash('error', 'You have successfully updated your profile picture.');
	}
	
	public function savePassword() {
		$validate = $this->validate([
			'old_password' => 'min:6|required',
            'new_password' => 'min:6|required_with:confirm_password',
			'confirm_password' => 'min:6|same:new_password'
        ]);
		
		if(!Hash::check($this->old_password, auth()->user()->password))
            return session()->flash('error', 'You have entered the wrong current password.');
		
		User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($this->new_password)
        ]);
		
		session()->flash('error', 'You have successfully updated your password.');
	}
	
	public function addServer() {
		if (SyntaxSageServers::where('authorization', '=', $this->auth_key)->exists()) 
            return session()->flash('add_server_error', 'This authorization key you entered is already added to our servers.');
		
		config(['openai.api_key' => $this->auth_key]); 
		
		try {
			$test_api = OpenAI::completions()->create([
				'model' => 'text-ada-001',
				'prompt' => 'test',
				'max_tokens' => 1,
				'temperature' => 0
			]);
			
			DB::table('servers')->insertGetId([
				'user_id' => auth()->user()->id,
				'authorization' => $this->auth_key,
				'server' => strtolower($this->server),
				'status' => 1]
			);
			
            return session()->flash('add_server_error', 'You have successfully added a new server.');
		} catch (\Exception $e) {
            return session()->flash('add_server_error', 'This authorization key you entered is invalid / expired.');
		}
	}
	
}
// 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