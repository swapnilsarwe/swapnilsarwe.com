<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover" style="background-image:url('https://source.unsplash.com/1L71sPT5XKc');">



    <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">

        <!--Main Col-->
        <div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">


            <div class="p-2 md:p-8 text-center lg:text-left">
                <!-- Image for mobile view-->
                <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('/images/profile.jpg')"></div>

                <h1 class="text-3xl font-bold pt-8 lg:pt-0">Swapnil Sarwe</h1>

                <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-teal-500 opacity-25"></div>
                <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start">
                    @svg('entypo-briefcase', ['class' => 'h-4 fill-current text-teal-700 pr-4'])
                    Web Developer</p>
                <p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start">
                    @svg('entypo-globe', ['class' => 'h-4 fill-current text-teal-700 pr-4'])
                    Mumbai, India</p>
                <p class="pt-8 text-sm"></p>

                <div class="pt-8 pb-4">
                    <button class="bg-teal-700 hover:bg-teal-900 text-white font-bold py-2 px-4 rounded-full">
                        Get In Touch
                    </button>
                </div>

                <div class="mt-6 pb-16 lg:pb-0 w-4/5 lg:w-full mx-auto flex flex-wrap items-center justify-between">
                    <a class="link" href="https://blog.swapnilsarwe.com">
                        @svg('entypo-browser', ['class' => 'h-6 w-6'])
                    </a>
                    <a class="link" href="https://www.facebook.com/swapnil.sarwe" data-tippy-content="@swapnil.sarwe">
                        @svg('entypo-facebook', ['class' => 'h-6 w-6'])
                    </a>
                    <a class="link" href="https://twitter.com/swapnilsarwe" data-tippy-content="@swapnilsarwe">
                        @svg('entypo-twitter', ['class' => 'h-6 w-6'])
                    </a>
                    <a class="link" href="https://github.com/swapnilsarwe" data-tippy-content="@swapnilsarwe">
                        @svg('entypo-github', ['class' => 'h-6 w-6'])</a>

                    <a class="link" href="https://instagram.com/swapnilsarwe" data-tippy-content="@swapnilsarwe">
                        @svg('entypo-instagram', ['class' => 'h-6 w-6'])
                    </a>
                    <a class="link" href="https://www.youtube.com/" data-tippy-content="@swapnilsarwe">
                        @svg('entypo-youtube', ['class' => 'h-6 w-6'])

                    </a>
                </div>

                <!-- Use https://simpleicons.org/ to find the svg for your preferred product -->

            </div>

        </div>

        <!--Img Col-->
        <div class="w-full lg:w-2/5">
            <!-- Big profile image for side bar (desktop) -->
            <img src="/images/profile.jpg" class="rounded-lg shadow-2xl hidden lg:block">
            <!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->

        </div>


        <!-- Pin to top right corner -->
        <div class="absolute top-0 right-0 h-12 w-18 p-4">
            <button class="js-change-theme focus:outline-none">🌙</button>
        </div>

    </div>
</body>

</html>
