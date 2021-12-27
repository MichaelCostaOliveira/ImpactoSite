<div class="icheck-primary d-inline">
    <input type="radio"
           id="{{ $id }}"
           name="{{ $name }}"
           value="{{ $value }}"
           class="{{ $class ?? '' }}"
            {{ $checked ? 'checked' : '' }} {!! $required??'' !!}>
    <label for="{{ $id }}">
        {{ $label }}
    </label>
</div>

