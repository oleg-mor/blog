var blog = angular.module('blog', [
    'ngRoute'

]).config(function($interpolateProvider){
    $interpolateProvider.startSymbol('[[').endSymbol(']]');
    
});

