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
                                <h3> Enroll your device</h3>
                            </div>                    
                            <div class="row">
                            	<div class="col-md-2"></div>
                                <div class="col-md-4">Card Number</div>
                                <div class="col-md-6">{{$cardnumber}}</div>
                            </div>
                            <div class="row">
                            	<p></p>
                            	<img class="center-block" src="images/qrcode2.png" alt=""/></div>
                                <p></p>
                            </div>
                            <div class="row">
           						<div class="col-md-4"></div>
                                <div class="col-md-3">
                                  <button type="button" class="btn btn-sm btn-primary">Done</button>
                                  <button type="button" class="btn btn-sm btn-default">Failed</button>
                                </div>
                          
					  </div>
					</div>
				</div>
			</div>
            <div class="col-md-3"></div>
        </div>
	</body>
</html>