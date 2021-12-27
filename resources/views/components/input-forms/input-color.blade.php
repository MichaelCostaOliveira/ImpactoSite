<label for="{{ $id ?? '' }}">{{ $label }}</label>

<div class="input-group input-colorpicker">
    <input type="text"
           @isset($id) id="{{ $id }}" @endisset
           value="{{ $value ?? '' }}"
           name="{{ $name }}"
           class="form-control {{ $class ?? '' }}"
        {!! $required??'required' !!}>

    <div class="input-group-append">
        <span class="input-group-text"><i class="fas fa-square"></i></span>
    </div>
</div>
