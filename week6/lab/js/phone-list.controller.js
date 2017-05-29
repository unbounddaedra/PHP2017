

(function () 
{
   //below refrences the phone-list-controller file
    'use strict';
    angular
            .module('app')
            .controller('PhoneListController', PhoneListController);
    
    PhoneListController.$inject = ['PhonesService'];
    //ajax call, returns data as a promise
    //sets view model for phones to that data
    //allows auto-update while page is running
    function PhoneListController(PhonesService) 
    {
        var vm = this;

        vm.phones = [];
        activate();

        function activate() 
        {
            PhonesService.getPhones().then(function (response) {
                vm.phones = response;
            });
        }
    }
})();
