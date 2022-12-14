@extends('layouts.template')
@section('title') Inicio @endsection

@section('content')
    <section class="section-documentation">
        <div class="section-documentation__container1">
            <p>IMPORTANTE: para poder utilizar la API necesita tener un token de acceso el mismo se obtiene registrandose</p>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
        <div class="section-documentation__container2">
            <div class="section-documentation__request-info">
                <h3>GET</h3>
                <div>
                    <h4>Request</h4>
                    <p>End-point: /api/persons</p>
                    <p>Headers: X-AUTH:{token-autorizacion}</p>
                </div>
                <div>
                    <h4>Response</h4>
                    <p>descripcion: devuelve todos los usuarios almacenados en la base de datos</p>
                    <p>Codigos: 200 OK, 400 La solicitud contiene un error, 401 No autorizado</p>
                </div>
            </div>
            <div class="section-documentation__request-info">
                <h3>POST</h3>
                <div>
                    <h4>Request</h4>
                    <p>End-point: /api/persons</p>
                    <p>Headers: X-AUTH:{token-autorizacion}</p>
                    <p>body: ['firstname'=>{value},'lastname'=>{value}, 'phone_number'=>{value}, 'address'=>{valor}]</p>
                </div>
                <div>
                    <h4>Response</h4>
                    <p>descripcion: Devuelve el id del nuevo usuario almacenado en la base de datos</p>
                    <p>Codigos: 201 Usuario creado, 400 La solicitud contiene un error ,401 No autorizado</p>
                </div>
            </div>
            <div class="section-documentation__request-info">
                <h3>PUT</h3>
                <div>
                    <h4>Request</h4>
                    <p>End-point: /api/persons</p>
                    <p>Headers: X-AUTH:{token-autorizacion}</p>
                    <p>body: ['id'=>{value}, 'firstname'=>{new value}, 'lastname'=>{new value}, 'phone_number'=>{new value},'address'=>{new value}]</p>
                </div>
                <div>
                    <h4>Response</h4>
                    <p>descripcion: N/A</p>
                    <p>Codigos: 200 OK, 400 La solicitud contiene un error , 401 No autorizado, 404 No se encontro al usuario</p>
                </div>
            </div>
            <div class="section-documentation__request-info">
                <h3>DELETE</h3>
                <div>
                    <h4>Request</h4>
                    <p>end-point: /api/persons</p>
                    <p>Headers: X-AUTH:{token-autorizacion}</p>
                    <p>body: ['id'=>{value}]</p>
                </div>
                <div>
                    <h4>Response</h4>
                    <p>descripcion: Devuelve el id del usuario eliminado</p>
                    <p>Codigos: 200 OK, 400 La solicitud contiene un error , 401 No autorizado, 404 No se encontro al usuario</p>
                </div>
            </div>
        </div>
    </section>
@endsection