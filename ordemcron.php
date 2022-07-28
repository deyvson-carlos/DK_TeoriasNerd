<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="sortcut icon" href="./img/logo/eu001.png" type="image/x-icon"/>

    <!-- CSS -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/ordemcron.css">

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"/>
    <!-- MDB -->
    <!-- <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
      rel="stylesheet"/> -->

      <!-- MDB -->
      <script type="text/javascript" src="./js/global.js"></script>

    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
    ></script>

    <title>Ordem Cronológica</title>

</head>

<body>


<div class="container my-5">

        <!-- Section: Components -->
        <section class="">
          <section id="demo" class="">
          <header>

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="clarindiario.php">Clarín Diario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ordemcron.php">Ordem Cronológica</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Jogos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="teoria.php">Teorias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="navegacao.html">Navegação</a>
              </li>

              <li class="nav-item" style="margin-left: 500px;">
                <a class="nav-link" href="login.php">Login - Cadastre-se</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->

        <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('img/ordemCron/MCU-divulgacao.jpg');
      height: 400px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">ORDEM CRONOLÓGICA</h1>
          <h4 class="mb-3">FILMES E SÉRIES</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>
 <!-- fim de Navbar -->
 <div class="container p-4 pb-0">
  <section class="mb-4 teste">
    
    <a href="./OrdemCronologica/filmes.php"><img src="img/ordemCron/capitao.png" class="flex-container" alt="filmes"/><p class="texto">FILMES</p></a>
    <a href="./OrdemCronologica/series.php"><img src="img/ordemCron/capitamarvel.png" class="flex-container" alt="séries"/><p class="texto">SÉRIES</p></a>
    <a href="./OrdemCronologica/oneshots.php"><img src="img/ordemCron/cable.png" class="flex-container" alt="oneshots"/><p class="texto">ONE-SHOTS</p></a>
    <a href="./OrdemCronologica/equipes.php"><img src="img/ordemCron/magneto.png" class="flex-container" alt="equipes"/><p class="texto">EQUIPES</p></a>
    <a href="./OrdemCronologica/organizacoes.php"><img src="img/ordemCron/thanos.png" class="flex-container" alt="organizações"/><p class="texto">ORGANIZAÇÕES</p></a>
    <a href="./OrdemCronologica/multiverso.php"><img src="img/ordemCron/drestranho.png" class="flex-container" alt="multiverso"/><p class="texto">MULTIVERSO</p></a>
    <a href="./OrdemCronologica/sony.php"><img src="img/ordemCron/homemaranha.png" class="flex-container" alt="sony"/><p class="texto">SONY</p></a>
    
  </section>
 </div>
 <hr class="my-5" />

 <!--Main layout-->
 <main class="mt-4 mb-5">
    <div class="container">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-md-8 mb-4">
          <!--Section: Post data-mdb-->
          <section class="border-bottom mb-4">

          <div class="bg-image hover-zoom">
          <img src="img/ordemCron/marvelordem.jpeg"
              class="img-fluid shadow-2-strong rounded-5 mb-4" alt="" />
          </div>

            <div class="row align-items-center mb-4">
              <div class="col-lg-6 text-center text-lg-start mb-3 m-lg-0">
                <img src="img/equipe/deyvsonfotos.png" class="rounded-5 shadow-1-strong me-2" style="border-radius: 50%; width: 40px; height: 40px;"
                  height="45" alt="" loading="" />
                <span> Publicado em: <?= date("d/M/Y",);?>,  Por:</span>
                <a href="#" class="text">Deyvson Carlos</a>
              </div>

              <div class="col-lg-6 text-center text-lg-end">
                <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #3b5998;">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #55acee;">
                  <i class="fab fa-twitter"></i>
                </button>
                <button type="button" class="btn btn-primary px-3 me-1" style="background-color: #0082ca;">
                  <i class="fab fa-linkedin"></i>
                </button>
                <button type="button" class="btn btn-primary px-3 me-1">
                  <i class="fas fa-comments"></i>
                </button>
              </div>
            </div>
          </section>
          <!--Section: Post data-mdb-->

          <!-- saga do infinito -->
  <a data-mdb-toggle="modal" data-mdb-target="#btn-modal-marvel" style="cursor: pointer;"><h2 class="color-modal"><b>Saga do Infinito</b></h2></a>

  <!-- modal -->
          <div class="modal" tabindex="-1" id="btn-modal-marvel">
  <div class="modal-dialog">
    <div class="modal-content">
    <img src="img/ordemCron/thanos.jpg" style="max-width: 100%;" />
      <div class="modal-header">      
        <h5 class="modal-title">Saga do Infinito</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>A Saga do Infinito foi uma saga de filmes que constituiu dos primeiros vinte e três filmes do Universo Cinematográfico Marvel, englobando a Fase Um, Fase Dois e Fase Três. A saga se iniciou em Homem de Ferro e encerrou-se em Vingadores: Ultimato. O tema principal da saga é centrado nas Joias do Infinito e a guerra contra Thanos.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- ====================== -->

      <p><li><b>TERRA - 616</b></li></p>

                <p><li> 01. Capitão América: O primeiro Vingador (2011) </li></p>
                <p><li>02. Agente Carter: 1ª Temporada   "Série"  (2015)</li></p>
                <p><li>03. Agente Carter: 2ª Temporada   "Série"  (2016)</li></p>
                <p><li>04. Agente Carter: OneShot (2013)</li></p>
                <p><li>05. Capitã Marvel (2019)</li></p>
                <p><li>06. Homem de Ferro (2008)</li></p>
                <p><li>07. Homem de Ferro 2 (2010)</li></p>
                <p><li>08. O incrível Hulk (2008)</li></p>
                <p><li>09. O incrível Hulk: OneShot (2008)</li></p>
                <p><li>10. Uma coisa engraçada aconteceu no caminho para o martelo de Thor: OneShot (2011)</li></p>
                <p><li>11. Thor (2011)</li></p>
                <p><li>12. Cena Pós Créditos: Capitão América: O primeiro Vingador (2011)</li></p>
                <p><li>13. O consultor: OneShot (2011)</li></p>
                <p><li>14. Os Vingadores (2012)</li></p>
                <p><li>15. Item 47: OneShot (2012)</li></p>
                <p><li>16. Homem de Ferro 3 (2013)</li></p>
                <p><li>17. Todos Saúdam o rei: OneShot (2014)</li></p>
                <p><li>18. Agents of S.H.I.E.L.D: 1ª Temporada (Ep. 1 ao 7)  "Série"  (2013)</li></p>
                <p><li>19. Thor: O Mundo Sombrio (2013)</li></p>
                <p><li>20. Agents of S.H.I.E.L.D: 1ª Temporada (Ep. 8 ao 16)  "Série"  (2013)</li></p>
                <p><li>21. Demolidor: 1ª Temporada (Ep. 1 ao 5) "Série" (2015)</li></p>
                <p><li>22. Capitão America: O Soldado Invernal (2014)</li></p>
                <p><li>23. Agents of S.H.I.E.L.D: 1ª Temporada (Ep. 17 a 22)  "Série"  (2013)</li></p>
                <p><li>24. Demolidor: 2ª Temporada (Ep. 6 ao 10) "Série" (2015)</li></p>
                <p><li>25. Agents of S.H.I.E.L.D: 2ª Temporada (Ep. 1 ao 11)  "Série"  (2014)</li></p>
                <p><li>26. Jessica Jones: 1ª Temporada "Série" (2015)</li></p>
                <p><li>27. Agents of S.H.I.E.L.D: 2ª Temporada (Ep. 12 ao 19)  "Série"  (2014)</li></p>
                <p><li>28. Vingadores: Era de Ultron (2015)</li></p>
                <p><li>29. Agents of S.H.I.E.L.D: 2ª Temporada (Ep. 20 ao 22)  "Série"  (2014)</li></p>
                <p><li>30. Homem Formiga (2015)</li></p>
                <p><li>31. Agents of S.H.I.E.L.D: 3ª Temporada (Ep. 1 ao 13)  "Série"  (2016)</li></p>
                <p><li>32. Guardiões da Galáxia (2014)</li></p>
                <p><li>33. Guardiões da Galáxia v2 (2017)</li></p>
                <p><li>34. Agents of S.H.I.E.L.D: 3ª Temporada (Ep. 14 ao 19)  "Série"  (2016)</li></p>
                <p><li>35. Capitão América: Guerra Civil (2016)</li></p>
                <p><li>36. Agents of S.H.I.E.L.D: 3ª Temporada (Ep.20)  "Série"  (2016)</li></p>
                <p><li>37. Pantera Negra (2018)</li></p>
                <p><li>38. Agents of S.H.I.E.L.D: 3ª Temporada (Ep. 21 ao 22)  "Série"  (2016)</li></p>
                <p><li>39. Homem Aranha: De volta ao lar (2017)</li></p>
                <p><li>40. Viuva Negra (2020)</li></p>
                <p><li>41. Demolidor: 2ª Temporada "Série"  (2016)</li></p>
                <p><li>42. Agents of S.H.I.E.L.D: OneShot - Slingshot (2016)</li></p>
                <p><li>43. Luke Cage: 1ª Temporada "Série"  (2016)</li></p>
                <p><li>44. Agents of S.H.I.E.L.D: 4ª Temporada (Ep. 1 ao 6)  "Série"  (2016)</li></p>
                <p><li>45. Doutor Estranho (2016)</li></p>
                <p><li>46. Agents of S.H.I.E.L.D: 4ª Temporada (Ep. 7 ao 8)  "Série"  (2016)</li></p>
                <p><li>47. Punho de Ferro: 1ª Temporada "Série"  (2017)</li></p>
                <p><li>48. Agents of S.H.I.E.L.D: 4ª Temporada (Ep. 9 ao 22)  "Série"  (2016)</li></p>
                <p><li>49. Agents of S.H.I.E.L.D: 5ª Temporada (Ep. 1 ao 5)  "Série"  (2017)</li></p>
                <p><li>50. Os Defensores "Série"  (2017)</li></p>
                <p><li>51. Os Fugitivos: 1ª Temporada   "Série"  (2017)</li></p>
                <p><li>52. Os Fugitivos: 2ª Temporada   "Série"  (2018)</li></p>
                <p><li>53. Os Fugitivos: 3ª Temporada  (Ep. 1 ao 5) "Série"  (2019)</li></p>
                <p><li>54. O Justiceiro:: 1ª Temporada   "Série"  (2017)</li></p>
                <p><li>55. Agents of S.H.I.E.L.D: 5ª Temporada (Ep. 6 ao 10)  "Série"  (2017)</li></p>
                <p><li>56. Jéssica Jones: 2ª Temporada   "Série"  (2018)</li></p>
                <p><li>57. Manto e Adaga: 1ª Temporada   "Série"  (2018)</li></p>
                <p><li>58. Homem-Formiga e a Vespa (2018)</li></p>
                <p><li>59. Luke Cage: 2ª Temporada   "Série"  (2018)</li></p>
                <p><li>60. Punho de Ferro: 2ª Temporada "Série"  (2018)</li></p>
                <p><li>61. Demolidor: 3ª Temporada   "Série"  (2018)</li></p>
                <p><li>62. O Justiceiro:: 2ª Temporada   "Série"  (2019)</li></p>
                <p><li>63. Manto e Adaga: 2ª Temporada   "Série"  (2019)</li></p>
                <p><li>64. Jéssica Jones: 3ª Temporada   "Série"  (2019)</li></p>
                <p><li>65. Agents of S.H.I.E.L.D: 5ª Temporada (Ep. 11 ao 18)  "Série"  (2017)</li></p>
                <p><li>66. Os Fugitivos: 3ª Temporada  (Ep. 6 ao 10) "Série"  (2019)</li></p>
                <p><li>67. Cena pós-créditos: Guardiões da Galáxia v2: Groot</li></p>
                <p><li>68. Thor: Ragnarok (2017)</li></p>
                <p><li>69. Agents of S.H.I.E.L.D: 5ª Temporada (Ep. 19 ao 22)  "Série"  (2017)</li></p>
                <p><li>70. Os Vingadores: Guerra Infinita (2018)</li></p>
                <p><li>71. Cena pós-créditos: Homem-Formiga e a Vespa</li></p>
                <p><li>72. Cena pós-créditos: Capitã Marvel</li></p><br>

                <p><li><b>VIAGEM ATRAVÉS DO MULTIVERSO: TERRA - 50000</b></li></p>
                <p><li>73. Agents of S.H.I.E.L.D: 6ª Temporada   "Série"  (2019)</li></p>
                <p><li>74. Agents of S.H.I.E.L.D: 7ª Temporada  "Série"  (2020)</li></p><br>

                <p><li><b>TERRA - 616</b></li></p>
                <p><li>75. Os Vingadores: Ultimato (2019)</li></p>

                <hr class="my-5" />

                <!-- saga guerras secretas -->
