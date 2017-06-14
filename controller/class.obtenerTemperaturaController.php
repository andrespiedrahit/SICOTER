<?php

class obtenerTemperatura extends controllerExtended {

    public function main(\request $request) {
        try {
            $this->loadTemperatura();
            $temperaturaDAO = new temperaturaDAOExt($this->getConfig());
            $respuesta1 = $temperaturaDAO->select();
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

    private function loadTemperatura() {
        require $this->getConfig()->getPath() . 'model/table/table.temperatura.php';
        require $this->getConfig()->getPath() . 'model/interface/interface.temperatura.php';
        require $this->getConfig()->getPath() . 'model/DAO/class.temperaturaDAO.php';
        require $this->getConfig()->getPath() . 'model/extended/class.temperaturaDAOExt.php';
    }

}
