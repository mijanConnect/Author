<!-- ================ Footer ================ -->
<footer class="author-site-footer">
    <section class="author-footer">
        <div class="footer-left">
            <a href="{{ route('home') }}"><img src="./public/footer-logo.png" alt="logo"></a>
            <h1>Digital World E -book</h1>
            <div class="footer-social">
                <a href="#">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="#">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fa fa-amazon"></i>
                </a>
            </div>
        </div>
        <div class="footer-middle">
            <h1>QUICK LINKS</h1>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('books') }}">Books</a>
            <a href="{{ route('blog') }}">Blogs</a>
            <a href="{{ route('store') }}">Store</a>
            <a href="{{ route('contact-us') }}">Contact</a>
        </div>
        <div class="footer-right">
            <h1>CONTACT</h1>
            <a href="#"> Sign Up</a>
            <div class="footer-mail">
                <i class="fa fa-envelope"></i>
                <a href="{{ route('contact-us') }}">Email digital world</a>
            </div>
            <div class="footer-booking">
                <i class="fa fa-calendar"></i>
                <a href="{{ route('contact-us') }}">Book For A Speaking Event</a>
            </div>
        </div>
    </section>
    <section class="author-copyright">
        <p>Digital world Copyright © 2024</p>
        <p>Author Website Design by Asia Ikhtiar</p>
    </section>
</footer>
