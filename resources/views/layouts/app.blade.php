<?php
use App\Http\Controllers\ProductController;
$total =0;
if(Session::has('user'))
{
    $total = ProductController::cartItem();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--

    TemplateMo 546 Sixteen Clothing

    https://templatemo.com/tm-546-sixteen-clothing

    -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/css/templatemo-sixteen.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/css/owl.css')}}">

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
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{url('')}}"><h2>Maimalee <em>Furniture</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                @php if (!isset($navs)) $navs = []; @endphp
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item  @isset($navs['in_home']) active @endisset">
                        <a class="nav-link" href="{{url('')}}">Home
                            @isset($navs['in_home']) <span class="sr-only">(current)</span> @endisset
                        </a>
                    </li>
                    <li class="nav-item @isset($navs['in_products']) active @endisset">
                        <a class="nav-link" href="{{url('products')}}">
                            Products
                            @isset($navs['in_products']) <span class="sr-only">(current)</span> @endisset
                        </a>
                    </li>
                    @auth
                        <li class="nav-item">
                            
                            <a class="nav-link" href="{{url('cart')}}">
                                
                                <i class="fa fa-shopping-cart"></i> Cart ({{ $total }})
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('logout')}}">
                                <i class="fa fa-sign-out"></i> Logout
                            </a>
                        </li>
                    @else
                        <li class="nav-item @isset($navs['in_about_us']) active @endisset">
                            <a class="nav-link" href="{{url('about-us')}}">
                                About Us
                                @isset($navs['in_about_us']) <span class="sr-only">(current)</span> @endisset
                            </a>
                        </li>
                        <li class="nav-item @isset($navs['in_contact_us']) active @endisset">
                            <a class="nav-link" href="{{url('contact-us')}}">
                                Contact Us
                                @isset($navs['in_contact_us']) <span class="sr-only">(current)</span> @endisset
                            </a>
                        </li>

                        

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('login')}}">
                                <i class="fa fa-sign-in"></i> Login
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Page Content -->
@yield('content')

<footer class="bg-dark mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <p class="text-white font-weight-bold">Copyright &copy; {{date('Y')}} Maimalee Furniture.</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<!-- Additional Scripts -->
<script src="{{asset('assets/assets/js/custom.js')}}"></script>
<script src="{{asset('assets/assets/js/owl.js')}}"></script>
<script src="{{asset('assets/assets/js/slick.js')}}"></script>
<script src="{{asset('assets/assets/js/isotope.js')}}"></script>
<script src="{{asset('assets/assets/js/accordions.js')}}"></script>


<script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
        if (!cleared[t.id]) {                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value = '';         // with more chance of typos
            t.style.color = '#fff';
        }
    }
</script>


</body>

</html>
