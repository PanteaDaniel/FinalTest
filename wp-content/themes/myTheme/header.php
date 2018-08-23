<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">


	<?php wp_head();?>

</head>
<body >
	<div class="header_bg">

  <div class="container bg" >
		<div class="row">


			<div class="col-sm-4 col-md-3 col-xl-2">
				<img class="" src="<?php the_field('header_logo') ?>" >
			</div>
			<div class="col-sm-4 offset-md-1 col-md-4 offset-lg-3 col-lg-3 offset-xl-6 col-xl-2 text-right phoneContainer">
				<img class="phoneIcon" src="<?php the_field('phone_icon') ?>" >
				<a href="#" class="inline headerPhone LBold"><?php the_field('phone_number') ?></a>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2 text-right mt-1">
				<a href="#" class="contactBtn LBlack" ><?php the_field('contact_button') ?></a>
			</div>

		</div>

  </div>
