@php
    $id = $id ?? 'undefined';
    $name = str_replace("Input", "", $id);
@endphp
<div class="form-group">
    <label for="{{$id}}" class="form-label fw-bold m-0 mt-2 text-uppercase">{{ trans('members::admin.settings.'.$name.'.title') }}</label>
    <div class="d-flex flex-column align-center">
        <select class="form-select @error($name) is-invalid @enderror"
                id="{{$id}}"
                name="{{ $name }}">
            <option value="">{{trans('members::admin.default')}}</option>
            @foreach($values as $value)
                <option value="{{ $value }}"
                        @if(setting('members.'.$name) == $value) selected @endif>{{$customValueShowing ? trans($customValueShowing.$value):$value}}
                </option>
            @endforeach
        </select>
        @error($name)
        <small class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></small>
        @enderror
    </div>
</div>
