<?php
require_once('SoapDiscovery.class.php');

class SoapServers extends SoapDiscovery{
    private $content = '';
    private $filePath = '';
      
    /**  
     * SoapServers::__construct() SoapServers class Constructor.
     *   
     * @param string $class_name  
     * @param string $service_name  
     **/  
    public function __construct($class_name = '', $service_name = '') {
        require_once($class_name.".php");
        parent::__construct($class_name,$service_name);
    }

    /**
     * Set File Path
     * @param string $filePath
     */
    public function setFilePath($filePath = ''){
        $this->filePath = $filePath;  
    }

    /**
     * Set WSDL File Content
     **/
    public function setWsdlContent(){
        $this->content = $this->getWsdl(); 
    }

    /**
     * Create WSDL file
     *
     * @return bool|int
     */
    public function createWsdlFile(){
        return file_put_contents($this->filePath,$this->content);
    }
}