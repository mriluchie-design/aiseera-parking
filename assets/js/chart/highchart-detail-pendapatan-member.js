// Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

// Create the chart
Highcharts.chart('container-detail-pendapatan-member', {
    chart: {
        type: 'column',
		 marginTop: 50,
    },
    title: {
        text: ''
    },
    subtitle: {
        text: ''
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category',
        allowDecimals: false
    },
    yAxis: {
        min: 0,
        labels: {
        formatter: function () {
            // Menggunakan Highcharts.numberFormat untuk membulatkan
            return Highcharts.numberFormat(this.value, 0, ',', '.'); 
            // 0 di sini berarti 0 desimal
        }
        },
        title: {
            text: 'Rupiah'
        },
        stackLabels: {
            enabled: true
        }
    },
    legend: {
        enabled: false
		
    },
     plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: false
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span >{point.name}</span>: ' +
            '<b>{point.y}</b><br/>',
			valuePrefix: 'Rp. ',
        valueDecimals: 0, // Jumlah angka di belakang koma
        valueSuffix: ',-' // Tambahan opsional (contoh: ,-)
    },

    series: [
        {
            name: '',
            colorByPoint: true,
            data: [
                {
                    name: 'Truck/Tronton/Trailer',
                    y: 1274400000,
                    drilldown: 'Chrome'
                },
                {
                    name: 'Sedan/Jeep/Pick Up',
                    y: 309600000,
                    drilldown: 'Safari'
                },
                {
                    name: 'Sepeda Motor',
                    y: 686000000,
                    drilldown: 'Firefox'
                },
                {
                    name: 'Pegawai/Instansi/Others',
                    y: 45640000,
                    drilldown: 'Firefox'
                },
                
                
            ]
        }
    ],
    drilldown: {
        breadcrumbs: {
            position: {
                align: 'right'
            }
        },
        series: [
            {
                name: 'Chrome',
                id: 'Chrome',
                data: [
                    [
                        'v65.0',
                        0.1
                    ],
                    [
                        'v64.0',
                        1.3
                    ],
                    [
                        'v63.0',
                        53.02
                    ],
                    [
                        'v62.0',
                        1.4
                    ],
                    [
                        'v61.0',
                        0.88
                    ],
                    [
                        'v60.0',
                        0.56
                    ],
                    [
                        'v59.0',
                        0.45
                    ],
                    [
                        'v58.0',
                        0.49
                    ],
                    [
                        'v57.0',
                        0.32
                    ],
                    [
                        'v56.0',
                        0.29
                    ],
                    [
                        'v55.0',
                        0.79
                    ],
                    [
                        'v54.0',
                        0.18
                    ],
                    [
                        'v51.0',
                        0.13
                    ],
                    [
                        'v49.0',
                        2.16
                    ],
                    [
                        'v48.0',
                        0.13
                    ],
                    [
                        'v47.0',
                        0.11
                    ],
                    [
                        'v43.0',
                        0.17
                    ],
                    [
                        'v29.0',
                        0.26
                    ]
                ]
            },
            {
                name: 'Firefox',
                id: 'Firefox',
                data: [
                    [
                        'v58.0',
                        1.02
                    ],
                    [
                        'v57.0',
                        7.36
                    ],
                    [
                        'v56.0',
                        0.35
                    ],
                    [
                        'v55.0',
                        0.11
                    ],
                    [
                        'v54.0',
                        0.1
                    ],
                    [
                        'v52.0',
                        0.95
                    ],
                    [
                        'v51.0',
                        0.15
                    ],
                    [
                        'v50.0',
                        0.1
                    ],
                    [
                        'v48.0',
                        0.31
                    ],
                    [
                        'v47.0',
                        0.12
                    ]
                ]
            },
            {
                name: 'Internet Explorer',
                id: 'Internet Explorer',
                data: [
                    [
                        'v11.0',
                        6.2
                    ],
                    [
                        'v10.0',
                        0.29
                    ],
                    [
                        'v9.0',
                        0.27
                    ],
                    [
                        'v8.0',
                        0.47
                    ]
                ]
            },
            {
                name: 'Safari',
                id: 'Safari',
                data: [
                    [
                        'v11.0',
                        3.39
                    ],
                    [
                        'v10.1',
                        0.96
                    ],
                    [
                        'v10.0',
                        0.36
                    ],
                    [
                        'v9.1',
                        0.54
                    ],
                    [
                        'v9.0',
                        0.13
                    ],
                    [
                        'v5.1',
                        0.2
                    ]
                ]
            },
            {
                name: 'Edge',
                id: 'Edge',
                data: [
                    [
                        'v16',
                        2.6
                    ],
                    [
                        'v15',
                        0.92
                    ],
                    [
                        'v14',
                        0.4
                    ],
                    [
                        'v13',
                        0.1
                    ]
                ]
            },
            {
                name: 'Opera',
                id: 'Opera',
                data: [
                    [
                        'v50.0',
                        0.96
                    ],
                    [
                        'v49.0',
                        0.82
                    ],
                    [
                        'v12.1',
                        0.14
                    ]
                ]
            }
        ]
    }
});
