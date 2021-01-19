<!DOCTYPE html>
<html lang="uk">

<head>
  <?php include 'inc/_top.php';?>
</head>

<body>
  <!-- LOADER -->
  <div id="loader-wrapper"></div>

  <div id="content-block">

    <!-- HEADER -->
    <header class="style2">
      <?php include 'inc/_header.php';?>
    </header>
    <div class="header-margin"></div>

    <main>
      <!-- banner -->
      <div class="section banner">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs-inner">
          <div class="container">
            <div class="row">
              <ul class="breadcrumbs light">
                <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                  <a href="index.php" itemprop="url"><span itemprop="title">Головна</span></a>
                </li>
                <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                  <a href="advice.php" itemprop="url"><span itemprop="title">Послуги</span></a>
                </li>
                <li class="active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                  <span itemprop="title">Первиний огляд</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Breadcrumbs End -->
        <div class="parallax-bg">
          <div class="bg rellax" data-rellax-speed="1.5">
            <img data-src="img/banner-img-2.jpg" src="img/preloader.jpg" alt="">
          </div>
        </div>
        <div class="opacity"></div>
        <div class="banner-align size-2">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-md-10 col-xl-6">
                <h1 class="h3 title light">
                  Первиний огляд
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="spacer-sm"></div>

      <!-- SIMPLE PAGE -->
      <div class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
              <div class="simple-page">
                <p>
                  Первинний огляд в проктологічній амбулаторії - це комплексний захід щодо аналізу стану прямої
                  кишки.
                </p>
                <p>
                  Для проходження первиного огляду Вам нічого не потрібно нічого з собою мати. Все включене у вартість
                  первиного обстеження (одноразові матеріали, пеленки, перев'язувальний матеріал, оглядовий гель,
                  антисептики тощо)
                </p>
                <p>
                  Спочатку Ви спілкуєтесь із лікарем, уточнюєте історію вашої проблеми, з'ясувуєте усі деталі, а далі
                  переходите безпосередньо до обстеження.
                </p>
                <div class="simple-slider">
                  <div class="swiper-entry">
                    <div class="swiper-container" data-options='{"slidesPerView":1, "speed": 1000,"parallax": true }'>
                      <div class="swiper-wrapper">

                        <div class="swiper-slide">
                          <div class="slide-img" data-swiper-parallax="20%">
                            <img src="img/preloader.jpg" data-src="img/simple-img-2.jpg" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="slide-img" data-swiper-parallax="20%">
                            <img src="img/preloader.jpg" data-src="img/simple-img-1.jpg" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="slide-img" data-swiper-parallax="20%">
                            <img src="img/preloader.jpg" data-src="img/simple-img-2.jpg" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="slide-img" data-swiper-parallax="20%">
                            <img src="img/preloader.jpg" data-src="img/simple-img-1.jpg" alt="">
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="slide-img" data-swiper-parallax="20%">
                            <img src="img/preloader.jpg" data-src="img/simple-img-2.jpg" alt="">
                          </div>
                        </div>

                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
                </div>
                <ul>
                  <li>Огляд переанальної ділянки огляд переанальної ділянки</li>
                  <li>Пальцеве рекальне обстеження</li>
                  <li>Аноскопія</li>
                  <li>Консультація лікаря-проктолога</li>
                  <li>Рекомендації щодо покращення здоров'я</li>
                  <li>За потреби, рекомендації по лікуванню</li>
                  <li>Первинний огляд обов'язково включає в себе аноскопію - це огляд стану прямої кишки до 10 см, з
                    фотофіксацією.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="spacer-lg"></div>

      <!-- Form -->
      <div class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-12">
              <div class="form-inner type2">
                <h2 class="h2 title down text-center">Форма запису на прийом</h2>
                <form>
                  <div class="row">
                    <div class="col-md-6 col-12">
                      <input class="input" type="text" placeholder="Ваше ім’я*" required>
                    </div>
                    <div class="col-md-6 col-12">
                      <input class="input inputmask" type="text" placeholder="Ваш номер телефона*" inputmode="numeric"
                        data-inputmask="'mask': '+38 (999) 999 99 99'" data-inputmask-placeholder="x" required>
                    </div>
                    <div class="col-12">
                      <textarea class="input" placeholder="Ваш коментар*" required></textarea>
                    </div>
                  </div>
                  <button class="btn btn-block" type="submit">
                    <b>записатися на прийом</b></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="spacer-xl"></div>
    </main>

    <footer>
      <?php include 'inc/_footer.php';?>
    </footer>
  </div>

  <?php include 'inc/_popup.php';?>
  <?php include 'inc/_bottom.php';?>
</body>

</html>