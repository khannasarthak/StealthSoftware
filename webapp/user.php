<?php session_start(); if(empty($_SESSION[ 'level'])||$_SESSION[ 'level']!=1) {header( 'Location: index.php'); }?>

<!DOCTYPE html>
<html ng-app="stealth">

<head>
    <link type="text/css" rel=stylesheet href="css/materialize.css" media="screen,projection">
    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/styleadmin.css">


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.md5.js"></script>



    <script src="js/angular.min.js"></script>
    <script type="text/javascript">
        var stealthApp = angular.module('stealth', []);
        stealthApp.run(function ($rootScope) {
            $rootScope.localContact = '<?php echo $_SESSION["contact"]; ?>';

        });
    </script>
    <script src="js/controllers.js"></script>


    <title>Stealth Gaming Lounge : User</title>
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
        <div class="row" id="displaycards" ng-controller="userCards">

            <div class="col s3"><span class="flow-text"></span>
                <div class="row">
                    <div class="col s3 m12">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <p>Balance</p>
                                <span class="card-title">&#8377;{{balance}}</span>

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
                                <p>Plan</p>
                                <span class="card-title">{{plan}}</span>

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
                                <p>Total Hours</p>
                                <span class="card-title">{{hours}}</span>

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
                                <p>Last recharge</p>
                                <span class="card-title">{{lastRecharge}}</span>

                            </div>

                        </div>
                    </div>
                </div>
            </div>




        </div>
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a href="#test1">Account</a>
                    </li>
                    <li class="tab col s3">
                        <a href="#test2">
                            LOG</a>

                    </li>
                    <li class="tab col s3"><a href="#test3">Order</a>
                    </li>
                    <li class="tab col s3"><a href="#test4">Social</a>
                    </li>


                </ul>
            </div>
        </div>
        <div class="row">
            <div id="test1" class="col s12 animated fadeInUp">
                <ul class="collapsible" data-collapsible="accordion">
                   
                    <li>
                        <div class="collapsible-header"><i class="mdi-action-lock-outline"></i>Change Password</div>
                        <div class="collapsible-body grey lighten-3">




                            <div class="row" ng-controller="changePassword">
                                <div class="container">
                                    <form novalidate class="col s12">


<div class="row">
                                            <div class="input-field col s6">
                                                <input id="password" type="password" ng-model="oldPwd">
                                                <label for="password">Old Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="password" type="password" ng-model="newPwd1">
                                                <label for="password">New Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="password" type="password" ng-model="newPwd2">
                                                <label for="password">Confirm New Password</label>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col s4">
                                                <button ng-disabled="newPwd1!=newPwd2" ng-click="newPassSubmit()" class="btn waves-effect waves-light" type="submit" id="submit" value="Submit">SUBMIT
                                                    <i class="mdi-content-send right"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div>


            </div>
            </li>


            <div id="test2" class="col s12 animated fadeInUp">
                <ul class="collapsible">

                    <li>
                        <div class="collapsible-header"><i class="mdi-action-history"></i>Session logs</div>
                        <div class="collapsible-body grey lighten-3">
                            <div class="row" ng-controller="sessionsInfo">
                                <table class="hoverable centered">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th data-field="id">Date</th>
                                            <th data-field="name">Session</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr ng-repeat="session in sessions">
                                            <td>{{$index + 1}}</td>
                                            <td>{{session.time}}</td>
                                            <td>{{session.hours}}</td>
                                            <td>{{session.amount}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                    </li>
                        
                        <li>
                        <div class="collapsible-header"><i class="mdi-editor-format-list-bulleted"></i>Bills</div>
                        <div class="collapsible-body grey lighten-3">
                            <div class="row" ng-controller="bills">
                                <table class="hoverable centered">
                                    <table class="hoverable centered">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th data-field="id">Date</th>
                                            <th data-field="name">Units</th>
                                            <th>Amount</th>
                                            <th>Plan</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr ng-repeat="bill in bills">
                                            <td>{{$index + 1}}</td>
                                            <td>{{bill.time}}</td>
                                            <td>{{bill.billedUnits}}</td>
                                            <td>{{bill.amount}}</td>
                                            <td>{{bill.pricingCode}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                    </li>
                </ul>
                </div>
                </li>

                </ul>
            </div>
            <div id="test3" class="col s12 animated fadeInUp">
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="mdi-social-cake"></i>Food and Drinks</div>
                        <div class="collapsible-body grey lighten-3">
                            <div class="row" ng-controller="products">
                                <table class="hoverable centered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th data-field="id">Product</th>
                                            <th data-field="price">Price</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr ng-repeat="product in products">
                                            <td>{{$index + 1}}</td>
                                            <td>{{product.name}}</td>
                                            <td>{{product.price}}</td>
                                            <td><a class="waves-effect waves-light btn" ng-click="order(product)"><i class="mdi-action-add-shopping-cart"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    


                </ul>
            </div>
            <div id="test4" class="col s12 animated fadeInUp">

                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="mdi-social-mood"></i>Social</div>
                        <div class="collapsible-body grey lighten-3">
                            Coming Soon



                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-social-group-add"></i>Recruitment</div>
                        <div class="collapsible-body grey lighten-3">
                            Coming Soon



                        </div>
                    </li>

                </ul>

            </div>
        </div>










        <!-- <script type="text/javascript" src="js/prism.js"></script>-->
        <script type="text/javascript" src="js/materialize.js"></script>


</body>



</html>
