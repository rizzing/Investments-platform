<script src="/assets/libs/apexcharts/apexcharts.js"></script>
<link rel="stylesheet" href="/assets/libs/apexcharts/apexcharts.css">
<script src="/assets/libs/moment/moment.min.js"></script>
<script src="/assets/libs/moment/moment-with-locales.min.js"></script>

<div class="chart_last_transactions" id="chart_last_transactions"></div>

<script>

    var LastTransactions_chartYmin = -8230.5848552584,
        LastTransactions_chartYmax = 8234.3397445576,
        LastTransactions_chartCurrency = '€',
        LastTransactions_chartYaxistitle = 'Gain/perte',
        LastTransactions_timeranges = {"today":["2024-01-17 00:00:00","2024-01-17 23:59:59"],"yesterday":["2024-01-16 00:00:00","2024-01-16 23:59:59"],"7d":["2024-01-11 00:00:00","2024-01-17 23:59:59"],"30d":["2023-12-17 00:00:00","2024-01-17 23:59:59"],"90d":["2023-10-17 00:00:00","2024-01-17 23:59:59"],"6m":["2023-07-17 00:00:00","2024-01-17 23:59:59"],"1y":["2023-01-17 00:00:00","2024-01-17 23:59:59"]},
        LastTransactions_gains = {"today":0,"yesterday":0,"7d":0,"30d":0,"90d":0,"6m":0,"1y":11638.163203519925};
    LastTransactions_chartTimeNow = new Date(moment().format('YYYY-MM-DD HH:mm:ss')).getTime(); //Date.now();

    var LastTransactions_seriesTrading = [
        {
            //x: new Date('2022-01-17T21:27:46').getTime(),
            x: 1642451266000,
            y: 0        },
        {
            //x: new Date('2022-09-28T12:41:21').getTime(),
            x: 1664361681000,
            y: -0.25548000000001        },
        {
            //x: new Date('2022-10-24T19:52:43').getTime(),
            x: 1666633963000,
            y: -1000.2555222564        },
        {
            //x: new Date('2022-10-24T20:30:59').getTime(),
            x: 1666636259000,
            y: -1017.6590022564        },
        {
            //x: new Date('2022-10-24T21:47:45').getTime(),
            x: 1666640865000,
            y: -1019.6590022657        },
        {
            //x: new Date('2022-10-25T13:29:11').getTime(),
            x: 1666697351000,
            y: -1913.8690022657        },
        {
            //x: new Date('2022-10-25T13:34:26').getTime(),
            x: 1666697666000,
            y: -4184.3816022657        },
        {
            //x: new Date('2022-10-25T14:06:48').getTime(),
            x: 1666699608000,
            y: -4184.3841101613        },
        {
            //x: new Date('2022-10-25T15:33:59').getTime(),
            x: 1666704839000,
            y: -4184.8339101613        },
        {
            //x: new Date('2022-10-25T15:41:53').getTime(),
            x: 1666705313000,
            y: -4184.8339101613        },
        {
            //x: new Date('2022-10-25T15:42:44').getTime(),
            x: 1666705364000,
            y: -4184.8541101613        },
        {
            //x: new Date('2022-10-25T15:43:24').getTime(),
            x: 1666705404000,
            y: -7399.6651401613        },
        {
            //x: new Date('2022-10-25T15:56:35').getTime(),
            x: 1666706195000,
            y: -7401.2418549306        },
        {
            //x: new Date('2022-10-25T16:03:46').getTime(),
            x: 1666706626000,
            y: -7401.2517549306        },
        {
            //x: new Date('2022-10-25T16:04:59').getTime(),
            x: 1666706699000,
            y: -7401.4263519306        },
        {
            //x: new Date('2022-10-25T16:06:27').getTime(),
            x: 1666706787000,
            y: -7479.4418519306        },
        {
            //x: new Date('2022-10-25T16:07:04').getTime(),
            x: 1666706824000,
            y: -7479.1553519306        },
        {
            //x: new Date('2022-10-25T16:07:47').getTime(),
            x: 1666706867000,
            y: -7482.3498684167        },
        {
            //x: new Date('2022-11-10T11:08:00').getTime(),
            x: 1668074880000,
            y: -4152.3997993767        },
        {
            //x: new Date('2023-02-16T08:42:57').getTime(),
            x: 1676533377000,
            y: -3401.2764473767        },
        {
            //x: new Date('2023-02-24T22:14:38').getTime(),
            x: 1677273278000,
            y: 7485.7634041432        },
        {
            //x: new Date('2023-09-30T14:29:18').getTime(),
            x: 1696076958000,
            y: 7485.7634041432        },
    ];

    let height = 450;
    const ww = window.innerWidth;

    if (ww < 1550) {
        height = 380;
    }

    if (ww < 500) {
        height = 280;
    }

    var LastTransactions_seriesTradingCount = LastTransactions_seriesTrading.length;

    var options = {
        series: [
            {
                name: 'Trading',
                data: LastTransactions_seriesTrading
            }
        ],
        theme: {
            mode: localStorage.getItem('theme')
        },
        chart: {
            type: 'area',
            stacked: false,
            height: height,
            zoom: {
                type: 'x',
                enabled: true,
                autoScaleYaxis: true
            },
            toolbar: {
                autoSelected: 'zoom'
            },
            animations: {
                enabled: true,
                easing: 'linear',
                dynamicAnimation: {
                    speed: 1000
                }
            }
        },
        dataLabels: {
            enabled: false
        },
        markers: {
            size: 0,
        },
        title: {
            text: '',
            align: 'left'
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                inverseColors: false,
                opacityFrom: 0.3,
                opacityTo: 0,
                stops: [0, 90, 100]
            },
        },
        yaxis: getLastTransactions_ChartYaxisData(LastTransactions_chartYmin, LastTransactions_chartYmax),

        xaxis: {
            type: 'datetime',
            //type: 'category',
            min: 1642451266000,
            //max: undefined,
            labels: {
                //rotate: -45,
                //rotateAlways: false,
                datetimeUTC: false,
                //datetimeFormatter: {
                //     year: 'yyyy',
                //    month: "MMM 'yy",
                //    day: 'dd MMM',
                //    hour: 'HH:mm',
                //},
            },
        },
        tooltip: {
            shared: false,
            y: {
                formatter: function (value) {
                    return value.toFixed(2) + ' ' + LastTransactions_chartCurrency
                }
            }
        }
    };

    var LastTransactions_chart = new ApexCharts(document.querySelector("#chart_last_transactions"), options);
    LastTransactions_chart.render();

    function getLastTransactions_ChartYaxisData(min, max) {
        return {
            labels: {
                formatter: function (val) {
                    return val.toFixed(2);
                },
            },
            title: {
                text: LastTransactions_chartYaxistitle + ' ' + LastTransactions_chartCurrency
            },
            min: min,
            max: max
        }
    }

</script>