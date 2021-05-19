<?php
use PHPMailer\PHPMailer\PHPMailer;
include_once '../Model/client.php';
include_once '../Controller/clientC.php';
require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/SMTP.php";
require_once "PHPMailer/src/Exception.php";

if (isset($_GET['CIN'])){
    $clientC=new clientC();
     $result=$clientC-> recupMail($_GET['CIN']);
   foreach($result as $row)
   {
       $Email=$row['Email'];
   }
?>


<html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Web UI Kit &amp; Dashboard Template based on Bootstrap">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, web ui kit, dashboard template, admin template">

	<link rel="shortcut icon" href="../img/icons/icon-48x48.png" />

	<title>Tables | AdminKit Demo</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
	<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php">
          <span class="align-middle">Animali Backoffice</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="index.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle"> accueil </span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="Admins.php">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle"> Gestion Admins </span>
            </a>
					</li>

					<li class="sidebar-item active" >
						<a href="#ui" data-toggle="collapse" class="sidebar-link">
                        <i class="align-middle" data-feather="users"></i> <span class="align-middle"> Gestion des clients</span>
            </a>
            <ul id="ui" class="sidebar-dropdown list-unstyled collapse show" data-parent="#sidebar">
							<li class="sidebar-item "><a class="sidebar-link" href="afficherclient.php">Afficher liste des Client </a></li>
							<li class="sidebar-item active"><a class="sidebar-link" href="ajouterclient.php">Ajouter des clients</a></li>
							<li class="sidebar-item "><a class="sidebar-link" href="affichercartefid.php">Afficher liste des Carte fidelité</a></li>
							<li class="sidebar-item "><a class="sidebar-link" href="ajoutercartefid.php">Ajouter une Carte fidelité</a></li>
						</ul>

					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="afficherprod.php">
              <i class="align-middle" data-feather="box"></i> <span class="align-middle">Gestion des Produits </span>
            </a>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="afficherlignecommande.php">
              <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Gestion des commandes </span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="afficherveto.php">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle"> Gestions des veterinaires </span>
            </a>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="affichersav.php">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle"> Gestion des SAV </span>
            </a>
						
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="Afficherlivraison.php">
              <i class="align-middle" data-feather="truck"></i> <span class="align-middle"> Gestion des livraisons </span>
            </a>
					</li>

					

				
			</div>
		</nav>
        <div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
          <i class="hamburger align-self-center"></i>
        </a>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                <img src="img/avatars/avatar-1.jpg" class="avatar img-fluid rounded mr-1" alt="Aymen Mzoughi" /> <span class="text-dark">Aymen Mzoughi</span>
              </a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
            <main class="content">
            
            
                   
<div class="col-lg-7">

          <div class="section-title">
            <h4 class="title">  Envoyer un mail </h4>
          </div>

          <form method="post" >
            <div class="row">
              <div class="form-group col-lg-6">
                <input type="email" class="form-control" value="<?PHP echo $Email ?>" name="Email" id="Email"  disabled  > 
              </div>
              <div class="form-group col-lg-12">
                <textarea name="body" class="form-control" placeholder="Type your message"  id="body" rows="8"></textarea>
              </div>
            </div>
            <button type="submit" class="andro_btn-custom primary" name="sumbit" id="submit">Send Message</button>
          </form>

        </div>
    

</tr>
<?php

if ( isset( $_POST['submit'] ) ) {
   
    $Email = $_POST['Email']; 
     
}
$mail=new PHPMailer();
$mail->IsSMTP();
$mail -> Host="smtp.gmail.com";
$mail ->SMTPAuth=true;
$mail ->Username="animalitn2021@gmail.com";
$mail ->Password='animali123';
$mail ->Port=465;
$mail ->SMTPSecure='ssl';
$mail->isHTML(true);
$mail ->setFrom('mtacit2@gmail.com');
$mail->addAddress($Email);
$mail->Subject = " Service Clientele ";
$mail->Body= $_POST['body'];
if($mail->send())
	{
	   echo "Service en ligne";	}
	else
	{
		echo $mail->ErrorInfo;
	}
  
   
}
?>
</table>
        </div>
    </div>

                        
</main>


</div>
</div>

<script src="js/vendor.js"></script>
<script src="js/app.js"></script>
</body>

</html>

