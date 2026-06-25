Highcharts.chart('container-tju', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    subtitle: {
        text:
            'Periode : November 2025' +
            ''
    },
    xAxis: {
        categories: ['A. AGUS', 'SYAMSUL BAHRI', 'RUDI RIVAI', 'MUH. YUSUF', 'UMAR MALIK, SE', 'ANUGRAH. WL','WAWAN GUNAWAN', 'HAERUL','VIAR AGUS PRATAMA', 'SYAMSUNAR', 'LUKMAN TAMBOSE', 'ANDI AKBAR MAKKA', 'MUSLIMIN', 'M. ADI WICAKSANA IRIANTO', 'NAWAL REZA', 'MUCHTAR', 'WIRA YUDHA SAKTI. D', 'SAFARUDDIN', 'ASMAR ABU', 'LEONI HESTY KILALA', 'IRWAN TORE', 'NURALAMSYAH',],
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
            data: [12365000, 56855000, 40900000, 52940000, 47890000, 18100000, 52572500, 55417500, 23305000, 27050000, 7660000, 24610000, 68290000, 82585000, 64895000, 22520000, 0, 33745000, 55625000, 19295000, 21735000, 3545000,]
        },
        {
            name: 'Setoran',
            data: [10365000, 50000000, 30900000, 51940000, 42890000, 18100000, 45572500, 50417500, 13305000, 22050000, 3660000, 22610000, 60290000, 75585000, 34895000, 22520000, 0, 31745000, 53625000, 10295000, 17735000, 2545000,]
        }
    ]
});
