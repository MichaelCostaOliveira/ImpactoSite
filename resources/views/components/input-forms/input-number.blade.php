@if(isset($label) && !empty($label)) <label for="{{ $id ?? '' }}">{{ $label }}</label> @endif

<input type="number"
        @isset($id) id="{{ $id }}" @endisset
       name="{{ $name }}"
       placeholder="{{ $placeholder ?? '' }}"
       value="{{ $value ?? '' }}"
       class="form-control {{ $class ?? '' }}">
