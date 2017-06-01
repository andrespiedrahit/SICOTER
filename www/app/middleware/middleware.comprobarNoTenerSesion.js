function middlewarecomprobarNoTenerSesion($this, $localStorage, $sessionStorage, rolAdmin) {
    if (typeof $sessionStorage.usuario == "undefined") {
        $this.next();
    } else {
        if ($sessionStorage.usuario.id_rol == rolAdmin) {
            $this.redirectTo('/inicioSistemaControl');
        } else {
            $this.redirectTo('/moduloInteractuar');
        }
    }
}
