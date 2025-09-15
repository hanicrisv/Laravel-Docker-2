@role('admin')
    <h2>Hola, usuario</h2>
@endrole

@can('crear usuarios')
    <p>Tienes permiso de usuarios.</p>
@endcan
