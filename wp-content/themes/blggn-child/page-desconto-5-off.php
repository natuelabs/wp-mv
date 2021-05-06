<?php get_header(); ?>

<div class="bootstrap-wrapper fundo-disney">
	<script src="https://kit.fontawesome.com/9283b51075.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://media.mundoverde.com.br/mv-nossas-lojas/assets/grid.css">
	<link rel="stylesheet" type="text/css" href="https://media.mundoverde.com.br/mv-nossas-lojas/assets/custom.css"> 
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
	<link rel="stylesheet" href="https://media.mundoverde.com.br/mv-nossas-lojas/assets/custom.css">
	<!-- <link rel="stylesheet" href="assets/custom.css"> -->

	<style>
		/* ------ MODIFICAÇÃO DE BANNER DO TOPO DA PÁGINA ------ */

		/* Banner para desktop full-hd para desktop (acima de 1538 pixels) */
		@media only screen and (min-width: 1538px){
			.header-verao-mundo-verde-banner {
				background-image: url('https://blog.mundoverde.com.br/wp-content/uploads/2020/09/shopping-market-place.png');
			}
		}

		/* Banner para Desktop */
		@media only screen and (min-width: 992px) and (max-width: 1537px) {
			.header-verao-mundo-verde-banner {
				background-image: url('https://blog.mundoverde.com.br/wp-content/uploads/2020/09/shopping-market-place.png');
			}
		}

		/* Banner para Tablet */
		@media only screen and (min-width: 769px) and (max-width: 991px) {
			.header-verao-mundo-verde-banner {
				background-image: url('https://blog.mundoverde.com.br/wp-content/uploads/2020/09/shopping-market-place-01.png');
			}
		}

		/* Banner para Mobile */
		@media only screen and (max-width: 768px) {
			.header-verao-mundo-verde-banner {
				background-image: url('https://blog.mundoverde.com.br/wp-content/uploads/2020/09/shopping-market-place-01.png');
			}
		}

		.bloco{
			display: block;
		}
		/* ------ / FIM DA MODIFICAÇÃO DE BANNER DO TOPO DA PÁGINA ------ */
	</style>

	<div class="container-fluid">
		<section class="linha bloco-banner">
			<div class="col-12 header-verao-mundo-verde-banner"></div>
		</section>
	</div>

	<div class="container padding-bt-30">
    <section class="linha bloco-filtro">
      <div class="col-12 box-verao-mundo-verde text-center">
        <h1 class="cms-title cor-verde">Apresente o voucher abaixo na loja para obter o desconto</h1>        
      </div>

      <!-- SELECIONE ESTADO -->
 
    </section>

    <section class="linha estados-container">
      <div class="col">

        <section class="linha bloco-unidades">
          <div class="col">
            <div class="linha">
				<div class="col-12 text-center">
					<img src="https://blog.mundoverde.com.br/wp-content/uploads/2020/09/shopping-market-place-01.png" alt="Voucher">
				</div>      
            </div>
          </div>
        </section>

      </div>
    </section>
  </div>

<style>
	:target:before {
		content:"";
		display:inline-block;
		height:180px!important; /* fixed header height*/
		margin:-180px 0 0!important; /* negative fixed header height */
	}
	.margin-tp-bt-40 {
		margin-top: 100px;
		margin-bottom: 40px;
	}
	section.bloco-banner {
		margin-top: 0;
	}
	.botoes-padrao {
	    padding: 0px 20px;
	}
	select#estado, select#cidade, select#unidade {
		-webkit-appearance: none!important;
		 -khtml-appearance: none!important;
		 -moz-appearance: none!important;
		 -ms-appearance: none!important;
		 -o-appearance: none!important;
		 appearance: none!important;
		background: #0f834c;
	}
	select#estado:hover, select#cidade:hover, select#unidade:hover {
	    box-shadow: 0 5px 10px 0px rgba(0,0,0,.3);
	    background-color: #a7d163;
	    color: #0f834c;
	    -webkit-transform: scale(1.03);
	    transform: scale(1.03);
	}
	select#estado:disabled, select#cidade:disabled, select#unidade:disabled {
	    background: #eee;
	    box-shadow: 0 1px 5px 0px rgba(0,0,0,.3);
	    background-color: #ddd;
	    color: #eee;
	    -webkit-transform: none;
	    transform: none;
	}
	div.loja-content h2, div.loja-content h3, div.loja-content h4, div.loja-content h5, div.loja-content a {
		font-size: 14px;
	}
	@media only screen and (max-width: 1537px) and (min-width: 992px){
		.header-verao-mundo-verde-banner {
    		height: 37vw;
		}
	}
	@media only screen and (max-width: 991px) and (min-width: 769px){
		.header-verao-mundo-verde-banner {
		    height: 55vw;
		}
	}
	@media only screen and (max-width: 768px){
		.header-verao-mundo-verde-banner {
	    	height: 54vw;
		}
		section.bloco-banner{
			display: none!important;
		}
	}

</style>

		<div class="container-fluid box-regulamento padding-tp-bt-30">
			<section class="linha bloco-regulamento">
				<div class="col-12 box-verao-mundo-verde box-title-regulamento text-center">
				</div>
			</section>
		</div>

		<!-- partial -->
		<script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js'></script>
		<script src='https://media.mundoverde.com.br/mv-nossas-lojas/assets/scripts.js'></script>
		<!-- <script src='assets/scripts.js'></script> -->
	</div>

	<?php get_footer(); ?>
