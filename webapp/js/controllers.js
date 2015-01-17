var stealthApp = angular.module('stealth', []);

stealthApp.controller('status',
                     function ($scope, $http, $interval){
var obj = {};
    
function xhr(){
$http.get('statusCards.php').
  success(function(data, status, headers, config) {
    obj.online=data;
  }).
  error(function(data, status, headers, config) {
    obj.online='ERROR';
  });
}
    
    $interval(xhr, 1000);
    $scope.obj=obj;
});