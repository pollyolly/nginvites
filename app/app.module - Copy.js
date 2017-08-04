(function(){
    'use strict';
    angular.module('exampleApp6', ['ngMaterial', 'mdDataTable', 'sidenavList'])
            .controller('ExampleController6', function($scope, $mdToast){
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
        ];
        $scope.templatelist = [
            {
                id: 601,
                no: 1,
                subject: 'Uvle Beta Testing',
                message: 'We are fighting Dreamer! We are fighting Dreamer! We are fighting Dreamer! We are fighting Dreamer! We are fighting Dreamer!',
                status: 'Not in Use',
                action: 'sample'
            },
        ];
    })
    
    .controller('NginvitesToolbar', function($scope, $timeout, $mdSidenav){
        $scope.toggleLeft = buildToggler('left');
        $scope.toggleRight = buildToggler('right');
        function buildToggler(componentId){
            return function(){
                $mdSidenav(componentId).toggle();
            }
        }
    })
    .controller('templateForm', function($scope){
        $scope.user = {
            subject: 'Subject',
            message: 'Message...'
            };
    });
}());

