<!-- ================ Navbar ================ -->
<div class="navbar-container">
    <div class="author-navbar" id="myTopnav">
        <div class="navbar-logo topnav">
            <a href="{{ route('home') }}"><img src="./public/logo.png" alt="Logo"></a>
        </div>
        <div class="author-topnav">
            <a href="{{ route('home') }}">HOME</a>
            <a href="{{ route('books') }}">BOOKS</a>
            <a href="{{ route('blog') }}">BLOG</a>
            <a href="{{ route('store') }}">STORE</a>
        </div>
        <a href="{{ route('contact-us') }}" class="contact-button">CONTACT US</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>
