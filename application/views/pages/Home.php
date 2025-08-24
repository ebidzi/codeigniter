<h1><?=$hello?></h1>
<ul>
    <?php foreach($posts as $row){?>
    <li><a href="<?= base_url()?><?= $row['id']?>"><?= $row['username']?></a></li>
    <?php } ?>
</ul>