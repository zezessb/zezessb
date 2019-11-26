<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="11.18/reset.css">
	<style type="text/css">
		body{
			background:url(images/bd-bg.png) repeat-x;
		}
		.nav{
			margin-top: 15px;
			float: right;
		}
		.nav li{
			float: left;
			padding:  0 10px 8px;
			border-left: 1px #d6d6d6 dotted;
		}
		.nav a{
			font:bold 14px Georgia;
			color: #666;
			text-decoration: none;
		}
		.nav p{
			color: #b7b7b7;
			font:11px tahoma;
		}
		.header{
			width: 940px;
			margin: 0 auto;
			padding-top: 37px;
			margin-bottom: 46px;
		}
		.logo{
			margin-left: 15px;
		}
		.nav a:hover{
			color: yellow;
		}
		.banner{
			height: 355px;
			width: 940px;
			margin: 0 auto;
			background:url(images/shadow.png) no-repeat bottom center;
			position: relative;
		}
		.pointerDiv{
			position: absolute;
			top: 310px;
			left: 20px;
		}
		.pointerDiv a{
			display: block;
			width: 17px;
			height: 17px;
			float: left;
			margin-left: 4px;
			background:url(images/pointer.png) no-repeat;
		}
		.pointerDiv .active,
		.pointerDiv a:hover{
			background:url(images/pointer-active.png) no-repeat;
		}
		.content{
			width: 940px;
			margin: 0 auto;
		}
		.content h1{
			text-align: center;
			font:bold 24px Georgia;
			padding: 6px 0 20px 0;
			margin-bottom: 38px;
			background:url(images/line.png) no-repeat bottom center;
		}
		.content .pl,.content .cs,.content .uc,.contact .sc,.contact .co,.contact .nu{
			float: left;
			width: 300px;
		}
		.content .cs,.contact .co{
			margin: 0 20px;
		}
		.content h2{
			color: #11719e;
			font:20px Georgia;
		}
		.content .p1{
			color: #949494;
			font:12px Helvetica;
		}
		.content .imgDiv{
			width: 300px;
			height: 190px;
			margin: 16px 0px 10px 0px;
			padding-top: 12px;
		}
		.imgDiv img{
			border: 8px solid #efeded;
		}
		.content .p2{
			height: 92px;
			color: #3e3e3e;
			font:13px Helvetica;
			word-spacing: 2px;
		}
		.content .lm{
			display: block;
			width: 163px;
			height: 40px;
			text-decoration: none;
			color: blue;
			background:url(images/btn1.png) no-repeat;
			font:12px Helvetica;
			line-height: 40px;
			text-indent: 2em;
			margin-bottom: 35px;
		}
		.contact{
			width: 940px;
			margin: 0 auto;
		}
		.contact .txt{
			width: 276px;
			height: 33px;
			line-height: 33px;
			background:url(images/input.png) no-repeat;
			border:none;
			padding: 0px 10px;
			margin: 0px 0px 16px;
		}
		.contact .tarer{
			width: 276px;
			height: 114px;
			background:url(images/textarea.png) no-repeat;
			border:none;
			overflow: auto;
			resize: none;
			padding: 10px;
			margin: 0;
		}
		.contact .btn{
			width: 163px;
			height: 32px;
			background:url(images/sprite.png) no-repeat 0px -27px;
			padding: 0;
			margin: 11px 0px 23px;
			color: white;
			font:13px Georgia;
			text-align: left;
			text-indent: 1em;
		}
		.contact h2{
			color: #444;
			font:18px Georgia;
			line-height: 18px;
			border-bottom: 1px dashed #d3d3d3;
			padding:  44px 0 0 10px;
			margin-bottom:15px;
		}
		.sc .p1{
			color:#444;
			font:12px Helvetica;
			line-height: 12px;
		}
		.sc .icon{
			font-size: 0;/*去除空格*/
			margin-top: 4px;
		}
		.sc .icon a{
			margin-right: 6px;
		}
		.sc .nl{
			font:18px "Gill Sans MT";
			line-height: 18px;
			padding: 34px 0px 10px;
		}
		.sc .txt{
			margin-top: 15px;
			margin-bottom: 0px;
		}
		.nu p{
			color: #444;
			font:12px Helvetica;
			line-height: 12px;
			height: 58px;
			border-bottom: 1px dashed #d3d3d3;
			margin-bottom: 14px;
			padding-bottom: 9px;
		}
		.nu img{
			float: left;
			margin-right: 8px;
		}
		.footer{
			height: 173px;
			background:#333;
			border-top: 10px solid #4c4c4c;
		}
		.footer a,.footer p{
			color: #999;
			font:11px Helvetica;
			text-decoration:none;
		}
		.footer a:hover{
			color: #cccaca;
			text-decoration: underline;
		}
		.clearfix:before,
		.clearfix:after{
			content: "";
			display: table;
			clear: both;
		}
		.clearfix{
			zoom:1;
		}
		.footer .w{
			width: 940px;
			margin: 0 auto;
			padding-top: 18px;
		}
		.footer .copy{
			float: right;
			display: inline;
		}
	</style>
