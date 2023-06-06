<?php
session_start();
include('dataconnection.php');
include "usernavbar.php";

$msg =" ";
if(isset($_POST['add_to_cart'])){
  $id = mysqli_real_escape_string($conn,$_POST['id']);
  $q = "SELECT * from `usergenerator` where des_id = $id";
  $day = mysqli_real_escape_string($conn,$_POST['des_day']);
  $query = mysqli_query($conn,$q);
  $rz = mysqli_fetch_assoc($query);
  $image = mysqli_real_escape_string($conn,$_POST['product_image']);
  $name =  mysqli_real_escape_string($conn,$_POST['product_name']);
  $q1 = "INSERT INTO `userdestination`(des_Name,des_img,des_day) VALUES ('$name','$image','$day')";
  $q2 = mysqli_query($conn,$q1);

//     $msg = "<div class='popup'>
//     <div class='popup-content'>
//     <form method='post'>
//   <img src='images/close.png' alt='Close' class='close'>
//     <label for='days'>Choose a day:</label>
//     <select name='days' id='days'>
//       <option value='days'> 1</option>
//       <option value='days'> 2</option>
//       <option value='days'> 3</option>
//     </select>
//     <br><br>
  
//     <label for='duration'>Duration:</label><br>
//     <input type='text' id='duration' name='duration'><br>
  
//     <a href='useradddestination.php?id=' class='button'>submit</a>
  
//   </form>
//     </div>
  
//   </div>
//   ";
}

?>


<?php
  //   if (isset($_POST['add_to_cart'])) {
  //       // Get the relevant data from the form
  //       $productName = $_POST['product_name'];
  //       $productImage = $_POST['product_image'];

  //       if (empty($productName) || empty($productImage)) {
  //           echo "added fail";
  //           exit();
  //       } else {
  //           // Prepare the SQL statement with placeholders
  //           $sql = "INSERT INTO userdestination (des_img, des_Name) VALUES (?, ?)";
  //           $stmt = $conn->prepare($sql);

  //           // Bind the values to the prepared statement
  //           $stmt->bind_param("ss", $productImage, $productName);

  //           // Execute the prepared statement
  //           if ($stmt->execute()) {
  //               echo "added successfully";
  //           } else {
  //               echo "added fail";
  //           }
  //       }
  //   }
	// // Establish database connection
	// $host = "localhost";
	// $username = "root";
	// $password = "";
	// $database = "tpgs";
	// $connect = mysqli_connect($host, $username, $password, $database);

	// // SQL query to select orders and order items
	// $sqlselect = "SELECT des_img, des_Name from usergenerator";

	// $result = mysqli_query($connect, $sqlselect);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPGS || Itinerary</title>
    <link rel="stylesheet" href="usergenerator_test.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<style>
:root{
  --primary:#4bb6b7;
  --secondary:#FFFFFF;
  --gray:#575757;
  --lightgray:#848484;
  --lightgray2:rgb(127,183,126,0.1);
  --darkgray:#2E3238;
  --black:#393e46;
  --green:#00AD7C;
  --yellow:#FFEA61;

  --shadow:0px 2px 8px 0px var(--lightgray);
}

.wrapper {
  width: 95%;
  margin: 20px;
  text-align: right;
  padding: 20px;
}
 
/*FILTER*/
.button-value {
  border: 1px solid #000000;
  padding: 1em 2.2em;
  border-radius: 3em;
  background-color: transparent;
  color: #000000;
  cursor: pointer;
  margin: 1px;
}

.active {
  background-color: #000000;
  color: #ffffff;
}

/*dehui的searchbar*/

.search-wrapper
{
  border: 1px solid black;
  border-radius: 30px;
  height: 50px;

  /* align-items: center; */
  overflow-x: hidden;
  /* margin: auto; */
  width: 300px;
  float: left;
  margin: 3px;
}
.search-wrapper button
{
  display: inline-block;
  padding: 0rem .5rem;
  color: black;
  border: none;
  background-color: transparent;
  margin-right: 15px;
}

.search-wrapper span
{
  font-size: 15px;
  margin-left: 10px;
}
.search-wrapper input
{
  height: 100%;
  padding: .5rem;
  border: none;
  outline: none;
  background: transparent;
  color: gray;
  padding-left: 20px;
}


.container_product {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  border: none;
  outline: none;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
  left: 20px;
  display: grid;
  grid-template-columns:15% 15% 15% ;
  grid-gap: 2px;
}

