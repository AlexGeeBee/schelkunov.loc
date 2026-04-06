<?php

namespace src\controllers;

use src\models\Article;
use src\models\User;
use src\exceptions\NotFoundException;
use src\exceptions\InvalidArgumentException;

class ArticlesController extends Controller {

    public function index() {
        $articles = Article::findAll();
        $this->view->renderHTML('articles/index.php', ['articles' => $articles]);
    }

    public function view($id) {
        $article = Article::getById($id);

        if ($article !== null) {
            $this->view->renderHTML('articles/view.php', ['article' => $article]);
        }
        else {
            throw new NotFoundException();
        }
        
    }

    public function edit($id) {
        $article = Article::getById($id);
        if ($article === null) {
            throw new NotFoundException();
        }

        if (!empty($_POST)) {
            $article->updateFromArray($_POST);
        }

        $this->view->renderHTML('articles/edit.php', ['article' => $article]);
    }

    public function add() {

        if ($this->user === null) {
            throw new UnauthorizedException();
        }
        
        if (!empty($_POST)) {

            try {
                $article = Article::create($_POST, $_FILES['img'], $this->user);
            }
            catch (InvalidArgumentException $e) {
                $this->view->renderHtml('articles/add.php', ['error' => $e->getMessage()]);
                return;
            }
        }

        $this->view->renderHtml('articles/add.php');
    }

    public function delete($id) {
        $article = Article::getById($id);

        if ($article === null) {
            throw new NotFoundException();
        }
        $article->delete();
    }
}