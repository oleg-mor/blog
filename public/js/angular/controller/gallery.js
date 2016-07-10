blog.controller('GalleryController', function($scope, $http){
    $http.get('/api/gallery/get').success(function(data) {
        console.log(data);
        $scope.list = data;

    });
});

