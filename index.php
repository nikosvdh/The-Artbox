<?php include_once('oeuvres.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <title>The ArtBox</title>
</head>

<body>
    <?php include_once('header.php'); ?>
    <main>
        <div id="liste-oeuvres">

            <?php if(!empty($oeuvres)) : ?>
            <?php foreach($oeuvres as $oeuvre) : ?>
            <?php if(!empty($oeuvre)) : ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $oeuvre['id']?>">
                    <img src="<?php echo $oeuvre['img_src'] ?>" alt="<?php echo $oeuvre['title'] ?>">
                    <h2><?php echo $oeuvre['title'] ?></h2>
                    <p class="description"><?php echo $oeuvre['artist'] ?></p>
                </a>
            </article>
            <?php endif; ?>
            <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </main>
    <?php include_once('footer.php'); ?>
</body>

</html>