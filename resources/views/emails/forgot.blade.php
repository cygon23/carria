@component('mail::message')
<p>Hellow {{$user->name}}</p>
<p>We understand it happens</p>
@component('mail::button',['url' => url('reset/'.$user->remember_token)])
Reset your Passowrd
@endcomponent
<p>In any case you fail recover your passowrd just contact us </p>
Thanks <br>
{{ config('app.name') }}
@endcomponent
