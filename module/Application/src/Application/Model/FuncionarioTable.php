<?php
namespace Application\Model;
use Zend\Db\TableGateway\TableGateway;
class FuncionarioTable{
	private $tableGateway;
	public function __construct(TableGateway $tableGateway){
		$this->tableGateway = $tableGateway;
	}
	public function findAll(){
		$resultSet = $this->tableGateway->select();
		return $resultSet;
	}
	public function find($id){
		$resultSet = $this->tableGateway->select(['id' => $id]);
		$object = $resultSet->current();
		return $object;
	}
	public function insert(Funcionario $funcionario){
		$this->tableGateway->insert($funcionario->getArrayCopy());
	}
	public function update(Funcionario $funcionario){
		$oldFuncionario = $this->find($funcionario->getId());
		if($oldFuncionario){
			$this->tableGateway->update($funcionario->getArrayCopy(),
				['id' => $oldFuncionario->getId()]);
		}else{
		  throw new \Exception("Funcionario não encontrado");
	   }
	}
	public function delete($id){
		$this->tableGateway->delete(['id' => $id]);
	}
}
