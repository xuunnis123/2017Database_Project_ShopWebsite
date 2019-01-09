<html>
<head>
    <meta charset="utf-8">
	<style type="text/css">

	body{
	background-color:white;
				background-image:url(firstBG.png);
				 background-repeat:no-repeat;
				 background-attachment:fixed;
				 background-position:center;
				 background-size:50%;
				 cursor: context-menu;
	}
	h1{
	            position:fixed;
				top:5%;
				left:20%;
				color:black;
				font-family:Helvetica;
				font-size:40px;
				text-align:center;
				border:0px;
				height:45px;
				width:50%;
	}
	m1{
	position:fixed;
	top:5%;
	left:10%;
	}
	m2{
	position:fixed;
top:2%;
	left:3%;
	color:black;
	}
	m3{
	position:fixed;
	top:15%;
	left:90%;
	color:black;
	}
	ul     { display: none;
           list-style: none;
           margin: 0;
           padding: 0;
		   height:100px;
		   width:100px;
		   }
 a{text-decoration:none;color:black}
  .menu:hover  { display: block;cursor:pointer; }
  .menu:hover ul    { display: block;cursor:pointer; }
 .menu{font-size:40px;}
 .li{list-sytle:none;color:black;
 font-family:微軟正黑體; 
		   width:100px;}

	</style>
</head>
<body>
<title>Candy Yen</title>
<h1>Candy Yen's Clothes Shop</h1>
<m1>
     <div class="menu"><img src="menu.png" height="100px" width="100px">
	    <ul >
		     <li><a href="上衣.php ">上衣</a></li>
			 <li><a href="下著.php ">下著</a></li>
		     <li><a href="外套.php ">外套</a></li>
			 <li><a href="內著.php ">內著</a></li>
			 <li><a href="連身.php ">連身</a></li>
			 <li><a href="配件.php ">配件</a></li>
	    </ul>
	</div>
</m1>
<m2><a href="mainStore.php">管理後臺</m2>
<m3><a href="cart.php"><img src="shoppingcar.jpg" width="30px"height="30px"></a></m3>

</body>

</html>