
<div id="popup" class="popup">  <!-- abrir imagem -->
	<?php 
	
			$imgpopup = $_GET['src'];
		
	?>

<a href="javascript: fechar();">	
	<div class="conteiner-popup center">
		<div class="fecharpop">
			<a href="javascript: fechar();"><i class="fas fa-times"></i></a>
		</div>

		<div class="img-up">
			<img src="<?php echo $imgpopup ?>">
		</div>
	</div>
</a>	
</div>
						<!-- abrir imagem -->


<section class="banner-container">
		<div class="overlay"></div><!-- overlay -->
			<div class="box-container center">
				
				<div class="logo"><img src="imagens/logo1.png"></div>
				<p>Precisando de um Fotografo?</p>
				<p>entre em contato!</p>
					<div class="center-btn">
						<form  method="post">
						<a title="Contato" href="<?php echo INCLUDE_PATH; ?>Contato">Contato!</a>
						</form>
					</div>
			</div><!-- box-container -->
</section><!--banner-container-->
<section class="conteudo">
		<h2 class="center">Trabalhamos com:</h2>
	<div class="serviços center">

		<div class="box-serviço">
			<a href="#"><img src="imagens/casamento1.jpg"></a>
			<div class="fade"><p>Casamentos</p></div>
			
		</div><!-- text-serviços -->
		<div class="box-serviço">
			<a href="#"><img src="imagens/gestante2.jpg"></a>
			<div class="fade"><p>Gestantes</p></div>
			
		</div><!-- text-serviços -->
		<div class="box-serviço">
			<a href=""><img src="imagens/bebe.jpg"></a>
			<div class="fade"><p>Aniversários</p></div>
			
		</div><!-- text-serviços -->
		<div class="text-serviços center">
			<p>E ainda tem muito mais como Álbum Fotofigurinhas, Eventos, Books, clique aqui e veja todos os nossos serviços.</p>
			<a href="#Serviços">ver mais</a>
		</div><!-- text-serviços -->

	</div><!-- serviços -->
</section><!-- conteudo -->
<section class="conteudo">
			
		<h2 class="center">Galeria</h2>
	<div class="galeria-home center">

		<a href="javascript: abrir();">
		<div class="box-image">
			
			<img id="imgpop" src="imagens/book.jpg">
		</div></a>

		<div class="box-image">
			<img src="imagens/evento.jpg">
		</div>
		<div class="box-image">
			<img src="imagens/fotogra.jpg">
		</div>
		<div class="box-image">
			<img src="imagens/fotografaO.jpg">
		</div>
		<div class="box-image">
			<img src="imagens/niver.jpg">
		</div>
		<div class="box-image">
			<img src="imagens/bebe2.jpg">
		</div>
		<div class="box-image">
			<img src="imagens/com cameraO.jpg">
		</div>
		<div class="box-image">
			<img src="imagens/album.jpg">
		</div>
		<div class="box-image">
			<img src="imagens/book2.jpg">
		</div>
	</div>

</section><!-- conteudo -->
