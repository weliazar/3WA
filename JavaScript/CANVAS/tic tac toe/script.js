var canvas = document.getElementById("myCanvas");

var context = canvas.getContext('2d');
context.fillStyle = 'red';


context.beginPath();

context.moveTo(220, 20);

context.lineTo(220, 620);


context.moveTo(420, 20);

context.lineTo(420, 620);


context.moveTo(20, 220);

context.lineTo(620, 220);


context.moveTo(20, 420);

context.lineTo(620, 420);

context.setLineDash([10, 10]);

context.stroke();
context.closePath();



function cercle(x, y) {
    context.beginPath();
    context.setLineDash([]);

    context.arc(x, y, 80, 0,
        Math.PI * 2, true);

    context.stroke();

    context.closePath;

}



function croix(x, y) {
    context.moveTo(x - 50, y - 50);
    context.lineTo(x + 50, y + 50);
    context.moveTo(x + 50, y - 50);
    context.lineTo(x - 50, y + 50);
    context.stroke();
    context.closePath();

}




for (var i = 0; i <= 2; i++) {

    var x = 200 * i + 120;

    var h = 0;


    for (var j = 0; j <= 2; j++) {

        var y = 200 * j + 120;
        h += 90;

        context.strokeStyle = 'hsl(' + h + ',75%,50%)';
        var nombre = Math.random();
        if (nombre > 0.5) {


            cercle(x, y);
        } else {
            croix(x, y);

        }

    }

}
console.log(nombre);


function clickCanvas(event) {
     
}
canvas.addEventListener('click', clickCanvas);




