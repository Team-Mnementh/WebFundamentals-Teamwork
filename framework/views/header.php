<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?= $data['title']?></title>
		<link type="text/css" rel="stylesheet" href="css/styles_v1.css">
		<!-- Add jQuery library -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

        <!-- Add fancyBox -->
        <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript">
        	$(document).ready(function() {
        		$(".fancybox").fancybox();
        	});
        </script>
	</head>
	<body>
		<header>
		<h1>Soft Uni <span>Fun Zone</span></h1>

		<nav>
			<ul>
				<li><a href="/">Начало</a></li>
				<li><a href="#">Смях</a>
					<ul>
						<li><a href="jokes">Вицове</a></li>
						<li><a href="poems">Лирика</a></li>
						<li><a href="tales">Приказки</a></li>
					</ul>
				</li>				
				<li><a href="quiz">Тест</a></li>
				<li><a href="dreamer">Съновник</a></li>
				<li><a href="pictures">Снимки</a></li>
				<li><a href="#">Видео</a>
					<ul>
						<li><a href="clips">Клипове</a></li>
						<li><a href="lectures">Лекции</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>