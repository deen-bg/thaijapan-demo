<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Burapha">
	<meta name="author" content="Burapha">

	<title>Burapha-demo</title>

	<link rel="icon" type="image/png" href="<?=base_url('assets/images/logo1.png');?>" />
    <link rel="shortcut icon" type="image/ico" href="<?=base_url('assets/images/logo1.png');?>">
    <link rel="apple-touch-icon-precomposed" type="image/ico" sizes="114×114" href="<?=base_url('assets/images/logo1.png');?>">
    <link rel="apple-touch-icon-precomposed" type="image/ico" sizes="72×72" href="<?=base_url('assets/images/logo1.png');?>">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/bootstrap.css');?>">
    <link type="text/css" rel="stylesheet" href="<?=base_url('./assets/admin/vendor/summernote/summernote-bs4.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/bootstrap-extend.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/site.css');?>">

    <!-- Plugins -->
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/animsition/animsition.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/asscrollable/asScrollable.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/switchery/switchery.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/intro-js/introjs.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/slidepanel/slidePanel.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/flag-icon-css/flag-icon.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/css/v2.css');?>">

	<!-- Upload -->
	<link href="<?=base_url('./assets/admin/vendor/upload/css/jquery.fileuploader.css');?>" media="all" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/vendor/dropify/dropify.css');?>">

	<!-- Fonts -->
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/fonts/web-icons/web-icons.min.css');?>">
	<link rel="stylesheet" href="<?=base_url('./assets/admin/assets/fonts/font-awesome/font-awesome.min.css');?>">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

	<!-- Scripts -->
	<script src="<?=base_url('./assets/admin/vendor/breakpoints/breakpoints.js');?>"></script>
	<script>
		Breakpoints();
	</script>

</head>
<body class="animsition dashboard">
	<?php $this->load->view('admin/menu'); ?>
    <!-- Page -->
	<div class="page">
		<div class="page-content container-fluid">
			<div class="row" data-plugin="matchHeight" data-by-row="true">
				<div class="col-xxl-12 col-lg-12">		
					<!-- Panel Static Labels -->
		          	<div class="panel">
			            <div class="panel-heading">
			              <h3 class="panel-title">Add Burapha</h3>
			            </div>
			            <div class="panel-body container-fluid">
			              	<form action="<?=base_url('Admin/creat');?>" id="productAdd" name="productAdd" class="form-horizontal" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" 
                                    value="<?=$this->security->get_csrf_hash();?>" >
                                <div class="form-group form-material" data-plugin="formMaterial">
				                  	<label class="form-control-label" for="title">Name</label>
				                  	<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
