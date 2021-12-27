<label for="{{ $id ?? '' }}">{{ $label }}</label>
<input type="time" @isset($id) id="{{ $id }}" @endisset
name="{{ $name }}"
       value="{{ $value ?? '' }}" {!! $required??'required' !!}
       class="form-control {{ $class ?? '' }}"/>
