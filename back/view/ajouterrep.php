

<?php
include_once 'C:/xamppp/htdocs/Reclamation/Models/reponse.php';
    include_once 'C:/xamppp/htdocs/Reclamation/controler/reponseC.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

require 'C:/xamppp/htdocs/Reclamation/Views/back/PHPMailer-master/src/Exception.php';
require 'C:/xamppp/htdocs/Reclamation/Views/back/PHPMailer-master/src/PHPMailer.php';
require 'C:/xamppp/htdocs/Reclamation/Views/back/PHPMailer-master/src/SMTP.php';  
$a=$_GET['id'];

// if (isset($_POST['contenu'] )  &&  isset($_POST["feedback"] )) 
// {   
        
//          $reponse = new reponse(NULL, $a, $_POST['contenu'], $_POST['feedback']);
//         $reponseC = new reponseC();
//         $reponseC->ajouterreponse($reponse);
//         header('Location:afficherrep.php');
//         $mail = new PHPMailer;
         
//         $mail->SMTPDebug = 3;                               // Enable verbose debug output
        
//         $mail->isSMTP();                                      // Set mailer to use SMTP
//         $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//         $mail->SMTPAuth = true;                               // Enable SMTP authentication
//         $mail->Username = 'slimscholescs@gmail.com';                 // SMTP username
//         $mail->Password = '100slimbouchibacs1.6';                           // SMTP password
//         //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//         $mail->Port = 587;                                    // TCP port to connect to
        
//         $mail->From='slimscholescs@gmail.com';
//         $mail->FromName="slimscholescs";
//         $mail->addAddress('slimscholescs@gmail.com', 'slimscholescs');     // Add a recipient
//         $mail->isHTML(true);                                  // Set email format to HTML
        
//         $mail->Subject = 'verification';
//         $mail->Body    = 'verifier reservation, nombre de personne :</b> veuillez attendre un autre email de confirmation et un voucher ';
//         $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//         mail("slimscholescs@gmail.com","test","confirmation","slimscholescs@gmail.com");
//         if(!$mail->send()) {
//             echo 'Message could not be sent.';
//             echo 'Mailer Error: ' . $mail->ErrorInfo;
//         } else {
//             echo 'Message has been sent';
//         }
// }
if (isset($_POST['contenu'] )  &&  isset($_POST["feedback"] )) 
{   
        
         $reponse = new reponse(NULL, $a, $_POST['contenu'],
          $_POST['feedback']);
        $reponseC = new reponseC();
        $reponseC->ajouterreponse($reponse);
        header('Location:afficherrep.php');
       
        $mail = new PHPMailer;
                 
                 $mail->SMTPDebug = 3;                               // Enable verbose debug output
                 
                 $mail->isSMTP();                                      // Set mailer to use SMTP
                 $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                 $mail->SMTPAuth = true;                               // Enable SMTP authentication
                 $mail->Username = 'slimscholescs@gmail.com';                 // SMTP username
                 $mail->Password = '100slimbouchibacs1.6';                           // SMTP password
                 //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, ssl also accepted
                 $mail->Port = 587;                                    // TCP port to connect to
                 
                 $mail->From='slimscholescs@gmail.com';
                 $mail->FromName="slimscholescs";
                 $mail->addAddress('slimscholescs@gmail.com', 'slimscholescs');     // Add a recipient
                 $mail->isHTML(true);                                  // Set email format to HTML
                 
                 $mail->Subject = 'verification';
                 $mail->Body    = 'on a pris en considération votre reclamation :</b> veuillez consulter notre reponse s ';
                 $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                 mail("slimscholescs@gmail.com","test","confirmation","slimscholescs@gmail.com");
                 if(!$mail->send()) {
                     echo 'Message could not be sent.';
                     echo 'Mailer Error: ' . $mail->ErrorInfo;
                 } else {
                     echo 'Message has been sent';
                 }



}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="C:/xampp/htdocs/Reclamation/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="C:/xampp/htdocs/Reclamation/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Now UI Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="C:/xampp/htdocs/Reclamation/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    CT
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Creative Tim
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                <ul class="nav">
                    <li class="active">
                        <a href="../examples/dashboard.html">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="../front/afficherrec.php">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Reclamations</p>
                        </a>
                    </li>
                    <li>
                        <a href="../back/afficherrep.php">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Reponses</p>
                        </a>
                    </li>
                </ul>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </span>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons media-2_sound-wave"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons location_world"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons users_single-02"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


<br><br><br><br>
<button type="button" class="btn btn-info"><a href="../front/afficherrec.php">Retour à la liste</a></button>        <hr>

         <form action="" method="POST">
            <table border="1" align="center">
            
                
            <tr> <td>  <label>contenu </label>  </td> 
                   <td> <input type="text" name="contenu" id="contenu" maxlength="100"> </td> </tr>
                  
                   <tr> <td>  <label>feedback </label>  </td> 

                   <td> <input type="text" name="feedback" id="feedback" maxlength="100"> </td> </tr>
                          
                <tr> <td> <input type="submit" name="submit" value="submit"></td></tr>
            </table>
        </form>
		<br><br><br><br><br><br><br><br>
		<br><br><br><br>
		<br><br><br><br><br>
        <br><br><br><br>

            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, Designed by
                        <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.js?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
    });
</script>

</html>