<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login</title>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);



.body{
    position: fixed; 
    overflow-y: scroll;
    width: 100%;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(https://lh5.googleusercontent.com/5IC-p8QyS5SZzBbckCkfmGoXFH0zja_BHyW763L1mFCVyX2B0C38zYnOnjrcNB7ZJgXcqMJsFdqXd2V5xnFIzJnbayufj5pqUZHlo8CVp92YZziLFaGf=w1280);
	background-size: cover;
	-webkit-filter: blur(0px);
	
}



.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	
}

.header div{
	float: left;
	color: rgb(255, 255, 255);
	font-family: 'Exo', sans-serif;
	font-size: 47px;
	font-weight: 400;
}

.header div span{
	color: #f23f20 !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=button]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=button]:hover{
	opacity: 0.8;
}

.login input[type=button]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=button]:focus{
	outline: none;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
</style>

  

</head>

<body oncontextmenu="return false">

  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Parti<span>ceps</span></div>
		</div>
		<br>
		<form name="login">
		<div class="login">
				<input type="text" placeholder="Username" name="userid"><br>
				<input type="password" placeholder="Password" name="pswrd"><br>
				<input type="button" onclick="check(this.form)" value="Login"/>
		</div>



</form>
<script language="javascript">
function check(form)
{
 
 if(form.userid.value == "hihi" && form.pswrd.value == "123")
  {
    window.open('https://www.google.com/')
  }
 else
 {
   alert("Please subscribe to my channel for more coding!")
  }
}
</script>
</body>
</html>