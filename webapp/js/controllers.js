var stealthApp=angular.module('stealth',[]);

stealthApp.controller('usersOnline',
                     function($scope,$http,$interval){
var users={};
    
function xhr(){
$http.get('loggedon.php').
  success(function(data, status, headers, config) {
    users.online=data;
  }).
  error(function(data, status, headers, config) {
    users.online='ERROR';
  });
}
    
    $interval(xhr, 1000);
    
    users.online='25';
    $scope.users=users;
});