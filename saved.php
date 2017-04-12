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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
    <link href='css/fonts/scriptina/stylesheet.css' rel='stylesheet' type='text/css'>
    <link href='css/fonts/isabella-script/stylesheet.css' rel='stylesheet' type='text/css'>
</head>
<style type="text/css">
    .image-upload > input {
        display: none;
    }
	#preview {
		position:absolute;
		border:3px solid #ccc;
		background:#333;
		padding:5px;
		display:none;
		color:#fff;
		box-shadow: 4px 4px 3px rgba(103, 115, 130, 1);
	}
</style>

<body style="background-color: white;">
<header class="site-header flyers">
    <div class="container">
        <div class="logo pull-left navbar-header">
            <a href="#" class="navbar-brand">A</a>
        </div>

        <ul class="menu pull-left">
            <li><a href="#">My leads</a></li>
            <li><a href="#">Pricing</a></li>
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

        <div class="page-header">
            <h1>My Printed Marketing Pieces</h1>
        </div>

        <div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Modified</th>
                    </tr>
                </thead>
				 <tbody>
					<?php
						$query = "SELECT * FROM template";
						$runQuery = mysql_query($query);
						if(mysql_num_rows($runQuery) > 0)
						{
						while($row = mysql_fetch_array($runQuery))
						{
						$images = str_replace('admin/templates/','' ,$row['canvas_thumbnail']);
					?>
						<tr>
						   <td>
							  <b><?php echo $row['template_name']; ?></b>
							  <span class="actions">
								  <a href="index.php?tempid=<?php echo $row['template_id']; ?>" class="button-flyer-edit" data-url=""> Edit </a>
								  |
							      <a href="http://localhost/newHTML5CanvasFlyerTool/<?php echo $row['canvas_thumbnail']; ?>" class="preview"> Preview </a>
								  |
								  <a href="javascript:void(0);" class="button-flyer-download downloadpdf" id="<?php echo $row['template_id']; ?>">	Download PDF </a>
								  |
								  <a href="javascript:void(0);" class="button-flyer-download downloadjpeg" id="<?php echo $row['template_id']; ?>" target="_blank">	Download JPEG </a>
							  </span>
						   </td>
						   <td><?php //echo $row['created_date']; ?></td>
						   <td><?php //echo $row['modified_date']; ?></td>
						</tr>
					<?php
						}
						}
					?>
				 </tbody>
            </table>
        </div>
    </div>
</div>

<div id="spinnerModal" class="modal fade" data-backdrop="static" data-keyboard="false"><i class="fa fa-cog fa-spin" style="position: absolute; top: 50%; left: 50%; margin-top: -75px; margin-left: -75px; font-size: 150px;"></i></div>

<div id='canvaspages' tabindex="0" style='opacity:0'>
    <div class="page" id='page0'>
    </div>
</div>
<div style='opacity:0'>
<div style="display:none;">
    <canvas id="outputcanvas" width="750" height="600" class="canvas"></canvas>
</div>
<input type="text" name="loadCanvasWid" id="loadCanvasWid" class="form-control" placeholder="Enter Width" value='8.627'/>
<input type="text" name="loadCanvasHei" id="loadCanvasHei" class="form-control" placeholder="Enter Height" value='11.103'/>
<input type="text" name="numOfcanvasrows" id="numOfcanvasrows" class="form-control" value="1"/>
<input type="text" name="numOfcanvascols" id="numOfcanvascols" class="form-control" value="1"/>
</div>

</div>
</body>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/fabric1.6.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/validation-methods.js"></script>

<script type="text/javascript">
    var selectedFont = 'Tinos';
    var fillColor = 'Black';
</script>

<script>document.write("<script type='text/javascript' src='js/functions.js?v=" + Date.now() + "'><\/script>");</script>
<script>document.write("<script type='text/javascript' src='js/canvasevents.js?v=" + Date.now() + "'><\/script>");</script>

<script type="text/javascript">

$(document).ready(function() {
	
    imagePreview();

    $(document).on("click", ".downloadpdf", function() {
          var tempId = $(this).attr('id');
          download(tempId, 'pdf');
    });

    $(document).on("click", ".downloadjpeg", function() {
          var tempId = $(this).attr('id');
          download(tempId, 'jpeg');
    });

    $('a.preview').click(function(){return false;}).click();
});

// Configuration of the x and y offsets
this.imagePreview = function() {
		xOffset = -20;
		yOffset = 40;

    $("a.preview").hover(function(e){
        this.t = this.title;
        this.title = "";
	     var c = (this.t != "") ? "<br/>" + this.t : "";
         $("body").append("<p id='preview'><img src='"+ this.href +"' alt='Image preview' style='max-width:400px; max-height:400px;'/>"+ c +"</p>");
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
            .css("top",(e.pageY - xOffset) + "px")
            .css("left",(e.pageX + yOffset) + "px");
    });

};

function download(tempId, type) {
    $('#spinnerModal').modal('show');
    $.ajax({
        url: "loadtemplate.php",
        type: "GET",
        data: {
            id: parseInt(tempId)
        },
        success: function(data) {
            if (data != "empty") {

                savestateaction = false;

                openTemplate(data);

                canvas.calcOffset();
                canvas.renderAll();

                checkanddownload(type);
            }
        },
    });
}

function checkanddownload(type) {
    if(canvas.getObjects().length > 1) {
        if(type == 'jpeg')
            downloadImage();
        else if(type == 'pdf')            
            downloadPdf();
    } else {
        setTimeout(function() {
            checkanddownload(type);
        }, 500);        
    }
}

</script>
</html>
