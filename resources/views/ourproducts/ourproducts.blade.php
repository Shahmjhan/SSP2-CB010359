<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Jhans Unifrom Store</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--

    TemplateMo 546 Sixteen Clothing

    https://templatemo.com/tm-546-sixteen-clothing

    -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
{{--<header class="">--}}
{{--    <nav class="navbar navbar-expand-lg">--}}
{{--        <div class="container">--}}
{{--            <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse" id="navbarResponsive">--}}
{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/">Home--}}
{{--                            <span class="sr-only">(current)</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item active">--}}
{{--                        <a class="nav-link" href="products.html">Our Products</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="about.html">About Us</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="contact.html">Contact Us</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</header>--}}
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html"><h2>Jhans <em>Unifrom Store</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('products')}}">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>

                    <li class="nav-item">
                    @if (Route::has('login'))

                        @auth

                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">
                                    <i class="fa-duotone fa-cart-shopping"></i>
                                    Cart[]</a>
                            </li>

                            <li><a class="nav-link" href="{{ route('dashboards') }}">Dashboard</a></li>
                            {{--                            <li>--}}
                            {{--                            <form method="POST" action="{{ route('logout') }}" x-data>--}}
                            {{--                                @csrf--}}

                            {{--                                    <a class="nav-link" href="{{ route('logout') }}"--}}
                            {{--                                       @click.prevent="$root.submit();">--}}
                            {{--                                        {{ __('Log Out') }}--}}
                            {{--                                    </a>--}}

                            {{--                            </form>--}}
                            {{--                            </li>--}}

                        @else
                            <li><a class="nav-link" href="{{ route('login') }}">Log in</a></li>

                            @if (Route::has('register'))
                                <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                                @endif
                                @endauth
                                @endif
                                </li>


                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Page Content -->
<div class="page-heading products-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>New Arrivals of Products</h4>
                    <h2>Jhans Uniform Store</h2>
                </div>
            </div>
        </div>
    </div>
</div>


@include('ourproducts.products')


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <p>Copyright &copy; 2024 Jhans Uniform Store, Ltd.

                        - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">Shahmee Jhan</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>


<script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
</script>


</body>

</html>
