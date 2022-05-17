<section id="comment-section">
    <div class="container comments-section-outer">
        <div class="comments-section-inner">
            <div class="section-title-text text-titllium">
                <h1 class="f-600 text-uppercase">{{ trans('translation.comment-section.what-we-do') }}</h1>
                <h6>{{ trans('translation.comment-section.strongest-rocket') }}</h6>
            </div>
            <div class="comments-slider">
                @for ($i = 0; $i <= 5; $i++)
                    <div>
                        <div class="comment-box-outer">
                            <div class="qoute-symbol-outer">
                                <img src="./assets/images/icons/quots.svg" alt="">
                            </div>
                            <div class="comment-box">
                                <div class="user-image">
                                    <img src="./assets/images/user.jpeg" alt="">
                                </div>
                                <div>
                                    <div class="comment-text-outer">
                                        <div class="qoute-symbol">
                                            <img src="./assets/images/icons/quots.svg" alt="">
                                        </div>
                                        <div class="comment-lines-and-details">
                                            <span>HyperFund is the best community to learn about Blockchain
                                                Technology.</span>
                                            <div>
                                                <div class="auther-name">
                                                    <span>Auther name</span>
                                                </div>
                                                <div class="auther-desgnation">
                                                    <span>Auther designation</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>
