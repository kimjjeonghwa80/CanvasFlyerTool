<?php
	ini_set('max_execution_time', 300);
	//300 seconds = 5 minutes
	require("library/config.php");
      //require("lock.php");
?>
<!DOCTYPE html>
<html class=''>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Canvas Flyer Tool</title>
      <meta name="robots" content="noindex">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link href="css/spectrum.css" type="text/css" rel="stylesheet">
      <link href="css/bootstrap-slider.css" type="text/css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/cropper.min.css">
      <link href='http://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Averia Sans Libre' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Source Sans Pro ' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Nixie One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Lilita One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Kristi' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Ubuntu Mono' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Bubblegum Sans' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Overlock' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Patrick Hand' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Crafty Girls' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Droid Sans' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Permanent Marker' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Just Another Hand' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Unkempt' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Antic Slab' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Cutive Mono' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Crushed' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Codystar' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Fredericka the Great' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Give You Glory' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Rammetto One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=PT Sans' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Poiret One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Cabin Sketch' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Cherry Cream Soda' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=PT Sans Narrow' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Short Stack' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Lily Script One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Tinos' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Neucha' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Corben' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Yeseva One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Petit Formal Script' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Kelly Slab' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Oleo Script' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Noto Serif' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=La Belle Aurore' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=The Girl Next Door' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=PT Mono' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Marck Script' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Droid Sans Mono' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Contrail One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Nova Mono' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Allura' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=PT Serif' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Limelight' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Fugaz One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Waiting for the Sunrise' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Shojumaru' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Gochi Hand' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Reenie Beanie' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Schoolbell' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Crete Round' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Shadows Into Light' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Josefin Slab' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Frijole' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Libre Baskerville' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Racing Sans One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Walter Turncoat' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Sigmar One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Source Code Pro' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Gloria Hallelujah' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Fontdiner Swanky' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Grand Hotel' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Just Me Again Down Here' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Cousine' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Merienda One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Ubuntu Condensed' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=EB Garamond' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Droid Serif' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Luckiest Guy' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Over the Rainbow' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Nothing You Could Do' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Titillium Web' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Share' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Crimson Text' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Squada One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Carter One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Spirax' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Wallpoet' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Kavoon' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Noticia Text' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Sansita One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Slabo 27px' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet' type='text/css'>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet" type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Forum' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Coming Soon' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Lemon' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Homemade Apple' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Love Ya Like A Sister' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Allan' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Patua One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Slackey' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Covered By Your Grace' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Griffy' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Indie Flower' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Ceviche One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Bree Serif' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Coda' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Gruppo' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Leckerli One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Kranky' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Metamorphous' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Anonymous Pro' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Lusitana' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Yanone Kaffeesatz' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Archivo Narrow' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Francois One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Slabo 13px' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Nova Square' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Vidaloka' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Passion One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Iceland' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Changa One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Loved by the King' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Delius' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Black Ops One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Salsa' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Shadows Into Light Two' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Fjalla One' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Rock Salt' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Freckle Face' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Special Elite' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Playfair Display SC' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Pinyon Script' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Lobster Two' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Mountains of Christmas' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Boogaloo' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Monsieur+La+Doulaise' rel='stylesheet' type='text/css'>
      <link href='css/fonts/scriptina/stylesheet.css' rel='stylesheet' type='text/css'>
		<link href='css/fonts/isabella-script/stylesheet.css' rel='stylesheet' type='text/css'>
   </head>
<style>
   /* Limit image width to avoid overflow the container */
   #imagetocrop {
     max-width: 100%; /* This rule is very important, please do not ignore this! */
	}
</style>
   <body>
