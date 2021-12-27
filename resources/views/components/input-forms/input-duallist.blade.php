<select class="duallistbox" multiple="multiple" name="{{ $name }}" id="{{ $id ?? '' }}" {!! $required??'required' !!}>
    @forelse($itens as $key => $option)
        <option value="{{ $key }}" {{ in_array($key, $values)?'selected':'' }}> {{ $option  }}</option>
    @empty
    @endforelse
</select>
