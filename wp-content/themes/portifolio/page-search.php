<?php
get_template_part("header");
?>
<section class="section section-search" id="search">
      <div class="container">
        <div class="u-center-text u-margin-bottom-big">
          <h2 class="heading-secondary">
            Search
          </h2>
        </div>
        <div class="row">
         <form method="get" action="<?php echo site_url('/')?>">
            <input type="search" name="s">
            <input type="submit" value="search">
         </form>
        </div>
      </div>
</section>
