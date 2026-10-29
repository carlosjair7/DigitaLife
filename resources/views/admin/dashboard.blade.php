@extends('layouts.app')
       
@section('content')
<div class="container">
    <h1>Bienvenido al Panel de Administración</h1>

    <!-- Pestañas con enlaces -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home">Panel de Administración</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="users-tab" data-bs-toggle="tab" href="#crud">Gestión de Usuarios</a>
        </li>
    </ul>

    <div class="tab-content mt-3">
        <div class="tab-pane fade show active" id="home">
            <h4>Bienvenido, Admin</h4>
            <p>Aquí puedes gestionar el sistema. Haz clic en las pestañas para navegar.</p>
            
            
        </div>

        <div class="tab-pane fade" id="crud">
            <h4>Gestión de Usuarios</h4>
            
            <p>Haz clic para Administrar los usuarios.</p>
            <a href="{{ route('admin.users.index') }}" class="btn btn-primary"> Usuarios</a>
        </div>
    </div>
</div>
@endsection