<!--
      <div class="se-pre-con"></div>
 -->
      <ul class='custom-menu'>
      	<li data-action="selectall">Select All</li>
        <li data-action="cut">Cut</li>
        <li data-action="copy">Copy</li>
        <li data-action="paste">Paste</li>
      </ul>
      <div id="loadingpage" class="modal" data-backdrop="static" data-keyboard="false" style="background:#00a5c5; opacity:1; display:block;"><i class="fa fa-cog fa-spin" style="position: absolute; top: 50%; left: 50%; margin-top: -75px; margin-left: -75px; font-size: 150px; color:#fff;"></i></div>
      <div class="container" id="page-container">
                        <nav class="navbar navbar-inverse navbar-fixed-top">
                          <div class="container-fluid">
                              <!-- Brand and toggle get grouped for better mobile display -->
                              <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="background-color:#ffb600;">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <img src="./img/SWF_logo.png" width="50px" height="50px">
                              </div>
                              <!-- Collect the nav links, forms, and other content for toggling -->
                              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                          <a href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle" style="color: #ffffff; text-decoration:none;">File <b class="caret"></b></a>
                                      <ul class="dropdown-menu">
                                          <li>
                                                <form id="uploadtemplate" action="#">
                                                      <label for="templateselect" style="cursor: pointer; font-weight:normal; margin-bottom: 0px;">Open</label>
                                                      <input id="templateselect" type="file" name="templateselect[]" />
                                                </form>
                                          </li>
                                          <li><a id="savetemplate" href="#">Save</a></li>
                                          <li><a id="saveastemplate" href="#">Save As</a></li>
                                      </ul>
                                    </li>
                                </ul>
                                <span class="navbar-right">
                                    <!--<button class="btn btn-info" title="Undo" type="button" id="undo"><i class="fa fa-undo"></i></button>
                                    <button class="btn btn-info" title="Redo" type="button" id="redo" ><i class="fa fa-repeat"></i></button>-->
                                    <!-- <button class="btn btn-info" type="button" id="saveTemplate"><i class="fa fa-cloud-download"></i> Save</button> -->
                                    <!-- <button class="btn btn-info" type="button" id="publishTemplate"><i class="fa fa-check"></i> Publish</button> -->
                     <button class="btn btn-info" type="button" style="background-color:#c8d046"><a href="logout.php" id="signout" style="color:#FFFFFF">Logout</a></button>
                  <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle" style="background-color:#ffb600;"><i class="fa fa-download"></i>&nbsp; Download<span class="caret" style="margin-left:10px;"></span></button>
                    <ul class="dropdown-menu">
                      <li><a id="downloadAsPDF" href="#">Save As PDF (For Print)</a></li>
                      <li><a id="downloadAsJPEG" href="#">Save As JPEG (For Web)</a></li>
                      <li><a id="downloadtemplate" href="#">Save As YPE</a></li>
                      <li class="divider"></li>
                      <li class="dropdown-submenu">
                      <a href="#">More Options<span class="caret" style="margin-left:10px;"></a>
                                      <ul class="dropdown-menu">
                                          <li><a href="#" class="noclose" data-value="option1" tabIndex="-1"><input type="checkbox" id="savecrop"/>&nbsp;Save with Crop Marks</a></li>
                                      </ul>
                                </li>
                    </ul>
                  </div>
                                </span>
                              </div><!-- /.navbar-collapse -->
                          </div><!-- /.container-fluid -->
                        </nav>
         <!-- /row -->
         <div class="row">
            <div id="leftsection" style="padding-right: 0px; padding-left: 0px; position:fixed;z-index:1000;">
               <div class="tabs-left">
                  <!--<ul class="nav nav-tabs">
                     <li class="active"><a href="#a" data-toggle="tab"><i class="fa fa-th-large"></i></br>Templates</a></li>
                     <li><a href="#b" data-toggle="tab"><i class="fa fa-font"></i></br>Text</a></li>
                     <li><a href="#c" data-toggle="tab"><i class="fa fa-picture-o"></i></br>Elements</a></li>
                     <li><a href="#d" data-toggle="tab"><i class="fa fa-th"></i></br>Background</a></li>
                     <li id="tab-upload">
                        <form id="upload" action="uploadimage.php" method="POST" enctype="multipart/form-data">
                           <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="1000000" />
                           <label for="fileselect" style="cursor: pointer; font-weight:normal;"><i class="fa fa-cloud-upload"></i> </br>Upload image</label>
                           <input id="fileselect" type="file" name="fileselect[]" />
                        </form>
                        <div id="progress"></div>
                     </li>
                  </ul>-->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#a" data-toggle="tab"><i class="fa fa-th-large"></i></br>Marketing Materials</a></li>
                    <li><a href="javascript:void(0);" id="upload_image"><i class="fa fa-cloud-upload"></i></br>Upload Artwork</a></li>
                   <!-- <li id="tab-upload">
                        <form id="upload" action="uploadimage.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="100000000" />
                            <label for="fileselect" style="cursor: pointer; font-weight:normal;" id="upload_image"><i class="fa fa-cloud-upload"></i> </br>Upload Artwork</label>
                            <input id="fileselect" type="file" name="fileselect[]" />
                        </form>
                        <div id="progress"></div>
                    </li> -->
                    <li><a href="#b" data-toggle="tab"><i class="fa fa-font"></i></br>Set Content Area</a></li>
                    <li><a href="#c" data-toggle="tab"><i class="fa fa-picture-o"></i></br>Set Picture Area</a></li>
                    <!--<li><a href="#i" data-toggle="tab"><i class="fa fa-mobile"></i><br/>Loan Estimate(s)</a></li>-->
                    <li><a href="javascript:void(0);" id="undo"><i class="fa fa-undo"></i></br>Undo</a></li>
                    <li><a href="javascript:void(0);" id="redo"><i class="fa fa-repeat"></i></br>Redo</a></li>
                    <li><a href="#h" data-toggle="tab"><i class="fa fa-question"></i></br>Help</a></li>
                </ul>
				  
                  <div class="tab-content" style="margin-left:80px; position:absolute;">
                     <div class="tab-pane active" id="a">
                        <div class="col-lg-12" style='margin-left: -20px;'>
                              <div class="dropdown" style="float:left;">
                              <button class="btn btn-default dropdown-toggle btn-menu" type="button" id="templateMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width:35px;">
                                    <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="templateMenu">
                                    <li><a href="#" id="addTemplateCategory">New Category</a></li>
                                    <li><a href="#" id="deletetempcat">Delete Category</a></li>
                              </ul>
                              </div>
                              <select class="form-control" name="tempcat-select" id="tempcat-select" >
                                <option value="">Select Category</option>
                              </select>
                              <button type="submit" onClick='javascript:location.href="index.php?newtemplate";' class="btn btn-default" style="padding:0px;">New Marketing Piece</button>
                              <button type="submit" id="deleteTemp" class="btn btn-default" style="padding:0px;">Delete Marketing Piece</button>
                        </div>
                        <div class="" id="template_container" style="text-align:center;margin-top:90px;">
                        </div>
                     </div>
                     <div class="tab-pane" id="b">
                        <div id="addtextoptions" class="col-lg-12" style="text-align:center;">
					<div id="addsometext" style="font-size:14px; font-weight:bold; margin:5px 0 10px 0;">
                                    <a href="#" onClick="javascript:addText();"><font color='red'>(red = data that will be populated with user-specific information from our database)</font></br>
                                    <font color='red'>First and Last Name</font></br>
                                    <font color='red'>Originator’s Title</font></br>
                                    Office Phone:  <font color='red'>(555) 555-5555</font></br>
                                    Cell Phone:  <font color='red'>(555) 555-5555</font></br>
                                    Email:  <font color='red'>email@southwestfunding.com</font></br>
                                    Web:  <font color='red'>www.southwestfunding.com/website</font></br>
                                    Address: <font color='red'>123 Sample Road, Sample, TX 55555</font></br>
                                    NMLS:  <font color='red'>555555</font></br>
                                    Branch Number: <font color='red'>0000</font></br>
                                    </a>
                              </div>
                        </div>
                     </div>      
                     <div class="tab-pane" id="c">
                        <div class="col-lg-12" style="text-align:center;">
							<button type="submit" id="addPictureArea" class="btn btn-default">Add Picture Area</button>
						</div>
                     </div>                     
                    <div class="tab-pane" id="h">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <h2 style="text-align:center;">Help Topics</h2>
                            </div>
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
											 <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Opening your flyer</a>
										 </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>If you purchased the flyer in the shop all you have to do is click on your flyer in the Flyers pane to open your flyer.
                                                <h4>Etsy Customers</h4>
                                                <p>To open your flyer file (.ype file), click the "Open Flyer" button in the File menu then select the flyer file you purchased and saved to your computer. Once loaded, you'll see the flyer in the Flyers pane and you can start customizing it.</p>
                                                <p>Please note, trying to open the .ype file on your computer will not do anything. It must be loaded into our design application to work.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
											 <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Saving your flyer</a>
										 </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>You have three options for saving your flyer.</p>
                                            <h4>Flyer (.ype) File</h4>
                                            <p>You can save the flyer file (.ype) itself for editing later. Just navigate to File > Save Flyer.</p>
                                            <h4>PDF (for print)</h4>
                                            <p>To download a high quality PDF of your flyer for printing, navigate to Download > Save As PDF. In the "More Options" dropdown you can check whether you want crop marks or not.</p>
                                            <h4>JPEG (for web)</h4>
                                            <p>To download a jpeg image of your flyer for web use, navigate to Download > Save As JPEG.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
											 <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Printing</a>
										 </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>This is the fun part. You've made the customizations to your flyer, now it's time to print.</p>
                                            <h4>Printing at home</h4>
                                            <p>For flyers 8 1/2" x 11" or smaller, printing at home is a perfect option. Here are some tips.</p>
                                            <ul>
                                                <li>Be sure the document prints at 100% (in the print settings). Sometimes "Scale to fit" will automatically be selected.</li>
                                                <li>Test print one to make sure your print settings are correct before printing many copies.</li>
                                                <li>The colors seen on your monitor may vary slightly when printed on paper. Test print one copy first and adjust the colors on the flyer is necessary.</li>
                                            </ul>
                                            <h4>Printing at a shop</h4>
                                            <p>You also have the option of taking your PDF file to a print shop and getting it professionally printed. Any print shop should be able to handle the PDF file but some popular options are Staples®, Office Depot®, Office Max®, FedEx Kinkos®, and others. The PDF file is 300dpi which is the standard for professional printing.</p>
                                            <h4>Paper</h4>
                                            <p>Your intended use of the flyer will ultimately determine what kind of paper you print it on but in general we recommend printing on 80lb card stock. There are different weights of paper available to suit your needs.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
											 <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Trimming</a>
										 </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Cutting your flyer out is fairly straight forward, however there are a few different methods to do it – some of which are easier than others.</p>
                                            <h4>Scissors</h4>
                                            <p>Scissors can be used to trim the flyer but keep in mind you'll need a steady hand. It's not really the preferred option.</p>
                                            <h4>Exacto knife and straight edge</h4>
                                            <p>Using an exacto knife and straight edge is a perfect way to get great results when trimming your flyer. Be sure to put something underneath so you don't ruin the table below.</p>
                                            <h4>Paper trimmer</h4>
                                            <p>Using a paper trimmer is the quickest option for cutting your flyers to size and you can easily get accurate results every time. This method is ideal if you already have one, or if you have a lot of flyers to trim.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
											 <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Locked elements</a>
										 </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>You might notice some elements are locked. This is to avoid accidentally moving them out of place. You can unlock an element at any time by selecting the element, click the dropdown arrow from the toolbar and select "unlock".</p>
                                            <p>You can still make some changes to locked elements. Below is a list of some changes you can make to locked elements.</p>
                                            <h4>Text</h4>
                                            <ul>
                                                <li>Font style</li>
                                                <li>Font size</li>
                                                <li>Color</li>
                                                <li>Edit text</li>
                                                <li>Alignment</li>
                                                <li>Opacity</li>
                                            </ul>
                                            <h4>Image Elements</h4>
                                            <ul>
                                                <li>Color</li>
                                                <li>Opacity</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
											 <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Cut, copy, paste</a>
										 </h4>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>If you'd like to cut, copy, and paste an element anywhere in the canvas area, simply select the object or group of objects and right click. A context menu will open and you can select all elements, cut, copy, or paste.</p>
                                            <p>When pasting an element or group of elements, they will be inserted in the same position as the cut or copied elements.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- <div class="tab-pane" id="b">
                        <div class="col-lg-12">
                                          <div class="dropdown" style="float:left;">
                                                <button class="btn btn-default dropdown-toggle btn-menu" type="button" id="textMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width:35px;">
                                                      <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="textMenu">
                                                      <li><a href="#" id="addTextCategory">New Category</a></li>
                                                      <li><a href="#" id="saveText">Save from Selection</a></li>
                                                      <li><a href="#" id="deletetextcat">Delete Category</a></li>
                                                      <li><a href="#" id="deleteText">Delete Text</a></li>
                                                </ul>
                                          </div>
                                          <select class="form-control" name="textcat-select" id="textcat-select" >
                                                  <option value="">Select Category</option>
                                          </select>
                        </div>
                        <div id="addtextoptions" class="col-lg-12" style="text-align:center;">
							<div id="addheading" style="font-size:36px; font-weight:900;"><a href="#" onClick="javascript:addheadingText();">Add heading</a></div>
							<div id="addsubheading" style="font-size:24px; font-weight:bold;"><a href="#" onClick="javascript:addsubheadingText();">Add subheading</a></div>
							<div id="addsometext" style="font-size:18px; font-weight:bold; margin:5px 0 10px 0;"><a href="#" onClick="javascript:addText();">Add some regular text</a></div>
                        </div>
                        <div class="" id="text_container" style="text-align:center;">
                        </div>
                     </div>
                     <div class="tab-pane" id="c">
                        <div class="col-lg-12">
                                          <div class="dropdown" style="float:left;">
                                                <button class="btn btn-default dropdown-toggle btn-menu" type="button" id="elementMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width:35px;">
                                                      <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="elementMenu">
                                                      <li><a href="#" id="addCategory">New Category</a></li>
                                                      <li><a href="#" id="addElement">New Element</a></li>
                                                      <li><a href="#" id="saveElement">Save from Selection</a></li>
                                                      <li><a href="#" id="deleteCategory">Delete Category</a></li>
                                                      <li><a href="#" id="deleteEle">Delete Element</a></li>
                                                </ul>
                                          </div>
                                          <select class="form-control" name="cat-select" id="cat-select" >
                              <option value="">Select Category</option>
                                             </select>
                        </div>
                        <div class="col-lg-12 col-xs-12" id="catimage_container" style="text-align:center;">
                        </div>
                     </div>
                     <div class="tab-pane" id="d">
                        <div class="col-lg-12">
                                          <div class="dropdown" style="float:left;">
                                                <button class="btn btn-default dropdown-toggle btn-menu" type="button" id="backgroundMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                      <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="backgroundMenu">
                                                      <li><a href="#" id="addBGCategory">New Category</a></li>
                                                      <li><a href="#" id="addBackground">New Background</a></li>
                                                      <li><a href="#" id="deleteBGCategory">Delete Category</a></li>
                                                      <li><a href="#" id="deleteBackground">Delete Background</a></li>
                                                </ul>
                                          </div>
                                          <select class="form-control" name="bgcat-select" id="bgcat-select" >
                                                              <option value="">Select Category</option>
                                          </select>-->
