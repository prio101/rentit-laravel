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