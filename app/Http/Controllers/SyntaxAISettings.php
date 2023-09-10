<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyntaxAISettings extends Controller
{
    public function SyntaxSageFeatures($ai, $type, $index) {
		return $this->SyntaxSageConfigs()[$ai][$type][$index] ?? null;
	}
	
    public function SyntaxSageList($ai, $type) {
		return $this->SyntaxSageConfigs()[$ai][$type] ?? null;
	}
	
    public function SyntaxSageConfigs() {
		$Features = array(
			"openai" => array(
				"writing" => array(
					"essay" => array(
						"title" => "Essay Writer",
						"description" => "Essay Generators: Unlocking Your Thoughts, Realizing Your Ideas!",
						"instructions" => "Write an essay using the content below and split it by parts (Introduction, Body, Conclusion):\n",
						"language" => true,
						"comparison" => false,
						"topic" => false,
						"upload" => false,
					),
					"poem" => array(
						"title" => "Poem Writer",
						"description" => "Generate your creativity - Poem Generator, the perfect muse!",
						"instructions" => "Write an poem using the content below:\n",
						"language" => true,
						"comparison" => false,
						"topic" => false,
						"upload" => false,
					),
					"definition" => array(
						"title" => "Definition Generator",
						"description" => "Unlock the Power of Defining: Use a Definition Generator!",
						"instructions" => "Write definition of the content below:\n",
						"language" => true,
						"comparison" => false,
						"topic" => false,
						"upload" => false,
					),
					"grammar" => array(
						"title" => "Grammar Checker",
						"description" => "Unlock the Power of Defining: Use a Definition Generator!",
						"instructions" => "Check the grammar of the content below:\n",
						"language" => true,
						"comparison" => true,
						"topic" => false,
						"upload" => false,
					),
					"paraphrasing" => array(
						"title" => "Paraphrasing Tool",
						"description" => "Paraphrasing Tool - Reword To Unlock New Possibilities!",
						"instructions" => "Rephrase the content below:\n",
						"language" => true,
						"comparison" => true,
						"topic" => false,
						"upload" => false,
					),
					"summarizer" => array(
						"title" => "Content Summarizer",
						"description" => "The Key to Comprehension - Use Content Summarizer.",
						"instructions" => "Summarize the content below:\n",
						"language" => true,
						"comparison" => true,
						"topic" => false,
						"upload" => false,
					),
					"expander" => array(
						"title" => "Content Expander",
						"description" => "Content Expansion: Generating Growth",
						"instructions" => "Expand the content below:\n",
						"language" => true,
						"comparison" => true,
						"topic" => false,
						"upload" => false,
					),
					"songs" => array(
						"title" => "Song Writer",
						"description" => "Let the Song Lyrics Generator be your muse!",
						"instructions" => "Write a song using content below and split it by parts:\n",
						"language" => true,
						"comparison" => false,
						"topic" => false,
						"upload" => false,
					),
					"story" => array(
						"title" => "Story Writer",
						"description" => "Write with Insight, Craft with Care - Make Your Stories Shine!",
						"instructions" => "Write a story using content below and split it by parts:\n",
						"language" => true,
						"comparison" => false,
						"topic" => false,
						"upload" => false,
					),
					"quote" => array(
						"title" => "Quote Writer",
						"description" => "Inspire, Engage and Illuminate.",
						"instructions" => "Write a quote using details below:\n",
						"language" => true,
						"comparison" => false,
						"topic" => false,
						"upload" => false,
					),
				),
				"mathematics" => array(
					"accounting" => array(
						"title" => "Accounting",
						"description" => "Unlock Financial Clarity with the Accounting Problem Solver",
						"instructions" => "Solve the accounting problem below and write the step by step solution:\n",
						"language" => false,
						"comparison" => false,
						"topic" => false,
						"upload" => false,
					),
					"engineering" => array(
						"title" => "Engineering",
						"description" => "Engineering Problems Solved: Innovate, Create, and Conquer",
						"instructions" => "Solve the engineering problem below and write the step by step solution:\n",
						"language" => false,
						"comparison" => false,
						"topic" => false,
						"upload" => false,
						"topics" => array(
							'Civil Engineering',
							'Electrical Engineering',
							'Mechanical Engineering',
							'Industrial Engineering',
							'Electronics Engineering',
						)
					),
					"chemistry" => array(
						"title" => "Chemistry",
						"description" => "Chemistry Solutions: Solve Problems, Expand Knowledge!",
						"instructions" => "Solve the chemistry problem below and write the step by step solution:\n",
						"language" => false,
						"comparison" => false,
						"topic" => false,
						"upload" => false,
					),
					"physics" => array(
						"title" => "Physics",
						"description" => "Using Physics to Unlock a World of Solutions.",
						"instructions" => "Solve the physics problem below and write the step by step solution:\n",
						"language" => false,
						"comparison" => false,
						"topic" => false,
						"upload" => false,
					),
				),
				"audio" => array(
					"transcribe" => array(
						"title" => "Transcribing Audio",
						"description" => "Transcribing Audio into the Input Language with Confidence!",
						"instructions" => "",
						"language" => false,
						"comparison" => false,
						"topic" => false,
						"upload" => '',
					),
				),
				"misc" => array(
					"instagram_caption" => array(
						"title" => "Instagram Caption",
						"description" => "Make Your Caption Stand Out with an Instagram Generator!",
						"instructions" => "Write a instagram caption using the details below:\n",
						"language" => true,
						"comparison" => false,
						"topic" => false,
						"upload" => false,
					),
					"tweet" => array(
						"title" => "Tweet Generator",
						"description" => "Generate tweets with ease - Tweeting made simple!",
						"instructions" => "Write a tweet for twitter using the details below:\n",
						"language" => true,
						"comparison" => false,
						"topic" => false,
						"upload" => false,
					),
				),
			)
		);
		
		return $Features;
	}
}
