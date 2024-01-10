<x-layouts.app title="Registrar Usuario">
  <div class="container mt-4">
    @if (session("message"))
      <div class="alert alert-success">
        {{ session("message") }}
      </div>
    @endif
    
    <h1>Registrar Usuario</h1>
    <form action="{{ route("users.store") }}" method="post">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
  </div>
</x-layouts.app>
