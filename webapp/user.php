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
            <div id="test1" class="col s12 fadeInUp">
                <ul class="collapsible">
                    <li>
                        <div class="collapsible-header"><i class="mdi-image-filter-1"></i>Change Password</div>
                        <div class="collapsible-body">
                            <div class="row">
                                <form class="col s12">


                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="password" type="password" class="validate">
                                            <label for="password">Old Password</label>
                                        </div>

                                        <div class="input-field col s12">
                                            <input id="password" type="password" class="validate">
                                            <label for="password">New Password</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="password" type="password" class="validate">
                                            <label for="password">Confirm New Password</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit" name="action" onclick="toast('Password Changed Succesfully', 3000)">Change Password
                                <i class="mdi-content-send right"></i>
                            </button>


                        </div>
                    </li>



                </ul>

            </div>
            <div id="test2" class="col s12 fadeInUp">
                <ul class="collapsible">

                    <li>
                        <div class="collapsible-header"><i class="mdi-maps-place"></i>Your Previous Sessions</div>
                        <div class="collapsible-body">
                            <table class="bordered">
                                <thead>
                                    <tr>
                                        <th data-field="id">Date</th>
                                        <th data-field="name">Session Start</th>
                                        <th data-field="price">Session End</th>
                                        <th data-field="currentBal">Balance at Session End</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Alvin</td>
                                        <td>Eclair</td>
                                        <td>$0.87</td>
                                        <td>$0.87</td>
                                    </tr>
                                    <tr>
                                        <td>Alan</td>
                                        <td>Jellybean</td>
                                        <td>$3.76</td>
                                        <td>$0.87</td>
                                    </tr>
                                    <tr>
                                        <td>Jonathan</td>
                                        <td>Lollipop</td>
                                        <td>$7.00</td>
                                        <td>$0.87</td>
                                    </tr>

                                </tbody>
                            </table>
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
</body>



</html>