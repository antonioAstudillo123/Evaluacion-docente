@extends('layouts.app')

@section('content')

<div id="spinnerDiv" class="p-5">
    <div class="d-flex justify-content-center">
        <div class="spinner-border text-primary " style="width: 15rem; height: 15rem;" role="status">

        </div>
    </div>
</div>




<div id="matricula" class="d-none">
    <div class=" container h-100 p-2 mb-3 bg-body-tertiary border rounded-3">
        <h3>Confidencialidad y protección de datos en nuestra encuesta.</h3>
        <p>Los datos en la presente encuesta serán tratados con estricta confidencialidad y en apego a la protección de datos. El énfasis de la encuesta es con la intención de mejorar, identificar áreas de oportunidad y conocer nuestras fortalezas.</p>
    </div>
    <div class="container table-responsive">
        <table class="table  shadow p-3 mb-5 bg-body rounded">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>Nombre docente</th>
                    <th>Materia</th>
                    <th>Evaluar</th>
                    <th>Estatus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($matricula as $row )
                        <tr class="text-center shadow-sm p-5 mb-5 bg-body rounded">
                            <td class="">{{ $row->nombre_completo }}</td>
                            <td class="fw-bold">{{ $row->descripcion }}</td>
                            @if($row->contestada)
                                <td>
                                    <button class="btn btn-light" disabled>Evaluar</button>
                                </td>
                            @else
                                <td>
                                    <button type="submit" value="{{ $row->id }}" class="btn btn-outline-primary">Evaluar</button>
                                </td>
                            @endif
                            @if($row->contestada)
                                <td>
                                    <button class="btn btn-success">Contestada</button>
                                </td>
                            @else
                                <td>
                                    <button class="btn btn-danger">Sin contestar</button>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>

<div id="evaluacionDiv" class="d-none">

    <div class="container">
        <form action="{{ route('evaluacion.contestada') }}" method="post">
            @csrf
            <input type="hidden" id="idMatricula" name="idMatricula">
            @foreach ($preguntas as $pregunta )
                <div class="card mb-3">
                    <div class="card-header bg-dark  text-white-50 fw-bold text-center align-content-center">
                        <p>{{ $pregunta->pregunta }}</p>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($respuestas as $respuesta )
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <input required title="Debe seleccionar una opción" class="form-check-input" name="{{ $pregunta->id }}" value="{{ $respuesta->id }}" type="radio">
                                        <label class="form-check-label" for="{{ $pregunta->id }}">
                                            {{ $respuesta->respuesta}}
                                        </label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach

            <div class="card mb-3">
                <div class="card-header bg-dark  text-white-50 fw-bold text-center align-content-center">
                    <p>Con la finalidad de mejorar, ¿podrías darnos tus comentarios al respecto?</p>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <textarea required title="Escribe un comentario sobre esta clase" name="comentarios" class="form-control" rows="3" placeholder="Escribe tus comentarios..."></textarea>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Calificar">
            </div>
    </div>

</form>


</div>



@endsection

@section('scriptsPage')
    <script type="module" src="{{ asset('js/matricula/matricula.js') }}"></script>
@endsection
