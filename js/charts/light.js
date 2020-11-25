/**
*Script para la gráfica del sensor de luz que se usa en view/reviewNodoViex.php
* Aquí se define el funcionamiento y las opciones de la gráfica, implementando la bilbioteca chartjs
*/
$(document).ready(function () {
    //Modificar el ancho de la gráfica
    var newwidth = $('.chartAreaWrapper2').width() + 400;
    $('.chartAreaWrapper2').width(newwidth);

    //Se ingresan los datos que va a tener la gráfica
    var chartData = {
        labels: dateLight,
        datasets: [{
            label: "Luminosidad",
            data: valueLight,
	    backgroundColor: 'rgba(14, 191, 227,0.5)',
            borderColor: 'rgb(14, 191, 227)',
	    fontSize:25
        }]
    };

    $(function () {
        var rectangleSet = false;
        var canvas = $('#chartLight');
        var chartL = new Chart(canvas, {
            type: 'line',
            data: chartData,
            maintainAspectRatio: false,
            responsive: true,
            options: {
                legend: {
                  labels: {
			display: true,
                 	fontColor: 'white'
                 	}
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            fontSize: 12,
                            display: false
                        }
                    }],

                    yAxes: [{
                        ticks: {
                            fontSize: 15,
                            beginAtZero: true,
			    fontColor: 'white'
                        },

			scaleLabel: {
         		        display: true,
	  			color : 'rgb(255, 255, 255)',
	  			fontColor:'rgb(255, 255, 255)',
	  			fontSize:25,
          			labelString: 'Valor'
        		}

                    }]
                },
		/**
		 *Funcion obtenida  de https://jsfiddle.net/EmmaLouise/eb1aqpx8/3/ , 
		 *se utiliza para poder tener una barra de scroll sobre la gráfica
		**/
                animation: {
                    onComplete: function () {
                        if (!rectangleSet) {
                            var scale = window.devicePixelRatio;
                            var sourceCanvas = chartL.chart.canvas;
                            var copyWidth = chartL.scales['y-axis-0'].width - 10;
                            var copyHeight = chartL.scales['y-axis-0'].height + chartL.scales['y-axis-0'].top + 10;

                            var targetCtx = document.getElementById("axis-Test").getContext("2d");

                            targetCtx.scale(scale, scale);
                            targetCtx.canvas.width = copyWidth * scale;
                            targetCtx.canvas.height = copyHeight * scale;

                            targetCtx.canvas.style.width = `${copyWidth}px`;
                            targetCtx.canvas.style.height = `${copyHeight}px`;
                            targetCtx.drawImage(sourceCanvas, 0, 0, copyWidth * scale, copyHeight * scale, 0, 0, copyWidth * scale, copyHeight * scale);

                            var sourceCtx = sourceCanvas.getContext('2d');

                            // Normalize coordinate system to use css pixels.

                            sourceCtx.clearRect(0, 0, copyWidth * scale, copyHeight * scale);
                            rectangleSet = true;
                        }
                    },
                    onProgress: function () {
                        if (rectangleSet === true) {
                            var copyWidth = chartL.scales['y-axis-0'].width;
                            var copyHeight = chartL.scales['y-axis-0'].height + chartL.scales['y-axis-0'].top + 10;
                            var sourceCtx = chartL.chart.canvas.getContext('2d');
                            sourceCtx.clearRect(0, 0, copyWidth, copyHeight);
                        }
                    }
                }
            }
        });
    });
});
