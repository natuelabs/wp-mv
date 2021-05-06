<?php get_header(); ?>

<div class="bootstrap-wrapper fundo-disney">
  <script src="https://kit.fontawesome.com/9283b51075.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://media.mundoverde.com.br/mv-nossas-lojas-staging/assets/grid.css">
  <link rel="stylesheet" type="text/css" href="https://media.mundoverde.com.br/mv-nossas-lojas-staging/assets/custom.css">
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
  <link rel="stylesheet" href="https://media.mundoverde.com.br/mv-nossas-lojas-staging/assets/custom.css">
  <!-- <link rel="stylesheet" href="assets/custom.css"> -->

  <style>
    /* ------ MODIFICAÇÃO DE BANNER DO TOPO DA PÁGINA ------ */

    /* Banner para desktop full-hd para desktop (acima de 1538 pixels) */
    @media only screen and (min-width: 1538px) {
      .header-verao-mundo-verde-banner {
        background-image: url('https://media.mundoverde.com.br/mv-nossas-lojas-staging/images/banner/mv-delivery-header.jpg');
      }
    }

    /* Banner para Desktop */
    @media only screen and (min-width: 992px) and (max-width: 1537px) {
      .header-verao-mundo-verde-banner {
        background-image: url('https://media.mundoverde.com.br/mv-nossas-lojas-staging/images/banner/mv-delivery-desk.jpg');
      }
    }

    /* Banner para Tablet */
    @media only screen and (min-width: 769px) and (max-width: 991px) {
      .header-verao-mundo-verde-banner {
        background-image: url('https://media.mundoverde.com.br/mv-nossas-lojas-staging/images/banner/mv-delivery-tablet.jpg');
      }
    }

    /* Banner para Mobile */
    @media only screen and (max-width: 768px) {
      .header-verao-mundo-verde-banner {
        background-image: url('https://media.mundoverde.com.br/mv-nossas-lojas-staging/images/banner/mv-delivery-mobile.jpg');
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

      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 checkboxes-servicos" style="text-align: center;">
        <div class="form-check form-check-inline">
          <input type="checkbox" name="servico" value="delivery" id="delivery" class="form-check-input" disabled><label for="delivery" class="form-check-label">Delivery</label>
          <input type="checkbox" name="servico" value="drive-thru" id="drive-thru" class="form-check-input" disabled><label for="drive-thru" class="form-check-label">Drive-Thru</label>
          <input type="checkbox" name="servico" value="aberta" id="aberta" class="form-check-input" disabled><label for="aberta" class="form-check-label">Aberta ao Público</label>
          <input type="checkbox" name="servico" value="clube-mv" id="clube-mv" class="form-check-input" disabled><label for="clube-mv" class="form-check-label">Clube Mundo Verde</label>
        </div>
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


              <!-- JBQ Inserir linhas das unidades -->

              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte afonso-pena-abc delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>AFONSO PENA ABC</strong></h2>
                        <h3>Av Afonso Pena,2706, Loja 02, Savassi - Belo Horizonte</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (31) 3267-1190

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=553198303-3787' target='_blank'><i class='fab fa-whatsapp'></i>(31) 98303-3787</a>

                          <a href='https://www.google.com.br/maps/search/Av Afonso Pena, 2706, Loja 02, Savassi - Belo Horizonte' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pr curitiba agua-verde-antiga-mercadoteca delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>AGUA VERDE (ANTIGA MERCADOTECA CURITIBA)</strong></h2>
                        <h3>AVENIDA IGUAÇU,1705, , AGUA VERDE - CURITIBA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (41) 3527-9928

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AVENIDA IGUAÇU, 1705, , AGUA VERDE - CURITIBA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj sao-goncalo alcantara    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>ALCANTARA</strong></h2>
                        <h3>R DR ALFREDO BACKER,579, BLOCO A5 , LJ 2, ALCANTARA - SAO GONCALO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3706-3753

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R DR ALFREDO BACKER, 579, BLOCO A5 , LJ 2, ALCANTARA - SAO GONCALO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp barueri alpha-square delivery drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>ALPHA SQUARE</strong></h2>
                        <h3>AV SARGITARIO,138, LOJA 39, SITIO TAMBORE - BARUERI</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 2664-0639

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV SARGITARIO, 138, LOJA 39, SITIO TAMBORE - BARUERI' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro americas-shopping    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>AMERICAS SHOPPING</strong></h2>
                        <h3>AV DAS AMERICAS,15500, LOJA 115 A, RECREIO - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2442-9548

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV DAS AMERICAS, 15500, LOJA 115 A, RECREIO - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 go aparecida-de-goiania aparecida-vila-rosa delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>APARECIDA VILA ROSA</strong></h2>
                        <h3>Av. Rio Verde - S/N - Quadra 78 Lote 12,12, , Vila Rosa - Aparecida de Goiania</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 17h</h4>

                        <h5>Tel: (62) 4103-1796

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/Av. Rio Verde - S/N - Quadra 78 Lote 12, 12, , Vila Rosa - Aparecida de Goiania' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp aracatuba aracatuba delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>ARACATUBA</strong></h2>
                        <h3>R FLORIANO PEIXOTO,320, , VILA MENDONCA - ARACATUBA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (18) 3305-5666

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R FLORIANO PEIXOTO, 320, , VILA MENDONCA - ARACATUBA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 al arapiraca arapiraca-centro delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>ARAPIRACA CENTRO</strong></h2>
                        <h3>R FERNANDES LIMA,295, , CENTRO - ARAPIRACA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (82) 3539-8926 / (82) 3522-1919</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>


                        <a href='https://www.google.com.br/maps/search/R FERNANDES LIMA, 295, , CENTRO - ARAPIRACA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp araraquara araraquara delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>ARARAQUARA</strong></h2>
                        <h3>R Nove De Julho,1354, , Centro - Araraquara</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (16) 3331-6787

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/R Nove De Julho, 1354, , Centro - Araraquara' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro baixo-leblon delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BAIXO LEBLON</strong></h2>
                        <h3>R Rainha Guilhermina,90, Loja A, Leblon - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2540-5287

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552198410-2884' target='_blank'><i class='fab fa-whatsapp'></i>(21) 98410-2884</a>

                          <a href='https://www.google.com.br/maps/search/R Rainha Guilhermina, 90, Loja A, Leblon - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro bangu delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BANGU</strong></h2>
                        <h3>Av. Conego Vasconcelos,423, LOJA E, BANGU - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 9h30 às 17h30 - Sábado das 9h às 14h</h4>

                        <h5>Tel: (21) 3331-5585

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552199941-3988' target='_blank'><i class='fab fa-whatsapp'></i>(21) 99941-3988</a>

                          <a href='https://www.google.com.br/maps/search/Av. Conego Vasconcelos, 423, LOJA E, BANGU - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp campinas barao-geraldo delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BARÃO GERALDO</strong></h2>
                        <h3>R ALBINO JOSE BARBOSA DE OLIVEIRA,1001, , BARAO GERALDO - CAMPINAS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (19) 3289-1917

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/R ALBINO JOSE BARBOSA DE OLIVEIRA, 1001, , BARAO GERALDO - CAMPINAS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg barbacena barbacena delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BARBACENA</strong></h2>
                        <h3>PC DOM SILVERIO,8, LOJA 8, CENTRO - BARBACENA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (32) 3333-1433

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/PC DOM SILVERIO, 8, LOJA 8, CENTRO - BARBACENA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro barra-freeway    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BARRA FREEWAY</strong></h2>
                        <h3>AV DAS AMERICAS,2000, BX 27 PAO DE ACUCAR FREEWAY, BARRA DA TIJUCA - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2439-3777

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV DAS AMERICAS, 2000, BX 27 PAO DE ACUCAR FREEWAY, BARRA DA TIJUCA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj barra-mansa barra-mansa    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BARRA MANSA</strong></h2>
                        <h3>AV JOAQUIM LEITE,328, , CENTRO - BARRA MANSA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (24) 3323-7118

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV JOAQUIM LEITE, 328, , CENTRO - BARRA MANSA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro barra-shopping    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BARRA SHOPPING</strong></h2>
                        <h3>AV DAS AMERICAS,4666, LOJA 257 BARRA SHOPPING, BARRA DA TIJUCA - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3089-1183

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV DAS AMERICAS, 4666, LOJA 257 BARRA SHOPPING, BARRA DA TIJUCA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro barra-square delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BARRA SQUARE</strong></h2>
                        <h3>AV DAS AMERICAS,3665, LOJA 140 SHOPPING BARRA SQUARE EXPENSAO, BARRA DA TIJUCA - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2439-3909

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV DAS AMERICAS, 3665, LOJA 140 SHOPPING BARRA SQUARE EXPENSAO, BARRA DA TIJUCA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ba barreiras barreiras delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BARREIRAS</strong></h2>
                        <h3>AV BENEDITA SILVEIRA,471, , CENTRO - BARREIRAS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (77) 3021-2670

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV BENEDITA SILVEIRA, 471, , CENTRO - BARREIRAS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp bauru bauru-shopping delivery drive-thru  '>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BAURU SHOPPING</strong></h2>
                        <h3>Rua Henrique Savi,55, Quadra 15 Loja A235-3 Piso, Vila Cidade Universitaria - Bauru</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (14) 3879-2088

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>


                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551499855-8312' target='_blank'><i class='fab fa-whatsapp'></i>(14) 99855-8312</a>

                          <a href='https://www.google.com.br/maps/search/Rua Henrique Savi, 55, Quadra 15 Loja A235-3 Piso, Vila Cidade Universitaria - Bauru' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pa belem belem-trav-14-de-abril delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BELEM TRAV 14 DE ABRIL</strong></h2>
                        <h3>Travessa 14 De Abril,989, A, Fatima - Belém</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h30 às 18h30</h4>

                        <h5>Tel: (91) 3226-8178

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=559199922-0394' target='_blank'><i class='fab fa-whatsapp'></i>(91) 99922-0394</a>

                          <a href='https://www.google.com.br/maps/search/Travessa 14 De Abril, 989, A, Fatima - Belém' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj belford-roxo belford-roxo delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BELFORD ROXO</strong></h2>
                        <h3>R JOAO FERNANDES NETO,1260, , CENTRO - BELFORD ROXO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3582-3061

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R JOAO FERNANDES NETO, 1260, , CENTRO - BELFORD ROXO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte belo-horizonte-anchieta delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BELO HORIZONTE ANCHIETA</strong></h2>
                        <h3>R FRANCISCO DESLANDES,855, LOJA 01, ANCHIETA - BELO HORIZONTE</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 9h às 17h - Sábados das 9h às 14h</h4>

                        <h5>Tel: (31) 3222-0972

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=553199706-8011' target='_blank'><i class='fab fa-whatsapp'></i>(31) 99706-8011</a>

                          <a href='https://www.google.com.br/maps/search/R FRANCISCO DESLANDES, 855, LOJA 01, ANCHIETA - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte belo-horizonte-prudente-de-mor delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BELO HORIZONTE PRUDENTE DE MORAIS</strong></h2>
                        <h3>AV PRUDENTE DE MORAIS,563, , SANTO ANTONIO - BELO HORIZONTE</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 9h às 17h - Sábados das 9h às 14h</h4>

                        <h5>Tel: (31) 2512-5678

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=553198415-1491' target='_blank'><i class='fab fa-whatsapp'></i>(31) 98415-1491</a>

                          <a href='https://www.google.com.br/maps/search/AV PRUDENTE DE MORAIS, 563, , SANTO ANTONIO - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte belvedere delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BELVEDERE</strong></h2>
                        <h3>AV LUIZ PAULO FRANCO,977, LOJA 10, BELVEDERE - BELO HORIZONTE</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 9h às 17h</h4>

                        <h5>Tel: / (31) 3654-8395</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>
                        <a href='https://api.whatsapp.com/send?phone=553199921-9613' target='_blank'><i class='fab fa-whatsapp'></i>(31) 99921-9613</a>

                        <a href='https://www.google.com.br/maps/search/AV LUIZ PAULO FRANCO, 977, LOJA 10, BELVEDERE - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza benfica-shopping delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BENFICA SHOPPING</strong></h2>
                        <h3>Rua Carapinima,2200, Loja 251 - Piso 1, Benfica - Fortaleza</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (85) 3109-9090

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558598122-3987' target='_blank'><i class='fab fa-whatsapp'></i>(85) 98122-3987</a>

                          <a href='https://www.google.com.br/maps/search/Rua Carapinima, 2200, Loja 251 - Piso 1, Benfica - Fortaleza' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte bh-castelo delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BH CASTELO</strong></h2>
                        <h3>AV DOS ENGENHEIROS,560, LOJA 10, CASTELO - BELO HORIZONTE</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (31) 2516-2091

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV DOS ENGENHEIROS, 560, LOJA 10, CASTELO - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte bh-lourdes delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BH LOURDES</strong></h2>
                        <h3>R Curitiba,1982, , Lourdes - Belo Horizonte</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (31) 3309-5226

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=553199872-0418' target='_blank'><i class='fab fa-whatsapp'></i>(31) 99872-0418</a>

                          <a href='https://www.google.com.br/maps/search/R Curitiba, 1982, , Lourdes - Belo Horizonte' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte bh-pampulha delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BH PAMPULHA</strong></h2>
                        <h3>Av. Portugal,2291, , Santa Amelia - Belo Horizonte</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado, das 9h às 17h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=553199811-2245' target='_blank'><i class='fab fa-whatsapp'></i>(31) 99811-2245</a>

                          <a href='https://www.google.com.br/maps/search/Av. Portugal, 2291, , Santa Amelia - Belo Horizonte' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte bh-savassi delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BH SAVASSI</strong></h2>
                        <h3>Av Getulio Vargas,1585, Loja 02, Savassi - Belo Horizonte</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (31) 3646-1190

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=553198302-3064' target='_blank'><i class='fab fa-whatsapp'></i>(31) 98302-3064</a>

                          <a href='https://www.google.com.br/maps/search/Av Getulio Vargas, 1585, Loja 02, Savassi - Belo Horizonte' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte bh-shopping delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BH SHOPPING</strong></h2>
                        <h3>Rod Br-356,,3049, Loja Bh33, Belvedere - Belo Horizonte</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado, das 10h às 20h - Domingos das 14h às 20h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=553199969-5939' target='_blank'><i class='fab fa-whatsapp'></i>(31) 99969-5939</a>

                          <a href='https://www.google.com.br/maps/search/Rod Br-356,, 3049, Loja Bh33, Belvedere - Belo Horizonte' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rr boa-vista boa-vista-centro   clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BOA VISTA CENTRO</strong></h2>
                        <h3>R BARAO DO RIO BRANCO,877, SALA 4, CENTRO - BOA VISTA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (95) 3212-3783

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/R BARAO DO RIO BRANCO, 877, SALA 4, CENTRO - BOA VISTA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rr boa-vista boa-vista-garden delivery   '>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BOA VISTA GARDEN</strong></h2>
                        <h3>Av Ville Roy,1544, Loja 07 Piso L1, Cacari - Boa Vista</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 12h às 20h</h4>

                        <h5>Tel: (95) 3212-3783

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>



                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=559599151-9363' target='_blank'><i class='fab fa-whatsapp'></i>(95) 99151-9363</a>

                          <a href='https://www.google.com.br/maps/search/Av Ville Roy, 1544, Loja 07 Piso L1, Cacari - Boa Vista' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro botafogo-galeria    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BOTAFOGO GALERIA</strong></h2>
                        <h3>R VOLUNTARIOS DA PATRIA,445, LOJA 110, BOTAFOGO - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 20h - Sábados das 9h às 14h</h4>

                        <h5>Tel: (21) 2237-9047

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R VOLUNTARIOS DA PATRIA, 445, LOJA 110, BOTAFOGO - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro botafogo-sao-clemente delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BOTAFOGO SAO CLEMENTE</strong></h2>
                        <h3>RUA SAO CLEMENTE,164, LOJA E/F, BOTAFOGO - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2226-2965

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=5521996989821' target='_blank'><i class='fab fa-whatsapp'></i>(21) 996989821</a>

                          <a href='https://www.google.com.br/maps/search/RUA SAO CLEMENTE, 164, LOJA E/F, BOTAFOGO - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp botucatu botucatu delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BOTUCATU</strong></h2>
                        <h3>Rua Agenor Nogueira,1165, , Vila Sao Lucio - Botucatu</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (14) 3361-9989

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551499828-1363' target='_blank'><i class='fab fa-whatsapp'></i>(14) 99828-1363</a>

                          <a href='https://www.google.com.br/maps/search/Rua Agenor Nogueira, 1165, , Vila Sao Lucio - Botucatu' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pr londrina boulervard-londrina-jd-quebec delivery drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BOULERVARD LONDRINA (JD QUEBEC)</strong></h2>
                        <h3>Av Theodoro Victorelli,150, Loja 70, Helena - Londrina</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 12h às 17h</h4>

                        <h5>Tel: (43) 3327-0707

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=554399188-0103' target='_blank'><i class='fab fa-whatsapp'></i>(43) 99188-0103</a>

                          <a href='https://www.google.com.br/maps/search/Av Theodoro Victorelli, 150, Loja 70, Helena - Londrina' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 df brasilia brasilia-asa-norte delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BRASILIA ASA NORTE</strong></h2>
                        <h3>CLN,308, Bloco D Lojas 03 e 73, ASA NORTE - BRASILIA</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 10h às 18h</h4>

                        <h5>Tel: (61) 3201-6999 / (61) 99374-5452</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>


                        <a href='https://www.google.com.br/maps/search/CLN, 308, Bloco D Lojas 03 e 73, ASA NORTE - BRASILIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 df brasilia brasilia-shopping delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BRASILIA SHOPPING</strong></h2>
                        <h3>Q SCN, QUADRA 5, BLOCO A, QUIOSQUE 57, 58 E 59,5, , ASA NORTE - BRASILIA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (61) 3326-2742

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=55619645-3036' target='_blank'><i class='fab fa-whatsapp'></i>(61) 9645-3036</a>

                          <a href='https://www.google.com.br/maps/search/Q SCN, QUADRA 5, BLOCO A, QUIOSQUE 57, 58 E 59, 5, , ASA NORTE - BRASILIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo brooklin delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BROOKLIN</strong></h2>
                        <h3>Av Padre Antonio Jose Dos Santos,1265, , Brooklin - São Paulo</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 17h</h4>

                        <h5>Tel: (11) 2738-4022

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551199132-0759' target='_blank'><i class='fab fa-whatsapp'></i>(11) 99132-0759</a>

                          <a href='https://www.google.com.br/maps/search/Av Padre Antonio Jose Dos Santos, 1265, , Brooklin - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo brooklin-paulista---sp delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BROOKLIN PAULISTA - SP</strong></h2>
                        <h3>Rua Barao Do Triunfo,382, , Brooklin Paulista - São Paulo</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 10h às 18h - Sábados das 10h às 16h</h4>

                        <h5>Tel: (11) 5093-4442

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551194466-3535' target='_blank'><i class='fab fa-whatsapp'></i>(11) 94466-3535</a>

                          <a href='https://www.google.com.br/maps/search/Rua Barao Do Triunfo, 382, , Brooklin Paulista - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp guaratingueta buriti-shopping-guara delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BURITI SHOPPING GUARA</strong></h2>
                        <h3>AV. JUSCELINO KUBITSCHEK DE OLIVEIRA,351, LOJA 147, CAMPO DO GALVAO - GUARATINGUETA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (12) 3013-7395 / (12) 3153-1765</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                        </h5>


                        <a href='https://www.google.com.br/maps/search/AV. JUSCELINO KUBITSCHEK DE OLIVEIRA, 351, LOJA 147, CAMPO DO GALVAO - GUARATINGUETA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte buritis delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BURITIS</strong></h2>
                        <h3>AV PROFESSOR MARIO WERNECK,1225, LOJA 01, ESTERIL - BELO HORIZONTE</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 9h às 17h - Sábados das 9h às 14h</h4>

                        <h5>Tel: (31) 3140-3734

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=553198381-7634' target='_blank'><i class='fab fa-whatsapp'></i>(31) 98381-7634</a>

                          <a href='https://www.google.com.br/maps/search/AV PROFESSOR MARIO WERNECK, 1225, LOJA 01, ESTERIL - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj armacao-de-buzios buzios    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>BUZIOS</strong></h2>
                        <h3>RUA TURIBIO DE FARIAS,,292, LOJA 04, CENTRO - ARMACAO DE BUZIOS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (22) 2633-0423

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/RUA TURIBIO DE FARIAS,, 292, LOJA 04, CENTRO - ARMACAO DE BUZIOS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj cabo-frio cabo-frio delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CABO FRIO</strong></h2>
                        <h3>RUA Bento José Ribeiro,109, , CENTRO - CABO FRIO</h3>
                        <h4>Horário de Atendimento: Segunda a Sabado das 10h às 18h - Sábado das 9h às 17h</h4>

                        <h5>Tel: (22) 2645-6678

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552299245-1945' target='_blank'><i class='fab fa-whatsapp'></i>(22) 99245-1945</a>

                          <a href='https://www.google.com.br/maps/search/RUA Bento José Ribeiro, 109, , CENTRO - CABO FRIO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 es cachoeiro-de-itapemirim cachoeiro-do-itapemirim delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CACHOEIRO DO ITAPEMIRIM</strong></h2>
                        <h3>Av Jones Dos Santos Neves,49, A Loja 57, Santo Antonio - Cachoeiro De Itapemirim</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 18h30</h4>

                        <h5>Tel: (27) 3773-4905

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552899996-5867' target='_blank'><i class='fab fa-whatsapp'></i>(28) 99996-5867</a>

                          <a href='https://www.google.com.br/maps/search/Av Jones Dos Santos Neves, 49, A Loja 57, Santo Antonio - Cachoeiro De Itapemirim' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp campinas campinas-cambui delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CAMPINAS CAMBUI</strong></h2>
                        <h3>R MARIA MONTEIRO,1476, , CAMBUI - CAMPINAS</h3>
                        <h4>Horário de Atendimento: Seg à Sex: 9H às 19H| Sáb: 9H às 14H</h4>

                        <h5>Tel: (19) 3253-5533

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=55199 9521-7364' target='_blank'><i class='fab fa-whatsapp'></i>(19) 9 9521-7364</a>

                          <a href='https://www.google.com.br/maps/search/R MARIA MONTEIRO, 1476, , CAMBUI - CAMPINAS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp campinas campinas-shoppping-dom-pedro delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CAMPINAS SHOPPPING DOM PEDRO</strong></h2>
                        <h3>PRQ SHOPPING CENTER PARQUE D PEDRO,500, LOJA 56, JARDIM SANTA GENEBRA - CAMPINAS</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 13h às 21h - Sábados das 13h às 21h - Domingo das 12h às 20h</h4>

                        <h5>Tel: (19) 3756-9503

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=55199 8988-8956' target='_blank'><i class='fab fa-whatsapp'></i>(19) 9 8988-8956</a>

                          <a href='https://www.google.com.br/maps/search/PRQ SHOPPING CENTER PARQUE D PEDRO, 500, LOJA 56, JARDIM SANTA GENEBRA - CAMPINAS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp campinas campinas-vila-marieta delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CAMPINAS VILA MARIETA</strong></h2>
                        <h3>Av Whashington Luis,1260, , Vila Marieta - Campinas</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (19) 3231-5893

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551998956-4088' target='_blank'><i class='fab fa-whatsapp'></i>(19) 98956-4088</a>

                          <a href='https://www.google.com.br/maps/search/Av Whashington Luis, 1260, , Vila Marieta - Campinas' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro campo-grande-passeio    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CAMPO GRANDE PASSEIO</strong></h2>
                        <h3>RUA AURELIO FIGUEIREDO,114, LOJA A, CAMPO GRANDE - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3042-0695

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/RUA AURELIO FIGUEIREDO, 114, LOJA A, CAMPO GRANDE - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro campo-grande-rj    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CAMPO GRANDE RJ</strong></h2>
                        <h3>R MAJOR DE ALMEIDA DA COSTA,14, LOJA A, CAMPO GRANDE - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2412-0540

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R MAJOR DE ALMEIDA DA COSTA, 14, LOJA A, CAMPO GRANDE - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sorocaba campolim-sorocaba delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CAMPOLIM SOROCABA</strong></h2>
                        <h3>Av Barao De Tatui,1358, , Jardim Vergueiro - Sorocaba</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 09h às 11h - 14h às 16h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551599104-5458' target='_blank'><i class='fab fa-whatsapp'></i>(15) 99104-5458</a>

                          <a href='https://www.google.com.br/maps/search/Av Barao De Tatui, 1358, , Jardim Vergueiro - Sorocaba' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj campos-dos-goytacazes campos delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CAMPOS</strong></h2>
                        <h3>R Santos Dumont,61, , Centro - Campos dos Goytacazes</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 10h às 17h</h4>

                        <h5>Tel: (22) 2724-1030

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R Santos Dumont, 61, , Centro - Campos dos Goytacazes' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj campos-dos-goytacazes campos-pelinca delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CAMPOS PELINCA</strong></h2>
                        <h3>Av Pelinca,228, , Parque Tamandare - Campos dos Goytacazes</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 10h às 17h</h4>

                        <h5>Tel: (22) 2725-7002

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552299966-6446' target='_blank'><i class='fab fa-whatsapp'></i>(22) 99966-6446</a>

                          <a href='https://www.google.com.br/maps/search/Av Pelinca, 228, , Parque Tamandare - Campos dos Goytacazes' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro carioca-shopping    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CARIOCA SHOPPING</strong></h2>
                        <h3>AV VICENTE DE CARVALHO,909, LOJA 103 - ESPACO COMERCIAL 63, VILA DA PENHA - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3688-2203

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV VICENTE DE CARVALHO, 909, LOJA 103 - ESPACO COMERCIAL 63, VILA DA PENHA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sorocaba carrefour-esplanada delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CARREFOUR ESPLANADA</strong></h2>
                        <h3>AV PROFESSORA IZORAIDA MARQUES PERES,401, BOX 08, PARQUE CAMPOLIM - SOROCABA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (15) 3346-8808

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV PROFESSORA IZORAIDA MARQUES PERES, 401, BOX 08, PARQUE CAMPOLIM - SOROCABA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo carrefour-limao delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CARREFOUR LIMAO</strong></h2>
                        <h3>AV. PROFSSOR CELESTINO BOURRUOL,151, BOX 15 L, LIMAO - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 3858-1185

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551197609-2233' target='_blank'><i class='fab fa-whatsapp'></i>(11) 97609-2233</a>

                          <a href='https://www.google.com.br/maps/search/AV. PROFSSOR CELESTINO BOURRUOL, 151, BOX 15 L, LIMAO - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pe recife carrefour-torre delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CARREFOUR TORRE</strong></h2>
                        <h3>RUA JOSÉ BONIFÁCIO,1315, BOX 30, TORRE - RECIFE</h3>
                        <h4>Horário de Atendimento: Segunda a sábado das 09h às 18h</h4>

                        <h5>Tel: (81) 3072-9967

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/RUA JOSÉ BONIFÁCIO, 1315, BOX 30, TORRE - RECIFE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pe caruaru caruaru delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CARUARU</strong></h2>
                        <h3>Av Adjar Da Silva Case,800, Loja 192, Indianopolis - Caruaru</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 12h às 20h</h4>

                        <h5>Tel: (81) 3727-1306

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558199721-6318' target='_blank'><i class='fab fa-whatsapp'></i>(81) 99721-6318</a>

                          <a href='https://www.google.com.br/maps/search/Av Adjar Da Silva Case, 800, Loja 192, Indianopolis - Caruaru' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pr cascavel cascavel delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CASCAVEL</strong></h2>
                        <h3>AV BRASIL,6436, , CENTRO - CASCAVEL</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (45) 3039-5078

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=554599817-8489' target='_blank'><i class='fab fa-whatsapp'></i>(45) 99817-8489</a>

                          <a href='https://www.google.com.br/maps/search/AV BRASIL, 6436, , CENTRO - CASCAVEL' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 go catalao catalao delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CATALAO</strong></h2>
                        <h3>AV 20 DE AGOSTO,2033, SALA 2, SETOR CENTRAL - CATALAO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (64) 3442-2850

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=556499978-5820' target='_blank'><i class='fab fa-whatsapp'></i>(64) 99978-5820</a>

                          <a href='https://www.google.com.br/maps/search/AV 20 DE AGOSTO, 2033, SALA 2, SETOR CENTRAL - CATALAO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp catanduva catanduva delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CATANDUVA</strong></h2>
                        <h3>R Maranhao,1065, , Centro - Catanduva</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551799678-3901' target='_blank'><i class='fab fa-whatsapp'></i>(17) 99678-3901</a>

                          <a href='https://www.google.com.br/maps/search/R Maranhao, 1065, , Centro - Catanduva' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro catete delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CATETE</strong></h2>
                        <h3>R Do Catete,214, Loja A, Catete - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h30 às 17h</h4>

                        <h5>Tel: (21) 2556-0983

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R Do Catete, 214, Loja A, Catete - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj duque-de-caxias caxias delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CAXIAS</strong></h2>
                        <h3>PCA DO PACIFICADOR,15, , CENTRO - DUQUE DE CAXIAS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2652-2562

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/PCA DO PACIFICADOR, 15, , CENTRO - DUQUE DE CAXIAS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo center-3 delivery drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CENTER 3</strong></h2>
                        <h3>AV PAULISTA,2064, LOJA P27 - SHOPPING CENTER 3, BELA VISTA - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 3253-6635

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551198666-0228' target='_blank'><i class='fab fa-whatsapp'></i>(11) 98666-0228</a>

                          <a href='https://www.google.com.br/maps/search/AV PAULISTA, 2064, LOJA P27 - SHOPPING CENTER 3, BELA VISTA - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro center-point-valqueire-sh-ant delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CENTER POINT VALQUEIRE SH (ANTIGA VILA VALQUEIRE)</strong></h2>
                        <h3>Rua Luiz Beltrao,160, Loja 113, Vila Valqueire - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3340-6555 / (21) 3570-6465</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                        </h5>


                        <a href='https://www.google.com.br/maps/search/Rua Luiz Beltrao, 160, Loja 113, Vila Valqueire - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg uberlandia center-shopping-uberlandia delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CENTER SHOPPING UBERLANDIA</strong></h2>
                        <h3>AV JOAO NAVES DE AVILA,1331, LOJA 1204 CENTER SHOPPING, TIBERY - UBERLANDIA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (34) 3255-1199

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV JOAO NAVES DE AVILA, 1331, LOJA 1204 CENTER SHOPPING, TIBERY - UBERLANDIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro centro-castelo    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CENTRO CASTELO</strong></h2>
                        <h3>R SAO JOSE,80, , CENTRO - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2524-4283

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R SAO JOSE, 80, , CENTRO - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro centro-cinelandia delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CENTRO CINELANDIA</strong></h2>
                        <h3>R SENADOR DANTAS,76, LOJA A SSL, CENTRO - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 9h as 16h</h4>

                        <h5>Tel: (21) 2532-4251

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552199628-0731' target='_blank'><i class='fab fa-whatsapp'></i>(21) 99628-0731</a>

                          <a href='https://www.google.com.br/maps/search/R SENADOR DANTAS, 76, LOJA A SSL, CENTRO - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp barueri centro-comercial-alphaville delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CENTRO COMERCIAL ALPHAVILLE</strong></h2>
                        <h3>Calcada Das Margaridas,12, Terreo, Condominio Centro Comercial Alphaville - Barueri</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 10h às 18h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551199882-8009' target='_blank'><i class='fab fa-whatsapp'></i>(11) 99882-8009</a>

                          <a href='https://www.google.com.br/maps/search/Calcada Das Margaridas, 12, Terreo, Condominio Centro Comercial Alphaville - Barueri' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro centro-cruz-vermelha delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CENTRO CRUZ VERMELHA</strong></h2>
                        <h3>R Carlos Sampaio,246, Loja B, Centro - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: segunda e sexta das 8:00 as 20:00 - Sábados das 10:00 as 14:00</h4>

                        <h5>Tel: (21) 2509-2190

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552197581-8769' target='_blank'><i class='fab fa-whatsapp'></i>(21) 97581-8769</a>

                          <a href='https://www.google.com.br/maps/search/R Carlos Sampaio, 246, Loja B, Centro - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro centro-quitanda delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CENTRO QUITANDA</strong></h2>
                        <h3>R DA QUITANDA,45, A, CENTRO - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 9h as 16h</h4>

                        <h5>Tel: (21) 2221-5690

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552199628-9235' target='_blank'><i class='fab fa-whatsapp'></i>(21) 99628-9235</a>

                          <a href='https://www.google.com.br/maps/search/R DA QUITANDA, 45, A, CENTRO - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro centro-rua-mexico    '>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CENTRO RUA MEXICO</strong></h2>
                        <h3>R MEXICO, 74,74, LOJA A, CENTRO - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3197-0988

                          <h5 class='servico-entrega'>




                          </h5>


                          <a href='https://www.google.com.br/maps/search/R MEXICO, 74, 74, LOJA A, CENTRO - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sc chapeco chapeco delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CHAPECO</strong></h2>
                        <h3>R MAL JOSE B BORMANN,119, E, CENTRO - CHAPECO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (49) 3322-5740

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R MAL JOSE B BORMANN, 119, E, CENTRO - CHAPECO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro copacabana delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>COPACABANA</strong></h2>
                        <h3>Av Nossa Senhora De Copacabana,1181, Loja A, Copacabana - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 10h às 17h</h4>

                        <h5>Tel: (21) 2135-4415

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552199526-5593' target='_blank'><i class='fab fa-whatsapp'></i>(21) 99526-5593</a>

                          <a href='https://www.google.com.br/maps/search/Av Nossa Senhora De Copacabana, 1181, Loja A, Copacabana - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro copacabana-figueiredo delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>COPACABANA FIGUEIREDO</strong></h2>
                        <h3>Av Nossa Senhora De Copacabana,646, Loja B, Copacabana - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 10h às 17h</h4>

                        <h5>Tel: (21) 3208-8945 / (21) 3208-8946</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                        </h5>
                        <a href='https://api.whatsapp.com/send?phone=552199927-5647' target='_blank'><i class='fab fa-whatsapp'></i>(21) 99927-5647</a>

                        <a href='https://www.google.com.br/maps/search/Av Nossa Senhora De Copacabana, 646, Loja B, Copacabana - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro copacabana-palace delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>COPACABANA PALACE</strong></h2>
                        <h3>AV NOSSA SENHORA DE COPACABANA,945, LOJA B C, COPACABANA - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2236-6381

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552199526-5593' target='_blank'><i class='fab fa-whatsapp'></i>(21) 99526-5593</a>

                          <a href='https://www.google.com.br/maps/search/AV NOSSA SENHORA DE COPACABANA, 945, LOJA B C, COPACABANA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pr curitiba curitiba-cabral delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CURITIBA CABRAL</strong></h2>
                        <h3>Rua Anita Garibaldi,1000, , Cabral - Curitiba</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado, das 10h às 18h</h4>

                        <h5>Tel: (41) 3022-2005

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/Rua Anita Garibaldi, 1000, , Cabral - Curitiba' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pr curitiba curitiba-cristo-rei delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>CURITIBA CRISTO REI</strong></h2>
                        <h3>AV PRESIDENTE AFFONSO CAMARGO,1939, LOJA 06 ANDAR TR - COND FLEX CITY JARDIM BOT BLOCO FLEXCITY, CRISTO REI - CURITIBA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (41) 3203-1660

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV PRESIDENTE AFFONSO CAMARGO, 1939, LOJA 06 ANDAR TR - COND FLEX CITY JARDIM BOT BLOCO FLEXCITY, CRISTO REI - CURITIBA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ms dourados dourados delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>DOURADOS</strong></h2>
                        <h3>Av Weimar Goncalves Torres,2153, , Centro - Dourados</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h às 17h</h4>

                        <h5>Tel: (67) 3423-0280

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=556799869-5857' target='_blank'><i class='fab fa-whatsapp'></i>(67) 99869-5857</a>

                          <a href='https://www.google.com.br/maps/search/Av Weimar Goncalves Torres, 2153, , Centro - Dourados' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo extra-ricardo-jafet delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>EXTRA RICARDO JAFET</strong></h2>
                        <h3>AV DOUTOR RICARDO JAFET,1501, LOJA LUC 16-A, VILA SANTA EULALIA - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 2272-2784

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV DOUTOR RICARDO JAFET, 1501, LOJA LUC 16-A, VILA SANTA EULALIA - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sorocaba extra-santa-rosalia delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>EXTRA SANTA ROSALIA</strong></h2>
                        <h3>R Maria Cinto De Biaggi,164, Suc 27, Jardim Santa Rosalia - Sorocaba</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 10h às 18h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551599148-2169' target='_blank'><i class='fab fa-whatsapp'></i>(15) 99148-2169</a>

                          <a href='https://www.google.com.br/maps/search/R Maria Cinto De Biaggi, 164, Suc 27, Jardim Santa Rosalia - Sorocaba' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ba feira-de-santana feira-de-santana delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FEIRA DE SANTANA</strong></h2>
                        <h3>AV JOAO DURVAL CARNEIRO,3665, LOJA 268 E 269 - SHOPPING BOULEVARD, SAO JOAO - FEIRA DE SANTANA</h3>
                        <h4>Horário de Atendimento: Domingo a Domingo das 8h às 18h</h4>

                        <h5>Tel: (75) 3603-9205 / (75) 99160-8932</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>


                        <a href='https://www.google.com.br/maps/search/AV JOAO DURVAL CARNEIRO, 3665, LOJA 268 E 269 - SHOPPING BOULEVARD, SAO JOAO - FEIRA DE SANTANA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro flamengo delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FLAMENGO</strong></h2>
                        <h3>R Marquês De Abrantes,118, Loja C, Flamengo - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 11h30 às 17h</h4>

                        <h5>Tel: (21) 2553-5524

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=55212553-5524' target='_blank'><i class='fab fa-whatsapp'></i>(21) 2553-5524</a>

                          <a href='https://www.google.com.br/maps/search/R Marquês De Abrantes, 118, Loja C, Flamengo - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sc florianopolis florianopolis delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FLORIANOPOLIS</strong></h2>
                        <h3>AV PREFEITO OSMAR CUNHA,339, , CENTRO - FLORIANOPOLIS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (48) 3024-2719

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV PREFEITO OSMAR CUNHA, 339, , CENTRO - FLORIANOPOLIS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sc florianopolis florianopolis-shopping-beira-m delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FLORIANOPOLIS SHOPPING BEIRA MAR</strong></h2>
                        <h3>R BOCAIUVA,2468, SALA 345, CENTRO - FLORIANOPOLIS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (48) 3039-1757

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/R BOCAIUVA, 2468, SALA 345, CENTRO - FLORIANOPOLIS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sc florianopolis florianopolis-shopping-iguatem delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FLORIANOPOLIS SHOPPING IGUATEMI</strong></h2>
                        <h3>Avenida Madre Benvenuta,687, , Santa Monica - Florianópolis</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 10h às 16h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=554899165-8218' target='_blank'><i class='fab fa-whatsapp'></i>(48) 99165-8218</a>

                          <a href='https://www.google.com.br/maps/search/Avenida Madre Benvenuta, 687, , Santa Monica - Florianópolis' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza fortaleza-aldeota   clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FORTALEZA ALDEOTA</strong></h2>
                        <h3>AV SANTOS DUMONT,3000, LOJA 8, ALDEOTA - FORTALEZA</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h as 19h - Sábados das 8h às 18h</h4>

                        <h5>Tel: (85) 3109-8191 / (85) 3258-1173</h5>

                        <h5 class='servico-entrega'>


                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>


                        <a href='https://www.google.com.br/maps/search/AV SANTOS DUMONT, 3000, LOJA 8, ALDEOTA - FORTALEZA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza fortaleza-centro delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FORTALEZA CENTRO</strong></h2>
                        <h3>Rua General Clarindo De Queiroz,641, , Centro - Fortaleza</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 18h</h4>

                        <h5>Tel: (85) 3226-2759 / (85) 3258-1174</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>
                        <a href='https://api.whatsapp.com/send?phone=558598122-3987' target='_blank'><i class='fab fa-whatsapp'></i>(85) 98122-3987</a>

                        <a href='https://www.google.com.br/maps/search/Rua General Clarindo De Queiroz, 641, , Centro - Fortaleza' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza fortaleza-coco delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FORTALEZA COCO</strong></h2>
                        <h3>Av Engenheiro Santana Junior,2277, Loja 1/2/3 - Shopping Casa Blanca Mall, Coco - Fortaleza</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 18h</h4>

                        <h5>Tel: (85) 3035-7098 / (85) 3258-1173</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>
                        <a href='https://api.whatsapp.com/send?phone=558598122-3987' target='_blank'><i class='fab fa-whatsapp'></i>(85) 98122-3987</a>

                        <a href='https://www.google.com.br/maps/search/Av Engenheiro Santana Junior, 2277, Loja 1/2/3 - Shopping Casa Blanca Mall, Coco - Fortaleza' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza fortaleza-iguatemi delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FORTALEZA IGUATEMI</strong></h2>
                        <h3>Av Washington Soares,85, Loja 415 - Shopping Iguatemi, Edson Queiroz - Fortaleza</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 18h</h4>

                        <h5>Tel: (85) 3035-5292 / (85) 3034-3198</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>
                        <a href='https://api.whatsapp.com/send?phone=558598122-3987' target='_blank'><i class='fab fa-whatsapp'></i>(85) 98122-3987</a>

                        <a href='https://www.google.com.br/maps/search/Av Washington Soares, 85, Loja 415 - Shopping Iguatemi, Edson Queiroz - Fortaleza' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza fortaleza-north-shopping delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FORTALEZA NORTH SHOPPING</strong></h2>
                        <h3>Av Bezerra De Menezes,2450, North Shopping, Alagadico - Fortaleza</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 18h</h4>

                        <h5>Tel: (85) 3035-0329 / (85) 3035-0879</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>
                        <a href='https://api.whatsapp.com/send?phone=558598122-3987' target='_blank'><i class='fab fa-whatsapp'></i>(85) 98122-3987</a>

                        <a href='https://www.google.com.br/maps/search/Av Bezerra De Menezes, 2450, North Shopping, Alagadico - Fortaleza' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza fortaleza-rio-mar delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FORTALEZA RIO MAR</strong></h2>
                        <h3>R Lauro Nogueira,1500, Loja 1130/1131 - Shopping Rio Mar, Papicu - Fortaleza</h3>
                        <h4>Horário de Atendimento: Segunda a sábado, das 10h às 22h - Domingos das 14h30 às 20h30</h4>

                        <h5>Tel: (85) 3234-2390

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/R Lauro Nogueira, 1500, Loja 1130/1131 - Shopping Rio Mar, Papicu - Fortaleza' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp franca franca delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FRANCA</strong></h2>
                        <h3>AV ISMAEL ALONSO Y ALONSO,1516, , JARDIM VENEZA - FRANCA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (16) 3721-7367

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV ISMAEL ALONSO Y ALONSO, 1516, , JARDIM VENEZA - FRANCA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro freguesia delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FREGUESIA</strong></h2>
                        <h3>Est Dos Três Rios,90, Loja 117, Jacarepagua - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h30 às 20h</h4>

                        <h5>Tel: (21) 2436-0214

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552199893-4919' target='_blank'><i class='fab fa-whatsapp'></i>(21) 99893-4919</a>

                          <a href='https://www.google.com.br/maps/search/Est Dos Três Rios, 90, Loja 117, Jacarepagua - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj nova-friburgo friburgo delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FRIBURGO</strong></h2>
                        <h3>Av Alberto Braune,85, Loja, Centro - Nova Friburgo</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 10h às 17h</h4>

                        <h5>Tel: (22) 2523-1684

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/Av Alberto Braune, 85, Loja, Centro - Nova Friburgo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj nova-friburgo friburgo-praca delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>FRIBURGO PRACA</strong></h2>
                        <h3>Praca Demerval Barbosa Moreira,30, , Centro - Nova Friburgo</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 10h às 17h</h4>

                        <h5>Tel: (22) 2523-4114

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/Praca Demerval Barbosa Moreira, 30, , Centro - Nova Friburgo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp campinas galleria-shopping delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>GALLERIA SHOPPING</strong></h2>
                        <h3>AV SELMA PARADA (BAILARINA),505, LOJA A154 ANDAR 01, JARDIM MADALENA - CAMPINAS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (19) 3207-0049

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551999935-6233' target='_blank'><i class='fab fa-whatsapp'></i>(19) 99935-6233</a>

                          <a href='https://www.google.com.br/maps/search/AV SELMA PARADA (BAILARINA), 505, LOJA A154 ANDAR 01, JARDIM MADALENA - CAMPINAS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro gavea delivery drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>GAVEA</strong></h2>
                        <h3>R Marquês De Sao Vicente,52, Loja 123 -shopping Gavea, Gavea - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 11h às 16h30</h4>

                        <h5>Tel: (21) 3204-1818

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552198420-8528' target='_blank'><i class='fab fa-whatsapp'></i>(21) 98420-8528</a>

                          <a href='https://www.google.com.br/maps/search/R Marquês De Sao Vicente, 52, Loja 123 -shopping Gavea, Gavea - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 go goiania goiania delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>GOIANIA</strong></h2>
                        <h3>R 9,1262, QUADRA G9 - LOTE 15 -LOJA 02 a 04, SETOR OESTE - GOIANIA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (62) 3941-8787

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R 9, 1262, QUADRA G9 - LOTE 15 -LOJA 02 a 04, SETOR OESTE - GOIANIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 go goiania goiania-setor-bueno delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>GOIANIA SETOR BUENO</strong></h2>
                        <h3>AV T 10 1160 QUADRA 108,108, LOTE 11, SETOR BUENO - GOIANIA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (62) 3251-4307

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV T 10 1160 QUADRA 108, 108, LOTE 11, SETOR BUENO - GOIANIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 go goiania goiania-setor-oeste   clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>GOIANIA SETOR OESTE</strong></h2>
                        <h3>R 9,1262, QUADRA G9 - LOTE 15 -LOJA 02 a 04, SETOR OESTE - GOIANIA</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h30 às 18h30 - Sábados das 8h30 às 12h30</h4>

                        <h5>Tel: (62) 3941-8787

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/R 9, 1262, QUADRA G9 - LOTE 15 -LOJA 02 a 04, SETOR OESTE - GOIANIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg governador-valadares governador-valadares-centro--- delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>GOVERNADOR VALADARES CENTRO - MG</strong></h2>
                        <h3>Rua Israel Pinheiro,2406, Loja 01, Sao Pedro - Governador Valadares</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=55339810-7479' target='_blank'><i class='fab fa-whatsapp'></i>(33) 9810-7479</a>

                          <a href='https://www.google.com.br/maps/search/Rua Israel Pinheiro, 2406, Loja 01, Sao Pedro - Governador Valadares' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp santo-andre grand-plaza delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>GRAND PLAZA</strong></h2>
                        <h3>Av Industrial,600, Loja 136, Jardim - Santo Andre</h3>
                        <h4>Horário de Atendimento: Segunda a Domingo, das 12h às 20h</h4>

                        <h5>Tel: (11) 2618-0587

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551195123-4827' target='_blank'><i class='fab fa-whatsapp'></i>(11) 95123-4827</a>

                          <a href='https://www.google.com.br/maps/search/Av Industrial, 600, Loja 136, Jardim - Santo Andre' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pb patos guedes-shopping delivery drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>GUEDES SHOPPING</strong></h2>
                        <h3>R Doutor Pedro Firmino,,470, Loja 27 - Primeiro Piso, Centro - Patos</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: / (83) 99952-4444</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                        </h5>
                        <a href='https://api.whatsapp.com/send?phone=558399651-6872' target='_blank'><i class='fab fa-whatsapp'></i>(83) 99651-6872</a>

                        <a href='https://www.google.com.br/maps/search/R Doutor Pedro Firmino,, 470, Loja 27 - Primeiro Piso, Centro - Patos' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte gutierrez delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>GUTIERREZ</strong></h2>
                        <h3>Rua Estácio De Sá,10, Loja 12, Gutierrez - Belo Horizonte</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado, das 9h às 17h</h4>

                        <h5>Tel: (31) 3018-3713

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=553197161-2252' target='_blank'><i class='fab fa-whatsapp'></i>(31) 97161-2252</a>

                          <a href='https://www.google.com.br/maps/search/Rua Estácio De Sá, 10, Loja 12, Gutierrez - Belo Horizonte' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo higienopolis delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>HIGIENOPOLIS</strong></h2>
                        <h3>Rua Doutor Veiga Filho,30, , Santa Cecilia - São Paulo</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado das 10h às 16h</h4>

                        <h5>Tel: (11) 3661-9535

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551194564-2169' target='_blank'><i class='fab fa-whatsapp'></i>(11) 94564-2169</a>

                          <a href='https://www.google.com.br/maps/search/Rua Doutor Veiga Filho, 30, , Santa Cecilia - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro ilha delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>ILHA</strong></h2>
                        <h3>EST DO GALEAO,2800, LOJA A, PORTUGUESA - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3353-0505

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/EST DO GALEAO, 2800, LOJA A, PORTUGUESA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ma imperatriz imperial-shopping delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>IMPERIAL SHOPPING</strong></h2>
                        <h3>ROD BR-010,100, SALA A004/A005, CENTRO - IMPERATRIZ</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (99) 99101-6434

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/ROD BR-010, 100, SALA A004/A005, CENTRO - IMPERATRIZ' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp indaiatuba indaiatuba-cidade-nova delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>INDAIATUBA CIDADE NOVA</strong></h2>
                        <h3>AV PRESIDENTE KENNEDY,1063, , CIDADE NOVA I - INDAIATUBA</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 9h às 17h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551999367-3460' target='_blank'><i class='fab fa-whatsapp'></i>(19) 99367-3460</a>

                          <a href='https://www.google.com.br/maps/search/AV PRESIDENTE KENNEDY, 1063, , CIDADE NOVA I - INDAIATUBA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro ipanema-garcia-davila delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>IPANEMA GARCIA D'AVILA</strong></h2>
                        <h3>R VISCONDE DE PIRAJA,443, LOJA C - PRACA DA PAZ, IPANEMA - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552199525-5573' target='_blank'><i class='fab fa-whatsapp'></i>(21) 99525-5573</a>

                          <a href='https://www.google.com.br/maps/search/R VISCONDE DE PIRAJA, 443, LOJA C - PRACA DA PAZ, IPANEMA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg ipatinga ipatinga delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>IPATINGA</strong></h2>
                        <h3>fcar,319, LOJA 01, CIDADE NOBRE - IPATINGA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (31) 3617-4240

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/fcar, 319, LOJA 01, CIDADE NOBRE - IPATINGA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro iraja delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>IRAJA</strong></h2>
                        <h3>AV MONSENHOR FELIX,510, LOJA A, IRAJA - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3596-9006

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV MONSENHOR FELIX, 510, LOJA A, IRAJA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo itaim-bibi delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>ITAIM BIBI</strong></h2>
                        <h3>R Joao Cachoeira,554, , Itaim Bibi - São Paulo</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551197567-7888' target='_blank'><i class='fab fa-whatsapp'></i>(11) 97567-7888</a>

                          <a href='https://www.google.com.br/maps/search/R Joao Cachoeira, 554, , Itaim Bibi - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pe jaboatao-dos-guararapes jaboatao-candeias delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>JABOATÃO CANDEIAS</strong></h2>
                        <h3>Av. Bernardo de Vieira de Melo,4257, Loja 05, Candeias - Jaboatão dos Guararapes</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 12h às 20h</h4>

                        <h5>Tel: (81) 3129-3847

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558198338-2970' target='_blank'><i class='fab fa-whatsapp'></i>(81) 98338-2970</a>

                          <a href='https://www.google.com.br/maps/search/Av. Bernardo de Vieira de Melo, 4257, Loja 05, Candeias - Jaboatão dos Guararapes' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo jardim-analia-franco    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>JARDIM ANALIA FRANCO</strong></h2>
                        <h3>R EMILIA MARENGO,186, , VILA REGENTE FEIJO - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 3879-2693

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R EMILIA MARENGO, 186, , VILA REGENTE FEIJO - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo jardim-das-perdizes delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>JARDIM DAS PERDIZES</strong></h2>
                        <h3>Av Marque S De Sao Vicente,2219, Loja 7, Agua Branca - Sao Paulo</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551194170-4737' target='_blank'><i class='fab fa-whatsapp'></i>(11) 94170-4737</a>

                          <a href='https://www.google.com.br/maps/search/Av Marque S De Sao Vicente, 2219, Loja 7, Agua Branca - Sao Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ms campo-grande jardim-dos-estados---campo-gra delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>JARDIM DOS ESTADOS - CAMPO GRANDE</strong></h2>
                        <h3>R Antonio Maria Coelho,3648, Loja 2, Jardim dos Estados - Campo Grande</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (67) 3211-4513

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=556799146-7945' target='_blank'><i class='fab fa-whatsapp'></i>(67) 99146-7945</a>

                          <a href='https://www.google.com.br/maps/search/R Antonio Maria Coelho, 3648, Loja 2, Jardim dos Estados - Campo Grande' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro jardim-oceanico delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>JARDIM OCEANICO</strong></h2>
                        <h3>Av Olegario Maciel,519, Loja F, Barra da Tijuca - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 19h</h4>

                        <h5>Tel: (21) 3437-3437

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552199113-8103' target='_blank'><i class='fab fa-whatsapp'></i>(21) 99113-8103</a>

                          <a href='https://www.google.com.br/maps/search/Av Olegario Maciel, 519, Loja F, Barra da Tijuca - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sc joinville joinville delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>JOINVILLE</strong></h2>
                        <h3>Rua Dr. João Colin,446, Sala 1, Centro - Joinville</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h30 às 18h30 - Sábados das 9h30 às 12h30</h4>

                        <h5>Tel: (47) 3028-1637

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=554798851-2882' target='_blank'><i class='fab fa-whatsapp'></i>(47) 98851-2882</a>

                          <a href='https://www.google.com.br/maps/search/Rua Dr. João Colin, 446, Sala 1, Centro - Joinville' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg juiz-de-fora juiz-de-fora delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>JUIZ DE FORA</strong></h2>
                        <h3>R. Santa Rita,506, , Centro - Juiz de Fora</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 9h às 18:30 hs - Sábado 9h às 13hs</h4>

                        <h5>Tel: (32) 3216-2831

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=553132162831' target='_blank'><i class='fab fa-whatsapp'></i>(31) 32162831</a>

                          <a href='https://www.google.com.br/maps/search/R. Santa Rita, 506, , Centro - Juiz de Fora' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp jundiai jundiai delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>JUNDIAI</strong></h2>
                        <h3>AV JUNDIAI,527, , ANHANGABAU - JUNDIAI</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 08h às 18:30h - Sab das 08h às 13h</h4>

                        <h5>Tel: (11) 2709-1292

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV JUNDIAI, 527, , ANHANGABAU - JUNDIAI' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp jundiai jundiai-shopping delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>JUNDIAI SHOPPING</strong></h2>
                        <h3>AV NOVE DE JULHO,3333, PISO AL. DA CIDADE LUC S 111/A, ANHANGABAU - JUNDIAI</h3>
                        <h4>Horário de Atendimento: Segunda a Sabádo das 14h às 20h</h4>

                        <h5>Tel: (11) 4588-0836

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV NOVE DE JULHO, 3333, PISO AL. DA CIDADE LUC S 111/A, ANHANGABAU - JUNDIAI' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro largo-de-santa-rita delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>LARGO DE SANTA RITA</strong></h2>
                        <h3>Rua Do Acre,94, , Centro - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Horário de entrega à combinar</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552196444-5858' target='_blank'><i class='fab fa-whatsapp'></i>(21) 96444-5858</a>

                          <a href='https://www.google.com.br/maps/search/Rua Do Acre, 94, , Centro - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro leblon delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>LEBLON</strong></h2>
                        <h3>Av Ataulfo De Paiva,375, Loja A/B/C, Leblon - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado, das 10h às 19h</h4>

                        <h5>Tel: (21) 2512-9868

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552197926-8624' target='_blank'><i class='fab fa-whatsapp'></i>(21) 97926-8624</a>

                          <a href='https://www.google.com.br/maps/search/Av Ataulfo De Paiva, 375, Loja A/B/C, Leblon - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mt lucas-do-rio-verde lucas-do-rio-verde delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>LUCAS DO RIO VERDE</strong></h2>
                        <h3>AV AMAZONAS,553S, SALA 02, CENTRO - LUCAS DO RIO VERDE</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h às 19h - Sabados das 8h as 15h</h4>

                        <h5>Tel: (65) 3549-1491 / (65) 3549-1491</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                        </h5>
                        <a href='https://api.whatsapp.com/send?phone=55659989-5493' target='_blank'><i class='fab fa-whatsapp'></i>(65) 9989-5493</a>

                        <a href='https://www.google.com.br/maps/search/AV AMAZONAS, 553S, SALA 02, CENTRO - LUCAS DO RIO VERDE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ba luis-eduardo-magalhaes luis-eduardo-magalhaes delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>LUIS EDUARDO MAGALHAES</strong></h2>
                        <h3>RUA PARANA,279, , MIMOSO DO OESTE - LUIS EDUARDO MAGALHAES</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (77) 3628-1694

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/RUA PARANA, 279, , MIMOSO DO OESTE - LUIS EDUARDO MAGALHAES' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj macae macae delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MACAE</strong></h2>
                        <h3>AV RUI BARBOSA,231, A, CENTRO - MACAE</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (22) 2772-2771

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV RUI BARBOSA, 231, A, CENTRO - MACAE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 al maceio maceio-parque-shopping delivery drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MACEIO PARQUE SHOPPING</strong></h2>
                        <h3>Av Gustavo Paiva,5945, Loja 1020, Cruz das Almas - Maceio</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (82) 3024-9536

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558298816-6369' target='_blank'><i class='fab fa-whatsapp'></i>(82) 98816-6369</a>

                          <a href='https://www.google.com.br/maps/search/Av Gustavo Paiva, 5945, Loja 1020, Cruz das Almas - Maceio' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 al maceio maceio-ponta-verde delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MACEIO PONTA VERDE</strong></h2>
                        <h3>Rua Eng. Mario de Gusmão,440, , Ponta Verde - Maceio</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 8h às 18h30</h4>

                        <h5>Tel: (82) 3327-1737

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/Rua Eng. Mario de Gusmão, 440, , Ponta Verde - Maceio' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 al maceio maceio-shopping delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MACEIO SHOPPING</strong></h2>
                        <h3>Av Comendador Gustavo Paiva,2990, Loja 233, Mangabeiras - Maceio</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (82) 3327-8562

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558298816-6369' target='_blank'><i class='fab fa-whatsapp'></i>(82) 98816-6369</a>

                          <a href='https://www.google.com.br/maps/search/Av Comendador Gustavo Paiva, 2990, Loja 233, Mangabeiras - Maceio' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 am manaus manaus-ponta-negra delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MANAUS PONTA NEGRA</strong></h2>
                        <h3>R Raimundononato de Castro,605, , Ponta Negra - Manaus</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 10h às 16h</h4>

                        <h5>Tel: (92) 3584-5830

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=559298472-6419' target='_blank'><i class='fab fa-whatsapp'></i>(92) 98472-6419</a>

                          <a href='https://www.google.com.br/maps/search/R Raimundononato de Castro, 605, , Ponta Negra - Manaus' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo mandaqui delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MANDAQUI</strong></h2>
                        <h3>RUA AUGUSTO TOLLE,771, LOJA 02, SANTANA - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 3530-5555

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/RUA AUGUSTO TOLLE, 771, LOJA 02, SANTANA - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro map-barra delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MAP BARRA</strong></h2>
                        <h3>Av Das Americas,10200, Box 5 - B, Barra da Tijuca - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3150-4709

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552196594-6933' target='_blank'><i class='fab fa-whatsapp'></i>(21) 96594-6933</a>

                          <a href='https://www.google.com.br/maps/search/Av Das Americas, 10200, Box 5 - B, Barra da Tijuca - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro map-barra delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MAP BARRA</strong></h2>
                        <h3>AV DAS AMERICAS,10200, BOX 5 - B, BARRA DA TIJUCA - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado, das 9h as 21h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV DAS AMERICAS, 10200, BOX 5 - B, BARRA DA TIJUCA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp marilia marilia-shopping delivery drive-thru clube-mv '>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MARILIA SHOPPING</strong></h2>
                        <h3>AV DAS ESMERALDAS,391, , JARDIM TANGARÁ - MARILIA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (14) 3301-6896

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV DAS ESMERALDAS, 391, , JARDIM TANGARÁ - MARILIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo market-place delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MARKET PLACE</strong></h2>
                        <h3>Av Doutor Chucri Zaidan,902, Loja 121 B, Vila Cordeiro - São Paulo</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado, das 9h às 18h</h4>

                        <h5>Tel: (11) 5182-0348 / (11) 5182-0475</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>
                        <a href='https://api.whatsapp.com/send?phone=551199973-9650' target='_blank'><i class='fab fa-whatsapp'></i>(11) 99973-9650</a>

                        <a href='https://www.google.com.br/maps/search/Av Doutor Chucri Zaidan, 902, Loja 121 B, Vila Cordeiro - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro meier delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MEIER</strong></h2>
                        <h3>R Dias Da Cruz,450, A, Meier - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 19h30</h4>

                        <h5>Tel: (21) 3178-6660

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R Dias Da Cruz, 450, A, Meier - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro meier-ii delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MEIER II</strong></h2>
                        <h3>R Hermengarda,11, Loja A, Meier - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 19h30</h4>

                        <h5>Tel: (21) 3173-6955

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R Hermengarda, 11, Loja A, Meier - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj mesquita mesquita    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MESQUITA</strong></h2>
                        <h3>AV PREFEITO JOSE MONTES PAIXAO,1845, , CENTRO - MESQUITA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3763-3569

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV PREFEITO JOSE MONTES PAIXAO, 1845, , CENTRO - MESQUITA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo metro-sao-judas delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>METRO SAO JUDAS</strong></h2>
                        <h3>AV JABAQUARA,2685, , MIRANDOPOLIS - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 3938-4821

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV JABAQUARA, 2685, , MIRANDOPOLIS - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp santos miramar-shopping-santos delivery drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MIRAMAR SHOPPING SANTOS</strong></h2>
                        <h3>RUA EUCLIDES DA CUNHA,5, NUMERO 21 LOJA 86, GONZAGA - SANTOS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (13) 3394-2875

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551399721-9107' target='_blank'><i class='fab fa-whatsapp'></i>(13) 99721-9107</a>

                          <a href='https://www.google.com.br/maps/search/RUA EUCLIDES DA CUNHA, 5, NUMERO 21 LOJA 86, GONZAGA - SANTOS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo moema-cotovia delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MOEMA COTOVIA</strong></h2>
                        <h3>Av Cotovia,342, , Moema - São Paulo</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado, das 9h às 17h</h4>

                        <h5>Tel: (11) 5542-4005

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551193283-1611' target='_blank'><i class='fab fa-whatsapp'></i>(11) 93283-1611</a>

                          <a href='https://www.google.com.br/maps/search/Av Cotovia, 342, , Moema - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp campinas moraes-salles   clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MORAES SALLES</strong></h2>
                        <h3>AV DOUTOR MORAES SALLES,1404, SALA A, CENTRO - CAMPINAS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (19) 3252-0179

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV DOUTOR MORAES SALLES, 1404, SALA A, CENTRO - CAMPINAS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo morumbi-jorge-joao-saad delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MORUMBI JORGE JOAO SAAD</strong></h2>
                        <h3>AV JORGE JOÃO SAAD,900, LOJA 06, VILA PROGREDIOR - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 3507-5494

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV JORGE JOÃO SAAD, 900, LOJA 06, VILA PROGREDIOR - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo morumbi-shopping delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MORUMBI SHOPPING</strong></h2>
                        <h3>Av Roque Petroni Junior,1089, Loja 230 I, Jardim das Acacias - São Paulo</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado das 10h às 16h</h4>

                        <h5>Tel: (11) 5182-3747

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551199484-4406' target='_blank'><i class='fab fa-whatsapp'></i>(11) 99484-4406</a>

                          <a href='https://www.google.com.br/maps/search/Av Roque Petroni Junior, 1089, Loja 230 I, Jardim das Acacias - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rn mossoro mossoro delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MOSSORO</strong></h2>
                        <h3>Rua Coronel Gurgel,168, Loja 104 - Shopping Liberdade, Centro - Mossoro</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h às 18h</h4>

                        <h5>Tel: (84) 3318-5747

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558498837-6036' target='_blank'><i class='fab fa-whatsapp'></i>(84) 98837-6036</a>

                          <a href='https://www.google.com.br/maps/search/Rua Coronel Gurgel, 168, Loja 104 - Shopping Liberdade, Centro - Mossoro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo mv-clinicas delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>MV CLINICAS</strong></h2>
                        <h3>Rua Teodoro Sampaio,538, , Pinheiros - São Paulo</h3>
                        <h4>Horário de Atendimento: Segunda à sexta, das 08h30 às 19h - sábados das 10 às 16h</h4>

                        <h5>Tel: (11) 3062-7996

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551195490-0377' target='_blank'><i class='fab fa-whatsapp'></i>(11) 95490-0377</a>

                          <a href='https://www.google.com.br/maps/search/Rua Teodoro Sampaio, 538, , Pinheiros - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rn natal natal-shop-cidade-jardim-nort delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NATAL SHOP CIDADE JARDIM (NORTE SHOPPING NATAL)</strong></h2>
                        <h3>Av Engenheiro Roberto Freire,340, Loja 61/61a - Shopping Cidade Jardim, Capim Macio - Natal</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h às 18h30</h4>

                        <h5>Tel: (84) 3207-8889

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558499101-9701' target='_blank'><i class='fab fa-whatsapp'></i>(84) 99101-9701</a>

                          <a href='https://www.google.com.br/maps/search/Av Engenheiro Roberto Freire, 340, Loja 61/61a - Shopping Cidade Jardim, Capim Macio - Natal' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rn natal natal-shopp-midway-mall delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NATAL SHOPP MIDWAY MALL</strong></h2>
                        <h3>Av Bernardo Vieira,3775, Loja 166/167 - Natal Shopping Midway Mall, Tirol - Natal</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h às 18h30</h4>

                        <h5>Tel: (84) 3646-3323

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558499101-9701' target='_blank'><i class='fab fa-whatsapp'></i>(84) 99101-9701</a>

                          <a href='https://www.google.com.br/maps/search/Av Bernardo Vieira, 3775, Loja 166/167 - Natal Shopping Midway Mall, Tirol - Natal' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rn natal natal-shopping delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NATAL SHOPPING</strong></h2>
                        <h3>Avenida Senador Salgado Filho,2234, , Candelaria - Natal</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (84) 2010-0201

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=5584996101002' target='_blank'><i class='fab fa-whatsapp'></i>(84) 996101002</a>

                          <a href='https://www.google.com.br/maps/search/Avenida Senador Salgado Filho, 2234, , Candelaria - Natal' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rn natal natal-tirol-shop-cidade-jardi delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NATAL TIROL (SHOP CIDADE JARDIM)</strong></h2>
                        <h3>Av Afonso Pena,632, , Tirol - Natal</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h às 18h30</h4>

                        <h5>Tel: (84) 2226-7833

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558499101-9701' target='_blank'><i class='fab fa-whatsapp'></i>(84) 99101-9701</a>

                          <a href='https://www.google.com.br/maps/search/Av Afonso Pena, 632, , Tirol - Natal' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj nilopolis nilopolis    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NILOPOLIS</strong></h2>
                        <h3>EST GETULIO VARGAS,1377, , CENTRO - NILOPOLIS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3039-7199

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/EST GETULIO VARGAS, 1377, , CENTRO - NILOPOLIS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj niteroi niteroi-centro delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NITEROI CENTRO</strong></h2>
                        <h3>R Da Conceicao,163, , Centro - Niteroi</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2618-0580

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R Da Conceicao, 163, , Centro - Niteroi' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj niteroi niteroi-mariz-e-barros delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NITEROI MARIZ E BARROS</strong></h2>
                        <h3>Rua Mariz E Barros,74, , Icarai - Niteroi</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h às 19h</h4>

                        <h5>Tel: (21) 3620-0606

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/Rua Mariz E Barros, 74, , Icarai - Niteroi' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj niteroi niteroi-moreira-cesar delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NITEROI MOREIRA CESAR</strong></h2>
                        <h3>R Coronel Moreira Cesar,75, Comp 102, Icarai - Niteroi</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 10h às 18h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552197118-3755' target='_blank'><i class='fab fa-whatsapp'></i>(21) 97118-3755</a>

                          <a href='https://www.google.com.br/maps/search/R Coronel Moreira Cesar, 75, Comp 102, Icarai - Niteroi' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro norte-shopping    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NORTE SHOPPING</strong></h2>
                        <h3>AV DOM HELDER CAMARA,5474, LOJA 816/817 - NORTE SHOPPING, PIEDADE - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2178-4344

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV DOM HELDER CAMARA, 5474, LOJA 816/817 - NORTE SHOPPING, PIEDADE - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro norte-shopping-2    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NORTE SHOPPING 2</strong></h2>
                        <h3>AV DOM HELDER CAMARA,5080, SALAO COMERCIAL 4306 - PISO S - SHOPPING NORTE 2, DEL CASTILHO - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3315-4365

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV DOM HELDER CAMARA, 5080, SALAO COMERCIAL 4306 - PISO S - SHOPPING NORTE 2, DEL CASTILHO - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza north-shopping-joquei-ce delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NORTH SHOPPING JOQUEI-CE</strong></h2>
                        <h3>Avenida Lineu Machado,419, Loja 1070, Joquei Clube - Fortaleza</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 18h</h4>

                        <h5>Tel: (85) 3039-4999 / (85) 3258-1175</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>
                        <a href='https://api.whatsapp.com/send?phone=558598122-3987' target='_blank'><i class='fab fa-whatsapp'></i>(85) 98122-3987</a>

                        <a href='https://www.google.com.br/maps/search/Avenida Lineu Machado, 419, Loja 1070, Joquei Clube - Fortaleza' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce maracanau north-shopping-maracanau delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NORTH SHOPPING MARACANAU</strong></h2>
                        <h3>Avenida Carlos Jereissati,100, Loja 239, Jereissati Il - Maracanau</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 18h</h4>

                        <h5>Tel: (85) 3035-0329

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558598122-3987' target='_blank'><i class='fab fa-whatsapp'></i>(85) 98122-3987</a>

                          <a href='https://www.google.com.br/maps/search/Avenida Carlos Jereissati, 100, Loja 239, Jereissati Il - Maracanau' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj nova-iguacu nova-iguacu    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NOVA IGUACU</strong></h2>
                        <h3>R OTAVIO TARQUINIO,165, , CENTRO - NOVA IGUACU</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2797-3455

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R OTAVIO TARQUINIO, 165, , CENTRO - NOVA IGUACU' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro novo-leblon delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>NOVO LEBLON</strong></h2>
                        <h3>AV DAS AMERICAS,7607, LOJA 153 - NOVO LEBLON SHOPPING, BARRA DA TIJUCA - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3326-1200

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV DAS AMERICAS, 7607, LOJA 153 - NOVO LEBLON SHOPPING, BARRA DA TIJUCA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo oscar-freire delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>OSCAR FREIRE</strong></h2>
                        <h3>Rua Oscar Freire,295, , Jardim paulista - São Paulo</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h as 20h - Sabados das 9h às 18h - Domingos das 11h as 18h</h4>

                        <h5>Tel: (11) 2619-5891

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=55119 7415-1115' target='_blank'><i class='fab fa-whatsapp'></i>(11) 9 7415-1115</a>

                          <a href='https://www.google.com.br/maps/search/Rua Oscar Freire, 295, , Jardim paulista - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 to palmas palmas delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PALMAS</strong></h2>
                        <h3>Q 104 SUL R SE 9 CONJUNTO 2 LOTE 44,39, LOJA 2, PLANO DIRETOR SUL - PALMAS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (63) 3225-5526

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/Q 104 SUL R SE 9 CONJUNTO 2 LOTE 44, 39, LOJA 2, PLANO DIRETOR SUL - PALMAS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo pamplona delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PAMPLONA</strong></h2>
                        <h3>R Pamplona,1440, , Jardim Paulista - São Paulo</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551197567-7888' target='_blank'><i class='fab fa-whatsapp'></i>(11) 97567-7888</a>

                          <a href='https://www.google.com.br/maps/search/R Pamplona, 1440, , Jardim Paulista - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo paraiso delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PARAISO</strong></h2>
                        <h3>AV BERNARDINO DE CAMPOS,28, , PARAISO - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 3051-3902

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV BERNARDINO DE CAMPOS, 28, , PARAISO - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pa parauapebas parauapebas delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PARAUAPEBAS</strong></h2>
                        <h3>Rua E,641, Quadra 49 Lote 11, Cidade Nova - Parauapebas</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 19h - Sábados das 9h às 14h</h4>

                        <h5>Tel: / (94) 99665-8023</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>
                        <a href='https://api.whatsapp.com/send?phone=559498150-7107' target='_blank'><i class='fab fa-whatsapp'></i>(94) 98150-7107</a>

                        <a href='https://www.google.com.br/maps/search/Rua E, 641, Quadra 49 Lote 11, Cidade Nova - Parauapebas' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro parkshopping-campo-grande delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PARKSHOPPING CAMPO GRANDE</strong></h2>
                        <h3>ESTRADA DO MONTEIRO,1200, loja 107-k, CAMPO GRANDE - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3402-3992 / (21) 3402-3926</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                        </h5>


                        <a href='https://www.google.com.br/maps/search/ESTRADA DO MONTEIRO, 1200, loja 107-k, CAMPO GRANDE - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pe recife parnamirim-antiga-recife-plaz delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PARNAMIRIM (ANTIGA RECIFE PLAZA)</strong></h2>
                        <h3>R Dr. José Godoy de Vasconcelos,75, , Parnamirim - Recife</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 9h às 15h</h4>

                        <h5>Tel: (81) 3267-7369

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558199324-5261' target='_blank'><i class='fab fa-whatsapp'></i>(81) 99324-5261</a>

                          <a href='https://www.google.com.br/maps/search/R Dr. José Godoy de Vasconcelos, 75, , Parnamirim - Recife' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp presidente-prudente parque-do-povo delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PARQUE DO POVO</strong></h2>
                        <h3>Av Quatorze De Setembro,1210, , Jardim Paulistano - Presidente Prudente</h3>
                        <h4>Horário de Atendimento: Seg a Sex: 10h as - Sab: 09h as 12h</h4>

                        <h5>Tel: (18) 3217-3777

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551899666-5855' target='_blank'><i class='fab fa-whatsapp'></i>(18) 99666-5855</a>

                          <a href='https://www.google.com.br/maps/search/Av Quatorze De Setembro, 1210, , Jardim Paulistano - Presidente Prudente' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo parque-sao-domingos delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PARQUE SAO DOMINGOS</strong></h2>
                        <h3>R EMILIO COLELLA,19, , PARQUE SAO DOMINGOS - SAO PAULO</h3>
                        <h4>Horário de Atendimento: Segunda a Sabado das 09h as 18h </h4>

                        <h5>Tel: (11) 3641-2630

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R EMILIO COLELLA, 19, , PARQUE SAO DOMINGOS - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ba lauro-de-freitas parque-shopping-bahia    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PARQUE SHOPPING BAHIA</strong></h2>
                        <h3>AV SANTOS DUMONT,4360, LOJA 1083 - PISO L1, CENTRO - LAURO DE FREITAS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (71) 3901-1889

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV SANTOS DUMONT, 4360, LOJA 1083 - PISO L1, CENTRO - LAURO DE FREITAS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj sao-goncalo partage-shopping-sao-goncalo delivery drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PARTAGE SHOPPING SÃO GONÇALO</strong></h2>
                        <h3>Avenida Presidente Kennedy,425, Loja 134, Centro - São Gonçalo</h3>
                        <h4>Horário de Atendimento: Segunda a Sab das 10h às 22h - Dom e Feriado 12h às 20h</h4>

                        <h5>Tel: (21) 98875-5991

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552199220-8496' target='_blank'><i class='fab fa-whatsapp'></i>(21) 99220-8496</a>

                          <a href='https://www.google.com.br/maps/search/Avenida Presidente Kennedy, 425, Loja 134, Centro - São Gonçalo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rs passo-fundo passo-fundo-centro delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PASSO FUNDO CENTRO</strong></h2>
                        <h3>R Morom,1311, Loja Terrea - Sala 101, Centro - Passo Fundo</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 19h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=555499155-5267' target='_blank'><i class='fab fa-whatsapp'></i>(54) 99155-5267</a>

                          <a href='https://www.google.com.br/maps/search/R Morom, 1311, Loja Terrea - Sala 101, Centro - Passo Fundo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg patos-de-minas patos-de-minas delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PATOS DE MINAS</strong></h2>
                        <h3>AV PARACATU,627, LOJA 01, ROSARIO - PATOS DE MINAS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (34) 3061-9516

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV PARACATU, 627, LOJA 01, ROSARIO - PATOS DE MINAS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pe olinda patteo-olinda-antiga-north-wa delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PATTEO OLINDA (ANTIGA NORTH WAY PAULISTA)</strong></h2>
                        <h3>Rua Eduardo De Moraes,310, Loja 2022 E 2023, Casa Caiada - Olinda</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 10h às 18h</h4>

                        <h5>Tel: (81) 3432-3504

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=5581 99878-1312' target='_blank'><i class='fab fa-whatsapp'></i>(81) 99878-1312</a>

                          <a href='https://www.google.com.br/maps/search/Rua Eduardo De Moraes, 310, Loja 2022 E 2023, Casa Caiada - Olinda' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro penha delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PENHA</strong></h2>
                        <h3>R DOS ROMEIROS,85, , PENHA - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2260-6110

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R DOS ROMEIROS, 85, , PENHA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro peninsula delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PENINSULA</strong></h2>
                        <h3>AV FLAMBOYANTS DA PENINSULA,855, LOJA 113, BARRA DA TIJUCA - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3388-5767

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV FLAMBOYANTS DA PENINSULA, 855, LOJA 113, BARRA DA TIJUCA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo perdizes delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PERDIZES</strong></h2>
                        <h3>R Cardoso De Almeida,1372, , Perdizes - São Paulo</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 09h às 18h30 - Sábado das 09h as 15h</h4>

                        <h5>Tel: (11) 2615-0587

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551199462-6761' target='_blank'><i class='fab fa-whatsapp'></i>(11) 99462-6761</a>

                          <a href='https://www.google.com.br/maps/search/R Cardoso De Almeida, 1372, , Perdizes - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj petropolis petropolis-imperador delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PETROPOLIS IMPERADOR</strong></h2>
                        <h3>R DO IMPERADOR,864, , CENTRO - PETROPOLIS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (24) 2242-7788

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R DO IMPERADOR, 864, , CENTRO - PETROPOLIS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj mage piabeta   clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PIABETA</strong></h2>
                        <h3>AV SANTOS DUMONT,177, LOJA 02, CENTRO/PIABETA - MAGE</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3655-9422

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV SANTOS DUMONT, 177, LOJA 02, CENTRO/PIABETA - MAGE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg pocos-de-caldas pocos-de-caldas-centro delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>POÇOS DE CALDAS CENTRO</strong></h2>
                        <h3>Rua Prefeito Chagas,116, , Centro - Poços de Caldas</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (35) 3721-962

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=553599751-2317' target='_blank'><i class='fab fa-whatsapp'></i>(35) 99751-2317</a>

                          <a href='https://www.google.com.br/maps/search/Rua Prefeito Chagas, 116, , Centro - Poços de Caldas' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pr ponta-grossa ponta-grossa delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PONTA GROSSA</strong></h2>
                        <h3>Rua Dr Paula Xavier,1199, , Centro - Ponta Grossa</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 18h30 - Sábados das 9h às 13h</h4>

                        <h5>Tel: (41) 3027-4116

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=554299129-4116' target='_blank'><i class='fab fa-whatsapp'></i>(42) 99129-4116</a>

                          <a href='https://www.google.com.br/maps/search/Rua Dr Paula Xavier, 1199, , Centro - Ponta Grossa' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ro porto-velho porto-velho delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PORTO VELHO</strong></h2>
                        <h3>Av Carlos Gomes,1315, , Centro - Porto Velho</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h às 18h30</h4>

                        <h5>Tel: (69) 3221-1000

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=556999203-3373' target='_blank'><i class='fab fa-whatsapp'></i>(69) 99203-3373</a>

                          <a href='https://www.google.com.br/maps/search/Av Carlos Gomes, 1315, , Centro - Porto Velho' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg pouso-alegre pouso-alegre delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>POUSO ALEGRE</strong></h2>
                        <h3>RUA PROFESSOR MENDONÇA,,133, LOJA 05, CENTRO - POUSO ALEGRE</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (35) 3421-9906

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/RUA PROFESSOR MENDONÇA,, 133, LOJA 05, CENTRO - POUSO ALEGRE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo praca-da-arvore delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>PRACA DA ARVORE</strong></h2>
                        <h3>AV JABAQUARA,900, , MIRANDOPOLIS - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 4304-5556

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV JABAQUARA, 900, , MIRANDOPOLIS - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj queimados queimados delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>QUEIMADOS</strong></h2>
                        <h3>Av Irmãos Guinle,1161, , Centro - Queimados</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 19h30 - Sábados das 9h as 17h30 - Domingos das 9h às 15h</h4>

                        <h5>Tel: (21) 2665-6453

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552198542-0679' target='_blank'><i class='fab fa-whatsapp'></i>(21) 98542-0679</a>

                          <a href='https://www.google.com.br/maps/search/Av Irmãos Guinle, 1161, , Centro - Queimados' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro quiosque-metro-carioca    '>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>QUIOSQUE METRO CARIOCA</strong></h2>
                        <h3>LARGO Da Carioca,0, QUIOSQUE CRC-Q-UM 15 ESTAÇÃO METRO CARIOCA, CENTRO - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2544-1565

                          <h5 class='servico-entrega'>




                          </h5>


                          <a href='https://www.google.com.br/maps/search/LARGO Da Carioca, 0, QUIOSQUE CRC-Q-UM 15 ESTAÇÃO METRO CARIOCA, CENTRO - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo raposo-shopping delivery drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>RAPOSO SHOPPING</strong></h2>
                        <h3>ROD RAPOSO TAVARES,KM 14, 5 PISO RAPOSO SCU 3071P - RAPOSO SHOPPING, JARDIM BOA VISTA - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 3731-2519

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/ROD RAPOSO TAVARES, KM 14, 5 PISO RAPOSO SCU 3071P - RAPOSO SHOPPING, JARDIM BOA VISTA - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo real-parque delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>REAL PARQUE</strong></h2>
                        <h3>Av Morumbi,6705, Loja 03, Morumbi - São Paulo</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado, das 10h às 18h</h4>

                        <h5>Tel: (11) 3758-7718

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551199655-6432' target='_blank'><i class='fab fa-whatsapp'></i>(11) 99655-6432</a>

                          <a href='https://www.google.com.br/maps/search/Av Morumbi, 6705, Loja 03, Morumbi - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pe recife recife-boa-vista delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>RECIFE BOA VISTA</strong></h2>
                        <h3>R do Hospício,163, Loja A, Boa Vista - Recife</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 9h às 15h</h4>

                        <h5>Tel: (81) 3039-6467

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558199571-9276' target='_blank'><i class='fab fa-whatsapp'></i>(81) 99571-9276</a>

                          <a href='https://www.google.com.br/maps/search/R do Hospício, 163, Loja A, Boa Vista - Recife' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pe recife recife-centro delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>RECIFE CENTRO</strong></h2>
                        <h3>R do Rangel,215, , São José - Recife</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (81) 3224-8012

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558199952-8115' target='_blank'><i class='fab fa-whatsapp'></i>(81) 99952-8115</a>

                          <a href='https://www.google.com.br/maps/search/R do Rangel, 215, , São José - Recife' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pe recife recife-shopping   clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>RECIFE SHOPPING</strong></h2>
                        <h3>R PADRE CARAPUCEIRO,777, LOJA BV 90, BOA VIAGEM - RECIFE</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 10h às 22h - Domingos das 12h às 21h</h4>

                        <h5>Tel: (81) 3463-0452

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558198122-8181' target='_blank'><i class='fab fa-whatsapp'></i>(81) 98122-8181</a>

                          <a href='https://www.google.com.br/maps/search/R PADRE CARAPUCEIRO, 777, LOJA BV 90, BOA VIAGEM - RECIFE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro recreio delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>RECREIO</strong></h2>
                        <h3>Av Das Americas,16, 285 Loja H, Recreio - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 18h - Sábados das 09h às 13h</h4>

                        <h5>Tel: (21) 2487-1111

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/Av Das Americas, 16, 285 Loja H, Recreio - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro recreio-shopping delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>RECREIO SHOPPING</strong></h2>
                        <h3>Av. Das Américas,19019, Loja 110 E, Recreio dos Bandeirantes - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Horário de entrega à combinar</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552196580-4399' target='_blank'><i class='fab fa-whatsapp'></i>(21) 96580-4399</a>

                          <a href='https://www.google.com.br/maps/search/Av. Das Américas, 19019, Loja 110 E, Recreio dos Bandeirantes - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj resende resende delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>RESENDE</strong></h2>
                        <h3>AV ALBINO DE ALMEIDA,,138, LOJA B, CAMPOS ELISEOS - RESENDE</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (24) 3355-2301

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV ALBINO DE ALMEIDA,, 138, LOJA B, CAMPOS ELISEOS - RESENDE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp ribeirao-preto ribeirao-preto-centro delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>RIBEIRAO PRETO CENTRO</strong></h2>
                        <h3>Av Nove De Julho,673, , Centro - Ribeirão Preto</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (16) 3325-3900

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551698187-8601' target='_blank'><i class='fab fa-whatsapp'></i>(16) 98187-8601</a>

                          <a href='https://www.google.com.br/maps/search/Av Nove De Julho, 673, , Centro - Ribeirão Preto' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp ribeirao-preto ribeirao-shopping delivery drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>RIBEIRAO SHOPPING</strong></h2>
                        <h3>AV CORONEL FERNANDO FERREIRA LEITE,1540, LUC 304 - RIBEIRAO SHOPPING, JARDIM CALIFORNIA - RIBEIRAO PRETO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (16) 3902-1286

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV CORONEL FERNANDO FERREIRA LEITE, 1540, LUC 304 - RIBEIRAO SHOPPING, JARDIM CALIFORNIA - RIBEIRAO PRETO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-das-ostras rio-das-ostras    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>RIO DAS OSTRAS</strong></h2>
                        <h3>Rodovia Amaral Peixoto,4693, , Centro - Rio das Ostras</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 18h - Entrega Programada: Entregas Seg, Qua e Sex - Ligar para mais informações</h4>

                        <h5>Tel: (22) 2771-7218

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552299211-8874' target='_blank'><i class='fab fa-whatsapp'></i>(22) 99211-8874</a>

                          <a href='https://www.google.com.br/maps/search/Rodovia Amaral Peixoto, 4693, , Centro - Rio das Ostras' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro rio-sul    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>RIO SUL</strong></h2>
                        <h3>R LAURO MULLER,116, LOJA 101 - PARTE A43 - SHOPPING RIO SUL, BOTAFOGO - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: Segunda a sábado, das 10h às 22h - Domingo das 13h30 às 21h</h4>

                        <h5>Tel: (21) 3147-7486 / (21) 2542-1831</h5>

                        <h5 class='servico-entrega'>


                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                        </h5>


                        <a href='https://www.google.com.br/maps/search/R LAURO MULLER, 116, LOJA 101 - PARTE A43 - SHOPPING RIO SUL, BOTAFOGO - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 go rio-verde rio-verde delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>RIO VERDE</strong></h2>
                        <h3>Rua Rui Barbosa,750, Quadra 05 Lote 04 Parte A, Setor Comercial - Rio Verde</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h30 às 18h30</h4>

                        <h5>Tel: (64) 3051-0248

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=556499830-0505' target='_blank'><i class='fab fa-whatsapp'></i>(64) 99830-0505</a>

                          <a href='https://www.google.com.br/maps/search/Rua Rui Barbosa, 750, Quadra 05 Lote 04 Parte A, Setor Comercial - Rio Verde' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ba salvador salvador-center-lapa delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SALVADOR CENTER LAPA</strong></h2>
                        <h3>R PORTAO DA PIEDADE,155, LOJA 228/229 - SHOP CENTER LAPA, BARRIS - SALVADOR</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (71) 3329-8787

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/R PORTAO DA PIEDADE, 155, LOJA 228/229 - SHOP CENTER LAPA, BARRIS - SALVADOR' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ba salvador salvador-max-center delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SALVADOR MAX CENTER</strong></h2>
                        <h3>AV ANTONIO CARLOS MAGALHAES,846, LOJA 01 - ED MAX CENTER, ITAIGARA - SALVADOR</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (71) 3359-0976

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV ANTONIO CARLOS MAGALHAES, 846, LOJA 01 - ED MAX CENTER, ITAIGARA - SALVADOR' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ba salvador salvador-norte-shopping delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SALVADOR NORTE SHOPPING</strong></h2>
                        <h3>ROD BA 526,305, SALVADOR NORTE SHOPPING, SAO CRISTOVAO - SALVADOR</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 9h às 17h - Sábados das 9h às 13h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=557199334-8418' target='_blank'><i class='fab fa-whatsapp'></i>(71) 99334-8418</a>

                          <a href='https://www.google.com.br/maps/search/ROD BA 526, 305, SALVADOR NORTE SHOPPING, SAO CRISTOVAO - SALVADOR' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ba salvador salvador-shopping delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SALVADOR SHOPPING</strong></h2>
                        <h3>AV TANCREDO NEVES,2915, LOJA 1074 -SALVADOR SHOPPING, CAMINHO DAS ARVORES - SALVADOR</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (71) 3878-1300 / (71) 3414-2301</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>


                        <a href='https://www.google.com.br/maps/search/AV TANCREDO NEVES, 2915, LOJA 1074 -SALVADOR SHOPPING, CAMINHO DAS ARVORES - SALVADOR' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ba salvador salvador-shopping-barra delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SALVADOR SHOPPING BARRA</strong></h2>
                        <h3>AV CENTENARIO,2992, LOJA 356/357 SHOPPING BARRA, CHAME CHAME - SALVADOR</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado das 9h às 17h</h4>

                        <h5>Tel: (71) 3264-2220

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=5571988699428' target='_blank'><i class='fab fa-whatsapp'></i>(71) 988699428</a>

                          <a href='https://www.google.com.br/maps/search/AV CENTENARIO, 2992, LOJA 356/357 SHOPPING BARRA, CHAME CHAME - SALVADOR' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ba salvador salvador-shopping-bela-vista delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SALVADOR SHOPPING BELA VISTA</strong></h2>
                        <h3>AL EUVALDO LUZ,92, N 58 1 - SALVADOR SHOPPING BELA VISTA, HORTO BELA VISTA - SALVADOR</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (71) 3460-6127

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AL EUVALDO LUZ, 92, N 58 1 - SALVADOR SHOPPING BELA VISTA, HORTO BELA VISTA - SALVADOR' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ba salvador salvador-shopping-paralela delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SALVADOR SHOPPING PARALELA</strong></h2>
                        <h3>AV LUIZ VIANA,8544, LOJA 210/211 - SALVADOR SHOPPING CENTER PARALELA, PARALELA - SALVADOR</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado das 9h às 17h</h4>

                        <h5>Tel: (71) 3023-8363

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=557198876-3274' target='_blank'><i class='fab fa-whatsapp'></i>(71) 98876-3274</a>

                          <a href='https://www.google.com.br/maps/search/AV LUIZ VIANA, 8544, LOJA 210/211 - SALVADOR SHOPPING CENTER PARALELA, PARALELA - SALVADOR' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte santa-efigenia   clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SANTA EFIGENIA</strong></h2>
                        <h3>Rua Rio Grande Do Norte,19, Loja 01, Santa Efigenia - Belo Horizonte</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (31) 3234-4000

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=55319969-3247' target='_blank'><i class='fab fa-whatsapp'></i>(31) 9969-3247</a>

                          <a href='https://www.google.com.br/maps/search/Rua Rio Grande Do Norte, 19, Loja 01, Santa Efigenia - Belo Horizonte' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo santana delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SANTANA</strong></h2>
                        <h3>R Dr Cesar,237, , Santana - São Paulo</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 10h às 17h</h4>

                        <h5>Tel: (11) 2892-9002

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551195636-8852' target='_blank'><i class='fab fa-whatsapp'></i>(11) 95636-8852</a>

                          <a href='https://www.google.com.br/maps/search/R Dr Cesar, 237, , Santana - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo santana-parque-shopping delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SANTANA PARQUE SHOPPING</strong></h2>
                        <h3>R CONSELHEIRO MOREIRA DE BARROS,2780, LOJA 1065 - SANTANA PQ SHPPING, SANTANA - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 2236-4567

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R CONSELHEIRO MOREIRA DE BARROS, 2780, LOJA 1065 - SANTANA PQ SHPPING, SANTANA - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp cotia sao-camilo-granja delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SÃO CAMILO GRANJA</strong></h2>
                        <h3>AV. SÃO CAMILO,1181, LOJA 04, GRANJA VIANA - COTIA</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado das 9h às 18h</h4>

                        <h5>Tel: (11) 4777-9105

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551199595-4343' target='_blank'><i class='fab fa-whatsapp'></i>(11) 99595-4343</a>

                          <a href='https://www.google.com.br/maps/search/AV. SÃO CAMILO, 1181, LOJA 04, GRANJA VIANA - COTIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro sao-cristovao delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SAO CRISTOVAO</strong></h2>
                        <h3>R SAO LUIZ GONZAGA,119, LOJA A, SAO CRISTOVAO - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2589-5956

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R SAO LUIZ GONZAGA, 119, LOJA A, SAO CRISTOVAO - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj sao-goncalo sao-goncalo-rodo-shopp    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SAO GONCALO RODO SHOPP</strong></h2>
                        <h3>R DR NILO PECANHA,56, LOJA 16 - RODO SHOPPING, CENTRO - SAO GONCALO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2604-2828

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R DR NILO PECANHA, 56, LOJA 16 - RODO SHOPPING, CENTRO - SAO GONCALO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj sao-joao-de-meriti sao-joao-de-meriti    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SAO JOAO DE MERITI</strong></h2>
                        <h3>R DA MATRIZ,56, , CENTRO - SAO JOAO DE MERITI</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2756-3844

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R DA MATRIZ, 56, , CENTRO - SAO JOAO DE MERITI' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-jose-do-rio-preto sao-jose-do-rio-preto delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SAO JOSE DO RIO PRETO</strong></h2>
                        <h3>R BERNARDINO DE CAMPOS,3563, , CENTRO - SAO JOSE DO RIO PRETO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (17) 3353-6213

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R BERNARDINO DE CAMPOS, 3563, , CENTRO - SAO JOSE DO RIO PRETO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ma sao-luis sao-luis delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SAO LUIS</strong></h2>
                        <h3>AV PROF CARLOS CUNHA,301 e 302, LOJA 111/112 - SÃO LUIZ SHOPPING, JARACATY - SAO LUIS</h3>
                        <h4>Horário de Atendimento: segunda a sabado, das 10h às 22h - Domingos e feriados das 13h às 20h</h4>

                        <h5>Tel: (98) 3251-3512

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=559899131-2358' target='_blank'><i class='fab fa-whatsapp'></i>(98) 99131-2358</a>

                          <a href='https://www.google.com.br/maps/search/AV PROF CARLOS CUNHA, 301 e 302, LOJA 111/112 - SÃO LUIZ SHOPPING, JARACATY - SAO LUIS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg nova-lima serena-mall delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SERENA MALL</strong></h2>
                        <h3>RODOVIA MG-030,8625, LOJA 03, VALE DO SERENO - NOVA LIMA</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 9h às 17h</h4>

                        <h5>Tel: / (31) 3694-0436</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>
                        <a href='https://api.whatsapp.com/send?phone=553199304-0099' target='_blank'><i class='fab fa-whatsapp'></i>(31) 99304-0099</a>

                        <a href='https://www.google.com.br/maps/search/RODOVIA MG-030, 8625, LOJA 03, VALE DO SERENO - NOVA LIMA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo shop-top-center-paulista delivery drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOP TOP CENTER PAULISTA</strong></h2>
                        <h3>AV PAULISTA,854, LOJA 25B PISO TERREO, BELA VISTA - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 3251-3244

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551198666-0225' target='_blank'><i class='fab fa-whatsapp'></i>(11) 98666-0225</a>

                          <a href='https://www.google.com.br/maps/search/AV PAULISTA, 854, LOJA 25B PISO TERREO, BELA VISTA - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp santo-andre shopping-abc delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING ABC</strong></h2>
                        <h3>Av Pereira Barreto,42, Euc 82 - Piso Pb - Shopping Abc, Santo Andre - Santo Andre</h3>
                        <h4>Horário de Atendimento: Segunda a Domingo, das 12h às 20h</h4>

                        <h5>Tel: (11) 4436-4950

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551195094-7226' target='_blank'><i class='fab fa-whatsapp'></i>(11) 95094-7226</a>

                          <a href='https://www.google.com.br/maps/search/Av Pereira Barreto, 42, Euc 82 - Piso Pb - Shopping Abc, Santo Andre - Santo Andre' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza shopping-aldeota    '>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING ALDEOTA</strong></h2>
                        <h3>Av Dom Luis,500, Loja138 - Shopping Aldeota, Meireles - Fortaleza</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 18h</h4>

                        <h5>Tel: (85) 2181-0367

                          <h5 class='servico-entrega'>




                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558598122-3987' target='_blank'><i class='fab fa-whatsapp'></i>(85) 98122-3987</a>

                          <a href='https://www.google.com.br/maps/search/Av Dom Luis, 500, Loja138 - Shopping Aldeota, Meireles - Fortaleza' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg belo-horizonte shopping-boulevard-bh delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING BOULEVARD BH</strong></h2>
                        <h3>AV DOS ANDRADAS,3002, LOJA 1043 - SHOPPING BOULEVARD BH, SANTA EFIGENIA - BELO HORIZONTE</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (31) 2555-5560

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV DOS ANDRADAS, 3002, LOJA 1043 - SHOPPING BOULEVARD BH, SANTA EFIGENIA - BELO HORIZONTE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo shopping-cidade-jardim delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING CIDADE JARDIM</strong></h2>
                        <h3>Av Magalhaes De Castro,12000, Loja 5 A E B - Piso 3, Cidade Jardim - São Paulo</h3>
                        <h4>Horário de Atendimento: Segunda à Sábado, das 12h ás 20h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551199769-1705' target='_blank'><i class='fab fa-whatsapp'></i>(11) 99769-1705</a>

                          <a href='https://www.google.com.br/maps/search/Av Magalhaes De Castro, 12000, Loja 5 A E B - Piso 3, Cidade Jardim - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo shopping-cidade-sao-paulo delivery drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING CIDADE SAO PAULO</strong></h2>
                        <h3>AV PAULISTA,1230, PISO 3 SUC 203 - SHOPPING CIDADE SP, BELA VISTA - SAO PAULO</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 12h às 16h</h4>

                        <h5>Tel: / (11) 96837-6743</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                        </h5>
                        <a href='https://api.whatsapp.com/send?phone=551198666-0172' target='_blank'><i class='fab fa-whatsapp'></i>(11) 98666-0172</a>

                        <a href='https://www.google.com.br/maps/search/AV PAULISTA, 1230, PISO 3 SUC 203 - SHOPPING CIDADE SP, BELA VISTA - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rn parnamirim shopping-cidade-verde delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING CIDADE VERDE</strong></h2>
                        <h3>Av Ayrton Senna,1995, Loja 08, Nova Parnamirim - Parnamirim</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 21h</h4>

                        <h5>Tel: (84) 2010-9210

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558499851-0385' target='_blank'><i class='fab fa-whatsapp'></i>(84) 99851-0385</a>

                          <a href='https://www.google.com.br/maps/search/Av Ayrton Senna, 1995, Loja 08, Nova Parnamirim - Parnamirim' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ba salvador shopping-da-bahia delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING DA BAHIA</strong></h2>
                        <h3>AV TANCREDO NEVES,148, LOJA 22 - QP - SHOPPING IGAUTEMI, CAMINHO DAS ARVORES - SALVADOR</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado das 9h às 17h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=557198713-3285' target='_blank'><i class='fab fa-whatsapp'></i>(71) 98713-3285</a>

                          <a href='https://www.google.com.br/maps/search/AV TANCREDO NEVES, 148, LOJA 22 - QP - SHOPPING IGAUTEMI, CAMINHO DAS ARVORES - SALVADOR' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pe caruaru shopping-difusora delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING DIFUSORA</strong></h2>
                        <h3>Av Agamenon Magalhaes,444, Loja 12, Mauricio de Nassau - Caruaru</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 11h às 20h</h4>

                        <h5>Tel: (81) 2103-4558

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558199907-7048' target='_blank'><i class='fab fa-whatsapp'></i>(81) 99907-7048</a>

                          <a href='https://www.google.com.br/maps/search/Av Agamenon Magalhaes, 444, Loja 12, Mauricio de Nassau - Caruaru' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro shopping-downtown-barra    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING DOWNTOWN BARRA</strong></h2>
                        <h3>AV DAS AMERICAS,500, BLOCO 3 LOJA 112 SHOP DOWNTOWN, BARRA DA TIJUCA - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3496-9313

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV DAS AMERICAS, 500, BLOCO 3 LOJA 112 SHOP DOWNTOWN, BARRA DA TIJUCA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo shopping-eldorado delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING ELDORADO</strong></h2>
                        <h3>AV REBOUCAS,3970, LOJA 112 - SHOPPING ELDORADO, PINHEIROS - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 3816-0902

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV REBOUCAS, 3970, LOJA 112 - SHOPPING ELDORADO, PINHEIROS - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo shopping-frei-caneca delivery drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING FREI CANECA</strong></h2>
                        <h3>R Frei Caneca,569, Loja 336 - Shopping Frei Caneca, Consolacao - São Paulo</h3>
                        <h4>Horário de Atendimento: Atendimento em horário comercial. Pedidos serão enviados às 16h.</h4>

                        <h5>Tel: (11) 3545-4777

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551198834-7527' target='_blank'><i class='fab fa-whatsapp'></i>(11) 98834-7527</a>

                          <a href='https://www.google.com.br/maps/search/R Frei Caneca, 569, Loja 336 - Shopping Frei Caneca, Consolacao - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp barueri shopping-iguatemi-alphaville delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING IGUATEMI ALPHAVILLE</strong></h2>
                        <h3>Al Rio Negro,111, Loja 305 Andar 3, Alphaville Centro Industrial e Empresarial - Barueri</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 10h às 18h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551199882-8009' target='_blank'><i class='fab fa-whatsapp'></i>(11) 99882-8009</a>

                          <a href='https://www.google.com.br/maps/search/Al Rio Negro, 111, Loja 305 Andar 3, Alphaville Centro Industrial e Empresarial - Barueri' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp campinas shopping-iguatemi-campinas delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING IGUATEMI CAMPINAS</strong></h2>
                        <h3>AV IGUATEMI,777, SUC 15 -02B - SHOPPING IGUATEMI CAMPINAS, VILA BRANDINA - CAMPINAS</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 13h às 21h - Sábados das 13h às 21h - Domingo das 12h às 20h</h4>

                        <h5>Tel: (19) 3395-7010

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=55199 8984-3631' target='_blank'><i class='fab fa-whatsapp'></i>(19) 9 8984-3631</a>

                          <a href='https://www.google.com.br/maps/search/AV IGUATEMI, 777, SUC 15 -02B - SHOPPING IGUATEMI CAMPINAS, VILA BRANDINA - CAMPINAS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rs porto-alegre shopping-iguatemi-porto-alegre delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING IGUATEMI PORTO ALEGRE</strong></h2>
                        <h3>AV JOAO WALLIG,1800, ANDAR 1 - SHOPPING IGUATEMI PORTO ALEGRE LOJA 1283, PASSO DA AREA - PORTO ALEGRE</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado das 11h às 18h</h4>

                        <h5>Tel: (51) 3016-7606

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=555198921-0105' target='_blank'><i class='fab fa-whatsapp'></i>(51) 98921-0105</a>

                          <a href='https://www.google.com.br/maps/search/AV JOAO WALLIG, 1800, ANDAR 1 - SHOPPING IGUATEMI PORTO ALEGRE LOJA 1283, PASSO DA AREA - PORTO ALEGRE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp guarulhos shopping-internacional-guarulh delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING INTERNACIONAL GUARULHOS</strong></h2>
                        <h3>Rua Engenheiro Camilo Olivetti,295, Loja D21, Vila Endres - Guarulhos</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado das 8h às 22h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=5511 99335-6581' target='_blank'><i class='fab fa-whatsapp'></i>(11) 99335-6581</a>

                          <a href='https://www.google.com.br/maps/search/Rua Engenheiro Camilo Olivetti, 295, Loja D21, Vila Endres - Guarulhos' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo shopping-jardim-sul  drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING JARDIM SUL</strong></h2>
                        <h3>AV GIOVANNI GRONCHI,5819, LUC 186/187 - SHOPPING JARDIM SUL, VILA ANDRADE - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 3739-2435

                          <h5 class='servico-entrega'>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV GIOVANNI GRONCHI, 5819, LUC 186/187 - SHOPPING JARDIM SUL, VILA ANDRADE - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 se aracaju shopping-jardins delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING JARDINS</strong></h2>
                        <h3>Av Ministro Geraldo Barreto Sobral,215, Loja E-26, Jardins - Aracaju</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 12h às 20h</h4>

                        <h5>Tel: (79) 3211-3649

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/Av Ministro Geraldo Barreto Sobral, 215, Loja E-26, Jardins - Aracaju' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo shopping-jk-iguatemi    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING JK IGUATEMI</strong></h2>
                        <h3>AV. PRES. JUSCELINO KUBITSCHEK,2041, BLOCO A/B, VILA NOVA CONCEICAO - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 3813-0911

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV. PRES. JUSCELINO KUBITSCHEK, 2041, BLOCO A/B, VILA NOVA CONCEICAO - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza shopping-messejana delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING MESSEJANA</strong></h2>
                        <h3>Avenida Frei Cirilo,3840, , Messejana - Fortaleza</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 18h</h4>

                        <h5>Tel: (85) 3023-8990

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558598122-3987' target='_blank'><i class='fab fa-whatsapp'></i>(85) 98122-3987</a>

                          <a href='https://www.google.com.br/maps/search/Avenida Frei Cirilo, 3840, , Messejana - Fortaleza' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo shopping-metro-santa-cruz delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING METRO SANTA CRUZ</strong></h2>
                        <h3>Rua Domingos De Morais,2564, Loja 42t - Shopping Metro Sta Cruz, Vila Mariana - São Paulo</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 10h às 22h - Sababados das 16h às 22h - Domingos e Feriados das 10h às 20h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551194159-1087' target='_blank'><i class='fab fa-whatsapp'></i>(11) 94159-1087</a>

                          <a href='https://www.google.com.br/maps/search/Rua Domingos De Morais, 2564, Loja 42t - Shopping Metro Sta Cruz, Vila Mariana - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo shopping-metro-tatuape delivery drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING METRO TATUAPE</strong></h2>
                        <h3>AV RADIAL LESTE,169, PISO TERREO - LOJA 169 - SHOPPING METRO TATUAPE, TATUAPE - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 2225-2310

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV RADIAL LESTE, 169, PISO TERREO - LOJA 169 - SHOPPING METRO TATUAPE, TATUAPE - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo shopping-metro-tucuruvi delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING METRO TUCURUVI</strong></h2>
                        <h3>AV DR ANTONIO MARIA DE LAET,566, SALAO COMERCIAL 49 T PISO TERREO - SHOPPING METRO TUCURUVI, PARADA INGLESA - SAO PAULO</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado das 08:00h até às 22:00h - Domingos e Feriados: das 14:00h às 20h</h4>

                        <h5>Tel: (11) 3530-5555

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551196401-1213' target='_blank'><i class='fab fa-whatsapp'></i>(11) 96401-1213</a>

                          <a href='https://www.google.com.br/maps/search/AV DR ANTONIO MARIA DE LAET, 566, SALAO COMERCIAL 49 T PISO TERREO - SHOPPING METRO TUCURUVI, PARADA INGLESA - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-bernardo-do-campo shopping-metropole delivery drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING METROPOLE</strong></h2>
                        <h3>Praca Samuel Sabatini,200, Loja L032 - Shopping Metropole, Centro - Sao Bernardo do Campo</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 4330-6889

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551198554-9655' target='_blank'><i class='fab fa-whatsapp'></i>(11) 98554-9655</a>

                          <a href='https://www.google.com.br/maps/search/Praca Samuel Sabatini, 200, Loja L032 - Shopping Metropole, Centro - Sao Bernardo do Campo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro shopping-metropolitano   clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING METROPOLITANO</strong></h2>
                        <h3>AV EMBAIXADOR ABELARDO BUENO,1300, LOJA 10413 - PISO L1 - SHOPPING METROPOLITANO, JACAREPAGUA - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 3500-5767

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV EMBAIXADOR ABELARDO BUENO, 1300, LOJA 10413 - PISO L1 - SHOPPING METROPOLITANO, JACAREPAGUA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo shopping-morumbi-town  drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING MORUMBI TOWN</strong></h2>
                        <h3>AVENIDA GIOVANNI GRONCHI,5930, LOJA 36 B SHOP. MORUMBI TOWN, VILA ANDRADE - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 3502-6778

                          <h5 class='servico-entrega'>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AVENIDA GIOVANNI GRONCHI, 5930, LOJA 36 B SHOP. MORUMBI TOWN, VILA ANDRADE - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 go goiania shopping-orion delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING ORION</strong></h2>
                        <h3>AV. PORTUGAL,1148, , SETOR MARISTA - GOIANIA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (62) 3932-7414

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV. PORTUGAL, 1148, , SETOR MARISTA - GOIANIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo shopping-panamby delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING PANAMBY</strong></h2>
                        <h3>Av Maria Coelho Aguiar,215, , Jardim Sao Luiz - São Paulo</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 10h às 16h</h4>

                        <h5>Tel: (11) 3741-5004

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=55119620-8583' target='_blank'><i class='fab fa-whatsapp'></i>(11) 9620-8583</a>

                          <a href='https://www.google.com.br/maps/search/Av Maria Coelho Aguiar, 215, , Jardim Sao Luiz - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza shopping-parangaba delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING PARANGABA</strong></h2>
                        <h3>R Germano Franck,300, Loja 142 - Shopping Parangaba, Parangaba - Fortaleza</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 18h</h4>

                        <h5>Tel: (85) 3121-1083 / (85) 3258-1173</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>
                        <a href='https://api.whatsapp.com/send?phone=558598122-3987' target='_blank'><i class='fab fa-whatsapp'></i>(85) 98122-3987</a>

                        <a href='https://www.google.com.br/maps/search/R Germano Franck, 300, Loja 142 - Shopping Parangaba, Parangaba - Fortaleza' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj cabo-frio shopping-park-lagos-cabo-frio    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING PARK LAGOS CABO FRIO</strong></h2>
                        <h3>AV. HENRIQUE TERRA,1700, LOJA 96, PORTINHO - CABO FRIO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (22) 2645-6678

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV. HENRIQUE TERRA, 1700, LOJA 96, PORTINHO - CABO FRIO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 al maceio shopping-patio-maceio    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING PATIO MACEIO</strong></h2>
                        <h3>Av Menino Marcelo,3800, Sala 113 - Shopping Patio Maceio, Cidade Universitaria - Maceio</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (82) 3512-0946

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558298816-6369' target='_blank'><i class='fab fa-whatsapp'></i>(82) 98816-6369</a>

                          <a href='https://www.google.com.br/maps/search/Av Menino Marcelo, 3800, Sala 113 - Shopping Patio Maceio, Cidade Universitaria - Maceio' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pa maraba shopping-patio-maraba delivery drive-thru  aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING PATIO MARABA</strong></h2>
                        <h3>Q QUINZE,S/N, FOLHA 30 - LOTE 10 - LUC 358 A, NOVA MARABÁ - MARABÁ</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 14h às 18h - Sábados das 14h às 16h30</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=559499130-3430' target='_blank'><i class='fab fa-whatsapp'></i>(94) 99130-3430</a>

                          <a href='https://www.google.com.br/maps/search/Q QUINZE, S/N, FOLHA 30 - LOTE 10 - LUC 358 A, NOVA MARABÁ - MARABÁ' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pe recife shopping-riomar-recife   clube-mv '>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING RIOMAR RECIFE</strong></h2>
                        <h3>AV REPUBLICA DO LIBANO,251, LOJA 139, PINA - RECIFE</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado, das 10h às 22h - Domingos das 12h às 21h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>



                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558199127-6161' target='_blank'><i class='fab fa-whatsapp'></i>(81) 99127-6161</a>

                          <a href='https://www.google.com.br/maps/search/AV REPUBLICA DO LIBANO, 251, LOJA 139, PINA - RECIFE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 es sao-mateus shopping-sao-mateus delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING SÃO MATEUS</strong></h2>
                        <h3>AVENIDA JOSÉ TOZZI,1500, LOJA 28-A, CENTRO - SÃO MATEUS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (27) 3773-4905

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AVENIDA JOSÉ TOZZI, 1500, LOJA 28-A, CENTRO - SÃO MATEUS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro shopping-sulacap-sh-jd-guadal delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING SULACAP (SH JD GUADALUPE)</strong></h2>
                        <h3>AVN MARECHAL FONTENELLE,3545, LOJA 164 - SHOPPING SULACAP, JARDIM SULACAP - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2391-0531

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AVN MARECHAL FONTENELLE, 3545, LOJA 164 - SHOPPING SULACAP, JARDIM SULACAP - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp suzano shopping-suzano delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING SUZANO</strong></h2>
                        <h3>RUA SETE DE SETEMBRO (CIDADE CRUZEIRO DO SUL),555, LUC 66 LOJA, PARQUE SUZANO - SUZANO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 4742-4413

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/RUA SETE DE SETEMBRO (CIDADE CRUZEIRO DO SUL), 555, LUC 66 LOJA, PARQUE SUZANO - SUZANO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pe recife shopping-tacaruna-recife   clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING TACARUNA RECIFE</strong></h2>
                        <h3>AV AGAMENON MAGALHAES,153, LOJA 253 - SHOPPING TACARUNA, SANTO AMARO - RECIFE</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta das 10h às 22h - Domingos das 12h às 21h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=558198195-8181' target='_blank'><i class='fab fa-whatsapp'></i>(81) 98195-8181</a>

                          <a href='https://www.google.com.br/maps/search/AV AGAMENON MAGALHAES, 153, LOJA 253 - SHOPPING TACARUNA, SANTO AMARO - RECIFE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro shopping-tijuca    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING TIJUCA</strong></h2>
                        <h3>AV MARACANA,987, LOJA 1050 - SHOPPING TIJUCA, TIJUCA - RIO DE JANEIRO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2569-2795

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV MARACANA, 987, LOJA 1050 - SHOPPING TIJUCA, TIJUCA - RIO DE JANEIRO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-jose-dos-campos shopping-vale-sul delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING VALE SUL</strong></h2>
                        <h3>AV ANDROMEDA,227, LOJA 78 - SHOPPING VALE SUL, JARDIM SATELITE - SAO JOSE DOS CAMPOS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (12) 3931-5302 / (12) 39315749</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                        </h5>


                        <a href='https://www.google.com.br/maps/search/AV ANDROMEDA, 227, LOJA 78 - SHOPPING VALE SUL, JARDIM SATELITE - SAO JOSE DOS CAMPOS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce fortaleza shopping-via-sul delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING VIA SUL</strong></h2>
                        <h3>Avenida Washington Soares,4335, Loja 318, Sapiranga - Fortaleza</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 18h</h4>

                        <h5>Tel: (85) 3023-8990 / (85) 3258-1176</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>
                        <a href='https://api.whatsapp.com/send?phone=558598122-3987' target='_blank'><i class='fab fa-whatsapp'></i>(85) 98122-3987</a>

                        <a href='https://www.google.com.br/maps/search/Avenida Washington Soares, 4335, Loja 318, Sapiranga - Fortaleza' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 es vitoria shopping-vitoria delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SHOPPING VITORIA</strong></h2>
                        <h3>AV AMERICO BUAIZ,200, LOJA 238/239 - SHOPPING CENTER VITORIA, ENSEADA DO SUA - VITORIA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (27) 3335-1238 / (27) 3335-1239</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                        </h5>


                        <a href='https://www.google.com.br/maps/search/AV AMERICO BUAIZ, 200, LOJA 238/239 - SHOPPING CENTER VITORIA, ENSEADA DO SUA - VITORIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mt sinop sinop---mt delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SINOP - MT</strong></h2>
                        <h3>Av Dos Ingas,2800, Sala 01, Setor Comercial - Sinop</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h às 17h</h4>

                        <h5>Tel: (66) 3531-7676

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=556699955-7676' target='_blank'><i class='fab fa-whatsapp'></i>(66) 99955-7676</a>

                          <a href='https://www.google.com.br/maps/search/Av Dos Ingas, 2800, Sala 01, Setor Comercial - Sinop' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 ce sobral sobral-shopping    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SOBRAL SHOPPING</strong></h2>
                        <h3>AV MONSENHOR JOSE ALOISIO PINTO,300, LUC 135, DOM EXPEDITO - SOBRAL</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado, das 10h às 22h - Domingo e feriados, das 14h as 20h</h4>

                        <h5>Tel: (88) 99761-0090

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV MONSENHOR JOSE ALOISIO PINTO, 300, LUC 135, DOM EXPEDITO - SOBRAL' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mt sorriso sorriso delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>SORRISO</strong></h2>
                        <h3>Av Natalino Joao Brescansin,1719, , Centro - Sorriso</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h às 19h</h4>

                        <h5>Tel: (66) 3545-1453

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=556699922-5464' target='_blank'><i class='fab fa-whatsapp'></i>(66) 99922-5464</a>

                          <a href='https://www.google.com.br/maps/search/Av Natalino Joao Brescansin, 1719, , Centro - Sorriso' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro taquara delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TAQUARA</strong></h2>
                        <h3>Est Do Tindiba,2089, Loja I, Taquara - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 10h às 17h</h4>

                        <h5>Tel: (21) 2424-9131

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/Est Do Tindiba, 2089, Loja I, Taquara - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp taubate taubate delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TAUBATE</strong></h2>
                        <h3>R SACRAMENTO,115, LOJA 02, CENTRO - TAUBATE</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (12) 3413-0734

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R SACRAMENTO, 115, LOJA 02, CENTRO - TAUBATE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp taubate taubate-shopping   clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TAUBATE SHOPPING</strong></h2>
                        <h3>AV CHARLES SCHNEIDER,1700, LOJA 128 - 1º PAVIMENTO, VILA COSTA - TAUBATE</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (12) 3413-0734

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV CHARLES SCHNEIDER, 1700, LOJA 128 - 1º PAVIMENTO, VILA COSTA - TAUBATE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg teofilo-otoni teofilo-otoni delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TEOFILO OTONI</strong></h2>
                        <h3>AVENIDA ALFREDO SÁ,2221, , JARDIM DAS ACACIAS - TEOFILO OTONI</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (16) 98144-3322

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AVENIDA ALFREDO SÁ, 2221, , JARDIM DAS ACACIAS - TEOFILO OTONI' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pi teresina teresina delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TERESINA</strong></h2>
                        <h3>R SENADOR TEODORO PACHECO,1179, LOJA 01, CENTRO - TERESINA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (86) 3223-2151

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R SENADOR TEODORO PACHECO, 1179, LOJA 01, CENTRO - TERESINA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pi teresina teresina-jockey-clube delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TERESINA JOCKEY CLUBE</strong></h2>
                        <h3>AV HOMERO CASTELO BRANCO,1000, , SAO CRISTOVAO - TERESINA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (86) 3233-2840

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV HOMERO CASTELO BRANCO, 1000, , SAO CRISTOVAO - TERESINA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pi teresina teresina-shopping delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TERESINA SHOPPING</strong></h2>
                        <h3>AV RAUL LOPES,1000, LOJA 302, NOIVOS - TERESINA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (86) 3231-1345

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV RAUL LOPES, 1000, LOJA 302, NOIVOS - TERESINA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj teresopolis teresopolis delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TERESOPOLIS</strong></h2>
                        <h3>PRACA BALTAZAR DA SILVEIRA,60, , VARZEA - TERESOPOLIS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (21) 2742-3036

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/PRACA BALTAZAR DA SILVEIRA, 60, , VARZEA - TERESOPOLIS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sc sao-jose terra-firme---sao-jose delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TERRA FIRME - SAO JOSE</strong></h2>
                        <h3>RUA DOMINGOS ANDRE ZANINI,277, LOJA 8, CAMPINAS - SAO JOSE</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (48) 3029-3938

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/RUA DOMINGOS ANDRE ZANINI, 277, LOJA 8, CAMPINAS - SAO JOSE' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo tiete-plaza-shopping    aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TIETE PLAZA SHOPPING</strong></h2>
                        <h3>AV RAIMUNDO PEREIRA DE MAGALHAES,1465, , JARDIM IRIS - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 3641-8273

                          <h5 class='servico-entrega'>


                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV RAIMUNDO PEREIRA DE MAGALHAES, 1465, , JARDIM IRIS - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro tijuca-conde-de-bonfim delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TIJUCA CONDE DE BONFIM</strong></h2>
                        <h3>R Conde De Bonfim,678, Loja B, Tijuca - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h30 às 20h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552197240-5697' target='_blank'><i class='fab fa-whatsapp'></i>(21) 97240-5697</a>

                          <a href='https://www.google.com.br/maps/search/R Conde De Bonfim, 678, Loja B, Tijuca - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro tijuca-haddock-lobo delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TIJUCA HADDOCK LOBO</strong></h2>
                        <h3>R Haddock Lobo,386, Loja D21, Tijuca - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 19h30</h4>

                        <h5>Tel: (21) 2254-4819

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R Haddock Lobo, 386, Loja D21, Tijuca - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro tijuca-mariz-e-barros delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TIJUCA MARIZ E BARROS</strong></h2>
                        <h3>R Mariz E Barros,1146, Loja A, Tijuca - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 19h</h4>

                        <h5>Tel: (21) 2574-9046 / (21) 2574-9628</h5>

                        <h5 class='servico-entrega'>
                          <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                          <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                        </h5>
                        <a href='https://api.whatsapp.com/send?phone=552197669-7515' target='_blank'><i class='fab fa-whatsapp'></i>(21) 97669-7515</a>

                        <a href='https://www.google.com.br/maps/search/R Mariz E Barros, 1146, Loja A, Tijuca - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj rio-de-janeiro tijuca-saens-pena delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TIJUCA SAENS PENA</strong></h2>
                        <h3>R Conde De Bonfim,383, Loja C, Tijuca - Rio de Janeiro</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 8h30 às 20h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=552199994-5379' target='_blank'><i class='fab fa-whatsapp'></i>(21) 99994-5379</a>

                          <a href='https://www.google.com.br/maps/search/R Conde De Bonfim, 383, Loja C, Tijuca - Rio de Janeiro' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 pr toledo toledo delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TOLEDO</strong></h2>
                        <h3>Rua Sete De Setembro,1705, , Jardim la Salle - Toledo</h3>
                        <h4>Horário de Atendimento: Horário de entrega à combinar</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=554599910-5405' target='_blank'><i class='fab fa-whatsapp'></i>(45) 99910-5405</a>

                          <a href='https://www.google.com.br/maps/search/Rua Sete De Setembro, 1705, , Jardim la Salle - Toledo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo tres-irmaos delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TRES IRMAOS</strong></h2>
                        <h3>R DOS TRÊS IRMAOS,495, , VILA PROGREDIOR - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 2628-1659

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R DOS TRÊS IRMAOS, 495, , VILA PROGREDIOR - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj tres-rios tres-rios    '>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>TRES RIOS</strong></h2>
                        <h3>RUA BARAO DO RIO BRANCO,303, LOJA 21, CENTRO - TRES RIOS</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (24) 2255-2122

                          <h5 class='servico-entrega'>




                          </h5>


                          <a href='https://www.google.com.br/maps/search/RUA BARAO DO RIO BRANCO, 303, LOJA 21, CENTRO - TRES RIOS' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg uberlandia uberlandia delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>UBERLANDIA</strong></h2>
                        <h3>AV PAULO GRACINDO,15, LOJA 1, MORADA DA COLINA - UBERLANDIA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (34) 3255-1199

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/AV PAULO GRACINDO, 15, LOJA 1, MORADA DA COLINA - UBERLANDIA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg varginha varginha delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>VARGINHA</strong></h2>
                        <h3>R Presidente Antonio Carlos,346, , Centro - Varginha</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (35) 3221-0405

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=553598849-4205' target='_blank'><i class='fab fa-whatsapp'></i>(35) 98849-4205</a>

                          <a href='https://www.google.com.br/maps/search/R Presidente Antonio Carlos, 346, , Centro - Varginha' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 mg vicosa vicosa delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>VIÇOSA</strong></h2>
                        <h3>Av Peter Henry Rolfs, 425 Loja 01 Bloco 1,425, Loja 01 Bloco 1, Centro - Viçosa</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (31) 3891-8259

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=553198629-6066' target='_blank'><i class='fab fa-whatsapp'></i>(31) 98629-6066</a>

                          <a href='https://www.google.com.br/maps/search/Av Peter Henry Rolfs, 425 Loja 01 Bloco 1, 425, Loja 01 Bloco 1, Centro - Viçosa' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo vila-leopoldina delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>VILA LEOPOLDINA</strong></h2>
                        <h3>R Carlos Weber,654/662, , Vila Leopoldina - São Paulo</h3>
                        <h4>Horário de Atendimento: Segunda a Sábado, das 10h às 15h</h4>

                        <h5>Tel:

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=551195663-4924' target='_blank'><i class='fab fa-whatsapp'></i>(11) 95663-4924</a>

                          <a href='https://www.google.com.br/maps/search/R Carlos Weber, 654/662, , Vila Leopoldina - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo vila-nova-conceicao delivery  clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>VILA NOVA CONCEICAO</strong></h2>
                        <h3>RUA DIOGO JACOME,485, , VILA NOVA CONCEICAO - SAO PAULO</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (11) 2361-7124

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>


                          <a href='https://www.google.com.br/maps/search/RUA DIOGO JACOME, 485, , VILA NOVA CONCEICAO - SAO PAULO' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 sp sao-paulo vila-pompeia delivery drive-thru clube-mv aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>VILA POMPEIA</strong></h2>
                        <h3>Av Pompeia,1213, , Vila Pompeia - São Paulo</h3>
                        <h4>Horário de Atendimento: Segunda a Sexta, das 9h às 19h - Sábados das 10h às 16h</h4>

                        <h5>Tel: (11) 4304-4301

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Drive-thru</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Clube Mundo Verde (Programa de Fidelidade)</span>
                          </h5>
                          <a href='https://api.whatsapp.com/send?phone=55114304-4301' target='_blank'><i class='fab fa-whatsapp'></i>(11) 4304-4301</a>

                          <a href='https://www.google.com.br/maps/search/Av Pompeia, 1213, , Vila Pompeia - São Paulo' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article class='col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 rj volta-redonda volta-redonda delivery   aberta'>
                <div class='linha'>
                  <div class='col-12'>
                    <div class='box-lojas'>
                      <div class='loja-header'>
                        <img src='https://media.mundoverde.com.br/campanhas/lancheira-saudavel-disney/images/mundo-verde.svg' alt='Mundo Verde'>
                      </div>
                      <div class='loja-content'>
                        <h2><strong>VOLTA REDONDA</strong></h2>
                        <h3>R 25,196, , VILA SANTA CECILIA - VOLTA REDONDA</h3>
                        <h4>Horário de Atendimento: </h4>

                        <h5>Tel: (24) 3343-4365

                          <h5 class='servico-entrega'>
                            <span class='bloco'><i class='fas fa-check-circle'></i> Delivery</span>

                            <span class='bloco'><i class='fas fa-check-circle'></i> Aberta ao Público</span>

                          </h5>


                          <a href='https://www.google.com.br/maps/search/R 25, 196, , VILA SANTA CECILIA - VOLTA REDONDA' target='_blank'><i class='fas fa-map-marker-alt'></i> Ver no Mapa</a>
                      </div>
                    </div>
                  </div>
                </div>
              </article>


              <!-- /JBQ Inserir linhas das unidades -->


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
  <script src='https://media.mundoverde.com.br/mv-nossas-lojas-staging/assets/scripts.js'></script>
  <!-- <script src='assets/scripts.js'></script> -->
</div>

<?php get_footer(); ?>