<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>

	<div class="bgimage">
		<div class="menu">
			
			<div class="leftmenu">
				<h4>ATTENDANCE</h4>
			</div>

			<div class="rightmenu">
				<nav>
				<ul>
					<li id="fisrtlist"> HOME </li>
					<li><a href='lgin.php'>Login</a> </li>
					<li><a href='signup.php'>Sigup</li>
					<li><a href='contactus.php'>contact</li>
					<li><a href='aboutus/about.php'> Aboust us</li>
				</ul>
			</nav>			
		</div>

		</div>

		<div class="text">
			<h4 >WEB DEVELOPMENT </h4>
			<h1 id="type">  </h1>
			
		</div>
	</div>
	<script type="text/javascript">
		  var i=0;
		  var text ="WELCOME TO ATTENDANCE";
		  var cont=document.getElementById("type");
		  function typing()
		  {
			if(i<text.length)
			{
		    console.log(cont.innerHTML +=text.charAt(i));
			  i++;
			  setTimeout(typing,1000);
			}
		     else {
			  i=0;
			  cont.innerHTML="";
              setTimeout(typing,1500);
 			  }  
		  }
	     typing();
	</script>
</body>
</html>