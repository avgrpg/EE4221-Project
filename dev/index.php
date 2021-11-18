<html>
  <head>
  	<meta charset="UTF-8">
  	<title>ShirleySite</title>
  	<link rel="stylesheet" href="css/style1.css">
    <script>
            window.onload = fadeIn;
            function fadeIn() {
                var leftPart = document.getElementById("left");
                var button = document.getElementById("button");
                var opacityValue = 0;
                var timeinterval = setInterval(function() {
                  if (opacityValue < 1)
                  {
                    opacityValue = opacityValue + 0.1;
                    leftPart.style.opacity = opacityValue;
                    button.style.opacity = opacityValue;
                  }else{
                    clearInterval(timeinterval);
                  }
                }, 30);
            }
    </script>
  </head>

  <body>
    <div class="container">
      <div class="inner">
        <div class="left" id="left" style="opacity:0;">

          <img src="logo.png" alt="logo" class="logo">

          <div class="content">
            <h1>Example Social Research Organization<span></span></h1>

            <p>
              Welcome to our data query site. You can get data from countries all over the world to use in your research.
            </p>
            <p class="content2">We provide data for a variety of areas including basic demographics and development statistics.</p>

              <p class="contactUs">Contact us: 123 Any Street, Any Town, USA</p>
              <p class="hours">Weedays: 06:00 - 18:00, Saturday: 07:00 - 19:00, Sundays: closed</p>

            <p class="AWSright">&copy; 2020, Amazon Web Services, Inc. or its Affiliates. All rights reserved.</p>
          </div>

        </div>
        <div class="right">
          <a href="query.php" target="_blank">
            <button type="button" id="button", style="opacity:0;">Lets Enter the Query!</button>
          </a>
          <p>
            Our site got started when Shirley Rodriguez found that she was frequently looking up data from a variety of databases.
Shirley decided to start sharing some of this data with other social researchers.
          </p>
          <img src="shirley.png">

        </div>

      </div>
    </div>

  </body>




</html>
