@if(isset($label) && !empty($label)) <label for="{{ $id ?? '' }}">{{ $label }}</label> @endif

<input type="text"
        @isset($id) id="{{ $id }}" @endisset
        @isset($contentHtml) {!! $contentHtml !!} @endisset
       name="{{ $name }}"
       placeholder="{{ $placeholder ?? '' }}"
       value="{{ $value ?? '' }}"
       class="form-control {{ $class ?? '' }}" {!! $required ?? 'required' !!}>
