<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Описание сайта">
	<meta name="keywords" content="Ключевые слова">

	<?php require __DIR__.'/autoload.php'; ?>
	<link rel="shortcut icon" href="" type="img/x-icon">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
	<title>PHP1</title>
	<!-- [if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]>--></head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-6">
				<form class="form-horizontal" action="" role="form" style="padding-top:40px;" id="form" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-sm-2 control-label">Автор</label>
						<div class="col-sm-10">
							<input type="text" name="autor" class="form-control"  placeholder="Имя"></div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Название</label>
						<div class="col-sm-10">
							<input type="text" name="title" class="form-control"  placeholder="Название статьи"></div>
					</div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Статья</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="text" id="statya" placeholder="Статья"></textarea>
                        </div>
                    </div>


					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button class="btn btn-default" id="submit">Отрпавить</button>
						</div>
					</div>
				</form>
				<form class="form-horizontal" action="img_upload.php" role="form" style="padding-top:40px;" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="exampleInputFile">File input</label>
						<input type="file" id="exampleInputFile" name="image">
						<p class="help-block">Выберите файл</p>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button class="btn btn-default" id="submit">Отрпавить</button>
						</div>
					</div>
				</form>

			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-6">

				<?php $book = new News();?>
				<?php if(!empty($_POST['title']) && !empty($_POST['text']) && !empty($_POST['autor'])):?>
					<?php $book->insert($_POST['title'],$_POST['text'],$_POST['autor']);?>
				<? endif; ?>

				<?php $view = new View(); ?>
				<?php $data = $book->findAll(); ?>
				<?php if($_GET['id_news']==''):?>
					<?php $view->display('index.php',$data);?>
				<?php endif;?>

				<?php if($_GET['id_news']!=''):?>
					<?php $view->display('newsone.php',$data);?>
				<?php endif;?>

				<?php if($_GET['id_news_delete']!=''):?>
					<?php $book->deleteById($_GET['id_news_delete']);?>
				<?php endif;?>

			</div>
		</div>

	</div>

</body>
</html>

