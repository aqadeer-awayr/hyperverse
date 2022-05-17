@extends('layouts.site_master')

@section('content')
    <div class="video-gallery-outer">
        <div class=" content">
            <h1 class="section-header">{{ trans('translation.training.title') }}</h1>
            <div class="section-header-underline"></div>
            <div class="video-gallery">
                @forelse ($trainings as $training)
                    <div class="gallery-item">
                        <img src="{{ asset('assets/images/image_1.png') }}" alt="North Cascades National Park" />
                        <div class="gallery-item-caption">
                            <div>
                                <h2>{{ $training->title }}</h2>
                                <p>The BlockChain is calling
                                </p>
                                <img src="{{ asset('assets/images/play.png') }}" class="play-btn-at-hover" alt="">
                            </div>
                            <a class="vimeo-popup"
                                href="{{ config('filesystems.disks.s3.s3-url') . 'videos/trainings/' . $training->path }}"></a>
                        </div>

                    </div>
                @empty

                    <div class="gallery-item">
                        <img src="{{ asset('assets/images/image_1.png') }}" alt="North Cascades National Park" />
                        <div class="gallery-item-caption">
                            <div>
                                <h2>How to find your Blockchain Transaction Hash ID Number</h2>
                                <p>The BlockChain is calling</p>
                                <img src="{{ asset('assets/images/play.png') }}" class="play-btn-at-hover" alt="">
                            </div>
                            <a class="vimeo-popup"
                                href="{{ config('filesystems.disks.s3.s3-url') }}videos/Blockchain_Transaction_Hash_ID_Number.mp4"></a>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
