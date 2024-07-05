<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="id_cliente" class="form-label">{{ __('Id Cliente') }}</label>
            <input type="text" name="id_cliente" class="form-control @error('id_cliente') is-invalid @enderror" value="{{ $id }}" id="id_cliente" placeholder="Id Cliente">
            {!! $errors->first('id_cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        {{--
        <div class="form-group mb-2 mb20">
            <label for="id_marca" class="form-label">{{ __('Id Marca') }}</label>
            <input type="text" name="id_marca" class="form-control @error('id_marca') is-invalid @enderror" value="{{ old('id_marca', $vehiculo?->id_marca) }}" id="id_marca" placeholder="Id Marca">
            {!! $errors->first('id_marca', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        --}}

        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="id_plan" class="form-label">{{ __('Marca') }}</label>

              <select id='select'  class="form-control" name="id_marca">
                <option selected disabled readonly value="{{ old('id_marca', $vehiculo?->id_marca) }}" >--Selecciona la marca--</option>
                @foreach($marcas as $marca)
                    <option value="{{$marca['id']}}">{{$marca['descripcion']}}</option>
               @endforeach
              </select>
            </div>
          </div>


          {{--
        <div class="form-group mb-2 mb20">
            <label for="id_clase" class="form-label">{{ __('Id Clase') }}</label>
            <input type="text" name="id_clase" class="form-control @error('id_clase') is-invalid @enderror" value="{{ old('id_clase', $vehiculo?->id_clase) }}" id="id_clase" placeholder="Id Clase">
            {!! $errors->first('id_clase', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        --}}
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="id_plan" class="form-label">{{ __('Clase') }}</label>

              <select id='select'  class="form-control" name="id_clase">
                <option selected disabled readonly value="{{ old('id_clase', $vehiculo?->id_clase) }}" >--Selecciona la clase--</option>
                @foreach($clases as $clase)
                    <option value="{{$clase['id']}}">{{$clase['descripcion']}}</option>
               @endforeach
              </select>
            </div>
          </div>


        <div class="form-group mb-2 mb20">
            <label for="modelo" class="form-label">{{ __('Modelo') }}</label>
            <input type="text" name="modelo" class="form-control @error('modelo') is-invalid @enderror" value="{{ old('modelo', $vehiculo?->modelo) }}" id="modelo" placeholder="Modelo" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
            {!! $errors->first('modelo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        {{--
        <div class="form-group mb-2 mb20">
            <label for="id_color" class="form-label">{{ __('Id Color') }}</label>
            <input type="text" name="id_color" class="form-control @error('id_color') is-invalid @enderror" value="{{ old('id_color', $vehiculo?->id_color) }}" id="id_color" placeholder="Id Color">
            {!! $errors->first('id_color', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        --}}
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="id_plan" class="form-label">{{ __('Color') }}</label>

              <select id='select'  class="form-control" name="id_color">
                <option selected disabled readonly value="{{ old('id_color', $vehiculo?->id_color) }}" >--Selecciona el color--</option>
                @foreach($colors as $color)
                    <option value="{{$color['id']}}">{{$color['descripcion']}}</option>
               @endforeach
              </select>
            </div>
          </div>

          {{--
        <div class="form-group mb-2 mb20">
            <label for="id_tipo" class="form-label">{{ __('Id Tipo') }}</label>
            <input type="text" name="id_tipo" class="form-control @error('id_tipo') is-invalid @enderror" value="{{ old('id_tipo', $vehiculo?->id_tipo) }}" id="id_tipo" placeholder="Id Tipo">
            {!! $errors->first('id_tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        --}}
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="id_plan" class="form-label">{{ __('Tipo') }}</label>

              <select id='select'  class="form-control" name="id_tipo">
                <option selected disabled readonly value="{{ old('id_tipo', $vehiculo?->id_tipo) }}" >--Selecciona el tipo--</option>
                @foreach($tipos as $tipo)
                    <option value="{{$tipo['id']}}">{{$tipo['descripcion']}}</option>
               @endforeach
              </select>
            </div>
          </div>


          {{--
        <div class="form-group mb-2 mb20">
            <label for="id_uso" class="form-label">{{ __('Id Uso') }}</label>
            <input type="text" name="id_uso" class="form-control @error('id_uso') is-invalid @enderror" value="{{ old('id_uso', $vehiculo?->id_uso) }}" id="id_uso" placeholder="Id Uso">
            {!! $errors->first('id_uso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        --}}
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="id_plan" class="form-label">{{ __('Uso') }}</label>

              <select id='select'  class="form-control" name="id_uso">
                <option selected disabled readonly value="{{ old('id_uso', $vehiculo?->id_uso) }}" >--Selecciona el uso--</option>
                @foreach($usos as $uso)
                    <option value="{{$uso['id']}}">{{$uso['descripcion']}}</option>
               @endforeach
              </select>
            </div>
          </div>


        <div class="form-group mb-2 mb20">
            <label for="placa" class="form-label">{{ __('Placa') }}</label>
            <input type="text" name="placa" class="form-control @error('placa') is-invalid @enderror" value="{{ old('placa', $vehiculo?->placa) }}" id="placa" placeholder="Placa" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
            {!! $errors->first('placa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ano" class="form-label">{{ __('Ano') }}</label>
            <input type="text" name="ano" class="form-control @error('ano') is-invalid @enderror" value="{{ old('ano', $vehiculo?->ano) }}" id="ano" placeholder="Ano">
            {!! $errors->first('ano', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="peso" class="form-label">{{ __('Peso') }}</label>
            <input type="text" name="peso" class="form-control @error('peso') is-invalid @enderror" value="{{ old('peso', $vehiculo?->peso) }}" id="peso" placeholder="Peso">
            {!! $errors->first('peso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="serial_motor" class="form-label">{{ __('Serial Motor') }}</label>
            <input type="text" name="serial_motor" class="form-control @error('serial_motor') is-invalid @enderror" value="{{ old('serial_motor', $vehiculo?->serial_motor) }}" id="serial_motor" placeholder="Serial Motor" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
            {!! $errors->first('serial_motor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="puestos" class="form-label">{{ __('Puestos') }}</label>
            <input type="text" name="puestos" class="form-control @error('puestos') is-invalid @enderror" value="{{ old('puestos', $vehiculo?->puestos) }}" id="puestos" placeholder="Puestos">
            {!! $errors->first('puestos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="serial_niv" class="form-label">{{ __('Serial Niv') }}</label>
            <input type="text" name="serial_niv" class="form-control @error('serial_niv') is-invalid @enderror" value="{{ old('serial_niv', $vehiculo?->serial_niv) }}" id="serial_niv" placeholder="Serial Niv" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
            {!! $errors->first('serial_niv', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
