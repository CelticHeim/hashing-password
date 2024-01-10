<x-layouts.app title="Usuarios Registrados">
  <div class="container mt-4">
    <h1>Usuarios Registrados</h1>
    <table class="table table-bordered table-center">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Email</th>
          <th>Contraseña Cifrada</th>
          <th>Contraseña En Texto Plano</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
            <td class="align-middle">{{ $user->name }}</td>
            <td class="align-middle">{{ $user->email }}</td>
            <td class="align-middle">{{ $user->password }}</td>
            <td class="align-middle">{{ $user->password_text_plane }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</x-layouts.app>