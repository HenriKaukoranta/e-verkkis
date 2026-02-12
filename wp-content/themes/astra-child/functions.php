// Source - https://stackoverflow.com/a/59067468
// Posted by JJJJ
// Retrieved 2026-02-12, License - CC BY-SA 4.0

session_start();
<?php if(isset($_SESSION['UserTypeID']) && $_SESSION['UserTypeID']== 1) //check if user is a user and display buttons
    {
    ?>
    <li><a href="user.php">My Account</a></li>
    <li><a href="logout.php">Logout</a></li>

    <?php } elseif(isset($_SESSION['UserTypeID']) && $_SESSION['UserTypeID'] == 2) //check if user is an admin and display buttons
    {
    ?>
    <li><a href="admin.php">My Account</a></li>
    <li><a href="logout.php">Logout</a></li>


<?php  }else{ // if user is not logged in then display these buttons?> 
<li><a href="signin.php">Sign In</a></li>
<li><a href="signup.php">Sign Up</a></li>
<?php } ?>


<?php
	add_filter( 'astra_get_option_footer-copyright-editor', function( $content ) {
    return 'Copyright © [current_year] E-VERKKIS by Henri | Powered by Astra WordPress-teema';
	} ); ?>
<!-- "by Henri" added to the footer -->