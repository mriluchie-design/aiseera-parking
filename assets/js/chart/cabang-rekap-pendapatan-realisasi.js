// Data retrieved from: https://ferjedatabanken.no/statistikk
Highcharts.chart('container-cabang-rekap-pendapatan-realisasi', {
    dataTable: {
        columns: {
            Month: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
            'Oct', 'Nov', 'Dec'],
            Selisih: [3000, 28000, 7000, 0, 0,  0, 0, 0, 0, 0, 0, 0,],
            'Produksi': [1790903000, 1312328000, 404497000, 468080000, 345097000, 353871000, 460634000, 325736000, 452234000, 320876000, 311990000, 354184000],
            'Realisasi': [1790900000, 1312300000, 404490000, 468080000, 345097000, 353871000, 460634000, 325736000, 452234000, 320876000, 311990000, 354184000],
        }
    },
    chart: {
        type: 'column',
        marginTop: 70,
    },
    title: {
        text: '',
        align: 'left'
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
   legend: {
        align: 'center',
        x: 0,
        verticalAlign: 'top',
        y: 0,
        floating: true,
        backgroundColor: 'var(--highcharts-background-color, #ffffff)',
        borderColor: 'var(--highcharts-neutral-color-20, #cccccc)',
        borderWidth: 1,
        valuePrefix: 'Rp. ',
        valueDecimals: 0, // Jumlah angka di belakang koma
        valueSuffix: ',-', // Tambahan opsional (contoh: ,-)
        shadow: false
    },
    plotOptions: {
        series: {
            dataMapping: {
                name: 'Month'
            },
            stacking: 'normal',
            dataLabels: {
                enabled: true,
                backgroundColor: 'contrast',
                style: {
                    textOutline: 'none'
                }
            }
        }
    },
    series: [{
        dataMapping: {
            y: 'Selisih'
        }
    }, {
        dataMapping: {
            y: 'Realisasi'
        }
    }, {
        dataMapping: {
            y: 'Produksi'
        }
    }]
});
