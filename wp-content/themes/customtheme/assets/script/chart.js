const chartDiabetePopulation = new Highcharts.Chart({
    chart: {
        renderTo: 'chart_diabete-population',
        type: 'item'
    },
    title: {
        text: 'Population diabétique en France'
    },
    legend: {
        labelFormat: '{name} <span style="opacity: 0.4">{y}</span>'
    },
    tooltip: {
        valueSuffix: ' %',

    },
    series: [{
        name: 'Adultes',
        keys: ['name', 'y', 'color', 'label'],
        data: [
            ['Diagnostiqué', 5, '#F47373'],
            ['Non diagnostiqué', 25, '#FFD972'],
            ['Sain', 70, '#95D9C3'],
        ],
        dataLabels: {
            enabled: true,
            format: '{point.label}'
        },
    }],
    credits: {
        enabled: false
    },
});


const chartDiabeteType1Evolution = new Highcharts.Chart({
        chart: {
            renderTo: 'chart_diabete-type1-evolution',
            type: 'line'
        },
        title: {
            text: 'ÉVOLUTION DU NOMBRE DE CAS DE DIABÈTE DE TYPE 1, EN FRANCE, DEPUIS 2000'
        },
        xAxis: {
            categories: [2000, 2005,2012, 2016]
        },
        yAxis: {
            title: {
                text: 'Taux de prévalence'
            },
        },
        tooltip: {
            valueSuffix: ' %',
        },
        series: [{
            name: 'Taux de prévalence du diabète type 1 chez les hommes et les femmes',
            data: [2.9, 3.6, 4.6, 5.0]
        }, 
        ],
        plotOptions: {
            line: {
                color: '#95D9C3'
            }
        },
        credits: {
            enabled: false
        },
});

const chartDiabeteType2Repartition = new Highcharts.Chart({
    chart: {
        renderTo: 'chart_diabete-type2-repartition',
        type: 'line'
    },
    title: {
        text: 'RÉPARTITION PAR ÂGE ET SEXE DE LA PRÉVALENCE DU DIABÈTE TRAITÉ PHARMACOLOGIQUEMENT, EN FRANCE, EN 2016'
    },
    xAxis: {
        categories: ['0-4', '5-9', '10-14', '15-19', '20-24', '25-29', '30-34', '35-39', '40-44', '45-49', '50-54', '55-59', '60-64', '65-69', '70-74', '75-79', '80-84', '85-89', '90']
    },
    yAxis: {
        title: {
            text: 'Prévalence du diabète'
        },
    },
    tooltip: {
        valueSuffix: ' %',
    },
    series: [{
        name: 'Taux de prévalence du diabète type 1 chez les hommes et les femmes',
        data: [0.2, 0.4, 0.6, 0.8, 1, 1.5, 2, 2.5, 3.6, 4, 5.2, 7, 13.7, 17.2, 21.1, 22.4, 21.0, 16.9, 12.4]
    },
    ],
    plotOptions: {
        line: {
            color: '#95D9C3'
        }
    },
    credits: {
        enabled: false
    },
});


const chartDiabeteCause= new Highcharts.Chart({
    chart: {
        renderTo: 'chart_diabete-causes',
        type: 'pie'
    },
    title: {
        text: 'PRINCIPALES CAUSES DU DIABÈTE, EN FRANCE, EN 2016'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            },
            colors: ['#95D9C3', '#FCBCB9', '#FFD972']
        }
    },
    series: [{
        name: 'Causes',
        data: [{
            name: 'Surpoids',
            y: 61.41,
        }, {
            name: "Manque d'activité physique",
            y: 11.84
        }, {
            name: 'Alimentation désiquilibrés',
            y: 10.85
        },
        ],
    }, 
    ],
    credits: {
        enabled: false
    },
});


