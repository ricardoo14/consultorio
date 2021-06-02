@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Crear hora</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

       

        <form action="/horas" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Hora</label>
                    <input type="datetime-local" name="hora" class="form-control" placeholder="Hora">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </form>
    </div>

@endsection
