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
      <div class="section contacts item-animation">
        <div class="container">
          <!-- Title -->
          <div class="row">
            <div class="spacer-md"></div>
            <div class="col-xl-6 offset-xl-1 col-12 animate-item to-up">
              <h1 class="h2 title">
                Наші <b>контакти</b>
              </h1>
            </div>
            <div class="spacer-md"></div>
          </div>

          <div class="row">
            <div class="col-xl-6 col-12 ">

              <div class="contacts-inner type2 animate-item to-right anime-2">
                <div class="text">
                  <p>
                    Забезпечуємо постійний лікарський супровід до повного одужання. Після курсу лікування даємо
                    гарантію
                    на отриманий результат.
                  </p>
                </div>
                <ul class="contacts-info">
                  <li>
                    <div class="image">
                      <img src="img/mail.svg" alt="">
                    </div>
                    <a href="mailto:proctolikargo@gmail.com">proctolikargo@gmail.com</a>
                  </li>
                  <li>
                    <div class="image">
                      <img src="img/smartphone.svg" alt="">
                    </div>
                    <a href="tel:+380672618255">+380 (67) 261 82 55</a>
                  </li>
                  <li>
                    <div class="image">
                      <img src="img/location.svg" alt="">
                    </div>
                    <a href="https://g.page/proctolikar_te?share" target="_blank">
                      м. Тернопіль, вул. Лучаківського, 12А/28
                    </a>
                  </li>
                </ul>
              </div>

            </div>
          </div>
          <div class="spacer-md"></div>
        </div>

        <!-- Map -->
        <div class="map-inner animate-item img-to-left anime-4">
          <div class="map" id="map" data-lat="49.544097075836625" data-lng="25.55835545584653" data-zoom="15"></div>
          <a class="marker" data-rel="map" data-lat="49.544097075836625" data-lng="25.55835545584653"
            data-string="м. Тернопіль, вул. Лучаківського, 12А/ 28" data-image="img/marker.png"
            data-image-mobile="img/marker-mobile.png"></a>
        </div>

      </div>
      <div class="spacer-xl"></div>

      <!-- Form -->
      <div class="section">
        <div class="container">
          <div class="row justify-content-center item-animation">
            <div class="col-xl-8 col-12 animate-item to-up">
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

      <div class="decor-img left rellax" data-rellax-speed="1">
        <img src='img/bg-decor.svg' alt='decor image'>
      </div>
    </main>

    <footer>
      <?php include 'inc/_footer.php';?>
    </footer>
  </div>

  <?php include 'inc/_popup.php';?>
  <?php include 'inc/_bottom.php';?>
  <?php include 'inc/_map.php';?>
</body>

</html>