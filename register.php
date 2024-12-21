

<?php
include 'connection\db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registration'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']); // Securely hash the password

    // Insert query
    try {
        $query = $pdo->prepare("INSERT INTO users (userName, userEmail, userPassword) VALUES (:username, :email, :password)");
        $query->execute([
            ':username' => $username,
            ':email' => $email,
            ':password' => $password,
        ]);
        echo "User registered successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
<?php
include("Components/header.php");
?>

<div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-3 mt-5">
                  <form id="request" class="main_form" method="POST">
                     <div class="row">
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Username" type="text" name="username" id="animation" id="name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="email" type="email" name="email" id="animation" id="email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Password" type="password" name="password" id="animation" id="password" >                          
                        </div>
                        <!-- <div class="col-md-12">
                           <input class="contactus" placeholder="Role" type="text" name="role" id="animation" id="role" >                          
                        </div> -->
                        <!-- <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name" id="animation">Message</textarea>
                        </div> -->
                        <div class="col-md-12">
                           <button class="send_btn">Login</button>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn" type="submit" name="registration" >Sign Up</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>





<?php
include("Components/footer.php");
?>