@extends('layouts.app')

@section('content')
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img width="100%" src="{{ asset('assets/images/HC.png') }}" alt="">
                                {{-- <span class="">HyperCommunity</span> --}}
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                </div>

                                <form class="row g-3" method="POST" action="{{ route('register.post') }}"
                                    id="form-auth">
                                    @csrf
                                    {{-- @if (request()->has('code')) --}}
                                    {{-- {!! Form::hidden('code', request()->get('code')) !!} --}}
                                    <div class="col-12">
                                        <input type="text" name="code" readonly
                                            class="form-control @error('code') is-invalid @enderror" id=" yourCode"
                                            value="{{ session()->get('code') }}" required autocomplete="name" autofocus
                                            required>
                                        @error('code')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- @endif --}}
                                    <div class="col-12">
                                        <label for="yourName" class="form-label">Your Name</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" id=" yourName"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Your Email</label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror" id="yourEmail"
                                            required name="email" value="{{ old('email') }}" required
                                            autocomplete="email">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror" id="yourPassword"
                                            required autocomplete="new-password">
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Confirm Password</label>
                                        <input type="password" name="password_confirmation" required
                                            autocomplete="new-password" class="form-control" id="confirm_password"
                                            required autocomplete="new-password">
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" name="terms" type="checkbox" value=""
                                                id="acceptTerms" required>
                                            <label class="form-check-label" for="acceptTerms">I agree and accept the
                                                <a target="_blank"
                                                    href="{{ asset('assets/pdfs/thc_privacy_policy.pdf') }}"
                                                    role="button">terms
                                                    and conditions</a>
                                            </label>
                                            <div class="invalid-feedback">You must agree before submitting.</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Already have an account? <a
                                                href="{{ route('login') }}">Log
                                                in</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="modal fade" id="privacy-policy-modal" tabindex="-1" aria-labelledby="privacy-policy-modal"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title">Privacy Policy</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Last updated: February 17, 2022

                                This Privacy Policy describes Our policies and procedures on the collection, use and
                                disclosure of Your information when You use the Service and tells You about Your privacy
                                rights and how the law protects You.

                                We use Your Personal data to provide and improve the Service. By using the Service, You
                                agree to the collection and use of information in accordance with this Privacy Policy. This
                                Privacy Policy has been created with the help of the Privacy Policy Template.</p>
                            <h4>Interpretation</h4>
                            <p>The words of which the initial letter is capitalized have meanings defined under the
                                following conditions. The following definitions shall have the same meaning regardless of
                                whether they appear in singular or in plural.</p>
                            <h4>Definitions</h4>
                            <p>
                                For the purposes of this Privacy Policy:

                                Account means a unique account created for You to access our Service or parts of our
                                Service.

                                Company (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers
                                to hyper verse.

                                Cookies are small files that are placed on Your computer, mobile device or any other device
                                by a website, containing the details of Your browsing history on that website among its many
                                uses.

                                Country refers to: Alaska, United States

                                Device means any device that can access the Service such as a computer, a cellphone or a
                                digital tablet.

                                Personal Data is any information that relates to an identified or identifiable individual.

                                Service refers to the Website.

                                Service Provider means any natural or legal person who processes the data on behalf of the
                                Company. It refers to third-party companies or individuals employed by the Company to
                                facilitate the Service, to provide the Service on behalf of the Company, to perform services
                                related to the Service or to assist the Company in analyzing how the Service is used.

                                Third-party Social Media Service refers to any website or any social network website through
                                which a User can log in or create an account to use the Service.

                                Usage Data refers to data collected automatically, either generated by the use of the
                                Service or from the Service infrastructure itself (for example, the duration of a page
                                visit).

                                Website refers to hyper verse, accessible from thehypercommunity.net

                                You means the individual accessing or using the Service, or the company, or other legal
                                entity on behalf of which such individual is accessing or using the Service, as applicable.
                            </p>
                            <h4>Interpretation</h4>
                            <p>The words of which the initial letter is capitalized have meanings defined under the
                                following conditions. The following definitions shall have the same meaning regardless of
                                whether they appear in singular or in plural.</p>
                            <h4>Interpretation</h4>
                            <p>The words of which the initial letter is capitalized have meanings defined under the
                                following conditions. The following definitions shall have the same meaning regardless of
                                whether they appear in singular or in plural.</p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </div>
                </div>
            </div>



        </section>

    </div>
@endsection
