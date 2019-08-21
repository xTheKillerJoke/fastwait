<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<meta name="title" content="Tienda Virtual">
	<meta name="description" content="Has tus compras de forma mas facil">
	<meta name="keywords" content="Tienda, Virtual, Shop, DropShipping">

	<title>DropShipping</title>

	<!--========================================================================================================-->

	<?php
		/* Fixed Route */
		$url = Route::ctrRoute();
		$server = Route::ctrRouteServer();
	?>

	<!--========================================================================================================-->
	<link rel="icon" type="image/png" href="#" />
	<!--========================================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vendor/bootstrap/css/bootstrap.min.css">
	<!--========================================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>views/css/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--========================================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>views/css/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--========================================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>views/css/fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vendor/animate/animate.css">
	<!--========================================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vendor/css-hamburgers/hamburgers.min.css">
	<!--========================================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vendor/animsition/css/animsition.min.css">
	<!--========================================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vendor/select2/select2.min.css">
	<!--========================================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vendor/daterangepicker/daterangepicker.css">
	<!--========================================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vendor/slick/slick.css">
	<!--========================================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vendor/MagnificPopup/magnific-popup.css">
	<!--========================================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--========================================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>views/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>views/css/main.css">
	<!--========================================================================================================-->

</head>

<body class="animsition">

	<?php
		/* Header */
		include "modules/header.php";
		/* =============================================================================================== */
		
		/* Dynamic Content */
		$routes = array();
		$route = null;

		if (isset($_GET["route"]))
		{
			$routes = explode("/", $_GET["route"]);

			$item = "route";
			$val = $routes[0];

			/* Friendly URL'S of Categories */
			$routeCategories = ProductsController::ctrShowCategories($item, $val);

			if($val == $routeCategories["route"])
			{
				$route = $val;
			}
			/* =============================================================================================== */
			
			/* Friendly URL'S of Sub-Categories */
			$routeSubCategories = ProductsController::ctrShowSubCategories($item, $val);
			
			foreach($routeSubCategories as $key => $value)
			{
				if ($val == $value["route"])
				{
					$route = $val;
				}
			}
			/* =============================================================================================== */

			/* Friendly URL'S of Products */
			$routeProducts = ProductsController::ctrShowProductDetail($item, $val);
		
			var_dump($routeProducts["route"]);

			/* =============================================================================================== */
			
			/* White list of Friendly URL'S */
			if($route != null)
			{
				include "modules/products.php";
			}
			else
			{
				include "modules/error404.php";
			}
			/* =============================================================================================== */
		}
		else
		{
			include "modules/slide.php";
			include "modules/featured.php";
			include "modules/overview.php";
		}
		/* =============================================================================================== */
	?>

	<!--===============================================================================================-->
	<script src="<?php echo $url; ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo $url; ?>vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo $url; ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo $url; ?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo $url; ?>vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function () {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="<?php echo $url; ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo $url; ?>vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo $url; ?>vendor/slick/slick.min.js"></script>
	<script src="<?php echo $url; ?>views/js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo $url; ?>vendor/parallax100/parallax100.js"></script>
	<script>
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script src="<?php echo $url; ?>vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function () { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
					enabled: true
				},
				mainClass: 'mfp-fade'
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="<?php echo $url; ?>vendor/isotope/isotope.pkgd.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo $url; ?>vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function (e) {
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function () {
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function () {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function () {
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function () {
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="<?php echo $url; ?>vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function () {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function () {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="<?php echo $url; ?>views/js/main.js"></script>
	<!--===============================================================================================-->

</body>

</html>