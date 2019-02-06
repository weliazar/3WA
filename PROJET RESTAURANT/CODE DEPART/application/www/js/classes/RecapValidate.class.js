
var Recap = function(){

this.basket=new BasketSession();
this.buildRecap();
this.sendToPhp();
}
Recap.prototype.buildRecap = function() {

  var pHT =0;

  var priceHT = 0;
	$('.meal-list tbody').empty();
     for (var i=0; i < this.items.length; i++) {
        priceHT += parseFloat(this.items[i].quantity)*parseFloat(this.items[i].salePrice)

        var tr = $('<tr>');
        tr.append('<td><img src="'+this.items[i].img+'" width="25%">'+this.items[i].name+'</td><td class="number">'+this.items[i].quantity+'</td><td class="number">'+this.items[i].salePrice+'</td><tdclass="number">'+parseFloat(this.items[i].quantity)*parseFloat(this.items[i].salePrice)+'</td>')

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
