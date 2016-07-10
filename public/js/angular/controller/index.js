blog.controller('IndexController', function ($scope, $http) {

});

blog.config(['$routeProvider',
    function ($routeProvider) {

        $routeProvider.
        when('/articles', {
            templateUrl: '/js/angular/views/articles/articles.html'
        }).when('/gallery', {
            templateUrl: '/js/angular/views/gallery/gallery.html'
        });
    }
]);


