Highcharts.chart('container-setoran-kolektor', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    subtitle: {
        text:
            '' +
            ''
    },
    xAxis: {
        categories: ['JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUNI','JULI', 'AGU','SEP', 'OKT', 'NOV', 'DES',],
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rupiah'
        }
    },
    tooltip: {
        valueSuffix: ' (Rupiah)'
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Target',
            data: [789900000, 889900000, 989900000, 1089900000, 989900000, 889900000, 789900000, 689900000, 789900000, 729900000, 989900000,0,]
        },
        {
            name: 'Setoran',
            data: [589900000, 689900000, 889900000, 879900000, 889900000, 759900000, 709900000, 589900000, 780900000, 679000000, 679900000,0, ]
        }
    ]
});