<a data-mdb-toggle="modal" data-mdb-target="#btn-modal-marvelInva" style="cursor: pointer;"><h2 class="color-modal"><h2 class="color-modal"><b>Saga: Do Multiverso</b></h2></a>

        <!-- modal -->
        <div class="modal" tabindex="-1" id="btn-modal-marvelInva">
          <div class="modal-dialog">
            <div class="modal-content">
            <img src="img/ordemCron/sagamultiverso.jpg" style="max-width: 100%;" />
              <div class="modal-header">      
                <h5 class="modal-title">Saga: DO Multiverso</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>A Saga do Multiverso está sendo contruida, englobando as Fases Quatro, Cinco e Seis. A saga se iniciou em Os Eternos e no momento ainda está sendo trabalhada. O tema principal da saga é centrado no multiverso sendo conquistado por Kang e os Skrulls.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- ====================== -->

                    <p><li>76. Os Eternos (2021)</li></p>
                    <p><li>77. Wanda e Visão: 1ª Temporada "Série"  (2021)</li></p>
                    <p><li>78. Falcão e o Soldado Invernal: 1ª Temporada "Série"  (2021)</li></p>
                    <p><li>79. Shang-chi: E a lenda dos dez anéis (2021)</li></p>
                    <p><li>80. OneShot: Homem-Aranha: Longe de casa (2019)</li></p>
                    <p><li>81. Loki: 1ª Temporada "Série"  (2021)</li></p><br>

                    <p><li><b>MULTIVERSO: TERRA - 4</b></li></p>

                    <p><li>82. Homem-Aranha (2002)</li></p>
                    <p><li>83. Homem-Aranha 2 (2004)</li></p>
                    <p><li>84. Homem-Aranha 3 (2007)</li></p><br>

                    <p><li><b>MULTIVERSO: TERRA - 148611</b></li></p>

                    <p><li>85. O Espetacular Homem-Aranha (2012)</li></p>
                    <p><li>86. O Espetacular Homem-Aranha 2 (2014)</li></p><br>

                    <p><li><b>MULTIVERSO: TERRA - Aranha-Verso</b></li></p>

                    <p><li>87. Venom (2018)</li></p>
                    <p><li>88. Venom: tempo de Carnificina (2021)</li></p>
                    <p><li>89. Morbius (2022)</li></p><br>

                    <br><p><li> <b>TERRA - 616</b></li></p>

                    <p><li>90. Homem-Aranha: Longe de casa (2019)</li></p>
                    <p><li>91. OneShot: J.K Simmons</li></p>
                    <p><li>92. Cena pós créditos: Viuva Negra  (2021)</li></p>
                    <p><li>93. Homem-Aranha: Sem Caminho Para Casa (2021)</li></p>
                    <p><li>94. Cena-pós créditos: Venom: Tempo de Carnificina </li></p>
                    <p><li>95. Gavião Arqueiro: 1ª Temporada  "Série"  (2021)</li></p>
                    <p><li>96. Doutor Estranho: E o multiverso da loucura (2022)</li></p>
                    <p><li>97. Cavaleiro da Lua: 1ª Temporada "Série"  (2022)</li></p>
                    <p><li>98. Thor: Amor e trovão (2022)</li></p>
                    <p><li>99. I'm Groot:  1ª Temporada  "Série" (2022)</li></p>
                    <p><li>100. She-Hulk: 1ª Temporada "Série"  (2022)</li></p> 
                    <p><li>101. Ms. Marvel: 1ª Temporada "Série"  (2022)</li></p> 
                    <p><li>102. Invasão Secreta: 1ª Temporada "Série"  (2022)</li></p>
                    <p><li>103. The Marvels (2023)</li></p>
                    <p><li>104. Guardiões da Galáxia v3 (2023)</li></p>
                    <p><li>105. Loki: 2ª Temporada "Série"  (2023)</li></p>
                    <p><li>106. Pantera-Negra: Wakanda pra sempre (2022)</li></p>
                    <p><li>107. Coração de Ferro: 1ª Temporada "Série" (2023)</li></p>
                    <p><li>108. Homem-Formiga e a Vespa: Quantumania (2023)</li></p>
                    <p><li>109. Echo: 1ª Temporada "Série" (2023)</li></p>
                    <p><li>110. Agatha: Coven do caos 1ª Temporada "Série"  (2023)</li></p>
                    <p><li>111. Blade (2023)</li></p>
                    <p><li>112. Guardiões da Galáxia: Especial de Natal: 1ª Temporada "Série" (2023)</li></p>
                    <p><li>113. Demolidor: Renascimneto 4ª Temporada "Série" (2024)</li></p>
                    <p><li>114. Homem Aranha 4 (2024)</li></p>
                    <p><li>115. Capitão América: Nova ordem Mundial (2024)</li></p>
                    <p><li>116. Thunderbolts (2024)</li></p>
                    <p><li>117. Quarteto-Fantastico (2024)</li></p>
                    <p><li>118. Vingadores: Dinastia Kang (2025)</li></p>
                    <p><li>119. Vingadores: Guerras Secretas (2025)</li></p>

                    <hr class="my-5" />

        <!-- saga MCU -->
        <a data-mdb-toggle="modal" data-mdb-target="#btn-modal-marvelmcu" style="cursor: pointer;"><h2 class="color-modal"><h2 class="color-modal"><b>Saga</b></h2></a>

        <!-- modal -->
        <div class="modal" tabindex="-1" id="btn-modal-marvelmcu">
          <div class="modal-dialog">
            <div class="modal-content">
            <img src="img/ordemCron/saga03.jpeg" style="max-width: 100%;" />
              <div class="modal-header">      
                <h5 class="modal-title">Saga</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Próxima saga deve começar só em 2026. com a entrada dos X-Men, e Deadpool.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- ====================== -->

                <p><li>120. Lobisomem:  1ª Temporada "Série" (2022)</li></p>
                <p><li>121. Armor Wars: 1ª Temporada "Série" (2024)</li></p>
                <p><li>122. Deadpool (2024)</li></p>
                <p><li>123. Os Mutantes (2025)</li></p>
                <p><li>124. Wakanda: 1ª Temporada "Série" (2024)</li></p>
                <p><li>125. Shang-chi: 2 (2024)</li></p>
                <p><li>126. Magnum: 1ª Temporada "Série" (2025)</li></p>
                <p><li>127. Os Eternos: 2 (2025)</li></p>            
                    
        </div>
  <!-- ========================================== -->

        <!--Grid column-->
        <div class="col-md-4 mb-4">
          <!--Section: Sidebar-->
          <section class="sticky-top" style="top: 80px;">
            <!--Section: Ad-->
            <section class="text-center border-bottom pb-4 mb-4">
              <div class="bg-image hover-overlay ripple mb-4">
                <img
                  src="img/teorias/whatsapp-image-2017-11-29-at-17.31.43.jpeg"
                  class="img-fluid" />
                <a href="https://mdbootstrap.com/docs/standard/" target="_blank">
                  <div class="mask" style="background-color: rgba(57, 192, 237, 0.2);"></div>
                </a>
              </div>
              <h5>Descubra a ordem cronológica da Marvel</h5>

              <p>
              Quer maratonar os filmes do Universo Cinematográfico da Marvel inteirinho, mas em ordem cronológica?
              então não perca tempo e baixe já!
              </p>
              <a role="button" class="btn btn-primary" href="https://mdbootstrap.com/docs/standard/"
                target="_blank">Download for free<i class="fas fa-download ms-2"></i></a>
            </section>
            <!--Section: Ad-->

            <!--Section: Video-->
            <section class="text-center">
              <h5 class="mb-4">Video</h5>

              <div class="embed-responsive embed-responsive-16by9 shadow-4-strong">
                <iframe class="embed-responsive-item rounded-5" src="https://www.youtube.com/embed/c9B4TPnak1A"
                  allowfullscreen></iframe>
              </div>
            </section>
            <!--Section: Video-->
          </section>
          <!--Section: Sidebar-->
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
  </main>
  <!--Main layout-->

  <hr class="my-5" />
  <!--Footer-->
  <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
     © <?= date('Y'); ?>
    <a class="text-white" href="#">Deyvson Carlos</a>
  </div>
  <!-- Copyright -->
</footer>
  <!--Footer-->


  </section>
    </section>
    </div>

    </body>
    </html>