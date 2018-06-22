<?php


	echo $this->Form->create('Usuario');
	echo $this->Form->input('login');
	echo $this->Form->input('senha');

	echo $this->Form->input('Enviar',array('label' => FALSE, 'type' => 'submit'));
	echo $this->Form->end();








?>