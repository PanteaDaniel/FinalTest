<?php wp_footer(); ?>
<div class="footerLine"></div>
<div class="container">
  <div class="row">
    <div class="col-md-4 footerLogo text-center text-md-left">
      <a href="https://www.insegment.com/" target="_blank"><img src="<?php the_field('footer_logo_insegment') ?>"></a>
      <p class="footerTradeMark LR pt-3"><?php the_field('footer_text_insegment') ?></p>
    </div>
    <div class="col-md-4">
      <div class="text-center footerSocials">
        <a href="#"><img class="footerSocialLogo" src="<?php the_field('footer_logo1') ?>"/></a>
        <a href="#"><img class="footerSocialLogo" src="<?php the_field('footer_logo2') ?>"/></a>
        <a href="#"><img class="footerSocialLogo" src="<?php the_field('footer_logo3') ?>"/></a>
        <a href="#"><img class="footerSocialLogo" src="<?php the_field('footer_logo4') ?>"/></a>
      </div>
      <p class="footerInfo LR"><a style="color: #292929;" href="https://maps.google.com/?q=<?php the_field('footer_text_adress')?>" target="_blank"><?php the_field('footer_text_adress')?></a> | <a href="https://www.insegment.com/" target="_blank" style="color: #292929;"><?php the_field('footer_text_insegment_link') ?></a></p>
    </div>
    <div class="col-md-4 col-lg-3 offset-lg-1 footerPartner text-center text-md-right">
      <a href="#"><img src="<?php the_field('footer_partner_logo') ?>" class="mw-100"/></a>
    </div>
  </div>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/scripts/parsley.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/scripts/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/scripts/scripts.js"></script>

</body>
</html>
