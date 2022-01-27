<html lang="en">
  	<head>
		
         <link rel="icon" type="image/x-icon" href="assets/img/china-25-512.ico" />
          <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
       <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Hind:wght@600&display=swap" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		  <link rel='stylesheet'href ='css/login.css'/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
    <body class="tts">
 <section id="" >
         <div class="container-fluid " id="">

    <!-- Nav Bar -->
             <form method="post" action="C:/wamp64/www/server.php">
<nav class="wow bounceInUp navbar navbar-expand-lg  navbar-dark     sticky-top" id="mainNav">
  <a class="navbar-brand" href="#">noddels</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
       <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      
      
     
    </ul>
     
      
  </div>
</nav>
             </form>
     </div>
<?php
        $connect = mysqli_connect("localhost", "root", "", "noodles");
        $query = "SELECT * FROM tbl_product ORDER BY id ASC";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?>
      <div class="col-md-4 col-sm-6 col-xm-12">
        <form method="post" action="dishes.php?action=add&id=<?php echo $row["id"]; ?>">
          <div style="border:1px solid #333; background-color: grey; border-radius:5px; padding:16px; margin-bottom: 20px;" align="center">
            <div class="img">
            <img src="images/<?php echo $row["img"]; ?>" class="img-responsive"  height="316" width="440" /><br />
            </div>
            <h4 class="text-info"><?php echo $row["name"]; ?></h4>

            <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>


          </div>
        </form>
      </div>
      <?php
          }
        }
      ?>
    </body>
</html>