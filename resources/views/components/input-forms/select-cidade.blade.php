<div class="form-group">
    @if(isset($label) && !empty($label)) <label for="{{ $id ?? '' }}">{{ $label }}</label> @endif
    <select class="form-control select2" data-hide-disabled="true" {!! $script ?? '' !!} name="{{ $name }}" id="{{ $id ?? '' }}" {!! $required??'required' !!} style="width: 100%;">
        @forelse($options as $key => $option)
            <option value="{{ $key }}"
                    data-estado="{{ ($option['estado']) }}"
                @if(isset($value) && $value == $key) selected @endif> {{ ($option['nome']) }}
            </option>
        @empty
        @endforelse
    </select>
</div>
