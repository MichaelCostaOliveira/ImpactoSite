@if(isset($label) && !empty($label)) <label for="{{ $id ?? '' }}">{{ $label }}</label> @endif

<input type="text"
        @isset($id) id="{{ $id }}" @endisset
       name="{{ $name }}"
       placeholder="{{ $placeholder ?? '' }}"
       value="{{ $value ?? '' }}"
       class="form-control {{ $class ?? '' }}"
       data-inputmask="'mask': ['999.999.999-99']"
       data-inputmask-clearIncomplete="true"
       data-mask
    {!! $required??'required' !!}>
