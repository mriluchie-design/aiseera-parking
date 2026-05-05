// Data retrieved from https://www.ssb.no/statbank/table/10467/
const chart = Highcharts.chart('container-potongan-penghasilan', {

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
            text: 'Rupiah'
        }
    },

    series: [{
        name: 'Keterlambatan',
        data: [1000000, 500000, 1250000, 750000, 500000, 200000, 250000, 1500000, 1750000, 1350000, 150000, 0]
    }, {
name: 'Absen',
        data: [1200000, 700000, 2250000, 950000, 600000, 500000, 850000, 1750000, 200000, 1350000, 150000, 0]
    }, {
        name: 'PPH 21',
        data: [42000000, 42000000, 42000000, 42000000, 42000000, 42000000, 42000000, 42000000, 42000000, 42000000, 42000000, 0]
    }, {
        name: 'JHT',
        data: [20200000, 20200000, 20200000, 20200000, 20200000, 20200000, 20200000, 20200000, 20200000, 20200000, 20200000, 0]
	}, {
        name: 'JKK',
        data: [10200000, 10200000, 10200000, 10200000, 10200000, 10200000, 10200000, 10200000, 10200000, 10200000, 10200000, 0]
	}, {
        name: 'JKM',
        data: [5000000, 5000000, 5000000, 5000000, 5000000, 5000000, 5000000, 5000000, 5000000, 5000000, 5000000, 0]
	}, {
        name: 'BPJS Kesehatan',
        data: [15000000, 15000000, 15000000, 15000000, 15000000, 15000000, 15000000, 15000000, 15000000, 15000000, 15000000, 0]
	}, {
        name: 'Infaq',
        data: [5000000, 5000000, 5000000, 5000000, 5000000, 5000000, 5000000, 5000000, 5000000, 5000000, 5000000, 0]
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
