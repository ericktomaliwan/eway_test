<?php
	$PaymentKind = $_GET["product"]; 
	$CreditError = $_GET['MainError'];
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		$txtFirstName = $_POST['first_name'];
		$txtLastName = $_POST['last_name'];
		$txtEmail = $_POST['webtolead_email1'];
		$txtAddress = $_POST['primary_address_street'];
		$txtPostcode .= $_POST['primary_address_postalcode'];
		$txtPostcode .= $_POST['primary_address_country'];
		$txtPostcode .= $_POST['primary_address_state'];
	}
	else
	{
		$txtFirstName = $_GET['first_name'];
		$txtLastName = $_GET['last_name'];
		$txtEmail = $_GET['webtolead_email1'];
		$txtAddress = $_GET['txtAddress'];
		$txtPostcode .= $_GET['address'];
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Payment Form - DEFAULTCRC</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="http://www.DEFAULT.com.au/css/multi.php?style.css,infinite.css,calendar-orange.css&amp;v=e44fc6616158fd9725bae31c0c7221b0" />
    <script type="text/javascript" src="http://www.DEFAULT.com.au/js/multi.php?jquery-1.4.1.min.js,swfobject.js,common.js,lightbox.js&amp;v=1d5287d6773ad0e65fdf313d251070ee"></script>
    <!--[if lt IE 8]><link href="http://www.DEFAULT.com.au/css/ie7.css?fb3662-30f-493a6f9f0ba80" rel="stylesheet" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 8]><link href="http://www.DEFAULT.com.au/css/ie8.css?fb3668-2f-493a6f9f0ba80" rel="stylesheet" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 6]>
        <script type="text/javascript">var IE6UPDATE_OPTIONS={icons_path: "http://www.DEFAULT.com.au/js/ie6/"};</script>
        <script type="text/javascript" src="http://www.DEFAULT.com.au/js/ie6/ie6update.js"></script>
    <![endif]-->
    <link rel="alternate" type="application/rss+xml" title="DEFAULT CRC News" href="http://www.DEFAULT.com.au/news.rss" />
