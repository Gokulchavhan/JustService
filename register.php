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

					<form name="myForm" method="post" action="register_validate.php" onsubmit="return validateForm()">
                    <h3>
					<table>
						<tr>
							<td>Name:</td>
							<td><input type="text" name="full_nm" id="full_nm"></td>
						</tr>
						
						<tr>
							<td>Address:</td>
							<td><input type="text" name="address" id="address"></td>
						</tr>
						
						<tr>
							<td>City:</td>
							<td><input type="text" name="city" id="city"></td>
						</tr>
						<tr>
							<td>State:</td>
							<td><select name="state" id="state">
							<script language="javascript">
							var states = new Array("Andaman and Nicobar Islands", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttaranchal", "Uttar Pradesh", "West Bengal");

							for(var hi=0; hi<states.length; hi++)
							document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
							</script>
							</select></td>
						</tr>
						<tr>
							<td>Contact No:</td>
							<td><input type="text" name="contact" id="contact"></td>
						</tr>
						<tr>
							<td>Email:</td>
							<td><input type="text" name="email" id="email"></td>
						</tr>
						<tr>
							<td>Category:</td>
							<!--<td><input type="checkbox" name="service_cat" id="service_cat" value="hello">Hello</td>-->
							<?php
							
							echo "<td>";
							$sql= "SELECT * from categories";
							$result=mysql_query($sql,$con);
							if(!is_null($result))
							{
										while($row=mysql_fetch_array($result))
										{
											$val= $row["category_name"];
											
											echo "<input type='checkbox' name='service_category[]' id='service_category' value='$val'>"." ".$row["category_name"];
											echo "<br/>";
										}
								echo "</td>";
							}
							else
							{
								echo "No categories add new category";
							}
							?>
						</tr>
						<tr>
							<td>Category Not listed? &nbsp&nbsp </td>
							<td><a href="addcat.php">Add a category</a></td>
						</tr>
						<tr>
							<td>Desired Username:</td>
							<td><input type="text" name="user_nm" id="user_nm">
							<?php 
								if(isset($_POST['log']))
								{
								echo "Select different user name";
								}
							?>
							</td>
						</tr>
						
						<tr>
							<td>Desired Passowrd</td>
							<td><input type="password" name="pass" id="pass"></td>
						</tr>
						<tr><td><br/></td></tr>
						<tr>
							<td align="center"><input type="submit" value="Register"></td>
							<td><input type="button" value="Reset"></td>
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