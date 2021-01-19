<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <meta name='robots' content='noindex,nofollow' />
  <link href="css/main.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="img/favicon.ico" />
  <title>All Links</title>
  <style type="text/css">
  body {
    height: 100%;
    overflow: visible;
    background-color: #f1f1f1;
  }

  #content-block {
    overflow: hidden;
    position: relative;
    display: block;
  }

  .current-links {
    max-width: 1000px;
    margin: 20px auto;
    padding: 0 15px;
  }

  .current-links ol {
    font-size: 0;
    counter-reset: number;
  }

  .current-links li {
    display: block;
    line-height: 0;
    padding-left: 32px;
    position: relative;
  }

  .current-links ol li:before {
    position: absolute;
    left: 0;
    top: 0;
    color: #8B2A2B;
    font-weight: 600;
    counter-increment: number;
    content: counter(number) ".";
    font-size: 20px;
    line-height: 26px;
  }

  a {
    display: inline-block;
    color: #242424;
    text-decoration: none;
    font-size: 20px;
    line-height: 26px;
  }

  .current-links-img {
    display: none;
  }

  @media(min-width:1200px) {
    a:hover {
      color: #8B2A2B;
    }

    .current-links-img {
      display: inline-block;
      max-width: 400px;
      width: 100%;
      /* margin-top: 100px; */
    }
  }
  </style>
</head>

<body>
  <div id="content-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12 offset-xl-2">
          <div class="current-links">
            <ol>
              <?php
                $files = scandir('.');
                $currentServer = "http://$_SERVER[SERVER_NAME]";
                $currentDir = substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/'));
                $currentLink = $currentServer + $currentDir;

                foreach ($files as $file) {
                  if (preg_match_all('/(.*?)\.php/',$file,$q)){
                    if((strpos($file, '_') !== false) || (strpos($file, 'links.php') !== false)){
                    }
                    else{
                      echo '<li><a href="'.$currentDir.'/'.$file.'" target="_blank">'.$file.'</a></li>';
                    }
                  }
                }

              ?>
            </ol>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <img class="current-links-img" src="img/monosushi-img-3.svg" alt="">
        </div>
      </div>
    </div>


  </div>
</body>

</html>