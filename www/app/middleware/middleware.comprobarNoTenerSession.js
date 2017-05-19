function  middlewarecomprobarNoTenerSession($this,$localStorage,$sessionStorage, $rolAdmin){
    if(typeof $sessionStorage.usuario == "undefined"){
        this.next();
        console.log("Hola vicky");
    }
    else{
        if($sessionStorage.usuario.rol == $rolAdmin){
            $this.redirectTo('/inicioSistemaControl');
            console.log("Hola vicky1");
        }else{
            $this.redirectTo('/modulo');
            console.log("Hola vicky2");
        }
    }
}


