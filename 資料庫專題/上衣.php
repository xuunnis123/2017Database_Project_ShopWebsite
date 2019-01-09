<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>上衣</title>

<style type="text/css">
.storeName{background-color:pink;
           height:80px;
		   text-align:center;
		   font-family:cursive;
		   font-size:64px;
		   color:white;}
		   
.item {float:left;
       width:300px;
	   cursor:pointer;
	   font-family:微軟正黑體;
	   font-size:12px;}

a{text-decoration:none;color:#FF4500;}
.cat{  color:#FF4500;
       left:40px;top:20%;
       position:relative;
       font-size:15px; 
	   text-align: center;
	   height: 28%;
	   font-family:微軟正黑體;}
a:visited {color:#FF4500;}
.catogory{float:left;  
          height:500px;
          width:50px;}
.cloth{left:200px;top:80px;position:relative;}
.cloth table{width:70%;text-align:center;
background-color:#FFC0CB;}
.topic{background-color:#D87093;}
  ul     { display: none;
           list-style: none;
           margin: 0;
           padding: 0;
		   }
 
  .cat:hover ul    { display: block;cursor:pointer; }
 
 .li{list-sytle:none;color:#FF4500;}
     .catogory ul li       { border-top: 2px  ;
		                   text-align: center;
						   color:#FF4500;
						    					   }
        hr {
	border:0; height:1px; background-color:#ff80aa; 
	color:#ff80aa;
}
.manage{position:fixed;top:20%;left:90%;color:black;}
.home{position:fixed;top:4%;left:92%;}
</style>

<script src="jquery-tablepage.js" src="jquery.js" type="text/javascript">
$("#table_source").tablepage($("#table_page"), 10);
function over(imgObj,picname) { imgObj.src=picname; } 
function out(imgObj,picname) { imgObj.src=picname; } 
</script>
</head>

<body>
<div class="storeName">Candy Yen<3</div>
<div class="catogory">
<div class="cat"><a href="上衣.php ">上衣</a><hr>
	    <ul>
	        <li><a href="上衣-長袖.php ">長袖</a></li>
			<li><a href="上衣-短袖.php ">短袖</a></li>
		    <li><a href="上衣-無袖.php ">無袖</a></li>
	    
	    </ul>
	</div>
	
	<div class="cat"><a href="下著.php ">下著</a><hr>
	<ul>                           
	        <li><a href="下著-裙子.php ">裙子</a></li>
			<li><a href="下著-長褲.php ">長褲</a></li>
		    <li><a href="下著-短褲.php ">短褲</a></li>
	    
	    </ul>
	
	</div>
	<div class="cat"><a href="外套.php ">外套</a><hr>
	
	    <ul>
        	 <li><a href="外套-大衣.php ">大衣</a></li>
		     <li><a href="外套-毛皮.php ">毛皮</a></li>
			 <li><a href="外套-針織.php ">針織</a></li>
	    </ul>
	</div >
	<div class="cat"><a href="內著.php ">內著</a><hr>
	    <ul>
		    <li><a href="內著-內衣.php ">內衣</a></li>
			<li><a href="內著-內褲.php ">內褲</a></li>
	 
	
	    </ul>
	</div>

	<div class="cat"><a href="連身.php ">連身</a><hr>
	   
	</div>
	<div class="cat"><a href="配件.php ">配件</a><hr>
	    <ul>
		    <li><a href="配件-帽子.php ">帽子</a></li>
			<li><a href="配件-襪子.php ">襪子</a></li>
		    <li><a href="配件-飾品.php ">飾品</a></li>
	    </ul>
	</div>
</div>
<div class="manage"><a href="mainTops.php">衣服管理後台</a></div>
<div class="home"><a href ="first.php"><img width='60px'height='60px' src="home.png"></a></div>
<div class="cloth"><?php include "上衣1.php";?><span id='table_page'></span></div>

</body>
</html>