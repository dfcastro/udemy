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
			$this->setData($results[0]);
		}

	}

	public static function  getList()
	{
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
	}

	public static function search($login)
	{
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios where deslogin LIKE :SEARCH order by deslogin", array(
':SEARCH'=>"%".$login."%"
		));
	}

	public function login($login, $password)
	{
		$sql = new Sql;
		$results= $sql->select("SELECT * FROM tb_usuarios WHERE deslogin= :LOGIN AND dessenha = :PASSWORD", array(
			":LOGIN"=>$login,
			":PASSWORD"=>$password
		));

		if(count($results)>0)
		{
			
			$this->setData($results[0]);
		}
		else
		{
			throw new Exception('Login ou senha invalidos');
		}

	}

	public function setData($data)
	{
			$this->setIdUsuario($data['idusuario']);
			$this->setDeslogin($data['deslogin']);
			$this->setDessenha($data['dessenha']);
			$this->setDtCadastro(new DateTime ($data['dtcadastro']));
	}

	public function insert()
	{
		$sql = new Sql();
		$results= $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
			':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha()
		));
		if(count($results)>0)
		{
			$this->setData($results[0]);
		}
	}

	public function update($login,$password)
	{
		$this->setDeslogin($login);
		$this->setDessenha($password);
		$sql = new Sql();
		$sql->query("UPDATE tb_usuarios SET deslogin= :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
			':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha(),
			':ID'=>$this->getIdUsuario()
		));
	}

	public function delete()
	{
		sql = new Sql();
		sql->query("DELETE from tb_usuarios where idusuario=:ID", array(
			':ID'=>$this->getIdUsuario()

			$this->setIdUsuario(0);
			$this->setDeslogin("");
			$this->setDessenha("");
			$this->setDtCadastro(new DateTime());

		));
	}

	public function __construct($login="", $password="")
	{
		$this->setDeslogin($login);
		$this->setDessenha($password);
	}

	public function __toString()
	{
		return json_encode(array(
			"idusuario"=>$this->getIdUsuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtCadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
		));
	}
}






 ?>