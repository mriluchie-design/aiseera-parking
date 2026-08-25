// Data retrieved from: https://ferjedatabanken.no/statistikk
Highcharts.chart('container-rekap-pendapatan-realisasi-all', {
    dataTable: {
        columns: {
            Month: ['Makassar', 'Balikpapan', 'Samarinda', 'Ambon', 'Sorong', 'Bitung', 'Manado', 'Nunukan', 'Ternate',
            'Tarakan', 'Kendari', 'Pare-Pare',],
            Selisih: [0, 0, 0, 0, 0,  0, 0, 0, 0, 0,0,0,0],
            'Produksi': [4061188514, 734526000, 1481313000, 1873132229, 618063922, 0, 1152962697, 394107122, 2173512193, 1265952000, 234425132, 626346150],
            'Realisasi': [4061188514, 734526000, 1481313000, 1873132229, 618063922, 0, 1152962697, 394107122, 2173512193,1265952000, 234425132, 626346150],
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
