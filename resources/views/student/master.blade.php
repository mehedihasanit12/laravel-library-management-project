<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}/student/assets/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}/student/assets/owlcarousel/owl.theme.default.min.css">
    @vite('resources/css/app.css')
</head>
<body>

<header class='shadow-md bg-white font-[sans-serif] tracking-wide relative z-50'>
    <section
        class='flex items-center flex-wrap lg:justify-center gap-4 py-2.5 sm:px-10 px-4 border-gray-200 border-b min-h-[70px]'>

        <div class='left-10 absolute z-50 flex items-center px-4 py-2.5 rounded max-lg:hidden'>

            <form action="{{ route('search.search') }}" method="GET">
                <div class="relative flex rounded-md border-2 border-blue-500 overflow-hidden max-w-md mx-auto font-[sans-serif]">
                    <input type="text" id="search" name="search"  placeholder="Search Something..."
                           class="w-full outline-none bg-white text-gray-600 text-sm px-4 py-3" />
                    <button type='submit' class="flex items-center justify-center bg-[#007bff] px-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px" class="fill-white">
                            <path
                                d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                            </path>
                        </svg>
                    </button>
                </div>
            </form>
            <div id="ajaxSearchResultDiv" class="hidden sm:min-w-[290px] max-sm:min-w-[250px] bg-white block shadow-lg py-6 px-6 rounded absolute right-[0px] top-[60px]">
                <ul id="ajaxSearchResult" class="">
                    <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">Search....</a></li>
                </ul>
            </div>

        </div>

        <a href="{{route('student-dashboard')}}" class="max-sm:hidden flex items-center gap-4"><img src="https://admission.univadmin.info/assets/img/shniyd_logo.jpg" height="50" width="50" alt="logo" /> <h1 class="font-bold text-2xl">Library Management System</h1>
        </a>
        <a href="{{route('student-dashboard')}}" class="hidden max-sm:block"><img src="https://admission.univadmin.info/assets/img/shniyd_logo.jpg" height="50" width="50" alt="logo" />
        </a>

        <div class="lg:absolute lg:right-10 flex items-center ml-auto space-x-8">
          <span class="relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="20px"
                 class="cursor-pointer fill-gray-800 hover:fill-[#007bff] inline-block" viewBox="0 0 64 64">
              <path
                  d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                  data-original="#000000" />
            </svg>
            <span class="absolute left-auto -ml-1 top-0 rounded-full bg-blue-600 px-1 py-0 text-xs text-white">1</span>
          </span>
            <span class="relative">
            <a href="{{route('cart.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                     class="cursor-pointer fill-gray-800 hover:fill-[#007bff] inline-block" viewBox="0 0 512 512">
              <path
                  d="M164.96 300.004h.024c.02 0 .04-.004.059-.004H437a15.003 15.003 0 0 0 14.422-10.879l60-210a15.003 15.003 0 0 0-2.445-13.152A15.006 15.006 0 0 0 497 60H130.367l-10.722-48.254A15.003 15.003 0 0 0 105 0H15C6.715 0 0 6.715 0 15s6.715 15 15 15h77.969c1.898 8.55 51.312 230.918 54.156 243.71C131.184 280.64 120 296.536 120 315c0 24.812 20.188 45 45 45h272c8.285 0 15-6.715 15-15s-6.715-15-15-15H165c-8.27 0-15-6.73-15-15 0-8.258 6.707-14.977 14.96-14.996zM477.114 90l-51.43 180H177.032l-40-180zM150 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm167 15c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0"
                  data-original="#000000"></path>
            </svg>
            </a>
            <span class="absolute left-auto -ml-1 top-0 rounded-full bg-blue-600 px-1 py-0 text-xs text-white">{{Cart::content()->count()}}</span>
          </span>
            <div  class="inline-block cursor-pointer border-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"
                     class="hover:fill-[#007bff]">
                    <circle cx="10" cy="7" r="6" data-original="#000000" />
                    <path
                        d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                        data-original="#000000" />
                </svg>
            </div>
            <div class='flex items-center max-sm:ml-auto space-x-6'>
                <ul>
                    <li id="profile-dropdown-toggle"
                        class="relative px-1 after:absolute after:bg-black after:w-full after:h-[2px] after:block after:top-10 after:left-0 after:transition-all after:duration-300">
                        <img src="https://readymadeui.com/team-1.webp" width="24" height="24" alt="profile-pic" class="w-9 h-9 rounded-full border-2 border-gray-300 cursor-pointer">
                        <div id="profile-dropdown-menu"
                             class="hidden bg-white block z-20 shadow-lg py-6 px-6 rounded sm:min-w-[320px] max-sm:min-w-[250px] absolute right-0 top-10">
                            <h6 class="font-semibold text-[15px]">Welcome</h6>
                            <p class="text-sm text-gray-500 mt-1 font-bold">{{Session::get('name')}}</p>
                            <hr class="border-b-0 my-4" />
                            <ul class="space-y-1.5">
                                <li><a href="" class="text-sm text-gray-500 hover:text-black">Order</a></li>
                                <li><a href='javascript:void(0)' class="text-sm text-gray-500 hover:text-black">Wishlist</a></li>
                            <hr class="border-b-0 my-4" />
                                <li><a href="{{route('student.logout')}}" class="text-sm text-gray-500 hover:text-black">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <button id="toggleOpen" class='lg:hidden ml-7'>
                    <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <div class='flex flex-wrap justify-center px-10 py-3 relative'>

        <div id="collapseMenu"
             class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-50'>
            <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border'>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 fill-black" viewBox="0 0 320.591 320.591">
                    <path
                        d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                        data-original="#000000"></path>
                    <path
                        d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                        data-original="#000000"></path>
                </svg>
            </button>

            <ul
                class='lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-2/3 max-lg:min-w-[280px] max-lg:top-0 max-lg:left-0 max-lg:p-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                <li class='max-lg:border-b max-lg:pb-4 px-3 lg:hidden'>
                    <a href="javascript:void(0)"><img src="https://readymadeui.com/readymadeui.svg" alt="logo" class='w-36' />
                    </a>
                </li>
                <li class='max-lg:border-b max-lg:px-3 max-lg:py-3'><a href='{{route('student-dashboard')}}'
                                                                       class='hover:text-[#007bff] text-[#007bff] font-semibold block text-[15px]'>Home</a></li>
                <li class='group max-lg:border-b max-lg:px-3 max-lg:py-3 relative'>
                    <a href='javascript:void(0)'
                       class='hover:text-[#007bff] hover:fill-[#007bff] text-gray-800 text-[15px] flex items-center'>Category<svg
                            xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                data-name="16" data-original="#000000" />
                        </svg>
                    </a>
                    <ul
                        class='absolute top-5 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[230px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-[400ms]'>
                        @foreach($categories as $category)
                        <li class='border-b py-3'>
                            <a href='javascript:void(0)'
                               class='hover:text-[#007bff] hover:fill-[#007bff] text-gray-800 text-[15px] flex items-center'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" class="mr-4 inline-block" viewBox="0 0 64 64">
                                    <path d="M10 2C7.8 2 6 3.8 6 6v52c0 2.2 1.8 4 4 4h44c2.2 0 4-1.8 4-4V6c0-2.2-1.8-4-4-4H10zm0 2h44c1.1 0 2 .9 2 2v50c0 1.1-.9 2-2 2H10c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2zm4 6v4h36V8H14zm0 10v4h36v-4H14zm0 10v4h24v-4H14z" fill="#000000"/>
                                </svg>

                                {{$category->name}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class='max-lg:border-b max-lg:px-3 max-lg:py-3'><a href='javascript:void(0)'
                                                                       class='hover:text-[#007bff] text-gray-800 text-[15px] block'>All Book</a></li>
                <li class='max-lg:border-b max-lg:px-3 max-lg:py-3'><a href='javascript:void(0)'
                                                                       class='hover:text-[#007bff] text-gray-800 text-[15px] block'>Blog</a></li>
                <li class='max-lg:border-b max-lg:px-3 max-lg:py-3'><a href='javascript:void(0)'
                                                                       class='hover:text-[#007bff] text-gray-800 text-[15px] block'>About</a></li>
                <li class='max-lg:border-b max-lg:px-3 max-lg:py-3'><a href='javascript:void(0)'
                                                                       class='hover:text-[#007bff] text-gray-800 text-[15px] block'>Contact</a></li>
            </ul>
        </div>

{{--        <div id="toggleOpen" class='flex ml-auto lg:hidden'>--}}
{{--            <button>--}}
{{--                <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">--}}
{{--                    <path fill-rule="evenodd"--}}
{{--                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"--}}
{{--                          clip-rule="evenodd"></path>--}}
{{--                </svg>--}}
{{--            </button>--}}
{{--        </div>--}}
    </div>
</header>

@yield('body')


<footer class="bg-white shadow-md border text-black py-4 px-4 font-sans tracking-wide">
    <div class="text-center">
        <h6 class="text-lg text-black font-bold">Stay connected with us:</h6>

        <ul class="flex flex-wrap justify-center gap-x-8 gap-4 mt-8 mb-12">
            <li>
                <a href='javascript:void(0)'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-600 w-8 h-8" viewBox="0 0 49.652 49.652">
                        <path d="M24.826 0C11.137 0 0 11.137 0 24.826c0 13.688 11.137 24.826 24.826 24.826 13.688 0 24.826-11.138 24.826-24.826C49.652 11.137 38.516 0 24.826 0zM31 25.7h-4.039v14.396h-5.985V25.7h-2.845v-5.088h2.845v-3.291c0-2.357 1.12-6.04 6.04-6.04l4.435.017v4.939h-3.219c-.524 0-1.269.262-1.269 1.386v2.99h4.56z" data-original="#000000" />
                    </svg>
                </a>
            </li>
            <li>
                <a href='javascript:void(0)'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 112.196 112.196">
                        <circle cx="56.098" cy="56.097" r="56.098" fill="#007ab9" data-original="#007ab9" />
                        <path fill="#fff" d="M89.616 60.611v23.128H76.207V62.161c0-5.418-1.936-9.118-6.791-9.118-3.705 0-5.906 2.491-6.878 4.903-.353.862-.444 2.059-.444 3.268v22.524h-13.41s.18-36.546 0-40.329h13.411v5.715c-.027.045-.065.089-.089.132h.089v-.132c1.782-2.742 4.96-6.662 12.085-6.662 8.822 0 15.436 5.764 15.436 18.149zm-54.96-36.642c-4.587 0-7.588 3.011-7.588 6.967 0 3.872 2.914 6.97 7.412 6.97h.087c4.677 0 7.585-3.098 7.585-6.97-.089-3.956-2.908-6.967-7.496-6.967zm-6.791 59.77H41.27v-40.33H27.865v40.33z" data-original="#f1f2f2" />
                    </svg>
                </a>
            </li>
            <li>
                <a href='javascript:void(0)'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 152 152">
                        <linearGradient id="a" x1="22.26" x2="129.74" y1="22.26" y2="129.74" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fae100" />
                            <stop offset=".15" stop-color="#fcb720" />
                            <stop offset=".3" stop-color="#ff7950" />
                            <stop offset=".5" stop-color="#ff1c74" />
                            <stop offset="1" stop-color="#6c1cd1" />
                        </linearGradient>
                        <g data-name="Layer 2">
                            <g data-name="03.Instagram">
                                <rect width="152" height="152" fill="url(#a)" data-original="url(#a)" rx="76" />
                                <g fill="#fff">
                                    <path fill="#ffffff10" d="M133.2 26c-11.08 20.34-26.75 41.32-46.33 60.9S46.31 122.12 26 133.2q-1.91-1.66-3.71-3.46A76 76 0 1 1 129.74 22.26q1.8 1.8 3.46 3.74z" data-original="#ffffff10" />
                                    <path d="M94 36H58a22 22 0 0 0-22 22v36a22 22 0 0 0 22 22h36a22 22 0 0 0 22-22V58a22 22 0 0 0-22-22zm15 54.84A18.16 18.16 0 0 1 90.84 109H61.16A18.16 18.16 0 0 1 43 90.84V61.16A18.16 18.16 0 0 1 61.16 43h29.68A18.16 18.16 0 0 1 109 61.16z" data-original="#ffffff" />
                                    <path d="m90.59 61.56-.19-.19-.16-.16A20.16 20.16 0 0 0 76 55.33 20.52 20.52 0 0 0 55.62 76a20.75 20.75 0 0 0 6 14.61 20.19 20.19 0 0 0 14.42 6 20.73 20.73 0 0 0 14.55-35.05zM76 89.56A13.56 13.56 0 1 1 89.37 76 13.46 13.46 0 0 1 76 89.56zm26.43-35.18a4.88 4.88 0 0 1-4.85 4.92 4.81 4.81 0 0 1-3.42-1.43 4.93 4.93 0 0 1 3.43-8.39 4.82 4.82 0 0 1 3.09 1.12l.1.1a3.05 3.05 0 0 1 .44.44l.11.12a4.92 4.92 0 0 1 1.1 3.12z" data-original="#ffffff" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </a>
            </li>
            <li>
                <a href='javascript:void(0)'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 1227 1227">
                        <path d="M613.5 0C274.685 0 0 274.685 0 613.5S274.685 1227 613.5 1227 1227 952.315 1227 613.5 952.315 0 613.5 0z" data-original="#000000" />
                        <path fill="#fff" d="m680.617 557.98 262.632-305.288h-62.235L652.97 517.77 470.833 252.692H260.759l275.427 400.844-275.427 320.142h62.239l240.82-279.931 192.35 279.931h210.074L680.601 557.98zM345.423 299.545h95.595l440.024 629.411h-95.595z" data-original="#ffffff" />
                    </svg>
                </a>
            </li>
        </ul>

        <p class="text-base text-black font-bold">© Library Management System. All rights reserved.</p>
    </div>
</footer>

<script>
    var toggleOpen = document.getElementById('toggleOpen');
    var toggleClose = document.getElementById('toggleClose');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
        if (collapseMenu.style.display === 'block') {
            collapseMenu.style.display = 'none';
        } else {
            collapseMenu.style.display = 'block';
        }
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);

    // for navbar on small screen size
    var toggleOpen = document.getElementById('toggleOpen');
    var toggleClose = document.getElementById('toggleClose');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
        if (collapseMenu.style.display === 'block') {
            collapseMenu.style.display = 'none';
        } else {
            collapseMenu.style.display = 'block';
        }
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);

    // for profile dropdown
    var toggleDropdown = document.getElementById('profile-dropdown-toggle');
    var dropdownMenu = document.getElementById('profile-dropdown-menu');

    function handleToggle(event) {
        dropdownMenu.classList.toggle('hidden');
    }

    // Add event listener for toggle button
    toggleDropdown.addEventListener('click', function (event) {
        event.stopPropagation();
        handleToggle(event);
    });

    // Add event listener to hide the dropdown when clicking outside
    document.addEventListener('click', function (event) {
        if (
            !dropdownMenu.classList.contains('hidden') &&
            !dropdownMenu.contains(event.target) &&
            event.target !== toggleDropdown
        ) {
            dropdownMenu.classList.add('hidden');
        }
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('/')}}/student/assets/owlcarousel/owl.carousel.min.js"></script>

<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script>

<script>
    $(document).ready(function () {
        // যখন ইনপুটে ক্লিক করবে তখন #ajaxSearchResult দেখাবে
        $('#search').on('focus', function () {
            $('#ajaxSearchResultDiv').removeClass('hidden'); // hidden ক্লাস সরাবে
        });

        // যখন ইউজার অন্য কোথাও ক্লিক করবে তখন #ajaxSearchResult হাইড হবে
        $(document).on('click', function (e) {
            if (!$(e.target).closest('#search, #ajaxSearchResult').length) {
                $('#ajaxSearchResultDiv').addClass('hidden'); // hidden ক্লাস যোগ করবে
            }
        });

        $('#search').on('keyup', function () {
            var search = $(this).val(); // ইউজারের ইনপুট ভ্যালু

            if (search !== '') { // ইনপুট ফাঁকা না হলে সার্চ করবে
                $.ajax({
                    type: 'GET',
                    url: '{{ route('search.ajax-search') }}',
                    data: { search: search },
                    dataType: 'JSON', // এটি ঠিকভাবে JSON হিসেবে রেসপন্স নেবে
                    success: function (response) {
                        var item = '';

                        // রেসপন্সে কোনো ডাটা না থাকলে মেসেজ দেখাবে
                        if (response.length === 0) {
                            item += '<li class="text-sm text-gray-500">No results found</li>';
                        } else {
                            $.each(response, function (key, value) {
                                item += `<li class="flex items-center gap-2"> <img style="width: 50px; height: 50px;" src="${value.image_url}" alt=""> <a href="/books/${value.id}" class="text-sm text-gray-500 hover:text-black">${value.name} By ${value.author_name}</a></li>`;
                            });
                        }

                        $('#ajaxSearchResult').empty(); // পুরনো রেজাল্ট মুছে ফেলবে
                        $('#ajaxSearchResult').append(item); // নতুন রেজাল্ট দেখাবে
                    }
                });
            } else {
                $('#ajaxSearchResult').empty(); // যদি ইনপুট ফাঁকা হয়, তখন রেজাল্ট লিস্ট ক্লিয়ার করবে
            }
        });
    });

</script>
</body>
</html>
