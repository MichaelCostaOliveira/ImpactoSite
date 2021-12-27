<div class="form-group">
    @if(isset($label) && !empty($label)) <label for="{{ $id ?? '' }}">{{ $label }}</label> @endif
    <select class="form-control select2" {!! $script ?? '' !!} name="{{ $name }}" id="{{ $id ?? '' }}" {!! $required??'required' !!} style="width: 100%;">
        @forelse($options as $key => $option)
            <option value="{{ $key }}"
                @if(isset($value) && $value == $key) selected @endif> {{ ($option) }}
            </option>
        @empty
        @endforelse
    </select>
</div>
