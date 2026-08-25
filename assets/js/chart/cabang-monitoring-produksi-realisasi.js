// Data retrieved from: https://ferjedatabanken.no/statistikk
Highcharts.chart('container-cabang-produksi-realisasi', {
    dataTable: {
        columns: {
            Month: ['Mobil Masuk', 'Motor Masuk', 'Mobil Keluar', 'Motor Keluar', 'Member', 'Kendaraan Berangkat', 'Muatan Kapal', 'Pass Kade', 'Pass Orang','Denda',
            ],
            Selisih: [0, 0, 0, 0, 0,  0, 0, 0, 0, 0,],
            'Produksi': [59696767, 49696767, 59696767, 49696767, 59696767, 0, 0, 49696767, 9696767, 0],
            'Realisasi': [59696767, 49696767, 59696767, 49696767, 59696767, 0, 0, 49696767, 9696767,0],
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
