<?php
class todoController extends controller {

  


    public function listar() {
    	$array = array();

    	$t = new Tarefas();
    	$array = $t->listar();

    	header("Content-Type: application/json");
    	echo json_encode($array);
    }

    public function add() {
    	if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
    		$titulo = ($_POST['titulo']);

    		$t = new Tarefas();
    		$t->addTarefa($titulo);
    	}
    }

    public function del() {
    	if(isset($_POST['id']) && !empty($_POST['id'])) {
    		$id = addslashes($_POST['id']);

    		$t = new Tarefas();
    		$t->delTarefa($id);
    	}
    }

    public function update() {
    	if(isset($_POST['id']) && !empty($_POST['id'])) {
    		$id = addslashes($_POST['id']);
    		$status = addslashes($_POST['status']);

    		$t = new Tarefas();
    		$t->updateStatus($status, $id);
    	}
    }
    

}