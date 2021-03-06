<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


$select_usuario = $pdo->prepare("SELECT * FROM Usuarios
										                    WHERE PK_Usuario = :PK_Usuario;");
$select_usuario->bindParam(':PK_Usuario', $_SESSION['login_user']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$select_usuario->execute();
$usuario = $select_usuario->fetchAll(PDO::FETCH_ASSOC);

$select_paises = $pdo->prepare("SELECT * FROM Paises LIMIT 10");
$select_paises->bindParam(':PK_Usuario', $_SESSION['login_user']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$select_paises->execute();
$paises = $select_paises->fetchAll(PDO::FETCH_ASSOC);

?>



<footer >
  <div class="container">
    <div class="row">
      
      <div class="col-lg-4 col-md-6">
        <h3>Enlaces</h3>
        <ul class="list-unstyled three-column">
        <li><a href="<?php echo ($usuario[0]['FK_TipoUsuario']==2)?'./home_tienda.php':'./home.php'; ?>">Inicio</a> </li>
          <li>Servicios</li>
          <li>Compañia</li>
          <li>Ubicación</li>
          <li>Contactar</li>
        </ul>
        <ul style="padding:0px;" class="">
          <a href="">
            <li style="font-size:40px;" class=" fa fa-facebook-square"></li>
          </a>
          <a href="">
            <li style="font-size:40px;margin-left:10px;" class=" fa fa-instagram"></li>
          </a>
          <a href="">
            <li style="font-size:40px;margin-left:10px;" class=" fa fa-twitter-square"></li>
          </a>
        </ul>
      </div>
      
      <div class="col-lg-4 col-md-6">
        <h3>Contacto</h3>

        <div class="media">
          <a href="#" class="pull-left">
            <i style="font-size:40px;" class="fa fa-phone-square-alt"></i>
          </a>
          <div class="media-body">
            <h6 class="media-heading" style="margin:10px 0px 0px 10px;">+504 89347854</h6>
          </div>
        </div>
      <br>
        <div class="media">
          <a href="#" class="pull-left">
            <i style="font-size:40px;" class="fa fa-envelope-square"></i>
          </a>
          <div class="media-body">
            <h6 class="media-heading" style="margin:10px 0px 0px 10px;">
              <a href="mailto:shopping.app.services@gmail.com">shopping.app.services@gmail.com</a>
            </h6>
          </div>
        </div>
      <br>
        <div class="media">
          <a href="#" class="pull-left">
            <i style="font-size:40px;" class="fa fa-whatsapp"></i>
          </a>
          <div class="media-body">
            <h6 class="media-heading" style="margin:10px 0px 0px 10px;">+504 89347854</h6>
          </div>
        </div>
        
      </div>
      
      <div class="col-lg-2">
        <h3>Paises</h3>
        <ul class="list-unstyled">
          <?php foreach($paises as $pais){ ?>
            <li><?php echo $pais['NombrePais'] ?></li>
          <?php } ?>
        </ul>
      </div>

      
    </div>
  </div>
  <div class="copyright text-center">
    Copyright &copy; 2020 <span>Shoppingapp</span>
  </div>
</footer>
<script type="text/javascript">
  function googleTranslateElementInit() {
	  new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'es,ca,eu,gl,en,fr,it,pt,de', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true}, 'google_translate_element');
  }

  $('#google_translate_element').on("click", function () {

// Change font family and color

  $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div, .goog-te-menu2 *")
      .css({
          'font-family': 'tahoma',
          'font-size': '15px',
          'color': '#EA7731',
          'background-color':'white',
      });

    // Change hover effects
    $("iframe").contents().find(".goog-te-menu2-item div").hover(function () {
        $(this).css('background-color', '#FFC108').find('span.text').css({'color': 'white', 'background-color':'#FFC108'})
    }, function () {
        $(this).css('background-color', 'white').find('span.text').css({'color': 'EA7731', 'background-color':'white'});
    });

    // Change Google's default blue border
    $("iframe").contents().find('.goog-te-menu2').css('border', '1px solid #F38256');

    // Change the iframe's box shadow
    $(".goog-te-menu-frame").css({
        '-moz-box-shadow': '0 3px 8px 2px #666666',
        '-webkit-box-shadow': '0 3px 8px 2px #666',
        'box-shadow': '0 3px 8px 2px #666'
    });
  });      
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>