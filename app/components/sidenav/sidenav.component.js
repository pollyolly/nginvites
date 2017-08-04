'use strict';
angular.module('sidenavList',)
.component('sidenavList',{
    templateUrl: 'app/components/sidenav/sidenav.template.html',
    controller: function sidenavList($scope){
        $scope.sidenavList = 
        [   { 
                name: 'Home',
                icon: 'assets/font/ic_apps_black_24px.svg',
                url: '#/home'
            },
            { 
                name: '',
                icon: '',
                url: ''
            },
            { 
                name: 'Send Email',
                icon: 'assets/font/ic_send_black_24px.svg',
                url: '#/send-email'
            },
            { 
                name: 'Template Settings',
                icon: 'assets/font/ic_mail_outline_black_24px.svg',
                url: '#/template-settings'
            },
            { 
                name: 'Smtp Settings',
                icon: 'assets/font/ic_settings_black_24px.svg',
                url: '#/smtp-settings'
            },
            { 
                name: 'Import / Export',
                icon: 'assets/font/ic_cloud_upload_black_24px.svg',
                url: '#/import-export'
            }
        ];
    }
});