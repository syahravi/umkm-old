<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- ha;lamn lending utama --}}
    <section class="relative py-10 overflow-hidden bg-black sm:py-16 lg:py-24 xl:py-32">
        <div class="absolute inset-0">
            <img class="object-cover w-full h-full md:object-left md:scale-150 md:origin-top-left" src="https://cdn.rareblocks.xyz/collection/celebration/images/cta/5/girl-working-on-laptop.jpg" alt="" />
        </div>
    
        <div class="absolute inset-0 hidden bg-gradient-to-r md:block from-black to-transparent"></div>
    
        <div class="absolute inset-0 block bg-black/60 md:hidden"></div>
    
        <div class="relative px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="text-center md:w-2/3 lg:w-1/2 xl:w-1/3 md:text-left">
                <h2 class="text-3xl font-bold leading-tight text-white sm:text-4xl lg:text-5xl">Get full access to Celebration</h2>
                <p class="mt-4 text-base text-gray-200">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam.</p>
    
                <form action="#" method="POST" class="mt-8 lg:mt-12">
                    <div class="flex flex-col items-center sm:flex-row sm:justify-center">
                        <div class="flex-1 w-full min-w-0 px-4 sm:px-0">
                            <div class="relative text-gray-400 focus-within:text-gray-600">
                                <label for="email" class="sr-only"></label>
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                </div>
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    placeholder="Enter email address"
                                    class="block w-full py-4 pl-10 pr-4 text-base text-black placeholder-gray-500 transition-all duration-200 border-gray-200 rounded-md sm:rounded-r-none caret-blue-600 focus:border-blue-600 focus:ring-1 focus:ring-blue-600"
                                    required
                                />
                            </div>
                        </div>
    
                        <button type="submit" class="inline-flex items-center justify-center flex-shrink-0 w-auto px-4 py-4 mt-4 font-semibold text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-md sm:mt-0 sm:rounded-l-none sm:w-auto hover:bg-blue-700 focus:bg-blue-700">
                            Get instant access
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
       {{-- halan deskripsi produk yang di ambil dari deskripsi produk --}}
    <section class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex-1 text-center lg:text-center mb-5">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Latest from blog</h2>
            </div>
            <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-x-12 xl:gap-x-24 gap-y-12">
                <div class="relative lg:mb-12">
                    <img class="absolute -right-0 -bottom-8 xl:-bottom-12 xl:-right-4" src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/dots-pattern.svg" alt="" />
                    <div class="pl-12 pr-6">
                        <img class="relative" src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/girl-working-on-laptop.jpg" alt="" />
                    </div>
                    <div class="absolute left-0 pr-12 bottom-8 xl:bottom-20">
                        <div class="max-w-xs bg-blue-600 rounded-lg sm:max-w-md xl:max-w-md">
                            <div class="px-3 py-4 sm:px-5 sm:py-8">
                                <div class="flex items-start">
                                    <p class="text-3xl sm:text-4xl">👋</p>
                                    <blockquote class="ml-5">
                                        <p class="text-sm font-medium text-white sm:text-lg">“You made it so simple. My new site is so much faster and easier to work with than my old site.”</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="2xl:pl-16">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl lg:leading-tight">We make things easy for projects.</h2>
                    <p class="text-xl leading-relaxed text-gray-900 mt-9">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia conse duis enim velit mollit. Exercitation veniam.</p>
                    <p class="mt-6 text-xl leading-relaxed text-gray-900">Velit officia conse duis enim velit mollit. Exercit ation veniam consequat sunt nostrud amet.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- halaman card untuk membuat menu atau tampilan produk --}}
    <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="flex items-end justify-between">
                <div class="flex-1 text-center lg:text-left">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Latest from blog</h2>
                    <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600 lg:mx-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
                </div>
    
                <div class="hidden lg:flex lg:items-center lg:space-x-3">
                    <button type="button" class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
    
                    <button type="button" class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
    
            <div class="grid max-w-md grid-cols-1 gap-6 mx-auto mt-8 lg:mt-16 lg:grid-cols-3 lg:max-w-full">
                <div class="overflow-hidden bg-white rounded shadow">
                    <div class="p-5">
                        <div class="relative">
                            <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                <img class="object-cover w-full h-full" src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-1.jpg" alt="" />
                            </a>
    
                            <div class="absolute top-4 left-4">
                                <span class="px-4 py-2 text-xs font-semibold tracking-widest text-gray-900 uppercase bg-white rounded-full"> Lifestyle </span>
                            </div>
                        </div>
                        <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> March 21, 2020 </span>
                        <p class="mt-5 text-2xl font-semibold">
                            <a href="#" title="" class="text-black"> How to build coffee inside your home in 5 minutes. </a>
                        </p>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        <a href="#" title="" class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
                            Continue Reading
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
    
                <div class="overflow-hidden bg-white rounded shadow">
                    <div class="p-5">
                        <div class="relative">
                            <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                <img class="object-cover w-full h-full" src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-2.jpg" alt="" />
                            </a>
    
                            <div class="absolute top-4 left-4">
                                <span class="px-4 py-2 text-xs font-semibold tracking-widest text-gray-900 uppercase bg-white rounded-full"> Marketing </span>
                            </div>
                        </div>
                        <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> April 04, 2020 </span>
                        <p class="mt-5 text-2xl font-semibold">
                            <a href="#" title="" class="text-black"> Ho7 Tips to run your remote team faster and better. </a>
                        </p>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        <a href="#" title="" class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
                            Continue Reading
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
    
                <div class="overflow-hidden bg-white rounded shadow">
                    <div class="p-5">
                        <div class="relative">
                            <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                                <img class="object-cover w-full h-full" src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/2/blog-post-3.jpg" alt="" />
                            </a>
    
                            <div class="absolute top-4 left-4">
                                <span class="px-4 py-2 text-xs font-semibold tracking-widest text-gray-900 uppercase bg-white rounded-full"> Productivity </span>
                            </div>
                        </div>
                        <span class="block mt-6 text-sm font-semibold tracking-widest text-gray-500 uppercase"> May 12, 2020 </span>
                        <p class="mt-5 text-2xl font-semibold">
                            <a href="#" title="" class="text-black"> 5 Productivity tips to write faster at morning. </a>
                        </p>
                        <p class="mt-4 text-base text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        <a href="#" title="" class="inline-flex items-center justify-center pb-0.5 mt-5 text-base font-semibold text-blue-600 transition-all duration-200 border-b-2 border-transparent hover:border-blue-600 focus:border-blue-600">
                            Continue Reading
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="flex items-center justify-center mt-8 space-x-3 lg:hidden">
                <button type="button" class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
    
                <button type="button" class="flex items-center justify-center text-gray-400 transition-all duration-200 bg-transparent border border-gray-300 rounded w-9 h-9 hover:bg-blue-600 hover:text-white focus:bg-blue-600 focus:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </section>
    {{-- footer --}}
    <section class="py-12 bg-gradient-to-r from-fuchsia-600 to-blue-600">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="text-center xl:flex xl:items-center xl:justify-between xl:text-left">
                <div class="xl:flex xl:items-center xl:justify-start">
                    <img class="w-auto mx-auto h-7" src="https://cdn.rareblocks.xyz/collection/celebration/images/logo-alt-2.svg" alt="" />
    
                    <p class="mt-5 text-sm text-white xl:ml-6 xl:mt-0">© Copyright 2021 Postcraft</p>
                </div>
    
                <div class="items-center mt-8 xl:mt-0 xl:flex xl:justify-end xl:space-x-8">
                    <ul class="flex flex-wrap items-center justify-center gap-x-8 gap-y-3 xl:justify-end">
                        <li>
                            <a href="#" title="" class="text-sm text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> About </a>
                        </li>
    
                        <li>
                            <a href="#" title="" class="text-sm text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Services </a>
                        </li>
    
                        <li>
                            <a href="#" title="" class="text-sm text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Privacy Policy </a>
                        </li>
    
                        <li>
                            <a href="#" title="" class="text-sm text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Terms & Conditions </a>
                        </li>
    
                        <li>
                            <a href="#" title="" class="text-sm text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Support </a>
                        </li>
                    </ul>
    
                    <div class="w-full h-px mt-8 mb-5 xl:w-px xl:m-0 xl:h-6 bg-gray-50/20"></div>
    
                    <ul class="flex items-center justify-center space-x-8 xl:justify-end">
                        <li>
                            <a href="#" title="" class="block text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M21.57 6.016c-.213-1.589-.841-2.817-1.924-3.886C18.26.559 15.72.035 12 .035c-3.719 0-6.26.524-7.647 1.095-1.084 1.07-1.712 2.297-1.924 3.886-.16 1.196-.26 3.006-.26 4.914s.1 3.718.26 4.915c.213 1.589.84 2.817 1.924 3.886C5.74 23.441 8.28 23.965 12 23.965c3.719 0 6.26-.524 7.647-1.094 1.084-1.07 1.712-2.297 1.924-3.886.16-1.197.26-3.007.26-4.915s-.1-3.718-.26-4.914zm-10.57 9.446V8.537l6.454 3.465-6.454 3.466z"/>
                              </svg>
                            </a>
                          </li>                                                                           
                        <li>
                            <a href="#" title="" class="block text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path>
                                </svg>
                            </a>
                        </li>
    
                        <li>
                            <a href="#" title="" class="block text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path>
                                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                    <path
                                        d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"
                                    ></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
