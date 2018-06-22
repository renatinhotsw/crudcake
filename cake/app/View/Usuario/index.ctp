<h4><?php echo $this->Html->link('Adicionar', array('action' => 'adicionar')); ?></h4>
<table>
    <tr>
        <th style="width:65px;text-align:center;">Código</th>
        <th>Nome</th>
        <th>Login</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php
    foreach ($usuario as $usuario) {
        ?>
        <tr>
            <td><?php echo $usuario['usuario']['id']; ?></td>
            <td><?php echo $usuario['usuario']['nome']; ?></td>
            <td><?php echo $usuario['usuario']['login']; ?></td>
            <td><?php echo $usuario['usuario']['email']; ?></td>
            <td><?php echo $this->Html->link('Editar', array('action' => 'editar', $usuario['Usuarios']['id'])); ?>
                | <?php echo $this->Html->link(
                    'Excluir', array(
                        'action' => 'excluir',
                        $usuario['Usuario']['id']), array('confirm' => 'Você tem certeza que quer excluir este usuário?')
                ); ?></td>
        </tr>
    <?php
    }
    ?>
</table>