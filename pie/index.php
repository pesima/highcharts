<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highcharts Pie Chart</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var options = {
                    chart: {
                        renderTo: 'container',
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false
                    },
                    title: {
                        text: 'Web Sales & Marketing Efforts'
                    },
                    tooltip: {
                        formatter: function() {
                            return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %';
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                color: '#000000',
                                connectorColor: '#000000',
                                formatter: function() {
                                    return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %';
                                }
                            }
                        }
                    },
                    series: []
                    //Bentuk data sebenar
                    /*series: [{
                            "type":"pie",
                            "name":"Revenue",
                            "data":[
                                ["Direct Sales",20],
                                ["Search Engine Marketing",15],
                                ["PPC Advertising",15],
                                ["Website Marketing",10],
                                ["Blog Marketing",10],
                                ["Social Media Marketing",10],
                                ["Email Marketing",10],
                                ["Online PR",2.5],
                                ["Multimedia Marketing",2.5],
                                ["Mobile Marketing",2.5],
                                ["Display Advertising",2.5]
                            ]
                        }]*/
                }

                $.getJSON("data.php", function(json) {
                    options.series = json;
                    chart = new Highcharts.Chart(options);
                });
            });
        </script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
    </head>
    <body>
        <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
    </body>
</html>
