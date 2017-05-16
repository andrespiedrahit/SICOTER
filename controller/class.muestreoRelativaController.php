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
        require $this->getConfig()->getPath() . 'model/table/table.variable.php';
        require $this->getConfig()->getPath() . 'model/interface/interface.variable.php';
        require $this->getConfig()->getPath() . 'model/DAO/class.variableDAO.php';
        require $this->getConfig()->getPath() . 'model/extended/class.variableDAOExt.php';
    }

}
