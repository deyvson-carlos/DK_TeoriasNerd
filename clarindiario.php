
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="sortcut icon" href="./img/logo/eu001.png" type="image/x-icon"/>

  
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="css/global.css">
  <link rel="stylesheet" href="css/clarindiario.css">
  
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

    <title>Teorias Nerd</title>

</head>
<body>

<!--alert -->
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>ATENÇÃO!</strong> ESSA PÁGINA CONTÉM SPOILER. <a href="index.php" class="btn btn-primary">VOLTAR</a>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<!-- fim de alert -->
    
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
      background-image: url('img/clarindiario/the-daily-bugle-tt-mobile.png');
      height: 400px;
    "
  ></div>
  <!-- Background image -->
</header>

 <!-- fim de Navbar -->
      
            <hr class="my-5" />

<!--Main layout-->
<main class="my-5">
  <div class="container">
    <!--Section: News of the day-->
    <section class="border-bottom pb-4 mb-5">
      <div class="row gx-5">
        <div class="col-md-6 mb-4">
          <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
          
          <video class="img-fluid" controls="controls" poster="">
      <source src="img/clarindiario/video/Spider-Man Far From Home J. Jonah Jameson (J.K. Simmons) Extended Daily Bugle Scene.mp4"
      type="video/mp4"/></video>
            
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span>
          <h4><strong>Facilis consequatur eligendi</strong></h4>
          <p class="text-muted">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
            eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
            sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
          </p>
          <button type="button" class="btn btn-primary">Read more</button>
        </div>
      </div>
    </section>
    <!--Section: News of the day-->

    <!--Section: Content-->
    <section>

    <div class="text-center">
       <h4><strong>Mais Lidas</strong></h4>
    </div><br>

      <div class="row gx-lg-5">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <!-- News block -->
          <div>
            <!-- Featured image -->
            <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4" data-mdb-ripple-color="light">
              <img src="img/clarindiario/man.jpg" class="img-fluid"  style="width: 100%;"/>
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>

            <!-- Article data -->
            <div class="row mb-3">
              <div class="col-6">
                <a href="" class="text-info">
                  <i class="fas fa-plane"></i>
                  Travels
                </a>
              </div>

              <div class="col-6 text-end">
                <u> 15.07.2020</u>
              </div>
            </div>

            <!-- Article title and description -->
            <a href="" class="text-dark">
              <h5>This is title of the news</h5>

              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                adipisci iusto nam temporibus modi animi laboriosam?
              </p>
            </a>

            <hr />

            <!-- News -->
            <a href="" class="text-dark">
              <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                  <img src="img/clarindiario/news/tremor.jpg"
                       class="img-fluid shadow-1-strong rounded" alt="" />
                </div>

                <div class="col-9">
                  <p class="mb-2"><strong>Ainda oferece risco?</strong></p>
                  <p>
                    <u> 15.07.2020</u>
                  </p>
                </div>
              </div>
            </a>

            <!-- News -->
            <a href="" class="text-dark">
              <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                  <img src="img/clarindiario/news/blip.jpg"
                       class="img-fluid shadow-1-strong rounded" alt="" />
                </div>

                <div class="col-9">
                  <p class="mb-2"><strong>Blip: voltando ao "normal"</strong></p>
                  <p>
                    <u> 15.07.2020</u>
                  </p>
                </div>
              </div>
            </a>

            <!-- News -->
            <a href="" class="text-dark">
              <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                  <img src="img/clarindiario/news/fugitivos.jpg"
                       class="img-fluid shadow-1-strong rounded" alt="" />
                </div>

                <div class="col-9">
                  <p class="mb-2"><strong>Os Fugitivos</strong></p>
                  <p>
                    <u> 15.07.2020</u>
                  </p>
                </div>
              </div>
            </a>

            <!-- News -->
            <a href="" class="text-dark">
              <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                  <img src="img/clarindiario/news/falcao-e-o-soldado-invernal-primeiras-impressoes-capa.jpg"
                       class="img-fluid shadow-1-strong rounded" alt="" />
                </div>

                <div class="col-9">
                  <p class="mb-2"><strong>O que esperar do novo Capitão</strong></p>
                  <p>
                    <u> 15.07.2020</u>
                  </p>
                </div>
              </div>
            </a>
          </div>
          <!-- News block -->
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <!-- News block -->
          <div>
            <!-- Featured image -->
            <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4" data-mdb-ripple-color="light">
              <img src="img/clarindiario/morris.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>

            <!-- Article data -->
            <div class="row mb-3">
              <div class="col-6">
                <a href="" class="text-danger">
                  <i class="fas fa-chart-pie"></i>
                  Business
                </a>
              </div>

              <div class="col-6 text-end">
                <u> 15.07.2020</u>
              </div>
            </div>

            <!-- Article title and description -->
            <a href="" class="text-dark">
              <h5>This is title of the news</h5>

              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                adipisci iusto nam temporibus modi animi laboriosam?
              </p>
            </a>

            <hr />

            <!-- News -->
            <a href="" class="text-dark">
              <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                  <img src="img/clarindiario/news/controlededanos.jpg"
                       class="img-fluid shadow-1-strong rounded" alt="" />
                </div>

                <div class="col-9">
                  <p class="mb-2"><strong>Controle de Danos</strong></p>
                  <p>
                    <u> 15.07.2020</u>
                  </p>
                </div>
              </div>
            </a>

            <!-- News -->
            <a href="" class="text-dark">
              <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                  <img src="img/clarindiario/news/mysterio.jpg"
                       class="img-fluid shadow-1-strong rounded" alt="" />
                </div>

                <div class="col-9">
                  <p class="mb-2"><strong>Seis meses sem o herói!</strong></p>
                  <p>
                    <u> 15.07.2020</u>
                  </p>
                </div>
              </div>
            </a>

            <!-- News -->
            <a href="" class="text-dark">
              <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                  <img src="img/clarindiario/news/newyork.jpg"
                       class="img-fluid shadow-1-strong rounded" alt="" />
                </div>

                <div class="col-9">
                  <p class="mb-2"><strong>NY: Vive dias melhores</strong></p>
                  <p>
                    <u> 15.07.2020</u>
                  </p>
                </div>
              </div>
            </a>

            <!-- News -->
            <a href="" class="text-dark">
              <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                  <img src="img/clarindiario/news/policia.jpg"
                       class="img-fluid shadow-1-strong rounded" alt="" />
                </div>

                <div class="col-9">
                  <p class="mb-2"><strong>Policia faz ronda em Hell's Kitchen</strong></p>
                  <p>
                    <u> 15.07.2020</u>
                  </p>
                </div>
              </div>
            </a>
          </div>
          <!-- News block -->
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <!-- News block -->
          <div>
            <!-- Featured image -->
            <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4" data-mdb-ripple-color="light">
              <img src="img/clarindiario/article_6.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>

            <!-- Article data -->
            <div class="row mb-3">
              <div class="col-6">
                <a href="" class="text-warning">
                  <i class="fas fa-code"></i>
                  Technology
                </a>
              </div>

              <div class="col-6 text-end">
                <u> 15.07.2020</u>
              </div>
            </div>

            <!-- Article title and description -->
            <a href="" class="text-dark">
              <h5>This is title of the news</h5>

              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                adipisci iusto nam temporibus modi animi laboriosam?
              </p>
            </a>

            <hr />

            <!-- News -->
            <a href="" class="text-dark">
              <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                  <img src="img/clarindiario/news/Rogers-the-musical.jpg"
                       class="img-fluid shadow-1-strong rounded" alt="" />
                </div>

                <div class="col-9">
                  <p class="mb-2"><strong>Musical em cartas</strong></p>
                  <p>
                    <u> 15.07.2020</u>
                  </p>
                </div>
              </div>
            </a>

            <!-- News -->
            <a href="" class="text-dark">
              <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                  <img src="img/clarindiario/news/justiceiro.jpg"
                       class="img-fluid shadow-1-strong rounded" alt="" />
                </div>

                <div class="col-9">
                  <p class="mb-2"><strong>Procura-se!</strong></p>
                  <p>
                    <u> 15.07.2020</u>
                  </p>
                </div>
              </div>
            </a>

            <!-- News -->
            <a href="" class="text-dark">
              <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                  <img src="img/clarindiario/news/foggynelson.jpg"
                       class="img-fluid shadow-1-strong rounded" alt="" />
                </div>

                <div class="col-9">
                  <p class="mb-2"><strong>Advocacia: Foggy Nelson</strong></p>
                  <p>
                    <u> 15.07.2020</u>
                  </p>
                </div>
              </div>
            </a>

            <!-- News -->
            <a href="" class="text-dark">
              <div class="row mb-4 border-bottom pb-2">
                <div class="col-3">
                  <img src="img/clarindiario/news/torre.jpg"
                       class="img-fluid shadow-1-strong rounded" alt="" />
                </div>

                <div class="col-9">
                  <p class="mb-2"><strong>O que estão construindo?</strong></p>
                  <p>
                    <u> 15.07.2020</u>
                  </p>
                </div>
              </div>
            </a>
          </div>
          <!-- News block -->
        </div>
      </div>
    </section>
    <!--Section: Content-->


  <!--Main layout-->
  <main class="my-5">
    <div class="container">
      <!--Section: Content-->
      <section class="text-center text-md-start">
        <h4 class="mb-5"><strong>Últimas postagens</strong></h4>

        <!-- Post -->
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
              <img src="img/clarindiario/noticias/spider-man-no-way-home-daily-bugle-j-jonah-jameson.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-8 mb-4">
            <h5>Very long post title</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione
              necessitatibus itaque error alias repellendus nemo reiciendis aperiam quisquam minus
              ipsam reprehenderit commodi ducimus, in dicta aliquam eveniet dignissimos magni.
            </p>

            <button type="button" class="btn btn-primary">Read</button>
          </div>
        </div>

        <!-- Post -->
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
              <img src="img/clarindiario/noticias/ms.marvel_roteirista_explica_visual_singular_de_kamala_khan_na_serie.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-8 mb-4">
            <h5>Very long post title</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione
              necessitatibus itaque error alias repellendus nemo reiciendis aperiam quisquam minus
              ipsam reprehenderit commodi ducimus, in dicta aliquam eveniet dignissimos magni.
            </p>

            <button type="button" class="btn btn-primary">Read</button>
          </div>
        </div>

        <!-- Post -->
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
              <img src="img/clarindiario/noticias/She-Hulk.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-8 mb-4">
            <h5>Very long post title</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione
              necessitatibus itaque error alias repellendus nemo reiciendis aperiam quisquam minus
              ipsam reprehenderit commodi ducimus, in dicta aliquam eveniet dignissimos magni.
            </p>

            <button type="button" class="btn btn-primary">Read</button>
          </div>
        </div>

        <!-- Post -->
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
              <img src="img/clarindiario/noticias/cavaleiro_da_lua_3u863wS_widelg.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-8 mb-4">
            <h5>Very long post title</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione
              necessitatibus itaque error alias repellendus nemo reiciendis aperiam quisquam minus
              ipsam reprehenderit commodi ducimus, in dicta aliquam eveniet dignissimos magni.
            </p>

            <button type="button" class="btn btn-primary">Read</button>
          </div>
        </div>
      </section>
      <!--Section: Content-->

       <!-- Post -->
       <div class="row">
          <div class="col-md-4 mb-4">
            <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
              <img src="img/clarindiario/noticias/2164599776.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-8 mb-4">
            <h5>Very long post title</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione
              necessitatibus itaque error alias repellendus nemo reiciendis aperiam quisquam minus
              ipsam reprehenderit commodi ducimus, in dicta aliquam eveniet dignissimos magni.
            </p>

            <button type="button" class="btn btn-primary">Read</button>
          </div>
        </div>
      </section>

    </div>
  </main>
  <!--Main layout-->

    <hr class="my-5" />

   
