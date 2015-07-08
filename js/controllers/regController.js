
'use strict';

carmodule.controller('regController',['$scope','userService', function($scope, userService){
        
        $scope.adduser = function(user){
            
            userService.adduser(user);
            
        };
       $scope.validate = function(user){ 
           
          $scope.emval = userService.validate(user);
          
       };
}]);


