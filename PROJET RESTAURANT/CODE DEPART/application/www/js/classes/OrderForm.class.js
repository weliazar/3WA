'use strict';

/*va etre appeler dans main.js*/
var objetMeal = function () {
this.basket=new BasketSession();

  this.menu = document.getElementById('meal');
  this.buttonSubmit = document.getElementById('addButton');

  this.changeView();

this.menu.addEventListener('change' , this.changeView.bind(this));
this.buttonSubmit.addEventListener('click', this.validateMeal.bind(this));

$(document).on('click', '.trash', this.removeMeal.bind(this));

};

objetMeal.prototype.changeView=function(event){

     var query = $('#meal').val();
     console.log(query);

     $.getJSON(getRequestUrl()+'/meal?id='+query, this.showView);

};


objetMeal.prototype.showView = function(response) {
  console.log(response);


  $('#meal-details p').text(response.Description);
  $('#meal-details strong').text(response.SalePrice);
  $('#meal-details img').attr('src', getWwwUrl()+'/images/meals/'+response.Photo);
};



objetMeal.prototype.validateMeal = function(event) {
	event.preventDefault();

    var mealId = $('#meal').val();
	var name = $('#meal').find('option:selected').text();
    var quantity = $('#quantity').val();
    var salePrice = $('#meal-details strong').text();
    var img = $('#meal-details img').attr('src');

	this.basket.add(mealId, name, quantity, salePrice, img);

}

objetMeal.prototype.removeMeal = function(event) {

    event.preventDefault();
    var index = event.currentTarget.dataset.id;
	this.basket.remove(index);

}
