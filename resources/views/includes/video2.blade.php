<div class="modal fade bd-example-modal-lg" id="video_two" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content" style="background: none; border: none;">

            <div class="">
                <video style="width: 100%;" controls controlsList="nodownload" id="video_two_box">
                    <source src="{{ config('filesystems.disks.s3.s3-url') }}videos/video2.mp4" type="video/mp4">
                    <source src="{{ config('filesystems.disks.s3.s3-url') }}videos/video2.mp4" type="video/ogg">
                </video>
            </div>
        </div>
    </div>
</div>
