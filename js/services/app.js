
'use strict';

var carmodule = angular.module('carmodule', ['ngRoute','angularFileUpload']);
//
        carmodule.config(['$routeProvider', function ($routeProvider) {

                $routeProvider
                        .when('/partials/table', {
                            templateUrl: 'partials/table/table.html', controller:'tablecrl'
                    
                        }).when('/partials/register', {
                            templateUrl: 'partials/register/register.html',
                        })
                        
                        .when('/partials/contactus', {
                            templateUrl: 'partials/contactus/contactus.html',
                        })
                        .when('/partials/dataupload', {
                            templateUrl: 'partials/dataupload/fileupload.html',
                        })
                        .otherwise({redirectTo: '/partials/table'});
            }]);


