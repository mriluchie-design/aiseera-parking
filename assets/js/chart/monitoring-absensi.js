// Data retrieved from:
// - https://en.as.com/soccer/which-teams-have-won-the-premier-league-the-most-times-n/
// - https://www.statista.com/statistics/383679/fa-cup-wins-by-team/
// - https://www.uefa.com/uefachampionsleague/history/winners/

Highcharts.chart('container-monitoring-absensi', {
    chart: {
        type: 'column',
        marginTop: 100,
        
    },
    title: {
        text: '',
        align: ''
    },
    xAxis: {
        categories: ['JAN', 'FEB', 'MAR', 'APR', 'MEI', 'JUNI','JULI', 'AGU','SEP', 'OKT', 'NOV', 'DES',],
            
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
            text: 'Jumlah'
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
        valuePrefix: '',
        valueDecimals: 0, // Jumlah angka di belakang koma
        valueSuffix: '', // Tambahan opsional (contoh: ,-)
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{category}</b><br/>',
        pointFormat: '{series.name}: {point.y}',
        valuePrefix: '',
        valueDecimals: 0, // Jumlah angka di belakang koma
        valueSuffix: '' // Tambahan opsional (contoh: ,-)
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
        name: 'Hadir',
        data: [80, 80, 80, 80, 80, 80, 80, 80, 80,80, 80, 80,],
        
    }, {
        name: 'Terlambat',
        data: [25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25,]
    },{
        name: 'Alpa',
        data: [25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25,]
    },{
        name: 'Izin',
        data: [25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25,]
    },{
        name: 'Cuti',
        data: [25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25,]
    },{
        name: 'Tidak Absen Datang',
        data: [25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25,]
    },{
        name: 'Tidak Absen Pulang',
        data: [25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25, 25,]
    }]
});



