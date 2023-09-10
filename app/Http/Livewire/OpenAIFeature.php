<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use OpenAI\Laravel\Facades\OpenAI;
use App\Http\Controllers\SyntaxAISettings;
use App\Models\SyntaxSageServers;
use App\Models\User;
use Illuminate\Http\Response;

class OpenAIFeature extends Component
{
	use WithFileUploads;
	
	public $input, $language = "English", $server, $output = "", $subject;
	public $feature;
	public $servers;
	public $status = "false";
	public $typeee = "false";
	
	public function mount($type, $id)
    {
		$result = (new SyntaxAISettings)->SyntaxSageFeatures("openai", $type, $id);
		
		if (!$result)
			return redirect('/');
		
        $this->feature = $result;
        $this->servers = SyntaxSageServers::where('status', 1)->where('server', 'openai')->get();
		
		foreach($this->servers as &$data) {
			$data->user_id = User::find($data->user_id)->name;
		}
		
		$this->server = $this->servers[0]->id;
		$this->typeee = $type;
		
		if ($this->feature["topic"]) {
			$this->subject = $this->feature["topics"][0];
		}
    }
	
    public function render()
    {
		// Refresh servers whenever ajax runs to prevent the username from becoming to user id
		$this->servers = SyntaxSageServers::where('status', 1)->where('server', 'openai')->get();
		foreach($this->servers as &$data) {
			$data->user_id = User::find($data->user_id)->name;
		} 
		
        return view('livewire.open-a-i')
		->extends('layouts.app');
    }
	
	public function generateOpenAI() {
		if (auth()->guest())
			return redirect()->route('user-authentication');
		
		$this->output = '';
		
		$currentServer = SyntaxSageServers::where('id', $this->server)->first();
		config(['openai.api_key' => $currentServer->authorization]); 
		
		try {
			// Switch case for math instructions since nag loloko pag content lang yung nakalagay.
			switch ($this->typeee) {
				case "mathematics":
					$instructions = $this->feature["instructions"] . 'Problem: '.$this->input.'';
					break;
				default:
					$instructions = $this->feature["instructions"] . 'Content: '.$this->input.'\nWrite it Using Language: '.$this->language.'';
					
			}
			
			if ($this->typeee == 'audio') { 
				$validate = $this->validate([
					'input' => 'required|file|mimes:audio/mpeg,mpga,mp3,wav,aac,m4a'
				]);
					
				$inputName = time().'.'.$this->input->getClientOriginalExtension();
					
				$this->input->storeAs('audio', $inputName, 'public');
					
				$result = OpenAI::audio()->transcribe([
					'model' => 'whisper-1',
					'file' => fopen('../storage/app/public/audio/' . $inputName, 'r'),
					'response_format' => 'verbose_json',
				]);
				
				$this->output = trim($result->text);
			} else {
				$result = OpenAI::completions()->create([
					'model' => 'text-davinci-003',
					'prompt' => $instructions,
					'max_tokens' => 2000,
					'temperature' => 0.5
				]);
				
				$this->output = trim($result['choices'][0]['text']);
			}
		} catch (\Exception $e) {
			$this->output = "There was an error generating the request. Perhaps the API server you used has already expired.";
		}
	}
	
}