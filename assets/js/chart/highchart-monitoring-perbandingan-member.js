Highcharts.chart('container-perbandingan', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    subtitle: {
        text:
            ''
    },
    xAxis: {
        categories: ['2023', '2024', '2025', '2026'],
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Kendaraan'
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
            name: 'Sepeda Motor',
            data: [780, 880, 900, 980,]
        },
        {
            name: 'Sedan/Jeep/Pick Up',
            data: [244, 275, 300, 344,]
        },
        {
            name: 'Truck/Tronton/Trailer',
            data: [962, 1012, 1022, 1062,]
        },
        {
            name: 'Pegawai/Instansi/Others',
            data: [941, 1041, 1101, 1141,]
        }
    ]
});
