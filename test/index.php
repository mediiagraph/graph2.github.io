<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- MORE THEMES & TEMPLATES FROM FAUCETTT.COM -->
    <!-- MORE THEMES & TEMPLATES FROM BITCOIN.FAUCETTT.COM -->
    <!-- MORE THEMES & TEMPLATES FROM DARKCOIN.FAUCETTT.COM -->
    <!-- MORE THEMES & TEMPLATES FROM DOGECOIN.FAUCETTT.COM -->
    <!-- MORE THEMES & TEMPLATES FROM LITECOIN.FAUCETTT.COM -->
    <title>Antonov</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/flatly/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

    <style type="text/css">
    	body {
    		font-family: 'Roboto', sans-serif;
    		font-size: 1.8 em;
    	}

          a:link {
  -o-transition:color .3s ease-out, background .3s ease-in;
  -ms-transition:color .3s ease-out, background .3s ease-in;
  -moz-transition:color .3s ease-out, background .3s ease-in;
  -webkit-transition:color .3s ease-out, background .3s ease-in;
  transition:color .3s ease-out, background .3s ease-in;
}
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="color: #fff;"><b>Your<span class="text-success">Name</span></b></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#" data-toggle="modal" data-target="#myModal">Refer</a></li>
        <li><a href="#" target="_blank">Link 1</a></li>
        <li><a href="#" target="_blank">Link 2</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="#"><?php echo $data["rewards"]; ?> Satoshi every <?php echo $data["timer"]; ?> minutes.</a></li>
        <li><a href="#">Balance: <b><span class="text-success"><?php echo $data["balance"]; ?> Satoshi </span></b></a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Referral</h4>
      </div>
      <div class="modal-body">
				<blockquote class="text-left small">
					<p>
						Reflink: <code><?php echo $data["reflink"]; ?></code>
					</p>
					<footer>Share this link with your friends and earn <?php echo $data["referral"]; ?>% referral commission</footer>
				</blockquote>
      </div>
    </div>
  </div>
</div>

<div class="container">
	<div class="row">
	<br><br><br><br>
		<div class="col-md-4">
			<div class="row">
			<div class="col-sm-12">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<br>

					<div class="list-group small">

  <a href="#" class="list-group-item">Ref Link 1 - Your description
  </a>
  <a href="#" class="list-group-item">Ref Link 2 - Your description
  </a>
  <a href="#" class="list-group-item">Ref Link 3 - Your description
  </a>
  <a href="#" class="list-group-item">Ref Link 4 - Your description
  </a>
  <a href="#" class="list-group-item">Ref Link 5 - Your description
  </a>
  <a href="#" class="list-group-item">Ref Link 6 - Your description
  </a>
</div>

				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<br>

				</div>
			</div>
		</div>
		<div class="col-md-4">


		<p class="lead">My Faucet Tittle</p>
		<p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>


                <?php if($data["page"] != 'user_page'): ?>
                <?php endif;    if($data["error"]) echo $data["error"]; ?>
                <?php if($data["safety_limits_end_time"]): ?>
                <p class="alert alert-warning">This faucet exceeded it's safety limits and may not payout now!</p>
                <?php endif; ?>
                <?php switch($data["page"]):
                        case "disabled": ?>
                    <p class="alert alert-danger">FAUCET DISABLED. Go to <a href="?p=admin">admin page</a> and fill all required data!</p>
                <?php break; case "paid":
                        echo $data["paid"];
                        if($data["referral"]): ?>
                        Referral commission: <?php echo $data["referral"]; ?>%<br>
                        Reflink: <?php echo $data["reflink"]; ?>

                        <center>

<!-- YOUR ADS HERE! ONLY REPLACE... -->
<!-- YOUR ADS HERE! ONLY REPLACE... -->
<!-- YOUR ADS HERE! ONLY REPLACE... -->

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- faucettt Adaptable -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8308256674173622"
     data-ad-slot="4167994716"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<!-- YOUR ADS HERE! ONLY REPLACE... -->
