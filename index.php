<?php 
	include('config.php');
	$url = isset($_GET['url']) ? $_GET['url'] : 'home';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dayane Fotos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/css/all.css"><!--icones_stilo-->
	<link rel="preconnect" href="https://fonts.gstatic.comn"><!--icones-->

	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet"><!--fonte:open sans-->

	<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet"><!--estilo do site-->
	<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--deixar o site responsivo-->
	<meta name="keywords" content="fotos-tumblr-foto-para-perfil-registro-aleatoria-antiga-animada-a-mais-curtida-do-instagram-fotografia-e-o-texto-remetem--influência-do-estilo-retrata-conhecida-álbum-album-de-ás-como-fotografar-á-noite-máquinas-fotograficas-à-fotografa-bonita-bts-bolo-noite-feste-casal-colorida-capa-facebook-cachorro-colagem-c-namorado-frases-flores-bebê-engraçada-em-pdf-perfil-gente-tirou-instagram-youtube-google-photos-photo-image-imagem-jovem-casamento-recem-nascido-gravida-albuns-de-figurinhas-presente-dia-dos-presenteie-fotofigurinha">
	<meta name="description" href="Site De Fotos da Dayane, Contrate os nossos serviços, veja alguns dos meus ensaios fotográficos e trabalhos, e conheça nosso 'Álbum Fotofigurinha'."> 
	

	
</head>
<body>

	<base base = "<?php INCLUDE_PATH; ?>" />
	
	<header>
		<div class="header1">
			<div class="center">
				<div class='logo left'><a href=""><img src="<?php INCLUDE_PATH; ?>imagens/logo.png" /></a></div><!-- logo -->

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
						<li><a <?php activeMenu('home'); ?> href="<?php INCLUDE_PATH; ?>home">HOME</a></li>
						<li><a <?php activeMenu('albuns'); ?> href="<?php INCLUDE_PATH; ?>albuns">ÁLBUNS</a></li>
						<li><a <?php activeMenu('contato'); ?> href="<?php INCLUDE_PATH; ?>contato">CONTATO</a></li>
					</ul>
				</nav>
			</div><!-- center -->
		</div><!-- header2 -->
<div class="clear"></div>
	</header>
	<?php 
		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			include('pages/404.php'); 
		}
	?>
</body>
</html>