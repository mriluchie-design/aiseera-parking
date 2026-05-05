Highcharts.chart('container-penerima-gaji', {
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
            text: 'Orang'
        }
    },
    tooltip: {
        valueSuffix: ' (Pegawai)'
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Pegawai Tetap',
            data: [44, 44, 44, 44, 44, 44, 44, 44, 44, 44, 44, 0,]
        },
		{
            name: 'Calon Pegawai',
            data: [8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 0,]
        },
		{
            name: 'Pegawai Kontrak',
            data: [88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 0,]
        },
		{
            name: 'Pegawai Honor',
            data: [4, 4, 4, 04, 4, 4, 4, 4, 4, 4, 4, 0,]
        },
        
    ]
});
