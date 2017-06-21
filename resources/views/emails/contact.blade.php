@component('mail::message')
    # Contato Portal Premio Jornalismo

    Foi registrado um novo contato!

    Nome: {{ $nome }}
    Email: {{ $email }}
    Telefone: {{ $telefone }}
    Mensagem:
    {{ $mensagem }}

    Obrigado,
    {{ config('app.name') }}
@endcomponent