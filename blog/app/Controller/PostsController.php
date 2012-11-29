<?php

	class PostsController extends AppController {
		public $helpers = array("Html", "Form");
		public $components = array("Session");
	
		// action
		// /posts/index
		public function index(){
			$todasAsPostagens = $this->Post->find('all');
			
			// jogar pra VIEW
			$this->set('posts', $todasAsPostagens);
		}

		// /posts/view/3
		public function view($id = null){

			// setar o Post com id == 3;
			$this->Post->id = $id;

			//procurar no banco o item com id == 3
			$p = $this->Post->read();

			// enviando para a VIEW os campos do item
			$this->set('post', $p);
		}

		// /posts/add
		public function add(){
			# se for enviado um POST pegar os dados do form e salvar no banco
			if ($this->request->is('post')) {

				# 
				$dadosDoFormulario = $this->request->data;

				# tentar salvar os dados no banco
				# se conseguir salvar, mostrar uma MSG e REDIRECIONAR pra o INDEX
				if ($this->Post->save($dadosDoFormulario)) {
					# mostrar MSG
					$this->Session->setFlash("A Postagem foi inserida com sucesso!");

					# redirecionar para o index
					$this->redirect(array('action' => 'index'));
				}


			}
		}


	}