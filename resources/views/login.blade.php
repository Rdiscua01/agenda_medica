@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100">
        <!-- Columna de la imagen -->
        <div class="col-md-6 d-none d-md-flex justify-content-center">
            <img src="{{ asset('imagenes/medico.jpg') }}" alt="Imagen del médico" class="img-fluid" style="max-width: 100%; height: auto;">
        </div>

        <!-- Columna del formulario -->
        <div class="col-md-6 d-flex justify-content-center">
            <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
                <h4 class="text-center mb-4">Iniciar sesión</h4>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               id="email" name="email" value="{{ old('email') }}" required autofocus>
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" 
                               id="password" name="password" required>
                        @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
