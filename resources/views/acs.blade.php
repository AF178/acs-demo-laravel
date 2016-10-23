<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MoneyDemo - order</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/app.css" rel="stylesheet" />
	</head>
	<body>		
		<form action="enroll">
		<div class="container">      
        	<div class="col-md-3"></div>
            <div class="col-md-6">
				<div class="row">
					<div class="panel panel-default">
						<div class="panel-body">
                        	<div class="row">
            					<div class="col-md-4"><img src="images/mybank_logo.png" alt="MyBank" width="130"></div>
                				<div class="col-md-3"></div>
                				<div class="col-md-5"><img class="center-block" src="images/network_logo.png" alt="PaymentNetwork" width="130"></div>
            				</div>
                        	<div class="row">
                                <h3>Enter your one-time-password</h3>
                            </div>
                            <div class="row">
                              <p>Please submit your 3D-Secure one-time pasword to approve payment. This information will not be shared with the merchant</p>
                            </div>
                          <div class="row">
                           	<div class="col-md-2"></div>
                            <div class="col-md-4">Merchant</div>
                                <div class="col-md-6">{{$merchant}}</div>
                            </div>
                            <div class="row">
                            	<div class="col-md-2"></div>
                                <div class="col-md-4">Amount</div>
                                <div class="col-md-6">{{$amount}}</div>
                            </div>
                             <div class="row">
                            	<div class="col-md-2"></div>
                                <div class="col-md-4">Date</div>
                                <div class="col-md-6">{{$date}}</div>
                            </div>
                            <div class="row">
                            	<div class="col-md-2"></div>
                                <div class="col-md-4">Card</div>
                                <div class="col-md-6">{{$cardnumber}}</div>
                            </div>
                            <div class="row">
                            	<div class="col-md-2"></div>
                                <div class="col-md-4">One-time-password</div>
                                <div class="col-md-6"><input type="text"></div>
                            </div>
                            <div class="row">
                            	<div class="col-md-6"></div>
                                <div class="col-md-6">
                                  <button type="submit" value="approve" class="btn btn-sm btn-primary">Approve</button>
                                  <button type="submit" value="cancel" class="btn btn-sm btn-default">Cancel</button>
                                </div>
                            </div>
					  </div>
					</div>
				</div>
			</div>
            <div class="col-md-3"></div>
        </div>
        </form>
	</body>
</html>