<x-mail::message>
# Introduction

The{{$name}}  body of your message.

<x-mail::button :url="url('/emailRegister/'.$token)">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
