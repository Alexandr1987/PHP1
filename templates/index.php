
<div class="about">
    <h3 id="blog_h3">Learn more about our company.</h3>
</div>
<div class="hleb_main">
    <div class="hleb">
        <span>You are:</span>
        <span id="hleb_span1">blog/</span>
        <a href="#">back</a>
    </div>
</div>
<div class="clear"></div>
<?php foreach ($data as $string):?>
<div class="about_content">
    <div class="in_about">

        <h2><?php echo $string->text; ?></h2>
            <p><?php echo $string->content; ?></p>


        <h2 id="team">My Team</h2>
    </div>
</div>
<? endforeach; ?>

<div class="clear"></div>

<div class="team_foto">
    <div class="in_team_foto">
        <?php foreach ($team as $member):?>
        <div class="bag bag1">
            <a class="partner" href="#" alt="foto">
                <img src="img/<?php echo $member->foto; ?>" alt="">
                <h4><?php echo $member->name; ?><span>/ <?php echo $member->position; ?></span></h4>
                <p><?php echo $member->about; ?></p>

            </a>
        </div>
        <? endforeach; ?>
    </div>
</div>
<div class="clear"></div>


