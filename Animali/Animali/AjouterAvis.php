<?php
use PHPMailer\PHPMailer\PHPMailer;
include_once '../Entities/Avis.php';
include_once '../Controller/AvisC.php';
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";
if (
isset($_POST["nom"]) &&
isset($_POST["prenom"]) &&
isset($_POST["note"])
&&isset($_POST["message"])&&
isset($_POST["email"])) 
  { 
  if(!empty($_POST["nom"]) &&
  !empty($_POST["prenom"]) &&
  !empty($_POST["email"])&&
  !empty($_POST["note"])
  &&!empty($_POST["message"])&&($_POST["note"]!="Select")) 
  {$avis = null;
  $avisC = new AvisC();
$avis= new Avis($_POST['message'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['note']);
$avisC->ajouteravis($avis);
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$mail=new PHPMailer();
$mail->IsSMTP();
$mail -> Host="smtp.gmail.com";
$mail ->SMTPAuth=true;
$mail ->Username="animalitn2021@gmail.com";
$mail ->Password='animali123';
$mail ->Port=465;
$mail ->SMTPSecure='ssl';
$mail->isHTML(true);
$mail ->setFrom('animalitn2021@gmail.com','Animali.tn');
$mail->addAddress($_POST["email"]);
$mail->Subject = " A propos votre Avis sur notre site Animali.tn ";
$mail->Body = "Bonjour Madame/Monsieur " .$prenom." ".$nom."  Animali a bien  reçu votre avis pour le ". date("Y/m/d"). "  merci pour votre fidélité et votre confiance . ";
if($mail->send())
	{
	   echo " oui";	}
	else
	{
		echo $mail->ErrorInfo;
	}
  }}

 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from slidesigma.com/themes/html/petitudio/home-v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 14:03:34 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Petitdio - Pet Shop HTML Template</title>

  <!-- Vendor Stylesheets -->
  <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
  <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/plugins/slick.css">
  <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
  <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
  <script src="assets/js/formulaire1.js"></script>
  <!-- Icon Fonts -->
  <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome/css/all.min.css">

  <!-- Petitdio Style sheet -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

</head>

<body>

  <!-- Prealoder start -->
  <div class="andro_preloader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>
  <div class="modal fade andro_quick-view-modal" id="quickViewModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">

          <div class="close-btn close-dark close" data-dismiss="modal">
            <span></span>
            <span></span>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="col-md-5">
                <img src="assets/img/products/9.png" alt="product">
              </div>
              <div class="col-md-7">

                <div class="andro_product-single-content">

                  <div class="andro_rating-wrapper">
                    <div class="andro_rating">
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star active"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <span>4 Stars</span>
                  </div>

                  <h3> Pet Food Meat </h3>

                  <div class="andro_product-price">
                    <span>8$</span>
                    <span>14$</span>
                  </div>

                  <p class="andro_product-excerpt">Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>

                  <form class="andro_product-atc-form">

                    <div class="andro_product-variation-wrapper">
                      <div class="form-group">
                        <select class="form-control" name="amount">
                          <option value="">Select Amount</option>
                          <option value="1">1 Kilo</option>
                          <option value="2">Packets </option>
                          <option value="3">3 Packets </option>
                          <option value="4">4 Packets </option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control" name="breed">
                          <option value="">Select a Breed</option>
                          <option value="italian">Italian</option>
                          <option value="egyptian">Egyptian</option>
                        </select>
                      </div>
                    </div>

                    <div class="qty-outter">
                      <a href="product-single.html" class="andro_btn-custom">Buy Now</a>
                      <div class="qty">
                        <span class="qty-subtract"><i class="fa fa-minus"></i></span>
                        <input type="text" name="qty" value="1">
                        <span class="qty-add"><i class="fa fa-plus"></i></span>
                      </div>
                    </div>

                  </form>

                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Quick View Modal End -->

  <!-- Aside (Right Panel) -->
  <aside class="andro_aside andro_aside-right">
    <div class="sidebar">

      <!-- Popular Categories Start -->
      <div class="sidebar-widget widget-categories-icons">
        <h5 class="widget-title">Popular Categories</h5>
        <div class="row">

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-pawprint-1"></i>
                <h5>Canned Food</h5>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-snack"></i>
                <h5>Dental Chews</h5>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-cat"></i>
                <h5>Dry Food </h5>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-peanut"></i>
                <h5>Extrals </h5>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-dog-treat"></i>
                <h5>Treats  </h5>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="andro_icon-block text-center has-link">
              <a href="#">
                <i class="flaticon-dog-bowl"></i>
                <h5>Pea Food  </h5>
              </a>
            </div>
          </div>

        </div>
      </div>
      <!-- Popular Categories End -->

  

    </div>
  </aside>
  <div class="andro_aside-overlay aside-trigger-right"></div>

  <!-- Aside (Mobile Navigation) -->
  <aside class="andro_aside andro_aside-left">
    <a class="navbar-brand" href="index-2.html"> <img src="assets/img/logo.png" alt="logo"> </a>

    <ul>
      <li class="menu-item menu-item-has-children">
        <a href="#">Home Pages</a>
        <ul class="sub-menu">
          <li class="menu-item"> <a href="index-2.html">Home v1</a> </li>
          <li class="menu-item"> <a href="home-v2.html">Home v2</a> </li>
          <li class="menu-item"> <a href="home-v3.html">Home v3</a> </li>
        </ul>
      </li>
      <li class="menu-item menu-item-has-children">
        <a href="#">Blog</a>
        <ul class="sub-menu">
          <li class="menu-item menu-item-has-children">
            <a href="blog-grid.html">Blog Archive</a>
            <ul class="sub-menu">
              <li class="menu-item"> <a href="blog-grid.html">Grid View</a> </li>
              <li class="menu-item"> <a href="blog-list.html">List View</a> </li>
              <li class="menu-item"> <a href="blog-masonry.html">Masonry View</a> </li>
            </ul>
          </li>
          <li class="menu-item"> <a href="post-single.html">Blog Single</a> </li>
        </ul>
      </li>
      <li class="menu-item menu-item-has-children">
        <a href="#">Pages</a>
        <ul class="sub-menu">
          <li class="menu-item"> <a href="about-us.html">About Us</a> </li>
          <li class="menu-item"> <a href="login.html">Login</a> </li>
          <li class="menu-item"> <a href="register.html">Sign Up</a> </li>
          <li class="menu-item"> <a href="checkout.html">Checkout</a> </li>
          <li class="menu-item"> <a href="cart.html">Cart</a> </li>
          <li class="menu-item"> <a href="wishlist.html">Wish List</a> </li>
          <li class="menu-item"> <a href="legal.html">Legal</a> </li>
          <li class="menu-item"> <a href="error.html">Error 404</a> </li>
        </ul>
      </li>
      <li class="menu-item menu-item-has-children">
        <a href="#">Shop Pages</a>
        <ul class="sub-menu">
          <li class="menu-item"> <a href="shop-v1.html"> Shop v1 (Default) </a> </li>
          <li class="menu-item"> <a href="shop-v2.html"> Shop v2 (Full Width) </a> </li>
          <li class="menu-item"> <a href="shop-v3.html"> Shop v3 (No Sidebar) </a> </li>
          <li class="menu-item"> <a href="shop-v4.html"> Shop v4 (List view) </a> </li>
        </ul>
      </li>
      <li class="menu-item"> <a href="contact-us.html">Contact Us</a> </li>
    </ul>

  </aside>
  <div class="andro_aside-overlay aside-trigger-left"></div>

  <!-- Header Start -->
  <header class="andro_header header-2 can-sticky">

   <!-- Topheader Start -->
<div class="andro_header-top">
  <div class="container">
    <div class="andro_header-top-inner">
      <ul class="andro_header-top-sm andro_sm">
        <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
        <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
        <li> <a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>
        <li> <a href="#"> <i class="fab fa-youtube"></i> </a> </li>
      </ul>
      <ul class="andro_header-top-links">
        <li class="menu-item"><a href="compte.php"> My Account </a></li>
        <li class="menu-item menu-item-has-children">
          <a href="#"> <span class="andro_current-currency-text">Currency</span> (USD) </a>
          <ul class="sub-menu sub-menu-left">
            <li> <a href="#">United States Dollar (USD)</a> </li>
            <li> <a href="#">Kuwait Dinar (KWD)</a> </li>
            <li> <a href="#">Pound Sterling (GBP)</a> </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- Topheader End -->

    <!-- Middle Header Start -->
    <div class="andro_header-middle">
      <div class="container">
        <nav class="navbar">
          <!-- Logo -->
          <a class="navbar-brand" href="index-2.html"> <img src="assets/img/logo.png" alt="logo"> </a>

          <!-- Menu -->
          <ul class="navbar-nav">
            <li class="menu-item menu-item-has-children">
              <a href="#">Home Pages</a>
              <ul class="sub-menu">
                <li class="menu-item"> <a href="index-2.html">Home v1</a> </li>
                <li class="menu-item"> <a href="home-v2.html">Home v2</a> </li>
                <li class="menu-item"> <a href="home-v3.html">Home v3</a> </li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="#">Blog</a>
              <ul class="sub-menu">
                <li class="menu-item menu-item-has-children">
                  <a href="blog-grid.html">Blog Archive</a>
                  <ul class="sub-menu">
                    <li class="menu-item"> <a href="blog-grid.html">Grid View</a> </li>
                    <li class="menu-item"> <a href="blog-list.html">List View</a> </li>
                    <li class="menu-item"> <a href="blog-masonry.html">Masonry View</a> </li>
                  </ul>
                </li>
                <li class="menu-item"> <a href="post-single.html">Blog Single</a> </li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="#">Pages</a>
              <ul class="sub-menu">
                <li class="menu-item"> <a href="about-us.html">About Us</a> </li>
                <li class="menu-item"> <a href="login.html">Login</a> </li>
                <li class="menu-item"> <a href="register.html">Sign Up</a> </li>
                <li class="menu-item"> <a href="checkout.html">Checkout</a> </li>
                <li class="menu-item"> <a href="cart.html">Cart</a> </li>
                <li class="menu-item"> <a href="wishlist.html">Wish List</a> </li>
                <li class="menu-item"> <a href="legal.html">Legal</a> </li>
                <li class="menu-item"> <a href="error.html">Error 404</a> </li>
              </ul>
            </li>
            <li class="menu-item menu-item-has-children mega-menu-wrapper">
              <a href="shop-v1.html">Shop</a>
              <ul class="sub-menu">
                <li>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="mega-menu-item">
                          <h6>Membership Delivery</h6>
                          <p>
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                            making it over 2000 years old.
                          </p>
                          <a href="login.html" class="andro_btn-custom shadow-none btn-sm">Become a Member</a>
                        </div>
                      </div>
                      <div class="offset-lg-1 col-lg-3">
                        <div class="mega-menu-item">
                          <h6>Shop Pages</h6>
                          <a href="shop-v1.html">Shop v1 (Default)</a>
                          <a href="shop-v2.html">Shop v2 (Full Width)</a>
                          <a href="shop-v3.html">Shop v3 (No Sidebar)</a>
                          <a href="shop-v4.html">Shop v4 (List view)</a>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="mega-menu-item">
                          <h6>Product Details Pages</h6>
                          <a href="product-single.html">Product Details v1</a>
                          <a href="product-single-v2.html">Product Details v2</a>
                          <a href="#" class="coming-soon">Product Details v3 <span>Coming Soon</span></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </li>
              </ul>
            </li>
            <li class="menu-item"> <a href="contact-us.html">Contact Us</a> </li>
          </ul>

          <div class="andro_header-controls">

            <ul class="andro_header-controls-inner">
              <li class="andro_header-favorites"> <a href="wishlist.html" title="Your Wishlist"> <i class="flaticon-like"></i> </a> </li>
              <li class="andro_header-cart">
                <a href="cart.html" title="Your Cart">
                  <i class="flaticon-shopping-basket"></i>
                  <div class="andro_header-cart-content">
                    <span>9 Items</span>
                    <span>249.99$</span>
                  </div>
                </a>
              </li>
            </ul>

            <!-- Toggler -->
            <div class="aside-toggler aside-trigger-left">
              <span></span>
              <span></span>
              <span></span>
            </div>

          </div>
        </nav>
      </div>
    </div>
    <!-- Middle Header End -->

    <!-- Bottom Header Start -->
    <div class="andro_header-bottom">
      <div class="container">

        <div class="andro_header-bottom-inner">

          <!-- Search Form -->
          <div class="andro_search-adv">
            <form method="post">
              <div class="andro_search-adv-cats">
                <span>All Categories</span>

                <div class="sub-menu">
                  <div class="andro_dropdown-scroll">
                    <label>
                      <input type="checkbox" name="category1" value="food">
                      Canned Food
                      <i class="fas fa-check"></i>
                    </label>
                    <label>
                      <input type="checkbox" name="category2" value="home-care">
                      Cat Food 
                      <i class="fas fa-check"></i>
                    </label>
                    <label>
                      <input type="checkbox" name="category3" value="keto">
                      Beef Tomato
                      <i class="fas fa-check"></i>
                    </label>
                    <label>
                      <input type="checkbox" name="category4" value="baskets">
                      Dental Chews
                      <i class="fas fa-check"></i>
                    </label>
                    <label>
                      <input type="checkbox" name="category5" value="supplements">
                      Capsules 
                      <i class="fas fa-check"></i>
                    </label>
                    <label>
                      <input type="checkbox" name="category6" value="baby-kids">
                      Chicken Cutlets 
                      <i class="fas fa-check"></i>
                    </label>
                    <label>
                      <input type="checkbox" name="category7" value="serum">
                      Petwhisper Meet
                      <i class="fas fa-check"></i>
                    </label>
                  </div>

                </div>

              </div>
              <div class="andro_search-adv-input">
                <input type="text" class="form-control" placeholder="Look for Food Flower , Cat Food  " name="search" value="">
                <button type="submit" name="button"><i class="fa fa-search"></i></button>
              </div>
            </form>
          </div>

          <!-- Side navigation toggle -->
          <div class="aside-toggler aside-trigger-right desktop-toggler">
            <span></span>
            <span></span>
            <span></span>
          </div>

        </div>

      </div>
    </div>
    <!-- Bottom Header End -->

  </header>
  <!-- Header End -->

  <!-- Banner Start -->
  <div class="andro_banner banner-2">
    <div class="andro_banner-slider">
      <div class="andro_banner-slider-inner" style="background-image: url('assets/img/banner/1.jpg');">
        <div class="container">
          <div class="andro_banner-slider-text">
            <img src="assets/img/products/8.png" class="img-1" alt="product">
            <p>Use code <strong class="custom-primary">PETFOOD2233</strong> during checkout</p>
            <h1 style="background-image: url('assets/img/cta/3.jpg') "> Organic Cat Food   </h1>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula.</p>
            <a href="shop-v1.html" class="andro_btn-custom">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="andro_banner-slider-inner" style="background-image: url('assets/img/banner/2.jpg');">
        <div class="container">
          <div class="andro_banner-slider-text">
            <img src="assets/img/products/14.png" class="img-1" alt="product">
            <p>Use code <strong class="custom-primary">PETFOOD2233</strong> during checkout</p>
            <h1 style="background-image: url('assets/img/cta/2.jpg') "> Organic Exotic Food Flower  </h1>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula.</p>
            <a href="shop-v1.html" class="andro_btn-custom">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner End -->

  


          

          

          </div>
        </div>
        <!-- Sidebar End -->

      </div>

    </div>
  </div>
  <!-- Featured Products End -->
  <!-- FAQ & Contact Form Start -->
  <div class="section pt-0">
    <div class="container">
      <div class="row">

        <div class="col-lg-5 mb-lg-30">

          <div class="section-title">
            <h4 class="title">FAQ</h4>
          </div>

          <div class="accordion with-gap" id="generalFAQExample">
            <div class="card">
              <div class="card-header" data-toggle="collapse" role="button" data-target="#generalOne" aria-expanded="true" aria-controls="generalOne">
                What is Petitdio?
              </div>

              <div id="generalOne" class="collapse show" data-parent="#generalFAQExample">
                <div class="card-body">
                  Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" data-toggle="collapse" role="button" data-target="#generalTwo" aria-expanded="false" aria-controls="generalTwo">
                Getting Started with Petitdio
              </div>

              <div id="generalTwo" class="collapse" data-parent="#generalFAQExample">
                <div class="card-body">
                  Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" data-toggle="collapse" role="button" data-target="#generalThree" aria-expanded="false" aria-controls="generalThree">
                Do i have the latest version?
              </div>

              <div id="generalThree" class="collapse" data-parent="#generalFAQExample">
                <div class="card-body">
                  Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" data-toggle="collapse" role="button" data-target="#generalFour" aria-expanded="false" aria-controls="generalFour">
                How many times can I use Petitdio?
              </div>

              <div id="generalFour" class="collapse" data-parent="#generalFAQExample">
                <div class="card-body">
                  Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" data-toggle="collapse" role="button" data-target="#generalFive" aria-expanded="false" aria-controls="generalFive">
                How to migrate my website?
              </div>

              <div id="generalFive" class="collapse" data-parent="#generalFAQExample">
                <div class="card-body">
                  Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-7">

          <div class="section-title">
            <h4 class="title">  Ajouter un Avis </h4>
          </div>

          <form method="post" >
            <div class="row">
              <div class="form-group col-lg-6">
                <input type="text" placeholder="Prenom" class="form-control" name="prenom" id="prenom">
              </div>
              <div class="form-group col-lg-6">
                <input type="text" placeholder="Nom" class="form-control" name="nom" id="nom" >
              </div>
              <div class="form-group col-lg-6">
                <input type="email" placeholder="Email" class="form-control" name="email" id="email" >
              </div>
              <div class="form-group col-lg-12">
                <textarea name="message" class="form-control" placeholder="Type your message"  id="message" rows="8"></textarea>
              </div>
              <div class="form-group col-lg-12">
              <select class="form-control"  placeholder="rate" name="note" id="note" >
                <option>  Select  </option>
                  <option>1 Star</option>
                  <option>2 Stars</option>
                  <option>3 Stars</option>
                  <option>4Stars</option>
                  </select>
                </div>
            </div>
            <button type="submit" class="andro_btn-custom primary" name="button" onclick="test1()==true;">Send Message</button>
          </form>

        </div>

      </div>
    </div>
  </div>
 


  <!-- Footer Start -->
  <footer class="andro_footer andro_footer-dark">
    <!-- Top Footer -->
    <div class="container">
      <div class="andro_footer-top">
        <div class="andro_footer-logo">
          <img src="assets/img/logo-light.png" alt="logo">
        </div>
        <div class="andro_footer-buttons">
          <a href="#"> <img src="assets/img/android.png" alt="download it on the app store"></a>
          <a href="#"> <img src="assets/img/ios.png" alt="download it on the app store"></a>
        </div>
      </div>
    </div>

    <!-- Middle Footer -->
    <div class="andro_footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Information</h5>
            <ul>
              <li> <a href="index-2.html">Home</a> </li>
              <li> <a href="blog-grid.html">Blog</a> </li>
              <li> <a href="about-us.html">About Us</a> </li>
              <li> <a href="shop-v1.html">Shop</a> </li>
              <li> <a href="contact-us.html">Contact Us</a> </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Top Categories</h5>
            <ul>
              <li> <a href="#">Canned Food</a> </li>
              <li> <a href="#">Dental Chews</a> </li>
              <li> <a href="#">Capsules </a> </li>
              <li> <a href="#">Beef Tomato</a> </li>
              <li> <a href="#">Cat Food </a> </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 footer-widget">
            <h5 class="widget-title">Others</h5>
            <ul>
              <li> <a href="checkout.html">Checkout</a> </li>
              <li> <a href="cart.html">Cart</a> </li>
              <li> <a href="product-single.html">Product</a> </li>
              <li> <a href="shop-v1.html">Shop</a> </li>
              <li> <a href="legal.html">Legal</a> </li>
            </ul>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 footer-widget">
            <h5 class="widget-title">Social Media</h5>
            <ul class="social-media">
              <li> <a href="#" class="facebook"> <i class="fab fa-facebook-f"></i> </a> </li>
              <li> <a href="#" class="pinterest"> <i class="fab fa-pinterest-p"></i> </a> </li>
              <li> <a href="#" class="google"> <i class="fab fa-google"></i> </a> </li>
              <li> <a href="#" class="twitter"> <i class="fab fa-twitter"></i> </a> </li>
            </ul>
            <div class="andro_footer-offer">
              <p>Signup and get exclusive offers and coupon codes</p>
              <a href="#" class="andro_btn-custom btn-sm shadow-none">Sign Up</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="andro_footer-bottom">
      <div class="container">
        <ul>
          <li> <a href="#">Privacy Policy</a> </li>
          <li> <a href="#">Refund Policy</a> </li>
          <li> <a href="#">Cookie Policy</a> </li>
          <li> <a href="#">Terms & Conditions</a> </li>
        </ul>
        <div class="andro_footer-copyright">
          <p> Copyright © 2020 <a href="#">Yourwebsite</a> All Rights Reserved. </p>
          <a href="#" class="andro_back-to-top">Back to top <i class="fas fa-chevron-up"></i> </a>
        </div>
      </div>
    </div>

  </footer>
  <!-- Footer End -->

  <!-- Vendor Scripts -->
  <script src="assets/js/plugins/jquery-3.4.1.min.js"></script>
  <script src="assets/js/plugins/popper.min.js"></script>
  <script src="assets/js/plugins/waypoint.js"></script>
  <script src="assets/js/plugins/bootstrap.min.js"></script>
  <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/plugins/jquery.slimScroll.min.js"></script>
  <script src="assets/js/plugins/imagesloaded.min.js"></script>
  <script src="assets/js/plugins/jquery.steps.min.js"></script>
  <script src="assets/js/plugins/jquery.countdown.min.js"></script>
  <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
  <script src="assets/js/plugins/slick.min.js"></script>
  <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
  <script src="assets/js/plugins/jquery.zoom.min.js"></script>


  <!-- Petitdio Scripts -->
  <script src="assets/js/main.js"></script>

</body>


<!-- Mirrored from slidesigma.com/themes/html/petitudio/home-v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Apr 2021 14:04:01 GMT -->
</html>
