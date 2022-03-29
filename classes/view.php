<?php 
class View{
    //path to template
    private $path = 'templates';
    //template name
    private $template = 'default';

    // this will contain variables to be embedded in the template
    private $_ = array();

    //add a key-value pair to aray _
    public function assign($key, $value){
        $this->_[$key] = $value;
    }

    //sets a template by name
    public function setTemplate($template = 'default'){
        $this->template = $template;
    }

    //load template
    public function loadTemplate(){
        $tpl = $this->template;
        $file = $this->path . DIRECTORY_SEPARATOR . $tpl . '.php';
        $exists = file_exists($file);

        if($exists){
            // start output buffer
            ob_start();

            include($file);
            $output = ob_get_contents();
            ob_end_clean();

            return $output;
        }else{
            return 'Unknown error loading template.';
        }
    }
}
?>