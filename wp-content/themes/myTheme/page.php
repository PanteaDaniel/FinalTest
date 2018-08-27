<?php get_header(); ?>
<div class="thankYouBg">


<div class="container text-center">
  <div class="row">


    <div class="col-sm-4 col-md-3 col-xl-2 text-center">
      <a href="https://www.insegment.com/" target="_blank"><img class="headerLogo" src="<?php the_field('header_logo') ?>" ></a>
    </div>
    <div class="  col-sm-4 offset-md-1 col-md-4 offset-lg-3 col-lg-3 offset-xl-6 col-xl-2 text-center text-sm-right phoneContainer">
      <img class="phoneIcon" src="<?php the_field('phone_icon') ?>" >
      <a href="tel:(617) 965-0800" class="inline headerPhone LBold"><?php the_field('phone_number') ?></a>
    </div>
    <div class=" col-sm-4 col-md-4 col-lg-3 col-xl-2 text-center text-sm-right mt-1">
      <a href="#logoSlider" class="contactBtn LBlack" ><?php the_field('contact_button') ?></a>
    </div>

  </div>
  <p class="thankYouTitle LH"><?php the_field('thank_you_title') ?></p>
  <div class="thankYouTitleUnderLine"></div>
  <p class="thankYouSubtitle LR"><?php the_field('thank_you_subtitle') ?></p>
  <p class="thankYouText LR"><?php the_field('thank_you_text') ?></p>
</div>
</div>
</div>
<?php get_footer(); ?>
