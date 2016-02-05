/**
 * Created by prio on 1/25/16.
 */
'use strict' ;

var app = angular.module('rentItApp' , ['ngRoute']);

app.config(function($interpolateProvider){
    $interpolateProvider.startSymbol("<%=").endSymbol("%>");
});

app.constant('API_URL' , 'http://rentit.dev/api/v1/');
/**
 * Created by prio on 1/25/16.
 */

app.controller('carsController' , function( $scope, $http , API_URL ){
    /**
     * Retrieve the cars listing from the API
     * @return json
     **/
    $http.get(API_URL+"cars").success(function(response){
        $scope.cars = response ;

    });
});


/**
 * Created by prio on 1/25/16.
 */



app.controller("extraController" , function($scope , $http , API_URL){
        /**
        *   Extra Data from the api
         *   @return json
        * */
        $http.get(API_URL+'extra').suceess(function(response){
            $scope.extra = response ;
        });
});
/**
 * Created by prio on 1/25/16.
 */


app.controller('priceController' , function($scope , $http , API_URL){
    /**
    *  Getting the http price data from the api
     *  @return JSON
    * */

    $http.get(API_URL+'price').success(function(response){
        $scope.price = response ;
    }) ;
});
//# sourceMappingURL=all.js.map