</head>
<body>
	<div class="header">
		
		<ul class="nav">
			<li>
				<a href="#">HOME</a>
				<p>back to home</p>
			</li>
			<li>
				<a href="#">HOME</a>
				<p>back to home</p>
			</li>
			<li>
				<a href="#">HOME</a>
				<p>back to home</p>
			</li>
			<li>
				<a href="#">HOME</a>
				<p>back to home</p>
			</li>
			<li>
				<a href="#">HOME</a>
				<p>back to home</p>
			</li>
		</ul>
		<div class="logo">
			<a href="#" title="这是logo">
				<img src="images/logo.png" alt="网站logo">
			</a>
		</div>
	</div>
	<div class="banner">
		<img src="images/banner01.png" alt="这是轮播图">
		<div class="pointerDiv">
			<a href="#"></a>
			<a class="active" href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
		</div>
	</div>
	<div class="content clearfix">
		<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h1>
		<div class="pl">
			<h2>Perfect Logic</h2>
			<p class="p1">All you want your website to do.</p>
			<div class="imgDiv">
				<img src="images/pic1.jpg" alt="小男孩">
			</div>
			<p class="p2">
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
			</p>
			<a class="lm" href="#">Learn more</a>
		</div>
		<div class="cs">
			<h2>Perfect Logic</h2>
			<p class="p1">All you want your website to do.</p>
			<div class="imgDiv">
				<img src="images/pic2.jpg" alt="小女孩">
			</div>
			<p class="p2">
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
			</p>
			<a class="lm" href="#">Learn more</a>
		</div>
		<div class="uc">
			<h2>Perfect Logic</h2>
			<p class="p1">All you want your website to do.</p>
			<div class="imgDiv">
				<img src="images/pic3.jpg" alt="球">
			</div>
			<p class="p2">
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
			</p>
			<a class="lm" href="#">Learn more</a>
		</div>
	</div>
	<div class="contact clearfix">
		<div class="sc">
			<h2>Social Connection</h2>
			<p class="p1">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
			</p>
			<div class="icon">
				<a href="#"><img src="images/rss.png"></a>
				<a href="#"><img src="images/fb.png"></a>
				<a href="#"><img src="images/in.png"></a>
				<a href="#"><img src="images/yt.png"></a>
				<a href="#"><img src="images/tw.png"></a>
			</div>
			<h2 class="nl">Newsletter</h2>
			<p class="p1">
				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
			</p>
			<form action="#">
				<input class="txt" type="text" placeholder="your email address">
				<button class="btn">subscribe</button>
			</form>
		</div>
		<div class="co">
			<h2>contact</h2>
			<form>
				<input class="txt" type="text" name="" placeholder="your name">
				<input class="txt" type="text" name="" placeholder="your email address">
				<textarea class="tarer" placeholder="message"></textarea>
				<button class="btn">send it</button>
			</form>
		</div>
		<div class="nu">
			<h2>News Updates</h2>
			<p>
				<img src="images/1.gif">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			</p>
			<p>
				<img src="images/2.gif">
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
			</p>
			<p>
				<img src="images/3.gif">
				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
			</p>
		</div>
		
	</div>
	<div class="footer">
			<div class="w">
				<p class="copy">Copyright 2010. Studio VIVROCKS. All Rights Reserved.</p>
				<p>Site Powered by Wordpress. Design and Developed by VIVROCKS.</p>
				<p><a href="">Home</a><a href="">About</a><a href="">Products</a><a href="">Services</a><a href=""> Contact</a></p>
				<p><a href="">Privacy Policy</a><a href="">Terms of use</a></p>
			</div>
		</div>
</body>
</html>
