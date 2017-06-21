@component('mail::message')
    # Registro Portal Prêmio Jornalismo

    Foi registrado um novo participante.

@component('mail::button', ['url' => 'http://premiojornalismo.fiero.org.br/admin', 'color' => 'green'])
    Acessar Área Administrativa
@endcomponent

    Obrigado,
    {{ config('app.name') }}
@endcomponent