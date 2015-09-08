
'use strict';

carmodule.controller('loginCtrl', ['$scope', 'userService', function ($scope, userService) {

        $scope.login_valdiation = function (user) {
            
            userService.user_validation(user);
          
        };
        $scope.user_stylereset = function (user) {
            
            userService.user_stylereset(user);
          
        };
        
    }]);


