<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$supported_languages = array(
    'german',
    'english'
);

session_start();

if (empty($_SESSION['used']) || isset($_GET['reset'])) {
    $_SESSION['used'] = array();
}

if (isset($_POST['lang'])) {
    $_SESSION['lang'] = $_POST['lang'];
} elseif (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

$snippets = json_decode(file_get_contents('snippets.json'));


if (empty($_SESSION['lang']) || !in_array($_SESSION['lang'], $supported_languages)) {
    $language = 'german';
    $language = $snippets->{$language}->language;

    $template = 'view/language.php';
} else {
    $content = json_decode(file_get_contents('content.json'));

    $countAll = count($content);
    $countDone = count($_SESSION['used']);

    if ($countAll == $countDone) {
        $finish = $snippets->{$_SESSION['lang']}->finish;
        $template = 'view/finish.php';
        $_SESSION['used'] = array();
    } else {
        do {
            $next = mt_rand(0, ($countAll - 1));
        } while (in_array($next, $_SESSION['used']));

        $_SESSION['used'][] = $next;

        $neverHaveIEver = $content[$next]->{$_SESSION['lang']};

        $game = $snippets->{$_SESSION['lang']}->game;
        $template = 'view/game.php';
    }
}

include 'view/index.php';