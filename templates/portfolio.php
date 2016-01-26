<div class="portfolio">
    <h3 id="blog_h3">Have a look at our portfolio.</h3>
</div>
<div class="hleb_main">

    <div class="hleb">
        <span>You are:</span>
        <span id="hleb_span1">blog/</span>
        <a href="#">back</a>
    </div>
</div>
<div class="clear"></div>

<div class="main_menu">
    <div class="in_main_menu">
        <ul class="portfolio_menu">
            <li><a href="#">All </a></li>
            <li><a href="#">Web Design  </a></li>
            <li><a href="#">Branding   </a></li>
            <li><a href="#">Photography  </a></li>
            <li><a href="#">Development</a></li>
        </ul>
    </div>
</div>

<div class="clear"></div>

<div class="portfolio_content">
    <?php foreach ($data as $value):?>
    <div class="in_portfolio_content in_portfolio_content<?php echo $value->id; ?>">
        <a href="#">
            <div class="wrap_img_portfolio">
                <div class="wrap_img_bg">
                    <img src="<?php echo $value->img; ?>" width="300" height="260" alt="">
                </div>
            </div>
            <h3><?php echo $value->title; ?></h3>
            <p>
                <?php echo $value->description; ?>
            </p>
        </a>
    </div>
    <? endforeach; ?>

</div>
<div class="clear"></div>