<!--
                                       <button class="btn btn-default" type="button" id="bgcolorselect" title="Color Picker" style="width:96%;">Select Background Color</button>
 -->
                        <!--   <button class="btn btn-default" type="button" id="bgImageRemove">Remove Background</button>
                           <button class="btn btn-default" type="button" id="bgcolorselect">Select Color</button>
                        </div>
                        <div class="col-lg-12 col-xs-12" style="text-align:center;">
                            <input id="bgscale" data-slider-id='bgscaleslider' type="text" data-slider-min="0.1" data-slider-max="1" data-slider-step="0.1" data-slider-value="1"/>
                        </div>
                        <div class="col-lg-12 col-xs-12" style="text-align:center;">
						  <p>
							<label>Pattern image width</label>
							<input type="range" min="50" max="1000" value="100" id="img-width">
						  </p>
                        </div>
                        <div class="col-lg-12 col-xs-12" id="background_container" style="text-align:center;">
                        </div>
                     </div>
                  </div>-->
                  <!-- /tab-content -->
                  <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                     <li>
                        <i class="fa fa-plus-circle fa-lg" id="btnZoomIn" style="cursor:pointer;"></i></br><span id="zoomperc">100%</span></br><i class="fa fa-minus-circle fa-lg" id="btnZoomOut" style="cursor:pointer;"></i>
                     </li>
                  </ul>
               </div>
               <!-- /tabbable -->
            </div>
            <div class="col-xs-12 col-md-8"  style="margin-top:60px; margin-left:420px;" id='rightsection'>
               <!-- tools-top -->
               <div class="tools-top" style="z-index:1000;position:fixed;visibility:hidden;margin-top:5px;">
                  <div class="toolbar-top">
                     <span class="textelebtns">
                     <div class="btn-group">
                        <a title="Select Font" id="font-selected" class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">
                           <span><span style="font-family: 'Averia Sans Libre'; font-size: 14px;">Averia Sans Libre</span>&nbsp;&nbsp;<span class="caret"></span></span>
                        </a>
                        <ul class="dropdown-menu fonts-dropdown" id="fonts-dropdown">
                           <li><a href="javascript:void(0);"><font face="Alfa Slab One" size="4">Alfa Slab One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Averia Sans Libre" size="4">Averia Sans Libre</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Sourcfe Sans Pro" size="4">Source Sans Pro </font></a></li>
                           <li><a href="javascript:void(0);"><font face="Nixie One" size="4">Nixie One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Lilita One" size="4">Lilita One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Dosis" size="4">Dosis</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Abel" size="4">Abel</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Kristi" size="4">Kristi</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Ubuntu Mono" size="4">Ubuntu Mono</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Bubblegum Sans" size="4">Bubblegum Sans</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Overlock" size="4">Overlock</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Patrick Hand" size="4">Patrick Hand</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Crafty Girls" size="4">Crafty Girls </font></a></li>
                           <li><a href="javascript:void(0);"><font face="Noto Sans" size="4">Noto Sans</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Droid Sans" size="4">Droid Sans</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Yellowtail" size="4">Yellowtail</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Permanent Marker" size="4">Permanent Marker</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Just Another Hand" size="4">Just Another Hand </font></a></li>
                           <li><a href="javascript:void(0);"><font face="Unkempt" size="4">Unkempt</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Lato" size="4">Lato</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Arvo" size="4">Arvo</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Antic Slab" size="4">Antic Slab</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Cabin" size="4">Cabin</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Playfair Display" size="4">Playfair Display</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Cutive Mono" size="4">Cutive Mono</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Crushed" size="4">Crushed</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Parisienne" size="4">Parisienne</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Codystar" size="4">Codystar</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Lora" size="4">Lora</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Niconne" size="4">Niconne</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Fredericka the Great" size="4">Fredericka the Great</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Give You Glory" size="4">Give You Glory</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Rammetto One" size="4">Rammetto One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Pompiere" size="4">Pompiere</font></a></li>
                           <li><a href="javascript:void(0);"><font face="PT Sans" size="4">PT Sans</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Poiret One" size="4">Poiret One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Cabin Sketch" size="4">Cabin Sketch</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Cherry Cream Soda" size="4">Cherry Cream Soda</font></a></li>
                           <li><a href="javascript:void(0);"><font face="PT Sans Narrow" size="4">PT Sans Narrow</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Montez" size="4">Montez</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Short Stack" size="4">Short Stack</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Lily Script One" size="4">Lily Script One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Tinos" size="4">Tinos</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Neucha" size="4">Neucha</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Bad Script" size="4">Bad Script</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Corben" size="4">Corben</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Yeseva One" size="4">Yeseva One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Arimo" size="4">Arimo</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Petit Formal Script" size="4">Petit Formal Script</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Kelly Slab" size="4">Kelly Slab</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Oleo Script" size="4">Oleo Script</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Noto Serif" size="4">Noto Serif</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Ubuntu" size="4">Ubuntu</font></a></li>
                           <li><a href="javascript:void(0);"><font face="La Belle Aurore" size="4">La Belle Aurore</font></a></li>
                           <li><a href="javascript:void(0);"><font face="The Girl Next Door" size="4">The Girl Next Door</font></a></li>
                           <li><a href="javascript:void(0);"><font face="PT Mono" size="4">PT Mono</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Yesteryear" size="4">Yesteryear</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Marck Script" size="4">Marck Script</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Droid Sans Mono" size="4">Droid Sans Mono</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Contrail One" size="4">Contrail One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Nova Mono" size="4">Nova Mono</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Bitter" size="4">Bitter</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Allura" size="4">Allura</font></a></li>
                           <li><a href="javascript:void(0);"><font face="PT Serif" size="4">PT Serif</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Limelight" size="4">Limelight</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Lobster" size="4">Lobster</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Kreon" size="4">Kreon</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Fugaz One" size="4">Fugaz One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Waiting for the Sunrise" size="4">Waiting for the Sunrise</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Shojumaru" size="4">Shojumaru</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Gochi Hand" size="4">Gochi Hand</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Reenie Beanie" size="4">Reenie Beanie</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Alex Brush" size="4">Alex Brush</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Schoolbell" size="4">Schoolbell</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Crete Round" size="4">Crete Round</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Shadows Into Light" size="4">Shadows Into Light</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Rokkitt" size="4">Rokkitt</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Josefin Slabr" size="4">Josefin Slab</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Frijole" size="4">Frijole</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Fredoka One" size="4">Fredoka One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Libre Baskerville" size="4">Libre Baskerville</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Racing Sans One" size="4">Racing Sans One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Walter Turncoat" size="4">Walter Turncoat</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Sigmar One" size="4">Sigmar One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Source Code Pro" size="4">Source Code Pro</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Gloria Hallelujah" size="4">Gloria Hallelujah</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Fontdiner Swanky" size="4">Fontdiner Swanky</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Calligraffitti" size="4">Calligraffitti</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Grand Hotel" size="4">Grand Hotel</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Tangerine" size="4">Tangerine</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Muli" size="4">Muli</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Just Me Again Down Here" size="4">Just Me Again Down Here</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Great Vibes" size="4">Great Vibes</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Cousine" size="4">Cousine</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Merienda One" size="4">Merienda One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Monoton" size="4">Monoton</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Ubuntu Condensed" size="4">Ubuntu Condensed</font></a></li>
                           <li><a href="javascript:void(0);"><font face="EB Garamond" size="4">EB Garamond</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Droid Serif" size="4">Droid Serif</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Bangers" size="4">Bangers</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Pacifico" size="4">Pacifico</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Luckiest Guy" size="4">Luckiest Guy</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Courgette" size="4">Courgette</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Over the Rainbow" size="4">Over the Rainbow</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Nothing You Could Do" size="4">Nothing You Could Do</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Titillium Web" size="4">Titillium Web</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Share" size="4">Share</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Crimson Text" size="4">Crimson Text</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Squada One" size="4">Squada One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Carter One" size="4">Carter One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Wallpoet" size="4">Wallpoet</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Spirax" size="4">Spirax</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Kavoon" size="4">Kavoon</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Vollkorn" size="4">Vollkorn</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Sansita One" size="4">Sansita One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Noticia Text" size="4">Noticia Text</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Slabo 27px" size="4">Slabo 27px</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Open Sans" size="4">Open Sans</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Open Sans" size="4">Open Sans Condensed</font></a></li>                           
                           <li><a href="javascript:void(0);"><font face="Forum" size="4">Forum</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Bevan" size="4">Bevan</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Handlee" size="4">Handlee</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Play" size="4">Play</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Coming Soon" size="4">Coming Soon</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Sacramento" size="4">Sacramento</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Oxygen" size="4">Oxygen</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Lemon" size="4">Lemon</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Homemade Apple" size="4">Homemade Apple</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Annie Use Your Telescope" size="4">Annie Use Your Telescope</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Love Ya Like A Sister" size="4">Love Ya Like A Sister</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Allan" size="4">Allan</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Patua One" size="4">Patua One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Dancing Script" size="4">Dancing Script</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Slackey" size="4">Slackey</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Covered By Your Grace" size="4">Covered By Your Grace</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Griffy" size="4">Griffy</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Indie Flower" size="4">Indie Flower</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Ceviche One" size="4">Ceviche One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Bree Serif" size="4">Bree Serif</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Comfortaa" size="4">Comfortaa</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Cuprum" size="4">Cuprum</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Coda" size="4">Coda</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Nunito" size="4">Nunito</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Gruppo" size="4">Gruppo</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Chewy" size="4">Chewy</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Audiowide" size="4">Audiowide</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Sanchez" size="4">Sanchez</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Kaushan Script" size="4">Kaushan Script</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Leckerli One" size="4">Leckerli One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Merriweather" size="4">Merriweather</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Signika" size="4">Signika</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Damion" size="4">Damion</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Roboto Condensed" size="4">Roboto Condensed</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Kranky" size="4">Kranky</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Metamorphous" size="4">Metamorphous</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Inconsolata" size="4">Inconsolata</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Anonymous Pro" size="4">Anonymous Pro</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Lusitana" size="4">Lusitana</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Yanone Kaffeesatz" size="4">Yanone Kaffeesatz</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Archivo Narrow" size="4">Archivo Narrow</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Alegreya" size="4">Alegreya</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Francois One" size="4">Francois One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Slabo 13px" size="4">Slabo 13px</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Nova Square" size="4">Nova Square</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Righteous" size="4">Righteous</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Vidaloka" size="4">Vidaloka</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Passion One" size="4">Passion One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Iceland" size="4">Iceland</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Rochester" size="4">Rochester</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Amatic SC" size="4">Amatic SC</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Changa One" size="4">Changa One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Loved by the King" size="4">Loved by the King</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Delius" size="4">Delius</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Satisfy" size="4">Satisfy</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Black Ops One" size="4">Black Ops One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Salsa" size="4">Salsa</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Roboto Slab" size="4">Roboto Slab</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Rancho" size="4">Rancho</font></a></li>
                           <li><a href="javascript:void(0);"><font face="VT323" size="4">VT323</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Cookie" size="4">Cookie</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Shadows Into Light Two" size="4"></font>Shadows Into Light Two</a></li>
                           <li><a href="javascript:void(0);"><font face="Fjalla One" size="4">Fjalla One</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Rock Salt" size="4">Rock Salt</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Roboto" size="4">Roboto</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Cinzel" size="4">Cinzel</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Architects Daughter" size="4">Architects Daughter</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Freckle Face" size="4">Freckle Face</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Oswald" size="4">Oswald</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Playball" size="4">Playball</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Special Elite" size="4">Special Elite</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Montserrat" size="4">Montserrat</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Raleway" size="4">Raleway</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Abril Fatface" size="4">Abril Fatface</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Playfair Display SC" size="4"></font>Playfair Display SC</a></li>
                           <li><a href="javascript:void(0);"><font face="Berkshire Swash" size="4">Berkshire Swash</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Old Standard TT" size="4">Old Standard TT</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Pinyon Script" size="4">Pinyon Script</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Lobster Two" size="4">Lobster Two</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Mountains of Christmas" size="4">Mountains of Christmas</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Boogaloo" size="4">Boogaloo</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Monsieur La Doulaise" size="4">Monsieur La Doulaise</font></a></li>
                           <li><a href="javascript:void(0);"><font face="scriptina" size="4">Scriptina</font></a></li>
                           <li><a href="javascript:void(0);"><font face="Isabella Script" size="4">Isabella</font></a></li>
                        </ul>
                     </div>
                              <div class="input-group" style="display:inline-block;">
                                    <input type="text" class="fontinput form-control" id="fontsize" name="fontsize" min="0" max="100" value="6" style="width:50px; display:inline-block;">
                                    <div class="input-group-btn" style="display:inline-block;">
                        <span id="fzbutton" title="Font Size" class="tools-top btn btn-default fzbutton-container" style="padding:2px 5px;"> <i id="fontsizeInc" class="fa fa fa-caret-up fzbutton" style="display:block;"></i> <i id="fontsizeDec" class="fa fa-caret-down fzbutton" style="display:block;"></i></span>
                                    </div>
                              </div>
                  </span>
                     <div class="btn-group" role="group" aria-label="...">
                     <a href="javascript:void(0);" id="objectalignleft" title="Align left" class="tools-top btn btn-default"><i class="fa fa-align-left"></i></a>
                     <a href="javascript:void(0);" id="objectaligncenter" title="Align center" class="tools-top btn btn-default"><i class="fa fa-align-center"></i></a>
                     <a href="javascript:void(0);" id="objectalignright" title="Align right" class="tools-top btn btn-default"><i class="fa fa-align-right"></i></a>
                     <a href="javascript:void(0);" id="objectalignjustify" title="Align justify" class="tools-top btn btn-default"><i class="fa fa-align-justify"></i></a>
                     </div>
                     <a href="javascript:void(0);" id="colorSelector" title="Color Picker" class="tools-top btn btn-default" style="padding: 16px 19px;"><!-- <i id='colorbrush' class="fa fa-paint-brush"></i> --></a>
                         <span id='dynamiccolorpickers'></span>
                                <a href="javascript:void(0);" id="clone" title="Clone Object" class="tools-top btn btn-default"><i class="fa fa-clone"></i></a>
                                <span id="objectMoveOption">
                                	<div class="btn-group" role="group" aria-label="...">
                                      <a href="javascript:void(0);" id="sendbackward" title="Send Backward" class="tools-top btn btn-default"><!-- <i class="fa fa-object-ungroup"></i> --><img src="img/send-backward.svg" height="16"/></a>
                                      <a href="javascript:void(0);" id="bringforward" title="Bring Forward" class="tools-top btn btn-default"><!-- <i class="fa fa-object-ungroup"></i> --><img src="img/bring-forward.svg" height="16"/></a>
                                    </div>
                                </span>
                      <a href="javascript:void(0);" id="deleteitem" title="Delete Selected Item" class="tools-top btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                    <div id="showmoreoptions" class="btn-group" style="display:inline-block;">
                                      <button href="javascript:void(0);" id="showmore" data-toggle="dropdown" title="Show More Tools" class="tools-top btn btn-default dropdown-toggle"><span class="caret"></span></button>
                                          <ul class="dropdown-menu dropdown-menu-right">
                                                 <li><a href="javascript:void(0);" id="fontbold" title="Bold" class="tools-top more textelebtns"  style="font-weight:bolder;">Bold</a></li>
                                                 <li><a href="javascript:void(0);" id="fontitalic" title="Italic" class="tools-top more textelebtns" style="font-style: italic;">Italic</a></li>
                                                 <li><a href="javascript:void(0);" id="fontunderline" title="Underline" class="tools-top more textelebtns" style="text-decoration: underline;">Underline</a></li>
                                                 <li><a href="javascript:void(0);" id="lineheight" title="Line Height" class="tools-top more textelebtns noclose" ><img src="img/lineheight.svg" width="14">&nbsp; Line height</a></li>
                                                 <input id="changelineheight" data-slider-id='lineheightSlider' type="text" data-slider-min="0.5" data-slider-max="5" data-slider-step="0.1" data-slider-value="1.3"/>
