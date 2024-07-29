@extends('frontend.components.master')

<!-- ================ Navbar ================ -->
@include('frontend.components.header')

<!-- ================ Hero-2 ================ -->
@include('frontend.components.hero-2')

<!-- ================ Maps ================ -->
<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108208.7613325894!2d72.61463222595121!3d32.055078892463875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39217439502694e3%3A0x55e1bad6edcbbc70!2sSargodha%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2sbd!4v1721293451309!5m2!1sen!2sbd"
    width="100%" height="736" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>

<!-- ================ Contact form ================ -->
<form class="contact-us-form">
    <div class="contact-us-form-inner">
        <div class="frame-parent">
            <div class="frame-group">
                <div class="background-parent">
                    <div class="background"></div>
                    <div class="our-contacts">Our contacts</div>
                </div>
                <b class="heading-2">Get in touch</b>
            </div>
            <div class="item-parent">
                <div class="item">
                    <div class="contact-details">(890)-398-75826</div>
                </div>
                <div class="item1">
                    <div class="asiasupportcom">asia@support.com</div>
                </div>
                <div class="item2">
                    <div class="sargodha-punjab-pakistan">
                        sargodha punjab pakistan
                    </div>
                </div>
            </div>
            <div class="link-parent">
                <div class="link">
                    <div class="symbol"></div>
                </div>
                <div class="link1">
                    <div class="symbol1"></div>
                </div>
                <div class="link2">
                    <div class="symbol2"></div>
                </div>
                <div class="link3">
                    <div class="symbol3"></div>
                </div>
                <div class="link4">
                    <div class="symbol4"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="background1">
        <div class="frame-container">
            <div class="input-parent">
                <div class="input">
                    <input class="full-name" placeholder="Full Name" type="text" />

                    <div class="horizontal-divider"></div>
                </div>
                <div class="input1">
                    <input class="email-address" placeholder="Email Address" type="text" />

                    <div class="horizontal-divider1"></div>
                </div>
            </div>
            <div class="input2">
                <input class="subject" placeholder="Subject" type="text" />

                <div class="horizontal-divider2"></div>
            </div>
            <textarea class="textarea" placeholder="Your massage" rows="{7}" cols="{32}">
      </textarea>
        </div>
        <button class="input3">
            <div class="send-message">Send message</div>
        </button>
    </div>
</form>

<!-- ================ Footer ================ -->
@include('frontend.components.footer')
