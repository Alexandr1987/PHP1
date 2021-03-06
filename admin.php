<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Miminium</title>
    <?php require __DIR__.'/autoload.php'; ?>
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="css/admin/bootstrap.min.css">
    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="css/admin/plugins/font-awesome.min.css"/>
	<link href="css/admin/style.css" rel="stylesheet">
	<!-- end: Css -->
	<link rel="shortcut icon" href="img/logomi.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <![endif]-->
  </head>
 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand">
                 <b>MIMIN</b>
                </a>
              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>Akihiko Avaron</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                        <li><a href=""><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li ><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->
      <div class="container-fluid mimin-wrapper">
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="fa-home fa"></span>Pages
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="page1.html">Dashboard v.1</a></li>
                          <li><a href="page2.html">Dashboard v.2</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->

          <!-- start: content -->
            <div id="content">
                <div class="col-md-12" style="padding:20px;">
                    <div class="row">
                        <div class="col-md-6">
                            <div>

                                <?php $firstAbout = About::findAll();?>
                                <?php foreach($firstAbout as $value):?>
                                <?php echo $value->text;?><br>
                                <?php echo $value->content;?><br>
                                    <form role="form" method="post" action="admin/controler/AboutUpdate.php">
                                        <div class="form-group">
                                            <input name="text" type="text" class="form-control" id="exampleInputEmail1" placeholder="Company Name">
                                        </div>
                                        <textarea name="content" class="form-control" rows="3" placeholder="Text"></textarea>
                                        <input name="id" type="hidden" value="<?php echo $value->id;?>">
                                        <button type="submit" class="btn btn-default">Обновить</button>
                                    </form>
                                <?php endforeach;?>
                            </div>
                            <div>
                                <?php $works= Portfolio::findAll();?>
                                <?php foreach($works as $value):?>
                                <div class="in_portfolio_content in_portfolio_content<?php echo $value->id; ?>" style="width:200px;float:left;margin:8px;">
                                        <div class="wrap_img_portfolio">
                                            <div class="wrap_img_bg">
                                                <img src="<?php echo $value->img;?>" width="150" height="130" alt="">
                                            </div>
                                        </div>
                                        <h3><?php echo $value->title; ?></h3>
                                        <p>
                                            <?php echo $value->description; ?>
                                        </p><form role="form" method="post" action="admin/controler/PorfolioUpdate.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
                                        </div>
                                        <input name="id" type="hidden" value="<?php echo $value->id; ?>">
                                        <textarea name="description" class="form-control" rows="3" placeholder="Description"></textarea>
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <input type="file" id="exampleInputFile" name="image">
                                            <p class="help-block">Выберите файл</p>
                                        </div>
                                        <button type="submit" class="btn btn-default">Обновить</button>
                                        <a href="/admin/controler/PortfolioDelit.php?delid=<?php echo $value->id;?>"><button type="button" class="btn btn-default">Удалить</button></a>
                                    </form>
                                </div>

                                <?php endforeach;?>
                                <form role="form" method="post" action="admin/controler/PorfolioInsert.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
                                    </div>
                                    <textarea name="description" class="form-control" rows="3" placeholder="Description"></textarea>
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <input type="file" id="exampleInputFile" name="image">
                                        <p class="help-block">Выберите файл</p>
                                    </div>

                                    <button type="submit" class="btn btn-default">Добавить</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <?php $firstTeam= Team::findAll();?>
                            <?php foreach($firstTeam as $value):?>
                            <div style="width:200px;float:left;margin:8px;">
                                <?php echo $value->name;?><br>
                                <?php echo $value->position;?><br>
                                <img src="img/<?php echo $value->foto;?>" width='100' alt="sf"><br>
                                <?php echo $value->about;?><br><br>
                                <a href="/admin/controler/TeamDelit.php?delid=<?php echo $value->id;?>"><button type="button" class="btn btn-default">Удалить</button></a><br>
                            </div>
                            <?php endforeach;?>
                            <form role="form" method="post" action="admin/controler/TeamInsert.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input name="position" type="text" class="form-control" id="exampleInputEmail1" placeholder="Position">
                                </div>
                                <textarea name="description" class="form-control" rows="3" placeholder="Description"></textarea>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile" name="image">
                                    <p class="help-block">Выберите файл</p>
                                </div>
                                <button type="submit" class="btn btn-default">Добавить</button>
                            </form>
                        </div>
                    </div>

                </div>
			</div>
          <!-- end: content -->
      </div>
      <!-- start: Mobile -->
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
  </body>
</html>