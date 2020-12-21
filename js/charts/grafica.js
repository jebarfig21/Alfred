/**
*Script para la gráfica del sensor de luz que se usa en view/reviewNodoViex.php
* Aquí se define el funcionamiento y las opciones de la gráfica, implementando la bilbioteca chartjs
*/
$(document).ready(function () {
    for(var tipo in mediciones){
        let valuesHumidity = getValues(mediciones[tipo]);
        let datesHumidity = getDates(mediciones[tipo]);
        let chartData = getChartData(tipo,datesHumidity,valuesHumidity);
        makeChart(tipo,chartData);
    };
});


    function getDates(tipoArray){
			let dateArr = []
			for(var i = 0; i<tipoArray.length; i++){
				dateArr.push(tipoArray[i].date); 
			};
			return dateArr;
    	};

     function getValues (tipoArray){
			let valueArr = []
			for(var i = 0; i<tipoArray.length; i++){
				valueArr.push(tipoArray[i].value); 
			};
			return valueArr;
    	};

    function getChartData(tipo,dates, values){

        let chartData = {
 	        labels: dates,
            datasets: [{
                label: tipo,
	            data: values,
	            backgroundColor: 'rgba(14, 191, 227,0.5)',
                borderColor: 'rgb(14, 191, 227)',
	            fontSize:25
            }]
        };
        return chartData;

    }

    function makeChart(tipo,chart_data){
            let rectangleSet = false;
            let canvas = $('#chart'+tipo);
            let chartL = new Chart(canvas, {
                type: 'line',
                data: chart_data,
                maintainAspectRatio: false,
                responsive: true,
                options: {
                    legends: {
                        labels: {
                            display:true,
                            fontColor: 'white'
                        }
                    },
                    scales: {
                        xAxes:[{
                            ticks: {
                                fontSize: 12,
                                display: false
                            }
                        }],
                        yAxes:[{
                            ticks:{
                                fontDize: 15,
                                beginAtZero: true,
                                fontColor: 'white'
                            },
                            scaleLabel: {
                                display: true,
                                color: 'rgb(255,255,255)',
                                fontColor: 'rgb(255,255,255)',
                                fontSize : 25,
                                labelString: 'Valor'
                            }
                        }]
                    }/*scales*/
                }/*options*/
            });/*chart L*/
    };/*function makeChart*/

