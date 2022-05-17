<section id="hero-header" class="hero-header-details home-page-1-image"
    style="background-image: url('{{ backGroundImage('hero-header') }}');">
    <div class="container">
        <!-- <div class="header-details-inner">
            <h1 class="header-bold-text home-one-bold-intro text-titllium">
                <span class="f-700">{{ trans('translation.home.hero-header.capitalize') }}</span> <br>
                <span class="f-700">{{ trans('translation.home.hero-header.greater') }}</span>
                <span class="f-700">{{ trans('translation.home.hero-header.mobile') }}</span> <br>
                <span class="f-700 d-inline-block pr-lg-5">{{ trans('translation.home.hero-header.combined') }}</span>
            </h1>
            <p class="header-description home-page-1-desc">
                {{ trans('translation.home.hero-header.hero-header-description') }}.
            </p>
            <div>
                <a href="javascript: void(0);" data-toggle="modal" data-target="#video_one" id="play-intr-video-btn" class="header-learn-more">
                    {{ trans('translation.home.hero-header.learn-more') }}
                </a>
            </div>
        </div> -->


        <div class="header-details-with-video">
            <h1>{{ auth()->user() && cache()->has('welcome_hero_header')? cache('welcome_hero_header'): trans('translation.home.hero_header.welcome') }}
            </h1>
            <p class="header-description-w-v">
                {{ auth()->user() && cache()->has('description_hero_header')? cache('description_hero_header'): trans('translation.home.hero_header.description') }}
            </p>
            <div class="home-page-video" style="width: 100%;">
                <video style="width: 100%; width: 80%; margin:0 auto;" controls id="video_one_box"
                    controlsList="nodownload">
                    <source
                        src="{{$video_path}}"
                        type="video/mp4">
                    <source
                        src="{{ $video_path}}"
                        type="video/ogg">
                </video>
            </div>
            @guest
                @if (request()->get('code'))
                    <div>
                        <a href="{{ route('register') }}" id="play-intr-video-btn" class="header-learn-more">
                            @lang('translation.home.menu.sign-up')
                        </a>
                    </div>
                @endif
            @endguest
        </div>

    </div>
</section>
