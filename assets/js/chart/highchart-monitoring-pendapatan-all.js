// Data retrieved from:
// - https://en.as.com/soccer/which-teams-have-won-the-premier-league-the-most-times-n/
// - https://www.statista.com/statistics/383679/fa-cup-wins-by-team/
// - https://www.uefa.com/uefachampionsleague/history/winners/
credits: {
    enabled: false
}
Highcharts.setOptions({
    lang: {
        numericSymbols: [' ', ' ',' M']
    }
});
Highcharts.chart('container', {
    
    chart: {
        type: 'column'
    },
    title: {
        text: '',
        align: ''
    },
    xAxis: {
        categories: ['Makassar', 'Balikpapan', 'Samarinda', 'Ambon', 'Sorong', 'Bitung', 'Manado', 'Nunukan', 'Ternate',
            'Tarakan', 'Kendari', 'Pare-Pare']
            
    },
    
    yAxis: {
        min: 0,
        title: {
            text: 'Rupiah'
        },
        stackLabels: {
            enabled: true
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
    tooltip: {
        headerFormat: '<b>{category}</b><br/>',
        pointFormat: '{series.name}: {point.y}',
        valuePrefix: 'Rp. ',
        valueDecimals: 0, // Jumlah angka di belakang koma
        valueSuffix: ',-' // Tambahan opsional (contoh: ,-)
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: false
            }
        }
    },
    
    series: [{
        name: 'E-Money',
        data: [2061188514, 534526000, 1081313000, 1573132229, 418063922, 0, 1000000000, 294107122, 2000000000, 1000000000, 134425132, 600000000],
        
    }, {
        name: 'QRIS',
        data: [2000000000, 200000000, 400000000, 300000000, 200000000, 0, 152962697, 100000000, 173512193, 265952000, 100000000, 26346150]
    },{
        name: 'Virtual Account',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
    },{
        name: 'Credit Card',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
    }]
});


var chart = Highcharts.chart('container2', {

    chart: {
        zoomType: 'xy'
    },
    title: {
        text: ''
    },
    
    xAxis: [{
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
            'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        title: {
            text: 'Rupiah',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
		
       
    }, { // Secondary yAxis
        title: {
            text: 'Rupiah',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
       
        opposite: true
    }],
    tooltip: {
        shared: true,
		 valuePrefix: 'Rp. ',
    valueDecimals: 0, // Jumlah angka di belakang koma
    valueSuffix: ',-' // Tambahan opsional (contoh: ,-)
    },
    legend: {
		
        layout: 'vertical',
        align: 'left',
        x: 350,
        verticalAlign: 'top',
        y: -20,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
		
    },
    series: [{
        name: 'Tunai',
        type: 'column',
        yAxis: 1,
        data: [50000000, 40000000, 30000000, 40000000, 55000000, 35000000, 50000000, 50000000, 50000000, 50000000, 50000000, 50000000],
        tooltip: {
            valueSuffix: ''
        }

    }, {
        name: 'Non Tunai',
        type: 'spline',
        data: [250000000, 500000000, 600000000, 650000000, 1000000000, 750000000, 800000000, 850000000, 900000000, 960000000, 1000000000, 1200000000],
        tooltip: {
            valueSuffix: ''
        }
    }]
});


Highcharts.chart('container3', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Browser market shares. January, 2018'
    },
    subtitle: {
        text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total percent market share'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: "Browsers",
            colorByPoint: true,
            data: [
                {
                    name: "Chrome",
                    y: 62.74,
                    drilldown: "Chrome"
                },
                {
                    name: "Firefox",
                    y: 10.57,
                    drilldown: "Firefox"
                },
                {
                    name: "Internet Explorer",
                    y: 7.23,
                    drilldown: "Internet Explorer"
                },
                {
                    name: "Safari",
                    y: 5.58,
                    drilldown: "Safari"
                },
                {
                    name: "Edge",
                    y: 4.02,
                    drilldown: "Edge"
                },
                {
                    name: "Opera",
                    y: 1.92,
                    drilldown: "Opera"
                },
                {
                    name: "Other",
                    y: 7.62,
                    drilldown: null
                }
            ]
        }
    ],
    drilldown: {
        series: [
            {
                name: "Chrome",
                id: "Chrome",
                data: [
                    [
                        "v65.0",
                        0.1
                    ],
                    [
                        "v64.0",
                        1.3
                    ],
                    [
                        "v63.0",
                        53.02
                    ],
                    [
                        "v62.0",
                        1.4
                    ],
                    [
                        "v61.0",
                        0.88
                    ],
                    [
                        "v60.0",
                        0.56
                    ],
                    [
                        "v59.0",
                        0.45
                    ],
                    [
                        "v58.0",
                        0.49
                    ],
                    [
                        "v57.0",
                        0.32
                    ],
                    [
                        "v56.0",
                        0.29
                    ],
                    [
                        "v55.0",
                        0.79
                    ],
                    [
                        "v54.0",
                        0.18
                    ],
                    [
                        "v51.0",
                        0.13
                    ],
                    [
                        "v49.0",
                        2.16
                    ],
                    [
                        "v48.0",
                        0.13
                    ],
                    [
                        "v47.0",
                        0.11
                    ],
                    [
                        "v43.0",
                        0.17
                    ],
                    [
                        "v29.0",
                        0.26
                    ]
                ]
            },
            {
                name: "Firefox",
                id: "Firefox",
                data: [
                    [
                        "v58.0",
                        1.02
                    ],
                    [
                        "v57.0",
                        7.36
                    ],
                    [
                        "v56.0",
                        0.35
                    ],
                    [
                        "v55.0",
                        0.11
                    ],
                    [
                        "v54.0",
                        0.1
                    ],
                    [
                        "v52.0",
                        0.95
                    ],
                    [
                        "v51.0",
                        0.15
                    ],
                    [
                        "v50.0",
                        0.1
                    ],
                    [
                        "v48.0",
                        0.31
                    ],
                    [
                        "v47.0",
                        0.12
                    ]
                ]
            },
            {
                name: "Internet Explorer",
                id: "Internet Explorer",
                data: [
                    [
                        "v11.0",
                        6.2
                    ],
                    [
                        "v10.0",
                        0.29
                    ],
                    [
                        "v9.0",
                        0.27
                    ],
                    [
                        "v8.0",
                        0.47
                    ]
                ]
            },
            {
                name: "Safari",
                id: "Safari",
                data: [
                    [
                        "v11.0",
                        3.39
                    ],
                    [
                        "v10.1",
                        0.96
                    ],
                    [
                        "v10.0",
                        0.36
                    ],
                    [
                        "v9.1",
                        0.54
                    ],
                    [
                        "v9.0",
                        0.13
                    ],
                    [
                        "v5.1",
                        0.2
                    ]
                ]
            },
            {
                name: "Edge",
                id: "Edge",
                data: [
                    [
                        "v16",
                        2.6
                    ],
                    [
                        "v15",
                        0.92
                    ],
                    [
                        "v14",
                        0.4
                    ],
                    [
                        "v13",
                        0.1
                    ]
                ]
            },
            {
                name: "Opera",
                id: "Opera",
                data: [
                    [
                        "v50.0",
                        0.96
                    ],
                    [
                        "v49.0",
                        0.82
                    ],
                    [
                        "v12.1",
                        0.14
                    ]
                ]
            }
        ]
    }
});

