<section id="video-play-section">
    <div class="tile" id="tile-1">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified tab-header zee-slider" role="tablist">
            <div class="slider"></div>
            <!-- <li class="nav-item d-none">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#about" role="tab" aria-controls="home"
                    aria-selected="true">
                    {{-- {{ trans('translation.home.video-play-section.about') }}</a> --}}
            </li> -->
            <li class="nav-item">
                <a class="nav-link  zee-community" id="setting-tab" data-toggle="tab" href="#community" role="tab"
                    aria-controls="setting" aria-selected="false">
                    {{ auth()->user() && cache()->has('heading_community')? cache('heading_community'): trans('translation.home.community.heading') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#roadmap" role="tab"
                    aria-controls="profile" aria-selected="false">
                    {{ auth()->user() && cache()->has('heading_time_line')? cache('heading_time_line'): trans('translation.home.time_line.heading') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#faq" role="tab"
                    aria-controls="contact" aria-selected="false">
                    {{ auth()->user() && cache()->has('heading_faq') ? cache('heading_faq') : trans('translation.home.faq.heading') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="deligence-tab" data-toggle="tab" href="#due-diligence" role="tab"
                    aria-controls="setting" aria-selected="false">
                    {{ trans('translation.home.due_deligence.heading') }}</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-container home-page-1-tabs"
            style="background-image: url('{{ backGroundImage('community') }}');">
            <div class="container">
                <div class="tab-content text-center home-one-tab-content">
                    <div class="tab-pane fade show active time-line-width" id="roadmap" role="tabpanel"
                        aria-labelledby="profile-tab">
                        @include('includes.time-line')
                    </div>
                    <div class="tab-pane fade" id="community" role="tabpanel" aria-labelledby="setting-tab">
                        <h1 class="mb-2 tabs-section" style="margin-top: -60px">
                            {{ auth()->user() && cache()->has('title_community')? cache('title_community'): trans('translation.home.community.title') }}
                        </h1>
                        {{-- <div id="map">
                        </div> --}}
                        <img class="map-image" src="{{ asset('assets/images/map.png') }}">
                    </div>
                    <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="contact-tab">
                        @include('includes.faqs')
                    </div>
                    <div class="tab-pane fade" id="due-diligence" role="tabpanel" aria-labelledby="deligence-tab">
                        <h1>{{ trans('translation.home.due_deligence.title') }}</h1>
                    </div>

                </div>
            </div>
        </div>


    </div>

</section>
