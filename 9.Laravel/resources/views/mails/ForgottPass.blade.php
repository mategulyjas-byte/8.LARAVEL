<x-mail::message>
# Introduction

The body of your message.

{{-- {{$newpass}} --}}


<x-mail::button :url="url('/forgottpass/'.$password_token)">


{{-- <x-mail::button :url="url('/forgottpass/'.$newpass.'/'.$email)"> --}}
Button Text




</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
