<?php
	require('library/config.php');
?>
<!DOCTYPE html>
<html class=''>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flyer Editor</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
    <link href="css/spectrum.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap-slider.css" type="text/css" rel="stylesheet">
    <link href="css/bootstrap-tour.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
    <link href='css/fonts/scriptina/stylesheet.css' rel='stylesheet' type='text/css'>
    <link href='css/fonts/isabella-script/stylesheet.css' rel='stylesheet' type='text/css'>
</head>
<style type="text/css">
    .image-upload > input {
        display: none;
    }
	#preview{
		position:absolute;
		border:3px solid #ccc;
		background:#333;
		padding:5px;
		display:none;
		color:#fff;
		box-shadow: 4px 4px 3px rgba(103, 115, 130, 1);
	}
</style>

<body style="background-color: white;" class="templates-index">
<header class="site-header flyers">
    <div class="container">
        <div class="logo pull-left navbar-header">
            <a href="#" class="navbar-brand">A</a>
        </div>

        <ul class="menu pull-left">
            <li><a href="flyers.php">My flyers</a></li>
            <li><a href="#">My leads</a></li>
        </ul>
        
        <ul class="menu pull-right">
            <li class="dropdown">
                <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">
                    kpomservices
                    (kpomservices)
                    <span class="caret"></span>
                </a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="#">Account</a></li>
                    <li><a href="#">Log out</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>

<div class="container">
	<div class="row con-templates">
        
        <div class="page-header">
            <h1>Select a Printed Marketing Piece Below</h1>
        </div>
		<?php 
			  if (isset($_GET['catname'])) {
		?>
		<?php 
		$query = "SELECT * FROM template_categories where tempcat_name = '" . $_GET['catname'] . "'";
		$runQuery = mysql_query($query) or die("ERROR: " . $query);
		if(mysql_num_rows($runQuery) > 0) {
			while($row = mysql_fetch_array($runQuery)){
		?>
			<div class="row templates">
					<h1><a href="http://localhost/newHTML5CanvasFlyerTool/templates.php?catname=<?php echo $row['tempcat_name']; ?>"><?php echo $row['tempcat_name']; ?></a></h1>
						<?php 
							$query1 = "SELECT * FROM template WHERE cat_id =".$row['tempcat_id']."";
							$runQuery1 = mysql_query($query1) or die("ERROR: " . $query1);
							if(mysql_num_rows($runQuery1) > 0){
								while($row1 = mysql_fetch_array($runQuery1)){
									$imag = str_replace("editor/","",$row1['canvas_thumbnail']);
						?>
						<div class="thumbnail">
							<h3><?php echo $row1['template_name']; ?></h3>
							<a href="http://localhost/newHTML5CanvasFlyerTool/<?php echo $row1['canvas_thumbnail']; ?>" id ="<?php echo $row1['template_id']; ?>" class="button-template-choose preview editimg">
								<img  src="thumbnail.php?file=<?php echo $imag.'&rand='.rand().'&maxw=200&maxh=200'; ?>" alt="Recently Added Recruiting Flyer">
								<div class="overlay" style="height:194.11764705882px">
									<div><i class="fa fa-check"></i></div>
								</div>
							</a>
						</div>
						<?php 
								}
							}
						?>		
				</div>
		<?php
				}
			}
		}
		?>	
		<?php 
			  if (isset($_GET['tempname']) && $_GET['id'] != '') {
				 $templatename = $_GET['tempname'];
				 $templateid = $_GET['id'];
		?>
			<div class="row templates">
				<h1><?php echo $templatename; ?></h1>
				<?php 
					$query1 = "SELECT * FROM template WHERE cat_id =".$templateid."";
					$runQuery1 = mysql_query($query1) or die("ERROR: " . $query1);
					if(mysql_num_rows($runQuery1) > 0){
						while($row1 = mysql_fetch_array($runQuery1)){
							$imag = str_replace("editor/","",$row1['canvas_thumbnail']);
				?>
				<div class="thumbnail">
					<h3><?php echo $row1['template_name']; ?></h3>
					<a href="http://localhost/newHTML5CanvasFlyerTool/<?php echo $row1['canvas_thumbnail']; ?>" id ="<?php echo $row1['template_id']; ?>" class="button-template-choose preview editimg">
								<img  src="thumbnail.php?file=<?php echo $imag.'&rand='.rand().'&maxw=200&maxh=200'; ?>" alt="Recently Added Recruiting Flyer">
						<div class="overlay" style="height:194.11764705882px">
							<div><i class="fa fa-check"></i></div>
						</div>
					</a>
				</div>
				<?php 
						}
					}
				?>	
			</div>					
		 <?php } ?>
    </div>
    <ul class="pagination">
        <li class="disabled"><span>&laquo;</span></li>
        <li class="active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li><a href="#" rel="next">&raquo;</a></li>
    </ul>
  </div>
  
</body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
	imagePreview();
});
$('a.preview').click(function(){return false;}).click();
$('.editimg').click(function(){
	id = this.id;
	location.href = "index.php?tempid="+ id +"";
})
// Configuration of the x and y offsets
this.imagePreview = function(){	
		xOffset = -20;
		yOffset = 40;		
		
    $("a.preview").hover(function(e){
        this.t = this.title;
        this.title = "";	
	     var c = (this.t != "") ? "<br/>" + this.t : "";
         $("body").append("<p id='preview'><img src='"+ this.href +"' alt='Image preview' style='max-width:600px; max-height:600px;'/>"+ c +"</p>");								 
         $("#preview")
            .css("top",(e.pageY - xOffset) + "px")
            .css("left",(e.pageX + yOffset) + "px")
            .fadeIn("slow");
    },
	
    function(){
        this.title = this.t;
        $("#preview").remove();

    });	
	
    $("a.preview").mousemove(function(e){
        $("#preview")
			.css("z-index",1000)
            .css("top",(e.pageY - xOffset) + "px")
            .css("left",(e.pageX + yOffset) + "px");
    });			
};
</script>
</html>