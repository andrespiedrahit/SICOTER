
function  middlewareComprobarPermisoDeAdmnistracion($this,$localStorage,$sessionStorage, rolAdmin){
    if($sessionStorage.usuario.id_rol == rolAdmin){
        $this.next();
    }else{
        $this.redirectTo('/login');
    }
    
}


