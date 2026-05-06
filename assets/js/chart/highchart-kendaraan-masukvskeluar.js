Highcharts.chart('container-kendaraan-masukvskeluar', {
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
            data: [4950, 5150, 5350, 4750, 4550, 4350, 5550, 5750, 5950, 5550, 5750, 5350,]
        },
        {
            name: 'Keluar',
            data: [4950, 5150, 5350, 4750, 4550, 4350, 5550, 5750, 5950, 5550, 5750, 5350,]
        }
    ]
});
