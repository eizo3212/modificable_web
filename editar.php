<?php
require_once('./show.php');
require_once('./conf.php');
?>

<!doctype html>
<html style="font-size: 16px;"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Post 1 Headline">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script src="./js/push.min.js"></script>
    <title>Post 2 Headline</title>
    <link rel="stylesheet" href="./css//nicepage.css" media="screen">
<link rel="stylesheet" href="./css/Post-Template.css" media="screen">
    <script class="u-script" type="text/javascript" src="./js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="./js//nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.29.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-5462"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">

        <a href="./index.php" class="u-image u-logo u-image-1">
          <img src="./images/log-cedam.png" class="u-logo-image u-logo-image-1">
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
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="./index.php" style="padding: 10px 20px;">Casa</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="../About.html" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="../Contact.html" style="padding: 10px 20px;">Contact</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Casa.html">Casa</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../About.html">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Contact.html">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>

      <?php
        $pag = $_GET['id'];
        $var = $pag;


        $title = $link->query("SELECT titulo, imagen FROM post where id=$var")->fetch();

      ?>

    <section class="u-align-center u-clearfix u-section-1" id="sec-9dcf">
    <form method="post" action="save.php" style="text-align: center;" enctype="multipart/form-data">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1"><!--post_details--><!--post_details_options_json--><!--{"source":""}--><!--/post_details_options_json--><!--blog_post-->
        <div class="u-container-style u-expanded-width u-post-details u-post-details-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1"><!--blog_post_image-->
          <?php  $img = base64_encode($title['imagen']); ?>
            <img id="preview" alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-1" src="data:img/png;base64,<?php echo $img?>">
            <input type="file" name="imagen" id="imagen">
            <h2 class="u-blog-control u-text u-text-1"><input type="text" name="title" required id="title" value="<?php echo $title['titulo']?>"></h2><!--/blog_post_header--><!--blog_post_metadata-->
            <div class="u-blog-control u-metadata u-metadata-1"><!--blog_post_metadata_date-->
              <span class="u-meta-date u-meta-icon">05 nov. 2021</span><!--/blog_post_metadata_date--><!--blog_post_metadata_category-->
              <!--/blog_post_metadata_category--><!--blog_post_metadata_comments-->
              <!--/blog_post_metadata_comments-->
            </div><!--/blog_post_metadata--><!--blog_post_content-->
            <div class="u-align-justify u-blog-control u-post-content u-text u-text-2 fr-view">
            <textarea name="editor" id="editor" cols="30" rows="10">
            <?php edit($var); ?>
            </textarea>
            <h3 class="u-small-text u-text u-text-variant u-text-1">Grados en los que desea publicar:</h3><br>
                <?php 
                include_once('./conf.php');
                $grad = $link->query('SELECT * from grados'); 
                
                foreach ($grad as $key): ?>
                <input type="checkbox" name="grado[]" id="grado" value="<?php echo $key['id'];?>"> <?php echo $key['grado'];?>
                <?php endforeach ?>
            </div><!--/blog_post_content-->
          </div>
        </div><!--/blog_post--><!--/post_details-->
      </div>
      <input type="hidden" name="id" value="<?php echo $var?>">
    <input  type = "submit"  name = "edit"  value = "Guardar" >
    </form> <br>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-d7ec"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Texto de ejemplo. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>

    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );



    document.getElementById("imagen").onchange = function(e) {

        let reader = new FileReader();

        reader.readAsDataURL(e.target.files[0]);

        reader.onload = function(){
            let preview = document.getElementById('preview'),
                    image = document.createElement('img');
                    image.style.height = '100%';
            image.src = reader.result;

            preview.innerHTML = '';
            preview.append(image);
        };
    }


    </script>
  
</body></html>