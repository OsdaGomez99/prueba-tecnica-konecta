@extends('app')

@section('title', 'Cafetería KONECTA - Productos')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Registrar Producto</h3>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <strong>¡Revise todos los campos!</strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge bg-danger">{{ $error }}</span>
                                    @endforeach
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('productos.store') }}">
                            @csrf
                            <div class="form-group p-2">
                                <div class="row row-cols-2">
                                    <div class="col">
                                        <label for="nombre">Nombre del producto</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" required>
                                    </div>
                                    <div class="col">
                                        <label for="referencia">Referencia</label>
                                        <input type="text" class="form-control" name="referencia" id="referencia" required>
                                    </div>
                                    <div class="col-4">
                                        <label for="precio">Precio(gr)</label>
                                        <input type="number" class="form-control" name="precio" id="precio" required>
                                    </div>
                                    <div class="col-4">
                                        <label for="peso">Peso</label>
                                        <input type="number" class="form-control" name="peso" id="peso" required>
                                    </div>
                                    <div class="col-4">
                                        <label for="stock">Stock</label>
                                        <input type="number" class="form-control" name="stock" id="stock" required>
                                    </div>
                                    <div class="col">
                                        <label for="categoria">Categoría</label>
                                        <input type="text" class="form-control" name="categoria" id="categoria" required>
                                    </div>
                                    <div class="col">
                                        <label for="fecha_creacion">Fecha de creación</label>
                                        <input type="date" class="form-control" name="fecha_creacion" id="fecha_creacion" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group p-2">
                               <button type="submit" class="btn btn-outline-primary">Registrar</button>
                                <a href="{{ route('productos.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
