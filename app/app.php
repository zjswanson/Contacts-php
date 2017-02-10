<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Contact.php';

    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig', array('contacts' => Contact::getAll()));
    });

    $app->post("/create", function() use ($app) {
        $newContact = new Contact($_POST['contact-name'],$_POST['phone'],$_POST['address']);
        $newContact->saveContact();
        return $app['twig']->render('create_contact.html.twig', array('contact' => $newContact));
    });

    $app->get("/create", function() use ($app) {
        return $app['twig']->render('create_contact.html.twig');
    });

    $app->get("/edit", function() use ($app) {
        return $app['twig']->render('edit.html.twig', array('contacts' => Contact::getAll()));
    });

    $app->post("/delete_one", function() use ($app) {
        $index = $_POST['index'];
        Contact::deleteOne($index);
        return $app['twig']->render('edit.html.twig', array('contacts' => Contact::getAll()));
    });

    $app->post("/edit_one", function() use ($app) {
        $index = $_POST['index'];
        $editContact=Contact::getAll()[$index];
        var_dump($editContact);

        return $app['twig']->render('create_contact.html.twig', array('contact' => $editContact));
    });

    $app->get("/delete", function() use ($app) {
        Contact::deleteAll();
        return $app['twig']->render('delete.html.twig');
    });

    return $app;
?>
