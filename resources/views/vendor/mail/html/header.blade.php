<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('img/img_academia.png', env('SECURE_PATH',  true)) }}" class="logo" alt="Academia Impacto Fitness">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
