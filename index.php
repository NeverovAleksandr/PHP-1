<?php
$title = "minimalistica";
$h1_content = "GeekBrains. PHP Базовый.";
//Пустой h1 не допустим.
// 4.Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных.
$li_menu = "<li><a href=\"#\">home</a></li>
            <li><a href=\"homework.php\">ДЗ</a></li>
            <li><a href=\"#\">archive</a></li>
			<li><a href=\"#\">contact</a></li>";
$h2_details = "<a href=\"#\">Nunc commodo euismod massa quis vestibulum</a>";
$p_details = "posted 3 hours ago in <a href=\"#\">general</a>";
$p_body = "Nunc eget nunc libero. Nunc commodo euismod massa quis vestibulum. Proin mi nibh, dignissim a pellentesque at, ultricies sit amet sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lorem eu libero laoreet facilisis. Aenean placerat, ligula quis placerat iaculis, mi magna luctus nibh, adipiscing pretium erat neque vitae augue. Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.";
$h3_col = "<a href=\"#\">Ut enim risus rhoncus</a>";
$p_col = "Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. 
		  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
	      Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit.
		  Phasellus diam sapien, fermentum a eleifend non, luctus non augue. 
		  Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. 
		  Donec a sem consequat tortor posuere dignissim sit amet at.";
$p_col_1 ="&not; <a href=\"#\">read more</a>";
$h3_col_2 ="<a href=\"#\">Maecenas iaculis leo</a>";
$p_col_2 ="Quisque consectetur odio ut sem semper commodo. 
			Maecenas iaculis leo a ligula euismod condimentum. 
			Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
			Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor.
			Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. 
			Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. 
			Donec a sem consequat tortor posuere dignissim sit amet at.";
$p_col_3 ="&not; <a href=\"#\">read more</a>";
$h3_col_last ="<a href=\"#\">Quisque consectetur odio</a>";
$p_col_last ="Quisque consectetur odio ut sem semper commodo. 
			Maecenas iaculis leo a ligula euismod condimentum. 
			Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
			Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. 
			Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. 
			Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat.
			Donec a sem consequat tortor posuere dignissim sit amet at.";
$p_col_last_2 ="&not; <a href=\"#\">read more</a>";
$p_footer ="Copyright &copy; <em>minimalistica</em> &middot; Design: Luka Cvrk, <a href=\"http://www.solucija.com\" title=\"Free CSS Templates\">Solucija</a>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title><?= $title ?></title>
</head>
<body>
	<div id="content">
		<h1><?= $h1_content ?></h1>
		<ul id="menu">
			<?= $li_menu ?>
		</ul>
		<div class="post">
			<div class="details">
				<h2><?= $h2_details ?></h2>
				<p class="info"><?= $p_details ?></p>
			</div>
			<div class="body">
				<p><?= $p_body ?></p>
			</div>
			<? echo "<div class=\"x\"></div>"; ?>
		</div>
		<div class="col">
		    <h3><?=$h3_col?></h3>
			<p><?=$p_col?></p>
			<p><?=$p_col_1 ?></p>
		</div>
		<div class="col">
		    <h3><?=$h3_col_2 ?></h3>
		    <p><?=$p_col_2 ?></p>
		    <p><?=$p_col_3 ?></p>
		</div>
		<div class="col_last">
		    <h3><?=$h3_col_last ?></h3>
		    <p><?=$p_col_last ?></p>
		    <p><?=$p_col_last_2 ?></p>
		</div>
		<div id="footer">
			<?= date('Y') ?>
			<p><?=$p_footer ?></p>
		</div>
	</div>
</body>
</html>