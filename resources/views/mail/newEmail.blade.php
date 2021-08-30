@component('mail::message')


<h2>{{$user->titulo}}</h2>
<p>{{$user->name}}</p>
<h3>Com interesse no plano:</h3>
<p>{{ $user->plano }}</p>

<h3>Menssagem</h3>
<p>{{$user->mensagem}}</p>
<p>Mensagem recebida de <b>{{$user->name}}</b> com email {{$user->email}}</p>
@endcomponent
