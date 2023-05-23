@php
    $id = $id ?? 'undefined';
    $name = str_replace("Input", "", $id);
    $checked = $checked ?? false;
    $isChecked = (setting('members.'.$name) == 'on') ? ($checked = true):($checked)
@endphp
<div class="form-check">
    <div class="switcher d-flex flex-column justify-content-center">
        <small class="fw-bold fs-5 text-uppercase">{{ trans('members::admin.settings.'.$name.'.title') }}</small>
        <label for="{{ $id }}">
            <input type="checkbox" class="@error($name) is-invalid @enderror" id="{{ $id }}" name="{{ $name }}" @if($checked) checked @endif/>
            <span><small></small></span>
            @error($name)
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </label>
    </div>
</div>