</head>
<body class="withsubnav subpage"><script type="text/javascript">document.body.className+=' js'</script>
    <div id="wrap1"><div id="wrap2">
        <div id="header">
            <a href="#content" id="skip-link">Skip to content &raquo;</a>
            <h1 id="logo"><a href="http://www.DEFAULT.com.au/"><img src="http://www.DEFAULT.com.au/images/logo.png" alt="DEFAULTCRC" width="198" height="128" /></a></h1>
            <p id="tagline">Science supporting next generation decision making</p>
                                    <form id="search" action="http://www.DEFAULT.com.au/search/" method="get"><div>
                <a id="homelink" href="http://www.DEFAULT.com.au/">Home</a>
                Site Search
                <input type="text" name="s" value="" />
                <input type="submit" value="go" />
            </div></form>
            <ul id="nav">
				<li class="nav-1"><a class="nav-1" href="http://www.DEFAULT.com.au/products/">Products</a>
            <div class="rollover">
            <h2><a href="http://www.DEFAULT.com.au/products/">Products</a></h2>
            <ul class="nav-2"
                            ><li class="nav-2">
                    <h3><a href="http://www.DEFAULT.com.au/products/DEFAULT-source/">DEFAULT Source</a></h3>
                                    <ul class="nav-3">
                                            <li><a href="http://www.DEFAULT.com.au/products/DEFAULT-source/for-catchments/">for Catchments</a></li>
                                            <li><a href="http://www.DEFAULT.com.au/products/DEFAULT-source/for-rivers/">for Rivers</a></li>
                                            <li><a href="http://www.DEFAULT.com.au/products/DEFAULT-source/for-urban/">for Urban</a></li>
                                        </ul>
                                </li
                            ><li class="nav-2">
                    <h3><a href="http://www.DEFAULT.com.au/products/DEFAULT-toolkit/">DEFAULT Toolkit</a></h3>
                                    <ul class="nav-3">
                                            <li><a href="http://www.DEFAULT.com.au/products/DEFAULT-toolkit/catchment-tools/">Catchment Tools</a></li>
                                            <li><a href="http://www.DEFAULT.com.au/products/DEFAULT-toolkit/rivers-tools/">Rivers Tools</a></li>
                                            <li><a href="http://www.DEFAULT.com.au/products/DEFAULT-toolkit/urban-tools/">Urban Tools</a></li>
                                            <li><a href="http://www.DEFAULT.com.au/products/DEFAULT-toolkit/eco-tools/">Eco Tools</a></li>
                                        </ul>
                                </li
                            ><li class="nav-2">
                    <h3><a href="http://www.DEFAULT.com.au/products/support/">Support</a></h3>
                                </li>
							<li class="nav-2">
								<h3><a href="http://www.DEFAULT.com.au/products/training/">Training</a></h3>
                            </li>
						</ul>
        </div>
        </li>
		<li class="nav-1"><a class="nav-1" href="http://www.DEFAULT.com.au/case-studies/">Case studies</a>
            <div class="rollover">
				<h2><a href="http://www.DEFAULT.com.au/case-studies/">Case studies</a></h2>
				<ul class="nav-2"
								><li class="nav-2">
						<h3><a href="http://www.DEFAULT.com.au/case-studies/focus-catchments/">Focus Catchments</a></h3>
									</li
								><li class="nav-2">
						<h3><a href="http://www.DEFAULT.com.au/case-studies/case-studies/">Case studies</a></h3>
					</li>
				</ul>
			</div>
        </li>
		<li class="nav-1"><a class="nav-1" href="http://www.DEFAULT.com.au/science/">Science</a>
            <div class="rollover">
            <h2><a href="http://www.DEFAULT.com.au/science/">Science</a></h2>
            <ul class="nav-2"
                            ><li class="nav-2">
                    <h3><a href="http://www.DEFAULT.com.au/science/research-projects/">Research Projects</a></h3>
                                </li
                            ><li class="nav-2">
                    <h3><a href="http://www.DEFAULT.com.au/science/papers-and-reports/">Papers and Reports</a></h3>
                                </li
                            ><li class="nav-2">
                    <h3><a href="http://www.DEFAULT.com.au/science/postgrads/">Postgraduates</a></h3>
                                    <ul class="nav-3">
                                            <li><a href="http://www.DEFAULT.com.au/science/postgrads/students'-research-projects/">Students' Research Projects</a></li>
                                        </ul>
                                </li
                            ><li class="nav-2">
                    <h3><a href="http://www.DEFAULT.com.au/science/links/">Links</a></h3>
                                </li
                        ></ul>
        </div>
        </li>
			<li class="nav-1"><a class="nav-1" href="http://www.DEFAULT.com.au/publications/">Publications</a>
        </li>
		<li class="nav-1"><a class="nav-1" href="http://www.DEFAULT.com.au/news/">News</a>
            <div class="rollover">
            <h2><a href="http://www.DEFAULT.com.au/news/">News</a></h2>
            <ul class="nav-2"
                            ><li class="nav-2">
                    <h3><a href="http://www.DEFAULT.com.au/news/media/">Media</a></h3>
                                </li
                            ><li class="nav-2">
                    <h3><a href="http://www.DEFAULT.com.au/news/events/">Events</a></h3>
                                </li
                            ><li class="nav-2">
                    <h3><a href="http://www.DEFAULT.com.au/news/subscribe/">Subscribe</a></h3>
                                    <ul class="nav-3">
                                            <li><a href="http://www.DEFAULT.com.au/news/subscribe/privacy-policy/">Privacy policy</a></li>
                                        </ul>
                                </li
                        ></ul>
        </div>
        </li
    ><li class="nav-1"><a class="nav-1" href="http://www.DEFAULT.com.au/about-us/">About Us</a>
            <div class="rollover">
            <h2><a href="http://www.DEFAULT.com.au/about-us/">About Us</a></h2>
            <ul class="nav-2"
                            ><li class="nav-2">
                    <h3><a href="http://www.DEFAULT.com.au/about-us/our-partners/">Our Partners</a></h3>
                                </li
                            ><li class="nav-2">
                    <h3><a href="http://www.DEFAULT.com.au/about-us/our-people/">Our People</a></h3>
                                </li
                            ><li class="nav-2">
                    <h3><a href="http://www.DEFAULT.com.au/about-us/DEFAULT-innovation/">DEFAULT Innovation</a></h3>
                                </li
                            ><li class="nav-2">
                    <h3><a href="http://www.DEFAULT.com.au/about-us/careers/">Careers</a></h3>
                                </li
                        ></ul>
        </div>
        </li
    ><li class="nav-1"><a class="nav-1" href="http://www.DEFAULT.com.au/contact-us/">Contact Us</a>
        </li
