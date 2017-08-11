<!--This is the main view for non admin pages, i.e header and footer -->
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/app/assets/css/bootstrap.css" type="text/css">
		<link rel="apple-touch-icon" sizes="57x57" href="/app/assets/img/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/app/assets/img/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/app/assets/img/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/app/assets/img/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/app/assets/img/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/app/assets/img/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/app/assets/img/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/app/assets/img/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/app/assets/img/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/app/assets/img/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/app/assets/img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/app/assets/img/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/app/assets/img/favicon-16x16.png">
		<link rel="manifest" href="/app/assets/img/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/app/assets/img/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<title>
<?php
if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        echo strtoupper($controller). " | " . strtoupper($action);
		$$action = "active";
    } else {
        echo "ERROR";
    }
} else {
    echo "ERROR";
}
?>
		</title>
	</head>
	<body>
		<nav class="navbar navbar-inverse">	
			<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="">FARADY EECTRONICS CLUB</a>
					</div>	
						<ul class="nav navbar-nav">
						<?php 
							foreach($controllers['pages'] as $value){
							if($value != 'error'){
						?>
						
						<li class="<?php echo $$value ;?>"><a role="presentation" href="/app/pages/<?php echo $value; ?>"><?php echo strtoupper($value); ?></a></li>
						
							<?php }} ?>
						</ul>
						
			</div>
		</nav>	
			
			
<?php
require_once '/../routes.php';
?>
		<footer class="footer navbar-fixed-bottom container-fluid text-center" style="background-color: #242729; color:white; padding-top: 10px">
			<p>&copy; PURANJAY MOHAN 2017</p>
			
		<footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="/app/assets/js/bootstrap.js"></script>
	</body>
</html>