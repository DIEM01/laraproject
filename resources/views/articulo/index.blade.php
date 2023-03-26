@extends('layouts.plantillabase');
    @section('contenido')
    <h1> Vista INDEX</h1>
    <a href ="articulos/create" class = "btn btn-primary">Crear </a>
    <table
        class = "table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope= "col"> ID </th>
                <th scope= "col"> Codigos </th>
                <th scope= "col"> Descripcion </th>
                <th scope= "col"> Cantidad </th>
                <th scope= "col"> Precio </th>
                <th scope= "col"> Acciones </th>

            <tr>
        </thead>
        <tbody> 
            @foreach ($articulos as $articulo)
            <tr>
                <td>{{$articulo->id}}</td>
                <td>{{$articulo->Codigos}}</td>
                <td>{{$articulo->Descripcion}}</td>
                <td>{{$articulo->Cantidad}}</td>
                <td>{{$articulo->Precio}}</td>
                <td>{{$articulo->Acciones}}</td>
                <td>
                <a class="btn btn-info"> Editar </a>
                <button class="btn btn-danger"> Borrar </button>
</td>
            </tr>
            @endforeach



        </tbody>

</table>
    @endsection