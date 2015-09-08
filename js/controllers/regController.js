
'use strict';

carmodule.controller('regController',['$scope','userService', function($scope, userService){
        
        $scope.adduser = function(user){
            
            userService.adduser(user);
            
        };
       $scope.validate = function(user){ 
           
          $scope.emval = userService.email_validaiton(user);
          
       };
}]);

//angular.module('mcookies', ['ngCookies'])
//
//.controller('cookiesCtrl', ['$scope','$cookies', function($scope,$cookies) {
//        
//  // Put cookie
//  $cookies.put('myFavorite','oatmeal');
//  
//  // Get cookie
//   $scope.favoriteCookie = $cookies.get('myFavorite');
//  
//  // Removing a cookie
////  $cookieStore.remove('myFavorite');
//}]);

