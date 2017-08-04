'use strict';
angular.module('contactList', [])
    .component('contactList', {
        templateUrl: 'app/components/list-contact/contactlist.template.html',
        controller: function contactList($scope, $mdToast) {
            $scope.contactList =
                [{
                    id: 601,
                    no: 1,
                    subject: 'Uvle Beta Testing',
                    message: 'We are fighting Dreamer! We are fighting Dreamer! We are fighting Dreamer! We are fighting Dreamer! We are fighting Dreamer!',
                    status: 'Not in Use',
                    action: 'sample'
                }];
            $scope.deleteRowCallback = function (rows) {
                $mdToast.show(
                    $mdToast.simple()
                        .content('Deleted row id(s): ' + rows)
                        .hideDelay(3000)
                );
            };
        }
    });
// app.controller('contactlistCtrl', function ($scope, $mdToast) {
//     $scope.deleteRowCallback = function (rows) {
//         $mdToast.show(
//             $mdToast.simple()
//                 .content('Deleted row id(s): ' + rows)
//                 .hideDelay(3000)
//         );
//     };
//     $scope.contactList =
//         [{
//             id: 601,
//             no: 1,
//             subject: 'Uvle Beta Testing',
//             message: 'We are fighting Dreamer! We are fighting Dreamer! We are fighting Dreamer! We are fighting Dreamer! We are fighting Dreamer!',
//             status: 'Not in Use',
//             action: 'sample'
//         }];
// })
//     .controller('actionCtrl', function ($scope, $mdToast) {
//         $scope.user = {
//             subject: 'Subject',
//             message: 'Message...'
//         };
//     });