<!--Main layout-->
<main class="my-5">
    <div class="container">
      <!--Section: Content-->
      <section class="text-center text-md-start">
        <h4 class="mb-5"><strong>Blog</strong></h4>

        <!-- Post -->
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
              <img src="img/clarindiario/blog/blog.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-8 mb-4">
            <h5>Very long post title</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione
              necessitatibus itaque error alias repellendus nemo reiciendis aperiam quisquam minus
              ipsam reprehenderit commodi ducimus, in dicta aliquam eveniet dignissimos magni.
            </p>

            <button type="button" class="btn btn-primary">Read</button>
          </div>
        </div>

        <!-- Post -->
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
              <img src="img/clarindiario/blog/blog2.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-8 mb-4">
            <h5>Very long post title</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ratione
              necessitatibus itaque error alias repellendus nemo reiciendis aperiam quisquam minus
              ipsam reprehenderit commodi ducimus, in dicta aliquam eveniet dignissimos magni.
            </p>

            <button type="button" class="btn btn-primary">Read</button>
          </div>
        </div>

        
      </section>
      <!--Section: Content-->

    </div>
  </main>
  <!--Main layout-->

 <hr class="my-5" />
    <!-- Pagination -->
    <nav class="my-4" aria-label="...">
      <ul class="pagination pagination-circle justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</main>
<!--Main layout-->
</section>
        </section>
    </div>

<!--Footer-->
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>
<script type="text/javascript" src="js/global.js"></script> 
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>