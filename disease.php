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
    <header>
      <?php include 'inc/_header.php';?>
    </header>

    <main>

      <div class="section">
        <div class="container">
          <!-- Title -->
          <div class="row justify-content-center item-animation">
            <div class="spacer-sm"></div>
            <div class="col-xl-6 col-lg-10 of col-12 animate-item to-up">
              <h1 class="h2 title text-center">
                Проктологічні <b>захворювання</b>
              </h1>
            </div>
            <div class="spacer-sm"></div>
          </div>

          <!-- disease -->
          <div class="row justify-content-center item-animation">
            <div class="col-xl-10 col-12 animate-item anime-1">
              <div class="row disease-inner">

                <div class="col-xl-4 col-md-6 col-12">
                  <a class="disease-item" href="disease-detail.php">
                    <div class="name h6">Анальна тріщина</div>
                    <div class="link">ДЕТАЛЬНІШЕ</div>
                    <img src="img/disease-img-5.jpg" alt="">
                    <div class="hover-img">
                      <img src="img/hover-img.svg" alt="">
                    </div>
                  </a>
                </div>

                <div class="col-xl-4 col-md-6 col-12">
                  <a class="disease-item" href="disease-detail.php">
                    <div class="name h6">Анальна поліпи</div>
                    <div class="link">ДЕТАЛЬНІШЕ</div>
                    <img src="img/disease-img-1.jpg" alt="">
                    <div class="hover-img">
                      <img src="img/hover-img.svg" alt="">
                    </div>
                  </a>
                </div>

                <div class="col-xl-4 col-md-6 col-12">
                  <a class="disease-item" href="disease-detail.php">
                    <div class="name h6">Геморой</div>
                    <div class="link">ДЕТАЛЬНІШЕ</div>
                    <img src="img/disease-img-2.jpg" alt="">
                    <div class="hover-img">
                      <img src="img/hover-img.svg" alt="">
                    </div>
                  </a>
                </div>

                <div class="col-xl-4 col-md-6 col-12">
                  <a class="disease-item" href="disease-detail.php">
                    <div class="name h6">Гемороїдальні вузли</div>
                    <div class="link">ДЕТАЛЬНІШЕ</div>
                    <img src="img/disease-img-3.jpg" alt="">
                    <div class="hover-img">
                      <img src="img/hover-img.svg" alt="">
                    </div>
                  </a>
                </div>

                <div class="col-xl-4 col-md-6 col-12">
                  <a class="disease-item" href="disease-detail.php">
                    <div class="name h6">Зовнішній геморой </div>
                    <div class="link">ДЕТАЛЬНІШЕ</div>
                    <img src="img/disease-img-4.jpg" alt="">
                    <div class="hover-img">
                      <img src="img/hover-img.svg" alt="">
                    </div>
                  </a>
                </div>

                <div class="col-xl-4 col-md-6 col-12">
                  <a class="disease-item" href="disease-detail.php">
                    <div class="name h6">Тромбоз зовнішнього вузла</div>
                    <div class="link">ДЕТАЛЬНІШЕ</div>
                    <img src="img/disease-img-5.jpg" alt="">
                    <div class="hover-img">
                      <img src="img/hover-img.svg" alt="">
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="spacer-xl"></div>

      <!-- Home contacts -->
      <div class="section contact-home">
        <div class="parallax-bg">
          <div class="bg rellax" data-rellax-speed="1.5">
            <img data-src="img/contacts-bg.jpg" src="img/preloader.jpg" alt="">
          </div>
        </div>
        <div class="opacity"></div>
        <div class="container">
          <div class="row item-animation">
            <div class="col-xl-4 col-lg-6 col-12 ">
              <div class="contacts-inner">
                <h2 class="h2 title light animate-item to-up">Наші контакти</h2>
                <div class="text light animate-item to-up">
                  <p>
                    Забезпечуємо постійний лікарський супровід до повного одужання. Після курсу лікування даємо
                    гарантію
                    на отриманий результат.
                  </p>
                </div>
                <ul class="contacts-info animate-item to-up">
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
            <div class="col-xl-7 offset-xl-1 col-lg-6 col-12 animate-item to-left anime-3">
              <div class="form-inner">
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
    </main>

    <!-- FOOTER -->
    <footer>
      <?php include 'inc/_footer.php';?>
    </footer>

  </div>

  <?php include 'inc/_popup.php';?>
  <?php include 'inc/_bottom.php';?>
</body>

</html>