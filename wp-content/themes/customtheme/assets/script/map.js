const departementsURL = `${window.location.origin}/data_journalisme/wp-content/themes/customtheme/assets/json/departements.json`
const relativePrevalenceURL = `${window.location.origin}/data_journalisme/wp-content/themes/customtheme/assets/json/relative_prevalence.json`
const povertyURL = `${window.location.origin}/data_journalisme/wp-content/themes/customtheme/assets/json/taux_pauvrete.json`

let dataDepartements, dataRelativePrevalence, dataPoverty
let dataMap

const buildMap = async function() {
    await getData(departementsURL).then((value) => {
        dataDepartements = value
    })
    await getData(relativePrevalenceURL).then((value) => {
        dataRelativePrevalence = value
    })
    await getData(povertyURL).then((value) => {
        dataPoverty = value
    })
    const buildData = (data) => {
        const newData = data
        newData.forEach((e, i) => {
            e.push(dataRelativePrevalence[i])
            e.push(dataPoverty[i])
        })
        dataMap = newData
    }
    buildData(dataDepartements)
    Highcharts.mapChart('container_map', {
        chart: {
            map: 'countries/fr/fr-all-all',
        },
        credits: {
            enabled: false
        },
        title: {
            text: 'TAUX DE PRÉVALENCE DU DIABÈTE ET DE PAUVRETÉ PAR DÉPARTEMENT, EN FRANCE, EN 2016'
        },
        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
        },
        colorAxis: {
            min: 1,
            minColor: '#FFFFFF',
            maxColor: '#902424',
        },
        tooltip: {
            valueSuffix: ' %',
            pointFormat: '<span>Diabète {point.value}, Pauvreté: <b>{point.poverty} %</b></span>'
        },
        series: [{
            data: dataMap,
            name: 'Taux de',
            keys: ['hc-key', 'value', 'poverty'],
            color: 'red',
            states: {
                hover: {
                    color: '#F47373'
                }
            },
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            },

        }, {
            name: 'Separators',
            type: 'mapline',
            data: Highcharts.geojson(Highcharts.maps['countries/fr/fr-all-all'], 'mapline'),
            color: 'silver',
            showInLegend: false,
            enableMouseTracking: false
        }],
    })

}
buildMap()