Highcharts.chart('container4', {

    title: {
        text: 'Logarithmic axis demo'
    },

    xAxis: {
        tickInterval: 1,
        type: 'logarithmic',
        accessibility: {
            rangeDescription: 'Range: 1 to 10'
        }
    },

    yAxis: {
        type: 'logarithmic',
        minorTickInterval: 0.1,
        accessibility: {
            rangeDescription: 'Range: 0.1 to 1000'
        }
    },

    tooltip: {
        headerFormat: '<b>{series.name}</b><br />',
        pointFormat: 'x = {point.x}, y = {point.y}'
    },

    series: [{
        data: [1, 2, 4, 8, 16, 32, 64, 128, 256, 512],
        pointStart: 1
    }]
});

Highcharts.chart('container5', {

    title: {
        text: 'Logarithmic axis demo'
    },

    xAxis: {
        tickInterval: 1,
        type: 'logarithmic',
        accessibility: {
            rangeDescription: 'Range: 1 to 10'
        }
    },

    yAxis: {
        type: 'logarithmic',
        minorTickInterval: 0.1,
        accessibility: {
            rangeDescription: 'Range: 0.1 to 1000'
        }
    },

    tooltip: {
        headerFormat: '<b>{series.name}</b><br />',
        pointFormat: 'x = {point.x}, y = {point.y}'
    },

    series: [{
        data: [1, 512, 0.3, .5, 128],
        pointStart: 1
    }]
});

Highcharts.chart('container6', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares in January, 2018'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Chrome',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Internet Explorer',
            y: 11.84
        }, {
            name: 'Firefox',
            y: 10.85
        }, {
            name: 'Edge',
            y: 4.67
        }, {
            name: 'Safari',
            y: 4.18
        }, {
            name: 'Other',
            y: 7.05
        }]
    }]
});

Highcharts.chart('container7', {

    title: {
        text: 'Logarithmic axis demo'
    },

    xAxis: {
        tickInterval: 1,
        type: 'logarithmic',
        accessibility: {
            rangeDescription: 'Range: 1 to 10'
        }
    },

    yAxis: {
        type: 'logarithmic',
        minorTickInterval: 0.1,
        accessibility: {
            rangeDescription: 'Range: 0.1 to 1000'
        }
    },

    tooltip: {
        headerFormat: '<b>{series.name}</b><br />',
        pointFormat: 'x = {point.x}, y = {point.y}'
    },

    series: [{
        data: [1, 512, 0.3, .5, 128],
        pointStart: 1
    }]
});

Highcharts.chart('container8', {
chart: {
type: 'scatter',
margin: [70, 50, 60, 80],
events: {
click: function (e) {
    // find the clicked values and the series
    var x = Math.round(e.xAxis[0].value),
        y = Math.round(e.yAxis[0].value),
        series = this.series[0];

    // Add it
    series.addPoint([x, y]);

}
}
},
title: {
text: 'User supplied data'
},
subtitle: {
text: 'Click the plot area to add a point. Click a point to remove it.'
},
accessibility: {
announceNewData: {
enabled: true
}
},
xAxis: {
gridLineWidth: 1,
minPadding: 0.2,
maxPadding: 0.2,
maxZoom: 60
},
yAxis: {
title: {
text: 'Value'
},
minPadding: 0.2,
maxPadding: 0.2,
maxZoom: 60,
plotLines: [{
value: 0,
width: 1,
color: '#808080'
}]
},
legend: {
enabled: false
},
exporting: {
enabled: false
},
plotOptions: {
series: {
lineWidth: 1,
point: {
    events: {
        click: function () {
            if (this.series.data.length > 1) {
                this.remove();
            }
        }
    }
}
}
},
series: [{
data: [[20, 20], [80, 80]]
}]
});
