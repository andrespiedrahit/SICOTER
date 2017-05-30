
function middlewarecomprobarPermisoInvitado($this, $localStorage, $sessionStorage, rolInvitado) {
    if ($sessionStorage.usuario.id_rol == rolInvitado) {
        $this.next();
    } else {
        $this.redirectTo('/login');
    }
}

