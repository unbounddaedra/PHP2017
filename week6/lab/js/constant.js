(function () 
{
    'use strict';
    //here we add a url reference to the json files for where index.html will read the files
    angular
            .module('app')
            .constant('REQUEST', {
                'Phones': './data/phones.json'
            });
})();
