<head>
	<meta charset="UTF-8">
	<title>GDP</title>
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
        //Query to get the GDP
        $sql = "select name, gdp from countrydata_final;";
       
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            
            echo '<table class="data"  style="width: 80%">';
            echo '<tr>';
            echo '<th style="text-align:left">This is a Country Name</th>';
            echo '<th style="text-align:left">Gross Domestic Product</th>';
            echo '</tr>';
            
            while($row = $result->fetch_assoc()) {
          
            echo '<tr>';
            echo '<td>';
            echo $row["name"];
            echo '&nbsp';
            echo '<td>';
            echo $row["gdp"];
            echo '&nbsp';
            echo '<br>';
            echo '</tr>';
            }
            echo '</table>';
                                                }
                                        
    ?>