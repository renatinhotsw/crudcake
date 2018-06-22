<?php

class UsuarioController extends AppController{
		public $helpers = array("Form", "Html");

		public function index(){
			$this -> set ("title", "Usuários");
			$usuarios = $this->Usuario->find('all');
			$this->set('USUARIOS',$usuarios);
		}//index

		
		
		public function adicionar() {	
        $this->set('title', 'Adicionar usuário');
 
        if ($this->request->is("post")) {
            $this->Usuario->create();
 
            if ($this->Usuario->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__("Usuário salvo com sucesso."));
                $this->redirect(array("action" => '/index/'));
            } else {
                $this->Session->setFlash(__("Erro: não foi possível salvar o usuário."));
                $this->redirect(array("action" => '/adicionar/'));
            }
        }
    }


		public function editar($id = NULL) {
        $this->set("title", "Editar Usuário");
        $this->Usuario->id = $id;
        if (!$this->Usuario->exists()) {
            throw new NotFoundException(__('Registro não encontrado.'));
        }
 
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Usuario->saveAssociated($this->request->data)) {
                $this->Session->setFlash(__('Registro salvo com sucesso.'));
                $this->redirect(array('action' => '/index/'));
            } else {
                $this->Session->setFlash(__('Erro: não foi possível salvar o registro.'));
            }
        } else {
            $this->request->data = $this->Usuario->read(NULL, $id);
        }
    }





}	//UsuarioController


?>