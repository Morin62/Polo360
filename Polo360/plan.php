<?php $this->inc('elements/header.php'); ?>

<div id="contenu">
	<?php $a = new Area('Contenu');
	$a->display($c);?>
</div>

<?php $this->inc('elements/footer.php'); ?>