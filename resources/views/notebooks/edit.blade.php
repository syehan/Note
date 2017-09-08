@extends('layouts.layout')
@section('content')
<link rel="stylesheet" href="materialize/css/materialize.css" media="screen" title="no title">

<div class="container">

<h1>Edit Notebook</h1>

<form action="/notebooks/{{$notebook->id}}" method="post">
{{csrf_field()}}
{{ method_field('PUT') }}

<div class="form-group">
  <label for="name">Notebook Name</label>
  <input class="form-control" type="text" name="name" placeholder="{{$notebook->name}}">
</div>
  <input class="btn btn-primary" type="submit" value="Update" />
</form>
</div>
@endsection
