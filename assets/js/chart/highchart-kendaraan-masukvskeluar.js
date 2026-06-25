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
            text: 'Kendaraan'
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
        },
		{
            name: 'Member Masuk',
            data: [1950, 2150, 2350, 1750, 1550, 1350, 2550, 2750, 2950, 2550, 2750, 2350,]
        },
        {
            name: 'Member Keluar',
            data: [1950, 2150, 2350, 1750, 1550, 1350, 2550, 2750, 2950, 2550, 2750, 2350,]
        },
		{
            name: 'Kendaraan Berangkat',
            data: [4950, 5150, 5350, 4750, 4550, 4350, 5550, 5750, 5950, 5550, 5750, 5350,]
        },
		{
            name: 'Muatan Keluar',
            data: [4950, 5150, 5350, 4750, 4550, 4350, 5550, 5750, 5950, 5550, 5750, 5350,]
        },
		{
            name: 'Pass Kade',
            data: [4950, 5150, 5350, 4750, 4550, 4350, 5550, 5750, 5950, 5550, 5750, 5350,]
        },
		{
            name: 'Pass Orang',
            data: [4950, 5150, 5350, 4750, 4550, 4350, 5550, 5750, 5950, 5550, 5750, 5350,]
        },
{
            name: 'Free Pass',
            data: [4950, 5150, 5350, 4750, 4550, 4350, 5550, 5750, 5950, 5550, 5750, 5350,]
        },
		
    ]
});
