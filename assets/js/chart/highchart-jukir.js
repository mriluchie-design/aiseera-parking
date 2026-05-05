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
        valueSuffix: ' (Jukir)'
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
            data: [2, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0,]
        },
        {
            name: 'Keluar',
            data: [10, 0, 5, 0, 10, 0, 5, 0, 2, 0, 7,0, ]
        }
    ]
});
