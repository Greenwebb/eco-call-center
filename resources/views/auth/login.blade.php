<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.0
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../"/>
		<title>Call Center </title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
        <style>
            /* CSS for background blur */
            .modal-backdrop.show {
                backdrop-filter: blur(10px); /* Adjust the blur intensity as needed */
            }
            .loadr {
                display: flex;
                justify-content: center; /* Center horizontally */
                align-items: center; /* Center vertically */
                height: 100vh; /* Makes sure the container takes up the entire viewport height */
            }
        </style>
        
    
    </head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed">
		@php
            try {
                $userData = request()->query('user');
                $user = json_decode(urldecode($userData), true);
                $u = App\Models\User::where('email', $user['email'])->first();
            } catch (\Throwable $th) {
                $externalSiteLink = 'https://auth.greenwebbtech.com/login?source=website&destination=call-center';
                header('Location: ' . $externalSiteLink);
                exit;
            }
        @endphp
        <!-- Modal HTML -->
        <div class="loadr">
            <img width="50" src="{{ asset('public/preloads/1.gif') }}">
        </div>

        <form id="loginAccountForm" method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email"  value="{{ $user['email'] }}" class="block mt-1 w-full" type="hidden" name="email" required />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" value="{{ $user['global_secret_word'] }}" class="block mt-1 w-full" type="hidden" name="password" required />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" checked name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
        </form>


        <form id="registerAccountForm" method="POST" action="{{ route('register') }}">
            @csrf
            <x-validation-errors class="mb-4" />
            <div>
                <x-input id="name"  value="{{ $user['name'] }}"  placeholder="{{ $user['name'] }}" class="block mt-1 w-full" type="hidden" name="name"  />
            </div>

            <div class="mt-4">
                <x-input id="email" value="{{ $user['email'] }}"  placeholder="{{ $user['email'] }}" class="block mt-1 w-full" type="hidden" name="email" />
            </div>

            <div class="mt-4">
                <x-input id="password" value="{{ $user['global_secret_word'] }}" class="block mt-1 w-full" type="hidden" name="password" required/>
            </div>

            <div class="mt-4">
                <x-input id="password_confirmation" value="{{ $user['global_secret_word'] }}" class="block mt-1 w-full" type="hidden" name="password_confirmation" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox checked name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
        </form>
		<!--end::Javascript-->
        <script>
         
            // // Get the modal element
            // var modal = document.getElementById("myModal");

            // // Get the close button
            // var closeButton = document.querySelector(".close");

            // // Prevent the modal from closing when clicking outside of it
            // modal.addEventListener("click", function(event) {
            //     if (event.target === modal) {
            //         event.stopPropagation();
            //     }
            // });

            // // Prevent the modal from closing when pressing the Escape key
            // window.addEventListener("keydown", function(event) {
            //     if (event.key === "Escape" || event.keyCode === 27) {
            //         event.preventDefault();
            //     }
            // });

            // // Hide the modal when clicking the close button
            // closeButton.addEventListener("click", function() {
            //     modal.style.display = "none";
            // });

            // // Show the modal initially
            // modal.style.display = "block";
            // alert('{{$u}}' == '');
            if('{{$u}}' == ''){
                var form = document.getElementById('registerAccountForm');
                form.submit();
            }else{
                var form = document.getElementById('loginAccountForm');
                // form.submit();
            }
        </script>
        

        {{--  --}}
	</body>
	<!--end::Body-->
</html>