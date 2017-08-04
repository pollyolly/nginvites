'use strict';
angular.module('headerNav',[])
    .component('headerNav', {
        templateUrl: 'app/components/header/header.template.html',
        controller: function headerNavigation($scope, $timeout, $mdSidenav) {
            $scope.headerList =
                [{
                    icon: "assets/font/ic_menu_white_36px.svg",
                    title: "Invites"
                }];
            $scope.toggleLeft = buildToggler('left');
            $scope.toggleRight = buildToggler('right');
            function buildToggler(componentId) {
                    return $mdSidenav(componentId).toggle();
            }
        }
    });