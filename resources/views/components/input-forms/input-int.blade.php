@if(isset($label) && !empty($label)) <label for="{{ $id ?? '' }}">{{ $label }}</label> @endif

<input type="text"
        @isset($id) id="{{ $id }}" @endisset
       name="{{ $name }}"
       placeholder="{{ $placeholder ?? '' }}"
       value="{{ $value ?? '' }}"
       class="form-control {{ $class ?? '' }}"
       data-inputmask="'mask': ['9','99','999','9999','99999','999999','9999999']"
       data-inputmask-rightAlign="true"
       data-inputmask-radixPoint=","
       data-mask {!! $required??'required' !!}>
