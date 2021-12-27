<div class="icheck-primary d-inline">
    <input type="checkbox"
           id="{{ $id }}"
           name="{{ $name }}"
           value="{{ $value }}"
           class="{{ $class ?? '' }}"
           {{ $checked ? 'checked' : '' }}
        @foreach($attr??[] as $keyr=>$rowr)
               {{ $keyr }}="{{ $rowr }}"
            @endforeach
    >
    <label for="{{ $id }}">
        {{ $label }}
    </label>
</div>
