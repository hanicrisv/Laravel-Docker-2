@role('admin')
    <h2>Hola, administrador 👑</h2>
@endrole

@can('crear usuarios')
    <p>Tienes permiso para crear usuarios.</p>
@endcan
