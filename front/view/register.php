<?php
//include 'headerfront.php';
include '../Controller/UserController.php';
$userC = new UserContoller();

$error = "";

// create adherent
$user = null;
// $listeQuestion=$reponseC->afficherQuestions(); 
if (

    isset($_POST["username"]) &&
    isset($_POST["password"]) &&
    isset($_POST["email"])
    && strlen($_POST["username"]) > 3
    &&  preg_match(" /^.+@.+\.[a-zA-Z]{2,}$/ ", $_POST["email"])

) {

    $error = " username must be >3  ";


    if (

        !empty($_POST['username']) &&
        !empty($_POST["password"]) &&
        !empty($_POST["email"])

        // !empty($_POST["CategorieId"])
    ) {
        $user = new User(

            $_POST['username'],
            $_POST['email'],
            $_POST["password"],
            'USER'

        );
        $userC->ajouterUtilisateur($user);
    } else
        $error = "Missing information";
}


?>


<!--end navbar-->
</div>
<!--end container-->
</div>
<!--============ End Main Navigation ================================================================-->
<!--============ Hero Form ==========================================================================-->

<div class="collapse" id="collapseMainSearchForm">
    <form class="hero-form form">
        <div class="container">
            <!--Main Form-->
            <div class="main-search-form">
                <div class="form-row">
                    <div class="col-md-3 col-sm-3">
                        <div class="form-group">
                            <label for="what" class="col-form-label">What?</label>
                            <input name="keyword" type="text" class="form-control small" id="what" placeholder="What are you looking for?">
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="form-group">
                            <label for="input-location" class="col-form-label">Where?</label>
                            <input name="location" type="text" class="form-control small" id="input-location" placeholder="Enter Location">
                            <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="form-group">
                            <label for="category" class="col-form-label">Category?</label>
                            <select name="category" id="category" class="small" data-placeholder="Select Category">
                                <option value="">Select Category</option>
                                <option value="1">Computers</option>
                                <option value="2">Real Estate</option>
                                <option value="3">Cars & Motorcycles</option>
                                <option value="4">Furniture</option>
                                <option value="5">Pets & Animals</option>
                            </select>
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <button type="submit" class="btn btn-primary width-100 small">Search</button>
                    </div>
                    <!--end col-md-3-->
                </div>
                <!--end form-row-->
            </div>
            <!--end main-search-form-->
            <!--Alternative Form-->
            <div class="alternative-search-form">
                <a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse" aria-expanded="false" aria-controls="collapseAlternativeSearchForm"><i class="fa fa-plus"></i>More Options</a>
                <div class="collapse" id="collapseAlternativeSearchForm">
                    <div class="wrapper">
                        <div class="form-row">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-xs-grid d-flex align-items-center justify-content-between">
                                <label>
                                    <input type="checkbox" name="new">
                                    New
                                </label>
                                <label>
                                    <input type="checkbox" name="used">
                                    Used
                                </label>
                                <label>
                                    <input type="checkbox" name="with_photo">
                                    With Photo
                                </label>
                                <label>
                                    <input type="checkbox" name="featured">
                                    Featured
                                </label>
                            </div>
                            <!--end col-xl-6-->
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                <div class="form-row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input name="min_price" type="text" class="form-control small" id="min-price" placeholder="Minimal Price">
                                            <span class="input-group-addon small">$</span>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <input name="max_price" type="text" class="form-control small" id="max-price" placeholder="Maximal Price">
                                            <span class="input-group-addon small">$</span>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <select name="distance" id="distance" class="small" data-placeholder="Distance">
                                                <option value="">Distance</option>
                                                <option value="1">1km</option>
                                                <option value="2">5km</option>
                                                <option value="3">10km</option>
                                                <option value="4">50km</option>
                                                <option value="5">100km</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                </div>
                                <!--end form-row-->
                            </div>
                            <!--end col-xl-6-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end wrapper-->
                </div>
                <!--end collapse-->
            </div>
            <!--end alternative-search-form-->
        </div>
        <!--end container-->
    </form>
    <!--end hero-form-->
</div>
<!--end collapse-->
<!--============ End Hero Form ======================================================================-->
<!--============ Page Title =========================================================================-->
<div class="page-title">
    <div class="container">
    </div>
    <!--end container-->
</div>
<!--============ End Page Title =====================================================================-->
<div class="background"></div>
<!--end background-->
</div>
<!--end hero-wrapper-->
</header>
<!--end hero-->

<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Trotti | OrderNow</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo (2).png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="page sub-page">
        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header class="hero">
            <div class="hero-wrapper">
                <!--============ Secondary Navigation ===============================================================-->
                <?php require_once('header.php'); ?>

                <!--============ End Secondary Navigation ===========================================================-->

                <!--============ End Main Navigation ================================================================-->
                <!--============ Hero Form ==========================================================================-->


                <!--end collapse-->
                <!--============ End Hero Form ======================================================================-->
                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>Register</h1>
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <div class="background"></div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
            </section>
            <!--end hero-->

            <!--*********************************************************************************************************-->
            <!--************ CONTENT ************************************************************************************-->
            <!--*********************************************************************************************************-->
            <section class="content">
                <section class="block">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                                <form class="form clearfix" method="POST">
                                    <div class="form-group">
                                        <label for="name" class="col-form-label required">Your Name</label>
                                        <input name="username" type="text" class="form-control" id="username" placeholder="Your Name" required>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="email" class="col-form-label required">Email</label>
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="password" class="col-form-label required">Password</label>
                                        <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="repeat_password" class="col-form-label required">Repeat Password</label>
                                        <input name="repeat_password" type="password" class="form-control" id="repeat_password" placeholder="Repeat Password" required>
                                    </div>
                                    <!--end form-group-->
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <label>
                                            <input type="checkbox" name="newsletter" value="1">
                                            Confirmer inscription
                                        </label>
                                        <input type="submit" class="btn btn-primary" value="Register"></input>
                                    </div>
                                </form>
                                <hr>
                                <p>
                                    By clicking "Register" button, you agree with our <a href="#" class="link">Terms & Conditions.</a>
                                </p>
                            </div>
                            <!--end col-md-6-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </section>
                <!--end block-->
            </section>
            <!--end content-->

            <!--*********************************************************************************************************-->
            <!--************ FOOTER *************************************************************************************-->
            <!--*********************************************************************************************************-->

    </div>


</body>

</html>
<script src="front/assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="front/assets/js/popper.min.js"></script>
<script type="text/javascript" src="front/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
<script src="front/assets/js/selectize.min.js"></script>
<script src="front/assets/js/masonry.pkgd.min.js"></script>
<script src="front/assets/js/icheck.min.js"></script>
<script src="front/assets/js/jquery.validate.min.js"></script>
<script src="front/assets/js/custom.js"></script>
<!--end content-->

<!--*********************************************************************************************************-->
<!--************ FOOTER *************************************************************************************-->
<!--*********************************************************************************************************-->

<!--end footer-->
</div>
<!--end page-->

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
<script src="assets/js/selectize.min.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/icheck.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/custom.js"></script>

</body>

</html>