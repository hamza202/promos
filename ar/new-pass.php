<!doctype html>
<html class="no-js">

<!-- Mirrored from tvlgiao.github.io/html-general-demo/general/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jan 2018 08:24:18 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login or Register || General Online Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->

    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Archivo+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/fileinput.css">

    <link rel="stylesheet" href="css/space.css">

    <!-- modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<?php include('header.php') ?>

<!-- Header Area End -->
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-title text-center">
                    <h1>كلمة مرور جديده </h1>
                    <div class="top-page">
                        <ul>
                            <li><a href="index.php">الرئيسية </a></li>
                            <li>> كلمة مرور جديده  </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area End -->
<!-- Login Area Start -->
<div class="login-content section-padding">
    <div class="container">
        <div class="row">
            <h2 class="my-account-title text-center"
                style=" background-color: #d82800; color: white; border-color:#d82800; ">كلمة مرور جديده</h2>
            <div class="col-xs-12">
                <div class="login-form">

                    <div class="col-sm-6">
                        <div class="login-content">
                            <form action="#" class="login">
                                <p class="form-row-wide ">
                                    <label >
                                        كلمة المرور الجديدة
                                        <span class="required">*</span>
                                    </label>
                                    <input type="password" id="password" required/>
                                </p>
                                <p class="form-row-wide">
                                    <label>
                                         تأكيد كلمة المرور
                                        <span class="required">*</span>
                                    </label>
                                    <input id="confirm_password" type="password" required/>
                                </p>


                                <div class="clear"></div>
                                <p class="form-row">
                                    <input type="submit" value="استرجاع" class="button">


                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Login Area End -->

<?php include('footer.php') ?>
<!-- all js here -->
<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- bootstrap js -->
<script src="js/fileinput.min.js"></script>
<script>
    $(document).on('ready', function () {
        $("#b2b").fileinput();
    });
</script>
<script src="js/bootstrap-select.min.js"></script>
<!-- owl.carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- jquery-ui js -->
<script src="js/jquery-ui.min.js"></script>
<!-- Img Zoom js -->
<script src="js/jquery.simpleLens.min.js"></script>
<!-- fancybox js -->
<script src="js/jquery.fancybox.pack.js"></script>
<!-- jquery countdown js -->
<script src="js/jquery.countdown.min.js"></script>
<!-- Nivo Slider JS -->
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<!-- meanmenu js -->
<script src="js/jquery.meanmenu.js"></script>
<!-- wow js -->
<script src="js/wow.min.js"></script>
<script>


    new WOW().init();


</script>
<!-- scrollUp JS -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- plugins js -->
<script src="js/plugins.js"></script>
<!-- main js -->
<script src="js/main.js"></script>
</body>

</html>
