<?php
      ini_set('max_execution_time', 300);
      //300 seconds = 5 minutes
      require("library/config.php");
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
    <link href="css/bootstrap-slider.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href='css/fonts/scriptina/stylesheet.css' rel='stylesheet' type='text/css'>
    <link href='css/fonts/isabella-script/stylesheet.css' rel='stylesheet' type='text/css'>
</head>
<style type="text/css">
    .image-upload > input {
        display: none;
    }
</style>

<body>
    <div id="loadingpage" class="modal" data-backdrop="static" data-keyboard="false" style="background:#00a5c5; opacity:1; display:block;"><i class="fa fa-cog fa-spin" style="position: absolute; top: 50%; left: 50%; margin-top: -75px; margin-left: -75px; font-size: 150px; color:#fff;"></i></div>
    <div class="container" id="page-container">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                    <img src="./img/SWF_logo_single-S-white-transparent.png" width="50px" height="50px">             
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown" id="file-menu">
                            <a href="javascript:void(0);" data-toggle="dropdown" class="dropdown-toggle" style="color: #ffffff; text-decoration:none;">File <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <form id="uploadtemplate" action="#">
                                        <label for="templateselect" style="cursor: pointer; font-weight:normal;">Open Marketing Material</label>
                                        <input id="templateselect" type="file" name="templateselect[]" />
                                    </form>
                                </li>
                                <li><a id="saveimage" href="#">Save Marketing Material</a></li>
                            </ul>
                      </li>
                    </ul>
                    <span class="navbar-right">
                     <!-- <button class="btn btn-warning" type="button" id="saveTemplate"><i class="fa fa-cloud-download"></i> Save</button> -->
                     <!-- <button class="btn btn-warning" type="button" id="publishTemplate"><i class="fa fa-check"></i> Publish</button> -->
                     <div class="btn-group" id="download">
                        <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle"><i class="fa fa-download"></i>&nbsp; Download<span class="caret" style="margin-left:10px;"></span></button>
                    <ul class="dropdown-menu">
                        <li><a id="downloadAsPDF" href="#">Save As PDF (For Print)</a></li>
                        <li><a id="downloadAsJPEG" href="#">Save As JPEG (For Web)</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu">
                            <a href="#">
                                 More Options
                                 <span class="caret" style="margin-left:10px;">
                          </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#" class="noclose" data-value="option1" tabIndex="-1"><input type="checkbox" checked="checked" id="savecrop" />&nbsp;Save with Crop Marks</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                </span>
            </div>
            <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
    </nav>
    <!-- /row -->
    <div class="row">
        <div class="col-xs-6 col-md-4" style="padding-right: 0px; padding-left: 0px; position:fixed;z-index:1000;">
            <div class="tabs-left">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#a" data-toggle="tab"><i class="fa fa-th-large"></i></br>Marketing Materials</a></li>
                    <li><a href="#b" data-toggle="tab"><i class="fa fa-font"></i></br>Contact Information</a></li>
                    <!--<li id="tab-upload">
                        <form id="upload" action="uploadimage.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="100000000" />
                            <label for="fileselect" style="cursor: pointer; font-weight:normal;"><i class="fa fa-cloud-upload"></i> </br>Upload a Different Pic</label>
                            <input id="fileselect" type="file" name="fileselect[]" />
                        </form>
                        <div id="progress"></div>
                    </li>-->
                    <li><a href="#c1" data-toggle="tab"><i class="fa fa-cloud-upload"></i></br>Upload a Different Pic</a></li>
                 <!--   <li><a href="#i" data-toggle="tab"><i class="fa fa-mobile"></i><br/>Loan Estimate(s)</a></li>  --> 
                 <!--   <li><a href="javascript:void(0);" id="undo"><i class="fa fa-undo"></i></br>Undo</a></li>
                    <li><a href="javascript:void(0);" id="redo"><i class="fa fa-repeat"></i></br>Redo</a></li> -->
                    <li><a href="#h" data-toggle="tab"><i class="fa fa-question"></i></br>Help</a></li>
                </ul>
                <div class="tab-content" style="margin-left:80px; position:absolute;">
                     <div class="tab-pane active" id="a">
                        <div class="col-lg-12">
						  <div class="dropdown" style="float:left;"> 
							<!--	<button class="btn btn-default dropdown-toggle btn-menu" type="button" id="templateMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width:35px;"> 
									  <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
								</button> -->
								<!-- <ul class="dropdown-menu" aria-labelledby="templateMenu">
									  <li><a href="#" id="addTemplateCategory">New Category</a></li>
									  <li><a href="#" onClick='javascript:location.href="index.php?newtemplate";'>New Flyer</a></li>
									  <li><a href="#" id="deletetempcat">Delete Category</a></li>
									  <li><a href="#" id="deleteTemp">Delete Flyer</a></li>
								   </ul> -->
						  </div> 
						  <select class="form-control" name="tempcat-select" id="tempcat-select" >
								  <option value="">Select Category</option>
						  </select>
                        </div>
                        <div class="" id="template_container" style="text-align:center;margin-top:40px;margin-left:20px;height:433px;">
                        </div>
                     </div>
                     <div class="tab-pane" id="b">
                        <div class="col-lg-12 txt-info">
                        <h3>Contact Information</h3>
          						  <div class="checkbox">
          						    <label>
          						      <input type="checkbox" id='officephinfo' checked onClick='javascript:updateContactInfo();'> <span>Office Phone</span>: (888) 888-888
          						    </label>
          						  </div>

          						  <div class="checkbox">
          						    <label>
          						      <input type="checkbox" id='cellphinfo' checked onClick='javascript:updateContactInfo();'> <span>Cell Phone</span>: (888) 888-888
          						    </label>
          						  </div>
          						  <div class="checkbox">
          						    <label>
          						      <input type="checkbox" id='websiteinfo' checked onClick='javascript:updateContactInfo();'> <span>Website</span>
          						    </label>
          						    <p>southwestfunding.com/asample</p>
          						  </div>
                        <p class="some-info">Some information not look right? You can adjust your contact information in the menu above under "My Account" --- 'My Profile'</p>
                                          <div class="dropdown" style="float:left;">
                                              <!--  <button class="btn btn-default dropdown-toggle btn-menu" type="button" id="textMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="width:35px;">
                                                      <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                                                </button>
                                                      <ul class="dropdown-menu" aria-labelledby="textMenu">
                                                      <li><a href="#" id="addTextCategory">New Category</a></li>
                                                      <li><a href="#" id="saveText">Save from Selection</a></li>
                                                      <li><a href="#" id="deletetextcat">Delete Category</a></li>
                                                      <li><a href="#" id="deleteText">Delete Text</a></li>
                                                </ul> -->
                                          </div>
                                         <!-- <select class="form-control" name="textcat-select" id="textcat-select" >
                                                  <option value="">Select Category</option>
                                          </select> -->
                        </div>
                       <!-- <div id="addtextoptions" class="col-lg-12" style="text-align:center;">
							<div id="addheading" style="font-size:36px; font-weight:900;"><a href="#" onClick="javascript:addheadingText();">Add heading</a></div>
							<div id="addsubheading" style="font-size:24px; font-weight:bold;"><a href="#" onClick="javascript:addsubheadingText();">Add subheading</a></div>
							<div id="addsometext" style="font-size:18px; font-weight:bold; margin:5px 0 10px 0;"><a href="#" onClick="javascript:addText();">Add some regular text</a></div>
                        </div>  -->
                       <div class="" id="text_container" style="text-align:center;">
                        </div> 
                     </div>
                     <div class="tab-pane" id="c1">
                        <div class="col-lg-12 upload-pic">
                        <h3>Upload a different picture</h3>
                        <h4>Your Current Picture:</h4>
                         <img id="previewImage" src="#" alt="Your image" style="display:none;" />
                        <h4>Want to upload a Different Picture?</h4>
						            <div>
                           <!-- <div class="element-upload">
                                <label for="element_img" class="btn btn-default btn-block"><i class="fa fa-cloud-upload"></i> Upload</label>
                                <input id="element_img" type="file" onchange="readIMG(this);" name="element_img" />
                               </div> -->
                            <h4>Want to change your picture on this marketing piece? Navigate to 'Upload Your Headshot' in Marketing Central to replace your current headshot in the system.</h4>
						            </div>  
						            <p class="file-size">jpeg, png or gif images only. Max size of 4MB</p>
                        </div>
                     </div>
                   <!--     <div class="tab-pane" id="i">
                        <div id="loan-info" class="col-lg-12">
                            <div class="panel-group" id="accordion">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                    Basic Loan Information</a>
                                  </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                  <div class="panel-body">
                                        <h3>Intial Information</h3>
                                          <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                      <label>Sales Price</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                      <input type="text" id="sales-price" name="sales_prices" style="text-align: center;">
                                                </div>
                                          </div>
                                          <div class="row">

                                                <div class="col-md-4 col-sm-4">
                                                      <label>Sales Price</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                <select class="form-control">
                                                      <option value="">State 1</option>
                                                      <option value="">State 2</option>
                                                      <option value="">State 3</option>
                                                </select>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                <label>Country</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                      <select class="form-control">
                                                            <option value="">Country1</option>
                                                            <option value="">Country2</option>
                                                            <option value="">Country3</option>
                                                      </select>
                                                </div>
                                          </div> 
                                          <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                      <label>Number of Units</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                      <select class="form-control">
                                                            <option value="">Units 1</option>
                                                            <option value="">Units 2</option>
                                                            <option value="">Units 3</option>
                                                      </select>
                                                      <span style="font-size: 12px;">Your Largest FHA Loan is $555,555</span>
                                                </div>
                                          </div>
                                          <hr/>
                                          <h3>Property Type &amp; HOA</h3>
                                          <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                      <label>Types of House</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                      <select class="form-control">
                                                            <option value="">Single Family</option>
                                                            <option value="">Condominium</option>
                                                            <option value="">Multi-Unit</option>
                                                      </select>
                                                      <span>Your Largest FHA Loan is $555,555</span>
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-4 col-sm-4">
                                                      <label>HOA fees (monthly)</label>
                                                </div>
                                                <div class="col-md-8 col-sm-8">
                                                      <select class="form-control">
                                                            <option value="">$10</option>
                                                            <option value="">$20</option>
                                                            <option value="">$30</option>
                                                      </select>                    
                                                </div>
                                          </div>
                                          <hr/>
                                          <h3>How Many Loan Estimates?</h3>
                                          <div class="row">
                                                <div class="col-md-12">
                                                      <select class="form-control">
                                                            <option value="">Number of Estimates</option>
                                                            <option value="">1</option>
                                                            <option value="">2</option>
                                                            <option value="">3</option>
                                                      </select>                    
                                                </div>                                                            
                                          </div>                                                      
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                    Loan Type(s)</a>
                                  </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse loan-types">
                                  <div class="panel-body">
                                          <h5>Loan-1 Select Type</h5>
                                          <select class="form-control">
                                                <option value="">Type of Loan</option>
                                                <option value="">FHA 30 Year Fixed</option>
                                                <option value="">FHA 20 Year Fixed</option>
                                                <option value="">FHA 15 Year Fixed</option>
                                                <option value="">VA 30 Year Fixed</option>
                                                <option value="">VA 20 Year Fixed</option>
                                                <option value="">USDA 30 Year Fixed</option>
                                                <option value="">Conventional 15 Year Fixed(5% down)</option>
                                                <option value="">Conventional 15 Year Fixed(10% down)</option>
                                                <option value="">Conventional 15 Year Fixed(20% down)</option>
                                                <option value="">Conventional 30 Year Fixed(3% down)</option>
                                                <option value="">Conventional 30 Year Fixed(5% down)</option>
                                                <option value="">Conventional 30 Year Fixed(10% down)</option>
                                                <option value="">Conventional 30 Year Fixed(15% down)</option>
                                                <option value="">Conventional 30 Year Fixed(20% down)</option>
                                                <option value="">Conventional 30 Year Fixed(25% down)</option>
                                                <option value="">Conventional 30 Year Fixed(30% down)</option>
                                          </select> 
                                          <h5>Loan-2 Select Type</h5>
                                          <select class="form-control">
                                                <option value="">Type of Loan</option>
                                                <option value="">Loan1</option>
                                                <option value="">Loan2</option>
                                                <option value="">Loan3</option>
                                          </select>
                                          <h5>Loan-3 Select Type</h5>
                                          <select class="form-control">
                                                <option value="">Type of Loan</option>
                                                <option value="">Loan1</option>
                                                <option value="">Loan2</option>
                                                <option value="">Loan3</option>
                                          </select> 
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                    Loan Details</a>
                                  </h4>
                                </div>
                                <div id="collapse3" class="loan-details panel-collapse collapse">
                                  <div class="panel-body">
                                        <h5>Select Which Loan You want to see</h5>
                                        <select class="form-control">
                                              <option value="">Type of Loan</option>
                                              <option value="">FHA 30 Year Fixed</option>
                                              <option value="">FHA 20 Year Fixed</option>
                                              <option value="">FHA 15 Year Fixed</option>
                                        </select>
                                        <h4>Loan Details</h4>                                   
                                        <div class="row">
                                              <div class="col-md-5 col-sm-5">
                                                    <label>Sales Price</label>
                                              </div>
                                              <div class="col-md-7 col-sm-7">
                                                    <input type="text" name="sales-price" id="sales-price" placeholder="auto-filled">
                                              </div>                                                            
                                        </div>
                                        <div class="row">
                                              <div class="col-md-5 col-sm-5">
                                                    <label>Down Payment</label>
                                              </div>
                                              <div class="col-md-7 col-sm-7">
                                                    <input type="text" name="sales-price" id="sales-price" placeholder="auto-filled">
                                              </div>                                                            
                                        </div>
                                        <div class="row">
                                              <div class="col-md-5 col-sm-5">
                                                    <label>Term</label>
                                              </div>
                                              <div class="col-md-7 col-sm-7 txt-center">
                                                    auto-filled
                                              </div>
                                        </div>
                                        <div class="row">
                                              <div class="col-md-5 col-sm-5">
                                                    <label>Rate</label>
                                              </div>
                                              <div class="col-md-7 col-sm-7 txt-center">
                                                    auto-filled
                                              </div>
                                        </div>
                                        <div class="row">
                                              <div class="col-md-5 col-sm-5">
                                                    <label>APR(%)</label>
                                              </div>
                                              <div class="col-md-7 col-sm-7 txt-center">
                                                    auto-filled
                                              </div>
                                              
                                        </div>
                                        <div class="row">
                                              <div class="col-md-5 col-sm-5">
                                                    <label>VA Funding Fee Financed</label>
                                              </div>
                                              <div class="col-md-7 col-sm-7">
                                                    <input type="text" name="sales-price" id="sales-price" placeholder="auto-filled">
                                              </div>                                                      
                                        </div>

                                        <div class="row">
                                              <div class="col-md-5 col-sm-5">
                                                    <label>Funding Fee Financed</label>
                                              </div>
                                              <div class="col-md-7 col-sm-7">
                                                    <input type="text" name="sales-price" id="sales-price" placeholder="auto-filled">
                                              </div>                                                      
                                        </div>
                                        <div class="row">
                                              <div class="col-md-5 col-sm-5">
                                                    <label>Insurance</label>
                                              </div>
                                              <div class="col-md-7 col-sm-7">
                                                    <input type="text" name="sales-price" id="sales-price" placeholder="auto-filled">
                                              </div>                                                      
                                        </div>
                                        <div class="row">
                                              <div class="col-md-5 col-sm-5">
                                                    <label>Taxes</label>
                                              </div>
                                              <div class="col-md-7 col-sm-7">
                                                    <input type="text" name="sales-price" id="sales-price" placeholder="auto-filled">
                                              </div>                                                      
                                        </div>
                                        <div class="row">
                                              <div class="col-md-5 col-sm-5">
                                                    <label>DTI/Income Guide</label>
                                              </div>
                                              <div class="col-md-7 col-sm-7">
                                                    <input type="text" name="sales-price" id="sales-price" placeholder="auto-filled">
                                              </div>
                                        </div>                                                
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                    Loan Assumptions</a>
                                  </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse loan-aff">                                  
                                    <div class="panel-body">
                                          <h5>Select Which Loan You Want to See</h5>
                                          <div class="row">
                                                <div class="col-md-12">
                                                      <select class="form-control">
                                                            <option value="">FHA Loan 30 Year Fixed</option>
                                                            <option value="">Conventional Loan 30 Year Fixed (20% Down)</option>
                                                            <option value="">VA Loan 15 Year Fixed</option>
                                                      </select>
                                                </div>
                                          </div>
                                          <h3>Prepaids &amp; Impounds Assumptions</h3>
                                          <h5><strong>FHA Loan 30 Year Fixed</strong></h5>
                                          <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                      <input type="checkbox" name="vehicle" value="Bike"><label for="prepaid-interest">Prepaid Interest</label>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                      auto-filled
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                <label for="month-insurance">Months of Insurance</label>
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                      auto-filled
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                      <input type="checkbox">Months of Tax Impounds
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                      auto-filled
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-12">
                                                      Monthly PMI  auto-filled
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-8 col-sm-8" style="text-decoration: underline;font-weight: bold;">
                                                      Total Impounds &amp; Prepaids
                                                </div>
                                                <div class="col-md-4 col-sm-4" style="font-weight: bold;">
                                                      auto-filled
                                                </div>
                                          </div>
                                          <h5><strong>Conventional Loan 30 Year Fixed(20% Down)</strong></h5>
                                          <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                      <input type="checkbox" name="vehicle" value="Bike">Days of Prepaid Interest
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                      auto-filled
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                      <input type="checkbox">Months of Insurance
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                      auto-filled
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                      <input type="checkbox">Months of Tax Impounds
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                      auto-filled
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-12">
                                                      Monthly MI(if applicable)  auto-filled
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-8 col-sm-8" style="text-decoration: underline;font-weight: bold;">
                                                      Total Impounds &amp; Prepaids
                                                </div>
                                                <div class="col-md-4 col-sm-4" style="font-weight: bold;">
                                                      auto-filled
                                                </div>
                                          </div>
                                          <h5><strong>VA Loan 15 Year Fixed</strong></h5>
                                          <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                      <input type="checkbox" name="vehicle" value="Bike">Prepaid Interest
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                      auto-filled
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                      <input type="checkbox">Months of Insurance
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                      auto-filled
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-8 col-sm-8">
                                                      <input type="checkbox">Months of Tax Impounds
                                                </div>
                                                <div class="col-md-4 col-sm-4">
                                                      auto-filled
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-8 col-sm-8" style="text-decoration: underline;font-weight: bold;">
                                                      Total Impounds &amp; Prepaids
                                                </div>
                                                <div class="col-md-4 col-sm-4" style="font-weight: bold;">
                                                      auto-filled
                                                </div>
                                          </div>

                                          <h5><strong>Closing Cost Assumptions</strong></h5>
                                          <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                      Funding Fee
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                      auto-filled
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    Settlement/Escrow Fee
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                      FHA + Con + USDA - based on sales price
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                      Underwriting Fee
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                      FHA - $995, Con-$1,745, USDA - $1,245
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                      Loan Origination Fee
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                      VA - 1%, FHA - 1%
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                      Appraisal Fee
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                      VA - $450, FHA - $350, Con - $450, USDA - $450
                                                </div>
                                          </div>

                                          <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                      Credit Report Fee
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                      VA - $55, FHA - $25, Con - $25, USDA - $25
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                      Title Insurance Fee
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                      VA + FHA + Con + USDA - based on loan amount
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                      Recording Fee?
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                      VA + FHA + Con + USDA - $80
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                      Flood Cert
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                      FHA - $25
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                      Wire Transfer
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                      FHA - $35
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                      Processing Fee
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                      FHA - $450
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                      Loan Documents
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                      FHA - $425
                                                </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                      Tax Service Fee
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                      Con + USDA - $85
                                                </div>
                                          </div>
                                          <div class="row" style="margin-bottom: 50px;">
                                                <div class="col-sm-8 col-md-8" style="text-decoration: underline;font-weight: bold;">
                                                      Total Closing Costs
                                                </div>
                                                <div class="col-sm-4 col-md-4" style="font-weight: bold;">
                                                      auto-filled
                                                </div>
                                          </div>                                                                                                            
                                    </div>
                                </div>
                              </div>                              
                            </div>
                        </div>
                     </div>   -->
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
                <!-- /tab-content -->
                <ul class="list-unstyled hidden-xs" id="sidebar-footer">
                    <li>
                        <i class="fa fa-plus-circle fa-lg" id="btnZoomIn" style="cursor:pointer;"></i></br><span id="zoomperc">100%</span></br><i class="fa fa-minus-circle fa-lg" id="btnZoomOut" style="cursor:pointer;"></i>
                    </li>
                </ul>
            </div>
            <!-- /tabbable -->
        </div>
        <div class="col-xs-12 col-md-8" style="margin-top:60px; margin-left:420px;" id='rightsection'>
            <!-- tools-top -->
            <div class="tools-top" style="z-index:1000;position:fixed;visibility:hidden;margin-top:5px;">
                <div class="toolbar-top">
                    <span class="textelebtns">
         <div class="btn-group">
         <a title="Select Font" id="font-selected" class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">
         <span><span style="font-family: 'Averia Sans Libre'; font-size: 14px;">Averia Sans Libre</span>&nbsp;&nbsp;<span class="caret"></span></span>
            </a>
                    <ul class="dropdown-menu fonts-dropdown" id="fonts-dropdown">
                    </ul>
                </div>
                <div class="input-group" style="display:inline-block;">
                    <input type="text" class="fontinput form-control" id="fontsize" name="fontsize" min="0" max="100" value="6" style="width:50px; display:inline-block;">
                    <div class="input-group-btn" style="display:inline-block;">
                        <span id="fzbutton" title="Font Size" class="tools-top btn btn-default fzbutton-container" style="padding:2px 5px;"> <i id="fontsizeInc" class="fa fa fa-caret-up fzbutton" style="display:block;"></i> <i id="fontsizeDec" class="fa fa-caret-down fzbutton" style="display:block;"></i></span>
                    </div>
                </div>
                </span>
                <span>
         <a href="javascript:void(0);" id="objectalignleft" title="Align left" class="tools-top btn btn-default"><i class="fa fa-align-left"></i></span></a>
                <a href="javascript:void(0);" id="objectaligncenter" title="Align center" class="tools-top btn btn-default"><i class="fa fa-align-center"></i></a>
                <a href="javascript:void(0);" id="objectalignright" title="Align right" class="tools-top btn btn-default"><i class="fa fa-align-right"></i></a>
                <a href="javascript:void(0);" id="colorSelector" title="Color Picker" class="tools-top btn btn-default" style="padding: 16px 19px;"></a>
                <span id='dynamiccolorpickers'></span>
                <!--
            <a href="javascript:void(0);" id="clone" title="Clone Object" class="tools-top btn btn-default"><i class="fa fa-clone"></i></a>
            -->
                <!--
            <span id="objectMoveOption">
                  <a href="javascript:void(0);" id="sendbackward" title="Send Backward" class="tools-top btn btn-default"><img src="img/send-backward.svg" height="16"/></a>
                  <a href="javascript:void(0);" id="bringforward" title="Bring Forward" class="tools-top btn btn-default"><img src="img/bring-forward.svg" height="16"/></a>
            </span>
            -->
                <a href="javascript:void(0);" id="deleteitem" title="Delete Selected Item" class="tools-top btn btn-danger"><i class="fa fa-trash-o"></i></a> 
                <div id="showmoreoptions" class="btn-group" style="display:inline-block;">
                    <button href="javascript:void(0);" id="showmore" data-toggle="dropdown" title="Show More Tools" class="tools-top btn btn-default dropdown-toggle"><span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="javascript:void(0);" id="fontbold" title="Bold" class="tools-top more textelebtns" style="font-weight:bolder;">Bold</a></li>
                        <li><a href="javascript:void(0);" id="fontitalic" title="Italic" class="tools-top more textelebtns" style="font-style: italic;">Italic</a></li>
                        <li><a href="javascript:void(0);" id="fontunderline" title="Underline" class="tools-top more textelebtns" style="text-decoration: underline;">Underline</a></li>
                        <!--<li><a href="javascript:void(0);" id="lineheight" title="Line Height" class="tools-top more textelebtns noclose" ><img src="img/lineheight.svg" width="14">&nbsp; Line height</a></li>
            <input id="changelineheight" data-slider-id='lineheightSlider' type="text" data-slider-min="0.5" data-slider-max="5" data-slider-step="0.1" data-slider-value="1.3"/>-->
                        <!--
            <li><a href="javascript:void(0);" id="horizcenterindent" title="Horizontal center Indent" class="tools-top more" ><span class="glyphicon glyphicon-option-horizontal"></span> Align Horizontal Center</a></li>
            <li><a href="javascript:void(0);" id="verticenterindent" title="Vertical center Indent" class="tools-top more" ><span class="glyphicon glyphicon-option-vertical"></span> Align Vertical Center</a></li>
            <li><a href="javascript:void(0);" id="leftindent" title="Left Align" class="tools-top more" ><span class="glyphicon glyphicon-arrow-left"></span> Align To Left</a></li>
            <li><a href="javascript:void(0);" id="rightindent" title="Right Align" class="tools-top more" ><span class="glyphicon glyphicon-arrow-right"></span> Align To Right</a></li>
            -->
                        <li><a href="javascript:void(0);" id="clone" title="Clone Object" class="tools-top more"><i class="fa fa-clone"></i>&nbsp; Clone Object</a></li>
                        <li>
                            <a href="javascript:void(0);" id="sendbackward" title="Send Backward" class="tools-top more"><img src="img/send-backward.svg" height="16" />&nbsp; Send Backward</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" id="bringforward" title="Bring Forward" class="tools-top more"><img src="img/bring-forward.svg" height="16" />&nbsp; Bring Forward</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" id="objectfliphorizontal" title="Flip Horizontal" class="tools-top more"><img src="img/fliphorizontally.png" width="14">&nbsp; Flip Horizontally</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" id="objectflipvertical" title="Flip Vertical" class="tools-top more"><img src="img/flipvertically.png" width="14">&nbsp; Flip Vertically</a>
                        </li>
                        <li><a href="javascript:void(0);" id="objectlock" title="Lock Object" class="tools-top more"><i class="fa fa-lock"></i>&nbsp;&nbsp; Lock Object</a></li>
                        <li>
                            <a href="javascript:void(0);" id="objectopacity" title="Opacity" class="tools-top more noclose"><img src="img/opacity.svg" width="13">&nbsp; Opacity</a>
                        </li>
                        <input id="changeopacity" data-slider-id='opacitySlider' type="text" data-slider-min="0.1" data-slider-max="1" data-slider-step=".1" data-slider-value="1" />
                    </ul>
                </div>
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
            <div id='canvaspages'>
                <div class="page" id='page0'>
                </div>
            </div>
            <!--
            <div id='divcanvas0' class="divcanvas" onClick='javascript:selectCanvas(this.id);'>
            </div>
            -->
            <!--<div style="display:none; float:right; margin-top: -240px; margin-right: 112px; color:#ffffff;">
                <i id='duplicatecanvas' class="fa fa-files-o fa-lg duplicatecanvas" style='z-index:1000; cursor:pointer; color:#ffffff;'></i></br>
                </br>
                <i id='deletecanvas' class="fa fa-trash-o fa-lg deletecanvas" style='z-index:1000; cursor:pointer; color:#ffffff;'></i>
            </div>
            <button onClick='javascript:addNewCanvasPage();' id="addnewpagebutton" class="btn" type="button" style="display:none; width:150px; margin:20px 0; padding:10px; border:1px solid #555;"> + Add a New Page</button>-->
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
                        <button type="reset" class="btn btn-default btn-small" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-default btn-small">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Template Modal HTML -->
   <div id="Del_tempModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content modal-content-400">
                <div class="jumbotron modal-header" style="border-radius:5px 5px 0px 0px; background-color:#00BCD4;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="opacity:1.0;"><img src="img/close.png"></button>
                    <h4 class="modal-title">Delete Flyer</h4>
                </div>
                <div class="modal-body" style="margin-top:-30px; ">
                    <div class="body">
                        <span>Are you sure you want to delete this template? This cannot be undone.</span>
                    </div>
                </div>
                <div class="modal-footer clearfix">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onClick="javascript:proceed_tempDelete();">Delete</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
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
                    <button type="button" class="btn btn-default" data-dismiss="modal" onClick="javascript:proceed_tempcatdelete();">Yes</button>
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
                    <button type="button" class="btn btn-default" data-dismiss="modal" onClick="javascript:proceed_catdelete();">Yes</button>
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
                    <button type="button" class="btn btn-default" data-dismiss="modal" onClick="javascript:proceed_Bgcatdelete();">Yes</button>
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
                    <button type="button" class="btn btn-default" data-dismiss="modal" onClick="javascript:proceed_textcatdelete();">Yes</button>
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
                        <button type="reset" class="btn btn-default btn-small" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-default btn-small">Add</button>
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
                        <span><label for="template">Flyer Name :</label>
                     <input type="text" name="templatename" id="templatename" class="form-control" placeholder="Enter Name"></span>
                    </div>
                </div>
                <div class="modal-footer clearfix">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onClick="javascript:proceed_savetemplate();">Submit</button>
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
                        <span>
                        <label for="template">Category :</label>
                        <select class="form-control" name="elmt_category" id="elmt_category" >
                           <option value="">Select Category</option>
                        </select>
                     </span>
                        </br>
                        <span><label for="template">Element Name :</label>
                     <input type="text" name="elmtname" id="elmtname" class="form-control" placeholder="Enter Name"></span>
                    </div>
                </div>
                <div class="modal-footer clearfix">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onClick="javascript:saveelementsfromselection();">Submit</button>
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
                        <button type="reset" class="btn btn-default btn-small" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-default btn-small">Add</button>
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
                            <span><label for="template">Canvas width (in pixels):</label>
                        <input type="text" name="loadCanvasWid" id="loadCanvasWid" class="form-control" placeholder="Enter Width" value='500'>
                        </span></br>
                            <span><label for="template">Canvas height (in pixels):</label>
                        <input type="text" name="loadCanvasHei" id="loadCanvasHei" class="form-control" placeholder="Enter Height" value='400'></span>
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
                        <label>Please upload your image format in JPG/PNG/GIF. Each file size is limited to 1000 KB.</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
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
                                <label for="bg_category">Category</label>
                                <select class="form-control" name="bg_category" id="bg_category">
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
                        <button type="reset" class="btn btn-default btn-small" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-default btn-small">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>
