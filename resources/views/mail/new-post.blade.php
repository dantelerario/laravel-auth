{{-- <h1>New Post Published</h1>

<p>A new post has been published</p>

<p><strong>Title:</strong>{{ $title }}</p>
<p><strong>Slug:</strong>{{ $slug }}</p> --}}

@component('mail::message')
# new post created

New post created:

{{ $title }}

@component('mail::button', ['url' => config('app.url') . '/posts'])
View Blog Archive
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent