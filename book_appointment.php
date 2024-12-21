<?php
include 'connection\db_config.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $clientName = $_POST['clientName'];
    $clientContact = $_POST['clientContact'];
    $serviceRequested = $_POST['serviceRequested'];
    $appointmentDate = $_POST['appointmentDate'];
    $appointmentTime = $_POST['appointmentTime'];
    
    // Insert data into the appointments table
    $query = $pdo->prepare("
        INSERT INTO appointments (clientName, clientContact, serviceRequested, appointmentDate, appointmentTime)
        VALUES (:clientName, :clientContact, :serviceRequested, :appointmentDate, :appointmentTime)
    ");
    $query->execute([
        ':clientName' => $clientName,
        ':clientContact' => $clientContact,
        ':serviceRequested' => $serviceRequested,
        ':appointmentDate' => $appointmentDate,
        ':appointmentTime' => $appointmentTime
    ]);

    echo "Appointment booked successfully!";
}
?>

<?php
include("Components/header.php");
?>
  <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-3 mt-5">
               <h1>Book Your Appointment</h1>
                  <form id="request" class="main_form" action="book_appointment.php" method="POST">
                     <div class="row">
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Client Name:" type="text" name="clientName" id="animation" id="name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Contact Number:" type="text" name="clientContact" id="animation" id="contact"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Service Requested:" type="text" name="serviceRequested" id="animation" id="service" >                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Appointment Date:" type="date" name="appointmentDate" id="animation" id="date" >                          
                        </div>
                        <div class="col-md-12">
                            <input class="contactus" placeholder="Appointment Time:" type="time" name="appointmentTime" id="animation" id="time" > 
                        </div>
                        <!-- <div class="col-md-12">
                           <button class="send_btn">Login</button>
                        </div> -->
                        <div class="col-md-12">
                           <button class="send_btn" type="submit" name="bookAppointment">Book Appointment</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
    <?php
         include("Components/footer.php")
        ?>