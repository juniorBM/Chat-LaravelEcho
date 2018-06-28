@extends('layouts.app')
@section('content')
{{--<script src="js/app.js" charset="utf-8"></script>--}}
<div id="app">
    <h1>Chatroom</h1>
    <chat-log :messages="messages"></chat-log>
    <chat-composer v-on:messagesent="addMessage"></chat-composer>
</div>
@endsection
