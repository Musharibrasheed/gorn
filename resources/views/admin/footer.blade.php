                    </div>
                </div>
                <div class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                Copyright © {{ date('Y') }} . All rights reserved. {{--Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="base_url" id="base_url" value="{{ URL::to('/') }}">
        <script src="{{ asset('admin_assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
        <!-- bootstap bundle js -->
        <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
        <!-- slimscroll js -->
        <script src="{{ asset('admin_assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('admin_assets/libs/js/main-js.js') }}"></script>


        @if(Route::currentRouteName() == 'admin_dashboard')
            <!-- sparkline js -->
            <script src="{{ asset('admin_assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>

            <script src="{{ asset('admin_assets/libs/js/dashboard-ecommerce.js') }}"></script>

        @endif
        @yield('footer_script')
    </body>

</html>
