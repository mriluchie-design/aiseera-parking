// Data retrieved from:
// - https://en.as.com/soccer/which-teams-have-won-the-premier-league-the-most-times-n/
// - https://www.statista.com/statistics/383679/fa-cup-wins-by-team/
// - https://www.uefa.com/uefachampionsleague/history/winners/

Highcharts.chart('container-pendapatan-member', {
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
        data: [1274400000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        
    }, {
        name: 'Sedan/Jeep/Pick Up',
        data: [309600000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        
    },
    {
        name: 'Sepeda Motor',
        data: [686000000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        
    },
    {
        name: 'Pegawai/Instansi/Others',
        data: [45640000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
    }]
});



