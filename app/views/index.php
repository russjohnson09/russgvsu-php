<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Flashcard App</title>

	<!-- CSS -->

	<!-- JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
		<script src="js/controllers/mainCtrl.js"></script>
		<script src="js/services/cardService.js"></script>
		<script src="js/app.js"></script>
		
</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="cardApp" ng-controller="mainCtrl">
<div class="col-md-8 col-md-offset-2">

  <h1 ng-show=cardId>Card {{cardId}} of Deck {{deckId}}</h1>
	<!-- card form -->
	<form>

		<!-- front text -->
		<div class="form-group">
			<input type="text" name="front" ng-model="cardData.front" placeholder="Front">
		</div>

		<!-- back text -->
		<div class="form-group">
			<input type="text" name="back" ng-model="cardData.back" placeholder="Back">
		</div>

		<div class="form-group text-right">	
			<button ng-click="submitCard()">New</button>
			<button ng-disabled="!cardData.id" ng-click="updateCard()">Update</button>
		</div>
	</form>

	<pre>
	{{ cardData }}
	</pre>

	<p class="text-center" ng-show="isLoading"><span class="loading">Loading</span></p>
	
	<div class="sort">
	  <div>Sort by</div>
	  <label for="deck">Deck</label>
	  <input value="deck" id="deck" type="radio" name="sortby">
	  <label for="date">Date</label>
	  <input value="date" id="date" type="radio" name="sortby">
	</div>

	<div class="cardList" ng-hide="isLoading" ng-repeat="card in cards">
	  <div ng-click="select(card)" 
	    ng-class="$parent.cardData.id==card.id ? 'selected' : ''">
		  <h3>Card #{{ card.id }} <small>by {{ card.author }} reviewed 
		  {{ card.count }}</h3>
		  <p>{{ card.front }}</p>
		  <p>{{ card.back }}</p>
		  <pre></pre>
	  </div>

		<p><a href="#" ng-click="deleteCard(card.id)" >Delete</a></p>
	</div>

</div>

	<style>
	  * {
	    margin:0;padding:0;
	  }
	  body.container {
	    margin: 50px;
	  }
	  .sort {
	    margin: 0 0 10px 0;
	  }
	  .selected {
	    background-color: blue;
	  }
	</style>

</body>
</html>
