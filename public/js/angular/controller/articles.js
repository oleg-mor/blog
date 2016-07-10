blog.controller('ArticlesController', function($scope, $http){
    $http.get('/api/articles/get').success(function(data) {
        console.log("hallo");
        $scope.list = data;

    });
});
