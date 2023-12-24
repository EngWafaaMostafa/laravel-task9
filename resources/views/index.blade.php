<!DOCTYPE html>
<html>

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

    <!-- about section -->
    @include('includes.section')
    <!-- end about section -->

    <!-- service section -->
    @include('includes.servicesection')
    <!-- end service section -->

    <!-- client section -->
    @include('includes.client')
    <!-- end client section -->

    <!-- contact section -->
    @include('includes.contact')
    <!-- end contact section -->

    <!-- team section -->
    @include('includes.teamsection')
    <!-- end team section -->

    <!-- info section -->
    @include('includes.info')
    <!-- end info_section -->

    <!-- footer section -->
    @include('includes.footer')
    <!-- footer section -->

    @include('includes.footerJs')
</body>

</html>