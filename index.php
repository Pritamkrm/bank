<!DOCTYPE html>
<html>

<head>
	<title>Basic Banking System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		overflow: hidden;
		font-family: 'Josefin Sans', sans-serif;
	}

	header {
		width: 100%;
		height: 100vh;
		background-image: url("https://cdn.pixabay.com/photo/2019/05/27/14/41/background-4232859_960_720.png");
		background-repeat: no-repeat;
		background-size: 100% 100%;
	}

	.mainHeader {
		width: 100%;
		height: 100px;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.mainHeader nav {
		width: 650px;
		display: flex;
		justify-content: space-around;
		align-items: center;
		padding: 30px;

	}

	.mainHeader nav a {
		text-decoration: none;
		/* color: rgba(0, 0, 0, 0.356); */
		text-transform: uppercase;
		font-weight: bold;
		color: black;
	}

	.mainHeader .active {
		box-sizing: border;
		border: 4px solid rgb(255, 255, 0);
		padding: 15px;
		color: rgb(0, 0, 0);
		padding: 10px 45px;
		text-align: center;
		font-size: 14px;
		color: rgb(0, 255, 255);
		border: none;
		border-radius: 10px;
	}

	.mainHeader button {
		padding: 10px 40px;
		text-align: center;
		font-size: 14px;
		color: #fff;
		border: none;
		background-image: linear-gradient(180deg, #e91e63, #fff500);
		border-radius: 10px;
	}

	.menubtn {
		margin-right: 50px;
	}

	main {
		width: 100%;

		justify-content: space-between;
		align-items: center;
	}

	main .right-sec {
		padding-right: 70px;
	}

	main .left-sec {
		padding-left: 100px;

	}

	.left-sec h2 {
		font-size: 20px;
		text-transform: capitalize;
		font-weight: lighter;
		color: rgb(#003194);
		font-weight: bold;
		margin-top: 100px;
		margin-bottom: 15px;
	}

	.left-sec h1 {
		font-size: 50px;
		text-transform: capitalize;
		font-weight: 700;
		margin: 15px 0px;
		color: rgb(94, 4, 27);
	}

	.left-sec p {
		margin-bottom: 20px;
	}

	.left-sec button {
		padding: 10px 45px;
		text-align: left;
		font-size: 14px;
		color: #fff;
		border: none;
		background-image: linear-gradient(to right, #649bff, #0070fa, #649bff);
		border-radius: 10px;
	}

	.right-sec img {
		width: 600px;
		height: 500px;
		margin-right: 210px;
		margin-top: 30px;
		border-bottom: 5px solid transparent;
		border-radius: 100px;
		margin-left: 20px;
	}

	.left-sec .animate__fadeInLeftBig {
		animation-duration: 3s;
	}

	.left-sec .animate__fadeInRightBig {
		animation-duration: 3s;
	}

	.right-sec .animate__fadeInRightBig {
		animation-duration: 3s;
	}

	.mainHeader h1 {
		font-size: 35px;
		text-transform: capitalize;
		font-weight: 700;
		margin: 15px 0;
	}

	.mainHeader img {
		width: 90px;
		height: 90px;
		margin-left: 30px;
		margin-top: 10px;
		border-radius: 100px;
	}

	.foo p {
		margin-top: 13px;
		color: white;
		background-color: #000;
	}

	.mar {
		top: 20px;
		color: darkgreen;
	}

	.foo {
		background-color: black;
		color: white;
		position: fixed;
		left: 0;
		bottom: 0;
		width: 100%;
		font-family: "Times New Roman", Times, serif;
	}
</style>

<body onload="loader()">
	<header class="Header">
		<div class="mainHeader">

			<img src="SPARK_LOGO.png" alt="logo">
			<br>
			<h1 style="color: rgb(94, 4, 27);">THE SPARK FOUNDATION</h1>
			<nav>
				<a href="index.php" class="active"></a>
				<div class="menubtn">
					<button><a href="bank1.php">View CustomersList</a></button>
				</div>
				<div class="menubtn">
					<button><a href="moneytranc1.php">View Transaction</a></button>
				</div>

			</nav>
			
		</div>
		<main>
			<br>
			<br>
			<marquee class="mar" behavior="" direction="rihgt">
				<h3 style="font-size: 40px; font-weight: bold;">Welcome to The Sparks Foundation Bank</h3>
			</marquee>
			<br>
			<br>
			<br><br>
			<br>
			<br>
			<br><br>
			<section class="left-sec">
				<h1 style="text-align:left;" style="color: rgb(94, 4, 27);">Sparks Banking System </h1>

			</section>



		</main>

	</header>
	<footer class="foo">
		<p style="text-align:center;">&copy 2022. Made by <b>Kajal Kumari</b> <br> The Sparks Foundation</p>
	</footer>
</body>

</html>
