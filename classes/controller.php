<?php 
class Controller{
    private $request = null;
    private $template = '';

    public function __construct($request){
        $this->request = $request;
        $this->template = !empty($request['mode'])? $request['mode'] : 'encrypt';
    }

    public function display(){
        $view = new View();
        $view->setTemplate($this->template);
        return $view->loadTemplate();
    }
}
?>