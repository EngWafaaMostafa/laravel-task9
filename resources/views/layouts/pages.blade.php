<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('includes.header')
        <!-- end header section -->

        <!-- slider section -->
        @include('includes.slider')
        <!-- end slider section -->
    </div>

    @yield('content')
    <!-- Footer Area -->
    @include('includes.footer')
    <!-- footer section -->

    @include('includes.footerJs')
</body>

</html>