
<pre id="debug" class="text-center">

        <?php foreach ($data as $string):?>
            <p style="text-align:center;"><?php echo $string->autor;?></p>
            <p style="text-align:left;"><?php echo $string->title;?></p>
            <p style="text-align:left;"><?php echo $string->text;?></p>
            <a href="/index.php?id_news=<?=$string->id ?>">Перейти</a>
            <a href="/index.php?id_news_delete=<?=$string->id ?>">Удалить</a>
        <?php endforeach;?>

</pre>