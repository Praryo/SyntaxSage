			<div>
				
				<h2 class="mb-4 mt-10 items-center text-3xl font-extrabold">Features<span class="badge badge-info badge-md mr-2 px-2.5 py-0.5 ml-2">Writing</span><span class="badge badge-md mr-2 px-2.5 py-0.5 ml-1">OpenAI</span></h2>
				<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:h-full">
					@foreach($writing as $key => $value)
					<div class="bg-neutral-focus rounded-lg px-6 py-5 sm:flex flex-col justify-between">
					  <div>
						<h3 class="text-2xl font-extrabold text-white sm:text-3xl">{{ $value["title"] }}</h3>
						<p class="text-gray-100 mb-4 leading-7">{{ $value["description"] }}</p>
					  </div>
					  <div class="relative flex space-x-3 hover:border-gray-400">
						<div class="flex-1 min-w-0">
						  <span class="bg-gray-100 text-gray-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">OpenAI</span>
						  <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Online</span>
						</div>
						<div>
						  <a href="{{ url('/openai/writing/'. $key) }}" class="btn btn-sm">Access</a>
						</div>
					  </div>
					</div>
					@endforeach
				</div>
				<h2 class="mb-4 mt-10 items-center text-3xl font-extrabold">Features<span class="badge badge-info badge-md mr-2 px-2.5 py-0.5 ml-2">Mathematics</span><span class="badge badge-md mr-2 px-2.5 py-0.5 ml-1">OpenAI</span></h2>
				<div class="alert shadow-lg mb-4">
				  <div>
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
					<span>Take note that this feature currently supports only word problems, not figures.</span>
				  </div>
				</div>
				<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:h-full">
					@foreach($mathematics as $key => $value)
					<div class="bg-neutral-focus rounded-lg px-6 py-5 sm:flex flex-col justify-between">
					  <div>
						<h3 class="text-2xl font-extrabold text-white sm:text-3xl">{{ $value["title"] }}</h3>
						<p class="text-gray-100 mb-4 leading-7">{{ $value["description"] }}</p>
					  </div>
					  <div class="relative flex space-x-3 hover:border-gray-400">
						<div class="flex-1 min-w-0">
						  <span class="bg-gray-100 text-gray-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">OpenAI</span>
						  <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Online</span>
						</div>
						<div>
						  <a href="{{ url('/openai/mathematics/'. $key) }}" class="btn btn-sm">Access</a>
						</div>
					  </div>
					</div>
					@endforeach
				</div>
				<h2 class="mb-4 mt-10 items-center text-3xl font-extrabold">Features<span class="badge badge-info badge-md mr-2 px-2.5 py-0.5 ml-2">Audio</span><span class="badge badge-md mr-2 px-2.5 py-0.5 ml-1">OpenAI</span></h2>
				<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:h-full">
					@foreach($audio as $key => $value)
					<div class="bg-neutral-focus rounded-lg px-6 py-5 sm:flex flex-col justify-between">
					  <div>
						<h3 class="text-2xl font-extrabold text-white sm:text-3xl">{{ $value["title"] }}</h3>
						<p class="text-gray-100 mb-4 leading-7">{{ $value["description"] }}</p>
					  </div>
					  <div class="relative flex space-x-3 hover:border-gray-400">
						<div class="flex-1 min-w-0">
						  <span class="bg-gray-100 text-gray-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">OpenAI</span>
						  <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Online</span>
						</div>
						<div>
						  <a href="{{ url('/openai/audio/'. $key) }}" class="btn btn-sm">Access</a>
						</div>
					  </div>
					</div>
					@endforeach
				</div>
				<h2 class="mb-4 mt-10 items-center text-3xl font-extrabold">Features<span class="badge badge-info badge-md mr-2 px-2.5 py-0.5 ml-2">Misc</span><span class="badge badge-md mr-2 px-2.5 py-0.5 ml-1">OpenAI</span></h2>
				<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:h-full">
					@foreach($misc as $key => $value)
					<div class="bg-neutral-focus rounded-lg px-6 py-5 sm:flex flex-col justify-between">
					  <div>
						<h3 class="text-2xl font-extrabold text-white sm:text-3xl">{{ $value["title"] }}</h3>
						<p class="text-gray-100 mb-4 leading-7">{{ $value["description"] }}</p>
					  </div>
					  <div class="relative flex space-x-3 hover:border-gray-400">
						<div class="flex-1 min-w-0">
						  <span class="bg-gray-100 text-gray-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">OpenAI</span>
						  <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Online</span>
						</div>
						<div>
						  <a href="{{ url('/openai/misc/'. $key) }}" class="btn btn-sm">Access</a>
						</div>
					  </div>
					</div>
					@endforeach
				</div>
			</div>