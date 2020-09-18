<?php die('<!DOCTYPE html><html><head><meta charset="utf-8"><title>This site is not yet ready</title></head><body><h1>THIS SITE IS NOT YET READY!</h1></body></bod></html>') ?>
<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<html lang="<?php echo htmlspecialchars($translate['html']['lang'])) ?>" dir="<?php echo htmlspecialchars($translate['html']['dir'])) ?>">

<head>
  <meta charset="utf-8">
  <title><?php echo htmlspecialchars($translate['head']['title'])) ?></title>
  <link rel="stylesheet" href="assets/css/fox.min.css">
  <link rel="stylesheet" href="assets/css/custom.css"> <!-- minified -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- end favicons -->
  <meta name="description" content="Jamulus is an open source software which enables musicians to perform real-time jam sessions over the internet.">
  <link rel="author" href="humans.txt" />
</head>

<body itemscope itemtype="http://schema.org/SoftwareApplication">
  <header class="fx-row fx-row-center-xs">
    <div class="fx-col-100-xs">
      <img itemprop="logo" alt="Jamulus Icon" src="assets/img/jamulus-icon-2020.svg" loading="lazy" id="jamulusicon" />
      <h1 itemprop="name"><?php echo htmlspecialchars($translate['header']['progname'])) ?></h1>
      <span itemprop="slogan"><?php echo $translate['header']['slogan'] ?></span>
    </div>
    <div class="fx-col-100-xs" id="actionbutton">
      <div class="fx-row">
        <div class="fx-col-100-xs">
          <a href="https://github.com/corrados/jamulus/wiki/Getting-Started" target="_blank" id="get_started_btn_top" itemprop="url" rel="noreferrer"><?php echo $translate['header']['get_started_btn_top'] ?></a>
        </div>
        <div class="fx-col-100-xs" id="dl_frm_sf_container">
          <?php echo $translate['header']['advanced'] ?> <a href="https://sourceforge.net/projects/llcon/files/latest/download" itemprop="url" target="_blank" id="dld_frm_sf" rel="noreferrer"><?php echo $translate['header']['dld_frm_sf'] ?></a>
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="fx-row fx-row-center-xs" id="firstrow">
      <div class="fx-col-100-xs fx-col-50-l">
        <div itemprop="abstract">
          <?php echo $translate['abstract'] ?>
        </div>
      </div>
    </div>
    <div class="fx-row fx-row-center-xs" id="bannercontainer">
      <div class="fx-col-100-xs fx-col-50-l">
        <a href="https://github.com/corrados/jamulus/wiki/Getting-Started" target="_blank" rel="noreferrer">
          <img alt="Jamulus Banner. Links to getting started page" src="assets/img/jamulusbannersmall.png" id="jamulusbanner" loading="lazy" />
        </a>
      </div>
    </div>
    <div class="fx-row fx-row-center-xs">
      <div class="fx-col-100-xs fx-col-center-xs fx-col-50-m fx-col-25-l">
        <?php echo $translate['help'] ?>
      </div>
      <div class="fx-col-100-xs fx-col-center-xs fx-col-50-m fx-col-25-l">
        <?php echo $translate['open_source'] ?>

      <div class="fx-col-100-xs fx-col-center-xs fx-txt-center">
        <a href="https://github.com/corrados/jamulus/wiki/Getting-Started" id="get_started_btn_bottom" itemprop="url" rel="noreferrer"><?php echo $translate['get_started_btn_bottom'] ?></a>
      </div>
    </div>

  </main>
  <footer class="fx-row fx-row-around-xs" id="footer">
    <div class="fx-col-33-xs fx-col-center-xs">
      <a href="https://github.com/corrados/jamulus" target="_blank" rel="noreferrer">
        <!-- https://icongr.am/fontawesome/github.svg?size=128&color=ffffff -->
        <img src="assets/img/github.svg" alt="GitHub Logo. Links to Jamulus repo" loading="lazy" class="fx-center" />
      </a>
    </div>
    <div class="fx-col-33-xs fx-col-center-xs">
      <!-- https://icongr.am/fontawesome/facebook-official.svg?size=128&color=ffffff -->
      <a href="https://www.facebook.com/groups/619274602254947/" target="_blank" rel="noreferrer">
        <img src="assets/img/facebook.svg" alt="Facebook Logo. Links to Jamulus Facebook Group" id="fb_icon" loading="lazy" class="fx-center" />
      </a>
    </div>
    <div class="fx-col-33-xs fx-col-center-xs">
      <a href="https://sourceforge.net/projects/llcon" target="_blank" id="sflogo" rel="noreferrer">
        <img src="https://sflogo.sourceforge.net/sflogo.php?group_id=158367&amp;type=5" alt="Get Internet Jam Session Software at SourceForge.net. Fast, secure and Free Open Source software downloads" class="fx-center" />
      </a>
    </div>
    <div id="copyright" class="fx-col-100-xs fx-row-center-xs">
      <?php echo $translate['copyright'] ?>
    </div>
  </footer>
  <script> </script><!-- chrome bugfix -->
</body>

</html>
