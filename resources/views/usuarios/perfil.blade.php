@extends('layouts.plantilla')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Perfil de usuario</h2>
            </div>
            <div class="col-md-6"></div>
        </div>
        <form>
            <fieldset disabled>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Nombre</label>
                        <input type="text" id="disabledTextInput" value="{{ $use->nombre }}" class="form-control"
                            placeholder="Disabled input">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Apellido</label>
                        <input type="text" id="disabledTextInput" value="{{ $use->apellido }}" class="form-control"
                            placeholder="Disabled input">
                    </div>
                </div>


                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Rut</label>
                        <input type="text" id="disabledTextInput" value="{{ $use->rut }}" class="form-control"
                            placeholder="Disabled input">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="disabledTextInput" class="form-label">Email</label>
                        <input type="text" id="disabledTextInput" value="{{ $use->email }}" class="form-control"
                            placeholder="Disabled input">
                    </div>
                </div>

            </fieldset>
            {{-- <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('perfil.edit', $use->id) }}"><button type="button"
                            class="btn btn-warning">Editar</button></a>
                </div>
            </div> --}}
        </form>
    </div>
@endsection
