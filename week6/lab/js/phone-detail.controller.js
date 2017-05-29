(function () 
{
    //this forces correct javascript syntax
    'use strict';
    angular
            .module('app')
            .controller('PhoneDetailController', PhoneDetailController);
    
    //this establishes the app connection to add the correct elements to the page
    PhoneDetailController.$inject = ['$routeParams', 'PhonesService'];

    function PhoneDetailController($routeParams, PhonesService) 
    {
        var vm = this;
        vm.phone = {};
        var id = $routeParams.phoneId;

        activate();

        function activate() 
        {
            PhonesService.findPhone(id).then(function (response) {
                vm.phone = response;
            });
        }
    }
})();
