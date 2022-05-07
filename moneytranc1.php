 <?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
 <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
<style>
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;

	font-family: 'Josefin Sans', sans-serif;
}
.table-light, .table-light>td, .table-light>th {
    background-color: #146585;
}
.table-info, .table-info>td, .table-info>th {
    background-color: #4996a1;
}
.header{
	width: 100%;
	height: 100vh;
	background-image: url("background2.png");
	background-repeat: no-repeat;
	background-size: 100% 100%;
    background-color: #b8c6db;
    background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%);
	}
	.mainHeader{
	width: 100%;
	height: 100px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}
	.mainHeader nav{
	width: 650px;
	display: flex;
	justify-content: space-around;
	align-items: center;
	padding: 30px;
}
.mainHeader .active{
box-sizing: border;
border: 4px solid #000;
padding: 15px;
color: #000;
padding: 10px 45px;
text-align: center;
font-size: 14px;
color: #fff;
border: none;
background-color: #bbf0f3;
/*background-image: linear-gradient(315deg, #bbf0f3 0%, #f6d285 74%);*/
background-image: linear-gradient(315deg, #f5f5f5 0%, #117a8b 74%);
border-radius: 10px;}
.mainHeader nav a{
	text-decoration: none;
	color: black;
	text-transform: uppercase;
}
.mainHeader button{
	padding: 10px 45px;
	text-align: center;
	font-size: 14px;
	color: #fff;
	border: none;

	background-image: linear-gradient(to right, #13cf2c, #13ec1e, #0cf318);
    border-radius: 10px;
}
</style>
<body>
<div class="header">
	<div class="mainHeader">
  		<nav>
  			<a href="index.php">Home</a>
			<a href="bank1.php" >View All Customers</a>
			<a href="moneytranc1.php" class="active">Money Transaction</a>
		</nav>
	</div>
	<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Accounts | Basic Banking System</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="assets/css/customer.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="my-info text-center">
        <h2>Deatils</h2>
        <h4>Bank Balance<span id="myAccountBalance">100000</span></h4>

        <button class="btn btn-info my-3" data-toggle="modal" data-target="#sendMoney">Send Money</button>
        <a class="btn btn-info my-3" href="/banking/moneytranc.php" data-toggle="modal" data-target="#transactionHistory">See All Transaction</a>
    </div>

    <!-- Modal send money -->
    <div class="modal fade" id="sendMoney" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Send Money</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="CODE.php" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" id="enterName" class="form-control" placeholder="Recipient's username"
                                aria-label="Recipient's username" aria-describedby="basic-addon2" name ="firstname" >
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Happy Banking</span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">₹ </span>
                            </div>
                            <input type="text" id="enterAmount" class="form-control" placeholder=" Enter Amount"
                                aria-label="Amount (to the nearest dollar)" name ="amount">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Close</button>
                        <input type="submit" value="Send Money" class="btn btn-success"/>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>

    <!-- Modal transaction History-->
    
    <div class="modal fade" id="transactionHistory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Transaction History</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ol id="transaction-history-body">
                       <?php
                       include 'database.php';
                       $check=mysqli_query($conn,"select username, amount from transaction");
                       if (mysqli_num_rows($check)>0)
                       {
                       while($row = $check->fetch_assoc()) {
                           ?>
                           <table class="table table-hover table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">User name</th>
                        <th scope="col">Bank Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light">
                        <td><?=$row['username'];?></td>
                        <td><?=$row['amount'];?></td>
                   </tr>
                       </table>
                       <?php
                       }
                       }
                       ?>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- table  -->
    
    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">Account Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Bank Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light">
                        <td scope="row">1</td>
                        <td>Nitish</td>
                        <td>nitish@gmail.com</td>
                        <td>
                            <p id=" NitishBankBalance">18500000</p>
                        </td>
                    </tr>
                     <tr class="table-info">
                        <td scope="row">2</td>
                        <td>Gautam</td>
                        <td>gautam@gmail.com</td>
                        <td>
                            <p id="GautamBankBalance">160656000</p>
                        </td>
                    </tr>
                    <tr class="table-light">
                        <td scope="row">3</td>
                        <td>Prince</td>
		                <td>prince@gmail.com</td>
        
                        <td>
                            <p id="PrinceBankBalance">12500000</p>
                        </td>
                    </tr>
                    <tr class="table-info">
                        <td scope="row">4</td>
                        <td>Raj</td>
                        <td>raj@gmail.com</td>
                        <td>
                            <p id="RajBankBalance">34000300</p>
                        </td>
                    </tr>
                    <tr class="table-light">
                        <td scope="row">5</td>
                        <td>Prinshu</td>
		                <td>prinshu@gmail.com</td>
                        <td>
                            <p id="PrinshuBankBalance">607023000</p>
                        </td>
                    </tr>
                    <tr class="table-info">
                        <td scope="row">6</td>
                        <td>Adarsh</td>
		                <td>adarsh@gmail.com</td>
                        <td>
                            <p id="AdarshBankBalance">45090400</p>
                        </td>
                    </tr>
                    <tr class="table-light">
                        <td>7</td>
                        <td>Tarakant</td>
		                <td>tarakant@gmail.com</td>
                        <td>
                            <p id="TarakantBankBalance">98008800</p>
                        </td>
                    </tr>
                    <tr class="table-info">
                        <td scope="row">8</td>
                        <td>Aniket</td>
		                <td>aniket@gmail.com</td>
                        <td>
                            <p id="AniketBankBalance">11063700</p>
                        </td>
                    </tr>
                    <tr class="table-light">
                        <td>9</td>
                        <td>Sweety</td>
		                <td>sweety54@gmail.com</td>
                        <td>
                            <p id="SwettyBankBalance">10034500</p>
                        </td>
                        </tr>
                        <tr class="table-info">
                            <td>10</td>
		                    <td>Priyanka</td>
	                     	<td>priyanka23@gmail.com</td>
                            <td>
                                <p id="PriyankaBankBalance">20003400</p>
                            </td>
                        </tr>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>

    <script src="jsbank.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> 
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script> 
     <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>

</body>
</html>
</div>
</body>
</html>