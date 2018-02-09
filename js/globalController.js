myApp.controller('globalController', ['$scope', '$sce', function($scope, $sce){
    $scope.zendesk = {
        json:null
    };
    $scope.process = function (zendeskForm) {
        if(zendeskForm.$valid){
            $scope.formSubmitted = false;

            $scope.zendesk = JSON.parse($scope.json);
           }else{
            $scope.formSubmitted = true;
        }
    }
}]);