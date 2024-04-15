<?php
include 'assets/php/db.php';
  if ($_COOKIE['user'] == '') :
  ?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <script src="assets/js/color-modes.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font "Roboto" -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>NovelNook</title>
  <link rel="shortcut icon" href="assets/icons/favicon_white.ico">
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check2" viewBox="0 0 16 16">
      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>



    <div class="wrapper">
      <!-- Шапка -->
      <header id="header" class="container ">
        <nav class="navbar fixed-top navbar-expand-lg bg-body">
          <div class="container">
            <a class="navbar-brand" href="#">
              <img src="assets/img/Logo.png" alt="NovelNook" width="40" height="34">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/сatalog.php">Каталог</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/tops.php">Топы</a>
                </li>

                <!-- Modal -->
                <li class="nav-item">
                  <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <i class="fa-solid fa-magnifying-glass"></i> Поиск
                  </a>
                  <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-body d-flex">
                          <input type="text" class="form-control me-2" placeholder="Что ищем?">
                          <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        <div class="modal-footer">
                          <!-- История -->
                        </div>
                      </div>
                </li>
              </ul>
              <ul id="header-right" class="navbar-nav">
                <li class="nav-item">
                  <div class="dropdown bd-mode-toggle">
                    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                      <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                        <use href="#circle-half"></use>
                      </svg>
                      <span class="visually-hidden" id="bd-theme-text">Переключить тему</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
                      <li class="theme">
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                            <use href="#sun-fill"></use>
                          </svg>
                          Светлая
                          <svg class="bi ms-auto d-none" width="1em" height="1em">
                            <use href="#check2"></use>
                          </svg>
                        </button>
                      </li>
                      <li class="theme">
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                            <use href="#moon-stars-fill"></use>
                          </svg>
                          Темная
                          <svg class="bi ms-auto d-none" width="1em" height="1em">
                            <use href="#check2"></use>
                          </svg>
                        </button>
                      </li>
                      <li class="theme">
                        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                            <use href="#circle-half"></use>
                          </svg>
                          Автоматичесски
                          <svg class="bi ms-auto d-none" width="1em" height="1em">
                            <use href="#check2"></use>
                          </svg>
                        </button>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a href="/sign-in.html" role="button"><button class="btn btn-primary">Войти</button></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </header>
      <!-- /Шапка -->

      <div class="back-to-top">
        <button class="back-to-top-button" onclick="scrollToTop()">
          <span class="back-to-top-arrow">&#8593;</span>
          В начало
        </button>
      </div>

      <!-- Main -->
      <div style="height: 2px;"></div>
      <div class="main">



        <!-- Рекомендации -->
        <div class="recommendations container-fluid">

        </div>
        <!-- /Новое -->
        <div style=" height: 35px;"></div>

        <!-- 3 блока в ряд -->
        <div class="container">
          <div class="row">
            <!-- Новый сезон -->
            <div class="new-season col">
              <div id="new" class="Headings ">
                <h5>Новый сезон</h5>

                <div class=" title-card row g-0">
                  <div class="col-md-4">
                    <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                  </div>
                  <div class="card-text col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Имя</h5>
                      <div style="height: 10px;"></div>
                      <p class="card-addtext">Год</p>
                    </div>
                  </div>
                </div>
                <div class=" title-card row g-0">
                  <div class="col-md-4">
                    <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                  </div>
                  <div class="card-text col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Имя</h5>
                      <div style="height: 10px;"></div>
                      <p class="card-addtext">Год</p>
                    </div>
                  </div>
                </div>
                <div class=" title-card row g-0">
                  <div class="col-md-4">
                    <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                  </div>
                  <div class="card-text col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Имя</h5>
                      <div style="height: 10px;"></div>
                      <p class="card-addtext">Год</p>
                    </div>
                  </div>
                </div>
                <div class=" title-card row g-0">
                  <div class="col-md-4">
                    <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                  </div>
                  <div class="card-text col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Имя</h5>
                      <div style="height: 10px;"></div>
                      <p class="card-addtext">Год</p>
                    </div>
                  </div>
                </div>
                <div class=" title-card row g-0">
                  <div class="col-md-4">
                    <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                  </div>
                  <div class="card-text col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Имя</h5>
                      <div style="height: 10px;"></div>
                      <p class="card-addtext">Год</p>
                    </div>
                  </div>
                </div>
                <div class=" title-card row g-0">
                  <div class="col-md-4">
                    <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                  </div>
                  <div class="card-text col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Имя</h5>
                      <div style="height: 10px;"></div>
                      <p class="card-addtext">Год</p>
                    </div>
                  </div>
                </div>
                <div class=" title-card row g-0">
                  <div class="col-md-4">
                    <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                  </div>
                  <div class="card-text col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Имя</h5>
                      <div style="height: 10px;"></div>
                      <p class="card-addtext">Год</p>
                    </div>
                  </div>
                </div>




              </div>
            </div>
            <!-- /Новый сезон -->


            <div class="popular col">
              <div id="new" class="Headings container">
                <!-- Популярно -->
                <div class="new-season col">
                  <div id="new" class="Headings ">
                    <h5>Популярно</h5>

                    <div class=" title-card row g-0">
                      <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                      </div>
                      <div class="card-text col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Имя</h5>
                          <div style="height: 10px;"></div>
                          <p class="card-addtext">Год</p>
                        </div>
                      </div>
                    </div>
                    <div class=" title-card row g-0">
                      <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                      </div>
                      <div class="card-text col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Имя</h5>
                          <div style="height: 10px;"></div>
                          <p class="card-addtext">Год</p>
                        </div>
                      </div>
                    </div>
                    <div class=" title-card row g-0">
                      <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                      </div>
                      <div class="card-text col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Имя</h5>
                          <div style="height: 10px;"></div>
                          <p class="card-addtext">Год</p>
                        </div>
                      </div>
                    </div>
                    <div class=" title-card row g-0">
                      <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                      </div>
                      <div class="card-text col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Имя</h5>
                          <div style="height: 10px;"></div>
                          <p class="card-addtext">Год</p>
                        </div>
                      </div>
                    </div>
                    <div class=" title-card row g-0">
                      <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                      </div>
                      <div class="card-text col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Имя</h5>
                          <div style="height: 10px;"></div>
                          <p class="card-addtext">Год</p>
                        </div>
                      </div>
                    </div>
                    <div class=" title-card row g-0">
                      <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                      </div>
                      <div class="card-text col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Имя</h5>
                          <div style="height: 10px;"></div>
                          <p class="card-addtext">Год</p>
                        </div>
                      </div>
                    </div>
                    <div class=" title-card row g-0">
                      <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                      </div>
                      <div class="card-text col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Имя</h5>
                          <div style="height: 10px;"></div>
                          <p class="card-addtext">Год</p>
                        </div>
                      </div>
                    </div>




                  </div>
                </div>
                <!-- /Популярно -->
              </div>
            </div>


            <div class="popular-today col">
              <div id="new" class="Headings container">
                <!-- Популярно сегодня -->
                <div class="new-season col">
                  <div id="new" class="Headings ">
                    <h5>Популярно сегодня</h5>

                    <div class=" title-card row g-0">
                      <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                      </div>
                      <div class="card-text col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Имя</h5>
                          <div style="height: 10px;"></div>
                          <p class="card-addtext">Год</p>
                        </div>
                      </div>
                    </div>
                    <div class=" title-card row g-0">
                      <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                      </div>
                      <div class="card-text col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Имя</h5>
                          <div style="height: 10px;"></div>
                          <p class="card-addtext">Год</p>
                        </div>
                      </div>
                    </div>
                    <div class=" title-card row g-0">
                      <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                      </div>
                      <div class="card-text col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Имя</h5>
                          <div style="height: 10px;"></div>
                          <p class="card-addtext">Год</p>
                        </div>
                      </div>
                    </div>
                    <div class=" title-card row g-0">
                      <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                      </div>
                      <div class="card-text col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Имя</h5>
                          <div style="height: 10px;"></div>
                          <p class="card-addtext">Год</p>
                        </div>
                      </div>
                    </div>
                    <div class=" title-card row g-0">
                      <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                      </div>
                      <div class="card-text col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Имя</h5>
                          <div style="height: 10px;"></div>
                          <p class="card-addtext">Год</p>
                        </div>
                      </div>
                    </div>
                    <div class=" title-card row g-0">
                      <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                      </div>
                      <div class="card-text col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Имя</h5>
                          <div style="height: 10px;"></div>
                          <p class="card-addtext">Год</p>
                        </div>
                      </div>
                    </div>
                    <div class=" title-card row g-0">
                      <div class="col-md-4">
                        <img class="bd-placeholder-img" width="100%" height="200" src="assets/img/CarouselCard.png" alt="">
                      </div>
                      <div class="card-text col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Имя</h5>
                          <div style="height: 10px;"></div>
                          <p class="card-addtext">Год</p>
                        </div>
                      </div>
                    </div>




                  </div>
                </div>
                <!-- /Популярно сегодня -->
              </div>
            </div>
          </div>
        </div>
        <!-- /3 блока в ряд -->
        <div style=" height: 35px;"></div>
        <div class="container">
          <div>
            <h5>Обновлено сегодня</h5>
          </div>
          <div style=" height: 5px;"></div>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled">
            <label class="form-check-label" for="flexSwitchCheckDisabled">Только мои закладки</label>
          </div>
          <div style=" height: 15px;"></div>
          <div class="container" style="padding-left: 0;">
            <div class="up-card mb-3" style="max-width: auto;">
              <div class="row g-0 line">
                <div class="block col-md-4">
                  <img class="up-img" src="assets/img/CarouselCard.png" alt="...">
                </div>
                <div class="card-text col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Имя</h5>
                    <p class="chapter text-body-secondary">Глава</p>
                    <p class="chapter"><small class="text-body-secondary">время</small></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="up-card mb-3" style="max-width: auto;">
              <div class="row g-0 line">
                <div class="block col-md-4">
                  <img class="up-img" src="assets/img/CarouselCard.png" alt="...">
                </div>
                <div class="card-text col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Имя</h5>
                    <p class="chapter text-body-secondary">Глава</p>
                    <p class="chapter"><small class="text-body-secondary">время</small></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="up-card mb-3" style="max-width: auto;">
              <div class="row g-0 line">
                <div class="block col-md-4">
                  <img class="up-img" src="assets/img/CarouselCard.png" alt="...">
                </div>
                <div class="card-text col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Имя</h5>
                    <p class="chapter text-body-secondary">Глава</p>
                    <p class="chapter"><small class="text-body-secondary">время</small></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="up-card mb-3" style="max-width: auto;">
              <div class="row g-0 line">
                <div class="block col-md-4">
                  <img class="up-img" src="assets/img/CarouselCard.png" alt="...">
                </div>
                <div class="card-text col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Имя</h5>
                    <p class="chapter text-body-secondary">Глава</p>
                    <p class="chapter"><small class="text-body-secondary">время</small></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="up-card mb-3" style="max-width: auto;">
              <div class="row g-0 line">
                <div class="block col-md-4">
                  <img class="up-img" src="assets/img/CarouselCard.png" alt="...">
                </div>
                <div class="card-text col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Имя</h5>
                    <p class="chapter text-body-secondary">Глава</p>
                    <p class="chapter"><small class="text-body-secondary">время</small></p>
                  </div>
                </div>
              </div>
            </div>





          </div>
        </div>
      </div>


    </div> <!-- /main -->
    </div> <!-- /wrapper -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-body-secondary">© 2024 Company, LLC</p>

      <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="assets/img/Logo.png" class="bi me-2" width="40" height="32"></use></img>
      </a>

      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
      </ul>
    </footer>




  <?php else: ?>
<a href="/assets/php/exit.php">выйти</a>

  <?php endif; ?>





  <!-- Bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- js -->
  <script src="assets/js/carousel.js"></script>
  <script src="assets/js/scrollTop.js"></script>
  <script src="assets/js/recommendations.js"></script>
  <!-- jq -->
  <script src="assets/js/js glodal/jquery-3.7.1.js"></script>

</body>

</html>