<?php session_start(); if(empty($_SESSION[ 'user_name'])) {echo "inside if"; echo $_SESSION[ 'user_name']; header( 'Location: index.php'); } ?>

<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel=stylesheet href="css/materialize.css" media="screen,projection">
<link type="text/css" rel="stylesheet" href="css/animate.css">
<link type="text/css" rel="stylesheet" href="css/styleadmin.css">
	
        <!--<script type="text/javascript" src="js/init.js"></script>-->
        <script src="js/jquery.min.js"></script>
    <script>
     $(document).ready(function(){
        $('.collapsible').collapsible();
         $('ul.tabs').tabs();
      });
    </script>

   
    <title>Stealth Gaming Lounge : Admin</title>
</head>
    <body class="blue">  
        <div class="container">
            <div class="row fadeInDown" id="navBar">
            <nav class="white">
        <div class="nav-wrapper">
            <a class="brand-logo left grey-text">Stealth</a>
            <ul class="right">
                <li class="grey-text"><?php echo $_SESSION[ 'user_name']; ?></li>
                <li><a class="grey-text" href="logout.php">logout</a></li>
            </ul>
                </div>
                </nav></div>
            
            <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a href="#test1">Users Online</a></li>
          <li class="tab col s3"><a href="#test2">Admin Details</a></li>
          <li class="tab col s3"><a href="#test3">Billing Details</a></li>
          <li class="tab col s3"><a href="#test4">Message</a></li>
        
        </ul>
      </div></div>
            <div class="row">
      <div id="test1" class="col s12 fadeInUp">
          <div class="row">
              <div class="col s12">
                  <div class="card small">
                      <div class="card-image">
                          <img src="images/sample-1.jpg">
                          <span class="card-title">Card Title</span>
                      </div>
                      <div class="card-content">
                          <p>I am a very simple card. I am good at containing small bits of information.
                              I am convenient because I require little markup to use effectively.</p>
                      </div>
                      <div class="card-action">
                          <a href="#">This is a link</a>
                          <a href='#'>This is a link</a>
                      </div>
                  </div>
              </div>
          </div>
    </div>
      <div id="test2" class="col s12 fadeInUp">
          <ul class="collapsible">
              <li>
                  <div class="collapsible-header"><i class="mdi-image-filter-drama"></i>Add/Remove New User</div>
                  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
              <li>
                  <div class="collapsible-header"><i class="mdi-maps-place"></i>See Logs</div>
                  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                  </li>
              <li>
                  <div class="collapsible-header"><i class="mdi-social-whatshot"></i>Third</div>
                  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
          </ul>
      </div>
    <div id="test3" class="col s12 fadeInUp">
        <ul class="collapsible">
              <li>
                  <div class="collapsible-header"><i class="mdi-image-filter-drama"></i>Top-Up Account</div>
                  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
              <li>
                  <div class="collapsible-header"><i class="mdi-maps-place"></i>Add New Pricing Plans</div>
                  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
                  </li>
              <li>
                  <div class="collapsible-header"><i class="mdi-social-whatshot"></i>Add Discounts</div>
                  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
              </li>
            <li>
                  <div class="collapsible-header"><i class="mdi-social-whatshot"></i>Refunds</div>
                  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
            <li>
                  <div class="collapsible-header"><i class="mdi-social-whatshot"></i>See Total Earnings</div>
                  <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
            </li>
          </ul>
                </div>
                <div id="test4" class="col s12 fadeInUp">
                    <i class="large mdi-action-account-balance"></i>
                    
                </div>
            </div>
        </div> 
        

          
                
                
       <!-- <script type="text/javascript" src="js/prism.js"></script>-->
        <script type="text/javascript" src="js/materialize.js"></script>
    </body>
    
    

</html>