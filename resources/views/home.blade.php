@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Dashboard</h1>
                </div>

                <div class="container mb-8 row m-1">
                    <div class="counter-box col-3">
                        <p class="counter-label">Usuarios registrados</p>
                        <p class="counter" id="userCounter">{{ $users }}</p>
                    </div>
                    <div class="counter-box col-3">
                        <p class="counter-label">Manuales registrados</p>
                        <p class="counter" id="userCounter">{{ $manuals }}</p>
                    </div>
                    <div class="counter-box col-3">
                        <p class="counter-label">Categorias registradas</p>
                        <p class="counter" id="userCounter">{{ $categories }}</p>
                    </div>
                    <div class="counter-box col-3">
                        <p class="counter-label">Subcategorias registradas</p>
                        <p class="counter" id="userCounter">{{ $subcategories }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /* styles.css */

    .title {
        font-size: 32px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .counter-box {
        background-color: #f1f1f1;
        border: 2px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        text-align: center;
    }

    .counter-label {
        font-size: 18px;
        font-weight: bold;
        color: #555;
    }

    .counter {
        font-size: 48px;
        color: #007bff;
        margin-top: 10px;
        /* Agregamos algunas animaciones para que el contador destaque más */
        animation: pulse 1s infinite;
    }

    /* Animación para hacer que el contador "pulsee" */
    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.2);
        }

        100% {
            transform: scale(1);
        }
    }
</style>
@endsection