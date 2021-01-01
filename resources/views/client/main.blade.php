<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ++++++++++++++++Need to SortOut+++++++++++++++++++ -->
    <!-- ====================Took From Home Page================= -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/landing-styles.css" />
    <title>Home - Girlscript Goa</title>
    <!----------------------Favicon---------------------->
    <link rel="shortcut icon" type="image/jpg" href="/assets/Favicon.svg" />


    <!-- ====================Took From Team Page================= -->

    <!-- <title>Our Team - GirlScript Goa</title> -->

    <!-----Owl-carousel------------------------>
    <link rel="stylesheet" href=" {{asset('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}" />


    <!------------Bootstrap--------------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>


    <!----------------Stylesheet link-------------------->
    <link rel="stylesheet" href="../css/Team Style.css" />



</head>

<body>
    <!--------------------Navbar-------------------->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="./assets/GSLogolong 3.svg" alt="GirlScript Goa Logo">
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/team">Team</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/events">Events</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!---------------------Navbar End------------------------->

    <!-- Content -->
    @yield('content')

    <!-- Scripts -->
    @yield('scripts')

</body>

<footer>

</footer>

</html>