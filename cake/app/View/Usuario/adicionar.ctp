<html>
	<script type="text/javascript" src="/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="/bootstrap/dist/css/bootstrap.min.css"/>






</html>

<?php


	echo $this->Form->create('Usuario');
	echo $this->Form->input('login');
	echo $this->Form->input('senha');

	echo $this->Form->input('Salvar',array('label' => FALSE, 'type' => 'submit' ));
	echo $this->Form->end();








?>