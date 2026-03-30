<?php

namespace src\controllers;

use src\models\User;
use src\exceptions\InvalidArgumentException;

class UsersController extends Controller {
    public function signUp() {

        if (!empty($_POST)) {

            try {
                $user = User::signUp($_POST);
            }
            catch (InvalidArgumentException $e) {
                $this->view->renderHtml('user/signUp.php', ['error' => $e->getMessage()]);
                return;
            }

            if ($user instanceof User) {
                $this->view->renderHtml('user/signUpSuccess.php');
                return;
            }
        }

        $this->view->renderHtml('user/signUp.php');
    }
}