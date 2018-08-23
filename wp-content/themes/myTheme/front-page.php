<?php get_header(); ?>
<img src="<?php echo get_template_directory_uri();?>/images\headerpat1_img.png" class="left-absolute" alt="">
<div class="container">
  <div class="row">
    <div class="col-lg-8 ">
      <p class="headerTitle LBlack text-center text-lg-left"><?php the_field('header_title') ?></p>
      <p class="headerSubTitle LBlack text-center text-lg-left"><?php the_field('header_sub_title') ?></p>
      <p class="headerInfoText LR text-center text-lg-left"><?php the_field('header_info') ?></p>
    </div>
  <div class="col-lg-4 z-2 mt-4 mt-lg-0 mb-5 mb-lg-0">
    <div class="formBg ">
      <div class="formTitleBg w-100 text-center">
        <p class="formTitle LH"><?php the_field('form_title') ?></p>
        <div class="formTitleUnderline m-auto"></div>
      </div>
      <p class="formSubTitle LBold text-center"><?php the_field('form_sub_title') ?></p>
      <script src="<?php echo get_template_directory_uri();?>/scripts/jquery.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/scripts/parsley.min.js"></script>
      <form id="demo-form" data-parsley-validate="" class="text-center">
  <input type="text" placeholder="First Name*:" name="firstname" data-parsley-name data-parsley-required="true" data-parsley-required-message="Please Insert Your First Name"/>
  <input type="text" placeholder="Last Name*:" name="lastname" data-parsley-name data-parsley-required="true" data-parsley-required-message="Please Insert Your Last Name"/>
  <input type="email" placeholder="Email*:" name="email" data-parsley-type="email" data-parsley-required="true" data-parsley-required-message="Please Insert Your Email">
  <input type="tel" placeholder="Phone:" name="tel" data-parsley-required="false" data-parsley-phone/>
  <input type="submit" value="GET MY LEAD GEN QUOTE" />
</form>
<script type="text/javascript">

window.Parsley.addValidator('name', {
validateString: function(value) {
  var patt = new RegExp("^[a-zA-Z\s]+$");
  return patt.test(value);
},
messages: {
  en:'You Can Only Use Letters'
}
});
window.Parsley.addValidator('phone', {
validateString: function(value) {
  var patt = new RegExp("^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}$");
  return patt.test(value);
},
messages: {
  en:'It must be a US format phone number'
}
});

</script>
    </div>
  </div>

</div>
</div>
<img src="<?php echo get_template_directory_uri();?>/images\headerpat3_img.png" class="center-absolute"  alt="">
<img src="<?php echo get_template_directory_uri();?>/images\headerpat2_img.png" class="right-absolute"  alt="">
<?php get_footer(); ?>
