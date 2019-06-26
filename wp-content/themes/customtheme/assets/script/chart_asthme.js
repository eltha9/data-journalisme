
// asthme dataviz

const chartAsthmeEvolution = new Highcharts.Chart({
    chart: {
        renderTo: 'chart_asthme-evolution',
        type: 'line'
    },
    title: {
        text: "ÉVOLUTION DU TAUX D'ASTHME CHEZ L'ENFANT EN FRANCE, ENTRE 2005 ET 2012"
    },
    xAxis: {
        categories: [2005, 2008, 2012]
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
        name: "Taux de prévalence de l'asthme chez l'enfant",
        data: [9, 9.8, 11]
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

const chartAsthmePolution = new Highcharts.Chart({
chart: {
    renderTo: 'chart_asthme-pollution',
    type: 'line'
},
title: {
    text: "GRAPHIQUE REPRÉSENTANT LA VARIATION DU NOMBRE D'ASTHMATIQUES ADMIS AUX URGENCES EN FONCTION DE l'ANNÉE 2012"
},
xAxis: {
    categories: ['Janvier', 'Février', 'Mars', 'Avril', 'Juin'],
    title: {
        text: 'Temps (mois)'
    }
},
yAxis: {
    title: {
        text: 'Cumul arbitraire des polluants ( en ug/mètre cube) comparé aux nombre de patients'
    },
},
series: [{
    name: 'Nombre de patients',
    data: [41, 70, 110, 95, 101, 85]
}, {
    name: 'Cumul arbitraire des polluants (en ug/mètre cube)',
    data: [105, 130, 120, 110, 115, 105]
},
],
plotOptions: {

},
credits: {
    enabled: false
},
});
