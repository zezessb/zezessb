<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>京东</title>
	<link rel="stylesheet" type="text/css" href="11.18/reset.css">
	<style type="text/css">
		.jdm{
			width: 100%;
			margin: 0 auto;
		}
		.jdm_search{
			width: 100%;
			height: 40px;
			background-color: #c91523;
			position: fixed;
			top: 0;
			left: 0;
		}
		.jdm_search input{
			width: 100%;
			height: 30px;
			border-radius: 15px;
			padding-left: 25px;
			box-sizing: border-box;
		}
		.jdm_search .search{
			position: relative;
			width: 100%;
			height: 100%;
			padding-left: 80px;
			padding-right: 50px;
			box-sizing: border-box;
			margin: 5px 0;
		}
		.jdm_search .jdm_login {
			display: block;
			position: absolute;
			right: 10px;
			top: 8px;
			font-size: 16px;
			color: #fff;
			text-decoration: none;
		}
		.jdm_search .search_logo{
			display: block;
			position: absolute;
			background-image: url(images/jd.png);
			top: 5px;
			left: 5px;
			width: 75px;
			height: 30px;
		}
		.content{
			width: 100%;
		}
		.slide{
			padding-top: 40px;
		}
		.slide img{
			width: 100%;
		}
		.nav{
			width: 100%;
		}
		.nav li{
			margin-top: 10px;
			width: 25%;
			float: left;
		}
		.nav li a{
			display: block;
			width: 100%;
			text-align: center;
			padding-bottom: 10px;
			text-decoration: none;
		}
		.nav strong{
			display: block;
			color: skyblue;
			margin: 10px 0;
			font-size: 20px;
		}
		.nav img{
			width: 40px;
			height: 40px;
		}
		.seckill{
			width: 100%;
			margin-top: 5px;
			box-sizing: border-box;
			background-color: #fff;
		}
		.seckill_title{
			width: 100%;
			height: 40px;
			position: relative;
		}
		.seckill_title h4{
			float: left;
			margin-top: 10px;
			font-size:20px;
			color: #ca1327;
			padding-left: 25px;
		}
		.seckill_title .seckill_time{
			margin-top: 12px;
			margin-left: 10px;
			float: left;
		}
		.seckill .more{
			float: right;
			margin-top: 5px;
			padding-right: 5px;
		}
		.seckill .more a{
			text-decoration: none;
			color: block;
		}
		.seckill_content{
			width: 100%;
			box-sizing: border-box;
		}
		.seckill_content ul{
			width: 100%;
			overflow: hidden;
		}
		.seckill_content li{
			float: left;
			width: 30%;
			padding: 0 10px;
		}
		.seckill_content li a{
			display: block;
			position: relative;
		}
		.seckill_content img{
			padding-bottom: 20px;
			width: 100%;
		}
		.seckill_content li .hot{
			display: block;
			position: absolute;
			top: 50%;
			right: 0;
			background-color: #fdb60a;
			color: #fff;
			border-radius: 13px;
			padding: 3px 5px;
		}
		.seckill_content li .price{
			text-align: center;
		}
		.seckill_content li .new{
			display: block;
		}
		.seckill_content li .old{
			display: block;
			color: #666;
			text-decoration: line-through;
		}
		.seckill_content a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="jdm">
		<header class="jdm_search">
			<a href="#" class="search_logo"></a>
			<div class="search">
				<input type="text" placeholder="100万超级爆品疯抢">
			</div>
			<a href="#" class="jdm_login">登录</a>
		</header>
	</div>
	<main class="content">
		<div class="slide">
			<ul>
				<li>
					<img src="images/advert_6.jpg" alt="轮播">
				</li>
			</ul>
		</div>
		<!-- 小导航栏 -->
		<div class="nav">
			<ul>
				<li>
					<a href="">
						<img src="images/nav_1.png">
						<strong>京东超市</strong>
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/nav_2.png">
						<strong>全球购</strong>
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/nav_3.png">
						<strong>充值中心</strong>
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/nav_4.png">
						<strong>服装城</strong>
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/nav_5.png">
						<strong>理财</strong>
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/nav_6.png">
						<strong>领劵</strong>
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/nav_7.png">
						<strong>物流查询</strong>
					</a>
				</li>
				<li>
					<a href="">
						<img src="images/nav_8.png">
						<strong>我的关注</strong>
					</a>
				</li>
			</ul>
		</div>
		<!-- 掌上秒杀 -->
		<div class="seckill">
			<div class="seckill_title">
				<h4>掌上秒杀</h4>
				<div class="seckill_time">
				<span>0</span>
				<span>0</span>
				<span>:</span>
				<span>0</span>
				<span>0</span>
				<span>:</span>
				<span>0</span>
				<span>0</span>
				<span>:</span>
				</div>
				<div class="more">
					<a href="#">更多秒杀</a>
				</div>
			</div>
			<div class="seckill_content">
				<ul>
					<li>
						<a href="#">
							<span class="hot">热卖</span>
							<img src="images/seckill_1.jpg">
							<div class="price">
								<span class="new">￥79</span>
								<span class="old">￥138</span>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="hot">超值</span>
							<img src="images/seckill_2.jpg">
							<div class="price">
								<span class="new">￥169</span>
								<span class="old">￥238</span>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="hot">推荐</span>
							<img src="images/seckill_3.jpg">
							<div class="price">
								<span class="new">￥179</span>
								<span class="old">￥198</span>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</main>
</body>
</html>
