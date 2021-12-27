<label for="{{ $id ?? '' }}">{{ $label }}</label>

<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-phone"></i></span>
    </div>
    <input type="text"
           class="form-control {{ $class ?? '' }}"
           name="{{ $name }}"
           data-inputmask="'mask': ['(99) 99999-9999']"
           @isset($id) id="{{ $id }}" @endisset
           value="{{ $value ?? '' }}"
           data-mask {!! $required??'required' !!}>
</div>
