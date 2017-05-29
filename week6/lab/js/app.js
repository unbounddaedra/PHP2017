

(function () 
{
    'use strict';
    angular
            .module('app', ['ngRoute'])
            .config(config);


    config.$inject = ['$routeProvider'];

    function config($routeProvider) 
    {
        $routeProvider.
        //"when" is used for directing modules to the js and html templates, a kind of if/else if arrangement
                when('/', 
                {
                    templateUrl: 'js/phone-list.template.html',
                    controller: 'PhoneListController',
                    controllerAs: 'vm'
                }).
                        
                when('/phones/:phoneId', 
                {
                    templateUrl: 'js/phone-detail.template.html',
                    controller: 'PhoneDetailController',
                    controllerAs: 'vm'
                }).
                otherwise({
                    redirectTo: '/'

                });
    }





})();
