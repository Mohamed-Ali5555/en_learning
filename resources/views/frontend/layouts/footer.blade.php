<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-1">
                <div class="item col-md-3">
                    <div class="title">
                        <h3>Useful Links</h3>
                    </div>
                    <ul class="us1">
                        <li><a href="#">Donation History</a></li>
                        <li><a href="#">Our Mission</a></li>
                        <li><a href="#">Donation Histoty</a></li>
                        <li><a href="#">Our Leadership</a></li>
                        <li><a href="#">Public Reporting</a></li>
                        <li><a href="#">Media Library</a></li>
                        <li><a href="#">Sign in</a></li>
                    </ul>
                </div>
                <div class="item1 col-md-3">
                    <div class="title">
                        <h3>Newsletter Signup</h3>
                    </div>
                    <p>dolor sit amet consetetur sacing elitre diam tempor invidunt</p>
                    <input type="text" name="mail" placeholder="Your email address...">
                    <div class="donate">
                        <div class="button_donate">
                            <a href="pages/campaign/campaign-detail.html">Subscrible</a>
                        </div>
                    </div>
                </div>
                <div class="item2 col-md-3">
                    <div class="title">
                        <h3>Latest Tweet</h3>
                    </div>
                    <p class="p1"><b>@WordPress :</b> Lorem ipsum dolor sit amet, consetetur sadipscing elitre<br>
                        <a href="#">http://t.co/B0aO4FrqN0</a><br> 18 hours ago
                    </p>
                    <p class="p2"><b>@WordPress :</b> Lorem ipsum dolor sit amet, consetetur sadipscing elitre<br>
                        <a href="#">http://t.co/B0aO4FrqN0</a><br> 18 hours ago
                    </p>
                </div>

                @foreach ($contactus as $contact)
                    <div class="item3 col-md-3">
                        <div class="title">
                            <a> <img src="{{ asset("storage/$contact->logo") }}"alt=""
                                    style="    height: 175px;
                                    width: 187px;
                                    border-radius: 50%;
                                    border: 3px solid yellow;
                                "></a>
                        </div>
                        <div class="pz">
                            <p>{{ $contact->desc }}</p>
                        </div>
                        <div class="email email1">
                            <p><i class="fa fa-envelope-o" aria-hidden="true"></i>{{ $contact->email }}</p>
                        </div>
                        <div class="email email2">
                            <p><i class="fa fa-phone" aria-hidden="true"></i>{{ $contact->phone }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="copyright">
                <div class="social">
                    <div class="social1">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-dribbble"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="oxy">
                    <a href="#">My Charities</a>
                    <a href="#">Terms of Use</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Site Map</a>
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                </div>
                <div class="cpr">
                    <p><span>CharityPlus</span> by <span>SpyroPress</span>. All right Reserved</p>
                </div>
            </div>
        </div>
    </div>
</div>
