@extends('layouts.site_master')
<script src="{{ asset('assets/js/profile.js') }}"></script>

@section('content')
    <div class="hv-profile-container">
        <div class="profile-inner">
            <div class="profile-titles">
                <!-- <h1>My Profile</h1> -->
                <div class="user-details">

                    <form action="{{ route('update.name') }}" method="POST">
                        @csrf
                        <div class="user-name-input">
                            <div>
                                <input name="name" type="text" id="user-name-field" value="{{ auth()->user()->name }}"
                                    readonly>
                                <i class='fas fa-edit edit-name-btn' data-toggle="tooltip" data-placement="top"
                                    title="Edit Your Name"></i>
                            </div>
                            <div class="btn-box">
                                {{-- <button class="edit-name-btn share-button" style="padding: 5px 25px;">Edit</button> --}}
                                <button type="submit" class="update-name-btn submit-button d-none"
                                    style="padding: 5px 25px;">{{ auth()->user() && cache()->has('Update') ? cache('Update') : trans('translation.profile.update') }}</button>
                            </div>
                        </div>
                    </form>
                    <!-- <strong>{{ auth()->user()->name }} <span><button><i class="fas fa-home"></i></button></span></strong> -->
                    <div>
                        {{ auth()->user()->email }}
                    </div>
                </div>
            </div>
            <div class="profile-content-section">
                <div class="profile-announcments">
                    <div class="pdf-holder text-center py-4">
                        <h4 class="pb-3">HyperVerse Community Presenters</h4>
                        <a class="submit-button" href="{{ asset('assets/pdfs/presenters.pdf') }}" target="_blank">View
                            Presenters</a>
                    </div>
                    <hr>
                    <div class="announcment-contianer">
                        <div class="annc-top">
                            <div>
                                <img src="{{ asset('assets/images/announcement.svg') }}" alt="">
                            </div>
                            <h2>Announcement</h2>
                        </div>
                        @forelse ($announcements as $key => $announcement)
                            <div class="announcments-details">
                                <h3>{{ $announcement->title }}</h3>
                                <p>{{ Str::limit($announcement->description, 100) }}</p>
                                @if (strlen($announcement->description) > 100)
                                    <a href="" id="show-announcement"
                                        data-id="{{ $announcement->id }}">{{ auth()->user() && cache()->has('view_more') ? cache('view_more') : 'View More' }}</a>
                                @endif
                            </div>
                        @empty
                            <div class="announcments-details">
                                <h3>Dont Have any Announcement</h3>
                            </div>
                        @endforelse
                    </div>
                </div>
                @include('site.includes.announcements')
                <div class="profile-feilds">
                    <div class="profile-feild-content">
                        <div class="profile-related-section">

                            <form action="{{ route('referral.update') }}" method="POST">
                                @csrf
                                <div class="user-information affiliaction-link-section">
                                    <div class="section-lable">
                                        <span>HV affiliate link</span>
                                    </div>
                                    <div class="affiliation-link-field">
                                        <input name="referral_link" id="affiliate_link" class="text-light" readonly
                                            type="text" value="{{ auth()->user()->referral_link }}">
                                        <div style="text-align: center">
                                            @if ($errors->has('referral_link'))
                                                <span class="help-block">
                                                    <strong
                                                        class="text-danger">{{ $errors->first('referral_link') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="affliation-link-button">
                                        <a type="button" id="hide-edit-affiliate-button" onclick="updateThcLink()"
                                            class="submit-button text-primary">{{ auth()->user() && cache()->has('Edit') ? cache('Edit') : trans('translation.profile.edit') }}</a>
                                        <button type="submit" id="show-affiliate-update-button"
                                            class="share-button d-none">{{ auth()->user() && cache()->has('Update') ? cache('Update') : trans('translation.profile.update') }}</button>
                                    </div>
                                </div>
                            </form>
                            <div class="user-information affiliaction-link-section mt-2 mb-3">
                                <div class="section-lable">
                                    <span>THC Link</span>
                                </div>
                                <div class="affiliation-link-field">
                                    <input id="hypercommunity-link" class="text-light" readonly type="text"
                                        value="{{ auth()->user()->hc_link ? hcLink(auth()->user()->hc_link) : '' }}">
                                </div>
                                <div class="affliation-link-button">
                                    <button type="button" onclick="copyText()" class="share-button" data-toggle="tooltip"
                                        data-placement="top"
                                        title="Tooltip on top">{{ auth()->user() && cache()->has('Copy') ? cache('Copy') : trans('translation.profile.copy') }}</button>
                                </div>
                            </div>

                            <form class="border-top-light" action="{{ route('location.update') }}" method="POST">
                                @csrf
                                <div class="user-information user-kocation-section mb-2">
                                    <div class="section-lable">
                                        <span>{{ auth()->user() && cache()->has('update_location') ? cache('update_location') : 'Update Location' }}</span>
                                    </div>

                                    <div class="user-info-updation-select">
                                        <select class="text-light country">
                                            @forelse (countriesList() as $country)
                                                <option
                                                    {{ $country->id == (auth()->user()->state_id ? auth()->user()->state->country->id : '') ? 'selected' : '' }}
                                                    value="{{ $country->id }}">{{ $country->name }}</option>

                                            @empty
                                                <option value="">Not Found</option>
                                            @endforelse

                                        </select>
                                        <select class="text-light" name="state_id" required>
                                            @if (auth()->user()->state_id)
                                                <option {{ auth()->user()->state_id ? 'selected' : '' }}
                                                    value="{{ auth()->user()->state_id }}">
                                                    {{ auth()->user()->state->name }}
                                                </option>
                                            @endif

                                        </select>
                                    </div>
                                </div>

                                <div class="user-information user-kocation-section">
                                    <div class="section-lable">
                                        <span
                                            style="font-size: 15px">{{ auth()->user() && cache()->has('preferred') ? cache('preferred') : 'Preferred Language' }}</span>
                                    </div>

                                    <div class="user-info-updation-select">
                                        <select class="text-light" name="preffered_language">
                                            {{-- <option value="0">Choose Language</option> --}}
                                            @forelse (allLanguages() as $language)
                                                @if ($language->status == 'enabled')
                                                    <option
                                                        {{ $language->id == auth()->user()->preffered_language ? 'selected' : '' }}
                                                        value="{{ $language->id }}">
                                                        {{ $language->name . ' (' . $language->lang . ')' }}</option>
                                                @endif
                                            @empty
                                                <option value="">Not Found</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="location-update-button">
                                    <button
                                        class="submit-button">{{ auth()->user() && cache()->has('Submit') ? cache('Submit') : trans('translation.profile.submit') }}</button>
                                </div>
                            </form>

                            <form class="border-top-light" action="{{ route('feedback') }}" method="POST">
                                @csrf
                                <div
                                    class="d-flex align-items-center text-center justify-content-center w-100 pb-2 pb-md-auto">
                                    {{ auth()->user() && cache()->has('feedback')? cache('feedback'): 'Please Submit Your Compliments, Suggestions or Challanges Here.' }}
                                </div>
                                <div class="user-information feedback-section">
                                    {{-- <div class="section-lable">
                                        <span>Write to us</span>
                                    </div> --}}
                                    <div class="submit-feed-textarea">
                                        <textarea class="text-light" name="comment" id="feed-back-section" cols="30" rows="5" maxlength="500"></textarea>
                                        <div>
                                            @if ($errors->has('comment'))
                                                <span class="help-block">
                                                    <strong
                                                        class="text-danger">{{ $errors->first('comment') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="commit-update-button">
                                    <button
                                        class="submit-button">{{ auth()->user() && cache()->has('Submit') ? cache('Submit') : trans('translation.profile.submit') }}</button>
                                </div>
                            </form>

                        </div>
                        <div class="calender-section">

                        </div>
                    </div>
                    <div>
                        <div class="text-center mt-4 mb-1">
                            <h3>{{ auth()->user() && cache()->has('Webinar') ? cache('Webinar') : trans('translation.profile.webinar') }}
                            </h3>
                        </div>
                        <div class="header mt-1">
                            <div class="wrapper">
                                <div class="c-monthyear">
                                    <div class="c-month">
                                        <span id="prev" class="prev fa fa-angle-left" aria-hidden="true"></span>
                                        <div id="c-paginator">
                                            <span class="c-paginator__month">JANUARY</span>
                                            <span class="c-paginator__month">FEBRUARY</span>
                                            <span class="c-paginator__month">MARCH</span>
                                            <span class="c-paginator__month">APRIL</span>
                                            <span class="c-paginator__month">MAY</span>
                                            <span class="c-paginator__month">JUNE</span>
                                            <span class="c-paginator__month">JULY</span>
                                            <span class="c-paginator__month">AUGUST</span>
                                            <span class="c-paginator__month">SEPTEMBER</span>
                                            <span class="c-paginator__month">OCTOBER</span>
                                            <span class="c-paginator__month">NOVEMBER</span>
                                            <span class="c-paginator__month">DECEMBER</span>
                                        </div>
                                        <span id="next" class="next fa fa-angle-right" aria-hidden="true"></span>
                                    </div>
                                    <span class="c-paginator__year">2022</span>
                                </div>
                                <div class="c-sort">
                                    <a class="o-btn c-today__btn" href="javascript:;">TODAY</a>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper">
                            <div class="c-calendar">
                                <div class="c-cal__container c-calendar__style">
                                    <script>
                                        // CAHNGE the below variable to the CURRENT YEAR
                                        year = 2022;
                                        // first day of the week of the new year
                                        today = new Date("January 1, " + year);
                                        start_day = today.getDay() + 1;
                                        fill_table("January", 31, "01");
                                        fill_table("February", 28, "02");
                                        fill_table("March", 31, "03");
                                        fill_table("April", 30, "04");
                                        fill_table("May", 31, "05");
                                        fill_table("June", 30, "06");
                                        fill_table("July", 31, "07");
                                        fill_table("August", 31, "08");
                                        fill_table("September", 30, "09");
                                        fill_table("October", 31, "10");
                                        fill_table("November", 30, "11");
                                        fill_table("December", 31, "12");
                                    </script>
                                </div>
                            </div>

                            <div class="c-event__creator c-calendar__style js-event__creator">
                                <a href="javascript:;" class="o-btn js-event__close">CLOSE <span
                                        class="fa fa-close"></span></a>
                                <form id="addEvent">
                                    <input placeholder="Event name" type="text" name="name">
                                    <input type="date" name="date">
                                    <textarea placeholder="Notes" name="notes" cols="30" rows="10"></textarea>
                                    <select name="tags">
                                        <option value="event">event</option>
                                        <option value="important">important</option>
                                        <option value="birthday">birthday</option>
                                        <option value="festivity">festivity</option>
                                    </select>
                                </form>
                                <br>
                                <a href="javascript:;" class="o-btn js-event__save">SAVE <span
                                        class="fa fa-save"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
