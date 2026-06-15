// Data retrieved from:
// - https://en.as.com/soccer/which-teams-have-won-the-premier-league-the-most-times-n/
// - https://www.statista.com/statistics/383679/fa-cup-wins-by-team/
// - https://www.uefa.com/uefachampionsleague/history/winners/

Highcharts.chart('container-cabang-monitoring-pendapatan-harian', {
    chart: {
        type: 'column',
        marginTop: 70,
        
    },
    title: {
        text: '',
        align: ''
    },
    xAxis: {
        categories: ['Mobil Masuk', 'Motor Masuk', 'Mobil Keluar', 'Motor Keluar', 'Member', 'Kendaraan Berangkat', 'Muatan Kapal', 'Pass Kade', 'Pass Orang','Denda']
            
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
        name: 'e-Money',
        data: [1500000, 1500000, 750000, 750000, 0, 0, 0, 0, 0,],
        
    }, {
        name: 'QRIS',
        data: [2500000, 2500000, 750000, 750000, 0, 0, 0, 688808, 0,]
    },{
        name: 'Virtual Account',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0,]
    },{
        name: 'Credit Card',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0,]
    }]
});



