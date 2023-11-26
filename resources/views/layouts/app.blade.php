<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Software Development Agency</title>
    <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.png" type="image/png">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/LineIcons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/default.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

</head>

<body>


    <!--HEADER START-->

    @include('components.header')

    <!--HEADER ENDS-->

    <div>
        @yield('content')
    </div>

    <!-- FOOTER START -->
    @include('components.footer')

    <!-- FOOTER ENDS -->


    <!--BACK TOP TOP -->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>








    <script src="{{asset('assets')}}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{asset('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/js/popper.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('assets')}}/js/parallax.min.js"></script>
    <script src="{{asset('assets')}}/js/waypoints.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.counterup.min.js"></script>
    <script src="{{asset('assets')}}/js/jquery.appear.min.js"></script>
    <script src="{{asset('assets')}}/js/scrolling-nav.js"></script>
    <script src="{{asset('assets')}}/js/jquery.easing.min.js"></script>
    <script src="{{asset('assets')}}/js/main.js"></script>



<script>
    $(document).ready(function() {
        // Get the current URL
        var currentUrl = window.location.href;

        // Remove trailing slash if present
        currentUrl = currentUrl.replace(/\/$/, "");

        // Iterate through each navigation link
        $(".navbar-nav a").each(function() {
            // Get the link's href attribute
            var linkHref = $(this).attr("href");

            // Remove trailing slash if present
            linkHref = linkHref.replace(/\/$/, "");

            // Check if the link's href is the same as the current URL
            if (linkHref === currentUrl) {
                // Add the 'active' class to the parent 'li' element
                $(this).closest("li").addClass("active");
            }
        });
    });
</script>


</body>

</html>


