<?php get_header(); ?>
<!-- vs1.4 -->
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
    @media only screen and (min-width: 1538px) {
      .header-verao-mundo-verde-banner {
        background-image: url('https://media.mundoverde.com.br/blog-media/mv/campanha-disney/images/banner-header.jpg?v=1');
      }
    }

    /* Banner para Desktop */
    @media only screen and (min-width: 992px) and (max-width: 1537px) {
      .header-verao-mundo-verde-banner {
        background-image: url('https://media.mundoverde.com.br/blog-media/mv/campanha-disney/images/banner-header-desk.jpg?v=1');
      }
    }

    /* Banner para Tablet */
    @media only screen and (min-width: 769px) and (max-width: 991px) {
      .header-verao-mundo-verde-banner {
        background-image: url('https://media.mundoverde.com.br/blog-media/mv/campanha-disney/images/banner-header-tablet.jpg?v=1');
      }
    }

    /* Banner para Mobile */
    @media only screen and (max-width: 768px) {
      .header-verao-mundo-verde-banner {
        background-image: url('https://media.mundoverde.com.br/blog-media/mv/campanha-disney/images/banner-header-mobile.jpg?v=1');
      }
    }

    .bloco {
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
        <h1 class="cms-title cor-verde">Encontre a loja mais próxima da sua casa</h1>
        <h2 style="font-size: 1.2rem;
                   width: 100%;
                   display: inline-block;
                   font-weight: normal;
                   margin-top: -17px;
                   margin-bottom: 40px;" class="cms-title cor-verde">
          Consulte a disponibilidade de estoque em cada loja
        </h2>
      </div>

      <!-- SELECIONE ESTADO -->
      <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 botao-selecionar">
        <!-- <select class="selecionar botao-mv botoes-padrao" name="forma" onchange="location = this.options[this.selectedIndex].value;"> -->
        <select class="selecionar botao-mv botoes-padrao" name="estado" id="estado" style="text-transform: capitalize;">
          <option value="selecione">Selecione Estado</option>
        </select>
        <i class="fas fa-chevron-down botao-selecionar-down"></i>
      </div>

      <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 botao-selecionar">
        <select class="selecionar botao-mv botoes-padrao" name="cidade" id="cidade" style="text-transform: capitalize;" disabled>
          <option value="selecione">Selecione Cidade</option>
        </select>
        <i class="fas fa-chevron-down botao-selecionar-down"></i>
      </div>

      <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 botao-selecionar">
        <select class="selecionar botao-mv botoes-padrao" name="unidade" id="unidade" style="text-transform: capitalize;" disabled>
          <option value="selecione">Selecione Unidade</option>
        </select>
        <i class="fas fa-chevron-down botao-selecionar-down"></i>
      </div>
    </section>

    <section class="linha estados-container">
      <div class="col">

        <section class="linha bloco-unidades">
          <div class="col">
            <div class="linha">
              <div class="col-12 estado-subtitulo">
                <h2 class="subtitulo cor-verde margin-tp-bt-40" style="font-size: 36px"></h2>
              </div>
            </div>
          </div>
        </section>

        <section class="linha bloco-unidades">
          <div class="col">
            <section class="linha">

              <!-- JBQ Lojas Disney -->

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 go rio-verde rio-verde'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>RIO VERDE</strong></h2>
                        <h3>RUA RUI BARBOSA ,750, QUADRA 05 LOTE 04 PARTE A, SETOR COMERCIAL - RIO VERDE</h3>

                        <a href='https://www.google.com.br/maps/search/RUA RUI BARBOSA , 750, QUADRA 05 LOTE 04 PARTE A, SETOR COMERCIAL - RIO VERDE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo perdizes'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PERDIZES</strong></h2>
                        <h3>R CARDOSO DE ALMEIDA,1372, , PERDIZES - SAO PAULO</h3>

                        <a href='https://www.google.com.br/maps/search/R CARDOSO DE ALMEIDA, 1372, , PERDIZES - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte belo-horizonte-prudente-de-mor'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BELO HORIZONTE PRUDENTE DE MORAIS</strong></h2>
                        <h3>AV PRUDENTE DE MORAIS,563, , SANTO ANTONIO - BELO HORIZONTE</h3>

                        <a href='https://www.google.com.br/maps/search/AV PRUDENTE DE MORAIS, 563, , SANTO ANTONIO - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte buritis'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BURITIS</strong></h2>
                        <h3>AV PROFESSOR MARIO WERNECK ,1225, LOJA 01, ESTERIL - BELO HORIZONTE</h3>

                        <a href='https://www.google.com.br/maps/search/AV PROFESSOR MARIO WERNECK , 1225, LOJA 01, ESTERIL - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo shopping-eldorado'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING ELDORADO</strong></h2>
                        <h3>AV REBOUCAS,3970, LOJA 112 - SHOPPING ELDORADO, PINHEIROS - SAO PAULO</h3>

                        <a href='https://www.google.com.br/maps/search/AV REBOUCAS, 3970, LOJA 112 - SHOPPING ELDORADO, PINHEIROS - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sorocaba extra-santa-rosalia'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>EXTRA SANTA ROSALIA</strong></h2>
                        <h3>R MARIA CINTO DE BIAGGI,164, SUC 27, JARDIM SANTA ROSALIA - SOROCABA</h3>

                        <a href='https://www.google.com.br/maps/search/R MARIA CINTO DE BIAGGI, 164, SUC 27, JARDIM SANTA ROSALIA - SOROCABA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo shopping-vila-olimpia'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING VILA OLIMPIA</strong></h2>
                        <h3>RUA OLIMPIADAS,360, LOJA 206 - SHOPPING VILA OLIMPIA, VILA OLIMPIA - SAO PAULO</h3>

                        <a href='https://www.google.com.br/maps/search/RUA OLIMPIADAS, 360, LOJA 206 - SHOPPING VILA OLIMPIA, VILA OLIMPIA  - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro center-point-valqueire-sh-ant'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CENTER POINT VALQUEIRE SH (ANTIGA VILA VALQUEIRE)</strong></h2>
                        <h3>RUA LUIZ BELTRAO,160, LOJA 113, VILA VALQUEIRE - RIO DE JANEIRO</h3>

                        <a href='https://www.google.com.br/maps/search/RUA LUIZ BELTRAO, 160, LOJA 113, VILA VALQUEIRE - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg vicosa vicosa'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>VIÇOSA</strong></h2>
                        <h3>AV PETER HENRY ROLFS, 425 LOJA 01 BLOCO 1,425, LOJA 01 BLOCO 1 , CENTRO - VIÇOSA</h3>

                        <a href='https://www.google.com.br/maps/search/AV PETER HENRY ROLFS, 425 LOJA 01 BLOCO 1, 425, LOJA 01 BLOCO 1 , CENTRO - VIÇOSA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 go goiania goiania-'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>GOIANIA </strong></h2>
                        <h3>R 9,1262, QUADRA G9 - LOTE 15 -LOJA 02 a 04, SETOR OESTE - GOIANIA</h3>

                        <a href='https://www.google.com.br/maps/search/R 9, 1262, QUADRA G9 - LOTE 15 -LOJA 02 a 04, SETOR OESTE - GOIANIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 go catalao catalao'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CATALAO</strong></h2>
                        <h3>AV 20 DE AGOSTO,2033, SALA 2, SETOR CENTRAL - CATALAO</h3>

                        <a href='https://www.google.com.br/maps/search/AV 20 DE AGOSTO, 2033, SALA 2, SETOR CENTRAL - CATALAO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pe recife recife-shopping'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>RECIFE SHOPPING</strong></h2>
                        <h3>R PADRE CARAPUCEIRO,777, LOJA BV 90 , BOA VIAGEM - RECIFE</h3>

                        <a href='https://www.google.com.br/maps/search/R PADRE CARAPUCEIRO, 777, LOJA BV 90 , BOA VIAGEM - RECIFE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pe recife shopping-riomar-recife'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING RIOMAR RECIFE</strong></h2>
                        <h3>AV REPUBLICA DO LIBANO,251, LOJA 139, PINA - RECIFE</h3>

                        <a href='https://www.google.com.br/maps/search/AV REPUBLICA DO LIBANO, 251, LOJA 139, PINA - RECIFE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pe recife shopping-tacaruna-recife'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING TACARUNA RECIFE</strong></h2>
                        <h3>AV AGAMENON MAGALHAES,153, LOJA 253 - SHOPPING TACARUNA, SANTO AMARO - RECIFE</h3>

                        <a href='https://www.google.com.br/maps/search/AV AGAMENON MAGALHAES, 153, LOJA 253 - SHOPPING TACARUNA, SANTO AMARO - RECIFE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte bh-lourdes'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BH LOURDES</strong></h2>
                        <h3>R CURITIBA,1982, , LOURDES - BELO HORIZONTE</h3>

                        <a href='https://www.google.com.br/maps/search/R CURITIBA, 1982, , LOURDES - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 go goiania shopping-orion'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING ORION</strong></h2>
                        <h3>AV. PORTUGAL,1148, , SETOR MARISTA - GOIANIA</h3>

                        <a href='https://www.google.com.br/maps/search/AV. PORTUGAL, 1148, , SETOR MARISTA - GOIANIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp marilia marilia-shopping'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MARILIA SHOPPING</strong></h2>
                        <h3>R. DOS TUCUNARES,500, LOJA 113, JARDIM MARIA MARTHA - MARILIA</h3>

                        <a href='https://www.google.com.br/maps/search/R. DOS TUCUNARES, 500, LOJA 113, JARDIM MARIA MARTHA  - MARILIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rn parnamirim shopping-cidade-verde'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING CIDADE VERDE</strong></h2>
                        <h3>AV AYRTON SENNA ,1995, LOJA 08, NOVA PARNAMIRIM - PARNAMIRIM</h3>

                        <a href='https://www.google.com.br/maps/search/AV AYRTON SENNA , 1995, LOJA 08, NOVA PARNAMIRIM - PARNAMIRIM' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rn natal natal-tirol-shop-cidade-jardi'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NATAL TIROL (SHOP CIDADE JARDIM)</strong></h2>
                        <h3>AV AFONSO PENA,632, , TIROL - NATAL</h3>

                        <a href='https://www.google.com.br/maps/search/AV AFONSO PENA, 632, , TIROL  - NATAL' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rn natal natal-shopp-midway-mall'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NATAL SHOPP MIDWAY MALL</strong></h2>
                        <h3>AV BERNARDO VIEIRA,3775, LOJA 166/167 - NATAL SHOPPING MIDWAY MALL, TIROL - NATAL</h3>

                        <a href='https://www.google.com.br/maps/search/AV BERNARDO VIEIRA, 3775, LOJA 166/167 - NATAL SHOPPING MIDWAY MALL, TIROL - NATAL' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rn natal natal-shop-cidade-jardim-nort'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NATAL SHOP CIDADE JARDIM (NORTE SHOPPING NATAL)</strong></h2>
                        <h3>AV ENGENHEIRO ROBERTO FREIRE,340, LOJA 61/61A - SHOPPING CIDADE JARDIM, CAPIM MACIO - NATAL</h3>

                        <a href='https://www.google.com.br/maps/search/AV ENGENHEIRO ROBERTO FREIRE, 340, LOJA 61/61A - SHOPPING CIDADE JARDIM, CAPIM MACIO - NATAL' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo vila-leopoldina'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>VILA LEOPOLDINA</strong></h2>
                        <h3>R CARLOS WEBER,654/662, , VILA LEOPOLDINA - SAO PAULO</h3>

                        <a href='https://www.google.com.br/maps/search/R CARLOS WEBER, 654/662, , VILA LEOPOLDINA - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce maracanau north-shopping-maracanau'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NORTH SHOPPING MARACANAU</strong></h2>
                        <h3>AVENIDA CARLOS JEREISSATI,100, LOJA 239, JEREISSATI II - MARACANAU</h3>

                        <a href='https://www.google.com.br/maps/search/AVENIDA CARLOS JEREISSATI, 100,  LOJA 239, JEREISSATI II - MARACANAU' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce sobral sobral-shopping-'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SOBRAL SHOPPING </strong></h2>
                        <h3>AV MONSENHOR JOSE ALOISIO PINTO ,300, LUC 135, DOM EXPEDITO - SOBRAL</h3>

                        <a href='https://www.google.com.br/maps/search/AV MONSENHOR JOSE ALOISIO PINTO , 300, LUC 135, DOM EXPEDITO - SOBRAL' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mt lucas-do-rio-verde lucas-do-rio-verde'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>LUCAS DO RIO VERDE</strong></h2>
                        <h3>AV AMAZONAS,553S, SALA 02, CENTRO - LUCAS DO RIO VERDE</h3>

                        <a href='https://www.google.com.br/maps/search/AV AMAZONAS, 553S, SALA 02, CENTRO - LUCAS DO RIO VERDE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 go goiania goiania-setor-bueno'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>GOIANIA SETOR BUENO</strong></h2>
                        <h3>AV T 10 1160 QUADRA 108,108, LOTE 11, SETOR BUENO - GOIANIA</h3>

                        <a href='https://www.google.com.br/maps/search/AV T 10 1160 QUADRA 108, 108, LOTE 11, SETOR BUENO - GOIANIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ma sao-luis sao-luis'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SAO LUIS</strong></h2>
                        <h3>AV PROF CARLOS CUNHA,301 e 302, LOJA 111/112 - SÃO LUIZ SHOPPING, JARACATY - SAO LUIS</h3>

                        <a href='https://www.google.com.br/maps/search/AV PROF CARLOS CUNHA, 301 e 302, LOJA 111/112 - SÃO LUIZ SHOPPING, JARACATY - SAO LUIS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pi teresina teresina'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TERESINA</strong></h2>
                        <h3>R SENADOR TEODORO PACHECO,1179, LOJA 01, CENTRO - TERESINA</h3>

                        <a href='https://www.google.com.br/maps/search/R SENADOR TEODORO PACHECO, 1179, LOJA 01, CENTRO - TERESINA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pi teresina teresina-jockey-clube'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TERESINA JOCKEY CLUBE</strong></h2>
                        <h3>AV HOMERO CASTELO BRANCO,1000, , SAO CRISTOVAO - TERESINA</h3>

                        <a href='https://www.google.com.br/maps/search/AV HOMERO CASTELO BRANCO, 1000, , SAO CRISTOVAO - TERESINA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp campinas shopping-iguatemi-campinas'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING IGUATEMI CAMPINAS</strong></h2>
                        <h3>AV IGUATEMI,777, SUC 15 -02B - SHOPPING IGUATEMI CAMPINAS, VILA BRANDINA - CAMPINAS</h3>

                        <a href='https://www.google.com.br/maps/search/AV IGUATEMI, 777, SUC 15 -02B - SHOPPING IGUATEMI CAMPINAS, VILA BRANDINA - CAMPINAS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pi teresina teresina-shopping'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TERESINA SHOPPING</strong></h2>
                        <h3>AV RAUL LOPES ,1000, LOJA 302, NOIVOS - TERESINA</h3>

                        <a href='https://www.google.com.br/maps/search/AV RAUL LOPES , 1000, LOJA 302, NOIVOS - TERESINA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ms campo-grande jardim-dos-estados---campo-gra'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>JARDIM DOS ESTADOS - CAMPO GRANDE</strong></h2>
                        <h3>R ANTONIO MARIA COELHO,3648, LOJA 2, JARDIM DOS ESTADOS - CAMPO GRANDE</h3>

                        <a href='https://www.google.com.br/maps/search/R ANTONIO MARIA COELHO, 3648, LOJA 2, JARDIM DOS ESTADOS - CAMPO GRANDE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza fortaleza-iguatemi'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FORTALEZA IGUATEMI</strong></h2>
                        <h3>AV WASHINGTON SOARES,85, LOJA 415 - SHOPPING IGUATEMI, EDSON QUEIROZ - FORTALEZA</h3>

                        <a href='https://www.google.com.br/maps/search/AV WASHINGTON SOARES, 85, LOJA 415 - SHOPPING IGUATEMI, EDSON QUEIROZ - FORTALEZA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp campinas campinas-cambui'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CAMPINAS CAMBUI</strong></h2>
                        <h3>R MARIA MONTEIRO,1476, , CAMBUI - CAMPINAS</h3>

                        <a href='https://www.google.com.br/maps/search/R MARIA MONTEIRO, 1476, , CAMBUI - CAMPINAS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza fortaleza-north-shopping'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FORTALEZA NORTH SHOPPING</strong></h2>
                        <h3>AV BEZERRA DE MENEZES,2450, NORTH SHOPPING, ALAGADICO - FORTALEZA</h3>

                        <a href='https://www.google.com.br/maps/search/AV BEZERRA DE MENEZES, 2450, NORTH SHOPPING, ALAGADICO - FORTALEZA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza fortaleza-coco'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FORTALEZA COCO</strong></h2>
                        <h3>AV ENGENHEIRO SANTANA JUNIOR,2277, LOJA 1/2/3 - SHOPPING CASA BLANCA MALL, COCO - FORTALEZA</h3>

                        <a href='https://www.google.com.br/maps/search/AV ENGENHEIRO SANTANA JUNIOR, 2277, LOJA 1/2/3 - SHOPPING CASA BLANCA MALL, COCO - FORTALEZA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp campinas campinas-shoppping-dom-pedro'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CAMPINAS SHOPPPING DOM PEDRO</strong></h2>
                        <h3>PRQ SHOPPING CENTER PARQUE D PEDRO,500, LOJA 56, JARDIM SANTA GENEBRA - CAMPINAS</h3>

                        <a href='https://www.google.com.br/maps/search/PRQ SHOPPING CENTER PARQUE D PEDRO, 500, LOJA 56, JARDIM SANTA GENEBRA - CAMPINAS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza fortaleza-centro'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FORTALEZA CENTRO</strong></h2>
                        <h3>RUA GENERAL CLARINDO DE QUEIROZ ,641, , CENTRO - FORTALEZA</h3>

                        <a href='https://www.google.com.br/maps/search/RUA GENERAL CLARINDO DE QUEIROZ , 641, , CENTRO - FORTALEZA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza north-shopping-joquei-ce'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NORTH SHOPPING JOQUEI-CE</strong></h2>
                        <h3>AVENIDA LINEU MACHADO,419, LOJA 1070, JOQUEI CLUBE - FORTALEZA</h3>

                        <a href='https://www.google.com.br/maps/search/AVENIDA LINEU MACHADO, 419, LOJA 1070, JOQUEI CLUBE - FORTALEZA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza shopping-via-sul'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING VIA SUL</strong></h2>
                        <h3>AVENIDA WASHINGTON SOARES,4335, LOJA 318, SAPIRANGA - FORTALEZA</h3>

                        <a href='https://www.google.com.br/maps/search/AVENIDA WASHINGTON SOARES, 4335, LOJA 318, SAPIRANGA - FORTALEZA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza shopping-parangaba'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING PARANGABA</strong></h2>
                        <h3>R GERMANO FRANCK,300, LOJA 142 - SHOPPING PARANGABA, PARANGABA - FORTALEZA</h3>

                        <a href='https://www.google.com.br/maps/search/R GERMANO FRANCK, 300, LOJA 142 - SHOPPING PARANGABA, PARANGABA - FORTALEZA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza fortaleza-rio-mar'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FORTALEZA RIO MAR</strong></h2>
                        <h3>R LAURO NOGUEIRA,1500, LOJA 1130/1131 - SHOPPING RIO MAR, PAPICU - FORTALEZA</h3>

                        <a href='https://www.google.com.br/maps/search/R LAURO NOGUEIRA, 1500, LOJA 1130/1131 - SHOPPING RIO MAR, PAPICU - FORTALEZA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg uberlandia uberlandia'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>UBERLANDIA</strong></h2>
                        <h3>AV PAULO GRACINDO,15, LOJA 1 , MORADA DA COLINA - UBERLANDIA</h3>

                        <a href='https://www.google.com.br/maps/search/AV PAULO GRACINDO, 15, LOJA 1 , MORADA DA COLINA - UBERLANDIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte belo-horizonte-anchieta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BELO HORIZONTE ANCHIETA</strong></h2>
                        <h3>R FRANCISCO DESLANDES,855, LOJA 01, ANCHIETA - BELO HORIZONTE</h3>

                        <a href='https://www.google.com.br/maps/search/R FRANCISCO DESLANDES, 855, LOJA 01, ANCHIETA - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza shopping-aldeota'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING ALDEOTA</strong></h2>
                        <h3>AV DOM LUIS ,500, LOJA138 - SHOPPING ALDEOTA, MEIRELES - FORTALEZA</h3>

                        <a href='https://www.google.com.br/maps/search/AV DOM LUIS , 500, LOJA138 - SHOPPING ALDEOTA, MEIRELES - FORTALEZA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza benfica-shopping-'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BENFICA SHOPPING </strong></h2>
                        <h3>RUA CARAPINIMA,2200, LOJA 251 - PISO 1, BENFICA - FORTALEZA</h3>

                        <a href='https://www.google.com.br/maps/search/RUA CARAPINIMA, 2200, LOJA 251 - PISO 1, BENFICA - FORTALEZA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte bh-savassi'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BH SAVASSI</strong></h2>
                        <h3>AV GETULIO VARGAS,1585, LOJA 02, SAVASSI - BELO HORIZONTE</h3>

                        <a href='https://www.google.com.br/maps/search/AV GETULIO VARGAS, 1585, LOJA 02, SAVASSI - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza shopping-messejana'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING MESSEJANA</strong></h2>
                        <h3>AVENIDA FREI CIRILO,3840, , MESSEJANA - FORTALEZA</h3>

                        <a href='https://www.google.com.br/maps/search/AVENIDA FREI CIRILO, 3840, , MESSEJANA - FORTALEZA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte afonso-pena-abc'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>AFONSO PENA ABC</strong></h2>
                        <h3>AV AFONSO PENA,2706, LOJA 02, SAVASSI - BELO HORIZONTE</h3>

                        <a href='https://www.google.com.br/maps/search/AV AFONSO PENA, 2706, LOJA 02, SAVASSI  - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 al maceio maceio-shopping'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MACEIO SHOPPING</strong></h2>
                        <h3>AV COMENDADOR GUSTAVO PAIVA,2990, LOJA 233, MANGABEIRAS - MACEIO</h3>

                        <a href='https://www.google.com.br/maps/search/AV COMENDADOR GUSTAVO PAIVA, 2990, LOJA 233, MANGABEIRAS - MACEIO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte bh-castelo'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BH CASTELO</strong></h2>
                        <h3>AV DOS ENGENHEIROS,560, LOJA 10, CASTELO - BELO HORIZONTE</h3>

                        <a href='https://www.google.com.br/maps/search/AV DOS ENGENHEIROS, 560, LOJA 10, CASTELO - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 al maceio maceio-ponta-verde'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MACEIO PONTA VERDE</strong></h2>
                        <h3>RUA ENGENHEIRO MARIO DE GUSMÃO,440, , PONTA VERDE - MACEIO</h3>

                        <a href='https://www.google.com.br/maps/search/RUA ENGENHEIRO MARIO DE GUSMÃO, 440, , PONTA VERDE - MACEIO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj nova-friburgo friburgo'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FRIBURGO</strong></h2>
                        <h3>AV ALBERTO BRAUNE,85, LOJA, CENTRO - NOVA FRIBURGO</h3>

                        <a href='https://www.google.com.br/maps/search/AV ALBERTO BRAUNE, 85, LOJA, CENTRO - NOVA FRIBURGO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pr ponta-grossa ponta-grossa-'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PONTA GROSSA </strong></h2>
                        <h3>RUA DOUTOR PAULA XAVIER ,1199, SALA 02, CENTRO - PONTA GROSSA</h3>

                        <a href='https://www.google.com.br/maps/search/RUA DOUTOR PAULA XAVIER , 1199, SALA 02, CENTRO - PONTA GROSSA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj nova-friburgo friburgo-praca'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FRIBURGO PRACA</strong></h2>
                        <h3>PRACA DEMERVAL BARBOSA MOREIRA,30, , CENTRO - NOVA FRIBURGO</h3>

                        <a href='https://www.google.com.br/maps/search/PRACA DEMERVAL BARBOSA MOREIRA, 30, , CENTRO - NOVA FRIBURGO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 al maceio maceio-parque-shopping'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MACEIO PARQUE SHOPPING</strong></h2>
                        <h3>AV GUSTAVO PAIVA,5945, LOJA 1020, CRUZ DAS ALMAS - MACEIO</h3>

                        <a href='https://www.google.com.br/maps/search/AV GUSTAVO PAIVA, 5945, LOJA 1020, CRUZ DAS ALMAS - MACEIO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj campos-dos-goytacazes campos-pelinca'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CAMPOS PELINCA</strong></h2>
                        <h3>AV PELINCA,228, , PARQUE TAMANDARE - CAMPOS DOS GOYTACAZES</h3>

                        <a href='https://www.google.com.br/maps/search/AV PELINCA, 228, , PARQUE TAMANDARE - CAMPOS DOS GOYTACAZES' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ba salvador salvador-shopping-paralela'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SALVADOR SHOPPING PARALELA</strong></h2>
                        <h3>AV LUIZ VIANA,8544, LOJA 210/211 - SALVADOR SHOPPING CENTER PARALELA, PARALELA - SALVADOR</h3>

                        <a href='https://www.google.com.br/maps/search/AV LUIZ VIANA, 8544, LOJA 210/211 - SALVADOR SHOPPING CENTER PARALELA, PARALELA - SALVADOR' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ba salvador salvador-shopping'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SALVADOR SHOPPING</strong></h2>
                        <h3>AV TANCREDO NEVES,2915, LOJA 1074 -SALVADOR SHOPPING, CAMINHO DAS ARVORES - SALVADOR</h3>

                        <a href='https://www.google.com.br/maps/search/AV TANCREDO NEVES, 2915, LOJA 1074 -SALVADOR SHOPPING, CAMINHO DAS ARVORES - SALVADOR' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ba salvador salvador-shopping-barra'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SALVADOR SHOPPING BARRA</strong></h2>
                        <h3>AV CENTENARIO,2992, LOJA 356/357 SHOPPING BARRA, CHAME CHAME - SALVADOR</h3>

                        <a href='https://www.google.com.br/maps/search/AV CENTENARIO, 2992, LOJA 356/357 SHOPPING BARRA, CHAME CHAME - SALVADOR' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg teofilo-otoni- teofilo-otoni'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TEOFILO OTONI</strong></h2>
                        <h3>AVENIDA ALFREDO SÁ,2221, , JARDIM DAS ACACIAS - TEOFILO OTONI </h3>

                        <a href='https://www.google.com.br/maps/search/AVENIDA ALFREDO SÁ, 2221, , JARDIM DAS ACACIAS - TEOFILO OTONI ' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ba salvador shopping-da-bahia'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING DA BAHIA</strong></h2>
                        <h3>AV TANCREDO NEVES,148, LOJA 22 - QP - SHOPPING IGAUTEMI, CAMINHO DAS ARVORES - SALVADOR</h3>

                        <a href='https://www.google.com.br/maps/search/AV TANCREDO NEVES, 148, LOJA 22 - QP - SHOPPING IGAUTEMI, CAMINHO DAS ARVORES - SALVADOR' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pr londrina boulervard-londrina-jd-quebec'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BOULERVARD LONDRINA (JD QUEBEC)</strong></h2>
                        <h3>AV THEODORO VICTORELLI,150, LOJA 70, HELENA - LONDRINA</h3>

                        <a href='https://www.google.com.br/maps/search/AV THEODORO VICTORELLI, 150, LOJA 70, HELENA - LONDRINA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rs porto-alegre shopping-iguatemi-porto-alegre'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING IGUATEMI PORTO ALEGRE</strong></h2>
                        <h3>AV JOAO WALLIG ,1800, ANDAR 1 - SHOPPING IGUATEMI PORTO ALEGRE LOJA 1283, PASSO DA AREA - PORTO ALEGRE</h3>

                        <a href='https://www.google.com.br/maps/search/AV JOAO WALLIG , 1800, ANDAR 1 - SHOPPING IGUATEMI PORTO ALEGRE  LOJA 1283, PASSO DA AREA - PORTO ALEGRE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg juiz-de-fora juiz-de-fora'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>JUIZ DE FORA</strong></h2>
                        <h3>R SANTA RITA,506, , CENTRO - JUIZ DE FORA</h3>

                        <a href='https://www.google.com.br/maps/search/R SANTA RITA, 506, , CENTRO - JUIZ DE FORA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pa parauapebas parauapebas'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PARAUAPEBAS</strong></h2>
                        <h3>RUA E,641, QUADRA 49 LOTE 11, CIDADE NOVA - PARAUAPEBAS</h3>

                        <a href='https://www.google.com.br/maps/search/RUA E, 641, QUADRA 49 LOTE 11, CIDADE NOVA  - PARAUAPEBAS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ro porto-velho porto-velho'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PORTO VELHO</strong></h2>
                        <h3>AV CARLOS GOMES,1315, , CENTRO - PORTO VELHO</h3>

                        <a href='https://www.google.com.br/maps/search/AV CARLOS GOMES, 1315, , CENTRO - PORTO VELHO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro tijuca-conde-de-bonfim'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TIJUCA CONDE DE BONFIM</strong></h2>
                        <h3>R CONDE DE BONFIM,678, LOJA B, TIJUCA - RIO DE JANEIRO</h3>

                        <a href='https://www.google.com.br/maps/search/R CONDE DE BONFIM, 678, LOJA B, TIJUCA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro tijuca-saens-pena'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TIJUCA SAENS PENA</strong></h2>
                        <h3>R CONDE DE BONFIM,383, LOJA C, TIJUCA - RIO DE JANEIRO</h3>

                        <a href='https://www.google.com.br/maps/search/R CONDE DE BONFIM, 383, LOJA C, TIJUCA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro shopping-tijuca'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING TIJUCA</strong></h2>
                        <h3>AV MARACANA,987, LOJA 1050 - SHOPPING TIJUCA, TIJUCA - RIO DE JANEIRO</h3>

                        <a href='https://www.google.com.br/maps/search/AV MARACANA, 987, LOJA 1050 - SHOPPING TIJUCA, TIJUCA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj niteroi niteroi-centro'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NITEROI CENTRO</strong></h2>
                        <h3>R DA CONCEICAO,163, , CENTRO - NITEROI</h3>

                        <a href='https://www.google.com.br/maps/search/R DA CONCEICAO, 163, , CENTRO - NITEROI' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj niteroi niteroi-moreira-cesar'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NITEROI MOREIRA CESAR</strong></h2>
                        <h3>R GAVIAO PEIXOTO,117, LOJA 102 E 103, ICARAI - NITEROI</h3>

                        <a href='https://www.google.com.br/maps/search/R GAVIAO PEIXOTO, 117, LOJA 102 E 103, ICARAI - NITEROI' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro norte-shopping'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NORTE SHOPPING</strong></h2>
                        <h3>AV DOM HELDER CAMARA,5474, LOJA 816/817 - NORTE SHOPPING, PIEDADE - RIO DE JANEIRO</h3>

                        <a href='https://www.google.com.br/maps/search/AV DOM HELDER CAMARA, 5474, LOJA 816/817 - NORTE SHOPPING, PIEDADE - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rr boa-vista boa-vista-garden'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BOA VISTA GARDEN</strong></h2>
                        <h3>AV VILLE ROY ,1544, LOJA 07 PISO L1, CACARI - BOA VISTA</h3>

                        <a href='https://www.google.com.br/maps/search/AV VILLE ROY , 1544, LOJA 07 PISO L1, CACARI - BOA VISTA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sc florianopolis florianopolis-shopping-iguatem'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FLORIANOPOLIS SHOPPING IGUATEMI</strong></h2>
                        <h3>AV MADRE BENVENUTA,687, LOJA 108 - PISO L1, SANTA MONICA - FLORIANOPOLIS</h3>

                        <a href='https://www.google.com.br/maps/search/AV MADRE BENVENUTA, 687, LOJA 108 - PISO L1, SANTA MONICA - FLORIANOPOLIS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro norte-shopping-2'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NORTE SHOPPING 2</strong></h2>
                        <h3>AV DOM HELDER CAMARA,5080, SALAO COMERCIAL 4306 - PISO S - SHOPPING NORTE 2, DEL CASTILHO - RIO DE JANEIRO</h3>

                        <a href='https://www.google.com.br/maps/search/AV DOM HELDER CAMARA, 5080, SALAO COMERCIAL 4306 - PISO S - SHOPPING NORTE 2, DEL CASTILHO - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte shopping-boulevard-bh'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING BOULEVARD BH</strong></h2>
                        <h3>AV DOS ANDRADAS,3002, LOJA 1043 - SHOPPING BOULEVARD BH, SANTA EFIGENIA - BELO HORIZONTE</h3>

                        <a href='https://www.google.com.br/maps/search/AV DOS ANDRADAS, 3002, LOJA 1043 - SHOPPING BOULEVARD BH, SANTA EFIGENIA  - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro campo-grande-passeio'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CAMPO GRANDE PASSEIO</strong></h2>
                        <h3>RUA AURELIO FIGUEIREDO ,114, LOJA A, CAMPO GRANDE - RIO DE JANEIRO</h3>

                        <a href='https://www.google.com.br/maps/search/RUA AURELIO FIGUEIREDO , 114, LOJA A, CAMPO GRANDE - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sc joinville joinville'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>JOINVILLE</strong></h2>
                        <h3>R DOUTOR JOAO COLIN,446, LOJA 01, CENTRO - JOINVILLE</h3>

                        <a href='https://www.google.com.br/maps/search/R DOUTOR JOAO COLIN, 446, LOJA 01, CENTRO - JOINVILLE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp catanduva catanduva'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CATANDUVA</strong></h2>
                        <h3>R MARANHAO,1065, , CENTRO - CATANDUVA</h3>

                        <a href='https://www.google.com.br/maps/search/R MARANHAO, 1065, , CENTRO - CATANDUVA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp ribeirao-preto ribeirao-preto-centro'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>RIBEIRAO PRETO CENTRO</strong></h2>
                        <h3>AV NOVE DE JULHO,673, , CENTRO - RIBEIRAO PRETO</h3>

                        <a href='https://www.google.com.br/maps/search/AV NOVE DE JULHO, 673, , CENTRO - RIBEIRAO PRETO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro campo-grande-rj'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CAMPO GRANDE RJ</strong></h2>
                        <h3>R MAJOR DE ALMEIDA DA COSTA,14, LOJA A, CAMPO GRANDE - RIO DE JANEIRO</h3>

                        <a href='https://www.google.com.br/maps/search/R MAJOR DE ALMEIDA DA COSTA, 14, LOJA A, CAMPO GRANDE - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj mage piabeta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PIABETA</strong></h2>
                        <h3>AV SANTOS DUMONT,177, LOJA 02, CENTRO/PIABETA - MAGE</h3>

                        <a href='https://www.google.com.br/maps/search/AV SANTOS DUMONT, 177, LOJA 02, CENTRO/PIABETA - MAGE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo shopping-metro-tucuruvi'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING METRO TUCURUVI</strong></h2>
                        <h3>AV DR ANTONIO MARIA DE LAET,566, SALAO COMERCIAL 49 T PISO TERREO - SHOPPING METRO TUCURUVI, PARADA INGLESA - SAO PAULO</h3>

                        <a href='https://www.google.com.br/maps/search/AV DR ANTONIO MARIA DE LAET, 566, SALAO COMERCIAL 49 T PISO TERREO - SHOPPING METRO TUCURUVI, PARADA INGLESA - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo mandaqui'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MANDAQUI</strong></h2>
                        <h3>RUA AUGUSTO TOLLE,771, LOJA 02, SANTANA - SAO PAULO</h3>

                        <a href='https://www.google.com.br/maps/search/RUA AUGUSTO TOLLE, 771, LOJA 02, SANTANA - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo shopping-metro-santa-cruz-'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING METRO SANTA CRUZ </strong></h2>
                        <h3>RUA DOMINGOS DE MORAIS ,2564, LOJA 42T - SHOPPING METRO STA CRUZ, VILA MARIANA - SAO PAULO</h3>

                        <a href='https://www.google.com.br/maps/search/RUA DOMINGOS DE MORAIS , 2564, LOJA 42T - SHOPPING METRO STA CRUZ, VILA MARIANA - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sc florianopolis florianopolis'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FLORIANOPOLIS</strong></h2>
                        <h3>AV PREFEITO OSMAR CUNHA,339, , CENTRO - FLORIANOPOLIS</h3>

                        <a href='https://www.google.com.br/maps/search/AV PREFEITO OSMAR CUNHA, 339, , CENTRO - FLORIANOPOLIS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp guarulhos shopping-internacional-guarulh'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING INTERNACIONAL GUARULHOS</strong></h2>
                        <h3>R ENGENHEIRO CAMILO OLIVETTI,295, LOJA D21 - SHOPPING INTERNACIONAL DE GUARULHOS, VILA ENDRES - GUARULHOS</h3>

                        <a href='https://www.google.com.br/maps/search/R ENGENHEIRO CAMILO OLIVETTI, 295, LOJA D21 - SHOPPING INTERNACIONAL DE GUARULHOS, VILA ENDRES - GUARULHOS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo moema-cotovia'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MOEMA COTOVIA</strong></h2>
                        <h3>AV COTOVIA,342, , MOEMA - SAO PAULO</h3>

                        <a href='https://www.google.com.br/maps/search/AV COTOVIA, 342, , MOEMA - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo vila-pompeia'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>VILA POMPEIA</strong></h2>
                        <h3>AV POMPEIA,1213, , VILA POMPEIA - SAO PAULO</h3>

                        <a href='https://www.google.com.br/maps/search/AV POMPEIA, 1213, , VILA POMPEIA - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo market-place'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MARKET PLACE</strong></h2>
                        <h3>AV DOUTOR CHUCRI ZAIDAN,902, LOJA 121 B, VILA CORDEIRO - SAO PAULO</h3>

                        <a href='https://www.google.com.br/maps/search/AV DOUTOR CHUCRI ZAIDAN, 902, LOJA 121 B, VILA CORDEIRO - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp botucatu botucatu'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BOTUCATU</strong></h2>
                        <h3>RUA AGENOR NOGUEIRA,1165, , VILA SAO LUCIO - BOTUCATU</h3>

                        <a href='https://www.google.com.br/maps/search/RUA AGENOR NOGUEIRA, 1165, , VILA SAO LUCIO - BOTUCATU' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo carrefour-limao-'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CARREFOUR LIMAO </strong></h2>
                        <h3>AV. PROFSSOR CELESTINO BOURRUOL,151, BOX 15 L, LIMAO - SAO PAULO</h3>

                        <a href='https://www.google.com.br/maps/search/AV. PROFSSOR CELESTINO BOURRUOL, 151, BOX 15 L, LIMAO - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte bh-shopping'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BH SHOPPING</strong></h2>
                        <h3>ROD BR 356 ,3049, LOJA BH 33, BELVEDERE - BELO HORIZONTE</h3>

                        <a href='https://www.google.com.br/maps/search/ROD BR 356 , 3049, LOJA BH 33, BELVEDERE - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte santa-efigenia'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SANTA EFIGENIA</strong></h2>
                        <h3>RUA RIO GRANDE DO NORTE,19, LOJA 01, SANTA EFIGENIA - BELO HORIZONTE</h3>

                        <a href='https://www.google.com.br/maps/search/RUA RIO GRANDE DO NORTE, 19, LOJA 01, SANTA EFIGENIA - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte belvedere'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BELVEDERE</strong></h2>
                        <h3>AV LUIZ PAULO FRANCO ,977, LOJA 10, BELVEDERE - BELO HORIZONTE</h3>

                        <a href='https://www.google.com.br/maps/search/AV LUIZ PAULO FRANCO , 977, LOJA 10, BELVEDERE - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg nova-lima serena-mall'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SERENA MALL</strong></h2>
                        <h3>RODOVIA MG-030,8625, LOJA 03, VALE DO SERENO - NOVA LIMA</h3>

                        <a href='https://www.google.com.br/maps/search/RODOVIA MG-030, 8625, LOJA 03, VALE DO SERENO - NOVA LIMA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sc florianopolis florianopolis-shopping-beira-m'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FLORIANOPOLIS SHOPPING BEIRA MAR</strong></h2>
                        <h3>R BOCAIUVA,2468, SALA 345, CENTRO - FLORIANOPOLIS</h3>

                        <a href='https://www.google.com.br/maps/search/R BOCAIUVA, 2468, SALA 345, CENTRO - FLORIANOPOLIS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sc sao-jose terra-firme---sao-jose'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TERRA FIRME - SAO JOSE</strong></h2>
                        <h3>RUA DOMINGOS ANDRE ZANINI,277, LOJA 8, CAMPINAS - SAO JOSE</h3>

                        <a href='https://www.google.com.br/maps/search/RUA DOMINGOS ANDRE ZANINI, 277, LOJA 8, CAMPINAS - SAO JOSE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro shopping-sulacap-sh-jd-guadal'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING SULACAP (SH JD GUADALUPE)</strong></h2>
                        <h3>AVN MARECHAL FONTENELLE,3545, LOJA 164 - SHOPPING SULACAP, JARDIM SULACAP - RIO DE JANEIRO</h3>

                        <a href='https://www.google.com.br/maps/search/AVN MARECHAL FONTENELLE, 3545,  LOJA 164  - SHOPPING SULACAP, JARDIM SULACAP - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro shopping-metropolitano'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING METROPOLITANO</strong></h2>
                        <h3>AV EMBAIXADOR ABELARDO BUENO,1300, LOJA 10413 - PISO L1 - SHOPPING METROPOLITANO, JACAREPAGUA - RIO DE JANEIRO</h3>

                        <a href='https://www.google.com.br/maps/search/AV EMBAIXADOR ABELARDO BUENO, 1300, LOJA 10413 - PISO L1 - SHOPPING METROPOLITANO, JACAREPAGUA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj duque-de-caxias caxias'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CAXIAS</strong></h2>
                        <h3>PCA DO PACIFICADOR,15, , CENTRO - DUQUE DE CAXIAS</h3>

                        <a href='https://www.google.com.br/maps/search/PCA DO PACIFICADOR, 15, , CENTRO - DUQUE DE CAXIAS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj niteroi niteroi-mariz-e-barros'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NITEROI MARIZ E BARROS</strong></h2>
                        <h3>RUA MARIZ E BARROS,74, , ICARAI - NITEROI</h3>

                        <a href='https://www.google.com.br/maps/search/RUA MARIZ E BARROS, 74, , ICARAI - NITEROI' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro parkshopping-campo-grande'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PARKSHOPPING CAMPO GRANDE</strong></h2>
                        <h3>ESTRADA DO MONTEIRO,1200, loja 107-k, CAMPO GRANDE - RIO DE JANEIRO</h3>

                        <a href='https://www.google.com.br/maps/search/ESTRADA DO MONTEIRO, 1200, loja 107-k, CAMPO GRANDE - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro barra-freeway'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BARRA FREEWAY</strong></h2>
                        <h3>AV DAS AMERICAS,2000, BX 27 PAO DE ACUCAR FREEWAY, BARRA DA TIJUCA - RIO DE JANEIRO</h3>

                        <a href='https://www.google.com.br/maps/search/AV DAS AMERICAS, 2000, BX 27 PAO DE ACUCAR FREEWAY, BARRA DA TIJUCA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro gavea'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>GAVEA</strong></h2>
                        <h3>R MARQUÊS DE SAO VICENTE,52, LOJA 123 -SHOPPING GAVEA, GAVEA - RIO DE JANEIRO</h3>

                        <a href='https://www.google.com.br/maps/search/R MARQUÊS DE SAO VICENTE, 52, LOJA 123 -SHOPPING GAVEA, GAVEA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp guaratingueta buriti-shopping-guara'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BURITI SHOPPING GUARA</strong></h2>
                        <h3>AV. JUSCELINO KUBITSCHEK DE OLIVEIRA,351, LOJA 147, CAMPO DO GALVAO - GUARATINGUETA</h3>

                        <a href='https://www.google.com.br/maps/search/AV. JUSCELINO KUBITSCHEK DE OLIVEIRA, 351, LOJA 147, CAMPO DO GALVAO - GUARATINGUETA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 go aparecida-de-goiania aparecida-vila-rosa'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>APARECIDA VILA ROSA</strong></h2>
                        <h3>AV. RIO VERDE - S/N - QUADRA 78 LOTE 12,12, , VILA ROSA - APARECIDA DE GOIANIA</h3>

                        <a href='https://www.google.com.br/maps/search/AV. RIO VERDE - S/N - QUADRA 78 LOTE 12, 12, , VILA ROSA - APARECIDA DE GOIANIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo oscar-freire'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>OSCAR FREIRE</strong></h2>
                        <h3>R OSCAR FREIRE ,295, , JARDIM PAULISTA - SAO PAULO</h3>

                        <a href='https://www.google.com.br/maps/search/R OSCAR FREIRE , 295, , JARDIM PAULISTA - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro leblon'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>LEBLON</strong></h2>
                        <h3>AV ATAULFO DE PAIVA,375, LOJA A/B/C, LEBLON - RIO DE JANEIRO</h3>

                        <a href='https://www.google.com.br/maps/search/AV ATAULFO DE PAIVA, 375, LOJA A/B/C, LEBLON - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro baixo-leblon'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BAIXO LEBLON</strong></h2>
                        <h3>R RAINHA GUILHERMINA,90, LOJA A, LEBLON - RIO DE JANEIRO</h3>

                        <a href='https://www.google.com.br/maps/search/R RAINHA GUILHERMINA, 90, LOJA A, LEBLON - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rs passo-fundo passo-fundo-centro'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PASSO FUNDO CENTRO</strong></h2>
                        <h3>R MOROM,1311, LOJA TERREA - SALA 101, CENTRO - PASSO FUNDO</h3>

                        <a href='https://www.google.com.br/maps/search/R MOROM, 1311, LOJA TERREA - SALA 101, CENTRO - PASSO FUNDO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>


              <!-- /JBQ Lojas Disney -->

            </section>
          </div>
        </section>

      </div>
    </section>
  </div>

  <style>
    :target:before {
      content: "";
      display: inline-block;
      height: 180px !important;
      /* fixed header height*/
      margin: -180px 0 0 !important;
      /* negative fixed header height */
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

    select#estado,
    select#cidade,
    select#unidade {
      -webkit-appearance: none !important;
      -khtml-appearance: none !important;
      -moz-appearance: none !important;
      -ms-appearance: none !important;
      -o-appearance: none !important;
      appearance: none !important;
      background: #0f834c;
    }

    select#estado:hover,
    select#cidade:hover,
    select#unidade:hover {
      box-shadow: 0 5px 10px 0px rgba(0, 0, 0, .3);
      background-color: #a7d163;
      color: #0f834c;
      -webkit-transform: scale(1.03);
      transform: scale(1.03);
    }

    select#estado:disabled,
    select#cidade:disabled,
    select#unidade:disabled {
      background: #eee;
      box-shadow: 0 1px 5px 0px rgba(0, 0, 0, .3);
      background-color: #ddd;
      color: #eee;
      -webkit-transform: none;
      transform: none;
    }

    div.loja-content h2,
    div.loja-content h3,
    div.loja-content h4,
    div.loja-content h5,
    div.loja-content a {
      font-size: 14px;
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
  <script src='https://media.mundoverde.com.br/blog-media/mv/campanha-disney/assets/scripts-campanhas.js'></script>
  <!-- <script src='assets/scripts.js'></script> -->
</div>

<?php get_footer(); ?>