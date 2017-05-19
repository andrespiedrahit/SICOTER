function middlewareComprobarPermisoInvitado($this, $localStorage, $sessionStorage, rolInvitado) {
  if ($sessionStorage.usuario.rol == rolInvitado) {
    $this.next();
  } else {
    $this.redirectTo('/login');
  }
}

