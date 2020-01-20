<?php
class todoController extends controller {
	public function __construct () {
		parent::__construct();
	}
	public function index() {

	}
	public function listar() {

		$array = array();
		$t = new Tarefas;
		$array = $t->listar();

		header("Content-Type: application/json");
		echo json_encode($array);

	}
	public function add() {
		if(issett($_POST['titulo']) && !empty($_POST['titulo'])){
			$titulo = addslashes($_POST['titulo']);

			$t = new Tarefas;
			$t->addTarefa($titulo);
		}

	}
	public function del() {

	}
	public function update() {

	}

}

?>