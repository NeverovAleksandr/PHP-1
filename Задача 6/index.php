<?php
include('page.php');
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<!-- Верхняя часть страницы -->
<header>
<section class="header container">
<img src="images/logo.png" class="logo" width="101" height="56" alt="Логотип">
<h1><strong><?= $h1_header ?></strong></h1>
<nav>
    <ul>
		<li><a href='<?=$Menu[0]['href']?>'><?=$Menu[0]['link']?></a></li>
		<li><a href='<?=$Menu[1]['href']?>'><?=$Menu[1]['link']?></a></li>
		<li><a href='<?=$Menu[2]['href']?>'><?=$Menu[2]['link']?></a></li>
	</ul>
</nav>
</section>
</header>
<!-- Верхняя часть страницы -->
<img src="./images/fots.jpg" alt="фото">
<h1 class="head_content container"><?=$welcome?></h1>
<!-- Заголовок -->
<blockquote>
	<?
		echo "Сегодня {$day}-{$mon}-{$year}";
	?>
</blockquote>
<!-- Область основного контента -->
<main id="capital_page" class="container">
    <h3 class="capital_welcome"><?=$h3_capital_welcome?></h3>
    <article>
        <p><?=$p_capital_page?></p>
    </article>

</main>
<!-- Область основного контента -->
<!-- Нижняя часть страницы -->
	<footer>
	 	<p class="">&copy;2000-<?=$year?> <!--год--><span><?=COPYRIGHT?></span></p>
	</footer>
<!-- Нижняя часть страницы -->

</body>
</html>
