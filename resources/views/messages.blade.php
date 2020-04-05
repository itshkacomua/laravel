@extends('layouts.app')

@section('title-block')Все сообщения@endsection

@section('content')
  <h1>Все сообщения</h1>

  @foreach($data as $el)
    <div class="alert alert-info">
      <h3>{{ $el->subject }}</h3>
      <p>{{ $el->email}}</p>
      <p>{{ $el->created_at}}</p>
      <a href="#"><button class="btn btn-warning">Детальнее</button></a>
    </div>
  @endforeach
@endsection