<!--
                                                 <li><a href="javascript:void(0);" id="horizcenterindent" title="Horizontal center Indent" class="tools-top more" ><span class="glyphicon glyphicon-option-horizontal"></span> Align Horizontal Center</a></li>
                                                 <li><a href="javascript:void(0);" id="verticenterindent" title="Vertical center Indent" class="tools-top more" ><span class="glyphicon glyphicon-option-vertical"></span> Align Vertical Center</a></li>
                                                 <li><a href="javascript:void(0);" id="leftindent" title="Left Align" class="tools-top more" ><span class="glyphicon glyphicon-arrow-left"></span> Align To Left</a></li>
                                                 <li><a href="javascript:void(0);" id="rightindent" title="Right Align" class="tools-top more" ><span class="glyphicon glyphicon-arrow-right"></span> Align To Right</a></li>
 -->
                                                 <li><a href="javascript:void(0);" id="objectfliphorizontal" title="Flip Horizontal" class="tools-top more" ><img src="img/fliphorizontally.png" width="14">&nbsp; Flip Horizontally</a></li>
                                                 <li><a href="javascript:void(0);" id="objectflipvertical" title="Flip Vertical" class="tools-top more" ><img src="img/flipvertically.png" width="14">&nbsp; Flip Vertically</a></li>
                                                 <li><a href="javascript:void(0);" id="objectlock" title="Lock Object" class="tools-top more" ><i class="fa fa-lock"></i>&nbsp;&nbsp; Lock Object</a></li>
                                                 <li><a href="javascript:void(0);" id="objectopacity" title="Opacity" class="tools-top more noclose" ><img src="img/opacity.svg" width="13">&nbsp; Opacity</a></li>
                                                 <input id="changeopacity" data-slider-id='opacitySlider' type="text" data-slider-min="0.1" data-slider-max="1" data-slider-step=".1" data-slider-value="1"/>
                                          </ul>
                                    </div>
                                 <a href="javascript:void(0);" id="cropimage" title="Crop Selected Image" class="tools-top btn btn-default">Crop Image</a>
                                 <a href="javascript:void(0);" id="replace_image" title="Replace image" class="tools-top btn btn-default">Replace image</a>
                                <span id="imagecropOptions">
                                     <a href="javascript:zoomBy(0,0,10);" title="zoomBy" class="tools-top btn btn-default"><i class="fa fa-search-plus"></i></a>
                                     <a href="javascript:zoomBy(0,0,-10);" title="zoomBy" class="tools-top btn btn-default"><i class="fa fa-search-minus"></i></a>
                                     <a href="javascript:zoomBy(-5,0,0);" title="zoomBy" class="tools-top btn btn-default"><i class="fa fa-arrow-left"></i></a>
                                     <a href="javascript:zoomBy(5,0,0);" title="zoomBy" class="tools-top btn btn-default"><i class="fa fa-arrow-right"></i></a>
                                     <a href="javascript:zoomBy(0,-5,0);" title="zoomBy" class="tools-top btn btn-default"><i class="fa fa-arrow-up"></i></a>
                                     <a href="javascript:zoomBy(0,5,0);" title="zoomBy" class="tools-top btn btn-default"><i class="fa fa-arrow-down"></i></a>
                                </span>
                  </span>
                  </div>
               </div>
               <!-- end tools-top -->
              <div class="tab-content" id='canvasbox-tab' style='margin-top:80px; text-align: -webkit-center; display: inline-block;' align="center">
                  <span id='infotext' style='font-size: 10px; opacity: 0.8; position: relative; left: 0px; top: 0px; z-index: 1000;'></span>
                     <div id='canvaspages' tabindex="0" style='outline:none;'>
                           <div class="page" id='page0'>
                           </div>
                     </div> 
                       <div style="display:none; float:right; margin-top: -240px; margin-right: 112px; color:#ffffff;">
                       <i id='duplicatecanvas' class="fa fa-files-o fa-lg duplicatecanvas" style='z-index:1000; cursor:pointer; color:#ffffff;'></i></br></br>
                       <i id='deletecanvas' class="fa fa-trash-o fa-lg deletecanvas" style='z-index:1000; cursor:pointer; color:#ffffff;'></i>
                  </div>
                  <button onClick='javascript:addNewCanvasPage();' id="addnewpagebutton" class="btn" type="button" style="width:150px; margin:20px 0; padding:10px; border:1px solid #555;"> + Add a New Page</button>
                  <!--<button onClick='javascript:toSVG();' id="tosvgbtn" class="btn" type="button" style="width:150px; margin:20px 0; padding:10px; border:1px solid #555;"> + Check SVG</button>-->
                  <div style="display:none;">
                        <canvas id="outputcanvas" width="750" height="600" class="canvas"></canvas>
                  </div>
                  <div style="display:none;">
                        <canvas id="tempcanvas" width="100" height="100" class="canvas"></canvas>
                  </div>
               </div>
               <!-- /tab-content -->
            </div>
         </div>
         <!-- /.row -->
      </div>
      <!-- Save Modal HTML -->
<!--
      <div id="templateSaveModal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content" style="width:300px; margin:250px 0px 0px 125px;">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Save Template</h4>
               </div>
               <div class="modal-body" style="margin-top:-30px; ">
                  <div class="body">
                     <button type="button" class="btn bg-orange btn-small" id="saveimage"><i class="fa fa-cloud-download"></i> Save Template for Editing Work</button><br>
                  </div>
                  <div class="footer">
                     <button type="submit" class="btn bg-orange btn-small" onClick="javascript:$('#templateSaveModal').modal('hide');"><i class="fa fa-close"></i> Cancel</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
 -->
      <!-- Publish Modal HTML -->
