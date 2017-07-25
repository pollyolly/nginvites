<!DOCTYPE html>
<html>
<head>
<title>Invitation</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/libs/angular-material/angular-material.min.css">
    <link rel="stylesheet" href="assets/libs/md-data-table/dist/md-data-table-style.css">
</head>
    <body>
<div ng-app="exampleApp6" ng-controller="ExampleController6" layout-margin>
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
  <mdt-table mdt-row="{
                      'data': filteredItems,
                      'table-row-id-key': 'id',
                      'column-keys': ['name', 'calories', 'fat', 'carbs', 'protein', 'sodium', 'calcium', 'iron']
                      }">
    <mdt-header-row>
      <mdt-column align-rule="left">Dessert (100g serving)</mdt-column>
      <mdt-column align-rule="right">Calories</mdt-column>
      <mdt-column align-rule="right">Fat (g)</mdt-column>
      <mdt-column align-rule="right">Carbs (g)</mdt-column>
      <mdt-column align-rule="right">Protein (g)</mdt-column>
      <mdt-column align-rule="right">Sodium (mg)</mdt-column>
      <mdt-column align-rule="right">Calcium (%)</mdt-column>
      <mdt-column align-rule="right">Iron (%)</mdt-column>
    </mdt-header-row>
  </mdt-table>
</div>
     <!-- <body ng-app="exampleApp19" layout="column">
    <md-toolbar>
        <h3>Invites</h3>
    </md-toolbar>
    <div class="container" layout="row" flex>
        <md-sidenav md-is-locked-open="true" class="md-whiteframe-4dp sidenav">
            <md-list>
                
                <md-list-item>
                    <md-button>
                        <md-icon md-svg-scr="" class="avatar"></md-icon>Send
                    </md-button>
                </md-list-item>
                <md-divider ></md-divider>
                <md-list-item>
                    <md-button>
                        <md-icon md-svg-scr="" class="avatar"></md-icon>Create
                    </md-button>
                </md-list-item>
                <md-divider ></md-divider>
            </md-list>
        </md-sidenav>
        <md-content id="content" class="" ng-controller="AppCtrl" ng-cloak flex >
            <md-list class="md-whiteframe-4dp">
                <md-list-item class="md-3-line " ng-repeat="item in messages">
                    <div class="md-list-item-text">
                    <h3>{{item.name}}</h3>
                    <h4>{{item.email}}</h4>
                    <p>{{item.userid}}</p>
                    <p>{{item.message}}</p>
                    <p>{{item.timestamp}}</p>
                    </div>
                    <md-button class="md-secondary">Yes</md-button>
                    <md-button class="md-secondary">Response</md-button>
                    <md-button class="md-secondary"><i class="material-icons">more_vert</i></md-button>
                    <md-divider ng-if="!$last"></md-divider>
                </md-list-item>
            </md-list>
        </md-content>
    </div>  -->
    <!--<div ng-controller="YourController">

    </div>-->
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


