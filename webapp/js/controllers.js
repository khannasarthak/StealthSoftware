var stealthApp = angular.module('stealth', []);

stealthApp.controller('status',
                     function ($scope, $http, $interval){
var obj = {};
    
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
    
    $interval(xhr, 1000);
    $interval(income, 1000);
    $interval(unique, 1000);
    $scope.obj=obj;
});