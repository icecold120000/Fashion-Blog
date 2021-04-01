<?php
	$article =[
		'motcle' => [
			'Saison &#9671; Style',
			'Saison &#9671; Style urbain',
			'Mis en avant &#9671; Style',
		],
		'titre' => [
			'MEILLEUR PULL AVANT L\'ARRIVÉE DE L\'HIVER',
			'COMMENT PORTER SON SAC À MAIN',
			'BIEN CHOISIR SES LUNETTE DE SOLEIL',
		],
		'par' => [
			'par Marina',
			'par Marina',
			'par Marina',
		],
		'le' => [
			'9 oct 2019',
			'10 oct 2019',
			'11 oct 2019'
		],
		'texte' => [
			'Saison hiver',
			'Saison automne',
			'Saison été',
		],
		'image' => [
			'article1.jpg',
			'article2.jpg',
			'article3.png',
			'faq.jpg',
		],
		'alt' => [
			'Article',
			'Article',
			'Article',
			'FAQ',
		],
	];
	function left($n1){
		if(is_int($n1/2)===true){
			return 0;
		}
		else{
			return 50;
		}
	}
?>
<html>
<head>
	<title>FASHION & BEAUTY</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="Fashion.css"/>
</head>
<body>
	<header>
		<h1>FASHION & BEAUTY</h1>
		<h6>Life style & fashion bloggers</h6>
	</header>
	<div class="Main">
		<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<?php for($i = 0; $i < count($article['image']); $i++){ ?>
				<li data-target="#carouselIndicators" data-slide-to="<?php echo $i; ?>" class="<?php if($i===0){echo "active";} ?>"></li>
				<?php } ?>
			</ol>
			<div class="carousel-inner">
				<?php for($i = 0; $i < count($article['image']); $i++){ ?>
				<div class="carousel-item <?php if($i===0){echo "active";} ?>">
					<a href="<?php if($i===count($article['image'])-1){echo "FAQ/";}else{echo "article/";} ?>"><img class="d-block w-100 diapo" src="Contents_Piscine2/<?php echo $article['image'][$i]; ?>" alt="<?php echo $article['alt'][$i]; ?>"></a>
				</div>
				<?php } ?>
			</div>
			<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<?php
			for($i = 0; $i < count($article['motcle']); $i++){
		?>
		<a href="article/" class="articlea">
			<div class="article">
				<img src="Contents_Piscine2/<?php echo $article['image'][$i] ; ?>" alt="Article" class="articleimg" style="left:<?php echo left($i); ?>%;"/>
				<div class="articlep" style="left:<?php echo left($i+1); ?>%">
					<p class="red">
						<?php
							echo $article['motcle'][$i];
						?>
					</p>
					<p>
						<?php
							echo $article['titre'][$i];
						?>
					</p>
					<p>
						<?php
							echo $article['par'][$i]."&emsp;|&emsp;".$article['le'][$i];
						?>
					</p>
					<p>
						<span class="red">&mdash;&mdash;&mdash;&mdash;</span>
					</p>
					<p class="p">
						<?php
							echo $article['texte'][$i];
						?>
					</p>
					<img src="Contents_Piscine2/Share.jpg" alt="Share"  class="articleshare"/>
				</div>
			</div>
		</a>
		<?php
			}
		?>
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