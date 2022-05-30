
{{-- MANDAR MENSAJE AL MAIL --}}

@component('mail::message')
#{{ $mensaje-> name }}  le han enviado un mensaje a la página

##Email: {{ $mensaje-> email }}

##Phone: {{ $mensaje-> phone}}

Su mensaje es:

{{ $mensaje-> message }}

Gracias,<br>

    
@endcomponent
