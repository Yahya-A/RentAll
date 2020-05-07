<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<!-- =====  BASIC PAGE NEEDS  ===== -->
<meta charset="utf-8">
<title>Kors Look</title>
<!-- =====  SEO MATE  ===== -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="distribution" content="global">
<meta name="revisit-after" content="2 Days">
<meta name="robots" content="ALL">
<meta name="rating" content="8 YEARS">
<meta name="Language" content="en-us">
<meta name="GOOGLEBOT" content="NOARCHIVE">
<!-- =====  MOBILE SPECIFICATION  ===== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width">
<!-- =====  CSS  ===== -->
<link href="<?php echo base_url('assets/data/css/bootstrap.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/data/css/style.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/data/css/font-awesome.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/data/css/css.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/data/css/owl.css')?>" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" href="http://html.lionode.com/korslook/images/favicon.png">
<link rel="apple-touch-icon" href="http://html.lionode.com/korslook/images/favicon.png">
</head>
<body id="index">
<div class="wrapar"> 
  <!-- Header Start-->
  <div class="header">
    <div class="header-top">
      <div class="container">
        <div class="call pull-left">
          <p>Call us toll free : <span>+1324 353 4689</span></p>
        </div>
        <div class="user-info pull-right">
          <div class="user">
            <ul>
              <li><a href="#" data-toggle="modal" data-target="#login">Login</a> 
                <!-- Modal -->
                <div class="modal fade" id="login" role="dialog">
                  <div class="modal-dialog"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <div class="panel-heading">
                          <div class="panel-title pull-left">Login</div>
                          <div class="pull-right"><a href="#">Forgot password?</a>
                            <button aria-hidden="true" data-dismiss="modal" class="close btn btn-xs " type="button"> <i class="fa fa-times"></i> </button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-body">
                        <form id="loginform" class="form-horizontal">
                          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="username" placeholder="username or email">
                          </div>
                          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                          </div>
                          <div class="input-group">
                            <div class="checkbox">
                              <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1">
                                Remember me</label>
                            </div>
                          </div>
                          <div class="form-group"> 
                            <!-- Button -->
                            <div class="col-sm-12 controls"> <a id="btn-login" href="#" class="btn btn-primary btn-success">Login</a> <a id="btn-fblogin" href="#" class="btn btn-primary facebook">Login with</a> </div>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <div class="form-group">
                          <div class="col-md-12 control">
                            <div>Don't have an account! <a href="#">Sign Up Here</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li><a href="#" data-toggle="modal" data-target="#register">Register</a>
                <div class="modal fade" id="register" role="dialog">
                  <div class="modal-dialog"> 
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <div class="panel-heading">
                          <div class="panel-title pull-left">Register</div>
                          <div class="pull-right">
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="fa fa-times"></i> </button>
                          </div>
                        </div>
                      </div>
                      <div class="modal-body">
                        <div class="control-group"> 
                          <!-- Username -->
                          <label class="control-label" for="username">Username</label>
                          <div class="controls">
                            <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                            <p class="help-block">Username can contain any letters or numbers, without spaces</p>
                          </div>
                        </div>
                        <div class="control-group"> 
                          <!-- E-mail -->
                          <label class="control-label" for="email">E-mail</label>
                          <div class="controls">
                            <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
                            <p class="help-block">Please provide your E-mail</p>
                          </div>
                        </div>
                        <div class="control-group"> 
                          <!-- Password-->
                          <label class="control-label" for="password">Password</label>
                          <div class="controls">
                            <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                            <p class="help-block">Password should be at least 4 characters</p>
                          </div>
                        </div>
                        <div class="control-group"> 
                          <!-- Password -->
                          <label class="control-label" for="password_confirm">Password (Confirm)</label>
                          <div class="controls">
                            <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
                            <p class="help-block">Please confirm password</p>
                          </div>
                        </div>
                        <div class="control-group"> 
                          <!-- Button -->
                          <div class="controls">
                            <button class="btn btn-success">Register</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header-mid">
      <div class="container">
        <div class="row">
          <div class="col-md-3 header-left">
            <div class="logo"> <a href="http://html.lionode.com/korslook/index.html"><img src="<?php echo base_url('assets/data/images/logo.png')?>" alt="#"></a> </div>
          </div>
          <div class="col-md-6 search_block">
            <div class="search">
              <form action="grid-view.html">
                <div class="search_cat">
                  <select class="search-category" name="search-category">
                    <option class="computer" selected="selected">All Categories</option>
                    <option class="computer">Men</option>
                    <option class="computer">Women</option>
                    <option class="computer">Kids</option>
                    <option class="computer">Computer</option>
                    <option class="computer">Electronics</option>
                  </select>
                  <span class="fa fa-angle-down"></span> </div>
                <input type="text" placeholder="Search...">
                <button type="submit" class="btn submit"> <span class="fa fa-search"></span></button>
              </form>
            </div>
          </div>
          <div class="col-md-3 header-right">
            <div class="cart">
              <div class="cart-icon dropdown"></div>
              <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="http://html.lionode.com/korslook/cart.html">My Cart( 2 )<span> $261.20</span></a>
              <ul class="dropdown-menu pull-right cart-dropdown-menu">
                <li>
                  <table class="table table-striped">
                    <tbody id="detail_cart">

                    </tbody>
                  </table>
                </li>
                <li>
                  <div class="minitotal">
                    <table class="table pricetotal">
                      <tbody>
                        <tr>
                          <td class="text-right"><strong>Sub-Total</strong></td>
                          <td class="text-right price-new">$210.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                          <td class="text-right price-new">$2.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>VAT (20%)</strong></td>
                          <td class="text-right price-new">$42.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>Total</strong></td>
                          <td class="text-right price-new">$254.00</td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="controls"> <a class="btn btn-primary pull-left" href="http://html.lionode.com/korslook/cart.html" id="view-cart"><i class="fa fa-shopping-cart"></i> View Cart </a> <a class="btn btn-primary pull-right" href="http://html.lionode.com/korslook/checkout.html" id="checkout"><i class="fa fa-share"></i> Checkout</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="new-further">
              <p>New in kors look  : </p>
              <ul class="toggle-newinFurther" style="">
                <li><a href="#">Women</a></li>
                <li><a href="#">Clothing</a></li>
                <li><a href="#">Nightwear</a></li>
                <li><a href="#">Panties</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End --> 
  
  <!-- Main menu Start -->
  <div id="main-menu">
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
          <button aria-controls="navbar" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a href="#" class="navbar-brand">menu</a> </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="http://html.lionode.com/korslook/index.html">HOME</a></li>
            <li><a href="http://html.lionode.com/korslook/grid-view.html">WOMEN</a></li>
            <li><a href="http://html.lionode.com/korslook/grid-view.html">MEN</a><span class="new">new</span></li>
            <li class="dropdown"> <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"> PAGES<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://html.lionode.com/korslook/checkout.html">Checkout</a></li>
                <li><a href="http://html.lionode.com/korslook/cart.html">Shoping Cart</a></li>
                <li><a href="http://html.lionode.com/korslook/checkout-step1.html">Billing &amp; shipping address</a></li>
                <li><a href="http://html.lionode.com/korslook/checkout-step2.html">Delivery method </a></li>
                <li><a href="http://html.lionode.com/korslook/checkout-step3.html">Payment method</a></li>
                <li><a href="http://html.lionode.com/korslook/checkout-step4.html">Order riview</a></li>
                <li><a href="http://html.lionode.com/korslook/404.html">Page Notfound</a></li>
              </ul>
            </li>
            <li><a href="http://html.lionode.com/korslook/blog.html">BLOG</a></li>
            <li><a href="http://html.lionode.com/korslook/contact-us.html">CONTACT US</a></li>
            <li><a href="http://html.lionode.com/korslook/about-us.html">ABOUT US</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>