<?php
require_once 'db_connect.php';

?>
<!doctype html>
<head>
    <?php include 'includes.php'; ?>
</head>
<body>
	<div id="container">
        <!--Header Start-->
        <?php include'header.php'; ?>
        <!--Header End-->
        
        <div class="clearfix"></div>
        
        <!--Breadcrumbs Start-->
        <section class="breadcrumb-box">
        	<div class="border-thick"></div>
            <div class="breadcrumb-left">
            	<h1>Register at Just Service</h1>
            </div>
            <div class="breadcrumb-right">
            	Home <a href="#">Buttons &amp; Tables</a>
            </div>
            <div class="clearfix"></div>
        </section>
        <!--Breadcrumbs End-->
        <section class="box-wrap box-pad-equal">
        	<div class="border-thick"></div>
                
            <!-- Sidebar Start -->
            <div class="shortcode-left">
                <h2>Site Links</h2>
                <div class="pages-bg">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="categories.php">Categories</a></li>
						<li><a href="about.php">About us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar End -->
                
            <!-- Contact Content Start -->
            <div class="shortcode-right">
    			<div class="content-wrapper">
                    
                    <div class="medium-bg-spacer">&nbsp;</div>
                    <h2>Create a new "Just Service" Account</h2>
                    
                    <div class="medium-bg-spacer">&nbsp;</div>

					<form method="post" action="login.php">
						<p>Please login into the system for your service</p>
						<table>
						<tr>
							<td>User Name:</td>
							<td><input type="text" name="user_nm" id="user_nm"></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="password" name="password" id="password"></td>
						</tr>
						<tr>
						
							<td><input type="submit" value="Login"></td>
							<td><input type="button" value="Reset"></td>
						<tr>
						<?php
						if(isset($_GET['log']))
						{
						echo "<tr>";
						echo "<td colspan=\"2\"><font color=\"red\">".$_GET['log']."</font></td>";
						echo "</tr>";
						}
						?>
							<td colspan="2"><a href="forgot_pass.php">Forgot password?</a></td>
						</tr>
						<tr>
							<td colspan="2">Not a registered user <a href="register.php">Register here..</a></td>
						</tr>
						</tr>
						</table>
					</form>
                </div>
            </div>
            <!-- Contact Content End -->
            
            <div class="clearfix"></div>
        </section>
        
        <div class="clearfix">&nbsp;</div>
         <!--Footer Start-->
    <?php include 'footer.php'; ?>
</body>
</html>