<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/bootstrap-slider.js"></script>
<script type="text/javascript" src="js/fabric1.6.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/validation-methods.js"></script>
<script src="js/jquery-validate.bootstrap-tooltip.js"></script>
<script src="js/fileSaver.min.js" type="text/javascript"></script>

<script type="text/javascript">
    var tempcanvas = new fabric.Canvas('tempcanvas');
    var canvas = new fabric.Canvas('canvas0');
    canvas.rotationCursor = 'url("img/rotatecursor2.png") 10 10, crosshair';
    canvas.backgroundColor = '#ffffff';
    var selectedFont = 'Tinos';
    var fillColor = 'Black';
</script>
<!-- our site js -->
<script>document.write("<script type='text/javascript' src='js/functions.js?v=" + Date.now() + "'><\/script>");</script>
<script>document.write("<script type='text/javascript' src='js/canvasevents.js?v=" + Date.now() + "'><\/script>");</script>
<script>
// Wait for window load
      $(window).load(function() {
          // Animate loader off screen
          $("#loadingpage").fadeOut("slow");
          $('.deletecanvas').css('display', 'none');
          addCanvasToPage();
          setCanvasSize();
      });
var Istempselected = false;
var Iscatselected = false;
var IsBgselected = false;
var IsTextselected = false;
$(document).ready(function() {
    setTimeout(function() {
        getTemplates('');
    }, 250);
    setTimeout(function() {
        getTemplatesName();
    }, 750);
    setTimeout(function(){ gettempcategory(); }, 500);
    setTimeout(function() {
        getcategory();
    }, 1000);
    setTimeout(function() {
        getcatimages('');
    }, 1250);
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
});

