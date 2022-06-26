@slot('header')
    @component('mail::message')

<h2>Olá, {{ $user->name }} Feliz Aniversário!!!</h2>  
<br> 
<p>Neste dia desejamos sucesso, prosperidade e muita sáude nos seus dias vindouros.</p> 
@component('mail::button', ['url' => 'www.thiagocantero.com.br'])
 Clique Aqui

@endcomponent
Somos grato por tê-lo conosco. Acesse nosso site e viva o Linux! 🐧

@endcomponent



