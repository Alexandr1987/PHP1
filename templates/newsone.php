
<pre id="debug" class="text-center">

        <?php foreach ($data as $string):?>
            <?php if($string->id == $_GET['id_news']):?>
                <p style="text-align:center;"><?php echo $string->autor;?></p>
                <p style="text-align:left;"><?php echo $string->title;?></p>
                <p style="text-align:left;"><?php echo $string->text;?></p>
                <a href="/index.php">Назад</a>
            <?php endif;?>
        <?php endforeach;?>

</pre>