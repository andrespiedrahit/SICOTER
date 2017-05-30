function middlewarecomprobarNoTenerSesion($this, $localStorage, $sessionStorage, rolAdmin) {
    if (typeof $sessionStorage.usuario == "undefined") {
        $this.next();
        console.log('vicky');
    } else {
        if ($sessionStorage.usuario.id_rol == rolAdmin) {
            console.log('vickyy');
            $this.redirectTo('/inicioSistemaControl');
        } else {
            $this.redirectTo('/moduloInteractuar');
            console.log('vickyi');
        }
    }
}
