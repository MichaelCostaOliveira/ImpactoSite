<label for="{{ $id ?? '' }}">{{ $label }}</label>
<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
    </div>
    <input type="text"
           @isset($id) id="{{ $id }}" @endisset
           name="{{ $name }}"
           class="date form-control {{ $class ?? '' }}"
           data-inputmask-alias="datetime"
           data-inputmask-inputformat="dd/mm/yyyy"
           data-inputmask-clearIncomplete="true"
           value="{{ $value ?? '' }}"
           data-mask
        {!! $required??'required' !!}>
</div>
