<html>
    <head>
        <title><?= isset($title) ? $title : "Assalamualaikum" ?></title>
    </head>
    <body>
        <?= $this->renderSection('content') ?>
    </body>
</html>