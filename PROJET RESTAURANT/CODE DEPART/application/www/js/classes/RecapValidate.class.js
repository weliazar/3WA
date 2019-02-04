
var Recap = function(){

this.basket=new BasketSession();
this.buildRecap();
this.sendToPhp();
}
Recap.prototype.buildRecap = function() {

  var pHT =0;

  $('meal-list tbody').empty();

  for (var i=0; i< this.basket.items.length; i++){
    pHT += parseFloat(this.basket.items[i].quantity)*parseFloat(this.basket.items[i].salePrice);

    var tr = $('<tr>');
    tr.append('<td> <img src="'+this.basket.items[i].img+'" width=25%">'+this.basket.items[i].name+'</td> <td class="number">'+this.basket.items[i].quantity+'</td><td class="number">'+this.basket.items[i].salePrice+'</td>');

  $('.meal-list tbody').append(tr);
  }
/*toFixed 2 deux chiffre apres la virgule*/
var tva =(pHT*0.2).toFixed(2);
var ttc=(parseFloat(pHT)+parseFloat(tva)).toFixed(2);

$('#totalht').text(pHT.toFixed(2)+'€');
$('#tva').text(tva+'€');
$('#totalttc').text(ttc+'€');

}
Recap.prototype.sendToPhp = function() {
	var order = JSON.stringify(this.basket.items);

    $('#orderValidation').val(order);


}
