/*
 * Created by n81ur3 on 6/28/17.
 */

function testjs(level) {
    var color = "white";
    switch (level) {
        case "green":
            color = "green";
            break;
        case "red":
            color = "red";
            break;
        case "blue":
            color = "blue";
            break;
        default:
            alert("something");
    }
    var select = document.getElementById("select1");
    select.style.background = color;
}

(function() {
    'use strict';

    angular.module('navBarDemoBasicUsage', ['ngMaterial'])
        .controller('AppCtrl', AppCtrl);

    function AppCtrl($scope) {
        $scope.currentNavItem = 'page1';
    }
})();
