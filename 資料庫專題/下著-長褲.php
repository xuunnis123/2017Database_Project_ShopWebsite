<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>下著</title>

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

a{text-decoration:none;color:#ff80aa;}
.cat{  color:#ff80aa;
       left:40px;top:20%;
       position:relative;
       font-size:15px; 
	   text-align: center;
	   height: 28%;
	   font-family:微軟正黑體;}
a:visited {color:#ff80aa;}
.catogory{float:left;  
          height:500px;
          width:50px;}
.cloth{ top:80px;left:10%;position: relative;  }
.priceOrignal{color:grey;
              text-decoration:line-through;
			  width:60px;
			  float:left;}
			  
.priceNow{color:red;}
  ul     { display: none;
           list-style: none;
           margin: 0;
           padding: 0;
		   }
 
  .cat:hover ul    { display: block;cursor:pointer; }
 
 .li{list-sytle:none;}
     .catogory ul li       { border-top: 2px  ;
		                   text-align: center;
						   color:#ff80aa;
						    					   }
        hr {
	border:0; height:1px; background-color:#ff80aa; 
	color:#ff80aa;
}
</style>

<script type="text/javascript">
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
<div class="cloth">
<div class="item" id="item1">
<p><img src= "配色格紋修身顯瘦長褲.jpg" height="300px"
onmouseover="over(this, '配色格紋修身顯瘦長褲-2.jpg')" 
onmouseout="out(this, '配色格紋修身顯瘦長褲.jpg')"></p>
  <div class="store">MO-BO</div>
  <div class="name">
  <a href="https://www.mo-bo.com.tw/PDContent.asp?yano=03020321&yacolor=Z23">配色格紋修身顯瘦長褲</a>
  </div>
  <div class="price">
    <div class='priceOrignal'>NT$899</div><div class='priceNow'>NT$809</div>
  </div>
</div>



<div class="item" id="item1">
<p><img src= "自在感格紋修身長褲.jpg" height="300px"
onmouseover="over(this, '自在感格紋修身長褲-2.jpg')" 
onmouseout="out(this, '自在感格紋修身長褲.jpg')"></p>
  <div class="store">Pazzo</div>
  <div class="name">
  <a href="http://www.pazzo.com.tw/Detail/P401017601904?brand=1&menu=1%7CBOTTOMS">自在感格紋修身長褲</a>
  </div> 
  <div class="price">
    <div class='priceOrignal' style="text-decoration:none;">NT$590</div>
  </div>
</div>


<div class="item" id="item1">
<p><img src= "挺感彈性直筒牛仔褲.png" height="300px"
onmouseover="over(this, '挺感彈性直筒牛仔褲-2.png')" 
onmouseout="out(this, '挺感彈性直筒牛仔褲.png')"></p>
  <div class="store">MoonCat</div>
  <div class="name">
  <a href="https://www.stylemooncat.com.tw/PDContent.asp?yano=32609-dn">挺感彈性直筒牛仔褲</a>
  </div> 
  <div class="price">
    <div class='priceOrignal' style="text-decoration:none;">NT$550</div>
  </div>
</div></div>

</body>
</html>