<!DOCTYPE html>
<html>
<head>
<title>Invitation</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/libs/angular-material/angular-material.min.css">
    <link rel="stylesheet" href="assets/libs/md-data-table/dist/md-data-table-style.css">
    <!-- <link rel="stylesheet" href="assets/libs/angular-material-icons/angular-material-icons.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>       
<body ng-app="exampleApp6" layout="column" ng-cloak>
    <md-toolbar layout="row" ng-controller="NginvitesToolbar" ng-cloak>
        <md-button ng-click="toggleLeft()" hide-gt-sm>
            <md-icon md-svg-icon="assets/font/ic_menu_white_36px.svg" class="avatar"></md-icon>
        </md-button>
        <h3>SMTP Settings</h3>
    </md-toolbar>
    <div class="container" layout="row" flex>
        <md-sidenav md-is-locked-open="$mdMedia('gt-sm')" class="md-whiteframe-4dp sidenav" md-component-id="left" ng-cloak>
            <md-list>
                <md-list-item>
                    <md-button>
                         <md-icon md-svg-icon="assets/font/ic_apps_black_24px.svg" class="avatar"></md-icon>
                         Home
                    </md-button>
                </md-list-item>
                <md-divider ></md-divider>
                <md-divider ></md-divider>
                <md-list-item>
                    <md-button>
                    </md-button>
                </md-list-item>
                <md-divider ></md-divider>
                <md-list-item>
                    <md-button>
                        <md-icon md-svg-icon="assets/font/ic_send_black_24px.svg" class="avatar"></md-icon>
                        Send / Resend
                    </md-button>
                </md-list-item>
                <md-divider ></md-divider>
                <md-list-item>
                    <md-button>
                        <md-icon md-svg-icon="assets/font/ic_mail_outline_black_24px.svg" class="avatar"></md-icon>
                        Template Settings
                    </md-button>
                </md-list-item>
                <md-divider ></md-divider>
                <md-list-item>
                    <md-button>
                          <md-icon md-svg-icon="assets/font/ic_settings_black_24px.svg" class="avatar"></md-icon>
                          SMTP Settings
                    </md-button>
                </md-list-item>
                <md-divider ></md-divider>
                <md-list-item>
                    <md-button>
                        <md-icon md-svg-icon="assets/font/ic_cloud_upload_black_24px.svg" class="avatar"></md-icon>
                        Import / Export
                    </md-button>
                </md-list-item>
                <md-divider ></md-divider>
            </md-list>
        </md-sidenav>
        <md-content ng-controller="templateForm" flex>
            <form name="userForm">
                <div layout-margin>
                    <md-card style="margin:0px; padding: 15px !important;">
                        <md-input-container class="md-block">
                            <label>From Name</label>
                            <input ng-model="user.subject">
                        </md-input-container>
                        <md-input-container class="md-block">
                            <label>Host</label>
                            <input ng-model="user.subject">
                        </md-input-container>
                        <md-input-container>
                            <label>Username</label>
                            <input ng-model="user.subject">
                        </md-input-container>
                        <md-input-container>
                            <label>Password</label>
                            <input ng-model="user.subject">
                        </md-input-container>
                        <md-input-container class="md-block">
                            <label>SMTP Secure</label>
                            <input ng-model="user.subject">
                        </md-input-container>
                        <md-input-container class="md-block">
                            <label>Port</label>
                            <input ng-model="user.subject">
                        </md-input-container>
                        <md-card-actions layout="row" layout-align="end center">
                            <md-button>Clear</md-button>
                            <md-button>Set</md-button>
                        </md-card-actions>
                    </md-card>
                </div>
            </form>
        </md-content>
    </div>  
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/angular/angular.min.js"></script>
    <script src="assets/libs/angular-sanitize/angular-sanitize.min.js"></script>
    <script src="assets/libs/angular-animate/angular-animate.min.js"></script> 
    <script src="assets/libs/angular-aria/angular-aria.min.js"></script>
    <script src="assets/libs/angular-material/angular-material.min.js"></script>  
    <script src="assets/libs/underscore/underscore-min.js"></script> 
    <script src="assets/libs/lodash/lodash.min.js"></script> 
    <script src="assets/libs/angular-material-icons/angular-material-icons.min.js"></script>
    <script src="assets/libs/md-data-table/dist/md-data-table-templates.js"></script> 
    <script src="assets/libs/md-data-table/dist/md-data-table.js"></script>
    <script src="app/app.module.js"></script>
</body>
</html>