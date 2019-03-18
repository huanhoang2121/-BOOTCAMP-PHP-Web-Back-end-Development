@extends('layouts.master')
@section('title', 'Contact')
@section('content')

    <!----start-contact---->
    <div class="contact">
        <div class="container">
            <div class="contact-top heading">
                <h3>CONTACT</h3>
            </div>
            <div class="contact-bottom">
                <iframe
                    src="https://www.google.com/maps?q=28 Nguyễn Tri Phương, Phú Hội, Thành phố Huế, Thừa Thiên Huế, Việt Nam&output=embed"
                    frameborder="0" style="border:0"></iframe>
                <div class="contact-text">
                    <div class="col-md-4 contact-left">
                        <h4>Sed dapibus nunc eu metus commodo, et dictum justo fermentum.</h4>
                        <p>28 Nguyễn Tri Phương, Phú Hội, Thành phố Huế, Thừa Thiên Huế, Việt Nam.</p>
                        <div class="address">
                            <h4>Address</h4>
                            <p>The company name,
                                <span>Lorem ipsum dolor,</span>
                                28 Nguyễn Tri Phương, Phú Hội, Thành phố Huế, Thừa Thiên Huế, Việt Nam.</p>
                        </div>
                    </div>
                    <div class="col-md-8 contact-right">
                        <input placeholder="Name" type="text" required>
                        <input placeholder="Email" type="text" required>
                        <textarea placeholder="Message" required></textarea>
                        <div class="submit-btn">
                            <form>
                                <input type="submit" value="SUBMIT">
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!----end-contact---->
    <!-- right-menu -->
    @include('partials.slide')
    <!-- right-menu -->
    </div>
    </div>
@endsection