<?php
   if (isset($_GET['tempid']) && $_GET['tempid'] != '') {
     $templateid = $_GET['tempid'];
 ?>
   loadTemplate(<?php echo $templateid;?>);
   <?php
   }
 ?>

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
 var tempIdToDel = '';
$(document).on("click", ".deleteTemp", function() {
      tempIdToDel = $(this).attr('id');
      $("#Del_tempModal").modal('show');
}); 
$("#saveTemplate").click(function() {
    $("#templateSaveModal").modal('show');
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
<!-- get Category Images -->
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
<!-- get Category Images -->
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

      if(templatesloading) return;

      templatesloading = true;

      var $grid = $('#template_container');

      if(refresh) {
            $('#template_container').empty();
            tempoffset = 0;
      }

      $grid.isotope({
            itemSelector: '.thumb',
            masonry: {
              columnWidth: '.thumb'
            }
      });

      if(typeof id != 'undefined') {
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
        success: function (data) {
		if (data != '') {
        		var data = $(data);

                  $grid.isotope()
                    .append( data )
                    .isotope( 'appended', data )
                    .isotope('layout');

                  $grid.imagesLoaded().progress( function() {                                  
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
<!-- get Template Images -->
function getTexts(id) {
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
                $('#text_container').append(data);
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
          //  addCanvasToPage();
          //  setCanvasSize();
        }
    });
});
function handleFileSelect(evt) {
    //$("ul.navbar-nav>li.dropdown").removeClass("open");
    $("#uploadtemplate_modal").modal('hide');
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
                openTemplate(e.target.result, true, theFile.name);
            };
        })(f);
        // Read in the image file as a data URL.
        reader.readAsText(f);
    }
}
//document.getElementById('templateselect').addEventListener('change', handleFileSelect, false);
$('#templateselect').on('change', handleFileSelect);
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

