@extends("layouts.plantilla")

@section("contenido")
    <div class="container">

     <form action="{{url("/cliente")}}" class="form-horizontal" method="post" enctype="multipart/form-data">

         {{ csrf_field() }}

         @include("cliente.form",["Modo"=>"crear"])
     </form>
    </div>
@endsection
