<section class="d-none">
    <div class=" tab-container video-tabs">

        <div class="container">
            <div class="tab-content text-center">
                <div class="tab-pane fade show active">
                    <h1 class="header-bold-text">Preview what's coming from the <br> Hyper Universe!</h1>
                </div>
                <!-- <iframe class="video-iframe"  src="https://www.youtube.com/embed/TCToIw5irYM"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
                <div class="images-with-video-popup">

                    <div class="video-image video-section-one-video d-none">
                        <span class="video-image-click" data-toggle="modal" data-target="#video_two"
                            data-id="video_two"></span>
                        <img src="./assets/images/image1.png" alt="">
                    </div>

                    <div class="video-image video-section-one-video">
                        <span class="video-image-click" data-toggle="modal" data-target="#video_one"
                            data-id="video_one"></span>
                        <img src="./assets/images/image2.png" alt="">
                    </div>
                </div>
            </div>

        </div>
        @include('includes.time-line')
    </div>
</section>
