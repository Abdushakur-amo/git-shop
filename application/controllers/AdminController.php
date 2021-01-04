<?php

namespace application\controllers;

use application\core\Controller;

class AdminController extends Controller {



	public function loginAction() {
		if (isset($_SESSION['admin'])) {
			$this->view->redirect('/admin/index');
		}

		if (!empty($_POST)) {
			if (!$this->model->loginValidate($_POST)) {
				$this->view->message('error', $this->model->error);
			}
			$_SESSION['admin'] = true;
			$this->view->location('/admin/index');
		}

		$this->view->render('Вход на панель');// Дар экрани ползвател медихад
	}
	public function indexAction(){
		$this->view->render('Главни панел Администратор');
	}
	public function logoutAction() {
		unset($_SESSION['admin']);
		$this->view->redirect('/admin/login');
	}

	public function addAction() {
		if (!empty($_POST)) {
			if (!$this->model->postValidate($_POST, 'add')) {
				$this->view->message('error', $this->model->error);
			}
			$id = $this->model->postAdd($_POST);
			if (!$id) {
				$this->view->message('success', 'Ошибка обработки запроса');
			}
			$this->model->postUploadImage($_FILES['img']['tmp_name'], $id);
			$this->view->message('success', 'Пост добавлен');
		}
		$this->view->render('Добавить пост');
	}

	public function editAction() {
		$this->view->render('Админ edit');// Дар экрани ползвател медихад
	}

	public function deleteAction() {
		exit('Удалит');
	}

	public function postAction() {
		$this->view->render('Админ Пасти');
	}





} // EndClass