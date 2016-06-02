<?php
namespace Application\Model;
class Funcionario{
	private $id;
	private $nome;
	private $data_de_nascimento;
	private $pais_de_nascimento;
	private $escolaridade;
	private $uf;
	private $cidade;
	private $complemento;
	private $data_admissao;
	private $salario;
	private $telefone;
	private $email;

    public function getId()
    {
        return $this->id;
    }
    private function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getNome()
    {
        return $this->nome;
    }
    private function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }
    public function getData_de_nascimento()
    {
        return $this->endereco;
    }
    private function setData_de_nascimento($data_de_nascimento)
    {
        $this->data_de_nascimento = $data_de_nascimento;
        return $this;
    }
    public function getPais_de_nascimento()
    {
        return $this->pais_de_nascimento;
    }
    private function setPais_de_nascimento($pais_de_nascimento)
    {
        $this->pais_de_nascimento = $pais_de_nascimento;
        return $this;
    }
    public function getCor()
    {
        return $this->cor;
    }
    private function setCor($cor)
    {
        $this->cor = $cor;
        return $this;
    }
    public function getEscolaridade()
    {
        return $this->escolaridade;
    }
    private function setEscolaridade($escolaridade)
    {
        $this->escolaridade = $escolaridade;
        return $this;
    }
    public function getUf()
    {
        return $this->uf;
    }
    private function setUf($uf)
    {
        $this->uf = $uf;
        return $this;
    }
    public function getCidade()
    {
        return $this->cidade;
    }
    private function setCidade($uf)
    {
        $this->cidade = $cidade;
        return $this;
    }
    public function getComplemento()
    {
        return $this->complemento;
    }
    private function setComplemento($complemento)
    {
        $this->complemento = $complemento;
        return $this;
    }
    public function getData_admissao()
    {
        return $this->complemento;
    }
    private function setData_admissao($data_admissao)
    {
        $this->data_admissao = $data_admissao;
        return $this;
    }
    public function getSalario()
    {
        return $this->salario;
    }
    private function setSalario($salario)
    {
        $this->salario = $salario;
        return $this;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
    private function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }
    public function getEmail()
    {
        return $this->email;
    }
    private function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
	public function exchangeArray(array $data){
		$this->setId(isset($data['id'])?$data['id']:0)
			->setNome($data['nome'])
			->setData_de_nascimento($data['data_de_nascimento'])
			->setPais_de_nascimento($data['pais_de_nascimento'])
			->setCor($data['cor'])
			->setEscolaridade($data['escolaridade'])
			->setUf($data['uf'])
			->setCidade($data['cidade'])
			->setComplemento($data['complemento'])
			->setData_admissao($data['data_admissao'])
			->setSalario($data['salario'])
			->setTelefone($data['telefone'])
			->setEmail($data['email']);
	}
	public function getArrayCopy(){
		return [
			'id' => $this->getId(),
			'nome' => $this->getNome(),
			'data_de_nascimento' => $this->getData_de_nascimento(),
			'pais_de_nascimento' => $this->getPais_de_nascimento(),
			'escolaridade' => $this->getEscolaridade(),
			'uf' => $this->getUf(),
			'cidade' => $this->getCidade(),
			'complemento' => $this->getComplemento(),
			'data_admissao' => $this->getData_admissao(),
			'salario' => $this->getSalario(),
			'telefone' => $this->getTelefone(),
			'email' => $this->getEmail()
		];
	}
}
