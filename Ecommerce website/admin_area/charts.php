<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-4">

        <div class="card mx-3 bg-warning text-white text-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Total Users</h5>



   
    <?php
$sql = "SELECT COUNT(*) AS total_rows FROM `user_table`";
$result = $con->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $total_rows = $row["total_rows"];
    }
}
    else{
        echo"0 results";
    }

          ?>
           <p class="card-text"> <?php echo $total_rows; ?>

    </p>
    
  </div>
</div>
        
        </div>

        <div class="col-4">
        <div class="card mx-3 bg-warning text-white text-center " style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Total Sales</h5>
    <?php
$sql = "SELECT SUM(amount) AS total FROM `user_payments`";
$result = $con->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $total = $row["total"];
    }
}
    else{
        echo"0 results";
    }

          ?>
    <p class="card-text">GHS <?php echo $total; ?></p>
    
  </div>
</div>
        </div>

        <div class="col-4">
        <div class="card mx-3 bg-warning text-white text-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Total Orders</h5>
    <?php
$sql = "SELECT SUM(total_products) AS total FROM `user_orders`";
$result = $con->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $total = $row["total"];
    }
}
    else{
        echo"0 results";
    }

          ?>
    <p class="card-text"><?php echo $total; ?></p>
    
  </div>
</div>
        </div>

       
</div>
        </div>

      </div>

</div>
 
    </div>














<div class="container-fluid">
    <div class="row">
        <div class="col-4 mx-auto">
        <div class="card" style="width: 25rem;">
  
  <div class="card-body">
    <p class="card-text">
    <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Product', 'Product prices'],
          <?php

$sql = "SELECT * FROM products";
$fire = mysqli_query($con,$sql);
while($result = mysqli_fetch_assoc($fire)){
    echo"['".$result['product_title']."',".$result['product_price']."],";
}

          ?>
          
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 400px; height: 300px;"></div>
  </body>
</html>

    </p>
  </div>
  
</div>
        </div>

        <div class="col-4 mx-auto">
        <div class="card" style="width: 25rem;">
  
  <div class="card-body">
    <p class="card-text">
    <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['payment_mode', 'number'],
          <?php




$query = "SELECT payment_mode, COUNT(*) AS number FROM user_payments  GROUP BY payment_mode";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result)){
    echo"['".$row['payment_mode']."',".$row['number']."],";
}

          ?>
        ]);

        var options = {
          title: 'Percentage of payment channels',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 400px; height: 300px;"></div>
  </body>
</html>
    </p>
  </div>
</div>


    <!--
starts
    -->









    








            </div>
    </div>
</div>


















<div class="container-fluid">
    <div class="row">
        <div class="col-4 mx-auto">
        <div class="card" style="width: 25rem;">
  
  <div class="card-body">
    <p class="card-text">
    <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['2014', 1000, 400, 200],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 400px; height: 300px;"></div>
  </body>
</html>

    </p>
  </div>
  
</div>
        </div>

        <div class="col-4 mx-auto">
        <div class="card" style="width: 25rem;">
  
  <div class="card-body">
    <p class="card-text">
    <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['payment_mode', 'number'],
          <?php




$query = "SELECT payment_mode, COUNT(*) AS number FROM user_payments  GROUP BY payment_mode";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result)){
    echo"['".$row['payment_mode']."',".$row['number']."],";
}

          ?>
        ]);

        var options = {
          title: 'Percentage of payment channels',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 400px; height: 300px;"></div>
  </body>
</html>
    </p>
  </div>
</div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>