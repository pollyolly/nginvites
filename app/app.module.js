(function(){
    'use strict';

    angular.module('exampleApp6', ['ngMaterial', 'mdDataTable']);
    angular.module('exampleApp6').directive('mdtCustomCellButton', function () {
    return {
        template: '<md-button class="md-primary md-raised">Angular Material button</md-button>',
    };
    });


    // angular.module('exampleApp6', ['ngMaterial', 'mdDataTable']);
    angular.module('exampleApp6').controller('ExampleController6', function($scope, $mdToast){
         $scope.deleteRowCallback = function(rows){
            $mdToast.show(
                $mdToast.simple()
                    .content('Deleted row id(s): '+rows)
                    .hideDelay(3000)
            );
        };

        $scope.hello = function() {
                console.log( 'Hello world');
                };

        $scope.contactlist = [
            {
                id: 601,
                no: 1,
                userid: 1595,
                name: 'John Mark Roco',
                email: 'sample@gmail.com',
                answer: 'Yes',
                message: 'testing messages and what more ther\'s more thatn that.',
                status: 'pending',
                timelogs: 'Sent:2017-06-24 01:50:04 Response:2017-06-24 03:28:53',
                action: 'sample'
            },
            {
                id: 601,
                no: 1,
                userid: 1595,
                name: 'John Mark Roco',
                email: 'sample@gmail.com',
                answer: 'Yes',
                message: 'testing messages and what more ther\'s more thatn that.',
                status: 'pending',
                timelogs: 'Sent:2017-06-24 01:50:04 Response:2017-06-24 03:28:53',
                action: 'sample'
            },
            {
                id: 601,
                no: 1,
                userid: 1595,
                name: 'John Mark Roco',
                email: 'sample@gmail.com',
                answer: 'Yes',
                message: 'testing messages and what more ther\'s more thatn that.',
                status: 'pending',
                timelogs: 'Sent:2017-06-24 01:50:04 Response:2017-06-24 03:28:53',
                action: 'sample'
            }
        ];
    });
}());