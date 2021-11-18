<html>
<head>
<meta charset="UTF-8">
<title>Query Page</title>
<link rel="stylesheet" href="css/styles2.css">
</head>


<body class="bodyStyle">
	

	<div id="header" class="mainHeader">
		<hr>
		<div class="center"><H1>Example Social Research Organization</H1></div>
	</div>
	<ul class="banner">
		<li id="PageName">Country Data Query Page</li>
		<li style="float:right"><a href="index.html" align="left" class="button">Home</a></li>
	</ul>
	</div>
	<ul id="query">
	<li>Please select which query you want to run :</li>
	<li>
	<form id="form1" method="post" action='query2.php'>
	<select name="selection" class="box">
	 <option value="">Select...</option>     
     <option value='Q1'>Mobile phones</option>  
     <option value='Q2'>Population</option>
     <option value='Q3'>Life Expectancy</option>
     <option value='Q4'>GDP</option>
     <option value='Q5'>Childhood Mortality</option>
	</select>
	<input type="submit" value="Submit">
	</li>
   </form>
   </ul>
<br>
<div id="Copyright" class="center">
    <h5>&copy; 2021, EE4221 or its Affiliates. All rights reserved.</h5>
</div>
</body>
</html>