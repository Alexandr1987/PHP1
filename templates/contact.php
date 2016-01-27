<div class="blog">
    <h3 id="blog_h3">Blog</h3>
</div>
<div class="hleb_main">
    <div class="hleb">
        <span>You are:</span>
        <span id="hleb_span1">blog/</span>
        <a href="#">back</a>
    </div>
</div>
<div class="clear"></div>
<div class="content_blog">
    <div class="left_blog">
        <div class="in_left_blog">
            <div class="ice">
                <p class="mart"><span class="mar1">23</span> </br><span class="mar">mar</span></p>
                <div class="in_ice">
                    <h3>Mountaine ice view</h3>
                    <img class="img_avtor_1" src="img/ico-admin-post.jpg" alt="">
                    <a href="#"> admin</a>
                    <img class="img_avtor_1" src="img/ico-metki-post.jpg" alt="">
                    <a href="#"> admin,</a>
                    <a href="#"> admin,</a>
                    <a href="#"> admin,</a>
                    <a href="#"> admin</a>
                </div>
            </div>
            <div class="post_img"><img src="http://lorempixel.com/640/300" alt=""></div>
        </div>
        <p class="post_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, reprehenderit consectetur beatae sunt atque in nostrum dolores! Neque, dolorem, adipisci, voluptatibus quibusdam magnam suscipit quo tempore natus ducimus alias quam voluptatem facilis debitis reiciendis et animi repellendus ratione nobis non corporis delectus enim rem maiores dignissimos iusto nemo ipsam architecto libero optio ipsum dolorum in perspiciatis sequi iure esse possimus ab laboriosam quod porro exercitationem. Impedit commodi nisi vel necessitatibus laudantium ab et deleniti explicabo.</br></br> Quaerat, libero, possimus quasi perferendis quas debitis accusamus delectus in impedit amet dolorem omnis earum suscipit eligendi iure illum excepturi quod totam dolores est odit numquam dignissimos recusandae officiis dolore mollitia asperiores dolor pariatur rerum repellendus error nesciunt reiciendis aliquam. </br></br>Quos, veritatis possimus ipsum unde aspernatur non nobis. Totam, error voluptatibus cum facere repellendus natus perferendis a optio. Accusantium, itaque, incidunt commodi sequi dolores rerum ullam similique assumenda? Deleniti, corrupti distinctio adipisci autem suscipit dicta voluptates ipsa eum atque inventore. </br></br>Numquam, eligendi, perspiciatis nisi ex quia maxime tempora vitae inventore excepturi nostrum voluptas suscipit quas voluptatum explicabo minima? Sapiente, unde magnam ut voluptas ratione eligendi nihil nemo consectetur ad vitae facilis velit odio aut et repudiandae non expedita fugit temporibus magni rerum id impedit minus.</p>
        <h3 class="andry">Author: Andy</h3>
        <div class="post_autor">
            <img src="img/avtor-post.jpg" alt="">
            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. </p>
        </div>
    </div>
    <div class="right_bar">
        <div class="navigation">
            <h3>Categories</h3>
            <ul class="right_navigation">
                <li><a href="#">News</a></li>
                <li><a href="#">Documentation</a></li>
                <li><a href="#">Feedback</a></li>
                <li><a href="#">Plugins</a></li>
                <li><a href="#">Support Forums</a></li>
                <li><a href="#">Themes</a></li>
            </ul>
        </div>
        <div class="navigation">
            <h3>Tags</h3>
            <ul class="right_navigation two">
                <li><a href="#">Docume</a></li>
                <li><a href="#">Feedb</a></li>
                <li><a href="#">Plugins</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Themes</a></li>
                <li><a href="#">Plugins</a></li>
                <li><a href="#">Suppo</a></li>
                <li><a href="#">Theme</a></li>
                <li><a href="#">Suppo</a></li>
                <li><a href="#">Theme</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="coments-main">
    <div class="in_coments-main">
        <h2>Coments(23)</h2>
        <?php foreach ($data as $string):?>

        <div class="coments">
            <div class="coments-single">
                <div class="coments-avtor">
                    <img src="img/<?php echo $string->img; ?>" alt="">
                    <p><a href="#"><?php echo $string->name; ?></a></p>
                </div>
                <div class="coment-text">
                    <div class="coment-bg"></div>
                    <p class="coment-head">
                        <span class="coment-date"><?php echo $string->data; ?></span>
                        <span class="coment-replay"><a href="#">Reply</a></span>
                    </p>
                    <p><?php echo $string->text; ?>
                    </p>
                    <!--<form action="" method="post">
                        <input type="hidden" name="comentdelete" value="<?php //echo $string->id; ?>">
                        <button class="comentdelete">Удалить</button>
                    </form>-->
                </div>
            </div>
        </div>
        <? endforeach; ?>
    </div>



</div>
<div class="clear"></div>
<div class="main_form">
    <div class="main_in_form">
        <h2>Add a comment</h2>
        <div class="coment">
            <form class="coment-form" id="form" method="POST">
                <input name="name" class="ctext" type="text" placeholder="Name*">
                <input name="mail" class="cmail" type="email" placeholder="Email*">
                <br>
                <textarea name="text" class="carea" type="textarea" placeholder="Your Coment"></textarea>
                <br>
                <button id="submit" class="join">Отрпавить</button>
            </form>

        </div>
    </div>
</div>
<div class="clear"></div>
<script>
    $(document).ready(function() {

        var footer1 = $('.footer1');
        var footer2 = $('.footer2');
        var tl = new TimelineMax();
            tl.to(footer1, 2, {opacity:1, left:0, backgroundColor:"#24292b"}),
            tl.to(footer2, 2, {opacity:1, backgroundColor:"#252525"},'-=1')
    });
</script>