<?php
	require_once 'db_connect.php';
?>

<!doctype html>
<head>
<?php include 'includes.php'; ?>
	<script type="text/javascript">
function validateForm()
{
var x=document.forms["myForm"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>
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
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="buttons-tables.html">Buttons &amp; Tables</a></li>
                        <li><a href="list-blockquotes.html">List &amp; Blockquotes</a></li>
                        <li><a href="images-dropcaps.html">Images &amp; Dropcaps</a></li>
                        <li><a href="tabs-toggles.html">Tabs &amp; Toggles</a></li>
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
					<?php 
										
						$usernm=$_REQUEST['user_nm'];
						$result=mysql_query("SELECT * FROM service_provider WHERE sp_username='$usernm'", $con);
						if(mysql_fetch_array($result) != null)
						{
							echo "<h2><font color=\"red\"> Registration failed please select different username</font></h2>";
							echo "Please try again <a href=\"register.php\">Click here</a>";
						}
						else
						{
							$passwd=md5($_REQUEST['pass']);
							$sql="INSERT INTO service_provider(sp_name ,sp_address ,sp_contact ,sp_city ,sp_state ,sp_email ,sp_username ,sp_password ) VALUES('$_REQUEST[full_nm]','$_REQUEST[address]','$_REQUEST[contact]','$_REQUEST[city]','$_REQUEST[state]','$_REQUEST[email]','$_REQUEST[user_nm]','$passwd')";
							if(!mysql_query($sql,$con))
							{
								die("Cannot register".mysql_error());
							}
							$ser_id=mysql_query("SELECT * from service_provider WHERE sp_username = '$_REQUEST[user_nm]'", $con);
							$user_row=mysql_fetch_array($ser_id);
							//echo $user_row["sp_id"];
							foreach($_REQUEST['service_category'] as $value)
							{
								$foo=mysql_query("SELECT * from categories WHERE category_name='$value'",$con);
								while($row=mysql_fetch_array($foo))
								{
									global $user_row;
									//echo $row["category_id"];
									$qry=mysql_query("INSERT INTO sp_category VALUES('$user_row[sp_id]','$row[category_id]','$value')",$con);
									
								}
							}
							echo "<h2><font color=\"green\">Registration Successful</font></h2>";
							echo "Please login to Continue <a href=\"index.php\">Click here</a>";
						}
					?>
				
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