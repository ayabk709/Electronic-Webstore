<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header id="header">
  
        <a href="#"><img
             src="../images/logo.png" alt="logo">
        </a>
        <div>
    <ul id="navbar">
        <li><a  class="active"  href="../admin/dashboard.php">home</a></li>
        <li><a href="../admin/products.php">products</a></li>
        <li> <a href="../admin/placed_orders.php">orders</a></li>
        <li><a href="../admin/admin_accounts.php">admins</a></li>
        <li><a href="../admin/users_accounts.php">users</a></li>
        <li> <a href="../admin/messages.php">messages</a></li>
        <div class="icons">
       <a href="admin_login.php"><div id="user-btn" class="fas fa-user"></div></a>
       <a href="../components/admin_logout.php"><i class="fas fa-sign-out-alt"></i></a>
        </div>
        
    </ul>
    <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="../admin/update_profile.php" class="btn">update profile</a>
         <div class="flex-btn">
            <a href="../admin/register_admin.php" class="option-btn">register</a>
            <a href="../admin/admin_login.php" class="option-btn">login</a>
         </div>
         <a href="../components/admin_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
      </div>
      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="../admin/update_profile.php" class="btn">update profile</a>
         <div class="flex-btn">
            <a href="../admin/register_admin.php" class="option-btn">register</a>
            <a href="../admin/admin_login.php" class="option-btn">login</a>
         </div>
         <a href="../components/admin_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
      </div>

</div>

</header>



