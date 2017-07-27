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
    <md-toolbar layout="row">
        <md-button>
            <md-icon md-svg-icon="assets/font/ic_menu_white_36px.svg" class="avatar"></md-icon>
        </md-button>
        <h3>Invites</h3>
    </md-toolbar>
    <div class="container" layout="row" flex>
        <md-sidenav md-is-locked-open="$mdMedia('gt-sm')" class="md-whiteframe-4dp sidenav" ng-cloak>
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
        <md-content id="content" ng-controller="ExampleController6" ng-cloak flex >
            <div layout-margin>
                <md-card style="margin:0px">
                    <div layout="row" flex>
                    <md-input-container style="margin:10px 0px 0px 15px">
                        <md-button class="md-primary md-raised">
                            <md-icon md-svg-icon="assets/font/ic_add_white_24px.svg" class="avatar"></md-icon>
                            New
                        </md-button>
                    </md-input-container>
                        <md-input-container style="margin:20px 22px 0px 22px" flex>
                            <label>Filter by search</label>
                            <input type="text" ng-model="filterName">
                        </md-input-container>
                        <md-input-container>
                            <md-button class="md-icon-button">
                                <md-icon md-svg-icon="assets/font/ic_more_vert_black_24px.svg" class="avatar"></md-icon>
                            </md-button>
                        </md-input-container>
                    </div>
                    <div ng-hide="true">
                        {{(filteredItems = (nutritionList | filter: filterName))}}
                    </div>
                </md-card>
                <mdt-table 
                            table-card="{visible: true, title: 'Contact List'}"
                            selectable-rows="true"
                            alternate-headers="'contextual'"
                            paginated-rows="{isEnabled: true, rowsPerPageValues: [5,10,20,50]}"
                            delete-row-callback="deleteRowCallback(rows)"
                            mdt-row="{ 'data': filteredItems,
                                      'table-row-id-key': 'id',
                                      'column-keys': ['no', 'userid', 'name', 'email', 'answer', 'message', 'status', 'timelogs', 'action'] }">
                    <mdt-header-row>
                        <mdt-column align-rule="left" 
                                    column-sort="true">#</mdt-column>
                        <mdt-column align-rule="right"
                                    column-sort="true">UserID</mdt-column>
                        <mdt-column align-rule="right"
                                    column-sort="true">Name</mdt-column>
                        <mdt-column align-rule="right"
                                    column-sort="true">Email</mdt-column>
                        <mdt-column align-rule="right"
                                    column-sort="true">Answer</mdt-column>
                        <mdt-column align-rule="right"
                                    column-sort="true">Message</mdt-column>
                        <mdt-column align-rule="right"
                                    column-sort="true">Status</mdt-column>
                        <mdt-column align-rule="right"
                                    column-sort="true">TimeLogs</mdt-column>
                        <mdt-column align-rule="right">Action</mdt-column>
                       
                    </mdt-header-row>
                         <mdt-row 
                                ng-repeat="list in contactlist"
                                table-row-id="list.id">
                            <mdt-cell>{{list.no}}</mdt-cell>
                            <mdt-cell>{{list.userid}}</mdt-cell>
                            <mdt-cell>{{list.name}}</mdt-cell>
                            <mdt-cell>{{list.email}}</mdt-cell>
                            <mdt-cell>{{list.answer}}</mdt-cell>
                            <mdt-cell>{{list.message}}</mdt-cell>
                            <mdt-cell>{{list.status}}</mdt-cell>
                            <mdt-cell>{{list.timelogs}}</mdt-cell> 
                            <!-- https://codepen.io/iamisti/pen/PGxwAV -->
                            <!-- <mdt-cell>{{list.action}}</mdt-cell>  -->
                             <!-- Solution: https://github.com/iamisti/mdDataTable/issues/153  -->
                             <mdt-cell html-content="true">
                                    <md-button class="md-icon-button md-primary" aria-label="Edit">
                                        <md-icon md-svg-icon="assets/font/ic_mode_edit_black_24px.svg"></md-icon>
                                    </md-button>
                            </mdt-cell>
                            <!-- <mdt-custom-cell column-key="action">        
                                <mdt-custom-cell-button ng-click="clientScope.hello()">Angular Material button</mdt-custom-cell-button>
                            </mdt-custom-cell> -->
                            
                        </mdt-row>  
                </mdt-table>
            </div>
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