<?php
echo $this->Form->create('Usuario');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('login');
echo $this->Form->input('nome');
echo $this->Form->input('email');
echo $this->Form->input('Alterar', array('type' => 'submit', 'label' => FALSE));
echo $this->Form->end();
?>