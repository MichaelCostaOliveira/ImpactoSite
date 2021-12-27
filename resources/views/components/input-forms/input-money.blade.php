<label for="{{ $id ?? '' }}">{{ $label }}</label>

<div class="input-group">
    <input type="text"
           @isset($id) id="{{ $id }}" @endisset
           name="{{ $name }}"
           value="{{ $value ?? '' }}" {!! $required??'required' !!}
           class="form-control money {{ $class ?? '' }}"/>

    <div class="input-group-prepend">
        <span class="input-group-text">
            <i class="fas fa-dollar-sign"></i>
        </span>
    </div>
</div>
