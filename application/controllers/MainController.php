<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {


	public function indexAction() {
		$this->view->render('Главная index');// Дар экрани ползвател медихад
	}

	public function aboutAction() {
		$this->view->render('Главная about');// Дар экрани ползвател медихад
	}

	public function contactAction() {
		$this->view->render('Главная contact');// Дар экрани ползвател медихад
	}

	public function postAction() {
		$this->view->render('Главная post');// Дар экрани ползвател медихад
	}





} // EndClass