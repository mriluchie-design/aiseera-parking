Highcharts.chart('container', {
    chart: {
        type: 'column'
		
		
    },
    title: {
        text: ''
    },
    subtitle: {
        text:
            '' +
            ''
    },
    xAxis: {
        categories: ['JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUNI','JULI', 'AGU','SEP', 'OKT', 'NOV', 'DES',],
        crosshair: true,
        accessibility: {
            description: 'Month'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rupiah'
        }
    },
    tooltip: {
        valueSuffix: ' (Rp)'
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Terbayar',
            data: [1250000000, 1250000000, 1250000000, 1250000000, 1250000000, 1250000000, 1250000000, 1250000000, 1250000000, 1250000000, 1250000000, 0,]
        },
		
        
    ]
});
