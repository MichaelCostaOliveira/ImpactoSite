<label for="{{ $id ?? '' }}">{{ $label }}</label>
<div class="input-group mb-3">

    <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
    </div>
    <input type="email"
           @isset($id) id="{{ $id }}" @endisset
           name="{{ $name }}"
           placeholder="{{ $placeholder ?? 'example@example.com' }}"
           value="{{ $value ?? '' }}"
           class="form-control {{ $class ?? '' }}"
        {!! $required??'required' !!}>
</div>
