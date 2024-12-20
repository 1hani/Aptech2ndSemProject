<?php
include("db_config.php")

// resgiteration
if(isset($_POST['registration'])){
    $uname = $_POST['name'];
    $uemail = $_POST['email'];
    $upassword = $_POST['password'];
    $passwordHash = sha1(string: $upassword);
    $unumber = $_POST['role'];
    check email 
    $checkEmail = $pdo ->prepare("select * from users where email = :pemail");
    $checkEmail ->bindParam("email",$uemail);
    $checkEmail ->execute();
    $chk = $checkEmail->fetch(PDO::FETCH_ASSOC);
    if(!empty($chk['email'])){
echo "<script>
alert('already Exist');
</script>";
    }
else{

    
$query = $pdo->prepare("INSERT INTO `users`(`name`, `email`, `password`, `role`) VALUES(:pn,:pe,:pp,:prole)");
$query->bindParam("pn",$uname);
$query->bindParam("pe",$uemail);
$query->bindParam("pp",$passwordHash);
$query->bindParam("prole",$unumber);
$query->execute();
echo "<script>
alert('account register successfully');
location.assign('index.php')
</script>";
    }
}
?>