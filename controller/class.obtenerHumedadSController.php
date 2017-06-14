<?php

class obtenerHumedadS extends controllerExtended {

    public function main(\request $request) {
        try {
            $this->loadSuelo();
            $sueloDAO = new sueloDAOExt($this->getConfig());
            $respuesta1 = $sueloDAO->select();
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

    private function loadSuelo() {
        require $this->getConfig()->getPath() . 'model/table/table.suelo.php';
        require $this->getConfig()->getPath() . 'model/interface/interface.suelo.php';
        require $this->getConfig()->getPath() . 'model/DAO/class.sueloDAO.php';
        require $this->getConfig()->getPath() . 'model/extended/class.sueloDAOExt.php';
    }

}
