<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="id_usuario" class="form-label">{{ __('') }}</label>
            <input type="hidden" name="id_usuario" class="form-control @error('id_usuario') is-invalid @enderror" value="{{ Auth::user()->id }}" id="id_usuario" placeholder="Id Usuario">
            {!! $errors->first('id_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_vehiculo" class="form-label">{{ __('') }}</label>
            <input type="hidden" name="id_vehiculo" class="form-control @error('id_vehiculo') is-invalid @enderror" value="{{ $id }}" id="id_vehiculo" placeholder="Id Vehiculo">
            {!! $errors->first('id_vehiculo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        {{--
            <div class="form-group mb-2 mb20">
                <label for="id_plan" class="form-label">{{ __('Id Plan') }}</label>
                <input type="text" name="id_plan" class="form-control @error('id_plan') is-invalid @enderror" value="{{ old('id_plan', $contrato?->id_plan) }}" id="id_plan" placeholder="Id Plan">
                {!! $errors->first('id_plan', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        --}}

        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="id_plan" class="form-label">{{ __('Plan') }}</label>

              <select id='select'  class="form-control" name="id_plan">
                <option selected disabled readonly value="{{ old('id_plan', $contrato?->id_plan) }}" >--Selecciona el plan--</option>
                @foreach($plans as $plan)
                    <option value="{{$plan['id']}}">{{$plan['descripcion']}}</option>
               @endforeach
              </select>
            </div>
          </div>


          {{--
          <div class="form-group mb-2 mb20">
            <label for="fecha_ini" class="form-label">{{ __('Fecha Ini') }}</label>
            <input type="date" name="fecha_ini" class="form-control @error('fecha_ini') is-invalid @enderror" value="{{ now() }}" id="fecha_ini" placeholder="Fecha Ini">
            {!! $errors->first('fecha_ini', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_fin" class="form-label">{{ __('Fecha Fin') }}</label>
            <input type="date" name="fecha_fin" class="form-control @error('fecha_fin') is-invalid @enderror" value="{{ now() }}" id="fecha_fin" placeholder="Fecha Fin">
            {!! $errors->first('fecha_fin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        --}}


        <div class="form-group mb-2 mb20">
            <label for="codigo" class="form-label">{{ __('Nro de Contrato') }}</label>
            <input type="text" name="codigo" class="form-control @error('codigo') is-invalid @enderror" value="{{ old('codigo', $contrato?->codigo) }}" id="codigo" placeholder="Codigo">
            {!! $errors->first('codigo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        {{-- <div class="form-group mb-2 mb20">
            <label for="cobertura" class="form-label">{{ __('Cobertura') }}</label>
            <input type="hidden" name="cobertura" class="form-control @error('cobertura') is-invalid @enderror" value="{{ old('cobertura', $contrato?->cobertura) }}" id="cobertura" placeholder="Cobertura">
            {!! $errors->first('cobertura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pago" class="form-label">{{ __('Pago') }}</label>
            <input type="hidden" name="pago" class="form-control @error('pago') is-invalid @enderror" value="{{ old('pago', $contrato?->pago) }}" id="pago" placeholder="Pago">
            {!! $errors->first('pago', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> --}}

        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('') }}</label>
            <input type="hidden" name="estado" class="form-control @error('estado') is-invalid @enderror" value="1" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
