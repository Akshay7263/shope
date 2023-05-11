

    <!-- Footer------------------------------------------------------------------- -->
    <footer>
        <!-- social link and phone number -->
        <div class="social-call">
            <!-- social links -->
            <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <!-- phone number -->
            <div class="phone">
                <span>Call +123456789</span>
            </div>
        </div>
    </footer>


<script>    

    $(document).ready(function () {
            $('#adaptive').lightSlider({
                adaptiveHeight: true,
                auto: true,
                item: 1,
                slideMargin: 0,
                loop: true
            });
        });


        // Feature Slider

        $(document).ready(function () {
            $('#autoWidth').lightSlider({
                autoWidth: true,
                loop: true,
                onSliderLoad: function () {
                    $('#autoWidth').removeClass('cS-hidden');
                }
            });
        });



        // for fixed menue when scroll

        $(window).scroll(function(){
            if($(document).scrollTop() > 50){
                $('.navigation').addClass('fix-nav');
            }
            else{
                $('.navigation').removeClass('fix-nav');
            }
        })

        // for responsive menue
        $(document).ready(function(){
            $('.toggle').click(function(){
                $('.toggle').toggleClass('active')
                $('.navigation').toggleClass('active')
            })
        })

        $(document).ready(function(){
            $('.more').click(function(){
                $('.more').toggleClass('active')
                $('.navigation').toggleClass('active')
            })
        })


</script>

    <!-- script ------------->
    <script type="text/javascript">

        // For search bar

        $(document).on('click', '.search', function () {
            $('.search-bar').addClass('search-bar-active')
        });

        $(document).on('click', '.search-cancel', function () {
            $('.search-bar').removeClass('search-bar-active')
        });


        // login-sign-up-form
        $(document).on('click', '.user,.already-account', function () {
            $('.form').addClass('login-active').removeClass('sign-up-active')
        });


        $(document).on('click', '.sign-up-btn', function () {
            $('.form').addClass('sign-up-active').removeClass('login-active')
        });



        $(document).on('click', '.form-cancel', function () {
            $('.form').removeClass('login-active').removeClass('sign-up-active')
        });




        // full-slider-script


    </script>