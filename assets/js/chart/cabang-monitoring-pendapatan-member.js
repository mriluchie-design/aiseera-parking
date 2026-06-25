// Data retrieved from:
// - https://en.as.com/soccer/which-teams-have-won-the-premier-league-the-most-times-n/
// - https://www.statista.com/statistics/383679/fa-cup-wins-by-team/
// - https://www.uefa.com/uefachampionsleague/history/winners/

Highcharts.chart('container-cabang-pendapatan-member', {
    chart: {
        type: 'column',
        marginTop: 70,
        
    },
    title: {
        text: '',
        align: ''
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
            'Oct', 'Nov', 'Dec']
            
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
        align: 'center',
        x: 40,
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
            valuePrefix: 'Rp. ',
            dataLabels: {
                enabled: false
            }
        }
    },
    
    series: [{
        name: 'Truck/Tronton/Trailer',
        data: [782079284, 487691000, 4629716, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        
    }, {
        name: 'Sedan/Jeep/Pick Up',
        data: [44228571, 74228571, 42269007, 34950000, 48899000, 27208000, 24208000, 0, 13608851, 0, 0, 0],
        
    },
    {
        name: 'Sepeda Motor',
        data: [336990000, 238008351, 30955500, 42904223, 13955223, 13523554, 4139634, 0, 5523515, 0, 0, 0],
        
    },
    {
        name: 'Pegawai/Instansi/Others',
        data: [16520000, 12520000, 5520000, 3520000, 2520000, 2520000, 2520000, 0, 0, 0, 0, 0]
    }]
});



