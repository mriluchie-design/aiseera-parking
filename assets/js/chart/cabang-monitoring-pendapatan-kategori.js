// Data retrieved from:
// - https://en.as.com/soccer/which-teams-have-won-the-premier-league-the-most-times-n/
// - https://www.statista.com/statistics/383679/fa-cup-wins-by-team/
// - https://www.uefa.com/uefachampionsleague/history/winners/

Highcharts.chart('container-cabang-pendapatan-kategori', {
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
        name: 'Mobil',
        data: [233289500, 200289500, 145500000, 188289500, 115960000, 130960000, 202960000, 132960000, 192960000, 147505573, 146505573, 169505573],
        
    }, {
        name: 'Motor',
        data: [136356618, 116356618, 100991744, 116356618, 100660509, 115767834, 145767834, 128767834, 159767834, 109767834, 102962565, 118831000],
        
    },
    {
        name: 'Member',
        data: [1179817855, 812447922, 83374223, 81374223, 65374223, 43251554, 30867634, 0, 19132366, 0, 0, 0],
        
    },
	{
        name: 'Kendaraan Berangkat',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        
    },
    {
        name: 'Muatan Kapal',
        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        
    },
    {
        name: 'Pass Kade',
        data: [20986500, 20986500, 22435452, 22831011, 18831011, 17596391, 21596391, 21596391, 21577133, 21577133, 21577133, 20246995],
        
    },
    {
        name: 'Pass Orang',
        data: [20986500, 20986500, 22435452, 22831011, 18831011, 17596391, 21596391, 21596391, 21577133, 21577133, 21577133, 20246995],
        
    },
    {
        name: 'Denda',
        data: [2640000, 2640000, 3000000, 2300000, 2300000, 3256856, 3419086, 2795235, 3795235, 3000000, 3000000, 2524000]
    }]
});



