<div class="form-group">
    <label>{{ $label }}</label>
    <select class="form-control select2" multiple="multiple" name="{{ $name }}" id="{{ $id }}" style="width: 100%;" {!! $required??'required' !!}>

        @forelse($options as $key => $option)
            <option value="{{ $key }}"  {{ (in_array($key, $value)?'selected':'') }}>
                {{ $option }}
            </option>
        @empty
        @endforelse
    </select>
</div>

