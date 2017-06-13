<!DOCTYPE html>
<html lang = 'es'>
<head>
	<meta charset="utf-8">
	<title>El comelón :: <?php echo $PageTitle; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin/metisMenu.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/admin/sb-admin-2.css'); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


 	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/web/footer_style.css'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/web/responsive.css'); ?>">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/commons/custom-bootstrap-margin-padding.css'); ?>">


	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">


	<?php if (isset($css_files)): ?>
		<!-- grocerycrud -->
		<?php foreach($css_files as $file): ?>
			<link rel="stylesheet" type="text/css" href="<?php echo $file; ?>" />
		<?php endforeach; ?>
		<!-- grocerycrud -->
	<?php endif ?>

	<script type="text/javascript">
		var base_url = '<?php echo base_url(); ?>';

		var js_site_url = function( urlText ){
			var urlTmp = "<?php echo site_url('" + urlText + "'); ?>";
			return urlTmp;
		}

		var js_base_url = function( urlText ){
			var urlTmp = "<?php echo base_url('" + urlText + "'); ?>";
			return urlTmp;
		}
	</script>
	<style>
	body {
	   position: relative;
	}
	body:after {
	    content : "";
	    display: block;
	    position: absolute;
	    top: 0;
	    left: 0;
	    background-image: url("http://i.imgur.com/97mNaGn.jpg");
	    width: 100%;
	    height: 100%;
	    opacity : 0.05;
	    z-index: -1;
	}
	</style>
</head>
<body style=''>
	<div id = 'wrapper'>
