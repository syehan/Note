@extends('layouts.layout')
@section('content')


<div class="container">


<h1>Create Notebook</h1>

<form action="/notebooks" method="post">
{{csrf_field()}}
<div class="form-group">
  <label for="name">Notebook Name</label>
  <input class="form-control" type="text" name="name" placeholder=""/>
</div>
  <input class="btn btn-primary" type="submit" value="OK" />
</form>
</div>
@endsection
