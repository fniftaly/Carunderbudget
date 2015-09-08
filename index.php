<!DOCTYPE html>
<html>
    <head>
        <title>File Upload</title>
        <script src="js/libs/angularjs/angular.js" type="text/javascript"></script>
        <script src="js/angular_fileupload.js" type="text/javascript"></script>
        <script>
            var app = angular.module('myApp', ['angularFileUpload']);
            app.controller('MainCtrl', ['$scope', '$timeout', '$upload', function ($scope, $timeout, $upload) {
                    $scope.uploadResult = [];
                    $scope.onFileSelect = function ($files) {
                        //$files: an array of files selected, each file has name, size, and type.
                        for (var i = 0; i < $files.length; i++) {
                            var $file = $files[i];
                            $upload.upload({
                                url: 'src/phpfiles/upload.php',
                                file: $file,
                                progress: function (e) {
                                }
                            }).then(function (response) {
                                // file is uploaded successfully
                                $timeout(function () {
                                    $scope.uploadResult.push(response.data);
                                    console.log($scope.uploadResult);
                                });
                            });
                        }
                    }
                }]);
        </script>
    </head>
    <body ng-app="myApp" ng-controller="MainCtrl">
        <!--<form action="src/phpfiles/uploadservice.php" method="post" enctype="multipart/form-data">-->
        <form>
            <div style="text-align: left;font-size: 20px;padding: 10px;color: #487eaa;">
                <font> Upload Resume</font>
            </div>
            <div class="file-upload">
                <input type="file" id="i_file" name="file[]" ng-file-select="onFileSelect($files)" multiple />
                <div ng-repeat="files in uploadResult">
                    <!-- in case of error show error message with file name-->
                    <span class='label label-info'>{{files.name}}</span><br/>
                </div>
            </div>
            <!--<button type="submit">Submit</button>-->
        </form>
    </body>
</html>

