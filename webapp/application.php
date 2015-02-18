<?php session_start(); if(empty($_SESSION[ 'user_name'])) {echo "inside if"; echo $_SESSION[ 'user_name']; header( 'Location: index.php'); } ?>

<!DOCTYPE html>
<html ng-app="stealth">

<head>

    <link type="text/css" rel=stylesheet href="css/materialize.css" media="screen,projection">
    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/styleadmin.css">

    <!--<script type="text/javascript" src="js/init.js"></script>-->
    <script src="js/jquery.min.js"></script>



    <script src="js/angular.min.js"></script>
    <script src="js/controllers.js"></script>



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
                        <li>
                            <a class="grey-text" href="logout.php">logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row animated flipInX" id="displaycards" ng-controller="status">

            <div class="col s3"><span class="flow-text"></span>
                <div class="row">
                    <div class="col s3 m12">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <p>Users Online</p>
                                <span class="card-title">{{obj.online}}</span>

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
                                <p>Todays Total Income</p>
                                <span class="card-title">&#8377;{{obj.income}}</span>

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
                                <p>Unique Users</p>
                                <span class="card-title">{{obj.unique}}</span>

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
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><i class="mdi-social-person-add"></i>New User</div>
                        <div class="collapsible-body grey lighten-3">




                            <div class="row" ng-controller="newUser">
                                <div class="container">
                                    <form novalidate class="col s12">

                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="mdi-action-account-circle prefix"></i>
                                                <input id="name" type="text" ng-model="userName">
                                                <label for="name">Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="mdi-communication-phone prefix"></i>
                                                <input id="contact" type="text" ng-model="userContact">
                                                <label for="contact">Contact</label>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="mdi-action-lock prefix"></i>
                                                <input id="password" type="password" ng-model="userPwd">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="col s3">
                                                <p>
                                                    <input name="userType" type="radio" id="client" ng-model="userType" value="1" />
                                                    <label for="client">User</label>
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p>
                                                    <input name="userType" type="radio" id="admin" ng-model="userType" value="2" />
                                                    <label for="admin">Admin</label>
                                                </p>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col s4">
                                                <button ng-click="newUserSubmit()" class="btn waves-effect waves-light" type="submit" id="submit" value="Submit">SUBMIT
                                                    <i class="mdi-content-send right"></i>
                                                </button>
                                            </div>
                                            <div class="col s4">
                                                <a class="waves-effect waves-light btn" ng-click="clear()">CLEAR<i class="mdi-content-clear right"></i></a>
                                            </div>
                                        </div>

                                    </form>
                                    <div class="row">
                                        {{newUser.error}}
                                    </div>
                                </div>
                            </div>




                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-social-person"></i>Existing User</div>
                        <div class="collapsible-body grey lighten-3" ng-controller="existingUser">

                            <div class="row">&nbsp;</div>
                            <div class="container">
                                <div class="row">

                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s4">
                                                <i class="mdi-communication-phone prefix"></i>
                                                <input id="username" type="text" ng-model="userContact">
                                                <label for="username">Contact</label>
                                            </div>

                                            <div class="col s4">
                                                <button ng-click="fetchData()" class="btn waves-effect waves-light modal-trigger" type="submit" id="submit" value="Submit">SUBMIT
                                                    <i class="mdi-content-send right"></i>
                                                </button>
                                            </div>

                                        </div>




                                    </form>


                                </div>
                                <div class="container">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col s12 card">

                                                <h4> {{object[0].name}}</h4>

                                                <div class="row">
                                                    <div class="col s6">&#8377;{{object[0].balance}}</div>
                                                    <div class="col s6"><i class="mdi-communication-call"></i>{{object[0].contact}}</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s6"><i class="mdi-action-today"></i>{{object[0].join}}</div>
                                                    <div class="col s6"><i class="mdi-action-star-rate"></i>{{object[0].level}}</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s6"><i class="mdi-action-credit-card"></i>{{object[0].plan}}</div>

                                                    <div class="col s6"><i class="mdi-hardware-desktop-windows"></i>{{object[0].system}}</div>
                                                </div>



                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </li>
                </ul>




            </div>

            <div id="test2" class="col s12 animated fadeInUp">
                <ul class="collapsible" data-collapsible="accordion" ng-controller="pricingTable">
                    <li>
                        <div class="collapsible-header"><i class="mdi-editor-attach-money"></i>Pricing Models</div>
                        <div class="collapsible-body grey lighten-3">
                            <div class="row">
                                <table class="hoverable centered">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th data-field="id">Code</th>
                                            <th data-field="price">Price</th>
                                            <th data-field="cycle">Cycle</th>
                                            <th data-field="period">Period</th>
											<th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr ng-repeat="single in pricings">
                                            <td>{{$index + 1}}</td>
                                            <td>{{single.code}}</td>
                                            <td>&#8377;{{single.amount}}</td>
                                            <td>{{single.cycle}}</td>
                                            <td>{{single.timevalue}}</td>
											<td><a class="waves-effect waves-light btn" ng-click="removeRow(single)"><i class="mdi-content-clear"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-content-add"></i>Add</div>
                        <div class="collapsible-body grey lighten-3">
                            <div class="container">
                                <form novalidate class="col s12">
                                    <div class="row">

                                        <div class="row">

                                            <div class="input-field col s6">
                                                <i class="mdi-editor-attach-money prefix"></i>
                                                <input id="price" type="text" ng-model="cost">
                                                <label for="price">Cost</label>
                                            </div>
                                            <div class="col s6">

                                                <select ng-model="cycle">
                                                    <option value="" disabled selected>Choose cycle</option>
                                                    <option value="hour">Hourly</option>
                                                    <option value="day">Daily</option>
                                                    <option value="week">Weekly</option>
                                                    <option value="month">Monthly</option>
                                                    <option value="year">Yearly</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="mdi-device-access-time prefix"></i>
                                                <input id="period" type="text" ng-model="period">
                                                <label for="period">Period</label>
                                            </div>
                                            <div class="col s3">
                                                <a class="waves-effect waves-light btn" ng-click="putPricing()"><i class="mdi-content-add left"></i>ADD</a>
                                            </div>
											<div class="col s3">
                                                <a class="waves-effect waves-light btn"><i class="mdi-content-clear left"></i>CLEAR</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>


            <div id="test3" class="col s12 animated fadeInUp">
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><i class="mdi-action-payment"></i>Recharge</div>
                        <div class="collapsible-body grey lighten-3">
                            <div class="container" ng-controller="recharge">
                                <div class="row">

                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="mdi-communication-phone prefix"></i>
                                                <input id="first_name" type="text" ng-model="userContact">
                                                <label for="first_name">Contact</label>
                                            </div>



                                        </div>

                                        <div class="row">

                                            <div class="input-field col s6">
                                                <i class="mdi-editor-attach-money prefix"></i>
                                                <input id="money" type="text" ng-model="amount">
                                                <label for="money">Amount</label>
                                            </div>
                                            <div class="col s3">
                                                <button class="btn waves-effect waves-light" type="submit" id="submit" value="Submit" ng-click="recharge()">SUBMIT
                                                    <i class="mdi-content-send right"></i>
                                                </button>
                                            </div>
                                            <div class="col s3">
                                                <a class="waves-effect waves-light btn" ng-click="clear()">CLEAR<i class="mdi-content-clear right"></i></a>

                                            </div>

                                        </div>
                                    </form>





                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-content-undo"></i>Refund</div>
                        <div class="collapsible-body grey lighten-3" ng-controller="refund">
                            <div class="container">
                                <div class="row">
                                    <form class="col s10 offset-s1">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="mdi-communication-phone prefix"></i>
                                                <input id="first_name" type="text" ng-model="userContact">
                                                <label for="first_name">Contact</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="mdi-editor-attach-money prefix"></i>
                                                <input id="first_name" type="text" ng-model="amount">
                                                <label for="first_name">Amount</label>
                                            </div>


                                        </div>

                                        <div class="row">
                                            <div class="col s6">
                                                <button class="btn waves-effect waves-light" type="submit" id="submit" value="Submit" ng-click="refund()">SUBMIT
                                                    <i class="mdi-content-send right"></i>
                                                </button>
                                            </div>
                                            <div class="col s6">
                                                <a class="waves-effect waves-light btn">CLEAR<i class="mdi-content-clear right" ng-click="clear()"></i></a>


                                            </div>
                                        </div>
                                    </form>
                                </div>



                            </div>


                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-action-shopping-cart"></i>Bills</div>
                        <div class="collapsible-body grey lighten-3">
                            <div class="container">

                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <i class="mdi-communication-phone prefix"></i>
                                            <input id="username" type="text">
                                            <label for="username">Contact</label>
                                        </div>

                                        <div class="col s4">
                                            <button class="btn waves-effect waves-light" type="submit" id="submit" value="Submit">SUBMIT
                                                <i class="mdi-content-send right"></i>
                                            </button>
                                        </div>
                                        <div class="col s4">
                                            <a class="waves-effect waves-light btn">CLEAR<i class="mdi-content-clear right"></i></a>
                                        </div>
                                    </div>




                                </form>


                            </div>
                        </div>
                    </li>

                </ul>
            </div>

            <div id="test4" class="col s12 animated fadeInUp">

                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><i class="mdi-editor-attach-money"></i>Earnings</div>
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
    <!--script type="text/javascript" src="js/Chart.js"></script-->
    <script>
        $(document).ready(function () {
            $('.collapsible').collapsible();
            $('ul.tabs').tabs();

            $('select').material_select();
        });
    </script>


</body>



</html>
