<?php

class muestreoTemperatura extends controllerExtended {

    public function main(\request $request) {
        try {
            $this->loadTableVariables();
            $variableDAO = new variableDAOExt($this->getConfig());
            $this->setParam('data', $variableDAO->select());
            $this->setView('json');
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    private function loadTableVariables() {
        require $this->getConfig()->getPath() . 'model/table/table.relativa.php';
        require $this->getConfig()->getPath() . 'model/interface/interface.relativa.php';
        require $this->getConfig()->getPath() . 'model/DAO/class.relativaDAO.php';
        require $this->getConfig()->getPath() . 'model/extended/class.relativaDAOExt.php';
    }

}
