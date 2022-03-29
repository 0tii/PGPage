<?php 
class Controller{
    private $request = null;
    private $template = '';

    public function __construct($request){
        $this->request = $request;
        $this->template = !empty($request['view'])? $request['view'] : 'encrypt';
    }

    public function display(){
        $view = new View();
        $view->setTemplate($this->template);
        return $view->loadTemplate();
    }
}
?>