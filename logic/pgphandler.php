<?php

//TODO functions not class

class PgpHandler{
    private $pgp = new gnupg();

    private $valid = false;
    private $fingerprint = '';
    private $public = false;

    public function __construct($keyString){
        $keyInfo = $this->pgp->import($keyString);

        echo($keyInfo);

        $this->valid = ($keyInfo['imported'] != 0);
        $this->fingerprint = $keyInfo['fingerprint'];
        $this->public = ($keyInfo['secretimported'] == 0);
    }

    public function verify(){
        return $this->valid;
    }

    //todo exceptions 
    public function decrypt($msg, $pwd){
        if(!$this->public) return false;

        $this->pgp->adddecryptkey($this->fingerprint, $pwd);

        return $this->pgp->decrypt($msg);
    }
}
?>