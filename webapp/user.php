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
                    <li class="tab col s3"><a href="#test1">Accounts</a>
                    </li>
                    <li class="tab col s3">
                        <a href="#test2">
                            </i>User Log</a>

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
                        <div class="collapsible-header"><i class="mdi-social-person-add"></i>Change Password</div>
                        <div class="collapsible-body grey lighten-3">




                            <div class="row" ng-controller="newUser">
                                <div class="container">
                                    <form novalidate class="col s12">



                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="mdi-action-lock prefix"></i>
                                                <input id="password" type="password" ng-model="userPwd">
                                                <label for="password">New Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="mdi-action-lock prefix"></i>
                                                <input id="password" type="password" ng-model="userPwd">
                                                <label for="password">Confirm New Password</label>
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


                        </div>
                    </li>


                    <div id="test2" class="col s12 fadeInUp">
                        <ul class="collapsible">

                            <li>
                                <div class="collapsible-header"><i class="mdi-device-access-time"></i>Your Previous Sessions</div>
                                      <div class="collapsible-body grey lighten-3">
                                <div class="row">
                                    <table class="hoverable centered">
                                        <thead>
                                            <tr>
                                                <th>Sno</th>
                                                <th data-field="id">Price</th>
                                                <th data-field="name">Cycle</th>
                                                <th data-field="price">Period</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Alvin</td>
                                                <td>Eclair</td>
                                                <td>$0.87</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Alan</td>
                                                <td>Jellybean</td>
                                                <td>$3.76</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Jonathan</td>
                                                <td>Lollipop</td>
                                                <td>$7.00</td>
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
                    <div id="test3" class="col s12 fadeInUp">
                        <ul class="collapsible">
                            <li>
                                <div class="collapsible-header"><i class="mdi-image-filter-1"></i>See Previous Top Ups</div>
                                <div class="collapsible-body">
                                    <table class="bordered">
                                        <thead>
                                            <tr>
                                                <th data-field="id">Time</th>
                                                <th data-field="name">Plan Name</th>
                                                <th data-field="price">Amount</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Alvin</td>
                                                <td>Eclair</td>
                                                <td>$0.87</td>
                                            </tr>
                                            <tr>
                                                <td>Alan</td>
                                                <td>Jellybean</td>
                                                <td>$3.76</td>
                                            </tr>
                                            <tr>
                                                <td>Jonathan</td>
                                                <td>Lollipop</td>
                                                <td>$7.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
    <script type="text/javascript" src="js/Chart.js"></script>
            <script>
                $(document).ready(function () {
                    $('.collapsible').collapsible();
                    $('ul.tabs').tabs();
                    $('.modal-trigger').leanModal();
                    $('select').material_select();
                });
            </script>
</body>



</html>