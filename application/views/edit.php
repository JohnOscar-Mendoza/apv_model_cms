<html>
<head>
	<title></title>

	<link href="<?php echo asset_url();?>/css/templatemo_style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo asset_url();?>/css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
	<script>
		
	</script>
</head>
<body>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    
    	<div id="site_title">
            <h1><a  target="_parent"><span>MODEL CMS</span></a></h1>
      	</div> <!-- end of site_title -->
        
        <div id="templatemo_menu">
            <ul>
                <li><a href="#">Log-in</a></li>
                <li><a href="http://localhost/apv_model_cms/index.php/model/view" class="current">Gallery</a></li>
                <li><a href="http://localhost/apv_model_cms/index.php/model/add" class="current">Add New</a></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
    
    </div>
</div> <!-- end of templatemo_header -->

<div id="templatemo_middle_wrapper">
	<div id="templatemo_middle">
    	<div id="templatemo_content">
			<div id="content_box_wrapper">

                <form id="comment_form" method="post" action="http://localhost/p1/index.php/models/add">
					<div>
					<h1>Edit Model: </h1>
					<label>
					<span>Name:</span><input id="name" type="text" name="ModelName" />
					</label>

					<label>
					<span>Age:</span><input id="email" type="text" name="Age" />
					</label>

					<label>
					<span>Address:</span><input id="subject" type="text" name="Address" />
					</label>

					<label>
					<span>Facebook:</span><input id="subject" type="text" name="FacebookLink" />
					</label>

					<label>
					<span>Twitter:</span><input id="subject" type="text" name="TwitterLink" />
					</label>

					<label>
					<span>Instagram:</span><input id="subject" type="text" name="InstagramLink" />
					</label>

					<label>
					<span>Image</span><input id="subject" type="text" name="Image" />
					</label>



					<input type="button" value="Submit Form" />
					</label>

					</div>
				
				</form>
	
            </div> <!-- content_box_wrapper -->
                    
        </div> <!-- end of templatemo_content -->
            
		
        
        <div class="cleaner"></div>    
    </div> <!-- end of templatemo_content -->
    
    <div id="templatemo_footer">
    
    <div class="cleaner"></div>
    </div> <!-- end of footer -->
    
    <div id="templatemo_copyright">
        
    </div>
    
</div> <!-- end of templatemo_content_wrapper -->

<div align=center></a></div></body>



</body>
</html>