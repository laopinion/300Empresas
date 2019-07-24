<section id="article">
  <section id="slide_principal">
    <figure>
      <?php print render($content['field_image']);?>
      <!-- <img class="slide" src="./img/slide.png" alt="slide"> -->
      <!-- <img class="slideMovil" src="./img/slideMovil.png" alt="slide"> -->
    </figure>
    <div class="container slide_info">
      <hr>
    </div>
  </section>

  <section id="content" class="container">
    <h2 class="title"><?php print $title;?></h2>
    <article class="body"><?php print render($content['body']);?></article>

    <section id="newsletter" style="margin-bottom: 200px;">
      <div class="container">
        <div class="header">
          <h3>!SUSCRÍBASE!</h3>
          <p>PARA RECIBIR TODA LA INFORMACIÓN AL DÍA</p>
        </div>
        <hr>
        <form id="form_newsletter">
          <input type="text" placeholder="NOMBRE Y APELLIDO">
          <input type="email" placeholder="CORREO ELÉCTRONICO" required>
          <div id="terminos">
            <input type="checkbox" required>
            <label for="terminos">Acepto los términos y condiciones y he leído la política de tratamiento de los datos personales</label>
          </div>
          <button class="btn_enviar">Enviar</button>
        </form>
      </div>
    </section>

    <section id="posts">
      <div class="container posts">
        <?php $view = views_get_view('home'); print $view->preview('block_1'); ?>
      </div>
    </section>
  </section>

  <section id="portadas">
    <h3 class="container">Las mejores empresas de norte de santander en su octava edición</h3>
    <a href="/ediciones-pdf">
      <img class="portada" src="<?php print base_path(); ?>sites/default/themes/300empresas/images/portadas.png" alt="portadas">
    </a>
    <img class="portadaMovil" src="<?php print base_path(); ?>sites/default/themes/300empresas/images/portadasMovil.png" alt="portadas">
    <h2 class="container">Obtenga las ediciones anteriores de su revista las mejores empresas en pdf</h2>
    <div class="container button">
      <button><a href="/ediciones-pdf">Clic Aquí</a></button>
    </div>
  </section>

</section>
