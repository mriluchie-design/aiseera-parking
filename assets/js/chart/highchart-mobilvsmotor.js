Highcharts.chart('container-mobilvsmotor', {
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
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Orang'
        }
    },
    tooltip: {
        valueSuffix: ' (Kendaraan)'
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Mobil',
            data: [2500, 2600, 2700, 2400, 2300, 2200, 2800, 2900, 3000, 2800, 2900, 2700,]
        },
		{
            name: 'Motor',
            data: [2450, 2550, 2650, 2350, 2250, 2150, 2750, 2850, 2950, 2750, 2850, 2650,]
        },
		{
            name: 'Mobil Member',
            data: [500, 600, 700, 400, 300, 200, 800, 900, 1000, 800, 900, 700,]
        },
        {
            name: 'Motor Member',
            data: [450, 550, 650, 350, 250, 150, 750, 850, 950, 750, 850, 650,]
        }
    ]
});
