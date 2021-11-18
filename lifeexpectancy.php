<head>
	<meta charset="UTF-8">
	<title>lifeexpectancy</title>
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
        //SQL to get birthrate and life expectancy    
        $sql = "select name, birthrate, lifeexpectancy from countrydata_final;";
        
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            //echo "success";
            echo '<table class="data"  style="width: 80%">';
            echo '<tr>';
            echo '<th style="text-align:left">Country Name</th>';
            echo '<th style="text-align:left">Birth Rate</th>';
            
            echo '<th style="text-align:left">Life Expectancy</th>';
            echo '</tr>';
            
            while($row = $result->fetch_assoc()) {
            //echo '<p>';
           
            echo '<tr>';
            echo '<td>';
            echo $row["name"];
            echo '&nbsp';
            echo '<td>';
            echo $row["birthrate"];
            echo '&nbsp';
            echo '<td>';
            echo $row["lifeexpectancy"];
            echo '&nbsp';
            echo '<br';
            echo '</tr>';
            }
            echo '</table>';
        }
    ?>