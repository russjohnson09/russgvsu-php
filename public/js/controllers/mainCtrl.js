angular.module('mainCtrl', [])

	.controller('mainCtrl', function($scope, $http, Card) {
		// object to hold all the data for the new comment form
		$scope.cardData = {};
		
		$scope.select = function(card) {
		  $scope.cardData = card;
		};
		
		$scope.isLoading = true;
			
		$scope.refresh = function() {
		  Card.get()
	    .success(function(getData) {
		    $scope.cards = getData;
		    $scope.isLoading = false;
	    });
		};

		$scope.submitCard = function() {
			$scope.isLoading = true;

			// save the comment. pass in comment data from the form
			Card.save($scope.cardData)
				.success(function(data) {
          $scope.refresh();
				})
				.error(function(data) {
					console.log(data);
				});
		};
		
		$scope.updateCard = function() {
		  $scope.isLoading = true;
		  Card.update($scope.cardData)
				.success(function(data) {
				  $scope.refresh();
				})
				.error(function(data) {
					console.log(data);
				});
		};

		// function to handle deleting a comment
		$scope.deleteCard = function(id) {
			$scope.loading = true; 

			Card.destroy(id)
				.success(function(data) {
					// if successful, we'll need to refresh the comment list
					Card.get()
						.success(function(getData) {
							$scope.cards = getData;
							$scope.loading = false;
						});
				});
		};
		
		$scope.refresh();

	});
