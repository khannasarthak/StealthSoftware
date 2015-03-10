<?php session_start();
    if(empty($_SESSION['level']))
    {
        header('Location:index.php');
    }
    ?>

<!DOCTYPE html>
<html ng-app="stealth">

<head>
    <link type="text/css" rel=stylesheet href="css/materialize.css" media="screen,projection">

    <link type="text/css" rel="stylesheet" href="css/animate.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script type="text/javascript">
        var stealthApp = angular.module('stealth', []);
     stealthApp.run(function ($rootScope) {
     $rootScope.localContact = '<?php echo $_SESSION["contact"]; ?>';

    });
    </script>
    <script src="js/controllers.js"></script>

    <title>Select pricing plan</title>
</head>

<body class="blue">
    <div class="container">
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>

        <div class="row" id="loginrow">

            <div id="loginCard" class="col s12 card animated fadeInDown" ng-controller="pricingTable">

                <div class="card-content">
<div class="row"><div class="col s6">
    <span class="card-title black-text">Select pricing plan</span></div><div class="col s6"><span class="card-title black-text right">&#8377;{{balance}}</span></div></div>
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
                                            <td ng-if="balance<=single.amount"><a class="waves-effect waves-light btn" ng-click="select(single,1)"><i class="mdi-action-done white-text"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
        </div>
    </div>
    <!-- <script type="text/javascript" src="js/prism.js"></script>-->
    <script type="text/javascript" src="js/materialize.js"></script>
</body>



</html>
