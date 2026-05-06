Highcharts.chart('container-jukir', {
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
            name: 'Masuk',
            data: [2500, 2600, 2700, 2400, 2300, 2200, 2800, 2900, 3000, 2800, 2900, 2700,]
        },
        {
            name: 'Keluar',
            data: [2450, 2550, 2650, 2350, 2250, 2150, 2750, 2850, 2950, 2750, 2850, 2650,]
        }
    ]
});
