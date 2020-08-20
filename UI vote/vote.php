<?php
$server="localhost";
$username="root";
$password="";
$db="mydb";
$conn=mysqli_connect($server,$username,$password,$db);
?>
<?php

$hero="saitama";
  $query="SELECT number FROM  anime WHERE hero='$hero' ";
  $run=mysqli_query($conn,$query);
    $run=mysqli_fetch_assoc($run);
    $hero1="deku";
      $query="SELECT number FROM  anime WHERE hero='$hero1' ";
  $run1=mysqli_query($conn,$query);
    $run1=mysqli_fetch_assoc($run1);
     $hero2="levi";
      $query="SELECT number FROM  anime WHERE hero='$hero2' ";
  $run2=mysqli_query($conn,$query);
    $run2=mysqli_fetch_assoc($run2);
 $hero3="naruto";
      $query="SELECT number FROM  anime WHERE hero='$hero3' ";
  $run3=mysqli_query($conn,$query);
    $run3=mysqli_fetch_assoc($run3);
     $hero4="Light";
      $query="SELECT number FROM  anime WHERE hero='$hero4' ";
  $run4=mysqli_query($conn,$query);
    $run4=mysqli_fetch_assoc($run4);
    $runtime=$run["number"]+$run2["number"]+$run3["number"]+$run4["number"];

?>
<head>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</body>
</html>

<div class="container">
<title>LogIn page</title>

</head>
<div class="page-header" >
<h1 class="text-primary">Votes</h1>
<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
    <div class="navbar-header ">
    </div>
    <ul class="nav navbar-nav" >
    	  <li><a href="http://localhost/voteaction.php">Vote</a></li>
      <li ><a href="#">Refresh Result</a></li>
    </ul>
  </div>
</nav>
</div>
<div class="jumbotron">

<body>


<script type="text/javascript">
// Load google charts
var naruto = <?php echo $run3["number"] ?>;
var saitama = <?php echo $run["number"] ?>;
var levi=<?php echo $run2["number"]?>;
var l = <?php echo $run4["number"] ?>;
var deku = <?php echo $run1["number"] ?>;
</script>

 <div id="piechart"></div>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ['Character', 'Votes'],
  ['Naruto', naruto],
  ['Saitama',saitama],
  ['Light Yagami', l],
  ['Deku', deku]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Anime Votes', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.BarGraph(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">

window.onload = function () {
  var chart = new CanvasJS.Chart("chartContainer", {
    title:{
      text: "My First Chart in CanvasJS"              
    },
    data: [              
    {
      // Change type to "doughnut", "line", "splineArea", etc.
      type: "pie",
      dataPoints: [
        { label: "Naruto",  y: naruto  },
        { label: "Saitama", y: saitama  },
        { label: "Light Yagami", y: l  },
        { label: "Deku",  y: deku  },
        { label: "grape",  y: 28  }
      ]
    }
    ]
  });
  chart.render();
}
</script>
<canvas id="horizontalBar"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript">
  new Chart(document.getElementById("horizontalBar"), {
"type": "horizontalBar",
"data": {
"labels": ["Naruto","Saitama","Light Yagami","Deku","Levi"],
"datasets": [{
"label": "Ratings",
"data": [ naruto,saitama,l,deku,levi],
"fill": true,
"backgroundColor": ["red", "blue",
"green", "black", "purple"
],

"borderWidth": 1
}]
},
"options": {
"scales": {
"xAxes": [{
"ticks": {
"beginAtZero": true
}
}]
}
}
});
</script>
</body>
<body>
  <div id="chartContainer" style="height: 300px; width: 100%;"></div>
</body>

</div>
</div>
</head>