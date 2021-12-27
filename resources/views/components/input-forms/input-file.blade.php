<label for="{{ $id ?? '' }}">{{ $label }}</label>

<div class="input-group">
    <div class="custom-file">
        <input type="file"
               class="custom-file-input {{ $class ?? '' }}"
               name="{{ $name }}"
               @isset($id) id="{{ $id }}" @endisset {!! $required??'required' !!}>
        <label class="custom-file-label" for="{{ $id ?? '' }}">{{ $placeholder ?? 'Selecione' }}</label>
    </div>
    <div class="input-group-append">
        <span class="input-group-text" id="">Upload</span>
    </div>
</div>
