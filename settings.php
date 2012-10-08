<?php 
	require_once 'db_connect.php';
	session_start();
	if($_SESSION['name']=="" || $_SESSION['name']==null)
	{
		header("Location:login_page.php");
	}
?>
<!doctype html>
<html class="no-js" lang="en">
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
            	<h1>Settings</h1>
            </div>
            <div class="breadcrumb-right">
            	Home <a href="settings.php">Settings</a>
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
                        <li><a href="administration.php">Administration</a></li>
                        <li><a href="index.php">Services</a></li>
                        <li><a href="categories.php">Categories</a></li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar End -->
             <!-- Contact Content Start -->
            <div class="shortcode-right">
    			<h2>Settings</h2>
                <div class="grid_3 alpha">
                    Change the settings you require to change.
                </div>
                    
                <div class="clearfix">&nbsp;</div>
                <div class="medium-bg-spacer">&nbsp;</div>
                <div class="testimonial2">
				<?php 
						$qry=mysql_query("SELECT * from service_provider where sp_username='$_SESSION[name]'",$con);
						$row=mysql_fetch_array($qry);
						
				?>
                    <form method="POST" action="settings_validate.php">
						<h3><table>
							<tr>
								<td>Name: </td>
								<td><input type="text" name="full_nm" id="full_nm" value= "<?php echo $row['sp_name']; ?>"</td>
							<tr>
							<tr>
								<td>Address: </td>
								<td><input type="text" name="address" id="address" value= "<?php echo $row['sp_address']; ?>"></td>
							</tr>
							<tr>
								<td>Contact: </td>
								<td><input type="text" name="contact" id="contact" value="<?php echo $row['sp_contact'] ?>"></td>
							</tr>
							<tr>
								<td>City: </td>
								<td><input type="text" name="city" id="city" value="<?php echo $row['sp_city'] ?>"></td>
							</tr>
							<tr>
								<td>State: </td>
								<td><input type="text" name="state" id="state" value="<?php echo $row['sp_state']?>"></td>
							</tr>
							<tr>
								<td>Email: </td>
								<td><input type="text" name="email" id="email" value="<?php echo $row['sp_email']?>"></td>
							</tr>
							
							<tr><td><br/></td></tr>
							<tr>
								<td><input type="submit" value="Save changes"></td>
								<td><input type="button" value="Cancel"></td>
								
							</tr>
						</table>
						</h3>
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