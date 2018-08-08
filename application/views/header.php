<!DOCTYPE html><!--[if lt IE 7]><html lang="es" class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]--><!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]--><!--[if IE 8]><html class="no-js lt-ie9"><![endif]--><!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="content-language" content="es-ES" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php /* ?>
	<link rel="shortcut icon" href="<?php echo $this->config->item('favicon'); ?>">
	<?php */ ?>
	<title><?php echo $page_title; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
	
	<?php /* ?>
	<link href="<?php echo site_url('/template/css/bootstrap-v3.3.6.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo site_url('/template/css/reset.css'); ?>" rel="stylesheet">
	<?php */ ?>
	<link href="<?php echo site_url('/template/css/style.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
  <script>
  $( function() {
    $( "#tanggal_lahir" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  $( function() {
    $( "#tanggal_terbit_sertifikasi" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>