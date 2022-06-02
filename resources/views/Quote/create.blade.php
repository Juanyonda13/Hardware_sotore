@extends('Template.Template')
@section('plantillaweb')
    <h2>Formulario Cita</h2>



    <form action="{{ route('quote.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col">
            <label>Hora programada</label>
            <input type="time" name="hora_programada">
        </div>
        <div class="col">
            <label>Hora de inicio</label>
            <input type="time" name="hora_inicio">
        </div>
        <div class="col">
            <label>Hora de finalizacion</label>
            <input type="time" name="hora_fin">
        </div>
        <div class="col">
            <label>Hora total</label>
            <input type="time" name="tiempo_total">
        </div>
        <div class="col">
            <label>Total pago</label>
            <input type="number" name="total_pago">
            <div class="col">
                <label for="cars">Forma de pago</label>
                <select id="cars" name="waytopay_id">
                    <option selected="true" disabled="disabled">Forma de pago</option>
                    @foreach ($waytopays as $waytopay)
                    <option value="{{$waytopay->id}}">{{$waytopay->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="cars">Empleado</label>
                <select id="cars" name="employee_id">
                    <option selected="true" disabled="disabled">Empleado</option>
                    @foreach ($employees as $employee)
                    <option value="{{$employee->id}}">{{$employee->nombres}} {{$employee->apellidos}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" name="btn_enviar" value="Registrar">
    </form>
@endsection
