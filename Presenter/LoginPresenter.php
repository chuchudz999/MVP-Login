<?php
require_once 'Domain/UserModel.php';
require_once 'view/LoginView.php';
require_once 'view/HomeView.php';

class LoginPresenter {
    private $userModel;
    private $loginView;
    private $homeView;

    public function __construct() {
        $this->userModel = new UserModel($GLOBALS['conn']);
        $this->loginView = new LoginView($this);
        $this->homeView = new HomeView();
    }

    public function loginUser($username, $password) {
        $user = $this->userModel->getUserByUsername($username);
        if ($user && password_verify($password, $user['password'])) {
            // Đăng nhập thành công
            $this->homeView->render('Login successful!', '');
        } else {
            // Đăng nhập thất bại
            $this->loginView->render('', 'Login failed!');
        }
    }

    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->loginUser($_POST['username'], $_POST['password']);
        } else {
            $this->loginView->render('', '');
        }
    }
}