</div>
								
								<div class="form-group form-material form-material-file" data-plugin="formMaterial">
				                  	<label class="form-control-label" for="image">Images Cover</label>
									<div id="width"></div> 
									  
			                      	<input type="file" id="covImg" name="covImg" data-plugin="dropify" data-default-file="" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" required/>
									<p class="help-block"><i>
									รองรับไฟล์ภาพ <br>
									ขนาดภาพแนะนำ 1280x1280px <br> 
									ชื่อไฟล์เป็นภาษาอังกฤษเท่านั้น <br>
									ไฟล์นามสกุล .png .jpg .jpeg</i>
									</p>
				                </div>

							
				                <div class="text-right">
						            <button type="submit" class="btn btn-animate btn-animate-side btn-success" id="btn_submit">
						              	<span><i class="icon wb-check" aria-hidden="true"></i> Save</span>
						            </button>
						            <button type="button" class="btn btn-animate btn-animate-side btn-default btn-outline" onclick="window.location.href = '<?=base_url('Admin/portfolio');?>';">
						              	<span><i class="icon wb-close" aria-hidden="true"></i> Close</span>
						            </button>
          						</div>
			              	</form>
			            </div>
		          	</div>
		          	<!-- End Panel Static Labels -->			
				</div>
			</div>
		</div>
	</div>
	<!-- End Page -->

    <!-- footer -->
	<?php $this->load->view('admin/footer'); ?>

    	<!-- Core-->
	<script src="<?=base_url('./assets/admin/vendor/babel-external-helpers/babel-external-helpers.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/jquery/jquery.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/popper-js/umd/popper.min.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/bootstrap/bootstrap.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/animsition/animsition.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/mousewheel/jquery.mousewheel.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/asscrollbar/jquery-asScrollbar.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/asscrollable/jquery-asScrollable.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/ashoverscroll/jquery-asHoverScroll.js');?>"></script>

	<!-- Plugins -->
    <script type="text/javascript" src="<?=base_url('./assets/admin/vendor/summernote/summernote-bs4.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/switchery/switchery.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/intro-js/intro.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/screenfull/screenfull.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/slidepanel/jquery-slidePanel.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/skycons/skycons.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/aspieprogress/jquery-asPieProgress.min.js');?>"></script>
	<script src="<?=base_url('./assets/admin/vendor/matchheight/jquery.matchHeight-min.js');?>"></script>

	<script type="text/javascript">
        var uploadUrl = '<?=base_url('File_upload/upfile/');?>';
    </script>
	
	<!-- Scripts -->
	<script src="<?=base_url('./assets/admin/assets/js/Component.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Base.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Config.js');?>"></script>

	<script src="<?=base_url('./assets/admin/assets/js/Section/Menubar.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Section/GridMenu.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Section/Sidebar.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Section/PageAside.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin/menu.js');?>"></script>

	<script src="<?=base_url('./assets/admin/assets/js/config/colors.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/config/tour.js');?>"></script>

	<!-- Page -->
	<script src="<?=base_url('./assets/admin/assets/js/Site.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin/asscrollable.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin/slidepanel.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin/switchery.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/Plugin/matchheight.js');?>"></script>
	<script src="<?=base_url('./assets/admin/assets/js/v1.js');?>"></script>

	<!-- Upload -->
	<script src="<?=base_url('./assets/admin/vendor/upload/js/jquery.fileuploader.js');?>" type="text/javascript"></script>
	<script src="<?=base_url('./assets/admin/vendor/upload/js/custom.js');?>" type="text/javascript"></script>
	<script src="<?=base_url('./assets/admin/vendor/dropify/dropify.min.js');?>"></script>

	<script type="text/javascript">
        var uploadUrl = '<?=base_url('File_upload/upfile/');?>';
    </script>

	<script type="text/javascript">
	$(document).ready(function() {
			$('#description').summernote({ 
				height				: 150,
				codeviewFilter: false,
                codeviewIframeFilter: false,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    // ['table', ['table']],
					['insert', ['picture']],
                    ['view', ['codeview', 'help']],
					['fontname', ['Prompt']]
                ],
				callbacks: {
					onImageUpload: function(files) {
						url = $(this).data('upload'); //path is defined as data attribute for  textarea
						// call function by pass 3 param
						sendFile(files[0], url, $(this));
					}
					,onMediaDelete : function($target, editor, $editable) {
						deleteFile($target[0].src); // img 

						// remove element in editor 
						$target.remove();
					}
				}
				
			});
			
		});
		function sendFile(file, url, $editor)
		{
			var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
			var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';

			data = new FormData();
			data.append("file", file);
			data.append(csrfName, csrfHash);

			$.ajax({
				data		: data,
				type		: 'post',
				dataType	: 'json',
				xhr		: function(){
					var myXhr = $.ajaxSettings.xhr();
					
					if(myXhr.upload)
						myXhr.upload.addEventListener('progress', progressHandlingFunction, false);
					
					return myXhr;
				},
				url		: uploadUrl + '?action=upload_image&path=article',
				cache		: false,
				contentType: false,
				processData: false,
				success	: function(dataPresponse){
					
					if(dataPresponse.success == '1')
					{
						$editor.summernote('insertImage', dataPresponse.image_url);
					}
					else
					{
						alert(dataPresponse.message);
					}
				}
			});
		}

		function progressHandlingFunction(e)
		{
			if(e.lengthComputable)
			{
				$('progress').attr({value:e.loaded, max:e.total});
				
				// reset progress on complete
				if (e.loaded == e.total) {
					$('progress').attr('value','0.0');
				}
			}
		}

		function deleteFile(fileUrl, url)
		{
			var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
			var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';

			data = new FormData();
			data.append("file_url", fileUrl);
			data.append(csrfName, csrfHash);

			$.ajax({
				data		: data,
				type		: 'post',
				url			: uploadUrl + '?action=delete_image&path=article',
				cache		: false,
				contentType: false,
				processData: false,
				success	: function(url){
					console.log(url);
				}
			});
		}
        
       
	</script>
</body>
</html>
