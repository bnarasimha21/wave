@php
    if(isset($seo)){
        $seo = (is_array($seo)) ? ((object)$seo) : $seo;
    }
@endphp
@if(isset($seo->title))
    <title>{{ $seo->title }}</title>
@else
    <title>{{ setting('site.title', 'Laravel Wave') . ' - ' . setting('site.description', 'The Software as a Service Starter Kit built with Laravel') }}</title>
@endif

<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge"> <!-- † -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="url" content="{{ url('/') }}">

<x-favicon></x-favicon>

{{-- Social Share Open Graph Meta Tags --}}
@if(isset($seo->title) && isset($seo->description) && isset($seo->image))
    <meta property="og:title" content="{{ $seo->title }}">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:image" content="{{ $seo->image }}">
    <meta property="og:type" content="@if(isset($seo->type)){{ $seo->type }}@else{{ 'article' }}@endif">
    <meta property="og:description" content="{{ $seo->description }}">
    <meta property="og:site_name" content="{{ setting('site.title') }}">

    <meta itemprop="name" content="{{ $seo->title }}">
    <meta itemprop="description" content="{{ $seo->description }}">
    <meta itemprop="image" content="{{ $seo->image }}">

    @if(isset($seo->image_w) && isset($seo->image_h))
        <meta property="og:image:width" content="{{ $seo->image_w }}">
        <meta property="og:image:height" content="{{ $seo->image_h }}">
    @endif
@endif

<meta name="robots" content="index,follow">
<meta name="googlebot" content="index,follow">

@if(isset($seo->description))
    <meta name="description" content="{{ $seo->description }}">
@endif

@filamentStyles
@livewireStyles
@vite(['resources/themes/anchor/assets/css/app.css', 'resources/themes/anchor/assets/js/app.js'])


<!-- <script async
  src="https://yhr6mfzqcepm4uab6cgxyv3x.agents.do-ai.run/static/chatbot/widget.js"
  data-agent-id="42d131a0-62ee-11f0-bf8f-4e013e2ddde4"
  data-chatbot-id="YXkh3hQrnwu_qrk8xz6mtvGGOsL55mLp"
  data-name="wave-agent Chatbot"
  data-primary-color="#031B4E"
  data-secondary-color="#E5E8ED"
  data-button-background-color="#0061EB"
  data-starting-message="Hello! How can I help you today?"
  data-logo="/static/chatbot/icons/default-agent.svg">
</script> -->

<script async
  src="https://qwolzpeyzsbfzwpldpk5wuje.agents.do-ai.run/static/chatbot/widget.js"
  data-agent-id="08cd8de7-8773-11ef-bf8f-4e013e2ddde4"
  data-chatbot-id="Z04gyYfnNc0zozj_pla1eN1TlPqhNTnr"
  data-name="koopcast-agent Chatbot"
  data-primary-color="#031B4E"
  data-secondary-color="#E5E8ED"
  data-button-background-color="#0061EB"
  data-starting-message="Hello! How can I help you today?"
  data-logo="/static/chatbot/icons/default-agent.svg">
</script>