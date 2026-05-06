Highcharts.chart('container3', {

    chart: {
        type: 'column',
        styledMode: true
    },

    title: {
        text: 'Grafik Pegawai Resign Desember'
    },

    yAxis: [{
        className: 'highcharts-color-0',
        title: {
            text: 'Pegawai Kontrak'
        }
    }, {
        className: 'highcharts-color-1',
        opposite: true,
        title: {
            text: 'Pegawai Tetap'
        }
    }],

    plotOptions: {
        column: {
            borderRadius: 5
        }
    },

    series: [{
        data: [1, 3, 2, 4]
    }, {
        data: [324, 124, 547, 221],
        yAxis: 1
    }]

});
