var stealthApp = angular.module('stealth', []);

stealthApp.controller('status',
    function ($scope, $http, $interval) {
        var obj = {};
        obj.income = 0;
        obj.online = 0;
        obj.unique = 0;

        function xhr() {
            $http.get('peopleOnline.php').
            success(function (data, status, headers, config) {
                obj.online = data;
            }).
            error(function (data, status, headers, config) {
                obj.online = 'ERROR';
            });
        }

        function income() {
            $http.get('todayIncome.php').success(function (data, status, headers, config) {
                obj.income = data;

            }).error(function (data, status, headers, config) {
                obj.income = 'ERROR';
            });
        }

        function unique() {
            $http.get('uniqueUsers.php').success(function (data, status, headers, config) {
                obj.unique = data;

            }).error(function (data, status, headers, config) {
                obj.unique = 'ERROR';
            });
        }


        $interval(xhr, 5000);
        $interval(income, 5001);
        $interval(unique, 5002);
        $scope.obj = obj;


    });

stealthApp.controller('newUser',
    function ($scope, $http) {
        var newUser = {};
        newUser.error = "ERROR";
        var formSubmit = false;

        $scope.clear = function () {
            $scope.userName = "";
            $scope.userContact = "";
            $scope.userPwd = "";
        };

        $scope.$watch("userContact", function () {
            if ($scope.userContact.length == 10) {
                $http.post('checkNumber.php', {
                    "number": $scope.userContact
                }).
                success(function (data, status, headers, config) {
                    if (data > 0) {
                        formSubmit = false;
                        toast('User already exists in the system', 4000);
                    } else {
                        formSubmit = true;
                    }
                }).
                error(function (data, status, headers, config) {
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                });
            }
        });

        $scope.newUserSubmit = function () {
            if (formSubmit == true) {
                $http.post('newUser.php', {
                    "number": $scope.userContact,
                    "name": $scope.userName,
                    "password": $scope.userPwd,
                    "level": $scope.userType
                }).
                success(function (data, status, headers, config) {
                    if (data > 0) {
                        toast('<i class=&quot;mdi-action-done green-text&quot;></i><span>New user created</span>', 4000);
                        $scope.clear();
                    } else {
                        toast('New user creation failed', 4000);
                        $scope.clear();
                    }
                }).
                error(function (data, status, headers, config) {
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                });
            } else {
                obj.error = "<div class=\"red-text\"><i class=\"mdi-alert-error\"></i>User with this contact exists</div>";
            }


        };
    });

stealthApp.controller('existingUser', function ($scope, $http) {
  $scope.object={};

    $scope.fetchData = function () {
        $http.post('existingUser.php', {
            "number": $scope.userContact
        }).
        success(function (data, status, headers, config) {

            if (data == 0) {
                toast('<i class=&quot;mdi-action-done green-text&quot;></i><span>User not found</span>', 4000);

            } else {
              $scope.object=angular.fromJson(data);

                console.log($scope);
                console.log(data);
                console.log($scope.object);
                console.log($scope.object[0].balance);
                toast('<i class=&quot;mdi-action-done green-text&quot;></i><span>Query Successful</span>', 4000);
            }
        }).
        error(function (data, status, headers, config) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });



    };

});

stealthApp.controller('recharge',
    function ($scope, $http) {

        var formSubmit = false;

        $scope.clear = function () {
            $scope.amount = "";
            $scope.userContact = "";
        };

        $scope.$watch("userContact", function () {
            if ($scope.userContact.length == 10) {
                $http.post('checkNumber.php', {
                    "number": $scope.userContact
                }).
                success(function (data, status, headers, config) {
                    if (data > 0) {
                        formSubmit = true;
                    } else {
                        formSubmit = false;
                    }
                }).
                error(function (data, status, headers, config) {
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                });
            }
        });

        $scope.recharge = function () {
            if (formSubmit == true) {
                $http.post('recharge.php', {
                    "number": $scope.userContact,
                    "amount": $scope.amount
                }).
                success(function (data, status, headers, config) {
                    if (data > 0) {
                        toast('<i class=&quot;mdi-action-done green-text&quot;></i><span>Recharge Successful</span>', 4000);
                        $scope.clear();
                    } else {
                        toast('Recharge Failed', 4000);
                        $scope.clear();
                    }
                }).
                error(function (data, status, headers, config) {
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                });
            } else {
                toast('No such user', 4000);
            }


        };
    });

stealthApp.controller('refund',
    function ($scope, $http) {

        var formSubmit = false;

        $scope.clear = function () {
            $scope.amount = "";
            $scope.userContact = "";
        };

        $scope.$watch("userContact", function () {
            if ($scope.userContact.length == 10) {
                $http.post('checkNumber.php', {
                    "number": $scope.userContact
                }).
                success(function (data, status, headers, config) {
                    if (data > 0) {
                        formSubmit = true;
                    } else {
                        formSubmit = false;
                    }
                }).
                error(function (data, status, headers, config) {
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                });
            }
        });

        $scope.refund = function () {
            if (formSubmit == true) {
                $scope.amount=-1*$scope.amount;
                $http.post('recharge.php', {
                    "number": $scope.userContact,
                    "amount": $scope.amount
                }).
                success(function (data, status, headers, config) {
                    if (data > 0) {
                        toast('<i class=&quot;mdi-action-done green-text&quot;></i><span>Refund Successful</span>', 4000);
                        $scope.clear();
                    } else {
                        toast('Refund Failed', 4000);
                        $scope.clear();
                    }
                }).
                error(function (data, status, headers, config) {
                    // called asynchronously if an error occurs
                    // or server returns response with an error status.
                });
            } else {
                toast('No such user', 4000);
            }


        };
    });

stealthApp.controller('pricingTable',
    function ($scope, $http, $interval) {

    $scope.pricings={};

        $scope.getPricing=function() {

            $http.get('pricingTable.php').
            success(function (data, status, headers, config) {
                $scope.pricings = angular.fromJson(data);
            }).
            error(function (data, status, headers, config) {
                $scope.pricings = 'ERROR';
            });


        }
    $scope.getPricing();

    });
