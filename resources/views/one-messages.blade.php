@extends('layouts.app')

@section('title-block'){{$data->subject}}@endsection

@section('content')
  <h1>{{$data->subject}}</h1>

    <div class="alert alert-info">
      <p>{{ $data->email}} - {{ $data->name}}</p>
      <p>{{ $data->created_at}}</p>
      <p>{{ $data->message}}</p>
      <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-primary">Редактировать</button></a>
      <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
    </div>
@endsection
