<?php
/**
 *
 *
 * @link          https://github.com/mzm-dev 
 * @created       September 2014
 * @fb            https://www.facebook.com/zakimedia
 * @email         mohdzaki04@gmail.com
 */
$cakeDescription = "Highcharts Chart PHP with MySQL Example";
?>
<!DOCTYPE html>
<html>
    <head>	
        <title><?php echo $cakeDescription ?></title>
        <link href="webroot/css/cake.generic.css" media="screen" type="text/css" rel="stylesheet">
    </head>
    <body>        
        <div id="container">
            <div id="header">
                <h1><?php echo $cakeDescription; ?></h1>
            </div>
            <div id="content">
                <table>
                    <thead>
                        <tr>
                            <th>PIE CHARTS</th>                            
                            <th>COLUMN, BAR AND LINE CHARTS</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="pie/pie-chart_1.php">Pie Chart  Example 1</a></td>                          
                            <td><a href="bar/basic-colm.php">Basic Column</a></td>                          
                        </tr>                       
                        <tr>                          
                            <td><a href="pie/pie-chart_2.php">Pie Chart Example 2</a></td>
                            <td><a href="bar/basic-bar.php">Basic Bar</a></td>                          
                        </tr>                       
                        <tr>                          
                            <td><a href="pie/pie-semi-circle.php">Pie Semi Circle</a></td>
                            <td><a href="bar/basic-colm-ajax.php">Basic Column AJAX</a></td>                          
                        </tr>                       
                        <tr>                          
                            <td><a href="pie/pie-chart-3d.php">Pie Chart 3D</a></td>
                            <td><a href="bar/basic-line.php">Basic Line</a></td>                          
                        </tr>                       
                    </tbody>
                </table>

                <p>
                    Get the code on Github now <a href="https://github.com/pesima/highcharts">HighCharts</a>          
                </p>
            </div>
            <div id="footer">
                <a target="_blank" href="https://github.com/pesima/highcharts">MZM-DEV : pesima/highcharts</a>		
            </div>
        </div>      
    </body>
</html>
