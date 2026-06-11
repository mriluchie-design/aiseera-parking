// Data retrieved from:
// - https://en.as.com/soccer/which-teams-have-won-the-premier-league-the-most-times-n/
// - https://www.statista.com/statistics/383679/fa-cup-wins-by-team/
// - https://www.uefa.com/uefachampionsleague/history/winners/

Highcharts.chart('container-pendapatan-kategori-all', {
    chart: {
        type: 'column',
        marginTop: 70,
        
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
            valuePrefix: 'Rp. ',
            dataLabels: {
                enabled: false
            }
        }
    },
    
    series: [{
        name: 'Mobil',
        data: [1274400000, 0, 0, 355580000, 30250000, 25090090, 12000000, 211600000, 137200000, 95625000, 0, 3600000],
        
    }, {
        name: 'Motor',
        data: [309600000, 11520000, 8100000, 6900000, 0, 10247748, 25500000, 55500000, 15000000, 7875000, 1351351, 8280000],
        
    },
    {
        name: 'Member',
        data: [686000000, 1440000, 34550000, 0, 0, 31418920, 2000000, 0, 0, 0, 0, 104480000],
        
    },
	{
        name: 'Kendaraan Berangkat',
        data: [686000000, 1440000, 34550000, 0, 0, 31418920, 2000000, 0, 0, 0, 0, 104480000],
        
    },
	{
        name: 'Muatan Kapal',
        data: [686000000, 1440000, 34550000, 0, 0, 31418920, 2000000, 0, 0, 0, 0, 104480000],
        
    },
	{
        name: 'Pass Kade',
        data: [686000000, 1440000, 34550000, 0, 0, 31418920, 2000000, 0, 0, 0, 0, 104480000],
        
    },
    {
        name: 'Pass Orang',
        data: [686000000, 1440000, 34550000, 0, 0, 31418920, 2000000, 0, 0, 0, 0, 104480000],
        
    },
    {
        name: 'Denda',
        data: [45640000, 1800000, 0, 29900000, 20300000, 0, 0, 7000000, 42600000, 7225000, 540541, 211680000]
    }]
});



