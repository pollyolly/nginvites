angular.module('mainRoute',[])
    .config(function ($routeProvider, $locationProvider) {
        $routeProvider
            .when('/', {

            })
            .when('/send-email', {

            })
            .when('/template-settings', {

            })
            .when('/smpt-settings', {

            })
            .when('/import-export', {

            })
            .otherwise({
                redirectTo: '/'
            });
    });