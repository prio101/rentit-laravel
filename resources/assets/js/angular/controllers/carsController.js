/**
 * Created by prio on 1/25/16.
 */
'use strict' ;

app.controller('carsController' , function( $scope, $http , API_URL ){
    /**
     * Retrieve the cars listing from the API
     * @return json
     **/
    $http.get(API_URL+"cars").success(function(response){
        $scope.cars = response ;

    });
});

