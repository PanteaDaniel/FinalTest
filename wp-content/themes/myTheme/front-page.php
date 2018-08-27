<?php get_header(); ?>


<div class="header_bg">
  <div class="container">
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

  </div>
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


      <form id="demo-form" data-parsley-validate="" action="<?php echo get_page_link( get_page_by_title("Thank You Page")->ID ); ?>" method="post" enctype="text/plain" class="text-center">
  <input type="text" placeholder="First Name*:" name="firstname" data-parsley-name data-parsley-required="true" data-parsley-required-message="Please Insert Your First Name"/>
  <input type="text" placeholder="Last Name*:" name="lastname" data-parsley-name data-parsley-required="true" data-parsley-required-message="Please Insert Your Last Name"/>
  <input type="email" placeholder="Email*:" name="email" data-parsley-type="email" data-parsley-required="true" data-parsley-required-message="Please Insert Your Email">
  <input type="tel" placeholder="Phone:" name="tel" data-parsley-required="false" data-parsley-phone/>
  <input type="submit" value="GET MY LEAD GEN QUOTE" />
</form>
    </div>
  </div>
</div>
</div>

</div>

<img src="<?php echo get_template_directory_uri();?>/images/headerpat3_img.png" class="center-absolute"  alt="">
<img src="<?php echo get_template_directory_uri();?>/images/headerpat2_img.png" class="right-absolute"  alt="">
<div id="navbar">
  <div class="container">
  <a class="navitem active active-absolute" onclick="makeActive(this.id)" href="#sector1bg" id="sect1">SECT1</a>
  <a class="navitem" href="#sector2bg" onclick="makeActive(this.id)" id="sect2">SECT2</a>
  <a class="navitem" href="#sector3bg" onclick="makeActive(this.id)" id="sect3">SECT3</a>
  </div>
</div>

<div id="content">
  <div id="sector1bg">
    <div class="container">
      <p class="sector1Title text-center text-md-left LBlack"><?php the_field('sector1_title')?></p>
      <div class="sector1TitleUnderline mb-4"></div>
      <p class="sector1Text"><?php the_field('sector1_text1')?></p>
      <div class="d-flex flex-wrap flex-column flex-md-row justify-content-between sector1FlexContainer">
        <div class="sector1FlexItem">
          <img src="<?php the_field('sector1_column1_icon') ?>" />
          <p class="sector1ColumnTitle"><?php the_field('sector1_column1_title') ?></p>
          <div class="sector1ColumnTitleUnderline"></div>
          <p class="sector1ColumnText"><?php the_field('sector1_column1_text') ?></p>
        </div>
        <div class="sector1FlexItem mt-3 mt-md-0">
          <img src="<?php the_field('sector1_column2_icon') ?>" />
          <p class="sector1ColumnTitle"><?php the_field('sector1_column2_title') ?></p>
          <div class="sector1ColumnTitleUnderline"></div>
          <p class="sector1ColumnText pr-md-4 pl-md-4"><?php the_field('sector1_column2_text') ?></p>
        </div>
        <div class="sector1FlexItem mt-3 mt-lg-0">
          <img src="<?php the_field('sector1_column3_icon') ?>" />
          <p class="sector1ColumnTitle"><?php the_field('sector1_column3_title') ?></p>
          <div class="sector1ColumnTitleUnderline"></div>
          <p class="sector1ColumnText"><?php the_field('sector1_column3_text') ?></p>
        </div>
        <div class="sector1FlexItem mt-3 mt-lg-0">
          <img src="<?php the_field('sector1_column4_icon') ?>" />
          <p class="sector1ColumnTitle"><?php the_field('sector1_column4_title') ?></p>
          <div class="sector1ColumnTitleUnderline"></div>
          <p class="sector1ColumnText pr-md-5 pl-md-5 pr-md-3 pl-md-3"><?php the_field('sector1_column4_text') ?></p>
        </div>
      </div>
      <p class="sector1Text"><?php the_field('sector1_text2')?></p>
      <p class="sector1ListTitle LBold"><?php the_field('sector1_list_title')?></p>
      <ul class="listContainer">
        <li class="sector1ListText"><?php the_field('sector1_list_item1')?></li>
        <li class="sector1ListText"><?php the_field('sector1_list_item2')?></li>
        <li class="sector1ListText"><?php the_field('sector1_list_item3')?></li>
        <li class="sector1ListText"><?php the_field('sector1_list_item4')?></li>
      </ul>
      <p class="sector1Text"><?php the_field('sector1_text3')?></p>
      </div>
  </div>
  <div id="sector2bg">
    <div class="container">
      <p class="sector2Title LBlack text-center text-md-left"><?php the_field('sector2_title')?></p>
      <div class="sector2TitleUnderline"></div>
      <div class="d-flex flex-column flex-md-row justify-content-between text-center">
        <div>
          <img class="sector2flexItem w-100 " src="<?php the_field('sector2_img1') ?>" />
          <div><a href="#" class="sector2Btn"><?php the_field('sector2_btn1')?></a></div>
        </div>
        <div >
          <img class="sector2flexItem mw-100" src="<?php the_field('sector2_img2') ?>" />
          <div><a href="#" class="sector2Btn"><?php the_field('sector2_btn2')?></a></div>
        </div>
        <div >
          <img class="sector2flexItem w-100" src="<?php the_field('sector2_img3') ?>" />
          <div><a href="#" class="sector2Btn"><?php the_field('sector2_btn3')?></a></div>
        </div>
      </div>
    </div>
  </div>
  <div id="sector3bg">
    <div class="container">
      <p class="sector3Title LBlack text-center text-md-left"><?php the_field('sector3_title')?></p>
      <div class="sector3TitleUnderline"></div>
      <div class="d-flex flex-column flex-lg-row  justify-content-lg-between">
        <div class="flex-item mr-lg-2">
          <img src="<?php the_field('sector3_img1') ?>" class="mw-100"/>
        </div>
        <div class="flex-item videoContainer ml-lg-2 mt-3 mt-lg-0">
          <div class="relative">
            <img src="<?php the_field('sector3_video_thumbnail') ?>" class="mw-100"/>
            <div class="centered">
              <i class="far fa-play-circle play-btn" onclick="openPopup()"></i>
            </div>


          </div>
          <p class="videoTitle LR"><?php the_field('sector3_video_title')?></p>
        </div>
      </div>
      <div id="popupContainer">
        <i class="fas fa-times-circle close-video" onclick="closePopup()"></i>
        <iframe class="video" width="100%" height="100%" src="<?php the_field('sector3_video_link') ?>?enablejsapi=1" allowfullscreen frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div>
