@extends('layouts.site_master')

@section('content')
    <div class="container">
        @if (auth()->user()->iframe_count == 0 && !empty(auth()->user()->affiliate_link))
            <div class="text-center mt-5"><strong> Please create your HyperVerse account by registering below.</strong></div>
            {{-- @dd($get_referral_user->referral_link); --}}
            <iframe style="height:1000px;width:100%;border:none" class="signupIframe"
                src="{{ getReferralUser(auth()->user()) }}" title="description"></iframe>
        @else
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Update Profile</h5>
                                    </div>

                                    <form class="row g-3 needs-validation" action="{{ route('update.profile') }}"
                                        method="post" id="form-auth">
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Your Name</label>
                                            <input readonly type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror" id=" yourName"
                                                value="{{ auth()->user()->name }}" required autocomplete="name" autofocus
                                                required>

                                        </div>

                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Your Email</label>
                                            <input readonly type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror" id="yourEmail"
                                                required name="email" value="{{ auth()->user()->email }}" required
                                                autocomplete="email">

                                        </div>
                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Enter Referral Link</label>
                                            <input type="text" name="referral_link"
                                                class="form-control @error('referral_link') is-invalid @enderror"
                                                id=" yourName" value="{{ old('referral_link') }}" required
                                                autocomplete="name" autofocus required>
                                            @error('referral_link')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">If you do not have a HyperVerse account, <a
                                                    href="{{ route('hyperverse.hvregister') }}"><strong>please click here
                                                        to Sign up</strong></a></p>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">
                                                Update
                                            </button>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
        @endif

    </div>
@endsection
