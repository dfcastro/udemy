<?php 

class Usuario{

	private $idUsuario;
	private $deslogin;
	private $dessenha;
	private $dtCadastro;

	public function getIdUsuario()
	{
		return $this->idUsuario;
	}

	public function setIdUsuario($idUsuario)
	{
		$this->idUsuario = $idUsuario;
	}

	public function getDeslogin()
	{
		return $this->deslogin;
	}

	public function setDeslogin($deslogin)
	{
		$this->deslogin = $deslogin;
	}

	public function getDessenha()
	{
		return $this->dessenha;
	}

	public function setDessenha($dessenha)
	{
		$this->dessenha = $dessenha;
	}

	public function getDtCadastro()
	{
		return $this->dtCadastro;
	}

	public function setDtCadastro($dtCadastro)
	{
		$this->dtCadastro = $dtCadastro;
	}

	public function loadById($id)
	{
		$sql = new Sql;
		$results= $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id
		));

		if(count($results)>0)
		{
			$row = $results[0];

			$this->setIdUsuario($row['idusuario']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtCadastro(new DateTime ($row['dtcadastro']));
		}

	}

	public function __toString(){
		return json_encode(array(
			"idusuario"=>$this->getIdUsuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtCadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
		));
	}
}




 ?>