function delete_cookie(name) {
    document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}
$('.reglink').click(function() {
    $('#loginmodal .modal-dialog').removeClass('noregister');
    $('#loginmodal .modal-dialog').addClass('nologin');
    $('.col-2').css('width', '100%');
    $('#loginmodal .col-2').show();
    $('#loginmodal .col-1').hide();
    delete_cookie('is_youprintem_user');
    $('#loginmodal .loginlink').show();
});
$('.loginlink').click(function() {
    $('#loginmodal .modal-dialog').removeClass('nologin');
    $('#loginmodal .modal-dialog').addClass('noregister');
    $('.col-1').css('width', '100%');
    $('#loginmodal .col-1').show();
    $('#loginmodal .col-2').hide();
    $('#loginmodal .reglink').show();
});

function updateContactInfo() {
  var officephinfo = document.getElementById('officephinfo').checked;
  var cellphinfo = document.getElementById('cellphinfo').checked;
  var websiteinfo = document.getElementById('websiteinfo').checked;

  var officephone = getObjByCustType('officephone');
  var cellphone = getObjByCustType('cellphone');
  var website = getObjByCustType('website');

  var opacity = 1;
  //getobject from canvas.
  if(!officephinfo) {
    setOpacity(officephone, 0);
  } else {
    setOpacity(officephone, 1);
  }

  if(!cellphinfo) {
    setOpacity(cellphone, 0);
  } else {
    setOpacity(cellphone, 1);
  }

  if(!websiteinfo) {
    setOpacity(website, 0);
  } else {
    setOpacity(website, 1);
  }

  adjustPosition();
    
  canvas.renderAll();
}

function setlefttop(object, left, top) {
  object.left = left;
  object.top = top;
  object.setCoords();
}

function adjustPosition() {

  var objects = canvas.getObjects().filter(function(o) {
      return o.custype;
  });

  var left, top, height;
  if(objects)
  for(var i=0; i < objects.length;i++) {
    var object = objects[i];

    if(object.custype == 'name') {
      left = object.left;
      top = object.top;
      height = object.height;
    } else if(object.opacity == 1) {
      top = top + height;
      setlefttop(object, left, top);
      height = object.height;
    }

    canvas.calcOffset();
    canvas.renderAll();
  }
}

function setOpacity(objects, opacity) {
  if(objects)
  for(var i=0; i < objects.length;i++) {
    var object = objects[i];
    object.opacity = opacity;
  }
}

function getObjByCustType(custype) {

  var objects = canvas.getObjects().filter(function(o) {
      return o.custype == custype;
  });
  
  return objects;
}



</script>
</html>