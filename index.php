<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/style_blog.css">
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<script>window.jQuery || document.write('<script src="js/jquery-1.8.min.js">\x3C/script>')</script>
<?php require __DIR__.'/autoload.php'; ?>

</head>
<body style="background:#fff;">
<div class="karkas_blog">
	<div class="header_wrap">
		<div class="header">
			<a href="/index.php?id=index" class="logo" alt="img"><div class="img" ></div></a>
			<div class="menu">
				<ul >
					<li><a href="/index.php?id=contact" >Contact</a></li>
					<li><a href="/index.php?id=portfolio" >Portfolio</a></li>
					<li><a href="/index.php?id=index">About</a></li>
				</ul>
				<a href="#" id="pull">Menu</a>
			</div>

		</div>
	</div>

	<div class="clear"></div>


				<?php $view = new App\View(); ?>

				<?php if($_GET['id']=='index' || $_GET['id']==''):?>
					<?php $data = About::findAll(); ?>
					<?php $team = Team::findAll();?>
					<?php $view->display('index.php',$data,$team);?>
				<?php endif;?>


				<?php if($_GET['id']=='contact'):?>
					<?php $data = Contact::findAll();?>
					<?php $view->display('contact.php',$data);?>
				<?php endif;?>

				<?php if($_GET['id']=='portfolio'):?>
					<?php $data = Portfolio::findAll();?>
					<?php $view->display('portfolio.php',$data);?>
				<?php endif;?>


	<footer>
		<div class="footer_blog">
			<div class="footer1 footer_blog1">
				<ul class="footer1_menu">
					<p class="signup">NEWSLETTER SIGNUP</p>
					<li>
						<input type="submit"  value="Join US" class="join">
					</li>
					<li>
						<input type="text" placeholder="YOUR EMAIL">
					</li>
					<li>
						<input type="text" placeholder="YOUR NAME">
					</li>
				</ul>
			</div>
		</div>
		<div class="footer_blog2">
			<div class="footer2">
				<p>Copyright 2012 Simply. All Rights Reserved.</p>
				<ul class="icons">
					<li><a href="#"><img src="img/frss.jpg" alt=""></a></li>
					<li><a href="#"><img src="img/fskype.jpg" alt=""></a></li>
					<li><a href="#"><img src="img/ftwittr.jpg" alt=""></a></li>
					<li><a href="#"><img src="img/ffacebook.jpg" alt=""></a></li>
				</ul>
				<ul class="footer_menu">
					<li><a href="#">Contacts     &#160;&#160;&#160;&#160;|</a></li>
					<li><a href="#">Support    &#160;&#160;&#160;&#160;|</a></li>
					<li><a href="#">Login </a></li>
				</ul>
			</div>
		</div>
	</footer>

</div>

<!-- jQuery -->


<script>
	$( document ).ready(function() {
		$('#submit').on('click', function (event) {
			event.preventDefault();
			var name = $('input[name=name]').val();
			var mail = $('input[name=mail]').val();
			var text = $('textarea[name=text]').val();
			$.ajax({
				url: 'controler/response.php',
				method: 'POST',
				data: {
					name: name,
					mail: mail,
					text: text,
				},
				beforeSend: function () {
					//alert('go')
				},

			}).done(function (data) {
				var resp = JSON.parse(data);
				$('<div class="coments"><div class="coments-single"><div class="coments-avtor"><img src="img/" alt=""><p><a href="#">' + resp.name + '</a></p></div><div class="coment-text"> <div class="coment-bg"></div><p class="coment-head"><span class="coment-date">' + resp.data + '</span><span class="coment-replay"><a href="#">Reply</a></span></p><p>' + resp.text + '</p></div></div></div>').appendTo('.in_coments-main');
				//alert('done');
			});
		});
	});
</script>
<script>
	$( document ).ready(function() {
		$('.comentdelete').on('click', function (event) {
			event.preventDefault();
			var comentdelete = $('input[name=comentdelete]').val();
			$.ajax({
				url: 'controler/responseDelete.php',
				method: 'POST',
				data: {
					comentdelete: comentdelete,
				},
				beforeSend: function () {
					//alert('go')
				},
			}).done(function () {
				var id = '#remove_' + comentdelete;
				$(id).remove();
				alert('done');
			});
		});
	});
