<?php session_start(); if(empty($_SESSION[ 'user_name'])) {echo "inside if"; echo $_SESSION[ 'user_name']; header( 'Location: index.php'); } ?>

<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel=stylesheet href="css/materialize.css" media="screen,projection">
    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/userstyle.css">

    <!--<script type="text/javascript" src="js/init.js"></script>-->
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.collapsible').collapsible();
            $('ul.tabs').tabs();
        });
        $(document).ready(function () {
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();

        });
    </script>


    <title>Stealth Gaming Lounge : Admin</title>
</head>

<body class="blue">
    <div class="container">
        <div class="row fadeInDown" id="navBar">
            <nav class="white">
                <div class="nav-wrapper">
                    <a class="brand-logo left grey-text">&nbsp;&nbsp;Stealth</a>
                    <ul class="right">
                        <li class="grey-text">
                            <?php echo $_SESSION[ 'user_name']; ?>
                        </li>
                        <li><a class="grey-text" href="logout.php">logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row" id="displaycards">

            <div class="col s3"><span class="flow-text"></span>
                <div class="row">
                    <div class="col s3 m12">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <p>Amount Left:</p>
                                <span class="card-title">64</span>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s3"><span class="flow-text"></span>

                <div class="row">
                    <div class="col s3 m12">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <p>Hours Left</p>
                                <span class="card-title">6:03</span>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s3"><span class="flow-text"></span>

                <div class="row">
                    <div class="col s3 m12">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <p>Total Hours Played:</p>
                                <span class="card-title">176:06</span>

                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
            <div class="col s3"><span class="flow-text"></span>

                <div class="row">
                    <div class="col s6 m12">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <p>Last Top Up Done On</p>
                                <span class="card-title">7</span>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="#test1"><i class="small mdi-action-account-circle"></i>Accounts</a>
                    </li>
                    <li class="tab col s3"><a href="#test2"><i class="small mdi-editor-attach-money"></i>Add/Change Pricing</a>
                    </li>
                    <li class="tab col s3"><a href="#test3"><i class="small mdi-action-shopping-cart"></i>Billing</a>
                    </li>
                    <li class="tab col s3"><a href="#test4"><i class="small mdi-action-assessment"></i>Analytics</a>
                    </li>


                </ul>
            </div>
        </div>
        <div class="row">
            <div id="test1" class="col s12 fadeInUp">
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="mdi-image-filter-1"></i>Change Password</div>
                        <div class="collapsible-body">
                            <a class="waves-effect waves-light btn modal-trigger" href="#modal_newUser">Click To Perform Above Specified Action</a>

                            <!-- Modal Structure -->
                            <div id="modal_newUser" class="modal">
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="first_name" type="text" class="validate">
                                                <label for="first_name">First Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="last_name" type="text" class="validate">
                                                <label for="last_name">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="username" type="text" class="validate">
                                                <label for="username">Username</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="password" type="password" class="validate">
                                                <label for="password">Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" class="validate">
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <a href="#" class="waves-effect btn-flat modal-close" onclick="toast('New Account Created for Username', 4000)">Submit</a>
                                <a href="#" class="waves-effect btn-flat modal-close">Clear All</a>
                                <a href="#" class="waves-effect btn-flat modal-close">Cancel</a>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-image-filter-2"></i>Change Existing Details</div>
                        <div class="collapsible-body">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>


                </ul>

            </div>
            <div id="test2" class="col s12 fadeInUp">
                <ul class="collapsible">

                    <li>
                        <div class="collapsible-header"><i class="mdi-maps-place"></i>Existing Prices</div>
                        <div class="collapsible-body">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-social-whatshot"></i>Add New Prices</div>
                        <div class="collapsible-body">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-image-filter-drama"></i>Make New Discount Coupon</div>
                        <div class="collapsible-body">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-image-filter-drama"></i>Existing Coupon Details</div>
                        <div class="collapsible-body">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="test3" class="col s12 fadeInUp">
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="mdi-image-filter-1"></i>See Previous Top Ups</div>
                        <div class="collapsible-body">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-image-filter-2"></i>Refund</div>
                        <div class="collapsible-body">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>


                </ul>
            </div>
            <div id="test4" class="col s12 fadeInUp">

                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="mdi-image-filter-1"></i>See Total Hours Played</div>
                        <div class="collapsible-body">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-image-filter-2"></i>See Weekly Details</div>
                        <div class="collapsible-body">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-image-filter-3"></i>See Monthly Details</div>
                        <div class="collapsible-body">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>

                </ul>

            </div>
        </div>
   


         





    <!-- <script type="text/javascript" src="js/prism.js"></script>-->
    <script type="text/javascript" src="js/materialize.js"></script>
</body>



</html>