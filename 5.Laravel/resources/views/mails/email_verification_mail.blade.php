<x-mail::message>
# Regiszttáció megerősítés

Kedves {{$name}} te vagy valaki más {{now()}} kor ezzel az email címell regisztrációt kezdeményezett a weboldlaunkon.
Ha te voltál akkor kattint saz alábbi gombra a regisztráció megerősítéséhez







<x-mail::button :url="url('/emailRegister/'.$token)">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
