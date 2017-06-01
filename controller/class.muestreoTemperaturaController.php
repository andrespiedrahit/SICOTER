<?php 
class muestreoRelativa extends controllerExtended {

    public function main(\request $request) {
        try {
            $this->loadTableRelativas();
            $variableDAO = new variableDAOExt($this->getConfig());
            $this->setParam('data', $variableDAO->select());
            $this->setView('json');
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    private function loadTableRelativas() {
        require $this->getConfig()->getPath() . 'model/table/table.temperatura.php';
        require $this->getConfig()->getPath() . 'model/interface/interface.temperatura.php';
        require $this->getConfig()->getPath() . 'model/DAO/class.temperaturaDAO.php';
        require $this->getConfig()->getPath() . 'model/extended/class.temperaturaDAOExt.php';
    }

}
