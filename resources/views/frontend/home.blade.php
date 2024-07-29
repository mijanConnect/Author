@extends('frontend.components.master')

<!-- ================ Navbar ================ -->
@include('frontend.components.header')

<!-- ================ Hero ================ -->
@include('frontend.components.hero')

<!-- ================ Hero ================ -->
@include('frontend.components.books-list')

<!-- ================ About Author ================ -->
<section>
    <div class="about">
        <div class="wrapper-image">
            <img class="image-icon" loading="lazy" alt="" src="./public/image@2x.png" />
        </div>
        <div class="about-inner">
            <div class="author-info-parent">
                <div class="author-info">
                    <b class="about-author">About Author</b>
                    <img class="sep-icon" loading="lazy" alt="" src="./public/sep.svg" />

                    <div class="all-the-lorem">
                        All the Lorem Ipsum generators on the Internet tend to repeated
                        predefined chunks as necessary, making this the first true value
                        generator on the Internet. It uses a dictionary of over 200 Latin
                        words, combined with a handful.
                    </div>
                </div>
                <div class="review-columns-parent">
                    <div class="review-columns">
                        <div class="review-stars">
                            <b class="logout">02</b>
                        </div>
                        <div class="books-published">Books Published</div>
                    </div>
                    <div class="search-panel">
                        <div class="sep"></div>
                    </div>
                    <div class="review-columns1">
                        <div class="homepage-wrapper">
                            <b class="homepage">4.5</b>
                        </div>
                        <div class="user-reviews">User Reviews</div>
                    </div>
                    <div class="address-icon">
                        <div class="sep1"></div>
                    </div>
                    <div class="review-columns2">
                        <div class="tools-wrapper">
                            <b class="tools">04</b>
                        </div>
                        <div class="best-seller-awards">Best Seller Awards</div>
                    </div>
                </div>
                <div class="details">
                    <div class="content">
                        <img class="image-icon1" loading="lazy" alt="" src="./public/image-1.svg" />

                        <div class="content1">
                            <b class="asia-ikhtiarphd">Asia ikhtiar,phd</b>
                            <div class="mail-asiaikhtiargmailcom-ph-container">
                                <p class="mail-asiaikhtiargmailcom">
                                    Mail :asiaikhtiar@gmail.com
                                </p>
                                <p class="phone-2">Phone : (+2) 9993 545 9000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================ What will you learn ================ -->
<section>
    <div class="what-will-you-learn">
        <header class="what-will-you-learn-inner">
            <div class="what-will-you-learn-parent">
                <h1 class="what-will-you">What will you learn?</h1>
                <div class="sep-wrapper">
                    <img class="sep-icon1" loading="lazy" alt="" src="./public/sep1.svg" />
                </div>
            </div>
        </header>
        <main class="frame-main">
            <div class="content-wrapper">
                <div class="content2">
                    <div class="content-wrapper1">
                        <div class="credit-real-estate">
                            <div class="div">
                                <div class="content3">
                                    <div class="background-wrapper">
                                        <div class="bg"></div>
                                        <b class="empty-element">01</b>
                                    </div>
                                    <b class="briefly-explain-your-container">
                                        <p class="briefly-explain-your">
                                            Briefly explain your credit repair and real estate
                                            courses
                                        </p>
                                    </b>
                                </div>
                            </div>
                            <div class="div1">
                                <div class="content4">
                                    <div class="bg-parent">
                                        <div class="bg1"></div>
                                        <b class="b">02</b>
                                    </div>
                                    <b class="emphasizing-their-benefits">emphasizing their benefits and how they
                                        complement
                                        empowering books</b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="benefits-emphasis">
                        <div class="div2">
                            <div class="content5">
                                <div class="background-wrapper1">
                                    <div class="bg2"></div>
                                    <b class="empty-element1">03</b>
                                </div>
                                <b class="emphasizing-their-benefits1">emphasizing their benefits and how they
                                    complement
                                    empowering books</b>
                            </div>
                        </div>
                        <div class="div3">
                            <div class="content6">
                                <div class="bg-group">
                                    <div class="bg3"></div>
                                    <b class="b1">04</b>
                                </div>
                                <b class="emphasizing-their-benefits2">emphasizing their benefits and how they
                                    complement
                                    empowering books</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="image-icon2" loading="lazy" alt="" src="./public/image1@2x.png" />
        </main>
    </div>
</section>

<!-- ================ Callout ================ -->
@include('frontend.components.callout')

<!-- ================ Footer ================ -->
@include('frontend.components.footer')
