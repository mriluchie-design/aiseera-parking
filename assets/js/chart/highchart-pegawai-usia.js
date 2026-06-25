// Custom template helper
Highcharts.Templating.helpers.abs = value => Math.abs(value);

// Age categories
const categories = [
    '20-24', '25-29', '30-34', '35-40', '40-45',
    '45-49', '50-54'
    
];

Highcharts.chart('container-pegawai-usia', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Statistik Berdasarkan Usia'
    },
    subtitle: {
        text: ''
    },
    accessibility: {
        point: {
            valueDescriptionFormat: '{index}. Age {xDescription}, {value}%.'
        }
    },
    xAxis: [{
        categories: categories,
        reversed: false,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Umur (Pria)'
        }
    }, { // mirror axis on right side
        opposite: true,
        reversed: false,
        categories: categories,
        linkedTo: 0,
        labels: {
            step: 1
        },
        accessibility: {
            description: 'Umur (Wanita)'
        }
    }],
    yAxis: {
        title: {
            text: null
        },
        labels: {
            format: '{abs value}%'
        },
        accessibility: {
            description: 'Percentage population',
            rangeDescription: 'Range: 0 to 5%'
        }
    },

    plotOptions: {
        series: {
            stacking: 'normal',
            borderRadius: '50%'
        }
    },

    tooltip: {
        format: '<b>{series.name}, Umur {point.category}</b><br/>' +
            'Jumlah : {(abs point.y):.2f}%'
    },

    series: [{
        name: 'Pria',
        data: [
            -1.38, -2.09, -2.45, -2.71, -2.97,
            -3.69, -4.04
        ]
    }, {
        name: 'Wanita',
        data: [
            1.35, 1.98, 2.43, 2.39, 2.71,
            3.02, 3.50
        ]
    }]
});
