angular.module('cardService', [])

	.factory('Card', function($http) {

		return {
			get : function() {
				return $http.get('/api/cards');
			},
			show : function(id) {
				return $http.get('/api/cards/' + id);
			},
			save : function(cardData) {
				return $http({
					method: 'POST',
					url: '/api/cards',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(cardData)
				});
			},
			destroy : function(id) {
				return $http.delete('/api/cards/' + id);
			},
			update : function(cardData) {
			  console.log(cardData);
			  return $http({
			    method: 'PATCH',
			    url: '/api/cards/' + cardData.id,
			    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
			    data: $.param(cardData)
			  });
			}
		}

	});
