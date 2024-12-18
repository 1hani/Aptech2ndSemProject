<?php
include("Components/header.php");
?>


<div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-3 mt-5">
                  <form id="request" class="main_form" action="register.php" method="POST">
                     <div class="row">
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Username" type="text" name="name" id="animation" id="name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="email" name="email" id="animation" id="email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Password" type="password" name="password" id="animation" id="password" >                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Role" type="text" name="role" id="animation" id="role" >                          
                        </div>
                        <!-- <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name" id="animation">Message</textarea>
                        </div> -->
                        <div class="col-md-12">
                           <button class="send_btn">Login</button>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Sigin</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>


<?php
        include('db_config.php');

            // Get data from form
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
            $role = $_POST['role'];

            // Insert into the database
            $sql = "INSERT INTO Users (name, email, password, role) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $name, $email, $password, $role);

                if ($stmt->execute()) {
                    echo "User registered successfully.";
                } else {
                    echo "Error: " . $conn->error;
                }
?>




<?php
include("Components/footer.php");
?>