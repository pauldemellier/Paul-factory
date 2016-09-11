<?php
/**
 * Template Name: Home

 *
 * @package _tk
 */

get_header(); ?>





<div class="menu">
  <nav>
    <ul>
      <li><a href="#title-1"><?php the_field('title-1'); ?></a></li>
      <li><a href="#title-2"><?php the_field('title-2'); ?></a></li>
      <li><a href="#title-3"><?php the_field('title-3'); ?></a></li>
      <li><a href="#title-4"><?php the_field('title-4'); ?></a></li>
      <li><a href="#title-5"><?php the_field('title-5'); ?></a></li>
    </ul>
  </nav>
</div><!-- /sidebar -->

<!-- /#content -->


<div class="row wide secondary" id="title-1">
  <div id="content" class="main-content-inner col-sm-12 col-md-12">
    <h2>Accueil</h2>
  </div>
</div>
<div class="row wide" id="title-2">
  <div id="content" class="main-content-inner col-sm-12 col-md-12">
    <h2>Travaux récents</h2>
    <a id="anchor" class="button-normal" href="#title-5"><?php the_field('title-5'); ?></a>
  </div>
</div>
<div class="row wide secondary" id="title-3">
  <div id="content" class="main-content-inner col-md-12">
    <div class="container">
      <h2>Compétences</h2>
      <div class="drawn-icons-container big col-sm-12 col-md-12">
        <div class="drawn-icon-container col-xs-6 col-sm-6 col-md-3">
          <div class="drawn-icon">
            <img class="drawn-icon" src="http://localhost:8888/wp-content/themes/_tk-master/images/cv.png" data-pin-nopin="true">
          </div>
          <h3>Koukou</h3>
        </div>
        <div class="drawn-icon-container col-xs-6 col-sm-6 col-md-3">
          <div class="drawn-icon">
            <img class="drawn-icon" src="http://localhost:8888/wp-content/themes/_tk-master/images/cv.png">
          </div>
          <h3>Koukou</h3>
        </div>
        <div class="drawn-icon-container col-xs-6 col-sm-6 col-md-3">
          <div class="drawn-icon">
            <img class="drawn-icon" src="http://localhost:8888/wp-content/themes/_tk-master/images/cv.png">
          </div>
          <h3>Koukou</h3>
        </div>
        <div class="drawn-icon-container col-xs-6 col-sm-6 col-md-3">
          <div class="drawn-icon">
            <img class="drawn-icon" src="http://localhost:8888/wp-content/themes/_tk-master/images/cv.png">
          </div>
          <h3>Koukou</h3>
        </div>
      </div>
      <div class="separator-big"></div>
      <div>
        <div id="content" class="col-xs-12 col-sm-8 col-md-8">La conception de logo est l’art de faire passer un message à travers une forme simple et efficace de manière harmonieuse et durable. C’est pour moi le genre de travail où la créativité est mise à rude épreuve, tant par ses possibilités que par sa complexité.
          Votre image de marque est capitale, et je suis à votre service pour la rendre unique. De la création du logo à la réalisation de la charte graphique, nous avançons ensemble pour trouver l'identité visuelle qui vous correspond.</div>
        <div id="content" class="col-xs-12 col-sm-4 col-md-4">
          <h4>Services</h3>
          <div id="content" class="col-xs-6 col-sm-12 col-md-6">
            <ul>
              <li>Packaging</li>
              <li>Dépliant</li>
              <li>Brochure</li>
              <li>Flyers</li>
            </ul>
          </div>
          <div id="content" class="col-xs-6 col-sm-12 col-md-6">
            <ul>
              <li>Packaging</li>
              <li>Dépliant</li>
              <li>Brochure</li>
              <li>Flyers</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="icons-container col-xs-12 col-sm-12 col-md-12">
        <div class="icon-container"><i class="icon-photoshop"></i></div>
        <div class="icon-container"><i class="icon-illustrator"></i></div>
        <div class="icon-container"><i class="icon-indesign"></i></div>
        <div class="icon-container"><i class="icon-sketch"></i></div>
        <div class="icon-container"><i class="icon-blender"></i></div>
      </div>
    </div>
  </div>
</div>
<div class="row wide" id="title-4">
  <div id="content" class="main-content-inner col-sm-6 col-md-6 no-padding no-margin">
    <div class="full-image"></div>
  </div>
  <div id="content" class="main-content-inner col-sm-6 col-md-6">
    <h2>À propos</h2>
    <div class="container">
      <div id="content" class="main-content-inner col-md-12">
        <?php the_field('about-me'); ?>
        <div class="drawn-icons-container">
          <div class="drawn-icon-container col-xs-6 col-sm-6 col-md-6">
            <div class="drawn-icon">
              <img class="drawn-icon" src="<?php echo get_template_directory_uri(); ?>/images/cv.png"/>
            </div>
            <h4>Koukou</h4>
          </div>
          <div class="drawn-icon-container col-xs-6 col-sm-6 col-md-6">
            <div class="drawn-icon">
              <img class="drawn-icon" src="<?php echo get_template_directory_uri(); ?>/images/cv.png"/>
            </div>
            <h4>Koukou</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row wide secondary" id="title-5">
  <div id="content" class="main-content-inner col-sm-12 col-md-12">
    <h2>Contact</h2>
    <div class="container">
      <div id="content" class="main-content-inner col-sm-12 col-md-offset-2 col-md-8">
        <?php the_field('contact'); ?>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>