<!--
      <div id="publishModal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content" style="width:300px; margin:250px 0px 0px 125px;">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Publish</h4>
               </div>
               <div class="modal-body" style="margin-top:-30px; ">
                  <div class="body">
                     <button type="button" class="btn bg-orange btn-small" id="downloadAsPDF"><i class="fa fa-cloud-download"></i> Save as PDF</button>
                     <button type="button" class="btn bg-orange btn-small" id="downloadAsJPEG"><i class="fa fa-cloud-download"></i> Save as JPEG</button>
                  </div>
                  <div class="footer">
                     <button type="submit" class="btn bg-orange btn-small" onClick="javascript:$('#publishModal').modal('hide');"><i class="fa fa-close"></i> Cancel</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
 -->
      <!-- Success Modal HTML -->
      <div id="successModal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content modal-content-300">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Success</h4>
               </div>
               <div class="modal-body" style="margin-top:-30px; ">
                  <div class="body">
                     <span id="successMessage"></span>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
               </div>
            </div>
         </div>
      </div>
      <!-- Alert Modal HTML -->
      <div id="alertModal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content modal-content-300">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Alert</h4>
               </div>
               <div class="modal-body" style="margin-top:-30px; ">
                  <div class="body">
                     <span id="responceMessage"></span>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
               </div>
            </div>
         </div>
      </div>
      <!-- Add Category Modal HTML -->
      <div id="Addcategoryodal" class="modal fade">
         <div class="modal-dialog modal-content-400">
            <div class="modal-content">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Add Category</h4>
               </div>
               <form role="form" name="addcategoryform" id="addcategoryform">
                  <div class="modal-body" style="margin-top:-30px; ">
                     <div class="row">
                        <div class="form-group col-lg-12">
                           <label for="category">Category</label>
                           <input type="text" name="category" id="category" class="form-control" placeholder="Enter Category">
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="modal-footer clearfix">
                     <button type="reset" class="btn btn-default btn-small" data-dismiss="modal" >Cancel</button>
                     <button type="submit" class="btn btn-default btn-small" >Add</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Delete Template Category Modal HTML -->
      <div id="Del_templatecatmodal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content modal-content-400">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Delete Category</h4>
               </div>
               <div class="modal-body" style="margin-top:-30px; ">
                  <div class="body">
                     <span>Are you sure you want to delete the category?</span>
                  </div>
               </div>
                  <div class="modal-footer clearfix">
                     <button type="button" class="btn btn-default" data-dismiss="modal" onClick="javascript:proceed_tempcatdelete();" >Yes</button>
                     <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                  </div>
            </div>
         </div>
      </div>
      <!-- Delete Category Modal HTML -->
      <div id="Del_catmodal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content modal-content-400">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Delete Category</h4>
               </div>
               <div class="modal-body" style="margin-top:-30px; ">
                  <div class="body">
                     <span>Are you sure you want to delete the category?</span>
                  </div>
               </div>
                  <div class="modal-footer clearfix">
                     <button type="button" class="btn btn-default" data-dismiss="modal" onClick="javascript:proceed_catdelete();" >Yes</button>
                     <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                  </div>
            </div>
         </div>
      </div>
      <!-- Delete Bg Category Modal HTML -->
      <div id="Del_bgcatmodal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content modal-content-400">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Delete Category</h4>
               </div>
               <div class="modal-body" style="margin-top:-30px; ">
                  <div class="body">
                     <span>Are you sure you want to delete the category?</span>
                  </div>
               </div>
                  <div class="modal-footer clearfix">
                     <button type="button" class="btn btn-default" data-dismiss="modal" onClick="javascript:proceed_Bgcatdelete();" >Yes</button>
                     <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                  </div>
            </div>
         </div>
      </div>
      <!-- Delete Text Category Modal HTML -->
      <div id="Del_textcatmodal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content modal-content-400">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Delete Category</h4>
               </div>
               <div class="modal-body" style="margin-top:-30px; ">
                  <div class="body">
                     <span>Are you sure you want to delete the category?</span>
                  </div>
               </div>
                  <div class="modal-footer clearfix">
                     <button type="button" class="btn btn-default" data-dismiss="modal" onClick="javascript:proceed_textcatdelete();" >Yes</button>
                     <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                  </div>
            </div>
         </div>
      </div>
      <!-- Add Category Modal HTML -->
      <div id="AddTemplatecategoryModal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content modal-content-400">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Add Category</h4>
               </div>
               <form role="form" name="addtemplatecategoryform" id="addtemplatecategoryform">
                  <div class="modal-body" style="margin-top:-30px; ">
                     <div class="row">
                        <div class="form-group col-lg-12">
                           <label for="category">Category</label>
                           <input type="text" name="templatecategory" id="templatecategory" class="form-control" placeholder="Enter Category">
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="modal-footer clearfix">
                     <button type="reset" class="btn btn-default btn-small" data-dismiss="modal" >Cancel</button>
                     <button type="submit" class="btn btn-default btn-small" >Add</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Add Text Category Modal HTML -->
      <div id="AddTextcategoryModal" class="modal fade">
         <div class="modal-dialog modal-content-400">
            <div class="modal-content">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Add Text Category</h4>
               </div>
               <form role="form" name="addtextcategoryform" id="addtextcategoryform">
                  <div class="modal-body" style="margin-top:-30px; ">
                     <div class="row">
                        <div class="form-group col-lg-12">
                           <label for="category">Category</label>
                           <input type="text" name="textcategory" id="textcategory" class="form-control" placeholder="Enter Text Category">
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="modal-footer clearfix">
                     <button type="reset" class="btn btn-default btn-small" data-dismiss="modal" >Cancel</button>
                     <button type="submit" class="btn btn-default btn-small" >Add</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Save Template Modal HTML -->
      <div id="savetemplate_modal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content modal-content-500">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Save Flyer</h4>
               </div>
               <div class="modal-body" style="margin-top:-30px; ">
                  <div class="body">
                     <span><label for="template">Category :</label>
                           <select class="form-control" name="template_category" id="template_category" >
                              <option value="">Select Category</option>
                           </select>
                              </span></br>
                     <span><label for="template">Flyer Name :</label>
                           <input type="text" name="templatename" id="templatename" class="form-control" placeholder="Enter Name"></span>
                  </div>
               </div>
                  <div class="modal-footer clearfix">
                     <button type="button" class="btn btn-default" data-dismiss="modal" onClick="javascript:proceed_savetemplate();" >Submit</button>
                  </div>
            </div>
         </div>
      </div>
      <!-- Download Template Modal HTML -->
      <div id="downloadtemplate_modal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content modal-content-500">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Download Flyer</h4>
               </div>
               <div class="modal-body" style="margin-top:-30px; ">
                  <div class="body">
                     <span><label for="template">Flyer Name :</label>
                           <input type="text" name="downtemplatename" id="downtemplatename" class="form-control" placeholder="Enter Name"></span>
                  </div>
               </div>
                  <div class="modal-footer clearfix">
                     <button type="button" class="btn btn-default" data-dismiss="modal" onClick="javascript:downloadTemplateFile();" >Download</button>
                  </div>
            </div>
         </div>
      </div>
      <!-- Save Text Modal HTML -->
      <div id="savetext_modal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content modal-content-500">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Save Text</h4>
               </div>
               <div class="modal-body" style="margin-top:-30px; ">
                  <div class="body">
                     <span><label for="template">Category :</label>
                           <select class="form-control" name="text_category" id="text_category" >
                              <option value="">Select Category</option>
                           </select>
                              </span></br>
                     <span><label for="template">Text Name :</label>
                           <input type="text" name="textname" id="textname" class="form-control" placeholder="Enter Name"></span>
                  </div>
               </div>
                  <div class="modal-footer clearfix">
                     <button type="button" class="btn btn-default" data-dismiss="modal" onClick="javascript:savetextfromselection();" >Submit</button>
                  </div>
            </div>
         </div>
      </div>
      <!-- Save Element Modal HTML -->
      <div id="saveelement_modal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content modal-content-500">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Save Element</h4>
               </div>
               <div class="modal-body" style="margin-top:-30px; ">
                  <div class="body">
                     <span><label for="template">Category :</label>
                           <select class="form-control" name="elmt_category" id="elmt_category" >
                              <option value="">Select Category</option>
                           </select>
                              </span></br>
                     <span><label for="template">Element Name :</label>
                           <input type="text" name="elmtname" id="elmtname" class="form-control" placeholder="Enter Name"></span>
                  </div>
               </div>
                  <div class="modal-footer clearfix">
                     <button type="button" class="btn btn-default" data-dismiss="modal" onClick="javascript:saveelementsfromselection();" >Submit</button>
                  </div>
            </div>
         </div>
      </div>
      <!-- Add Category Modal HTML -->
      <div id="AddBGcategoryodal" class="modal fade">
         <div class="modal-dialog modal-content-400">
            <div class="modal-content">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Add Category</h4>
               </div>
               <form role="form" name="addbgcategoryform" id="addbgcategoryform">
                  <div class="modal-body" style="margin-top:-30px; ">
                     <div class="row">
                        <div class="form-group col-lg-12">
                           <label for="category">Category</label>
                           <input type="text" name="bgcategory" id="bgcategory" class="form-control" placeholder="Enter Category">
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="modal-footer clearfix">
                     <button type="reset" class="btn btn-default btn-small" data-dismiss="modal" >Cancel</button>
                     <button type="submit" class="btn btn-default btn-small" >Add</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Canvas h/w Modal HTML -->
      <div id="canvaswh_modal" class="modal fade" data-keyboard="false" data-backdrop="static">
         <div class="modal-dialog">
            <div class="modal-content modal-content-400">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>-->
                  <h4 class="modal-title">Canvas Width / Height</h4>
               </div>
                   <form action="#" name="canvaswhForm" id="canvaswhForm" method="post">
               <div class="modal-body" style="margin-top:-30px; ">
                  <div class="body">
                     <span><label for="template">Canvas width (in inches):</label>
                           <input type="text" name="loadCanvasWid" id="loadCanvasWid" class="form-control" placeholder="Enter Width" value='8.627'>
                              </span></br>
                     <span><label for="template">Canvas height (in inches):</label>
                           <input type="text" name="loadCanvasHei" id="loadCanvasHei" class="form-control" placeholder="Enter Height" value='11.103'></span>
</br>
                     <span><label for="template">Number of Canvas rows</label>
                           <input type="text" name="numOfcanvasrows" id="numOfcanvasrows" class="form-control" value="1"></span>
