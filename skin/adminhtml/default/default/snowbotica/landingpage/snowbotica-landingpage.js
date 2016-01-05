
console.log('working')

var Artboard = angular.module('Artboard', []);

var MaterialCtrl = Artboard.controller('MaterialCtrl', ['$scope', function($scope){
  
  $scope.go = 'gogogogogogogogogo';
  
  $scope.dogo = function(yu){

      console.log(yu);
  }

}]);



//     var todoList = this;
//     todoList.todos = [
//       {text:'learn angular', done:true},
//       {text:'build an angular app', done:false}];
 
//     todoList.addTodo = function() {
//       todoList.todos.push({text:todoList.todoText, done:false});
//       todoList.todoText = '';
//     };
 
//     todoList.remaining = function() {
//       var count = 0;
//       angular.forEach(todoList.todos, function(todo) {
//         count += todo.done ? 0 : 1;
//       });
//       return count;
//     };

//     todoList.doAjax = function(id, key) {
//       alert(id+key);
//     }
 
//     todoList.archive = function() {
//       var oldTodos = todoList.todos;
//       todoList.todos = [];
//       angular.forEach(oldTodos, function(todo) {
//         if (!todo.done) todoList.todos.push(todo);
//       });
//     };
// });


// Artboard.factory("ListingModel", function($http,$resource) {

//   var factory = {};
//   var url = "/api/listings";

//   factory.getListings = function () {
//     return $http.get(url);
//   };

//   factory.showListing = function (id) {
//     return $http.get(url + '/' + id);
//   };

//   factory.insertListing = function (dataObject) {
//     console.log(dataObject);
//     return $http.post(url, dataObject);
//   };
//   // factory.updateListing = function (id, dataObject) {
//   //   return $http.put(url + '/' + cust.ID, cust)
//   // };

//   factory.deleteListing = function (id) {
//         return $http.delete(url + '/' + id);
//   };
//   return factory
// });