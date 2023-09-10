			<div>
				<div><p class="font-bold mb-10 mt-10 sm:text-3xl text-2xl">{{ $feature["title"] }}</p></div>
				<form enctype="multipart/form-data">
					<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:h-full">
						<div class="sm:flex flex-col justify-between">
							@if (is_bool($feature["upload"]))
							<textarea class="textarea textarea-bordered textarea-lg w-full" wire:model="input" placeholder="Input" rows="12"></textarea>
							@else
							@error('input')<p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p> @enderror
							<input type="file" wire:model="input" accept="audio/*" class="file-input file-input-bordered file-input-sm" />
							@endif
						</div>
						<div class="sm:flex flex-col justify-between">
							<div class="bg-neutral rounded-lg px-6 py-5 sm:flex flex-col justify-between">
								<div class="whitespace-pre-wrap select-text flex-grow break-words">@php echo trim($output); @endphp</div>
							</div>
						</div>
					</div>
					<div class="py-5 space-x-4 sm:flex">
						@if (is_bool($feature["upload"]))
						<button wire:click.prevent="generateOpenAI" class="btn btn-sm" wire:loading.class="loading" {{ empty($input) ? 'disabled' : '' }}>Generate</button>
						@else
						<button wire:click.prevent="generateOpenAI" class="btn btn-sm" wire:loading.class="loading">Generate</button>
						@endif
						@if ($feature["comparison"])
						<label for="comparison" onclick="compare('{{ $input }}', '{{ $output }}')" class="btn btn-sm btn-info" {{ empty($output) ? 'disabled' : '' }}>Compare</label>
						@endif
						@if ($feature["language"])
						<select wire:model="language" class="select select-bordered select-sm">
						  <option selected>English</option>
						  <option>Tagalog</option>
						  <option>Korean</option>
						  <option>Spanish</option>
						</select>
						@endif
						
						{{--@if ($feature["topic"])
						<select wire:model="subject" class="select select-bordered select-sm">
						  @foreach($feature["topics"] as $key => $server)
						  <option {{ $server === $feature["topics"][0] ? "selected" : "" }}>{{ $server }}</option>
						  @endforeach
						</select>
						@endif --}}
						<div wire:loading>
							<button class="btn btn-sm btn-success" disabled>Loading</button>
						</div>
					</div>
				</form>
				
				
				
				<h3 class="mb-5 text-lg font-medium">OpenAI Servers</h3>
				<ul class="grid w-full gap-6 md:grid-cols-4">
					@foreach($servers as $key => $server)
					<li>
						<input type="radio" wire:model="server" value="{{ $server->id }}" id="openai-server{{ $server->id }}" name="openai" class="hidden peer" required>                           
						<label for="openai-server{{ $server->id }}" class="card bg-neutral inline-flex justify-between w-full p-5 hover:bg-primary-focus peer-checked:bg-primary-focus">                           
							<h3 class="card-title">OpenAI #{{ $server->id }}</h3>
							<p>Added by {{ $server->user_id }}</p>
							<div class="card-actions justify-end">
								<div class="badge badge-success">Online</div>
							</div>
						</label>
					</li>
					@endforeach
				</ul>
				
				<input type="checkbox" id="comparison" class="modal-toggle" />
				<div class="modal">
				  <div class="modal-box relative">
					<label for="comparison" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
					<h3 class="text-lg py-1 font-bold">Comparison</h3>
					<div class="py-2" id="comparisonID"></div>
				  </div>
				</div>
			</div>
			
			<script>function compare(e,d){for(var a=JsDiff.diffWords(e,d),r=document.createDocumentFragment(),n=0;n<a.length;n++){if(a[n].added&&a[n+1]&&a[n+1].removed){var t,l=a[n];a[n]=a[n+1],a[n+1]=l}a[n].removed?(t=document.createElement("del")).appendChild(document.createTextNode(a[n].value)):a[n].added?(t=document.createElement("ins")).appendChild(document.createTextNode(a[n].value)):t=document.createTextNode(a[n].value),r.appendChild(t)}var i=document.createElement("div");i.appendChild(r);var o=`
					<p>
					${i.innerHTML}
					</p>
				`;document.getElementById("comparisonID").innerHTML=o}</script>