<!-- YOUR ADS HERE! ONLY REPLACE... -->
<!-- YOUR ADS HERE! ONLY REPLACE... -->

                        </center>

                        <?php endif;
                      break; case "eligible": ?>
                    <form method="POST" class="form-horizontal" role="form">
                        <div class="form-group">
                            <?php if(!$data["captcha_valid"]): ?>
                            <p class="alert alert-danger">Invalid captcha code!</p>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" class="form-control" style="position: absolute; position: fixed; left: -99999px; top: -99999px; opacity: 0; width: 1px; height: 1px">
                            <input type="checkbox" name="honeypot" style="position: absolute; position: fixed; left: -99999px; top: -99999px; opacity: 0; width: 1px; height: 1px">
                          
                            <div class="col-sm-12" style="min-width: 270px;">
                            <input type="text" name="<?php echo $data["address_input_name"]; ?>" class="form-control input-sm" value="<?php echo $data["address"]; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                        <center>
                            <?php echo $data["captcha"]; ?>
                            <br>

<!-- YOUR ADS HERE! ONLY REPLACE... -->
<!-- YOUR ADS HERE! ONLY REPLACE... -->
<!-- YOUR ADS HERE! ONLY REPLACE... -->

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- faucettt Adaptable -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8308256674173622"
     data-ad-slot="4167994716"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<!-- YOUR ADS HERE! ONLY REPLACE... -->
<!-- YOUR ADS HERE! ONLY REPLACE... -->
<!-- YOUR ADS HERE! ONLY REPLACE... -->

                        </center>
                            <div class="text-center">
                                <?php
                                if (count($data['captcha_info']['available']) > 1) {
                                    foreach ($data['captcha_info']['available'] as $c) {
                                        if ($c == $data['captcha_info']['selected']) {
                                            echo '<b>' .$c. '</b> ';
                                        } else {
                                            echo '<a href="?cc='.$c.'">'.$c.'</a> ';
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-4">
                                <input type="submit" class="btn btn-primary btn-sm" value="Get reward!">
                            </div>
                        </div>
                    </form>
                <?php if ($data["reflink"]): ?>
                <?php endif; ?>
                <?php break; case "visit_later": ?>
                    <p class="alert alert-info">You have to wait <?php echo $data["time_left"]; ?></p>
                    <center>

<!-- YOUR ADS HERE! ONLY REPLACE... -->
<!-- YOUR ADS HERE! ONLY REPLACE... -->
<!-- YOUR ADS HERE! ONLY REPLACE... -->

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- faucettt Adaptable -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8308256674173622"
     data-ad-slot="4167994716"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<!-- YOUR ADS HERE! ONLY REPLACE... -->
<!-- YOUR ADS HERE! ONLY REPLACE... -->
<!-- YOUR ADS HERE! ONLY REPLACE... -->

                    </center>
                <?php break; case "user_page": ?>
                <?php echo $data["user_page"]["html"]; ?>
                <?php break; endswitch; ?>
		</div>
		<div class="col-md-4">
			<center>

<!-- YOUR ADS HERE! ONLY REPLACE... -->
<!-- YOUR ADS HERE! ONLY REPLACE... -->
<!-- YOUR ADS HERE! ONLY REPLACE... -->

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- rareBTC 300x600 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:600px"
     data-ad-client="ca-pub-8308256674173622"
     data-ad-slot="2855266716"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<!-- YOUR ADS HERE! ONLY REPLACE... -->
<!-- YOUR ADS HERE! ONLY REPLACE... -->
<!-- YOUR ADS HERE! ONLY REPLACE... -->

			</center>
		</div>
	</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <?php if($data['button_timer']): ?>
    <script type="text/javascript" src="libs/button-timer.js"></script>
    <script> startTimer(<?php echo $data['button_timer']; ?>); </script>
    <?php endif; ?>
    <?php if($data['block_adblock'] == 'on'): ?>
    <script type="text/javascript" src="libs/advertisement.js"></script>
    <script type="text/javascript" src="libs/check.js"></script>
    <script type="text/javascript" src="libs/mmc.js"></script>
    <?php endif; ?>
  </body>
</html>