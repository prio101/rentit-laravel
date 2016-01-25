/**
 * Created by prio on 1/25/16.
 */
'use strict' ;

var app = angular.module('rentItApp' , ['ngRoute']);

app.config(function($interpolateProvider){
    $interpolateProvider.startSymbol("<%=").endSymbol("%>");
});

app.constant('API_URL' , 'http://rentit.dev/api/v1/');