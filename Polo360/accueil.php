<?php $this->inc('elements/header.php'); 	//--appelle le header ?>

		<div id="bandeau">	//une div plus large pour la bannière
			<div class="row">
				<div id="diaporama" class="col-lg-12"> // la div pour placer l'image bannière
					<?php $a1 = new Area('Contenu');
					$a1->display($c);?>	<!--conteneur image-->
				</div>
			</div>	
		</div>		
		<hr />
		<div class="in">
			<div id="miniatures">	<!--3 premières zones --> 
				<div class="row">
					<div id="mini1" class="col-lg-4"><?php $b1 = new Area('Col1');
							$b1->display($c);?></div>
					<div id="mini2" class="col-lg-4"><?php $b2 = new Area('Col2');
							$b2->display($c);?></div>
					<div id="mini3" class="col-lg-4"><?php $b3 = new Area('Col3');
							$b3->display($c);?></div>		
				</div>
			</div>
			<div id="boxbas">	<!-- 3 zones en bas avant le footer-->
				<div class="row">
						<div id="reseaux" class="col-lg-4"><?php $c1 = new Area('Social');
						$c1->display($c);?></div>
						<div id="contact" class="col-lg-4"><?php $c2 = new Area('Contact');
						$c2->display($c);?></div>
						<div id="news" class="col-lg-4"><?php $c3 = new Area('Actu');
						$c3->display($c);?></div>
				</div>
			</div>		

<?php $this->inc('elements/footer.php'); 	//appelle le footer ?>