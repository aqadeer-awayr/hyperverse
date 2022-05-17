<div class="modal fade bd-example-modal-lg" id="video_one" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="">
                <video style="width: 100%;" controls id="video_one_box">
                    <source src="{{ config('filesystems.disks.s3.s3-url') }}videos/HyperCommunity.mp4"
                        type="video/mp4">
                    <source src="{{ config('filesystems.disks.s3.s3-url') }}videos/HyperCommunity.mp4"
                        type="video/ogg">
                </video>
            </div>
            <div class="modal-startup-video">
                <div>
                    <input id="login_video_popup" type="checkbox"> Not Show this again
                </div>
                <div>
                    <button type="button" class="close startup-popup-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times; Close</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
