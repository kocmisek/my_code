<!DOCTYPE html>
<html>
 <head>
	<meta http-equiv="Content-language" content="cs">
	<meta charset="utf-8">
	<title>Pureweb - Martina Kocmanová</title>

	<meta name="description" lang="cs" content="Martina Kocmanová - webdeveloper a webdesigner. Je kreativní technolog propojující webový design a vývoj. Partner pro vaši webovou prezentaci">
	<meta name="description" lang="en" content="Martina Kocmanová - web developer and web designer. He is a creative technologist connecting web design and development. Partner for your website.">
	<meta name="keywords" lang="cs" content="web,e-shop,praha,martina kocmanova,martina,kocmanova,web na míru,tvorba webu, správa webu,správa,tvorba">
	<meta name="keywords" lang="en" content="web, e-shop, prague, martina kocmanova, martina, kocmanova, custom web, web design, web administration, administration, creation">

	<link rel="shortcut icon" type="image/ico" href="/wp-content/themes/pureweb/logo/favicon_pureweb.ico" />

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/pureweb/style.css?v=3.4">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/pureweb/responsive.css?v=6.2">
	<link rel="stylesheet" href="/wp-content/themes/pureweb/css/preload.css?v=0.2">
	<link rel="stylesheet" href="/wp-content/themes/pureweb/css/universal-parallax.min.css">
	<!--animate --> <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	
	<meta name =”robots” content=”index,follow”>
	<meta name="googlebot" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="referrer" content="unsafe-url">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta property="og:url" content="https://pureweb.cz/">
	<meta name="author" content="https://pureweb.cz/">


<!-- FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
	<link href="https://fonts.googleapis.com/css2?family=Forum&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&display=swap" rel="stylesheet">
<!-- FONTS ICONS -->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400" /> 
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700" /> 
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:800" />
<![endif]-->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-215321769-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-');
</script>


</head>
<body autofocus="">

	<!-- PRELOADER -->
	<div id="preloader"> 
    	<div id="loader">	   
			<img src="/wp-content/themes/pureweb/img/evie-s-uuCjYxJVf4o-unsplash.jpg">
    	</div>
   </div> 
   
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
    //<![CDATA[
    function showSite(){
          $('#loader').fadeOut(); // will first fade out the loading animation 
          $('#preloader').delay(350).fadeOut(900); // will fade out the white DIV that covers the website. 
          $('body').delay(350).css({'overflow':'visible'});
    }
        $(window).on('load', function() { // makes sure the whole site is loaded 
        setTimeout(function(){ showSite() }, 500);
        })
    //]]>
</script>
<!-- END preloader -->


<!-- MENU -->
<header>
	<div class="vNav">
		<div class="menu_title">MENU</div>
			<ul class="vNav">
				<li> <a href="#home">
							<div class="label">home</div>
						</a>
				</li>
				<li> <a href="#projekty">
							<div class="label">projekty</div>
						</a>
				</li>

				<li> <a href="#kdo_jsem">
							<div class="label">kdo jsem..</div>
						</a>
				</li>
				<li> <a href="#sluzby">
					<div class="label"><img src="/wp-content/themes/pureweb/img/služby.svg" alt="služby"></div>
				</a>
				</li>
				<li> <a href="#kontakt">
					<div class="label">kontakt</div>
				</a>
				</li>
			</ul>
	</div>

	<!-- MOB NAV MENU -->
	<div class="nav">
		<div id="toggle">MENU</div>
		<div id="sidebar" for='toggle'>
			<ul>
			<li><a><label class='close_menu' for='toggle'></label></a></li>
			<li><a href="#projekty">projekty</a></li>
			<li><a href="#kdo_jsem">kdo jsem</a></li>
			<li><a href="#sluzby" id="svg_menu"><img src="/wp-content/themes/pureweb/img/služby.svg" alt="služby"></a></li>
			<li><a href="#kontakt">kontakt</a></li>
			</ul>
		</div>
	</div>
	
	<!-- END mob nav menu -->
</header>
