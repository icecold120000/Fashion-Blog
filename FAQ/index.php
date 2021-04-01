<?php
	$question = [
		'general'=>[
			'Q1'=>[
				'question'=>'Question 1',
				'reponse'=>'Les femmes sont mince et très grande.',
			],
			'Q2'=>[
				'question'=>'Question 2',
				'reponse'=>'Les défilés sont tous les samedis vers 15h',
			],
		],
		'autre'=>[
			'Q3'=>[
				'question'=>'Question 3',
				'reponse'=>'Les modèles sont suivis par des spécialistes de la nutrition.',
			],
			'Q4'=>[
				'question'=>'Question 4',
				'reponse'=>'Toutes personnes peuvent venir au défilés.',
			],
			'Q5'=>[
				'question'=>'Question 5',
				'reponse'=>'La mode n\'est pas exclusive pour les femmes',
			],
		],
	];
?>
<html>
<head>
	<title>FASHION & BEAUTY</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="FAQ.css">
	<link rel="icon" href="../Contents/Icon.jpg" type="image/x-icon"/>
	<script>
		<?php
			for($i = 1; $i <= 5; $i++){
		?>
		function button<?php echo $i; ?>(){
			console.log(document.getElementById("collapse<?php echo $i; ?>").className);
			if(document.getElementById("collapse<?php echo $i; ?>").className === "collapse"){
				document.getElementById("plus<?php echo $i; ?>").style.display = "none";
				document.getElementById("moins<?php echo $i; ?>").style.display = "block";
				afficher<?php echo $i; ?> = false;
			}
			else{
				document.getElementById("moins<?php echo $i; ?>").style.display = "none";
				document.getElementById("plus<?php echo $i; ?>").style.display = "block";
				afficher<?php echo $i; ?> = true;
			}
		}
		<?php
			}
		?>
	</script>
</head>
<body>
	<div class="header">
		<a href="../">
			<header>
				<h1>FASHION & BEAUTY</h1>
				<h6>Life style & fashion bloggers</h6>
			</header>
		</a>
	</div>
	<div class="main">
		<!-- Les Questions générales separées par sections  -->
		<div id="general">
			<h1>Questions générales</h1>
			<h4>Les question les plus fréquemment posés</h4>
			<?php
				for($i = 1; $i <= count($question['general']); $i++){
			?>
			<section id="Q<?php echo $i; ?>">
				<p><?php echo $question['general']['Q'.$i]['question']; ?>
					<button class="btn-primary" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>" onclick="button<?php echo $i; ?>();">
							<span id="plus<?php echo $i; ?>">+</span>
							<span id="moins<?php echo $i; ?>">-</span>
					</button>
				</p>
				<div class="collapse" id="collapse<?php echo $i; ?>">
					<div class="card card-body">
						<span><?php echo $question['general']['Q'.$i]['reponse']; ?></span>
					</div>
				</div>
			</section>
			<?php
				}
			?>
		</div>
		<!-- Les Autres Questions separées par sections  -->
		<div id="autre">
			<h1>Autres questions</h1>
			<h4> D'autres questions interessants posés</h4> 
			<?php
				for($i = 1+count($question['general']); $i <= count($question['autre'])+count($question['general']); $i++){
			?>
			<section id="Q<?php echo $i; ?>">
				<p><?php echo $question['autre']['Q'.$i]['question']; ?>
					<button class="btn-primary" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>" onclick="button<?php echo $i; ?>();">
						<span id="plus<?php echo $i; ?>">+</span>
						<span id="moins<?php echo $i; ?>">-</span>
					</button>
				</p>
				<div class="collapse" id="collapse<?php echo $i; ?>">
					<div class="card card-body">
						<span><?php echo $question['autre']['Q'.$i]['reponse']; ?></span>
					</div>
				</div>
			</section>
			<?php
				}
			?>
		</div>
	</div>
	<footer>
		<p class="link">
			<a href="https://www.facebook.com" target="_blank"><img src="https://static.xx.fbcdn.net/rsrc.php/yo/r/iRmz9lCMBD2.ico" alt="Facebook icon"/> Facebook</a>&emsp;
			<a href="https://www.twitter.com" target="_blank"><img src="https://abs.twimg.com/favicons/favicon.ico" alt="Twitter icon"/> Twitter</a>&emsp;
			<a href="https://www.instagram.com" target="_blank"><img src="https://www.instagram.com/static/images/ico/favicon.ico/36b3ee2d91ed.ico" alt="Instagram icon"/> Instagram</a>&emsp;
			<a href="https://www.pinterest.fr" target="_blank"><img src="https://s.pinimg.com/webapp/style/images/favicon-fd1ea058.png" alt="Pinterest icon"/> Pinterest</a>&emsp;
			<a href="https://www.youtube.com" target="_blank"><img src="https://s.ytimg.com/yts/img/favicon_32-vflOogEID.png" alt="Youtube icon"/> Youtube</a>
		</p>
		<p>@2019-Sujet pour SaintVincent. Tout droits réservés</p>
	</footer>
</body>
</html>