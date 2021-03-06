
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width"/>
<title>google sheet test page</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</head>
<body>

<!-- Header -->
<div class="header_container">
<div class="header">
<img src="logo.png" class="header_logo"/>
</div>
</div>
<!-- Header -->

<!-- Content -->
<div class="content_container">
<div class="content">
<div class="content_full content_twelve">
<div class="container_text">
<h1>Google Sheets API</h1>
<h3>Add HTML Form Data to Sheet via Javascript</h3>
</div>
<!-- Form -->
<div class="form_container">
<form id="sheets" name="sheets" class="form_body">
<input id="first_name" name="last_name" class="form_field" value="" placeholder="Name"/>
<input id="last_name" name="last_name" class="form_field" value="" placeholder="Email"/>
<input id="email" name="email" class="form_field" value="" placeholder="Message"/>
<input id="submit" name="submit" type="button" class="form_button" value="Submit" onClick="submit_form()">
</form>
<div class="form_message" id="message"></div>
</div>
<!-- Form -->
</div>
</div>
</div>
<!-- Content -->

<!-- Footer -->
<div class="footer_container">
<div class="footer">
<div class="footer_text">
<h3><a href="http://www.Brandsdistribution.com" target="_blank">BrandsDistribution.com</a></h3>
Copyright &copy; 2017 Snyder Group Inc. - All Right Reserved
</div>
</div>
</div>
<!-- Footer -->

</body>
</html>