<?php

class agregarUsuario extends controllerExtended {

    public function main(\request $request) {
        try {
            $this->loadTableUsuario();
            $usuario= new usuario();
            $usuario->setNombre('nombre');
            $usuario->setApellido('apellido');
            $usuario->setCorreo('correo');
            $usuario->setContrasena($request->getParam('contrasena'),$this->getConfig()->getHash());
            $usuario->setUsuario('usuario');
            
            $usuarioDAO=new usuarioDAOExt($this->getConfig());
            $rspt1=$usuarioDAO->insert($usuario);
            
            if(count($rspt1)>0){
                $rspt1=$usuarioDAO->select();
                $rspt2= array(
                    'codigo'=>200,
                    'datos'=>$rspt1
                );
            } else {
                $rspt2=array(
                    'codigo'=>500,
                    'datos'=>$rspt1
                );
            }
            $this->setParam('rsp', $rspt2);
            $this->setView('imprimirJson');
            
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    private function loadTableUsuario(){
        require $this->getConfig()->getPath().'model/table/table.usuario.php';
        require $this->getConfig()->getPath().'model/interface/interface.usuario.php';
        require $this->getConfig()->getPath().'model/DAO/class.usuarioDAO.php';
        require $this->getConfig()->getPath().'model/extended/class.usuarioDAOExt.php';
    }
}
