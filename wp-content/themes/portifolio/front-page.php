<?php
get_header();
?>
<main>
<section class="section section-about_me" id="about_me">
      <div class="bg-video">
        <video class="bg-video__content" autoplay muted loop>
          <source src="src/images/Woman Overlooking Landscape.mp4" type="video/mp4">
            your browser is not supported
        </video>
      </div>
      <div class="container">
        <div class="u-center-text u-margin-bottom-big">
          <h2 class="heading-secondary">
            About me
          </h2>
        </div>
        <div class="row">
          <div class="story">
            <figure class="story__shape">
              <img src="<?php echo get_field("about_me_photo")?>" alt="story image" class="story__img">
              <figcaption class="story__caption">name martina</figcaption>
            </figure>
            <div class="story__text">
              <h3 class="heading-tertiary u-margin-bottom-small">
                <?php echo get_field("about_me_heading")?>
              </h3>
              <p>
                <?php echo get_field("about_me_text");?>
                <?php get_template_part("template");?>
              </p>  
            </div>
          </div>
        </div>
      </div>
</section>

    <section class="section section-projects" id="projects">
      
      <div class="container">
      <div class="u-center-text u-margin-bottom-big">
          <h2 class="heading-secondary heading-secondary-white">
            Projects
          </h2>
        </div>
        <div class="row">
          <?php
          $projectsQuery = new WP_Query(array(
              'posts_per_page' => 4,
              'post_type' => 'projects'
          ));
          while($projectsQuery->have_posts()){
            $projectsQuery->the_post(); ?>
            <div class="col-md-3 col-sm-12 top-buffer">
              <div class="feature-box">
                  <i class="feature-box__icon icon-basic-world"></i>
                  <h3 class="heading-tertiary u-margin-buttom-small"><?php the_title();?></h3>
                  <p class="feature-box__text">
                    <?php the_content();?>
                  </p>
              </div>
            </div>
          <?php
        }
        ?>

        </div>
      </div>
    </section>
    <section class="section section-skills" id="skills">
      <div class="container">
          <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
              skills
            </h2>
          </div>
          <div class="row">
            <div class="col-sm">
              <div class="circle" id="circle-a">
              </div>
              <h3 class="heading-tertiary u-margin-bottom-small">
                <span class="heading-tertiary-title">HTML & CSS</span>
              </h3>
            </div>
            <div class="col-sm">
              <div class="circle" id="circle-b">
              </div>
              <h3 class="heading-tertiary u-margin-bottom-small">
              <span class="heading-tertiary-title">JAVASCRIPT</span>
              </h3>
            </div>
            <div class="col-sm">
              <div class="circle" id="circle-c">
              </div>
              <h3 class="heading-tertiary u-margin-bottom-small">
              <span class="heading-tertiary-title">WORDPRESS</span>
              </h3>
            </div>
            <div class="col-sm">
              <div class="circle" id="circle-d">
              </div>
              <h3 class="heading-tertiary u-margin-bottom-small">
              <span class="heading-tertiary-title">PHP</span>
              </h3>
            </div>
          </div>
    </section>


    <section class="section section-contact_me" id="contact_me">
      <div class="container">
      <div class="u-center-text u-margin-bottom-big">
          <h2 class="heading-secondary heading-secondary-white">
            contact me
          </h2>
        </div>
          <div class="row">
              <div class="book">
              </div>
            </div>
      </div>
    </section>
  </main>
<?php
get_footer();
?>