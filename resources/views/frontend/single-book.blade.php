@extends('frontend.components.master')

<!-- ================ Navbar ================ -->
@include('frontend.components.header')

<!-- ================ Hero-2 ================ -->
@include('frontend.components.hero-2')

<!-- ================ add-to-cart ================ -->
<div class="add-to-cart">
    <div class="image">
        <div class="background"></div>
        <div class="wrapper-book">
            <img class="book-icon" loading="lazy" alt="" src="./public/book@2x.png" />
        </div>
    </div>
    <div class="book-details">
        <div class="book-info">
            <div class="publisher-info">
                <div class="description1">
                    <h2 class="dare-to-be">Dare To Be Wealthy</h2>
                    <div class="usd">
                        <span>$30.</span>
                        <span class="usd1">00 USD</span>
                    </div>
                </div>
                <div class="making-this-the1">
                    Making this the first true generator on the Internet. It uses a
                    dictionary of over 200 Latin words, combined with a handful of
                    model sentence structures, to generate Lorem Ipsum which looks
                    reasonable. The generated Lorem Ipsum.
                </div>
                <div class="publisher-details">
                    <div class="publisher-container">
                        <p class="publisher">
                            Publisher ‏ : ‎ Learning Private Limited (1 January 2023)
                        </p>
                        <p class="language">Language ‏ : ‎ English</p>
                        <p class="paperback">Paperback : ‎212 pages</p>
                        <p class="isbn-10">ISBN-10 ‏ : ‎ 9788120345799</p>
                        <p class="dimensions">Dimensions ‏ : ‎ 20 x 14 x 4 cm</p>
                    </div>
                </div>
                <div class="quantity-input-parent">
                    <div class="quantity-input">
                        <div class="quantity">
                            <div class="background1"></div>
                            <div class="increment-buttons">-</div>
                            <div class="increment-buttons1">1</div>
                            <div class="increment-buttons2">+</div>
                        </div>
                    </div>
                    <button class="button1">
                        <div class="cart-icon">
                            <img class="vector-icon" alt="" src="./public/vector.svg" />
                        </div>
                        <b class="add-to-cart1">Add to Cart</b>
                    </button>
                </div>
            </div>
            <h3 class="add-to-cart-payment-options">Payment options</h3>
            <div class="guarantee-safe-checkout">
                <div class="guarantee-safe-checkout1">
                    100% Guarantee Safe Checkout
                </div>
                <img class="payment-method-icon" loading="lazy" alt="" src="./public/payment-method@2x.png" />
            </div>
        </div>
    </div>
</div>

<!-- ================ Sub-content ================ -->
<div class="sub-content">
    <section class="sub-content1">
        <div class="description">
            <div class="div">
                <h2 class="do-you-offer">Do you offer discounts ?</h2>
                <div class="there-are-many">
                    There are many variations of passages of Lorem Ipsum available,
                    but the majority have suffered alteration in some form, bypassed
                    injected humour, or randomised words which don't look even
                    slightly believable.
                </div>
            </div>
            <div class="div1">
                <h2 class="is-this-book">Is this book for me?</h2>
                <div class="if-you-are">
                    If you are going to use a passage of Lorem Ipsum, you need to be
                    sure there isn't anything embarrassing hidden in the middle of
                    text. All the Lorem Ipsum generators on the Internet tend to
                    repeat predefined chunks as necessary.
                </div>
            </div>
        </div>
    </section>
</div>

<!-- ================ Features ================ -->
@include('frontend.components.features')

<!-- ================ Footer ================ -->
@include('frontend.components.footer')