></ul>
        </div>
        <div id="banner">
                    </div>
    </div></div>
    <div id="main">
		<div class="box" id="subnav">
			<div class="box-2">
				<div class="box-3">
					<h2><a href="http://bugreport.DEFAULT.com.au//">Payment Page</a></h2>
				</div>
			</div>
		</div>
		<div class="box" id="content">
			<div class="box-2">
				<div class="box-3">
					<div id="wrapper-header">
						DEFAULT - Payment Form
					</div>
					<ul>
						<li> Credit Card Details are NEVER stored in our system.</li>
						<li> A Receipt will be send on the email registered below.</li>

					</ul>
					<div style="color:red;font-size:16px;width:500px;text-align:center;margin-right:auto;margin-left:auto;">
						<?php if(isset($_GET['msg'])){switch($_GET['msg']){case 'unsuccessful':echo "The message was not sent.<br /> Please contact support@DEFAULT.com.au or call 1300 592 873";break;}} ?>
					</div>
					<div id="wrapper"> 
						<div id="wrapper-content">
							<div id="left">
								<form action="configure.php" method="post" >
											<div id="errorMessage" style="color:red;"><?php echo $CreditError; ?></div>
											<div id="content-title">Email:</div><input type="text" id="webtolead_email1" name="webtolead_email1" value="<?php echo $txtEmail;?>"/><br>	
											<div id="content-title">First Name:</div><input type="text" id="first_name" name="first_name" value="<?php echo $txtFirstName;?>"/><br>	
											<div id="content-title">Last Name:</div><input type="text" id="last_name" name="last_name" value="<?php echo $txtLastName;?>"/><br>	
											<div id="content-title">Address:</div><input type="text" id="txtAddress" name="txtAddress" value="<?php echo $txtAddress;?>"/><br>	
											<div id="content-title">Credit Card Name:</div><input type="text" id="txtCCName" name="txtCCName" /><br>	
											<div id="content-title">Credit Card Number:</div><input type="text" id="txtCCNumber" name="txtCCNumber"/><br>
											<div id="content-title">CVN:</div><input name="txtCVN" type="text" maxlength="4" size="8" autocomplete="off" id="txtCVN" /><br>
											<div id="content-title">Expiry Date:</div></b>
												<select name="ddlExpiryMonth" id="ddlExpiryMonth">
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
												</select>
												<select name="ddlExpiryYear" id="ddlExpiryYear">
													<?php
														for ($cc_year=date("y"); $cc_year < date("y") + 10; $cc_year++) { ?>		
														<option value="<?php echo $cc_year; ?>"><?php echo $cc_year; ?></option>
													<?php		
														}
													?>
												</select>
											<br> 
											<div id="content-title">Payment Method:</div>
												<select name="ddlCardType" id="ddlCardType">
													<option value="Visa">Visa</option>
													<option value="Mastercard">Mastercard</option>
													<option value="American Express">American Express</option>
													<option value="JCB">JCB</option>
												</select> 
											<br>
												<div id="content-title">Amount:</div>
												<select name="txtAmount" id="txtAmount">
													<?php if($PaymentKind == "training"){ ?>
														<option>1 Day Training - $1,200</option>
														<option>2 Days Training - $Bazinga</option>
													<?php } ?>
													<?php if($PaymentKind == "generic") {?>
														<option>Sample Data 1 - $89.99</option>
													<?php } ?>
													<?php if($PaymentKind == "") {?>
														<option>Cannot Find Details - Contact Support</option>
													<?php } ?>
												</select>
												<br>
													<?php if($PaymentKind != "") {?>
														<input type="submit" name="btnProcess" value="Process Transaction" id="btnProcess" />
													<?php } ?>
											<br>
								</form>
							</div><!--End Left-->
							<div id="right">
								<!-- Begin eWAY Linking Code -->
								<div id="ewayBlock">
										<a href="http://www.eway.com.au/secure-site-seal" title="Credit Card Processing">Credit Card Processing</a>
										<a href="http://www.eway.com.au/secure-site-seal "title="Payment Gateway">Payment Gateway</a>
										<a href="http://www.eway.com.au/secure-site-seal" title="E-Commerce">E-Commerce</a>
								</div>
								<script language="javascript">
										var element = "ewayBlock";
								</script>
								<script language="javascript" src="https://www.eway.com.au/developer/payment-code/verified-siteseal.ashx?image=11&size=3&format=horizontal&color=CECECE"></script>
								<!-- End eWAY Linking Code -->
							</div><!--End Right-->
						</div><!--wrapper-content-->
					</div><!--wrapper-->
				</div><!--End box3-->
			</div><!--End Box2-->
		</div><!--End Box-->
	</div><!--End Main-->
    <div id="footer">
        <ul id="sitemap"
                            ><li class="sitemap-toplevel">
                <h4><a href="http://www.DEFAULT.com.au/products/">Products</a></h4>
                            <ul>
                                    <li><a href="http://www.DEFAULT.com.au/products/DEFAULT-source/">DEFAULT Source</a></li>
                                    <li><a href="http://www.DEFAULT.com.au/products/DEFAULT-toolkit/">DEFAULT Toolkit</a></li>
                                    <li><a href="http://www.DEFAULT.com.au/products/support/">Support</a></li>
                                    <li><a href="http://www.DEFAULT.com.au/products/training/">Training</a></li>
                                </ul>
                        </li
                                    ><li class="sitemap-toplevel">
                <h4><a href="http://www.DEFAULT.com.au/case-studies/">Case studies</a></h4>
                            <ul>
                                    <li><a href="http://www.DEFAULT.com.au/case-studies/focus-catchments/">Focus Catchments</a></li>
                                    <li><a href="http://www.DEFAULT.com.au/case-studies/case-studies/">Case studies</a></li>
                                </ul>
                        </li
                                    ><li class="sitemap-toplevel">
                <h4><a href="http://www.DEFAULT.com.au/science/">Science</a></h4>
                            <ul>
                                    <li><a href="http://www.DEFAULT.com.au/science/research-projects/">Research Projects</a></li>
                                    <li><a href="http://www.DEFAULT.com.au/science/papers-and-reports/">Papers and Reports</a></li>
                                    <li><a href="http://www.DEFAULT.com.au/science/postgrads/">Postgraduates</a></li>
                                    <li><a href="http://www.DEFAULT.com.au/science/links/">Links</a></li>
                                </ul>
                        </li
                                    ><li class="sitemap-toplevel">
                <h4><a href="http://www.DEFAULT.com.au/publications/">Publications</a></h4>
                        </li
                                    ><li class="sitemap-toplevel">
                <h4><a href="http://www.DEFAULT.com.au/news/">News</a></h4>
                            <ul>
                                    <li><a href="http://www.DEFAULT.com.au/news/media/">Media</a></li>
                                    <li><a href="http://www.DEFAULT.com.au/news/events/">Events</a></li>
                                    <li><a href="http://www.DEFAULT.com.au/news/subscribe/">Subscribe</a></li>
                                </ul>
                        </li
                                    ><li class="sitemap-toplevel">
                <h4><a href="http://www.DEFAULT.com.au/about-us/">About Us</a></h4>
                            <ul>
                                    <li><a href="http://www.DEFAULT.com.au/about-us/our-partners/">Our Partners</a></li>
                                    <li><a href="http://www.DEFAULT.com.au/about-us/our-people/">Our People</a></li>
                                    <li><a href="http://www.DEFAULT.com.au/about-us/DEFAULT-innovation/">DEFAULT Innovation</a></li>
                                    <li><a href="http://www.DEFAULT.com.au/about-us/careers/">Careers</a></li>
                                </ul>
                        </li
                                        ></ul>
        <div id="copyright">
            <span class="footer-links">
                <a href="http://www.DEFAULT.com.au/board/">Board</a> | <a href="http://www.DEFAULT.com.au/partners/">Partners</a><br />
                <a href="http://www.DEFAULT.com.au/staff/">Staff</a> | <a href="http://www.DEFAULT.com.au/admin/">Admin</a>
            </span>
            &copy; Copyright 2010: DEFAULT Limited on behalf of the DEFAULT CRC ABN 47 115 422 903<br />
            Banner image &copy; Steve Parish publishing
        </div>
    </div>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1454188-12']);
  _gaq.push(['_setDomainName', '.DEFAULT.com.au']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
  })();
</script></body>
</html>
