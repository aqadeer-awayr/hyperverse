<div>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm navbar-custom">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('site-home') }}">
                <img src="{{ backGroundImage('logo') }}" alt="logo-image">
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                data-target="#navbar4">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbar4">
                <ul class="navbar-nav ml-auto pl-lg-4">
                    <li class="nav-item px-lg-2 active"> <a class="nav-link"
                            href="{{ route('site-home', ['language_id' => app('request')->input('language_id')]) }}">
                            <span class="d-inline-block d-lg-none icon-width"><i class="fas fa-home"></i></span>
                            {{ auth()->user() && cache()->has('home_menu') ? cache('home_menu') : trans('translation.home.menu.home') }}</a>
                    </li>


                    {{-- <li class="nav-item px-lg-2 dropdown d-menu">
                        <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><span class="d-inline-block d-lg-none icon-width"><i
                                    class="far fa-caret-square-down"></i></span>{{ trans('translation.home.menu.language') }}
                            <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </a>
                        <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                            @forelse (App\Models\Language::take(2)->get() as $language )
                                <a class="dropdown-item"
                                    href="{{ route('set.locale', ['locale' => $language->id]) }}">{{ $language->name }}</a>
                            @empty

                            @endforelse
                        </div>
                    </li> --}}
                    @auth()
                        @if (auth()->user()->status == 'inactive')
                            <a class="nav-link" href="{{ route('profile.update') }}">
                                <span class="d-inline-block d-lg-none icon-width">
                                    <i class="far fa-user"></i>
                                </span>{{ auth()->user() && cache()->has('update_profile_menu') ? cache('update_profile_menu') : 'Update Profile' }}
                            </a>
                        @endif
                        <a class="nav-link" href="{{ route('gallery.index') }}">
                            <span class="d-inline-block d-lg-none icon-width">
                                <i class="far fa-user"></i>
                            </span>{{ auth()->user() && cache()->has('training_menu') ? cache('training_menu') : 'Training' }}
                        </a>
                    @endauth
                    @guest
                        {{-- @dd(request()->get('code')) --}}
                        @if (request()->get('code'))
                            {{ session()->put('code', request()->get('code')) }}
                            <li class="nav-item px-lg-2">
                                <a class="nav-link" href="{{ route('register') }}">
                                    <span class="d-inline-block d-lg-none icon-width">
                                        <i class="far fa-user"></i>
                                    </span>{{ trans('translation.home.menu.sign-up') }}
                                </a>
                            </li>
                        @endif
                    @endguest
                    <li>
                        @guest
                            <a href="{{ route('login') }}" class="header-login-btn">
                                {{ trans('translation.home.menu.login') }}
                            </a>
                        @else
                            <div class="nav-item px-lg-2 dropdown d-menu">
                                <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><span
                                        class="d-inline-block d-lg-none icon-width"><i
                                            class="far fa-caret-square-down"></i></span>{{ auth()->user()->name }}
                                    <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="{{ route('profile') }}">
                                            <i class="bi bi-person"></i>
                                            <span>
                                                {{ auth()->user() && cache()->has('profile_menu')? cache('profile_menu'): trans('translation.home.menu.profile') }}</span>
                                        </a>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href=" {{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                                            <i class="bi bi-box-arrow-right"></i>
                                            <span>{{ auth()->user() && cache()->has('logout_menu') ? cache('logout_menu') : trans('translation.home.menu.logout') }}</span>
                                        </a>
                                    </li>

                                </ul><!-- End Profile Dropdown Items -->
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</div>
