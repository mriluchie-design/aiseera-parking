// Data retrieved from https://www.ssb.no/statbank/table/10467/
const chart = Highcharts.chart('container', {

    chart: {
        type: 'column'
    },

    title: {
        text: ''
    },

    subtitle: {
        text: ''
    },

    legend: {
        align: 'right',
        verticalAlign: 'middle',
        layout: 'vertical'
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        labels: {
            x: -10
        }
    },

    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Orang'
        }
    },

    series: [{
        name: 'Alpa',
        data: [34, 39, 53, 34, 39, 53, 34, 39, 53, 34, 39, 53]
    }, {
name: 'Terlambat',
        data: [34, 39, 53, 34, 39, 53, 34, 39, 53, 34, 39, 53]
    }, {
        name: 'Cuti',
        data: [27, 21, 22, 27, 21, 22, 27, 21, 22, 27, 21, 22]
    }, {
        name: 'Izin',
        data: [41, 34, 32, 41, 34, 32, 41, 34, 32, 41, 34, 32]
	}, {
        name: 'Lembur',
        data: [27, 21, 22, 27, 21, 22, 27, 21, 22, 27, 21, 22]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                yAxis: {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -5
                    },
                    title: {
                        text: null
                    }
                },
                subtitle: {
                    text: null
                },
                credits: {
                    enabled: false
                }
            }
        }]
    }
});

document.getElementById('small').addEventListener('click', function () {
    chart.setSize(400);
});

document.getElementById('large').addEventListener('click', function () {
    chart.setSize(600);
});

document.getElementById('auto').addEventListener('click', function () {
    chart.setSize(null);
});
