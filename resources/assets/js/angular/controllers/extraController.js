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