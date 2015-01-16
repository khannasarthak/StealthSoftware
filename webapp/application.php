<?php session_start(); if(empty($_SESSION[ 'user_name'])) {echo "inside if"; echo $_SESSION[ 'user_name']; header( 'Location: index.php'); } ?>

<!DOCTYPE html>
<html ng-app="stealth">

<head>
    <link type="text/css" rel=stylesheet href="css/materialize.css" media="screen,projection">
    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/styleadmin.css">

    <!--<script type="text/javascript" src="js/init.js"></script>-->
    <script src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.8/angular.min.js"></script>
    <script src="js/controllers.js"></script>
    <script>
        $(document).ready(function () {
            $('.collapsible').collapsible();
            $('ul.tabs').tabs();
            $('.modal-trigger').leanModal();
        });
    </script>


    <title>Stealth Gaming Lounge : Admin</title>
</head>

<body class="blue">
    <div class="container">
        <div class="row animated fadeInDown" id="navBar">
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
        <div class="row animated flipInX" id="displaycards">

            <div class="col s3"><span class="flow-text"></span>
                <div class="row">
                    <div class="col s3 m12" ng-controller="usersOnline">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <p>Users Online</p>
                                <span class="card-title">{{users.online}}</span>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s3"><span class="flow-text"></span>

                <div class="row">
                    <div class="col s3 m12" ng-controller="totalIncome">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <p>Todays Total Income</p>
                                <span class="card-title">1823.02</span>

                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s3"><span class="flow-text"></span>

                <div class="row">
                    <div class="col s3 m12" ng-controller="uniqueUsers">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <p>Unique Users</p>
                                <span class="card-title">23</span>

                            </div>
                           
                        </div>
                    </div>
                </div>

            </div>
            <div class="col s3"><span class="flow-text"></span>

                <div class="row">
                    <div class="col s6 m12" ng-controller="something">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <p>Users Online</p>
                                <span class="card-title"></span>

                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>




        </div>
        <div class="row animated fadeIn">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="#test1">Accounts</a>
                    </li>
                    <li class="tab col s3"><a href="#test2">Pricing</a>
                    </li>
                    <li class="tab col s3"><a href="#test3">Billing</a>
                    </li>
                    <li class="tab col s3"><a href="#test4">Analytics</a>
                    </li>


                </ul>
            </div>
        </div>
        <div class="row">
            <div id="test1" class="col s12 animated fadeInUp">
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="mdi-social-person-add"></i>New User</div>
                        <div class="collapsible-body grey lighten-3">
                            <a class="waves-effect waves-light btn modal-trigger" href="#modal_newUser">CLICK</a>

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
                        <div class="collapsible-header"><i class="mdi-social-person"></i>Existing User</div>
                        <div class="collapsible-body grey lighten-3">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>
                </ul>

            </div>
            <div id="test2" class="col s12 animated fadeInUp">
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="mdi-editor-attach-money"></i>Pricing Models</div>
                        <div class="collapsible-body grey lighten-3">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-action-redeem"></i>Discount Coupons</div>
                        <div class="collapsible-body grey lighten-3">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="test3" class="col s12 animated fadeInUp">
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="mdi-action-payment"></i>Top-Up Account</div>
                        <div class="collapsible-body grey lighten-3">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-content-undo"></i>Refund</div>
                        <div class="collapsible-body grey lighten-3">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-action-shopping-cart"></i>Bills</div>
                        <div class="collapsible-body grey lighten-3">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>

                </ul>
            </div>
            <div id="test4" class="col s12 animated fadeInUp">

                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="mdi-editor-attach-money"></i>Earnings</div>
                        <div class="collapsible-body grey lighten-3">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-device-devices"></i>See Individual PC Earnings</div>
                        <div class="collapsible-body grey lighten-3">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-social-whatshot"></i>Pricing Plans Popularity</div>
                        <div class="collapsible-body grey lighten-3">
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </li>

                </ul>

            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/materialize.js"></script>
</body>



</html>