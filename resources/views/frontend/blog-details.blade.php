@extends('frontend.components.master')

<!-- ================ Navbar ================ -->
@include('frontend.components.header')

<!-- ================ Hero-2 ================ -->
@include('frontend.components.hero-2')

<!-- ================ Blog details ================ -->
<div class="blog-details-img">
    <img src="./public/blog-details-1.png" alt=".image">
    <div class="blog-details-parent">
        <div class="blog-details">
            <div class="date-container">
                <div class="feb-23-2024">Feb 23 2024</div>
            </div>
            <b class="sample-post-with">Sample post with image</b>
            <section class="post-excerpt">
                <div class="the-point-of1">
                    The point of using Lorem Ipsum hiter of that using making it look like
                    others readable will get end.The point of using Lorem Ipsum hiter of
                    that using making it look like others readable will get end.
                </div>
                <div class="interaction-buttons">
                    <div class="account-actions">
                        <div class="privacy-indicators">
                            <img class="inprivate-account-undefined" loading="lazy" alt=""
                                src="./public/inprivate-account--undefined.svg" />
                        </div>
                        <div class="publisher1">Publisher</div>
                    </div>
                    <div class="account-actions1">
                        <div class="eye-undefined-wrapper">
                            <img class="eye-undefined" loading="lazy" alt="" src="./public/eye--undefined.svg" />
                        </div>
                        <div class="view">120 view</div>
                    </div>
                    <div class="account-actions2">
                        <div class="comment-undefined-wrapper">
                            <img class="comment-undefined" loading="lazy" alt=""
                                src="./public/comment--undefined.svg" />
                        </div>
                        <div class="leave-comment">Leave comment</div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="blog-details-img">
    <img src="./public/blog-details-2.png" alt=".image">
    <div class="blog-details-parent">
        <div class="blog-details">
            <div class="date-container">
                <div class="feb-23-2024">Feb 23 2024</div>
            </div>
            <b class="sample-post-with">Sample post with image</b>
            <section class="post-excerpt">
                <div class="the-point-of1">
                    The point of using Lorem Ipsum hiter of that using making it look like
                    others readable will get end.The point of using Lorem Ipsum hiter of
                    that using making it look like others readable will get end.
                </div>
                <div class="interaction-buttons">
                    <div class="account-actions">
                        <div class="privacy-indicators">
                            <img class="inprivate-account-undefined" loading="lazy" alt=""
                                src="./public/inprivate-account--undefined.svg" />
                        </div>
                        <div class="publisher1">Publisher</div>
                    </div>
                    <div class="account-actions1">
                        <div class="eye-undefined-wrapper">
                            <img class="eye-undefined" loading="lazy" alt="" src="./public/eye--undefined.svg" />
                        </div>
                        <div class="view">120 view</div>
                    </div>
                    <div class="account-actions2">
                        <div class="comment-undefined-wrapper">
                            <img class="comment-undefined" loading="lazy" alt=""
                                src="./public/comment--undefined.svg" />
                        </div>
                        <div class="leave-comment">Leave comment</div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- ================ Footer ================ -->
@include('frontend.components.footer')
