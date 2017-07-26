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
<body ng-app="exampleApp6" layout="column">
    <md-toolbar>
        <h3>Invites</h3>
    </md-toolbar>
    <div class="container" layout="row" flex>
        <md-sidenav md-is-locked-open="true" class="md-whiteframe-4dp sidenav" ng-cloak>
            <md-list>
                <md-list-item>
                    <md-button flex>
                        <!-- <md-icon md-svg-scr="" class="avatar"></md-icon>  -->Send
                    </md-button>
                </md-list-item>
                <md-divider ></md-divider>
                <md-list-item>
                    <md-button flex>
                        <!-- <md-icon md-svg-scr="" class="avatar"></md-icon> -->Resend
                    </md-button>
                </md-list-item>
                <md-divider ></md-divider>
                <md-list-item>
                    <md-button flex>
                        <!-- <md-icon md-svg-scr="" class="avatar"></md-icon> -->Messages
                    </md-button>
                </md-list-item>
                <md-divider ></md-divider>
                <md-list-item>
                    <md-button flex>
                          <!-- <md-icon md-svg-scr="" class="avatar"></md-icon>  -->SMTP 
                    </md-button>
                </md-list-item>
                <md-divider ></md-divider>
                <md-list-item>
                    <md-button flex>
                        <!-- <md-icon md-svg-scr="" class="avatar"></md-icon> -->Import
                    </md-button>
                </md-list-item>
                <md-divider ></md-divider>
                <md-list-item>
                    <md-button flex>
                        <!-- <md-icon md-svg-scr="" class="avatar"></md-icon> -->Export
                    </md-button>
                </md-list-item>
                <md-divider ></md-divider>
            </md-list>
        </md-sidenav>
        <md-content id="content" ng-controller="ExampleController6" ng-cloak flex >
            <div layout-margin>
                <div style="font-size: 12px;padding:5px;margin:0; margin-bottom:8px; line-height:18px; border: 1px solid #c4c4c4;background: white;">
                    <ng-md-icon icon="info" size="16" style="float:left;fill:#479BFF;margin-right: 5px;"></ng-md-icon> 
                    <span><i>Search</i> feature works with non-ajax/non-promise data. You have the possibility to change the dataset in your table which then immediately respond on that change.</span>
                </div> 
                <md-card style="margin:0px">
                    <md-input-container style="margin:15px;">
                        <label>Filter by search</label>
                        <input type="text" ng-model="filterName">
                    </md-input-container>
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
                            <mdt-custom-cell column-key="action">        
                                <mdt-custom-cell-button ng-click="clientScope.hello()">Angular Material button</mdt-custom-cell-button>
                            </mdt-custom-cell>
                            
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
    <script src="app.module.js"></script> 
</body>
</html>


