<!doctype html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
	<title><?=$title?> | Rare Consultancy</title>
	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="<?= base_url('/assets/css/aos.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css') ?>">	
	<link rel="stylesheet" href="<?= base_url('/assets/css/imp.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/custom-animate.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/flaticon.css') ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="<?= base_url('/assets/css/owl.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/magnific-popup.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/scrollbar.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/hiddenbar.css') ?>">
   
    <link rel="stylesheet" href="<?= base_url('/assets/css/color.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/assets/css/custom.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/responsive.css') ?>">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('/assets/images/favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" href="<?= base_url('/assets/images/favicon/favicon-32x32.png') ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= base_url('/assets/images/favicon/favicon-16x16.png') ?>" sizes="16x16">
</head>
<body>

<div class="boxed_wrapper">

<div class="preloader"></div>

<div class="main-content">

<?= $this->include('templates/includes/header') ?>

<?= $this->renderSection('content') ?>

</div>
<?= $this->include('templates/includes/footer') ?>

<button class="scroll-top scroll-to-target thm-bgc4" data-target="html" data-aos="slide-up" data-aos-easing="linear" data-aos-duration="1100">
    <span class="fa fa-long-arrow-up"></span>
</button>
</div>
<?= $this->include('templates/includes/scripts') ?>
<?= $this->renderSection('javascript') ?>
</body>
</html>