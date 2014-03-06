<?php
/*

*/
echo '
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Oleos JuanCarlos</title>
	<link rel="stylesheet" href="./css/foundation.css" />
	<script src="./js/modernizr.js"></script>



	<!-- Skitter Styles -->
	<link href="./css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />

	<!-- Skitter JS -->
	<script type="text/javascript" language="javascript" src="./js/jquery-1.6.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="./js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" language="javascript" src="./js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" language="javascript" src="./js/jquery.skitter.min.js"></script>



<!--Init Skitter 
<script type="text/javascript" language="javascript">
$(document).ready(function(){
	$(".box_skitter_large").skitter({label: false, numbers: false, theme: "square"});
	$(".box_skitter_small").skitter({label: false, numbers: false, interval: 1000, theme: "clean"});
	$(".box_skitter_medium").css({width: 500, height: 200}).skitter({show_randomly: true, dots: true, interval: 4000, numbers_align: "center", theme: "round"});
	$(".box_skitter_normal").css({width: 400, height: 300}).skitter({animation: "blind", interval: 2000, hideTools: true, theme: "minimalist"});
});
</script> -->
<script>
        $(document).ready(function() {
                $(".box_skitter_large").skitter({
                        animation: "randomSmart", 
                         dots: true, 
                         preview: true, 
                         focus_position: "leftBottom", 
                         controls_position: "rightTop", 
                         numbers_align: "center", 
                         theme: "minimalist", 
                         label: true, 
                         controls: true, 
                         focus: true, 
                         progressbar: true, 
                         enable_navigation_keys: true, 
                         focus: true, 
                         controls: true
                });
        });
</script>

<!-- 
	<script type="text/javascript" language="javascript">
	$(document).ready(function() {
		$(".box_skitter_large").skitter({
			theme: "clean",
			numbers_align: "center,
			progressbar: true, 
			dots: true, 
			preview: true"
		});
});
</script> -->

</head>
<body>

	<div class="row">
	<br>
		<div class="large-9 columns">
			<ul class="left button-group">
				<li><a href="#" class="button">Inicio</a></li>
				<li><a href="#" class="button">Me gusta escribir</a></li>
				<li><a href="#" class="button">Mis obras</a></li>
				<li><a href="#" class="button">Foro</a></li>
			</ul>
		</div>
		<div class="large-3 columns">
			<ul class="right button-group">
				<li><a href="#" class="button">Sign in</a></li>
			</ul>
		</div> 
	</div>

	<!-- End Header and Nav -->
';
?>