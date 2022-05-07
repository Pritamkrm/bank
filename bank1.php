<!DOCTYPE html>
<html>

<head>
	<title></title>
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
		font-family: 'Josefin Sans', sans-serif;
	}

	/* .mainHeader{
	background-image: linear-gradient(315deg, #f5f5f5 0%, #117a8b 74%);
} */

	.cl {
		background-color: rgb(220, 220, 220);
	}

	.hd {
		background-color: rgb(250, 219, 215);
	}

	body {
		background-color: #8d8c87;
	}

	.header {
		width: 100%;
		height: 100vh;
		/* background-image: url("background3.PNG"); */
		/* background-repeat: no-repeat; */
		background-size: 100% 100%;
		/* background-color: #dbb8cc; */
		/* background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%); */
		/*background-image: linear-gradient(315deg, #f5f5f5 0%, #117a8b 74%);*/
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

	.mainHeader .active {
		box-sizing: border;
		border: 4px solid rgba(0, 0, 0, 0.295);
		padding: 15px;
		color: rgb(116, 7, 7);
		padding: 10px 45px;
		text-align: center;
		font-size: 14px;
		color: #fff;
		border: none;
		background-color: #bbf0f3;


		background-image: linear-gradient(315deg, #f5f5f5 0%, #117a8b 74%);
		border-radius: 10px;
	}

	.mainHeader nav a {
		text-decoration: none;
		color: black;
		text-transform: uppercase;
		background-image: linear-gradient(315deg, #f5f5f5 0%, #117a8b 74%);
		padding: 7px 20px;
		border-radius: 10px;
	}

	.mainHeader button {
		padding: 10px 45px;
		text-align: center;
		font-size: 14px;
		color: #fff;
		border: none;
		background-image: linear-gradient(to right, #13cf2c, #13ec1e, #0cf318);
		border-radius: 15px;
	}
</style>

<body>

	<div class="header">
		<div class="mainHeader">
			<nav class="">

				<a href="index.php">Home</a>
				<a href="bank1.php" class="active">View Customers list</a>
				<a href="moneytranc1.php">View Transactions</a>

			</nav>
			<div class="menubtn">

				<button>Help?</button>

			</div>
		</div>

		<div class="container">
			<h2 class="py-3">Customers List</h2>
			<table class="table table-hover">
				<thead>
					<tr class="hd">
						<th>Account Number</th>
						<th>Name</th>
						<th>Email</th>
						<th>Balance</th>
					</tr>
				</thead>
				<tbody>
					<tr class="cl">
						<td>GKSB1</td>
						<td>Nitish</td>
						<td>nitish@gmail.com</td>
						<td>18500000</td>
					</tr>
					<tr class="cl">
						<td>GKSB2</td>
						<td>Gautam</td>
						<td>gautam@gmail.com</td>
						<td>160656000</td>
					</tr>
					<tr class="cl">
						<td>GKSB3</td>
						<td>Prince</td>
						<td>prince@gmail.com</td>
						<td>12500000</td>
					</tr>
					<tr class="cl">
						<td>GKSB4</td>
						<td>Raj</td>
						<td>raj@gmail.com</td>
						<td>34000300</td>
					</tr>
					<tr class="cl">
						<td>GKSB5</td>
						<td>Prinshu</td>
						<td>prinshu@gmail.com</td>
						<td>607023000</td>
					</tr>
					<tr class="cl">
						<td>GKSB6</td>
						<td>Adarsh</td>
						<td>adarsh@gmail.com</td>
						<td>45090400</td>
					</tr>
					<tr class="cl">
						<td>GKSB7</td>
						<td>Tarakant</td>
						<td>tarakant@gmail.com</td>
						<td>98008800</td>
					</tr>
					<tr class="cl">
						<td>GKSB8</td>
						<td>Aniket</td>
						<td>aniket@gmail.com</td>
						<td>11063700</td>
					</tr>
					<tr class="cl">
						<td>GKSB9</td>
						<td>Sweety</td>
						<td>sweety54@gmail.com</td>
						<td>10034500</td>
					</tr>
					<tr class="cl">
						<td>GKSB10</td>
						<td>Priyanka</td>
						<td>priyanka23@gmail.com</td>
						<td>20003400</td>
					</tr>
					<tr class="cl">
						<td>GKSB11</td>
						<td>Rohit</td>
						<td>rohit@gmail.com</td>
						<td>30007800</td>
					</tr>
					<tr class="cl">
						<td>GKSB12</td>
						<td>Roshan</td>
						<td>roshan@gmail.com</td>
						<td>50000800</td>
					</tr>
					<tr class="cl">
						<td>GKSB13</td>
						<td>Chandan</td>
						<td>chandan@gmail.com</td>
						<td>98000800</td>
					</tr>
					<tr class="cl">
						<td>GKSB14</td>
						<td>Rishikesh</td>
						<td>rishikesh@gmail.com</td>
						<td>30160000</td>

					</tr>
					<tr class="cl">
						<td>GKSB15</td>
						<td>Shubham</td>
						<td>shubham@gmail.com</td>
						<td>98504000</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

</body>

</html>