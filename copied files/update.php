<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myproject";

$name=$_GET['t1'];
$phone=$_GET['t2'];
$address=$_GET['t3'];
$specialization=$_GET['t4'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE faculty SET name='$name', phone='$phone',Address='$address',specialization='$specialization' WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Update The Profile successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>












































<!-- <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>
</head>
<body>
                    <div class="page-content page-container" id="page-content">
                        <div class="padding">
                            <div class="row container d-flex justify-content-center">
                                <div class="col-xl-6 col-md-12">
                                    <div class="card user-card-full">
                                        <div class="row m-l-0 m-r-0">
                                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                                <div class="card-block text-center text-white">
                                                    <div class="m-b-25">
                                                        <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image" />
                                                    </div>
                                                    <h6 class="f-w-600">Hemant Kaushik</h6>
                                                    <p>Web Designer</p>
                                                    <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-block">
                                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">About Us</h6>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">Name</p>
                                                            <h6 class="text-muted f-w-500">{res.name}</h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">Email</p>
                                                            <h6 class="text-muted f-w-400">hkkaushik136@gmail.com</h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">Phone</p>
                                                            <h6 class="text-muted f-w-400">{res.phone}</h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">Address</p>
                                                            <h6 class="text-muted f-w-400">{res.ddress}</h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">Specialization</p>
                                                            <h6 class="text-muted f-w-400">{res.specialization}</h6>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">Alternate Nubmer</p>
                                                            <h6 class="text-muted f-w-400">9520010920</h6>
                                                        </div>
                                                    </div>
                                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
  



</body>
</html> -->