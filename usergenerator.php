<?php
include('dataconnection.php');
$sql ="SELECT * FROM usergenerator";
$result = mysqli_query($conn, $sql);

?>


<?php
    if (isset($_POST['addbtn'])) {
        // Get the relevant data from the form
        $productName = $_POST['product_name'];
        $productImage = $_POST['product_image'];

        if (empty($productName) || empty($productImage)) {
            echo "added fail";
            exit();
        } else {
            // Prepare the SQL statement with placeholders
            $sql = "INSERT INTO userdestination (des_img, des_Name) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);

            // Bind the values to the prepared statement
            $stmt->bind_param("ss", $productImage, $productName);

            // Execute the prepared statement
            if ($stmt->execute()) {
                echo "added successfully";
            } else {
                echo "added fail";
            }
        }
    }
	// Establish database connection
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "tpgs";
	$connect = mysqli_connect($host, $username, $password, $database);

	// SQL query to select orders and order items
	$sqlselect = "SELECT des_img, des_Name from usergenerator";

	$result = mysqli_query($connect, $sqlselect);
?>


<!DOCTYPE html>
	<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TPGS || Itinerary</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
	
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	<link rel="stylesheet" href="usergenerator.css">
	<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="usergenerator.css">
<link rel="stylesheet" href="filter.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
			
		<div class="sidenav">
			<button class="add">Add Trip</button>

			<div class="container_calendar">
				<div class="calendar">
					<h3>Day 1</h3>
				

					</div>
					
					<hr style="height:2px;border-width:0;color:gray;background-color:gray">
					<div class="add_destination">
					<h4>add destination</h4>
					
					</div>
			
			</div>
        	<div class="line"></div>
			<div class="container_calendar">
				<div class="calendar">
					<h3>Day 2</h3>
					
					</div>
				<hr style="height:2px;border-width:0;color:gray;background-color:gray">
					<div id="add_destination">
						<h4>add destination</h4>
					</div>
			</div>

			
			<div class="container_calendar">
				<div class="calendar">
					<h3>Day 3</h3>
					</div>
					<hr style="height:2px;border-width:0;color:gray;background-color:gray">
					<div class="add_destination"  >
						<h4 >add destination</h4>
					</div>
			</div>


			<div class="container_calendar">
				<div class="calendar">
					<h3>Day 4</h3>
					</div>
					<hr style="height:2px;border-width:0;color:gray;background-color:gray">
					<div class="add_destination">
						<h4>add destination</h4>
					</div>
			</div>
		<button class="delete">delete</button>
		<button class="print">Print</button>
	
		  </div>
		  
	








		  <div class="wrapper">
			
			<div id="buttons">
			  <button class="button-value" onclick="filterProduct('all')">All</button>
			  <button class="button-value" onclick="filterProduct('Hotel')">
				Hotel
			  </button>
			  <button class="button-value" onclick="filterProduct('RESTAURANT')">
				RESTAURANT
			  </button>
			  <button class="button-value" onclick="filterProduct('DESTINATION')">
				DESTINATION
			  </button>
			  <div class="search-wrapper">
				<input type="text" name="search" placeholder="Search here" >
	
				<button type="submit" name="submit"><span class="fa fa-search"></span></button>
					
					
				</div>
			</div>
		
		  </div>
<?php 


                    


while($row = mysqli_fetch_assoc($result)){
?>

<div class="container_product">
			
  <div class="card">
  <div class="card-image">
    <img src="<?php echo $row["des_img"]; ?>" alt="...">
    <i class="bx bx-star"></i>
  </div>
  <div class="card-content">
    <h3><?php echo $row["des_Name"]; ?></h3>
    <p></p>
    <form method="POST">
      <input type="hidden" name="product_name"  value="<?php echo $row["des_Name"]; ?>" >
      <input type="hidden" name="product_image" value="<?php echo $row["des_img"]; ?>">
      <button class="btn" name="addbtn" type="submit">
        Add To Cart
      </button>
    </form>
  </div>
</div>

			
				
</div>
  









        <?php
		}
		?>
		
		<script src="drop.js"></script>
		<script src="searchbar.js"></script>
	

	</body>
	</html>