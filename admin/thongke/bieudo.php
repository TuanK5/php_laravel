<!DOCTYPE html>
<html lang="en-US">
<body>

<h1>Thong ke san pham danh muc</h1>
<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Danh muc', 'So luong san pham'],
  <?php
   $tongdm=count($listtke);
   $i=1;
        foreach ($listtke as $tke) {         
            extract($tke);
            if($i==$tongdm) $dauphay=""; else $dauphay=",";
            echo"['".$tke['tendm']."', ".$tke['countsp']."]".$dauphay;
    $i+=1;   
    }
  ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Thong ke san pham', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>
