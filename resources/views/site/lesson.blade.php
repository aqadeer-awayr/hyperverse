@extends('layouts.site_master')

@section('content')
    <div class="course-section-page">
        <div class="container course-details-inner">
            <div class="course-title">
                <h1> {{ $course->course->title }} </h1>
            </div>
            <div class="course-images-and-other-details">
                <div class="course-iformation">
                    <div class="content-info-about-course">
                        <div class="course-progress-bar">
                            <div class="course-progress-details">
                                <span>Course Status: in progress</span>
                                <span>35%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div>
                            <div div class="course-title-bold">About Course</div>
                            <p>{{ $course->description }}</p>
                        </div>
                        <div class="course-other-details">
                            <div class="course-title-and-time">
                                <div class="course-title-bold">
                                    Course content
                                </div>
                                <div class="course-lessons-and-time">
                                    <span>{{ count($course->lessons) ?? 0 }} Lessons</span>
                                    <span>
                                        {{ calculateDuration($course->lessons->sum('duration')) }}
                                    </span>
                                </div>
                            </div>
                            <div class="accordian-for-courses">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Getting Started
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Block Chain
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is hidden by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Various Versions have evolved
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is hidden by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Others
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is hidden by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-side">
                        {{-- @forelse ($course->lessons as $lesson )
                            <a href="{{ $lesson->getPath() }}"> {{ $lesson->title }}</a>
                        @empty
                            <p>Dont Have any Lesson</p>
                        @endforelse --}}
                        <img src="{{ $course->path }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        {{-- slider --}}

        <section id="related-course-carousal">
            <div class="container course-section-padding">
                <div class="section-title-text">
                    <h1>Recomended For You</h1>
                    <h6>{{ trans('translation.explore-our') }}</h6>
                </div>
                <div>
                    <div class="related-course">
                        <div>
                            <div class="course-detail-box">
                                <div class="course-image-section">
                                    <img src="{{ asset('asset/images/course1.png') }}" alt="blockchain-course-1">
                                    <div class="course-top-actions">
                                        <div>
                                            <a href="#" class="course-learn-more">
                                                {{ trans('translation.learn-more') }}
                                            </a>
                                        </div>
                                        <div class="fav-course-icon">
                                            <img src="{{ asset('asset/images/icons/heart.svg') }}" alt="">
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
                                            <img src="{{ asset('asset/images/icons/star.svg') }}" alt=""> 4.5
                                        </div>
                                        <div class="duration-section">
                                            <img src="{{ asset('asset/images/icons/time.svg') }}" alt=""> 24 hr 15 min
                                        </div>
                                    </div>
                                    <div class="course-enrolled-persons">
                                        <img src="{{ asset('asset/images/icons/user.svg') }}" alt=""> 423
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="course-detail-box">
                                <div class="course-image-section">
                                    <img src="{{ asset('asset/images/course1.png') }}" alt="blockchain-course-1">
                                    <div class="course-top-actions">
                                        <div>
                                            <a href="#" class="course-learn-more">
                                                {{ trans('translation.learn-more') }}
                                            </a>
                                        </div>
                                        <div class="fav-course-icon">
                                            <img src="{{ asset('asset/images/icons/heart.svg') }}" alt="">
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
                                            <img src="{{ asset('asset/images/icons/star.svg') }}" alt=""> 4.5
                                        </div>
                                        <div class="duration-section">
                                            <img src="{{ asset('asset/images/icons/time.svg') }}" alt=""> 24 hr 15 min
                                        </div>
                                    </div>
                                    <div class="course-enrolled-persons">
                                        <img src="{{ asset('asset/images/icons/user.svg') }}" alt=""> 423
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="course-detail-box">
                                <div class="course-image-section">
                                    <img src="{{ asset('asset/images/course1.png') }}" alt="blockchain-course-1">
                                    <div class="course-top-actions">
                                        <div>
                                            <a href="#" class="course-learn-more">
                                                {{ trans('translation.learn-more') }}
                                            </a>
                                        </div>
                                        <div class="fav-course-icon">
                                            <img src="{{ asset('asset/images/icons/heart.svg') }}" alt="">
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
                                            <img src="{{ asset('asset/images/icons/star.svg') }}" alt=""> 4.5
                                        </div>
                                        <div class="duration-section">
                                            <img src="{{ asset('asset/images/icons/time.svg') }}" alt=""> 24 hr 15 min
                                        </div>
                                    </div>
                                    <div class="course-enrolled-persons">
                                        <img src="{{ asset('asset/images/icons/user.svg') }}" alt=""> 423
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="course-detail-box">
                                <div class="course-image-section">
                                    <img src="{{ asset('asset/images/course1.png') }}" alt="blockchain-course-1">
                                    <div class="course-top-actions">
                                        <div>
                                            <a href="#" class="course-learn-more">
                                                {{ trans('translation.learn-more') }}
                                            </a>
                                        </div>
                                        <div class="fav-course-icon">
                                            <img src="{{ asset('asset/images/icons/heart.svg') }}" alt="">
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
                                            <img src="{{ asset('asset/images/icons/star.svg') }}" alt=""> 4.5
                                        </div>
                                        <div class="duration-section">
                                            <img src="{{ asset('asset/images/icons/time.svg') }}" alt=""> 24 hr 15 min
                                        </div>
                                    </div>
                                    <div class="course-enrolled-persons">
                                        <img src="{{ asset('asset/images/icons/user.svg') }}" alt=""> 423
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="course-detail-box">
                                <div class="course-image-section">
                                    <img src="{{ asset('asset/images/course1.png') }}" alt="blockchain-course-1">
                                    <div class="course-top-actions">
                                        <div>
                                            <a href="#" class="course-learn-more">
                                                {{ trans('translation.learn-more') }}
                                            </a>
                                        </div>
                                        <div class="fav-course-icon">
                                            <img src="{{ asset('asset/images/icons/heart.svg') }}" alt="">
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
                                            <img src="{{ asset('asset/images/icons/star.svg') }}" alt=""> 4.5
                                        </div>
                                        <div class="duration-section">
                                            <img src="{{ asset('asset/images/icons/time.svg') }}" alt=""> 24 hr 15 min
                                        </div>
                                    </div>
                                    <div class="course-enrolled-persons">
                                        <img src="{{ asset('asset/images/icons/user.svg') }}" alt=""> 423
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
