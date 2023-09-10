<div>
  <div class="mt-8 pb-16 sm:mt-20 sm:pb-20 lg:pb-28">
    <div class="relative">
      <div class="relative max-w-6xl mx-auto">
        <div class="w-full mx-auto bg-base-200 rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl"> Sign In / Register </h1>
			@if (session()->has('error'))
			<div class="alert shadow-lg">
			  <div>
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
				<span>{{ session('error') }}</span>
			  </div>
			</div>
			@endif
			
			@if($registerForm)
            <form class="space-y-4 md:space-y-6">
              <div>
                <label for="name" class="block mb-2 text-sm font-medium ">Username</label>
                <input type="text" wire:model="name" class="bg-gray-50 border border-gray-300 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Praryo" required="">
				@error('name')<p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p> @enderror
              </div>
              <div>
                <label for="email" class="block mb-2 text-sm font-medium ">Email Address</label>
                <input type="email" wire:model="email" class="bg-gray-50 border border-gray-300 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="praryo@praryo.com" required="">
				@error('email')<p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p> @enderror
              </div>
              <div>
                <label for="password" class="block mb-2 text-sm font-medium">Password</label>
                <input type="password" wire:model="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
				@error('password')<p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p> @enderror
              </div>
              <div>
                <label for="confirm_password" class="block mb-2 text-sm font-medium">Confirm Password</label>
                <input type="password" wire:model="confirm_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
				@error('confirm_password')<p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p> @enderror
              </div>
              <button class="btn w-full focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" wire:click.prevent="registerUser">Sign Up</button>
              <p class="text-sm font-light"> Already have an account? <a wire:click.prevent="toggleForm" class="font-medium text-primary-600 hover:underline dark:text-primary-500 select-none">Sign in</a>
              </p>
            </form>
			@else
			<form class="space-y-4 md:space-y-6">
              <div>
                <label for="email" class="block mb-2 text-sm font-medium ">Email Address</label>
                <input type="email" wire:model="email" class="bg-gray-50 border border-gray-300 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="praryo@praryo.com" required>
				@error('email')<p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p> @enderror
              </div>
              <div>
                <label for="password" class="block mb-2 text-sm font-medium">Password</label>
                <input type="password" wire:model="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
				@error('password')<p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p> @enderror
              </div>
              <div class="flex items-center justify-between">
                <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input type="checkbox" wire:model="remember_me" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300" required>
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="remember">Remember me</label>
                  </div>
                </div>
              </div>
			  <button class="btn w-full focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" wire:click.prevent="initializeLogin">Sign In</button>
              <p class="text-sm font-light"> Don't have an account? <a wire:click.prevent="toggleForm" class="font-medium text-primary-600 hover:underline dark:text-primary-500 select-none">Sign up</a>
              </p>
            </form>
			@endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>