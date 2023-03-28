<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.sidebar
{
    outline: none;
    border: none;
    text-decoration: none;
    font-family: "Poppins", sans-serif;
    /* position:fixed; */
}

.logo1 a
{
    margin-left: 50px;
    float:left;
    /* border: 1px solid black; */
}

.logo1 a:hover
{
    background: none;
}

body
{
    background: #DDDDDD;
    margin-left: 120px;
    margin-right: 25px;
    margin-top: 30px;
}

nav
{
    position: fixed;
    top: 0;
    bottom: 0;
    height: 100%;
    left:0;
    background: linear-gradient(#ff7b00,#ffb700);
    width: 90px;
    overflow:hidden;
    transition: width 0.2s linear;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}

.sidebarlogo a
{
    color: rgb(85,83,83);
    font-size: 14px;
    /* display: table; */
    
    padding: 5px;
    padding-left: 10px;
    margin: 10px 0 0 10px;
    
    text-decoration: none;
}
.logo 
{
    width: 200px;
    text-align: center;
    display: flex;
    transition: all 0.5s ease;
    margin: 10px 0 0 10px;
    
}
.logo img
{
    width: 45px;
    height: 45px;
    border-radius: 50%;
}

.logo img:hover
{
    cursor: pointer;
}

.logo span
{
    font-weight: bold;
    padding-left: 0px; 
    font-size: 18px; 
    text-transform: uppercase;  
}

.logo:hover
{
    background: none;
    cursor:unset;
}

.sidebar a
{
    color: rgb(85,83,83);
    font-size: 14px;
    display: table;
    width: 200px;
    padding: 5px;
    padding-left: 10px;
    margin-top: 10px;
    text-decoration: none;
}

.sidebar
{
    top: 0;
    left: 0;
}

.sidebar .fa
{
    position: relative;
    width: 70px;
    height: 40px;
    top: 14px;
    font-size: 20px;
    text-align: center;
}

.nav-item
{
    position: relative;
    top: 12px;
    margin-left: 10px;
}

.sidebar a:hover
{
    background: linear-gradient(to left,#ffaa00,#ffea00);
    color: white;
    transition: all 0.3s ease;

}

nav:hover
{
    width: 200px;
    transition: all 0.5s ease;
}

.logout {
	position: absolute;
    bottom: 0;
	float: left;
	line-height: 30px;
}

.logout a{
	margin: 10px;
	color: #FFFFFF;
	text-decoration: none;
}

.logout:hover > ul {
	display:block;
    margin: auto;
}

.logoutoption {
	display: none;
}

.logoutoption li {
    color: rgb(85,83,83)
}

.logoutoption li a{
	color: #000000;
}

ul{
	list-style: none;
	margin: 0;
	padding: 0px; 
	min-width:10em;
}

ul ul {
	left: 100%;
	top: 0;
	margin-left:1px;
}

.logout li:hover {
	color: rgb(85,83,83)
}

.expand{
	font-size:25px;
	float:right;
    margin-top:10px;
	margin-left:20px;
}

*
{
  box-sizing: border-box;
    margin: 0;
    padding: 0;
}
</style>

<body>

<?php
include 'config.php';
        $id =$_GET['username'];
        $host = "SELECT * FROM `admin` where username = '$id'";
        $query = mysqli_query($conn,$host);
        $host_image = mysqli_fetch_assoc($query);
?>
<div class="container">
        <nav>
            <ul>
                <li>
                    <div class="sidebarlogo">
                    <a class="logo" href="#">

                        <span  class="nav-item"><?php echo $host_image['username']?></span>
                    </a>
                    </div>
                </li>
                <div class="sidebar"> 
                <li>
                    <a href="loading_dashboard.php?name=<?php echo $host_image['username']?>">
                        <i class="fa fa-home"></i>
                        <span class="nav-item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="Manage_prod.php?name=<?php echo $host_image['username']?>">

                        <i class="fa fa-universal-access"></i><span class="nav-item">Product</span>
                    </a>
                </li>
                <li>
                    <a href="managepayment.php?name=<?php echo $host_image['username']?>">
                        <i class="fa fa-money"></i><span class="nav-item">Payment</span>
                    </a>
                </li>
                <li>
                    <a href="manageuser.php?name=<?php echo $host_image['username']?>">
                        <i class="fa fa-info-circle"></i><span class="nav-item">Manage user</span>
                    </a>
                </li>
                <li>
                    <a href="staff.php?name=<?php echo $host_image['username']?>">
                        <i class="fa fa-wrench"></i><span class="nav-item">Staff</span>
                    </a>
                </li>
                <li class="logout"><i name="fa"class="fa fa-sign-out"></i><span class="nav-item">Log Out</span><span class="expand">»</span></a>
                    <ul class="logoutoption">
                        <li><a href="Login_user.php"> User Login</a></li>
                        <li><a href="adminloginpage.php"> Admin Login</a></li>
                    </ul></li>
            </ul>
        </nav>
        </div>
</body>
