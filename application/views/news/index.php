<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <div id="main">
        <?php echo $news_item['text'] ?><br/>
        <?php echo $news_item['date'] ?><br/>
    </div>
    <p><a href="<?php echo $news_item['slug'] ?>">View article</a></p>

<?php endforeach ?>