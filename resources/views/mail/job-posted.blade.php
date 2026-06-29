{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}
<h2>{{ $job->title }}</h2>
<p>Congrats!Your job is now live.</p>
<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View Job Listing</a>
</p>
