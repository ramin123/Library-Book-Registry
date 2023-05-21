
@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            Josh Admin
        @endcomponent
    @endslot
    {{-- Body --}}

 # Hello {{ $data['contact-name'] }}

Welcome to SiteNameHere! We have received your details.<br />
The provided details are:<br />
**Name :** {{ $data['contact-name'] }}<br />
**Email :** {{ $data['contact-email'] }}<br />
**Message :** {{ $data['contact-msg'] }}

Thank you for Contacting SiteNameHere! We will revert you shortly.

Best regards,

    {{-- Footer --}}
    @slot('footer')
    @component('mail::footer')
    &copy; 2017 All Copy right received
@endcomponent
@endslot
@endcomponent