</script>
<script type="text/javascript">
	$(function() {
		var pull 		= $('#pull');
		menu 		= $('.menu ul');
		menuHeight	= menu.height();

		$(pull).on('click', function(e) {
			e.preventDefault();
			menu.slideToggle();
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	});

</script>

<!-- Syntax Highlighter -->

<script src="js/CSSPlugin.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/TimelineMax.min.js"></script>

<script>
	$(document).ready(function() {
		var logo_top = $('.logo');
		var menu = $('.menu');
		var about = $('.about');
		var tl = new TimelineMax();
		tl.to(logo_top, 3, {rotation:-1440}),
			tl.to(menu, 3, { color:'#fff',right:0}, '-=3'),
			tl.to(about, 3, { opacity:1,left:0}, '-=2')
	});
	$(document).ready(function() {

		var inAbouth2 = $('.in_about h2');
		var inAboutP = $('.in_about p');
		var tl = new TimelineMax();
		tl.to(inAbouth2, 3, {opacity:1,bottom:0}),
			tl.to(inAboutP, 3, {opacity:1,bottom:0}, '-=2')
	});

</script>
<script>
	$(document).on("scroll", function() {
		$('.bag').each(function() {
			if ($(this).position().top <= $(document).scrollTop() + $(window).height()) {
				var bag1 = $('.bag1');
				var bag2 = $('.bag2');
				var bag3 = $('.bag3');
				var bag4 = $('.bag4');
				var footer1 = $('.footer1');
				var footer2 = $('.footer2');
				var tl = new TimelineMax();
				tl.to(bag1, 1, {opacity:1}),
					tl.to(bag2, 1, {opacity:1}),
					tl.to(bag3, 1, {opacity:1}),
					tl.to(bag4, 1, {opacity:1}),
					tl.to(footer1, 2, {opacity:1, left:0, backgroundColor:"#24292b"},'-=2'),
					tl.to(footer2, 2, {opacity:1, backgroundColor:"#252525"},'-=2')
			}

		});

	});
</script>
<script>
	$(document).ready(function() {
		var logo_top = $('.logo');
		var menu = $('.menu ul li a');
		var about = $('.portfolio');
		var in_portfolio_content1 = $('.in_portfolio_content1');
		var in_portfolio_content2 = $('.in_portfolio_content2');
		var in_portfolio_content3 = $('.in_portfolio_content3');
		var in_portfolio_content4 = $('.in_portfolio_content4');
		var in_portfolio_content5 = $('.in_portfolio_content5');
		var in_portfolio_content6 = $('.in_portfolio_content6');
		var in_portfolio_content7 = $('.in_portfolio_content7');
		var in_portfolio_content8 = $('.in_portfolio_content8');
		var in_portfolio_content9 = $('.in_portfolio_content9');
		var footer1 = $('.footer1');
		var footer2 = $('.footer2');
		var tl = new TimelineMax();
		tl.to(logo_top, 1, {left:300,repeat:1, yoyo:true}),
			tl.to(menu, 3, { color:'#fff',right:0}, '-=3'),
			tl.to(about, 3, { opacity:1,left:0}, '-=2'),
			tl.to(in_portfolio_content1, 1, {scale:1,opacity:1}),
			tl.to(in_portfolio_content2, 1, {scale:1,opacity:1}),
			tl.to(in_portfolio_content3, 1, {scale:1,opacity:1}),
			tl.to(in_portfolio_content4, 1, {scale:1,opacity:1}),
			tl.to(in_portfolio_content5, 1, {scale:1,opacity:1}),
			tl.to(in_portfolio_content6, 1, {scale:1,opacity:1}),
			tl.to(in_portfolio_content7, 1, {scale:1,opacity:1}),
			tl.to(in_portfolio_content8, 1, {scale:1,opacity:1}),
			tl.to(in_portfolio_content9, 1, {scale:1,opacity:1}),
			tl.to(footer1, 2, {opacity:1, left:0, backgroundColor:"#24292b"}),
			tl.to(footer2, 2, {opacity:1, backgroundColor:"#252525"},'-=1')
	});
</script>


</body>
</html>