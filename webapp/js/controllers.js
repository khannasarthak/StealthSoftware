var stealthApp = angular.module('stealth', []);

stealthApp.controller('status',
                     function ($scope, $http, $interval){
var obj = {};
    obj.income=0;
    obj.online=0;
    obj.unique=0;
    
function xhr(){
$http.get('peopleOnline.php').
  success(function(data, status, headers, config) {
    obj.online=data;
  }).
  error(function(data, status, headers, config) {
    obj.online='ERROR';
  });
}
    
    function income(){
    $http.get('todayIncome.php').success(function(data, status, headers, config) {
        obj.income=data;
        
    }).error(function(data, status, headers, config){
        obj.income='ERROR';
    });
    }
    
    function unique(){
    $http.get('uniqueUsers.php').success(function(data, status, headers, config) {
        obj.unique=data;
        
    }).error(function(data, status, headers, config){
        obj.unique='ERROR';
    });
    }
    
    $interval(xhr, 5000);
    $interval(income, 5001);
    $interval(unique, 5002);
    $scope.obj=obj;
});

stealthApp.controller('newUser',
                     function ($scope, $http){
    var newUser={};
    newUser.error="ERROR";
    var formSubmit=false;
    
    $scope.userContact="2";
    
    $scope.clear=function(){
    $scope.userName="";
    $scope.userContact="";
    $scope.userPwd="";
    };
    
    $scope.$watch("userContact", function(){
        if($scope.userContact.length==10){
        $http.post('checkNumber.php', {"number":$scope.userContact}).
  success(function(data, status, headers, config) {
    if(data>0)
    {formSubmit=false;}
            else{
            formSubmit=true;
            }
  }).
  error(function(data, status, headers, config) {
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  });
        }
    });

$scope.newUserSubmit=function(){
 if(formSubmit==true){
     $http.post('newUser.php', {"number":$scope.userContact,"name":$scope.userName,"password":$scope.userPwd,"level":$scope.userType}).
  success(function(data, status, headers, config) {
    if(data>0)
    {toast('<i class=&quot;mdi-action-done green-text&quot;></i><span>New user created</span>', 4000);
    $scope.clear();}
            else{
            toast('New user creation failed', 4000);
                $scope.clear();
            }
  }).
  error(function(data, status, headers, config) {
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  });
        }
    else{
    obj.error="<div class=\"red-text\"><i class=\"mdi-alert-error\"></i>User with this contact exists</div>";
    }
 
 
};
});