<div class="row padding-1 p-1">
    <div class="col-md-12">

        {{-- <div class="form-group mb-2 mb20">
            <label for="role_id" class="form-label">{{ __('Role Id') }}</label>
            <input type="text" name="role_id" class="form-control @error('role_id') is-invalid @enderror" value="{{ old('role_id', $modelHasRole?->role_id) }}" id="role_id" placeholder="Role Id">
            {!! $errors->first('role_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> --}}

        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="role_id" class="form-label">{{ __('Rol') }}</label>

              <select id='role_id'  class="form-control" name="role_id">
                <option selected disabled readonly value="" >--Selecciona el rol--</option>
                @foreach($roles as $role)
                    <option value="{{$role['id']}}">{{$role['name']}}</option>
               @endforeach
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
            <label for="model_id" class="form-label">{{ __('Usuario') }}</label>

              <select id='model_id'  class="form-control" name="model_id">
                <option selected disabled readonly value="" >--Selecciona el usuario--</option>
                @foreach($users as $user)
                    <option value="{{$user['id']}}">{{$user['email']}}</option>
               @endforeach
              </select>
            </div>
          </div>

        <div class="form-group mb-2 mb20">
            <label for="model_type" class="form-label">{{ __('') }}</label>
            <input type="hidden" name="model_type" class="form-control @error('model_type') is-invalid @enderror" value="App\Models\User" id="model_type" placeholder="Model Type">
            {!! $errors->first('model_type', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        {{-- <div class="form-group mb-2 mb20">
            <label for="model_id" class="form-label">{{ __('Usuario') }}</label>
            <input type="text" name="model_id" class="form-control @error('model_id') is-invalid @enderror" value="{{ old('model_id', $modelHasRole?->model_id) }}" id="model_id" placeholder="Model Id">
            {!! $errors->first('model_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> --}}

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
