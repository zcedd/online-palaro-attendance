{{--<x-guest-layout>--}}
{{--    <x-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-validation-errors class="mb-4" />--}}

{{--        @if (session('status'))--}}
{{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="flex items-center">--}}
{{--                    <x-checkbox id="remember_me" name="remember" />--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-authentication-card>--}}
{{--</x-guest-layout>--}}


<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="decription" content="The Official Website of the Province of Ilocos Norte, Philippines">
    <meta name="keywords"
          content="Ilocos Norte | The Official Website of Ilocos Norte, Home, ilocos norte, province of ilocos norte, Ilocos Norte,
          adams, bacarra, badoc, bangui, banna, batac city, burgos, carasi, currimao, dingras, dumalneg, laoag city, marcos, nueva era,
          pagudpud, paoay, pasuquin, piddig, pinili, san nicolas, sarrat, solsona, vintar, capitol express, capex, medical, dental,
          sirmatta ni ilokano, kuya matt, gov mmm, vice gov cecil, mission, medical and dental mission,
          provincial ordinance, provincial resolutions, ordinance, resolutions, tourism, investments, services,
          education, ihub, provincial scholarship program, adventure, amusement, paoay kumakaway,
          beach, cultural ritual, family, festivals, food trip, historical sites, luxury, mountain, museum,
          shopping, cavite restaurants, cavite, cavite restaurant, sirib express, open capitol, tan ok ni ilocano">
    <meta property="og:url" content="@yield('meta_url','https://ilocosnorte.gov.ph')"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="@yield('meta_title', 'Provincial Government of Ilocos Norte') "/>
    <meta property="og:description"
          content="@yield('meta_description', 'Official website of Ilocos Norte, Philippines. Get news, updates on events, downloads, photos, videos and livestreams.')"/>
    <meta property="og:image"
          content="@yield('meta_image', asset('images/background/cap.jpg'))"/>
    <title>@yield('title', 'Ilocos Norte')</title>
    <link rel="icon" type="/img/png" href="http://ilocosnorte.gov.ph/build/img/pgin-md-31993026d5.png">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('lam-ang/css/max.css')}}">
</head>
<body>
<div class="container">
    <div class="row  vh-100">
        <div class="col-md-12 position-relative">
            <div class="card position-absolute top-50 start-50 translate-middle border-0 shadow w-100" style="max-width: 25rem">
                <img src="{{ asset('lam-ang/images/logo.png') }}" class="card-img-top mx-auto position-relative" alt="..." style="max-width: 150px; top: -50px">
                <div class="card-body px-md-5 pb-md-5">
                    <x-validation-errors class="mb-3 rounded-0" />
                    @if (session('status'))
                        <div class="mb-4 small text-danger">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <x-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email"/>
                        </div>

                        <div class="mt-4">
                            <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                        </div>

                        {{--                        <div class="block mt-4">--}}
                        {{--                            <label for="remember_me" class="text-muted">--}}
                        {{--                                <x-jet-checkbox id="remember_me" name="remember" />--}}
                        {{--                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
                        {{--                            </label>--}}
                        {{--                        </div>--}}

                        <div class=" mt-4">
                            @if (Route::has('password.request'))
                                <a class="text-muted" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-button class="btn btn-primary form-control mt-5">
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Optional JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/200113a2a9.js" crossorigin="anonymous"></script>
<script src="{{asset('lam-ang/js/vendor/glightbox.min.js')}}"></script>
</body>
</html>










