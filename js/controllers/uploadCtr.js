
'use strict';

carmodule.controller('uploadCtrl', ['$scope', '$timeout', '$upload', function ($scope, $timeout, $upload) {
        
        $scope.uploadResult = [];
        
        $scope.onFileSelect = function ($files) {
           var $f_count = $files.length;                

            if($f_count > 5){
                
               $f_count = 5; 
            }
            
            for (var i = 0; i < $f_count; i++) {
                
                var $file = $files[i];
                
                $upload.upload({
                    
                    url: 'src/phpfiles/upload.php',
                    
                    file: $file,
                    
                    progress: function (e) {
                        
                    }
                }).then(function (response) {
                    
                    $timeout(function () {
                        
                        $scope.uploadResult.push(response.data);
                        
//                        console.log($scope.uploadResult);
                    });
                });
            }
        };
    }]);