</br>
                     <span><label for="template">Number of Canvas columns</label>
                           <input type="text" name="numOfcanvascols" id="numOfcanvascols" class="form-control" value="1"></span>
                  </div>
               </div>
                  <div class="modal-footer clearfix">
                     <button type="submit" class="btn btn-default">Submit</button>
                  </div>
                   </form>
            </div>
         </div>
      </div>
      <div id="spinnerModal" class="modal fade" data-backdrop="static" data-keyboard="false"><i class="fa fa-cog fa-spin" style="position: absolute; top: 50%; left: 50%; margin-top: -75px; margin-left: -75px; font-size: 150px;"></i></div>
      <!-- Imgae Alert Modal HTML -->
      <div id="imagealertModal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content modal-content-400">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">IMAGE FILE FORMAT / SIZE MISMATCH.</h4>
               </div>
               <div class="modal-body" style="margin-top:-30px; ">
                  <div class="body">
                    <label>Please upload your image format in JPG/PNG/GIF. Each file size is limited to 20 MB.</label>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
               </div>
            </div>
         </div>
      </div>
      <!-- Add Element Modal HTML -->
      <div id="AddelementModal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content modal-content-500">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Add Element</h4>
               </div>
               <form role="form" name="addelementform" id="addelementform">
                  <div class="modal-body" style="margin-top:-30px; ">
                     <div class="row">
                        <div class="form-group col-lg-12">
                           <label for="element_category">Category</label>
                           <select class="form-control" name="element_category" id="element_category" >
                              <option value="">Select Category</option>
                           </select>
                        </div>
                        <div class="form-group col-lg-12">
                           <label for="element_name">Element Name</label>
                           <input type="text" name="element_name" id="element_name" class="form-control" placeholder="Enter Element">
                        </div>
                        <div class="form-group col-lg-12">
                           <label name="element">Element</label>
                        </div>
                        <div class="form-group element-upload col-lg-3">
                           <label for="element_img" class="btn btn-default btn-block"><i class="fa fa-cloud-upload"></i> Upload</label>
                           <input id="element_img" type="file" onchange="readIMG(this);" name="element_img" />
                        </div>
                                          <img id="previewImage" src="#" alt="Your image" style="display:none;" />
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="modal-footer clearfix">
                     <button type="reset" class="btn btn-default btn-small" data-dismiss="modal" >Cancel</button>
                     <button type="submit" class="btn btn-default btn-small" >Add</button>
                  </div>
               </form>
            </div>
         </div>
      </div>

        <!-- Crop image Modal -->
	      <div class="modal fade" id="crop_imagepopup" aria-labelledby="modalLabel" role="dialog" tabindex="-1">
	        <div class="modal-dialog" role="document">
	          <div class="modal-content">
	            <div class="modal-header">
	              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	              <h4 class="modal-title" id="modalLabel">Crop the image</h4>
	            </div>
	            <div class="modal-body">
	              <div>
	                <img id="imagetocrop" src="img/429.png" alt="Picture">
	              </div>
      
         <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move" onClick='javascript:setDragMode("move");'>
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.setDragMode(&quot;move&quot;)">
              <span class="fa fa-arrows"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop" onClick='javascript:setDragMode("crop");'>
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.setDragMode(&quot;crop&quot;)">
              <span class="fa fa-crop"></span>
            </span>
          </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In" onClick='javascript:zoom(0.1);'>
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(0.1)">
              <span class="fa fa-search-plus"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out" onClick="javascript:zoom(-0.1);">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(-0.1)">
              <span class="fa fa-search-minus"></span>
            </span>
          </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="move" data-option="-10" data-second-option="0" title="Move Left" onClick="javascript:move(-10,0);">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(-10, 0)">
              <span class="fa fa-arrow-left"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="move" data-option="10" data-second-option="0" title="Move Right" onClick="javascript:move(10,0);">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(10, 0)">
              <span class="fa fa-arrow-right"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="-10" title="Move Up" onClick='javascript:move(0,-10);'>
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(0, -10)">
              <span class="fa fa-arrow-up"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="move" data-option="0" data-second-option="10" title="Move Down" onClick='javascript:move(0,10);'>
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.move(0, 10)">
              <span class="fa fa-arrow-down"></span>
            </span>
          </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left" onClick="javascript:rotate(-45);">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotate(-45)">
              <span class="fa fa-rotate-left"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="rotate" data-option="45" title="Rotate Right" onClick="javascript:rotate(45);">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotate(45)">
              <span class="fa fa-rotate-right"></span>
            </span>
          </button>
        </div>
        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="scaleX" data-option="-1" title="Flip Horizontal" onClick="javascript:scaleX(-1);">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.scaleX(-1)">
              <span class="fa fa-arrows-h"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="scaleY" data-option="-1" title="Flip Vertical" onClick="javascript:scaleY(-1);">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.scaleY(-1)">
              <span class="fa fa-arrows-v"></span>
            </span>
          </button>
        </div>

        <!--<div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="crop" title="Crop" onClick="javascript:crop();">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.crop()">
              <span class="fa fa-check"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="clear" title="Clear" onClick="javascript:clear();">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.clear()">
              <span class="fa fa-remove"></span>
            </span>
          </button>
        </div>-->

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="disable" title="Disable" onClick="javascript:disable();">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.disable()">
              <span class="fa fa-lock"></span>
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="enable" title="Enable" onClick="javascript:enable();">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.enable()">
              <span class="fa fa-unlock"></span>
            </span>
          </button>
        </div>

        <div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="reset" title="Reset" onClick="javascript:reset();">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.reset()">
              <span class="fa fa-refresh"></span>
            </span>
          </button>

        </div>
         <button type="button" class="btn btn-primary" title="Save" data-method="getCroppedCanvas" id="getCroppedCanvas" name='getCroppedCanvas'>Save</button>

	            </div>
	            <div class="modal-footer">
	              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	            </div>
	          </div>
	        </div>
    	</div>
      <!-- Add Background Modal HTML -->
      <div id="AddbackgroundModal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content modal-content-500">
               <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; ">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                  <h4 class="modal-title">Add Background</h4>
               </div>
               <form role="form" name="addbackgroundform" id="addbackgroundform">
                  <div class="modal-body" style="margin-top:-30px; ">
                     <div class="row">
                        <div class="form-group col-lg-12">
                           <label for="element_category">Category</label>
                           <select class="form-control" name="bg_category" id="bg_category" >
                              <option value="">Select Category</option>
                           </select>
                        </div>
                        <div class="form-group col-lg-12">
                           <label for="element_name">Background Name</label>
                           <input type="text" name="bg_name" id="bg_name" class="form-control" placeholder="Enter Background Name">
                        </div>
                        <div class="form-group col-lg-12">
                           <label name="background">Background</label>
                        </div>
                        <div class="form-group bg-upload col-lg-3">
                           <label for="bg_img" class="btn btn-default btn-block"><i class="fa fa-cloud-upload"></i> Upload</label>
                           <input id="bg_img" type="file" onchange="readBGIMG(this);" name="bg_img" />
                        </div>
                                          <img id="previewBGImage" src="#" alt="Your image" style="display:none;" />
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="modal-footer clearfix">
                     <button type="reset" class="btn btn-default btn-small" data-dismiss="modal" >Cancel</button>
                     <button type="submit" class="btn btn-default btn-small" >Add</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- Upload Image Popup -->
	<div id="AdduploadimageModal" class="modal fade edit-object" tabindex="-1" role="dialog" aria-labelledby="imageModalTitle" aria-hidden="true" data-editor-image-modal>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="imageModalTitle">Add Image</h4>
			</div>
			<div class="modal-body">
				<div class="images-insert">
					<div class="row">
						<div class="col-lg-5 imageBG-upload">
                                          <form id="upload" action="uploadimage.php" method="POST" enctype="multipart/form-data">
                                             <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="20000000" />
                                             <label for="fileselect" class="images-button btn btn-block btn-lg btn-primary"><i class="fa fa-cloud-upload"></i> Upload image</label>
                                             <input id="fileselect" type="file" name="fileselect[]" />
                                          </form>
                                          <div id="progress"></div>
						</div>
						<!--<div class="col-lg-2 h1 text-center no-margin">
							or
						</div>
						<div class="col-lg-5">
							<input type="url" class="images-url form-control input-lg" placeholder="Paste image URL">
						</div>-->
					</div>
					<div id="image_container" style="position: relative;height:450px;">
					</div>
					<!-- // for pagination purpose
					<div class="pagination"></div>-->
				</div>
			</div>
		</div>
	</div>
                   
   </body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>
<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/bootstrap-slider.js"></script>
<script type="text/javascript" src="js/fabric1.6.js"></script>
<script type="text/javascript" src="js/aligning_guidelines.js"></script>
<script type="text/javascript" src="js/centering_guidelines.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/validation-methods.js"></script>
<script src="js/jquery-validate.bootstrap-tooltip.js"></script>
<script src="js/filedrag.js" type="text/javascript"></script>
<script type="text/javascript" src="js/spectrum.js"></script>
<script type="text/javascript" src="js/cropper.min.js"></script>
<script type="text/javascript">
      var tempcanvas = new fabric.Canvas('tempcanvas');
      var canvas = new fabric.Canvas('canvas0');
      canvas.rotationCursor = 'url("img/rotatecursor2.png") 10 10, crosshair';
      canvas.backgroundColor = '#ffffff';
      var selectedFont = 'Arial';
      var fillColor = '#000000';
</script>
<!-- our site js -->
<script src="js/functions.js" type="text/javascript"></script>
<script src="js/canvasevents.js" type="text/javascript"></script>
<script>

// Wait for window load
$(window).load(function() {
    // Animate loader off screen
    $("#loadingpage").fadeOut("slow");
    $("#canvaswh_modal").modal('show');
    if (window.location.href.indexOf('?newtemplate') != -1) {
        $("#canvaswh_modal").modal('show');
    }
    $('.deletecanvas').css('display', 'none');
});

var Istempselected = false;
var Iscatselected = false;
var IsBgselected = false;
var IsTextselected = false;
$(document).ready(function() {

    setTimeout(function() {
        getTemplates('');
    }, 1250);
    setTimeout(function() {
        gettempcategory();
    }, 1500);
    setTimeout(function() {
        getTemplatesName();
    }, 1750);
    setTimeout(function() {
        getcategory();
    }, 2000);
   setTimeout(function() {
        getuploadimages();
    }, 3000);
    $('#cat-select').change(function() {
        var selectedID = $(this).val();
        Iscatselected = true;
        $('#catimage_container').empty();
        getcatimages(selectedID);
    });
    $('#tempcat-select').on('change', function() {
        Istempselected = true;
        $('#template_container').empty();
        getTemplates($(this).val());
    });
    $('#textcat-select').on('change', function() {
        Istextselected = true;
        $('#text_container').empty();
        getTexts($(this).val());
    });
    $('#bgcat-select').on('change', function() {
        IsBgselected = true;
        $('#background_container').empty();
        getbgimages($(this).val());
    });
});

