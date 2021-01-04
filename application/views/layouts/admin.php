<!DOCTYPE html>
<html lang="tj" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?=$title?></title>
		<meta name="description" content="Modern effects and styles for off-canvas navigation with CSS transitions and SVG animations using Snap.svg" />
		<meta name="keywords" content="sidebar, off-canvas, menu, navigation, effect, inspiration, css transition, SVG, morphing, animation" />
		<meta name="author" content="Codrops" />

		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="/public/admin/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/public/admin/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="/public/admin/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="/public/admin/css/menu_topside.css" />
		<link rel="stylesheet" type="text/css" href="/public/admin/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/public/admin/css/media.css" />
	</head>
	<body>
		<div class="my_container" >
			<div class="menu-wrap" >
				<nav class="menu-top">
					<div class="profile"><img src="/public/admin/images/user1.png" alt="Абдушакур Савзаев"/><span>Абдушакур Савзаев</span></div>
					<div class="icon-list">
						<a href="/admin/index"><i class="fa fa-home" aria-hidden="true"></i></a>
						<a href="/admin/index"><i class="fa fa-fw fa-bell-o"></i></a>
						<a href="#"><i class="fa fa-fw fa-envelope-o"></i></a>
						<a href="#"><i class="fa fa-fw fa-comment-o"></i></a>
					</div>
				</nav>
				<nav class="menu-side">
					<a href="/admin/add">Добавить пост</a>
					<a href="/admin/post">Посты</a>
					<a href="/admin/setting">Настройка</a>
					<a href="/admin/logout">Выход</a>
				</nav>
			</div>
			<? if( $this->route["action"] != 'login') echo '<button class="menu-button" id="open-button">Open Menu</button>';?>
			<div class="content-wrap" >
				<div  class="content" id="particles-js">
					<header class="codrops-header">
						<? if( $this->route["action"] == 'index') echo '<h1>'.$title.' </h1>'; ?>

					</header>
					<div class="main" >
						<?=$content?>
					</div>
				</div>
			</div><!-- /content-wrap -->
		</div><!-- /my_container -->
		<!-- JS  -->
		<script src="/public/admin/js/classie.js"></script>
		<script src="/public/admin/js/main.js"></script>
		<script src="/public/scripts/jquery.js"></script>
		<script src="/public/scripts/form.js"></script>
		<script src="/public/admin/js/particles.min.js"></script>
		<script src="/public/admin/js/app.js"></script>
	</body>
</html>