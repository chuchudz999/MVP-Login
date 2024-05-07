<?php
require_once 'config.php';
require_once 'Presenter/LoginPresenter.php';

$presenter = new LoginPresenter();
$presenter->handleRequest();