$('#addPictureArea').on('click', function(e) {
    addPictureArea();
});

//Do not close dropdown with checkbox
$('.noclose').on('click', function(e) {
    e.stopPropagation();
});
//Show/hide dropdown submenu
$(document).ready(function() {
    $(".dropdown-submenu").click(function(event) {
        // stop bootstrap.js to hide the parents
        event.stopPropagation();
        // hide the open children
        $(this).find(".dropdown-submenu").removeClass('open');
        // add 'open' class to all parents with class 'dropdown-submenu'
        $(this).parents(".dropdown-submenu").addClass('open');
        // this is also open (or was)
        $(this).toggleClass('open');
    });
});

$(document).on("click", ".catImage", function() {
    var imagepath = $(this).data('imgsrc');
    addSVGToCanvas(imagepath);
    return false;
});
$(document).on("click", ".bgImage", function() {
    var bgimagepath = $(this).data('imgsrc');
    setCanvasBg(canvas, bgimagepath);
    return false;
});
$(document).on("click", "#bgImageRemove", function() {
    deleteCanvasBg(canvas);
    return false;
});
$("#publishTemplate").click(function() {
    $("#publishModal").modal('show');
});
$(function() {
    $(".fzbutton").on("click", function() {
        var $button = $(this);
        var oldValue = $("#fontsize").val();
        if ($button.attr("id") == "fontsizeInc") {
            if (oldValue.toString().indexOf('.') != -1) {
                var newVal = Math.ceil(parseFloat(oldValue));
            } else {
                var newVal = parseFloat(oldValue) + 1;
            }
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                if (oldValue.toString().indexOf('.') != -1) {
                    var newVal = Math.floor(parseFloat(oldValue));
                } else {
                    var newVal = parseFloat(oldValue) - 1;
                }
            } else {
                newVal = 0;
            }
        }
        $("#fontsize").val(newVal);
        $("#fontsize").change();
    });
});
$("#colorSelector").spectrum({
    showAlpha: false,
    showPalette: true,
    //maxSelectionSize: 2,
    preferredFormat: "hex",
    hideAfterPaletteSelect: true,
    showInput: true,
    move: function(color) {
        var colorVal = color.toHexString(); // #ff0000
        changeObjectColor(colorVal);
        $('#colorSelector').css('backgroundColor', colorVal);
    },
});
$("#upload_image").click(function() {

    $('#AdduploadimageModal').modal({
        show: true
    })
});

$('#AdduploadimageModal').on('shown.bs.modal', function(e) {

    var $grid = $('#image_container');

    $grid.imagesLoaded().progress(function() {
        $grid.isotope('layout');
        $grid.isotope('reloadItems');
    });
});

$(function () {
  var $image = $('#imagetocrop');
  var cropBoxData;
  var canvasData;
  $('#crop_imagepopup').on('shown.bs.modal', function () {
    $image.cropper({
      autoCropArea: 0.5,
      built: function () {
        $image.cropper('setCanvasData', canvasData);
        $image.cropper('setCropBoxData', cropBoxData);
      }
    });
  }).on('hidden.bs.modal', function () {
    cropBoxData = $image.cropper('getCropBoxData');
    canvasData = $image.cropper('getCanvasData');
    $image.cropper('destroy');
  });
});
$("#bgcolorselect").spectrum({
    //flat: true,
    hideAfterPaletteSelect: true,
    move: function(color) {
        var colorVal = color.toHexString(); // #ff0000
        deleteCanvasBg(canvas);
        canvas.setBackgroundColor(colorVal, canvas.renderAll.bind(canvas));
        canvas.bgcolor = colorVal;
        //$('#bgcolorselect').css('backgroundColor', colorVal);
    },
});

jQuery(function($) {
    $('#a').on('scroll', function() {
        if ($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
            if ($('#tempcat-select').val() != '') {
                getTemplates($('#tempcat-select').val());
            } else {
                getTemplates();
            }
        }
    });
    $('#c').on('scroll', function() {
        if ($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
            if ($('#cat-select').val() != '') {
                getcatimages($('#cat-select').val());
            } else {
                getcatimages();
            }
        }
    });
    $('#d').on('scroll', function() {
        if ($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
            if ($('#cat-select').val() != '') {
                getbgimages($('#bgcat-select').val());
            } else {
                getbgimages();
            }
        }
    });
});
var catoffset = 0;
// get Category Images
function getcatimages(id) {
    if (typeof id != 'undefined') {
        var catId = id;
    } else {
        var catId = '';
    }
    if (Iscatselected == false) {
        var lastelement = $('#catimage_container').children().last().attr('id');
        if (typeof lastelement != 'undefined') {
            catoffset = lastelement;
        }
    } else {
        catoffset = 0;
    }
    $.ajax({
        type: 'GET',
        url: 'get-catimages.php?offset=' + catoffset + '&limit=12&category=' + catId,
        success: function(data) {
            if (data != '') {
                $('#catimage_container').append(data);
                Iscatselected = false;
            } else {
                catoffset = 0;
            }
            //$('#catimage_container').empty();
        }
    });
}
var bgoffset = 0;
// get bg Images
function getbgimages(id) {
    if (typeof id != 'undefined') {
        var bgcatId = id;
    } else {
        var bgcatId = '';
    }
    if (IsBgselected == false) {
        var lastbackground = $('#background_container').children().last().attr('id');
        if (typeof lastbackground != 'undefined') {
            bgoffset = lastbackground;
        }
    } else {
        bgoffset = 0;
    }
    $.ajax({
        type: 'GET',
        url: 'get-bgimages.php?offset=' + bgoffset + '&limit=12&category=' + bgcatId,
        success: function(data) {
            if (data != '') {
                $('#background_container').append(data);
                IsBgselected = false;
            } else {
                bgoffset = 0;
            }
            //$('#background_container').empty();
        }
    });
}
var tempoffset = 0;
// get Template Images
var templatesloading = false;

function getTemplates(id, refresh) {

    if (templatesloading) return;

    templatesloading = true;

    var $grid = $('#template_container');

    if (refresh) {
        $('#template_container').empty();
        tempoffset = 0;
    }

    $grid.isotope({
        itemSelector: '.thumb',
        masonry: {
            columnWidth: '.thumb'
        }
    });

    if (typeof id != 'undefined') {
        var tempid = id;
    } else {
        var tempid = '';
        tempoffset = 0;
    }

    if (Istempselected == false) {
        var lasttemplate = $grid.children().last().attr('id');
        if (typeof lasttemplate != 'undefined') {
            tempoffset = lasttemplate;
        }
    } else {
        tempoffset = 0;
    }

    $.ajax({
        type: 'GET',
        url: 'get_templates.php?offset=' + tempoffset + '&limit=12&tempid=' + tempid + '&refresh=' + refresh,
        success: function(data) {
            if (data != '') {
                var data = $(data);

                $grid.isotope()
                    .append(data)
                    .isotope('appended', data)
                    .isotope('layout');

                $grid.imagesLoaded().progress(function() {
                    $grid.isotope('layout');
                    $grid.isotope('reloadItems');
                });

                Istempselected = false;
            } else {
                tempoffset = 0;
            }

            templatesloading = false;
        }
    });
}

var textoffset = 0;
// get Text Images
function getTexts(id) {

    var $grid = $('#text_container');

    $grid.isotope({
        itemSelector: '.thumb',
        masonry: {
            columnWidth: '.thumb'
        }
    });
    if (typeof id != 'undefined') {
        var textid = id;
    } else {
        var textid = '';
    }
    if (IsTextselected == false) {
        var lasttext = $('#text_container').children().last().attr('id');
        if (typeof lasttext != 'undefined') {
            textoffset = lasttext;
        }
    } else {
        textoffset = 0;
    }
    $.ajax({
        type: 'GET',
        url: 'get_texts.php?offset=' + textoffset + '&limit=12&textid=' + textid,
        success: function(data) {
            if (data != '') {

                $grid.isotope()
                    .append(data)
                    .isotope('appended', data)
                    .isotope('layout');

                IsTextselected = false;
            } else {
                textoffset = 0;
            }
            //$('#template_container').empty();
        }
    });
}
<!-- canvas Width and height Form Validation -->
$(document).ready(function() {
    $('#canvaswhForm').validate({
        rules: {
            loadCanvasWid: {
                required: true,
                number: true
            },
            loadCanvasHei: {
                required: true,
                number: true
            },
            numOfcanvasrows: {
                required: true,
                number: true
            },
            numOfcanvascols: {
                required: true,
                number: true
            },
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        },
        success: function(element) {
            element.text('').addClass('valid')
                .closest('.form-group').removeClass('has-error').addClass('has-success');
            element.remove('label');
        },
        submitHandler: function(form) { // <- only fires when form is valid
            addCanvasToPage();
            setCanvasSize();
        }
    });
});
$(document).on("click", ".addImage", function() {
    var imgpath = $(this).data('imgsrc');
    addImage(imgpath);
    return false;
});


function addFileToCanvas(imagefile) {
    var actObj = canvas.getActiveObject();
    if (isReplaceImage && actObj && actObj.type == 'cropzoomimage') {
        //replace image
        var img = new Image();
        img.onload = function() {
            var w = actObj.width * actObj.scaleX;
            var h = actObj.height * actObj.scaleY;
            actObj.setElement(img);

            scalex = w / this.width;
            scaley = h / this.height;

            actObj.scaleX = scalex;
            actObj.scaleY = scalex;

            actObj.orgSrc = img.src;
            actObj.src = img.src;

            $("#spinnerModal").modal('hide');
            $("#AdduploadimageModal").modal('hide');
            actObj.setCoords();
            canvas.renderAll();
        }
        img.src = "./uploads/" + imagefile;
        isReplaceImage = false;
    } else {
        fabric.util.loadImage("./uploads/" + imagefile, function(img) {
            var object = new fabric.Cropzoomimage(img, {
                left: canvas.getWidth() / 2,
                top: canvas.getHeight() / 2,
                scaleX: canvasScale / 2,
                scaleY: canvasScale / 2
            });
            object.src = "uploads/" + imagefile;
            canvas.add(object);
            canvas.setActiveObject(object);
            object.center();
            object.setCoords();
            setControlsVisibility(object);

            $("#spinnerModal").modal('hide');
            $("#AdduploadimageModal").modal('hide');

            canvas.renderAll();
            saveState();
        }, {
            crossOrigin: ''
        });
    }
}

