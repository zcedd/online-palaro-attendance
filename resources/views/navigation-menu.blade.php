<nav class="navbar navbar-expand-lg  bg-primary">
{{--Option of container or container fluid--}}
    <div class="container">
        <a class="navbar-brand text-white" href="#">Ilocos Norte</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link  text-white" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-muted" href="#">Action</a></li>
                        <li><a class="dropdown-item text-muted" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-muted" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled  text-white">Disabled</a>
                </li>
            </ul>
            <span class="d-flex justify-content-end">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                             @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())

                                    <img class="" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />

                            @else
                                <span class="inline-flex rounded-md">
                                     <img class="rounded-5" style="max-width: 2.5rem" src="https://randomuser.me/api/portraits/lego/{{rand(0,8)}}.jpg" alt="{{ Auth::user()->name }}" />

{{--                                    <button type="button" class="">--}}
{{--                                        {{ Auth::user()->name }}--}}
{{--                                    </button>--}}
                                </span>
                            @endif
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><p class="dropdown-item-text">{{ Auth::user()->name }}</p></li>
                            <li><a class="dropdown-item text-muted">Manage Account</a></li>
                            <li><a class="dropdown-item text-muted" href="{{ route('profile.show') }}">Profile</a></li>
                             @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <li><a class="dropdown-item text-muted" href="{{ route('api-tokens.index') }}">API Tokens</a></li>
                            @endif
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <button class="btn" href="{{ route('logout') }}"
                                                 @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </span>
        </div>
    </div>
</nav>


