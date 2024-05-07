<?php
class HomeView {
    public function render($success = '', $error = '') {
        // Hiển thị giao diện đăng nhập
        require 'lib/smarty/libs/Smarty.class.php';
        $smarty = new Smarty;
        $smarty->assign('success', $success); // Truyền biến $success vào template
        $smarty->assign('error', $error);     // Truyền biến $error vào template
        $smarty->display('tpl/home.tpl');
    }
}
?>
