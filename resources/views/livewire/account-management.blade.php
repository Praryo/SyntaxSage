<div>
	<div><p class="font-bold mb-10 mt-10 sm:text-3xl text-2xl">Account Management</p></div>
	<div class="grid grid-flow-row-dense grid-cols-1 gap-6 sm:grid-cols-3 sm:h-full">
		<div class="col-span-2">
			<div class="card bg-neutral">
			  
			  <div class="card-body items-center text-center">
			   @if (session()->has('error'))
				<div class="alert shadow-lg">
					<div>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
						<span>{{ session('error') }}</span>
					</div>
				</div>
			   @endif
				<h2 class="card-title">Profile Picture</h2>
				<input type="file" wire:model="avatar" accept="image/*" class="file-input file-input-bordered file-input-sm w-full max-w-xs" />
				@error('avatar')<p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p> @enderror
				<div class="py-5 sm:flex">
					<button wire:click.prevent="saveProfile" wire:loading.class="loading" class="btn btn-outline btn-primary">Save Profile</button>
				</div>
				<div class="divider"></div>
				<h2 class="card-title">Change Password</h2>
				<input type="password" wire:model="old_password" placeholder="Current Password" class="input input-bordered w-full max-w-xs" />
				@error('old_password')<p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p> @enderror
				<input type="password" wire:model="new_password" placeholder="New Password" class="input input-bordered w-full max-w-xs" />
				@error('new_password')<p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p> @enderror
				<input type="password" wire:model="confirm_password" placeholder="Confirm New Password" class="input input-bordered w-full max-w-xs" />
				@error('confirm_password')<p class="text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p> @enderror
				<div class="py-5 sm:flex">
				  <button wire:click.prevent="savePassword" wire:loading.class="loading" class="btn btn-outline btn-primary">Save Password</button>
				</div>
			  </div>
			</div>
			
			
		</div>
		<div class="col-span-2">
			<div class="card bg-neutral">
			  <div class="card-body items-center text-center">
			    @if (session()->has('add_server_error'))
				<div class="alert shadow-lg">
					<div>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
						<span>{{ session('add_server_error') }}</span>
					</div>
				</div>
			   @endif
				<h2 class="card-title">Add Server</h2>
				  <input type="text" wire:model="auth_key" placeholder="Authentication Key" class="input input-bordered w-full max-w-xs" />
				  <select wire:model="server" class="select w-full max-w-xs">
					  <option value="openai">OpenAI</option>
				  </select>
				  <div class="py-5 sm:flex">
					<button wire:click.prevent="addServer" wire:loading.class="loading" class="btn btn-outline btn-primary">Add Server</button>
				  </div>
			  </div>
			</div>
		</div>
		<div>
			<div class="card bg-neutral ">
			  <div class="card-body items-center text-center">
				<h2 class="card-title">Profile</h2>
				@if ($avatar)
				<img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ $avatar->temporaryUrl() }}" alt="Profile"/>
				@else
				<img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('storage/avatars/' . Auth::user()->avatar) }}" alt="Profile"/>
				@endif
				<span class="text-sm"><span class="font-bold">Username:</span> {{ Auth::user()->name }}</span>
				<span class="text-sm"><span class="font-bold">Email:</span> {{ Auth::user()->email }}</span>
			  </div>
			</div>
		</div>
	</div>
</div>
