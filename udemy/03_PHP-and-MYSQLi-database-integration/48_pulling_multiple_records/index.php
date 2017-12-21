<?php
include('../connecting.php');
$users = $db->query("SELECT * FROM users");

?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="UTF-8">
     <title>MySQLi</title>
   </head>
   <body>
     <?php while ($row = $users->fetch_assoc()): ?>
       <p><?= $row['first_name'], ' ', $row['last_name'], ', ', $row['email'], ', ', $row['created']; ?> </p>
     <?php endwhile; ?>

   </body>
 </html>
