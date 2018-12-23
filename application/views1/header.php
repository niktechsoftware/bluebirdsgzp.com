<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    
                
    <link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/global.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/jquery.mmenu.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/bootstrap-datetimepicker.css" type="text/css" />
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,400italic,300,700italic,300italic' rel='stylesheet' type='text/css'>  

		<link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/images/favicon.jpg" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="javascripts/html5.js"></script>
    <![endif]-->
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/jquery.mmenu.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/jquery.mmenu.setup.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/CrossBrowserSmoothScroll.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/jquery.tools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/stylesheets/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/jquery.fancybox-media.js"></script>

<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.html');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>

<script src="<?php echo base_url();?>assets/javascripts/moment-with-locales.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/bootstrap-datetimepicker.js"></script>
 <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();

            });
			
			 
        </script>
        
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/global.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/javascripts/respond.js"></script>



<title> BLUE BIRD'S INTERNATIONAL SCHOOL - School in Ghazipur</title>

<meta name="description" content="BLUE BIRD'S INTERNATIONAL SCHOOL aims to develop students into leaders through sustainable living practices integrated with values and ethics of caring for nature and the world around us"/>

<meta name="keywords" content="schooli Ghazipur, uttar pradesh"/> 

</head>

<body>