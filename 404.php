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

      <!-- 404 -->
      <div class="page-404">
        <div class="decor-block"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-5 offset-xl-1 col-12">
              <div class="page-404-img">
                <img src="img/404.png" alt="">
              </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-12">
              <div class="page-404-inner">
                <div class="h4 title">
                  Нажаль такої сторінки не знайдено
                </div>
                <div class="text">
                  <p>
                    Вибачте, але сторінка, яку ви намагалися знайти - не існує. Пропонуємо вам перейти на головну
                    сторінку
                  </p>
                </div>
                <a class="btn" href="index.php">
                  <b>на головну</b>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="decor-img left rellax" data-rellax-speed="1">
        <img src='img/bg-decor.svg' alt='decor image'>
      </div>
      <div class="decor-img right rellax" data-rellax-speed="1">
        <img src='img/bg-decor-2.svg' alt='decor image'>
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