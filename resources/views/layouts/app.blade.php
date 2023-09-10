<!doctype html>
<html data-theme="night" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-W6FQNT9QQE"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-W6FQNT9QQE');
	</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script> 
	<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/apple-icon-57x57.png') }}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/apple-icon-60x60.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/apple-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon-76x76.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/apple-icon-114x114.png') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/apple-icon-120x120.png') }}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/apple-icon-144x144.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/apple-icon-152x152.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/apple-icon-180x180.png') }}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/android-icon-192x192.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/favicon-96x96.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{ asset('img/ms-icon-144x144.png') }}">
	
	@vite('resources/css/app.css') @livewireStyles
  </head>
  <body>
    <div class="bg-layer-1 h-full min-h-screen" style="background-image: url(&quot;data:image/svg+xml,%3Csvg xmlns=&#39;http://www.w3.org/2000/svg&#39; width=&#39;100&#39; height=&#39;100&#39; viewBox=&#39;0 0 100 100&#39;%3E%3Cg fill-rule=&#39;evenodd&#39;%3E%3Cg fill=&#39;%23828282&#39; fill-opacity=&#39;0.06&#39;%3E%3Cpath opacity=&#39;.5&#39; d=&#39;M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z&#39;/%3E%3Cpath d=&#39;M6 5V0H5v5H0v1h5v94h1V6h94V5H6z&#39;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;);">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="pt-2">
          <div class="navbar">
            <div class="flex-1"><a class="btn btn-ghost normal-case text-xl" href="{{ route('homepage') }}">
                <p class="font-bold text-xl flex">
                  <div class="w-10 rounded-full mr-3"><img src="https://i.imgur.com/2B52eul.jpg" /></div>SyntaxSage
                </p>
              </a></div>
            <div class="flex-none">
              <div title="Change Theme" class="dropdown dropdown-end ">
                <div tabindex="0" class="btn gap-1 normal-case btn-ghost"><svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current md:h-6 md:w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                  </svg><span class="hidden md:inline">Theme</span><svg width="12px" height="12px" class="ml-1 hidden h-3 w-3 fill-current opacity-60 sm:inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048">
                    <path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path>
                  </svg></div>
                <div class="dropdown-content bg-base-200 text-base-content rounded-t-box rounded-b-box top-px max-h-96 h-[70vh] w-52 overflow-y-auto shadow-2xl mt-16">
                  <div class="grid grid-cols-1 gap-3 p-3" tabindex="0"><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="light" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="light" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">light</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="dark" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="dark" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">dark</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="cupcake" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="cupcake" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">cupcake</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="bumblebee" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="bumblebee" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">bumblebee</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="emerald" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="emerald" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">emerald</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="corporate" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="corporate" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">corporate</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="synthwave" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="synthwave" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">synthwave</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="retro" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="retro" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">retro</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="cyberpunk" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="cyberpunk" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">cyberpunk</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="valentine" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="valentine" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">valentine</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="halloween" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="halloween" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">halloween</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="garden" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="garden" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">garden</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="forest" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="forest" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">forest</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="aqua" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="aqua" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">aqua</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="lofi" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="lofi" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">lofi</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="pastel" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="pastel" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">pastel</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="fantasy" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="fantasy" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">fantasy</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="wireframe" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="wireframe" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">wireframe</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="black" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="black" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">black</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="luxury" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="luxury" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">luxury</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="dracula" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="dracula" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">dracula</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="cmyk" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="cmyk" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">cmyk</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="autumn" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="autumn" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">autumn</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="business" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="business" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">business</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="acid" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="acid" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">acid</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="lemonade" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="lemonade" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">lemonade</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left [&amp;_svg]:visible" data-set-theme="night" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="night" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">night</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="coffee" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="coffee" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">coffee</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button><button class="outline-base-content overflow-hidden rounded-lg text-left" data-set-theme="winter" data-act-class="[&amp;_svg]:visible">
                      <div data-theme="winter" class="bg-base-100 text-base-content w-full cursor-pointer font-sans">
                        <div class="grid grid-cols-5 grid-rows-3">
                          <div class="col-span-5 row-span-3 row-start-1 flex gap-2 py-3 px-4 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="w-3 h-3 invisible">
                              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"></path>
                            </svg>
                            <div class="flex-grow text-sm font-bold">winter</div>
                            <div class="flex flex-shrink-0 flex-wrap gap-1 h-full">
                              <div class="bg-primary w-2 rounded"></div>
                              <div class="bg-secondary w-2 rounded"></div>
                              <div class="bg-accent w-2 rounded"></div>
                              <div class="bg-neutral w-2 rounded"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </button>
					</div>
                </div>
              </div>
              <div class="dropdown dropdown-end"><label tabindex="0" class="btn btn-ghost btn-circle avatar">
                  <div class="w-10 rounded-full"><img src='{{ Auth::check() && Auth::user()->avatar ? asset("storage/avatars/" . Auth::user()->avatar) : "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" }} ' /></div>
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52"> @if(Auth::check()) <li><a>Welcome back, {{ Auth::user()->name }}</a></li>
                  <li><a href="{{ route('account') }}">Settings</a></li>
                  <li><a href="{{ route('logout') }}">Logout</a></li> @else <li><a href="{{ route('user-authentication') }}">Login / Register</a></li> @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
		
		<!--
		<center>
		<script type="text/javascript">
			atOptions = {
				'key' : '71bdc32ba686212a4caea222ae63299a',
				'format' : 'iframe',
				'height' : 60,
				'width' : 468,
				'params' : {}
			};
			document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformat.com/71bdc32ba686212a4caea222ae63299a/invoke.js"></scr' + 'ipt>');
		</script>
		</center>-->
		
		
		@yield('content')
      </div>
	  <!--
	  <center>
	  <script type="text/javascript">
		atOptions = {
			'key' : 'a81011b76d462a8b5ceaad329bc0ea2b',
			'format' : 'iframe',
			'height' : 90,
			'width' : 728,
			'params' : {}
		};
		document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformat.com/a81011b76d462a8b5ceaad329bc0ea2b/invoke.js"></scr' + 'ipt>');
	  </script>
	  </center>
	  -->
	  
	  <footer class="footer footer-center p-4 text-base-content">
		<div>
			<p>© {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
		</div>
	  </footer>
    </div>
	<script src="{{ asset('assets/diff.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> 
	@livewireScripts
	
	<!--<script type='text/javascript' src='//pl18653373.highrevenuecpmnetwork.com/8c/81/77/8c81778d0a256d83d686c3f9bdd8b6b5.js'></script>-->
  </body>
</html>