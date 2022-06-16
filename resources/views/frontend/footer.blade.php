<!-- Footer Here -->

            <!-- Footer down section -->
			<div class="container-fuild bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-3 for-address section">
                    <div class="logo footer-logo">
                        <a href="https://dev.appearls.com/GO-RN/home.html">
                            <img src="assets/images/footer-logo.png">
                        </a>
                    </div>
                    <p class="address">313 N Birch St. Unit 102,<br>Santa Ana, CA 92701.</p>
                    <p class="phone">(844) 888-GoRN(4676)</p>
                    <p class="email">hello@gornapp.com</p>
                </div>

                <div class="col-md-2 col-sm-3 for-ul-style">
                    <div class="Our-Company">
                        <h1>Our Company</h1>
                        <ul class="all-nav">
                            <li><a href="{{ URL('/') }}">Home</a></li>
                            <li><a href="{{ URL('/') }}/home">Solutions</a></li>
                            <li><a href="{{ URL('/') }}/healthcare-professionals">Healthcare
                                    Professionals</a></li>
                            <li><a href="{{ URL('/') }}/facilities">Facilities</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2 col-sm-3 for-ul-style">
                    <ul class="all-nav-two">
                        <li><a href="https://dev.appearls.com/GO-RN/faq.html">FAQs</a></li>
                        <li><a href="https://dev.appearls.com/GO-RN/about.html">About</a></li>
                        <li><a href="https://dev.appearls.com/GO-RN/contact-us.html">Contact</a></li>
                        <li><a href="https://dev.appearls.com/GO-RN/demo.html">Demo</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-3 for-go-button">
                    <div class="GO">
                        <h2>Go RN App</h2>
                        <a href="https://dev.appearls.com/GO-RN/apply-form.html" class="hvr-sweep-to-bottom">Apply
                            Now</a>
                    </div>
                </div>


            </div>
        </div>
    </div>

            <div class="fuild-container bg-purple">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-4">
                            <div class="copy-right">
                                <p>2022 Go RN, LLC</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="term">
                                <p>Terms of Service | Privacy Policy</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <a class="hover-fx"><i class="fa fa-linkedin-square" style="font-size:24px"></i></a>
                            <a class="hover-fx"><i class="fa fa-twitter-square" style="font-size:24px"></i></i></a>
                            <a class="hover-fx"><i class="fa fa-facebook-square" style="font-size:24px"></i></a>
                            <a class="hover-fx"><i class="fa fa-instagram"></i></a>

                        </div>

                    </div>
                </div>
            </div>

            <!-- footer section end -->


        </div>
    </div>








    <!-- hover image script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript">

        $(".box").on({
            mouseover: function () {
                $(this).find("img:nth-child(1)").stop().animate({ opacity: 0 }, 500);
                $(this).find("img:nth-child(2)").stop().animate({ opacity: 1 }, 500);
            }, mouseout: function () {
                $(this).find("img:nth-child(1)").stop().animate({ opacity: 1 }, 500);
                $(this).find("img:nth-child(2)").stop().animate({ opacity: 0 }, 500);
            }
        });
    </script>


    <!-- video popup script -->
    <script type="text/javascript">
        $(".vpop").on('click', function (e) {
            e.preventDefault();
            $("#video-popup-overlay,#video-popup-iframe-container,#video-popup-container,#video-popup-close").show();

            var srchref = '', autoplay = '', id = $(this).data('id');
            if ($(this).data('type') == 'vimeo') var srchref = "https://www.youtube.com/embed/";
            else if ($(this).data('type') == 'youtube') var srchref = "https://www.youtube.com/embed/";

            if ($(this).data('autoplay') == true) autoplay = '?autoplay=1';

            $("#video-popup-iframe").attr('src', srchref + id + autoplay);

            $("#video-popup-iframe").on('load', function () {
                $("#video-popup-container").show();
            });
        });

        $("#video-popup-close, #video-popup-overlay").on('click', function (e) {
            $("#video-popup-iframe-container,#video-popup-container,#video-popup-close,#video-popup-overlay").hide();
            $("#video-popup-iframe").attr('src', '');
        });

        /*
        minified
        
        $(".vpop").on("click",function(o){o.preventDefault(),$("#video-popup-iframe-container,#video-popup-container,#video-popup-close").show();var p="",e="",i=$(this).data("id");if("vimeo"==$(this).data("type"))var p="//player.vimeo.com/video/";else if("youtube"==$(this).data("type"))var p="https://www.youtube.com/embed/";1==$(this).data("autoplay")&&(e="?autoplay=1"),$("#video-popup-iframe").attr("src",p+i+e),$("#video-popup-iframe").on("load",function(){$("#video-popup-overlay, #video-popup-container").show()})}),$("#video-popup-close, #video-popup-overlay").on("click",function(o){$("#video-popup-iframe-container,#video-popup-container,#video-popup-close").hide(),$("#video-popup-iframe").attr("src","")});
        */
    </script>



    <!-- bootstrap script -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- script End -->

    <!-- testimonial slider  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
    <script>
        var prevButton =
            '<button type="button" data-role="none" class="slick-prev" aria-label="prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1"><path fill="#FFFFFF" d="M 16,16.46 11.415,11.875 16,7.29 14.585,5.875 l -6,6 6,6 z" /></svg></button>',
            nextButton =
                '<button type="button" data-role="none" class="slick-next" aria-label="next"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#FFFFFF" d="M8.585 16.46l4.585-4.585-4.585-4.585 1.415-1.415 6 6-6 6z"></path></svg></button>';

        $(".single-item").slick({
            infinite: true,
            dots: false,
            autoplay: true,
            autoplaySpeed: 4000,
            speed: 500,
            cssEase: "ease-in-out",
        });

        $(".quote-container").mousedown(function () {
            $(".single-item").addClass("dragging");
        });
        $(".quote-container").mouseup(function () {
            $(".single-item").removeClass("dragging");
        });
    </script>
    <!-- testimonial slider  -->

    <!-- header script -->

    <script type="text/javascript">
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");

        hamburger.addEventListener("click", () => {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        });


    </script>

    <!-- header script End -->

    <!-- header Dropdown menu script -->

    <script type="text/javascript">
        $(document).ready(function () {
            $(".Menu-button").click(function () {
                $(".dropdown a").removeClass("clicked");
                $(".dropdown a").children("span").removeClass("clicked");
                $(".arrow").toggleClass("open");
                $(".dropdown").toggleClass("open");
            });

            $(".dropdown a").click(function () {
                $(".dropdown a").removeClass("clicked");
                $(".dropdown a").children("span").removeClass("clicked");
                $(this).toggleClass("clicked"); $(this).children("span").toggleClass("clicked");
            });
        });
    </script>

    <!-- header Dropdown script End -->
<!-- End Footer -->
	</div>

	<script src="{{ URL::to('/') }}/js/app.js"></script>
    <script src="{{ URL::to('/') }}/js/mousewheel.js"></script>
    <script src="{{ URL::to('/') }}/js/mCustomScrollbar.js"></script>
	<script src="{{ URL::to('/') }}/js/custom.js"></script>

	<script src="{{ URL::to('https://cloud.tinymce.com/5/tinymce.min.js?apiKey=8wv091kqxkxmdsnxs94zv212drc8ko4ajf3w91demylcdorc') }}"></script>
	@yield('footer_script')
	
	</body>
</html>
