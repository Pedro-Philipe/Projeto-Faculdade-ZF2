<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Funcionario;

class FuncionarioController extends AbstractActionController{
    public function indexAction()
    {
    	$funcionarios = $this->getServiceLocator()->get('Application\Model\FuncionarioTable')->findAll();
        return new ViewModel([
        	'funcionarios' => $funcionarios
        ]);
    }
    public function graficoAction()
    {
    	$funcionarios = $this->getServiceLocator()->get('Application\Model\FuncionarioTable')->findAll();
        return new ViewModel([
        	'funcionarios' => $funcionarios
        ]);
    }
    public function createAction(){
    	if($this->getRequest()->isPost()){
    		$data = $this->params()->fromPost();
    		$funcionario = new Funcionario();
    		$funcionario->exchangeArray($data);
    		$table = $this->getServiceLocator()
    		->get('Application\Model\FuncionarioTable');
    		$table->insert($funcionario);
    		return $this->redirect()->toUrl('/application/funcionario/index');
    	}
    	return new ViewModel();
    }
    public function editAction(){
    	$table = $this->getServiceLocator()
    		->get('Application\Model\FuncionarioTable');
    	if($this->getRequest()->isPost()){
    		$data = $this->params()->fromPost();
    		$funcionario = new Funcionario();
    		$funcionario->exchangeArray($data);
    		$table->update($funcionario);
    		return $this->redirect()->toUrl('/application/funcionario/index');
    	}
    	$funcionario = $table->find($this->params()->fromRoute('id'));
    	return new ViewModel([
    		'funcionario' => $funcionario
    	]);
    }
    public function deleteAction(){
    	$table = $this->getServiceLocator()->get('Application\Model\FuncionarioTable');
    	$funcionario = $table->delete($this->params()->fromRoute('id'));
    	return $this->redirect()->toUrl('/application/funcionario/index');
    }
}
