<?php
    require_once('./conf.php');
  session_start();


  if (isset($_GET['close'])) {
  session_destroy();
  header('location: ./login.html');
  }


?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Post 6 Headline, Post 5 Headline, Post 4 Headline">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <meta name="theme-color" content="#F0DB4F">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="shortcut icon" type="image/png" href="./img/ProgramadorFitness.png">
  <link rel="apple-touch-icon" href="./ProgramadorFitness.png">
  <link rel="apple-touch-startup-image" href="./ProgramadorFitness.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Casa</title>
  
    <link rel="manifest" href="./manifest.json">
    <link rel="stylesheet" href="./css/nicepage.css" media="screen">
    <link rel="stylesheet" href="./css/Casa.css" media="screen">
    <script class="u-script" type="text/javascript" src="./js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="./js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.29.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Casa">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Casa.html" data-home-page-title="Casa" class="u-body"><header class="u-clearfix u-header u-header" id="sec-5462"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="admin.php" class="u-image u-logo u-image-1">
          <img src="images/log-cedam.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php" style="padding: 10px 20px;">Casa</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="agregar.php" style="padding: 10px 20px;">nueva noticia</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="admin.php?close=1" style="padding: 10px 20px;">cerrar sesion</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="admin.php">Casa</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="agregar.php">nueva noticia</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="admin.php?close=1" style="padding: 10px 20px;">cerrar sesion</a></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>

      <?php
    $paginas = $link->query('SELECT id,contenido, left(contenido,80),titulo,imagen,dayname(fecha),day(fecha),monthname(fecha),year(fecha) FROM post ORDER BY id DESC')->fetchAll();?>




    <section class="u-align-center u-clearfix u-section-1" id="carousel_ac24">
     
    <?php foreach ($paginas as $pags): ?>
      <div class="u-clearfix u-sheet u-sheet-1" ><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/blog_options_json-->
        <div class="u-blog u-blog-1">
          <div class="u-repeater u-repeater-1" ><!--blog_post-->
            <div class="u-blog-post u-container-style u-repeater-item">
              <div class="u-container-layout u-container-layout-1" onclick="ir(<?php echo $pags['id'] ?>);">
                <a class="u-post-header-link" href="paginas.php?pagina=<?php echo $pags ?>"><!--blog_post_image-->
                  <?php  $img = base64_encode($pags['imagen']); ?>
                  <img src="data:img/png;base64,<?php echo $img?>" alt="" class="u-blog-control u-image u-image-default u-image-1"><!--/blog_post_image-->
                </a><!--blog_post_header-->
                <h2 class="u-blog-control u-text u-text-1">
                  <a class="u-post-header-link" href="paginas.php?pagina=<?php echo $pags ?>"><!--blog_post_header_content--><?php echo $pags['titulo'];?><!--/blog_post_header_content--></a>
                </h2><!--/blog_post_header--><!--blog_post_content-->
                <div class="u-blog-control u-post-content u-text u-text-2"><!--blog_post_content_content--><?php echo $pags['left(contenido,80)'] ?><!--/blog_post_content_content--></div><!--/blog_post_content--><!--blog_post_metadata-->
                <div class="u-blog-control u-metadata u-metadata-1 u-text u-text-2"><!--blog_post_metadata_date-->
                  <span class="u-meta-date u-meta-icon"><!--blog_post_metadata_date_content--><?php echo $pags['dayname(fecha)']." ".$pags['day(fecha)']." ".$pags['monthname(fecha)']." ".$pags['year(fecha)']; ?><!--/blog_post_metadata_date_content--></span><!--/blog_post_metadata_date-->
                </div><!--/blog_post_metadata--><!--blog_post_readmore-->
                <a href="editar.php?id=<?php echo $pags['id'] ?>" class="u-blog-control u-border-2 u-border-grey-dark-1 u-btn u-btn-rectangle u-button-style u-none u-btn-1"><!--blog_post_readmore_content--><!--options_json--><!--{"content":"Read More"}--><!--/options_json-->editar<!--/blog_post_readmore_content--></a><!--/blog_post_readmore-->
                <a onclick="del(<?php echo $pags['id']?>)" href="#" class="u-blog-control u-border-2 u-border-grey-dark-1 u-btn u-btn-rectangle u-button-style u-none u-btn-1"><!--blog_post_readmore_content--><!--options_json--><!--{"content":"Read More"}--><!--/options_json-->eliminar<!--/blog_post_readmore_content--></a><!--/blog_post_readmore-->
               
              </div>
             
      </div>
      <?php endforeach; ?>


      <script>
        function del (e) { 
        var mensaje = confirm("desea eliminar esta entrada");
        var url = "./save.php?eliminar=";
        if (mensaje) {

        
        window.location = url+e;
        }
        
        else {
            window.location = "./admin.php";
        }
        }
      </script>


    </section>
    
    <script> /*function ir (e) { var show = "paginas.php?pagina="; window.location = show+e;}*/ </script>
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-d7ec"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Texto de ejemplo. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
      </div></footer>

      <script>
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('worker.js?'+Math.random()+'')
  });
}
</script>
  </body>
</html>

