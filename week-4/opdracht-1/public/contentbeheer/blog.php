<?php include '../../private/init.php'; ?>
<?php include SHARED_PATH . '/header.php'; ?>
<h1>
    Blogs
</h1>
<?php
    $bestand = fopen( 'blog.txt', 'r');

    while(!feof ($bestand)){
        $blogregel = fgets($bestand);
    }
?>
<?php include SHARED_PATH . '/footer.php'; ?>