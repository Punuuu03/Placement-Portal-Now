<?php

@include 'config.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin view application</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/view.css">
</head>
<body>
   <?php
if(isset($message)){
    foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
    };
 };
?>
<?php include 'stud header.php'; ?>
<div class="container">
<section class="student">
<h1 class="heading">students applications</h1>
<div class="box-container">
<?php
      $select_student = mysqli_query($conn, "SELECT * FROM `student`");
      if(mysqli_num_rows($select_student) > 0){
         while($fetch_student= mysqli_fetch_assoc($select_student)){
      ?>
<form action="" method="post">
         <div class="box">
            <h3><?php echo $fetch_student['name']; ?></h3>
            <h3><?php echo $fetch_student['email']; ?></h3>
            <h3><?php echo $fetch_student['mobile']; ?></h3>
            <h3><?php echo $fetch_student['college']; ?></h3>
            <input type="hidden" name="student_name" value="<?php echo $fetch_student['name']; ?>">
            <input type="hidden" name="student_email" value="<?php echo $fetch_student['email']; ?>">
            <input type="hidden" name="student_mobile" value="<?php echo $fetch_student['mobile']; ?>">
            <input type="hidden" name="student_college" value="<?php echo $fetch_student['college']; ?>">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>
<script src="js/application.js"></script>

</body>
</html>