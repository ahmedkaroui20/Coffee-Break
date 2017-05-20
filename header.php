<!DOCTYPE html>
<html>
<head>
<title><?php echo get_bloginfo( 'name' ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href= "<?php bloginfo('template_directory'); ?>/css/blog.css" rel="stylesheet" type='text/css' />
<link href="<?php bloginfo('template_directory');?> /css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);				
					<?php bloginfo('template_directory'); ?>/css/blog.css"
rel="stylesheet">
					
					
					
				});
			});
		</script>
<!--start-smoth-scrolling-->
<script src="<?php bloginfo( 'template_directory' );?>/js/jquery.min.js"></script>
</head>
<body>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
			<h1><b><a class="text-muted" href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></b></h1>
					<h6><a class="text-muted"><?php echo get_bloginfo( 'description' ); ?></h6>
			</div>
		</div>
	</div>
	
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span> 
					<ul class="navig">
						<li class="active"> <a href="<?php bloginfo( 'wpurl' );?>"> Home</a></li>
							<li><?php wp_list_pages( '&title_li=' ); ?></li>
						
					</ul>
			</div>
			<div class="header-right">
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
				<ul>
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="pin"> </span></a></li>
					<li><a href="#"><span class="rss"> </span></a></li>
					<li><a href="#"><span class="drbl"> </span></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	