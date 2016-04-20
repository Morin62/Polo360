<!DOCTYPE html>
<html>
	<head>
		<?php Loader::element('header_required');?>
		<meta charset="utf-8" />
		<link href="<?php echo $this->getThemePath(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">	
		<style type="text/css">
			[class*="col"] {margin-bottom:20px;}
		</style>
		<link href="<?php echo $this->getThemePath(); ?>/css/style.css" rel='stylesheet' type='text/css' />
	</head>
	<body >
		<div class="container">
			<div class="in">
				<div id="entete" class="row" > 
					<div class="col-md-4"><img id="logo" src=<?php echo $this->getThemePath(); ?>/img/logo.png alt="logo" /></div>
					<div class="col-md-8"> <?php $a = new GlobalArea('menu');
						$a->display($c);?>
						
					</div>
				</div>	<!--fin entete-->
			</div>		<!--fin class in-->
