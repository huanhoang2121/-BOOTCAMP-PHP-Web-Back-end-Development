@extends('layouts.master')
@section('title', 'Contact')
@section('content')

    <div class="technology">
        <div class="container">

            <div class="col-md-9 technology-left">
                <div class="contact-section">
                    <h2 class="w3">CONTACT</h2>


                    <div class="contact-grids">
                        <div class="col-md-8 contact-grid">

                            <p>28 Nguyễn Tri Phương, Phú Hội, Thành phố Huế, Thừa Thiên Huế, Việt Nam</p>
                            <form action="#" method="post">
                                <input type="text" name="Name" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                                <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                                <input type="text" name="Phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
                                <textarea type="text" name="textarea" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Special Instruction/Comments...';}" required="">Special Instruction/Comments...</textarea>
                                <input type="submit" value="Send">
                            </form>
                        </div>
                        <div class="col-md-4 contact-grid1">
                            <h4>Address</h4>
                            <div class="contact-top">


                                <div class="clearfix"></div>
                            </div>
                            <ul>
                                <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Office : 0041-456-3692</li>
                                <li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 0200-123-4567</li>
                                <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="#"></a><a href="mailto:info@example.com">info@example.com</a></li>
                                <li><i class="glyphicon glyphicon-print" aria-hidden="true"></i> Fax : 0091-789-456100</li>
                            </ul>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps?q=28 Nguyễn Tri Phương, Phú Hội, Thành phố Huế, Thừa Thiên Huế, Việt Nam&output=embed" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
            <!-- right-menu -->
        @include('partials.right-menu')
        <!-- right-menu -->
        </div>
    </div>
@endsection
