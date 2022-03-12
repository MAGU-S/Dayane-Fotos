<?php 
	include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dayane Fotos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/css/all.css"><!--icones_stilo-->
	<link rel="preconnect" href="https://fonts.gstatic.comn"><!--icones-->

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"><!--fonte:open sans & Oswald-->

	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet"><!--estilo do site-->
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--deixar o site responsivo-->
	<meta name="author" content="Matheus Henrique de Oliveira Viana & Gustavo Furlanetto">
	<meta name="keywords" content="fotos,álbum de fotos,photo,imagem,fotos para casamento,recem nascido,gravida,albuns de figurinhas,presente dia,presenteie,fotofigurinha,fotografa,fotografo,fotografia">
	<meta name="description" href="Site De Fotos da Dayane, Contrate o nosso serviço, veja alguns dos meus ensaios e trabalhos, e conheça nosso Álbum Fotofigurinha."> 
	

</head>
<body>

	<?php 
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
	 ?>



	<header>
		<div class="header1">
			<div class="center">
				<div class='logo left'><a href="<?php INCLUDE_PATH; ?>"><img src="<?php INCLUDE_PATH; ?>imagens/logo.png" /></a></div><!-- logo -->
				<div class="rede-sociais right">
					<nav>
						<ul>
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>

							<li><a href=""><i class="fab fa-instagram"></i></a></li>

							<li><a href=""><i class="fab fa-whatsapp"></i></a></li>
						</ul>
					</nav>
				</div><!-- rede-sociais -->
				<div class="clear"></div>
			</div><!-- center -->
		</div><!-- header1 -->
		
		<div class="header2">
			<div class="center">
				<nav>
					<ul>
						<li><a title="Home" <?php activeMenu('home'); ?> href="<?php echo INCLUDE_PATH; ?>Home">HOME</a></li>
						<li><a title="Albuns" <?php activeMenu('albuns'); ?> href="<?php echo INCLUDE_PATH; ?>Albuns">ÁLBUNS</a></li>
						<li><a title="Contato" <?php activeMenu('contato'); ?> href="<?php echo INCLUDE_PATH; ?>Contato">CONTATO</a></li>
					</ul>
				</nav>
			</div><!-- center -->
		</div><!-- header2 -->
	</header>


	<?php 
		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			$pagina404 = true;
			include('pages/404.php');
		}
	 ?>


	 <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class = "fixed"'; ?> >
	 		<div class="center">
	 			<h6 class="left">2021@ MAGU'S. Todos os direitos reservados </h6>
	 			<div class="rede-sociais right">
		 			<nav>
						<ul>
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-instagram"></i></a></li>
							<li><a href=""><i class="fab fa-whatsapp"></i></a></li>
							</ul>
					</nav>
				</div><!--Redes-sociais-->
				 <div class="clear"></div>
	 		</div><!--Center-->
	 </footer>
   <script src="<?php INCLUDE_PATH; ?>js/jquery.js"></script>
	 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyD-paHA3TdyaAJRGoC1eehHDvuygO0DQ8M"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
	 <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
</body>
</html>
