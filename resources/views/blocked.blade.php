<!DOCTYPE html>
<html lang="en" dir="rtl">

<!-- Mirrored from big-bang-studio.com/neptune/neptune-rtl/pages-403.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 11:12:28 GMT -->
<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Title -->
		<title>خطا</title>

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../vendors/bootstrap4-rtl/css/bootstrap.min.css">
		<link rel="stylesheet" href="../vendors/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">

		<!-- Neptune CSS -->
		<link rel="stylesheet" href="css/core.css">

		<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="bg-purple">

		<div class="error-message text-xs-center">
			<h1 class="mb-3">ورود ممنوع<span><i class="ti-na"></i></span></h1>
			<h5 class="text-uppercase">کاربر گرامی ورود شما در سیستم ممنوع میباشد</h5>
			<div class="error-message-text mb-3">برای حل مشکل تان با مدیر سیستم در ارتباط شوید</div>
			<a href="{{ route('logout') }}"
				 onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
					<button type="submit" class="btn btn-outline-white w-min-md">برگشت</button></a>
		</div>

		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				@csrf
		</form>

		<!-- Vendor JS -->
		<script type="text/javascript" src="../vendors/jquery/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="../vendors/tether/js/tether.min.js"></script>
		<script type="text/javascript" src="../vendors/bootstrap4-rtl/js/bootstrap.min.js"></script>
	</body>

<!-- Mirrored from big-bang-studio.com/neptune/neptune-rtl/pages-403.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jan 2017 11:12:28 GMT -->
</html>
