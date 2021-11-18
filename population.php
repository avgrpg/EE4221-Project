<head>
	<meta charset="UTF-8">
	<title>Population</title>
	<link rel="stylesheet" href="css/styles2.css">
</head>
	<div id="header" class="mainHeader">
		<hr>
		<div class="center"><H1>Example Social Research Organization</H1></div>
	</div>
	<ul class="banner">
		<li><a href="query.php" class="button">Pick another query</a></li>
		<li style="float:right"><a href="index.html" align="left" class="button">Home</a></li>
	</ul>
	</div>
 
 <?php
 
        //Query for the population data            
        $sql = "select name, population, populationurban from countrydata_final;";
        //$result = $conn->query($sql);
        //echo(mysqli_get_connection_stats($conn));
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            //echo "success";
            echo '<table class="data"  style="width: 80%">';
            echo '<tr>';
            echo '<th style="text-align:left">Country Name</th>';
            echo '<th style="text-align:left">Population</th>';
            echo '<th style="text-align:left">Urban Population</th>';
            echo '</tr>';
            
            while($row = $result->fetch_assoc()) {
            //echo '<p>';
           
            echo '<tr>';
            //echo 'Country_Name  Mobile_phone_subscribers  Mortality_under5';
            echo '<td>';
            echo $row["name"];
            echo '&nbsp';
            echo '<td>';
            echo $row["population"];
            echo '&nbsp';
            echo '<td>';
            echo $row["populationurban"];
            echo '<br';
            echo '</tr>';
            }
            echo '</table>';
        }
    ?>