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
  </section>

</section>