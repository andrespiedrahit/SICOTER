<?php

class obtenerHumedadR extends controllerExtended {

    public function main(\request $request) {
        try {
            $this->loadRelativa();
            $relativaDAO = new relativaDAOExt($this->getConfig());
            $respuesta1 = $relativaDAO->select();
            $respuesta2 = array(
                'code' => ($respuesta1 > 0) ? 200 : 500,
                'datos' => $respuesta1
            );

            $this->setParam('rsp', $respuesta2);
            $this->setView('imprimirJson');
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    private function loadRelativa() {
        require $this->getConfig()->getPath() . 'model/table/table.relativa.php';
        require $this->getConfig()->getPath() . 'model/interface/interface.relativa.php';
        require $this->getConfig()->getPath() . 'model/DAO/class.relativaDAO.php';
        require $this->getConfig()->getPath() . 'model/extended/class.relativaDAOExt.php';
    }

}
