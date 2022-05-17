@extends('layouts.site_master')

@section('content')
    @include('includes.hero-header')

    {{-- @include('includes.video-section') --}}
    @include('includes.video-play-section')
    {{-- <section id="courses-list-box">
        <div class="container course-list-padding">
            <div class="section-title-text">
                <h1 class="text-titllium">{{ trans('translation.browse-out') }}</h1>
                <h6>{{ trans('translation.explore-our') }}</h6>
            </div>
            <div class="course-list-box">
                <div class="course-box-inner">
                    @forelse ($courses as $key => $course )
                        <div class="course-detail-box">
                            <div class="course-image-section">
                                <img src="{{ $course->path }}" alt="blockchain-course-1">
                                <div class="course-top-actions">
                                    <div>
                                        <a href="#" class="course-learn-more">
                                            {{ trans('translation.learn-more') }}
                                        </a>
                                    </div>
                                    <div class="fav-course-icon">
                                        <img src="{{ asset('assets/images/icons/heart.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="course-details-content">
                                <div class="course-title">
                                    <h4>{{ $course->title }}</h4>
                                </div>
                                <div class="course-rating-and-time">
                                    <div class="rating-section">
                                        <img src="{{ asset('assets/images/icons/star.svg') }}" alt=""> 4.5
                                    </div>
                                    <div class="duration-section">
                                        <img src="{{ asset('assets/images/icons/time.svg') }}" alt="">
                                        {{ calculateDuration($course->lessons->sum('duration')) }}
                                    </div>
                                </div>
                                <div class="course-enrolled-persons">
                                    <img src="{{ asset('assets/images/icons/user.svg') }}" alt=""> 423
                                </div>
                            </div>
                        </div>

                    @empty

                    @endforelse

                </div>
            </div>
        </div>
    </section> --}}


    <!-- Updated code add here  -->

    {{-- <section id="most-active-courses">
        <div class="container course-section-padding">
            <div class="section-title-text">
                <h1>{{ trans('translation.what-people-are-viewing') }}</h1>
                <h6>{{ trans('translation.explore-top-courses') }}</h6>
            </div>
            <div>
                <div class="your-class">
                    @forelse ($courses as $course )
                        <div>
                            <div class="course-detail-box">
                                <div class="course-image-section">
                                    <img src="./assets/images/course1.png" alt="blockchain-course-1">
                                    <div class="course-top-actions">
                                        <div>
                                            <a href="#" class="course-learn-more">
                                                Learn more
                                            </a>
                                        </div>
                                        <div class="fav-course-icon">
                                            <img src="./assets/images/icons/heart.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="course-details-content">
                                    <div class="course-title">
                                        <h4>Introduction to Blockchain and
                                            its terminology</h4>
                                    </div>
                                    <div class="course-rating-and-time">
                                        <div class="rating-section">
                                            <img src="./assets/images/icons/star.svg" alt=""> 4.5
                                        </div>
                                        <div class="duration-section">
                                            <img src="./assets/images/icons/time.svg" alt=""> 24 hr 15 min
                                        </div>
                                    </div>
                                    <div class="course-enrolled-persons">
                                        <img src="./assets/images/icons/user.svg" alt=""> 423
                                    </div>
                                </div>
                            </div>
                        </div>

                    @empty

                    @endforelse
                    @for ($i = 0; $i <= 5; $i++)
                        <div>
                            <div class="course-detail-box">
                                <div class="course-image-section">
                                    <img src="./assets/images/course1.png" alt="blockchain-course-1">
                                    <div class="course-top-actions">
                                        <div>
                                            <a href="#" class="course-learn-more">
                                                Learn more
                                            </a>
                                        </div>
                                        <div class="fav-course-icon">
                                            <img src="./assets/images/icons/heart.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="course-details-content">
                                    <div class="course-title">
                                        <h4>Introduction to Blockchain and
                                            its terminology</h4>
                                    </div>
                                    <div class="course-rating-and-time">
                                        <div class="rating-section">
                                            <img src="./assets/images/icons/star.svg" alt=""> 4.5
                                        </div>
                                        <div class="duration-section">
                                            <img src="./assets/images/icons/time.svg" alt="">
                                            {{ calculateDuration(rand(15999, 29999)) }}
                                        </div>
                                    </div>
                                    <div class="course-enrolled-persons">
                                        <img src="./assets/images/icons/user.svg" alt=""> {{ rand(150, 599) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section> --}}
    {{-- @include('includes.comment-section') --}}
    @include('includes.video2')
@endsection