/* .card .card-content button {
  cursor: pointer;
  color: #fff;
  width: 100%;
  height: 50px;
  font-size: 22px;
  font-weight: 600;
  border-radius: 12px;
  background: linear-gradient(45deg, #fabd14, #eb9616  );
}


.card .card-content.add-to-cart:hover {
  background: linear-gradient(45deg, aqua, #00ffff);
}

  .card {
    background-color: #ffffff;
    max-width: 18em;
    margin-top: 1em;
    padding: 1em;
    border-radius: 5px;
    box-shadow: 1em 2em 2.5em rgba(1, 2, 68, 0.08);
  }
  .image-container {
    text-align: center;
  }
  img {
    max-width: 100%;
    object-fit: contain;
    height: 15em;
  }
  
  .container h5 {
    font-weight: 500;
  }
  .hide {
    display: none;
  }
  @media screen and (max-width: 720px) {
    img {
      max-width: 100%;
      object-fit: contain;
      height: 10em;
    }
    .card {
      max-width: 18em;
      margin-top: 1em;
    }
  
  } */

.sidenav {
  background-color: #f0eeee;
  width: 40%;
 
 
}

.container_calendar {
  background-color: #ffffff;
  padding:20px;
  width: 85%;
  margin: 60px;
  box-shadow: 0 0 16px -4px rgba(0, 0, 0, 0.75);
}

.add{
  cursor: pointer;
  width: 15%;
  height: 50px;
  font-size: 20px;
  font-weight: 600;
  border-radius: 5px;
  color: var(--secondary);
  background: var(--primary);
  /* float: right; */
  /* margin-right:60px ; */
  margin-left: 80%;
  transition: 0.5s;
  text-decoration: none;
}

.add:hover{
  background: var(--darkgray);
}

.delete{
  cursor: pointer;
  width: 15%;
  height: 50px;
  font-weight: 600;
  border-radius: 5px;
  color: var(--secondary);
  background: var(--primary);
  float: left;
  margin-left:60px;
  padding: 0.6rem 0.8rem;
  font-size: 0.9rem;
  transition: 0.5s;
  font-weight: 700;
}

.delete:hover{
  background: var(--darkgray);
}

.print{
  cursor: pointer;
  width: 15%;
  height: 50px;
  font-size: 20px;
  font-weight: 600;
  border-radius: 5px;
  color: var(--secondary);
  background: var(--primary);
  float: right;
  margin-right:60px;
  transition: 0.5s;
}

.print:hover{
  background: var(--darkgray);
}

body
{
background-image: url(images/image.gif);
background-size: cover; 
background-repeat: no-repeat;
background-attachment: fixed;
}

/* 
 .popup{
  background:rgba(0, 0, 0, 0.6) ;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  display: none;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.popup-content{
  height: 250px;
  width: 500px;
  background: #fff;
  padding: 20px;
  border-radius: 5px;
  position: relative;



} */

  /* input{
      margin: 10px auto;
      margin-bottom: 20px;
    
      width: 50%;
      padding:5px;
      border-radius: #fff;
      position:relative;
  } */




/* .button{
background:#fff;
padding:10px 15px;
color: #34495e;
font-weight: bolder;
text-transform: uppercase;
font-size: 18px;
border-radius: 5px;
box-shadow: 6px 6px 29px -4px rgba(0,0,0,0.75);
margin:25px;
transition: 0.4s;


}*/

.button:hover{
  background: var(--darkgray);
}  

.buttons{
  display: inline-block;
  width: calc(50% - 5px);
  text-align: center;
  padding: 0.6rem 0.8rem;
  font-size: 0.9rem;
  font-weight: 700;
  margin-top: 8px;
  margin-right: 5px;
  color: var(--secondary);
  background: var(--primary);
  border-radius: 0.5rem;
  cursor: pointer;
  text-decoration: none;
  transition: 0.5s;
}

.close{
  position: absolute;
  top:-15px;
  right: -15px;
  background:#fff;
  height: 20px;
  width: 20px;
  border-radius: 50%;
  box-shadow: 6px 6px 29px -4px rgba(0,0,0,0.75);
  cursor:pointer;
}
#submit
{
      margin: 10px auto;
      margin-bottom: 20px;
      width: 100%;
      padding:5px;
      border-radius: #fff;
      position:relative;
}

/* hot tour */
.container-fluid{
  width:40%;
}

.hot {
  max-width: 100%;
  padding: 10px 20px 20px 20px;
  align-items: center;
  background:none;
  
}

.hot h1 {
  text-align: center;
  padding-bottom: 1.5rem;
  color:var(--gray);
  font-size: 2rem;
  text-transform: uppercase;
}

.hot span {
  position: relative;
  z-index: 0;
}

.tourline {
  border: none;
  margin: 0 auto;
  margin-top: 10px;
  height: 6px;
  width: 230px;
  background-color: var(--primary);
 
}

