<!DOCTYPE html>

<html>

<head>
	<title>ewsc.wtf - home</title>
	<link rel="stylesheet" href="css/uikit.css" />
	<link rel="stylesheet" href="css/default.css" />
	<script src="js/uikit.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<link rel="shortcut icon" href="ico/logo.png" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet"> 
</head>

<script>
    window.onload = function() {
        let preloader = document.getElementById('preloader');
        setTimeout(() => {
            preloader.style.display = 'none';
        }, 1000);
    }
</script>

<body class="al-background-custom">


	<div class="preloader" id="preloader">
    		<div uk-spinner="ratio: 3"></div>
	</div>
	

	<div class="uk-container uk-position-center">
		<div uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 400; repeat: false">
			<div class="uk-margin-remove uk-card uk-text-light uk-text-center">
				<img src="ico/fontic.png" width="500vw">
			</div>
			<div class="uk-margin-remove uk-card uk-text-light uk-text-center">
				<p>welcome to <b uk-tooltip="ex. alamov.tech">ewsc.wtf.</b><br>this site is reserved for wider future use. stay in touch.</p>
			</div>	
		</div>
	</div>



	
	<div class="uk-container uk-position-bottom">
		<div uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 400; repeat: false">
			<footer class="uk-position-bottom uk-padding-remove">
				<div class="uk-text-muted uk-card uk-text-center uk-margin-remove-bottom"><p class="uk-margin-remove">alamov azam, <?php echo date("Y");?></p></div>
				<div class="uk-text-muted uk-card uk-text-center uk-margin-remove-top">
					<ul class="uk-breadcrumb">
						<li><a href="mailto:alamovazamjon@gmail.com" target="_blank">mail</a></li>
						<li><a href="https://github.com/ewsc" target="_blank">github</a></li>
						<li><a href="https://discord.com/users/775264495270232064" target="_blank">discord</a></li>
					</ul>
				</div>
			</footer>
		</div>
	</div>


</body>

</html>

