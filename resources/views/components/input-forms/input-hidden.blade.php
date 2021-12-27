
<input type="hidden"
        @isset($id) id="{{ $id }}" @endisset
       name="{{ $name }}"
       value="{{ $value ?? '' }}">
