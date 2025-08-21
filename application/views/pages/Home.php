<h1><?=$hello?></h1>
<ul>
    <?php foreach($posts as $row){?>
    <li><?= $row['username']?></li>
    <?php } ?>
</ul>