function addImage(imgpath) {

    var actObj = canvas.getActiveObject();
    if (isReplaceImage && actObj && actObj.type == 'cropzoomimage') {
        //replace image
        var img = new Image();
        img.onload = function() {

            w = actObj.width * actObj.scaleX;
            h = actObj.height * actObj.scaleY;

            actObj.setElement(img);
            actObj.src = imgpath;
            actObj.orgSrc = imgpath;

            actObj.cw = w;
            actObj.ch = h;

            actObj.scaleX = w/actObj.width;
            actObj.scaleY = h/actObj.height;

            var ih = img.naturalHeight;
            var iw = img.naturalWidth;

            //find the width/height for the aspect ratio.
            var fw, fh;

            var width_ratio  = w  / iw;
            var height_ratio = h / ih;
            if (width_ratio > height_ratio) {
                fw = iw * width_ratio;
                fh = ih*fw/iw;
            } else {
                fh = ih * height_ratio;
                fw = iw*fh/ih;
            }

            if (width_ratio > height_ratio) {
                actObj.asw = actObj.cw = w / width_ratio;
                actObj.ash = actObj.ch = h / width_ratio;
            } else {
                actObj.asw = actObj.cw = w / height_ratio;
                actObj.ash = actObj.ch = h / height_ratio;
            }

            actObj.cx = 0;
            actObj.cy = 0;

            actObj.zoomBy(0, 0, 0, function() {

                actObj.setCoords();
                canvas.renderAll();

                $("#spinnerModal").modal('hide');
                $("#AdduploadimageModal").modal('hide');

            });
        }
        img.src = imgpath;
        isReplaceImage = false;
    } else {
        fabric.util.loadImage(imgpath, function(img) {
            var object = new fabric.Cropzoomimage(img, {
                left: canvas.getWidth() / 2,
                top: canvas.getHeight() / 2,
                scaleX: canvasScale / 2,
                scaleY: canvasScale / 2
            });
            object.src = imgpath;
            canvas.add(object);
            canvas.setActiveObject(object);
            object.center();
            object.setCoords();
            setControlsVisibility(object);

            $("#spinnerModal").modal('hide');
            $("#AdduploadimageModal").modal('hide');

            canvas.renderAll();
            saveState();
        }, {
            crossOrigin: ''
        });
    }
}

function addReplaceImage(object) {

    canvas.add(object);
    canvas.setActiveObject(object);
    canvas.renderAll();
}

var uploadimagesdata;
function getuploadimages() {

    var $grid = $('#image_container');
    $grid.empty();

    $grid.isotope({
        itemSelector: '.thumb',
        masonry: {
            columnWidth: '.thumb'
        }
    });	
    $.ajax({
        type: 'GET',
        url: 'get_uploadimages.php',
        success: function(data) {
            if (data != '') {
                uploadimagesdata = $(data);
                var data = $(data);

                $grid.isotope()
                    .append(data)
                    .isotope('appended', data)
                    .isotope('layout');

                $grid.imagesLoaded().progress(function() {
                    $grid.isotope('layout');
                    $grid.isotope('reloadItems');
                });
            }
        }
    });
}


function handleFileSelect(evt) {
    $("ul.navbar-nav>li.dropdown").removeClass("open");
    var files = evt.target.files; // FileList object
    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {
        // Only process ype files.
        if (f.name.indexOf('.ype') == -1) {
            continue;
        }
        var reader = new FileReader();
        // Closure to capture the file information.
        reader.onload = (function(theFile) {
            return function(e) {
                // Render thumbnail.
                // console.log(e.target.result);
                openTemplate(e.target.result);
            };
        })(f);
        // Read in the image file as a data URL.
        reader.readAsText(f);
    }
}
document.getElementById('templateselect').addEventListener('change', handleFileSelect, false);
$("#showmoreoptions").click(function() {
    $("#opacitySlider").hide();
    $("#lineheightSlider").hide();
    $('#showmoreoptions ul li a').removeClass('temphide');
    var activeObject = canvas.getActiveObject();
    if (activeObject) {
        if (activeObject.lockMovementY == true) {
            $('#objectlock').html("<i class='fa fa-unlock'></i>&nbsp; Unlock Object");
        } else {
            $('#objectlock').html("<i class='fa fa-lock' style='font-size:16px;'></i>&nbsp;&nbsp; Lock Object");
        }
        var objectopacity = activeObject.getOpacity();
        $("#changeopacity").slider('setValue', objectopacity);
    }
});
$("#objectopacity").click(function() {
    $("#opacitySlider").toggle();
    $("#showmoreoptions ul li a").each(function() {
        if ($(this).css("display") == "block") {
            $(this).not("#objectopacity").addClass('temphide');
        }
    });
});
$("#lineheight").click(function() {
    $("#lineheightSlider").toggle();
    $("#showmoreoptions ul li a").each(function() {
        if ($(this).css("display") == "block") {
            $(this).not("#lineheight").addClass('temphide');
        }
    });
});
$('#changeopacity').slider({
    formatter: function(value) {
        return value * 100 + '%';
    }
});
$('#bgscale').slider({
    formatter: function(value) {
        return value * 100 + '%';
    }
});

function handleContextmenu(e) {
    // prevents the usual context from popping up
    e.preventDefault();
    // Show contextmenu
    $(".custom-menu").finish().toggle(100).
        // In the right position (the mouse)
    css({
        top: e.pageY + "px",
        left: e.pageX + "px"
    });
}
//Disable context menu
$("#canvasbox-tab").bind('contextmenu', function(e) {
    handleContextmenu(e);
    return false;
});
// If the menu element is clicked
$(".custom-menu li").click(function() {
    // This is the triggered action name
    switch ($(this).attr("data-action")) {
        // A case for each action. Your actions here
        case "selectall":
            selectallobjs();
            break;
        case "copy":
            copyobjs();
            break;
        case "cut":
            cutobjs();
            break;
        case "paste":
            pasteobjs();
            break;
    }
    // Hide it AFTER the action was triggered
    $(".custom-menu").hide(100);
});
//hide tab pane by clicking again
$(document).off('click.tab.data-api');
$(document).on('click.tab.data-api', '[data-toggle="tab"]', function(e) {
    e.preventDefault();
    var tab = $($(this).attr('href'));
    var activate = !tab.hasClass('active');
    $('div.tab-content>div.tab-pane.active').removeClass('active');
    $('ul.nav.nav-tabs>li.active').removeClass('active');
    if (activate) {
        $(this).tab('show')
    }
});

// Prevent the backspace key from navigating back.
$(document).unbind('keydown').bind('keydown', function(event) {
    var doPrevent = false;
    if (event.keyCode === 8) {
        var d = event.srcElement || event.target;
        if ((d.tagName.toUpperCase() === 'INPUT' &&
                (
                    d.type.toUpperCase() === 'TEXT' ||
                    d.type.toUpperCase() === 'PASSWORD' ||
                    d.type.toUpperCase() === 'FILE' ||
                    d.type.toUpperCase() === 'SEARCH' ||
                    d.type.toUpperCase() === 'EMAIL' ||
                    d.type.toUpperCase() === 'NUMBER' ||
                    d.type.toUpperCase() === 'DATE')
            ) ||
            d.tagName.toUpperCase() === 'TEXTAREA') {
            doPrevent = d.readOnly || d.disabled;
        } else {
            doPrevent = true;
        }
    }

    if (doPrevent) {
        event.preventDefault();
    }
});
function setDragMode(mode) {
    $('#imagetocrop').cropper('setDragMode', mode);
}

function zoom(val) {
    $('#imagetocrop').cropper('zoom', val);
}

function move(val1, val2) {
    $('#imagetocrop').cropper('move', val1, val2);
}

function rotate(val) {
    $('#imagetocrop').cropper('rotate', val);
}

function scaleX(val) {
    $('#imagetocrop').cropper('scaleX', val);
}

function scaleY(val) {
    $('#imagetocrop').cropper('scaleY', val);
}

function crop(mode) {
    $('#imagetocrop').cropper('crop', mode);
}

function clear(mode) {
    $('#imagetocrop').cropper('clear', mode);
}

function disable(mode) {
    $('#imagetocrop').cropper('disable', mode);
}

function enable(mode) {
    $('#imagetocrop').cropper('enable', mode);
}

function reset(mode) {
    $('#imagetocrop').cropper('reset', mode);
}

$("#getCroppedCanvas").click(function() {

    var cropcanvas = $('#imagetocrop').cropper('getCroppedCanvas');

    $("#spinnerModal").modal('show');        
    $("#crop_imagepopup").modal('hide');
    // Upload cropped image to server if the browser supports `HTMLCanvasElement.toBlob`
    cropcanvas.toBlob(function(blob) {

        console.log(blob);

        var currentTime = new Date();
        var month = currentTime.getMonth() + 1;
        var day = currentTime.getDate();
        var year = currentTime.getFullYear();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();
        var filename = month + '' + day + '' + year + '' + hours + '' + minutes + '' + seconds + ".png";
        
        var data = new FormData();
        data.append('file', blob);
        data.append('filename', filename);

        $.ajax({
            type: 'POST',
            url: 'savecropimage.php',
            data: data,
            contentType: false,
            processData: false,
            success: function(msg) {
                console.log('Upload success');

                var actObj = canvas.getActiveObject();

                if(!actObj) {
                  $("#spinnerModal").modal('hide');
                  return;
                }
                //replace image
                var img = new Image();
                img.onload = function() {
                    var w = actObj.width * actObj.scaleX;
                    var h = actObj.height * actObj.scaleY;
                    actObj.setElement(img);

                    scalex = w / this.width;
                    scaley = h / this.height;

                    actObj.scaleX = scalex;
                    actObj.scaleY = scalex;

                    actObj.orgSrc = img.src;
                    actObj.src = img.src;

                    $("#spinnerModal").modal('hide');
                    actObj.setCoords();
                    canvas.renderAll();
                }
                img.src = msg;
            }
        })
    });
});

</script>
</html>