<div class="container" id="logoSlider">
  <p class="LBlack sector4Title"><?php the_field('sector4_title')?></p>
  <div class="sector4TitleUnderline"></div>
  <div class="logo-slider">
    <div><a href="<?php the_field('sector4_link1') ?>" target="_blank"><img class="p-0 slider_img" src="<?php the_field('sector4_logo1') ?>" /></a></div>
    <div><a href="<?php the_field('sector4_link2') ?>" target="_blank"><img class="p-0 slider_img" src="<?php the_field('sector4_logo2') ?>" /></a></div>
    <div><a href="<?php the_field('sector4_link3') ?>" target="_blank"><img class="p-0 slider_img" src="<?php the_field('sector4_logo3') ?>" /></a></div>
    <div><a href="<?php the_field('sector4_link4') ?>" target="_blank"><img class="p-0 slider_img" src="<?php the_field('sector4_logo4') ?>" /></a></div>
    <div><a href="<?php the_field('sector4_link5') ?>" target="_blank"><img class="p-0 slider_img" src="<?php the_field('sector4_logo5') ?>" /></a></div>
    <div><a href="<?php the_field('sector4_link6')?>" target="_blank"><img class="p-0 slider_img" src="<?php the_field('sector4_logo6') ?>" /></a></div>
    <div><a href="<?php the_field('sector4_link7') ?>" target="_blank"><img class="p-0 slider_img" src="<?php the_field('sector4_logo7') ?>" /></a></div>
    <div><a href="<?php the_field('sector4_link8') ?>" target="_blank"><img class="p-0 slider_img" src="<?php the_field('sector4_logo8') ?>" /></a></div>
    <div><a href="<?php the_field('sector4_link9') ?>" target="_blank"><img class="p-0 slider_img" class="p-0" src="<?php the_field('sector4_logo9') ?>" /></a></div>
    <div><a href="<?php the_field('sector4_link10') ?>" target="_blank"><img class="p-0 slider_img" src="<?php the_field('sector4_logo10') ?>" /></a></div>
  </div>
</div>







<?php get_footer(); ?>
