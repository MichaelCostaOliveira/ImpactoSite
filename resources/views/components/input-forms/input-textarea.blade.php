@if(isset($label) && !empty($label)) <label for="{{ $id ?? '' }}">{{ $label }}</label> @endif

<textarea
        @isset($id) id="{{ $id }}" @endisset
       name="{{ $name }}"
       placeholder="{{ $placeholder ?? '' }}"
        class="form-control {{ $class ?? '' }}" {!! $required??'required' !!}>{{ $value ?? '' }}</textarea>