.hot .tourbox-container {
  display: grid;
  grid-template-columns:50% 50% ;
  grid-gap: 35px;
  
}

.hot .tourbox-container .tour-box{
  background-color: var(--secondary);
  border-radius: 0.5rem;
  box-shadow: var(--shadow);
}

.hot .tourbox-container .tour-box .image{
  height: 18rem;
  width: 100%;
  padding: 1rem;
  position: relative;
}

.hot .tourbox-container .tour-box .image img{
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 0.5rem;  
}

.hot .tourbox-container .tour-box .image h3{
  position: absolute;
  top: 1.5rem;
  left: 1.5rem;
  font-size: 1rem;
  color: var(--secondary);
  background: rgba(0, 0, 0, 0.5);
  border-radius: 0.5rem;
  font-weight: lighter;
  padding: 0.3rem 0.5rem;
}

.hot .tourbox-container .tour-box .image h3 i{
  color:var(--primary);
}

.hot .tourbox-container .tour-box .content{
  padding: 1.5rem;
  padding-top: 0;
}

.hot .tourbox-container .tour-box .content p{
  font-size: 0.9rem;
  margin-top: -10px;
  color: var(--lightgray);
  line-height: 1.5;
}

.hot .tourbox-container .tour-box .content .btn {
  display: inline-block;
  width: calc(50% - 5px);
  text-align: center;
  padding: 0.6rem 0.8rem;
  font-size: 0.9rem;
  font-weight: 700;
  margin-top: 8px;
  margin-right: 5px;
  color: var(--secondary);
  background: var(--primary);
  border-radius: 0.5rem;
  cursor: pointer;
  text-decoration: none;
  transition: 0.5s;
}

.hot .tourbox-container .tour-box .content .btn:last-child {
  margin-right: 0;
}

.hot .tourbox-container .tour-box .content .btn:hover {
  background: var(--darkgray);
}
input{
width: 100%;
padding: 5px;
}
</style>
<body>

	
<div id="buttons">
			  <button class="button-value" onclick="filterProduct('all')">All</button>
			  
			  <button class="button-value" onclick="filterProduct('RESTAURANT')">
				RESTAURANT
			  </button>
			  <button class="button-value" onclick="filterProduct('DESTINATION')">
				LOCATION
			  </button>
			  <div class="search-wrapper">
				<input type="text" name="search" placeholder="Search here" >
	
				<button type="submit" name="submit"><span class="fa fa-search"></span></button>
					
					
				</div>
			</div>
      <div class="container-fluid">
      <section class="hot" id="hot">
      <div class="tourbox-container">
          <?php
          $query = "SELECT * FROM usergenerator";
          $result = mysqli_query($conn, $query);

          if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                 
          ?>
                  <div class="tour-box">
                  <form method="post">
                      <div class="image">
                          <img src="<?php echo $row['des_img']; ?>">
                          <h3><i class="fas fa-map-marker-alt"></i> <?php echo $row['des_Name']; ?></h3>
                      </div>
                      <div class="content">
                      <input type="hidden" name="product_name"  value="<?php echo $row["des_Name"]; ?>" >
                            <input type="hidden" name="product_image" value="<?php echo $row["des_img"]; ?>">
                            <input type="hidden" name="id" value="<?php echo $row['des_id']?>">
                      <input type="number" name="des_day"  value="0">
                          <input type="submit" class="btn btn-warning btn-block" id="submit" name="add_to_cart" value="Add to Cart">
                      </div>
                  </div>
              </form>
              <?php
                  }
              }
              ?>
          </div>
      </section>
  </div>
                    <div class="sidenav">
                        <h2 class="text-center">Itinerary</h2>

                        <button class="add">Add Trip</button>
<?php
                        $query ="SELECT * FROM  `userdestination`";
                        $result = mysqli_query($conn,$query);
                        while ($r = mysqli_fetch_array($result)){?>

                    

                          <div class="container_calendar">
                            <div class="calendar">
                              <h3>Day <?php echo $r['des_id']?></h3>
                                            

                              </div>
                              
                              <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                              <div class="add_destination">
                              <p><?php echo $r['des_Name']?></p>
                              
                              </div>
                          
                          </div>
                              <div class="line"></div>
                          <?php }?>
                        <button class="delete">Delete</button>
                        <button class="print">Print</button>
	

                      
                         
                    </div>
                </div>
            </div>
        </div>


 
<?php echo $msg?>

 


</body>
<script>

  function show()
  {
    document.querySelector('.popup').style.display = 'flex'
  }


document.querySelector('.close').addEventListener('click',function(){
  document.querySelector('.popup').style.display='none';
})

</script>
</html>