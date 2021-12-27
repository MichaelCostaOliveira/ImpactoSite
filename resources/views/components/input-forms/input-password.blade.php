<label for="{{ $id ?? '' }}">{{ $label }}</label>
<input type="password"
       @isset($id) id="{{ $id }}" @endisset
       name="{{ $name }}"
       placeholder="{{ $placeholder ?? '' }}"
       class="form-control {{ $class ?? '' }}" {!! $required??'required' !!}>
