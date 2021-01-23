@extends('layout.plantilla')

    <title>Usuarios</title>

    @section('header')
    @endsection


    @section('contenido')
    <div class="usuarios">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Usuario</h4>
                    <div class="personas d-flex">
                    @if(count($usuarios))
                    
                        @foreach($usuarios as $persona)
                        <p class="persona">{{$persona}}</p>
                        @endforeach
                        @else
                        <p>{{"No hay usuario"}}</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="usuarios">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Usuario</h4>
                    <div class="personas d-flex">
                    @if(count($usuarios))
                    
                        @foreach($usuarios as $persona)
                        <p class="persona">{{$persona}}</p>
                        @endforeach
                        @else
                        <p>{{"No hay usuario"}}</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="usuarios">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Usuario</h4>
                    <div class="personas d-flex">
                    @if(count($usuarios))
                    
                        @foreach($usuarios as $persona)
                        <p class="persona">{{$persona}}</p>
                        @endforeach
                        @else
                        <p>{{"No hay usuario"}}</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('footer')
    @endsection('footer')

<script src="">
    window.Text("Hola");
</script>

