<!-- <?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dogregistrationke";
$_SESSION['DogLicenseNumber'];
$DogLicenseNumber="DogLicenseNumber";
$FirstName=$_SESSION['FirstName'];
$IDNumber=$_SESSION['IDNumber'];
$OwnerID=$_SESSION["OwnerID"];

$conn= new mysqli($servername, $username, $password,$dbname);
    $result=$conn->query("SELECT * FROM ownerinformation where FirstName='$FirstName' and IDNumber ='$IDNumber'") or die("Failed to query DB".mysql_error());
 $row= mysqli_fetch_array($result);
 ?>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dogregistrationke";
$DogLicenseNumber=$_SESSION["DogLicenseNumber"];

  $connection= new mysqli($servername, $username, $password,$dbname);
 $res=$connection->query("SELECT * FROM petdetails where DogLicenseNumber='$DogLicenseNumber' ") or die("Failed to query DB".mysql_error());
 $row= mysqli_fetch_array($res);
   $_SESSION['DogLicenseNumber'] = $row["DogLicenseNumber"]."<br><br>";
 ?> -->
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Donation</title>
 </head>
 <body>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Payments.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="Styles/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="Styles/bootstrap-4.1.0.min.js" type="text/javascript"></script>
        <link href="Styles/bootstrap-4.1.0.min.css" rel="stylesheet" type="text/css"/>
        <link href="Styles/MainStyle.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php
      
        ?>
          <div class="w3-bar w3-pink w3-card w3-left-align w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Donation - Smart Dada</a>
                       </div>
                       <center>
        <div class="container register">
            <center>
            <div class="row" >
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                           
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h5 class="register-heading"><i>Mpesa Donation Form</h5></i>
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <form method="post">
                                       
		     <p><b>Amount to Pay: 500</p></b>
		     <label for="phonenumber"><b>Input Your Phone Number</label><br><br></b>
		    <input type="text" class="form-control" name="phonenumber" placeholder="07" required><br><br>	
                                            
                                        <div class="form-group">
                                             <a href="Pay.php">
                                        	 <input type="button"  class="btnContactSubmit" value="Pay">
                                            </a></div>
                                        	
                                           </div> 
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
 	

 	<div id="display">
 		<link rel="stylesheet" type="text/css" href="Payment.css">
 		

 	
 	 <div id="display2">
 	

		   

		   
		   
		   	<meta name="viewport" content="width=device-width, initial-scale=1">



		</div>
	</div>
	</form>
</div>
</label>

</form> 
</form>
</center>
</center>

 
 </body>
 </html>