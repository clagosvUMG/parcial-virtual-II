@extends('layouts.plantilla')

@section('contenido')
        <div class="form-group">
        <label class="text-light" for="Nit" class="control-label">{{"nit"}}</label>
        <input type="text" class="form-control" name="nit" id="nit"
               value="{{ isset($cliente->nit)?$cliente->nit:"" }}">
        </div>

        <div class="form-group">
            <label class="text-light" for="Nombre" class="control-label">{{"nombre"}}</label>
            <input type="text" class="form-control" name="nit" id="nit"
                   value="{{ isset($cliente->nombre)?$cliente->nombre:"" }}">
        </div>

        <div class="form-group">
            <label class="text-light" for="Fecha_Nacimiento" class="control-label">{{"fecha_nacimiento"}}</label>
            <input type="text" class="form-control" name="nit" id="nit"
                   value="{{ isset($cliente->fecha_nacimiento)?$cliente->fecha_nacimiento:"" }}">
        </div>
        <div class="form-group">
            <label class="text-light" for="Edad" class="control-label">{{"edad"}}</label>
            <input type="text" class="form-control" name="nit" id="nit"
                   value="{{ isset($cliente->edad)?$cliente->edad:"" }}">
        </div>

        <div class="form-group">
        <label class="text-light" for="Correo" class="control-label">{{"correo"}}</label>
        <input type="email" class="form-control" name="Correo" id="correo"
            value="{{ isset($cliente->correo)?$cliente->correo:"" }}">

        <div class="form-group">
        <label class="text-light" for="Telefono" class="control-label">{{"telefono"}}</label>
        <input type="text" class="form-control" name="Telefono" id="telefono"
            value="{{ isset($cliente->telefono)?$cliente->telefono:"" }}">
        </div>

        <div class="form-group">
        <label class="text-light" for="ID_Categoria" class="control-label">{{"id_categoria"}}</label>
        <input type="text" class="form-control" name="ID_Categoria" id="id_categoria"
            value="{{ isset($cliente->id_categoria)?$cliente->id_categoria:"" }}">
        </div>

            <div class="form-group">
                <label class="text-light" for="ID_Genero" class="control-label">{{"id_genero"}}</label>
                <input type="text" class="form-control" name="ID_Genero" id="id_genero"
                value="{{ isset($cliente->id_genero)?$cliente->id_genero:"" }}">
            </div>

            <div class="form-group">
                <label class="text-light" for="ID_Departamento" class="control-label">{{"id_departamento"}}</label>
                <input type="text" class="form-control" name="ID_Departamento" id="id_departamento"
                value="{{ isset($cliente->id_departamento)?$cliente->id_departamento:"" }}">
            </div>

            <input type="submit" class="btn btn-success" value="Agregar":>
@endsection
