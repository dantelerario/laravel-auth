@component('mail::message')
# post updated

Post Updated:

{{ $title }}

@component('mail::button', ['url' => config('app.url') . '/posts'])
View Blog Archive
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent