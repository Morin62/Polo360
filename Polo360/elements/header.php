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
							<ul id="menuhaut" >		<!--le menu horizontal de navigation -->
								<li><a class="titre" href="#">HOME</a>
								<p class="sstitre">Back to home</p>
								</li>
								<li><a class="titre" href="#">PRODUCT</a>
								<p class="sstitre">What we have for you</p>
								</li>
								<li><a class="titre" href="#">SERVICES</a>
								<p class="sstitre">Things we do	</p>
								</li>
								<li><a class="titre" href="#">BLOG</a>
								<p class="sstitre">Follow our updates</p>
								</li>		
								<li><a class="titre" href="#">CONTACT</a>
								<p class="sstitre">Ways to reach us</p>		
								</li>
							</ul>
					</div>
				</div>	<!--fin entete-->
			</div>		<!--fin class in-->