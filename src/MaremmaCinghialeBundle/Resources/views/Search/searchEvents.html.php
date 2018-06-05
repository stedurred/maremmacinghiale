<?php $view->extend('base.html.php');?>

<?php $view['slots']->set('title', 'MaremmaCinghialeBundle:Search:searchEvents') ?>

<?php $view['slots']->start('body') ?>


    <h1>Welcome to the Search:searchEvents page</h1>

    <?php foreach ($eventi as $evento): ?>


        <h1><?php dump($evento) ?></h1>

    <?php endforeach ?>
<?php $view['slots']->stop() ?>
