<?php
session_start();
if(isset($_SESSION['unique_id'])){
    header('location: users.php');
}
?>
<body>
   <div class="wrapper">
    <section class="form signup">
        <header>Keed Chat</header>
        <h6>Author: Ayokeed</h6>
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="name-details">
                <div class="field input">
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="First Name" required>
                </div>
                <div class="field input">
                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Lat Name" required>
                </div>
            </div>
            <div class="field input">
                <label>Email Address</label>
                <input type="text" name="email" placeholder="Enter your email" required>
            </div>
            <div class="field input">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter new password" required>
                <i class="fas fa-eye"></i>
            </div>
            <div class="field images">
                <label>Select Image</label>
                <input type="file" name="image" acept="img/x-png.image/gif'image/jpg" required>
            </div>
            <div class="field button">
                <input type="submit" name="submit" value="Star Chat">
            </div>
        </form>
        <div class="link">Already Have an Account? <a href="login.php">Login now</a></div>
    </section>
   </div> 

   <script scr="javascript/pass-pass-show-hide.js"></script>
   <script src="javascript/signup.js"></script>
</body>
</html>