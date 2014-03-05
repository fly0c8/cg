angular.module('mainCtrl',[])
	.controller('mainController', function($scope,$http,Comment) {

		$scope.commentData = {};  // object to hold data from the new comment form
		$scope.loading = true; // loading variable for the spinning loading button

		Comment.get()
			.success(function(data) {
				$scope.comments = data;
				$scope.loading = false;
			});


		// save a comment
		$scope.submitComment = function() {
			
			$scope.loading = true;

			Comment.save($scope.commentData)
				.success(function(data) {
					// refresh comment list
					Comment.get()
						.success(function(getData) {
							$scope.comments = getData;
							$scope.loading = false;
						});
				})
				.error(function(data) {
				    $scope.loading = false;
					console.log(data);
				});

		};


		// delete a comment
		$scope.deleteComment = function(id) {

			$scope.loading = true;

			Comment.destroy(id)
				.success(function(data) {
					// refresh comment list
					Comment.get()
						.success(function(getData) {
							$scope.comments = getData;
							$scope.loading = false;
						});

				})
				.error(function(data) {
					$shope.loading = false;
					console.log(data);
				});

		};

	});
