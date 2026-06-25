Highcharts.chart('container5', {

    chart: {
        type: 'column',
        styledMode: true
    },

    title: {
        text: 'Grafik Pegawai Pensiun Desember'
    },

    yAxis: [{
        className: 'highcharts-color-0',
        title: {
            text: 'Kantor Pusat'
        }
    }, {
        className: 'highcharts-color-1',
        opposite: true,
        title: {
            text: 'Kantor Cabang'
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
