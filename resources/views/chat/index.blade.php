@extends('layouts.master')
@section('content')

<H1>Benvingut al chat</H1>

<div id="dades">
    <form action="{{url('chat/postCreate')}}" method="POST">
    {{method_field('PUT')}}
    {{ csrf_field() }}
        <div>
            <label>Nick: </label>
            <input type="text" name="nick">
        </div>
        <div>
            <label>Missatge:</label>
            <input type="text" length="200" name="text">
        </div>
        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
    <br>
</div>

<div id="chat">
    <textarea rows="20" cols="80" disabled resize="none">
@foreach ($arrayMissatge as $key => $missatge)
{{$missatge->created_at}} - {{$missatge->nick}}: {{$missatge->text}} 
@endforeach
    </textarea>
</div>
@stop