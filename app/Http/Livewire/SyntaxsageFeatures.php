<?php

/*
	SyntaxSage
	2023 © Cyrrile Ric Victoriano
*/

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\SyntaxAISettings;

class SyntaxsageFeatures extends Component
{
    public function render()
    {
		return view('livewire.syntaxsage-features', [
            'writing' => (new SyntaxAISettings)->SyntaxSageList("openai", "writing"),
            'mathematics' => (new SyntaxAISettings)->SyntaxSageList("openai", "mathematics"),
            'audio' => (new SyntaxAISettings)->SyntaxSageList("openai", "audio"),
            'misc' => (new SyntaxAISettings)->SyntaxSageList("openai", "misc"),
        ]);
    }
}
