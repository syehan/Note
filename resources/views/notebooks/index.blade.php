@extends('layouts.layout')
@section('content')
            <!-- Main component for call to action -->

            <div class="container">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Your Notebooks
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route("notebooks.create")}}" role="button">
                        New NoteBook +
                    </a>
                </div>

                <div class="clearfix">
                </div>
                <br>

                <!-- ================ Notebooks==================== -->
                <!-- notebook1 -->
                  @foreach ($notebooks as $notebook)
                <div class="col s12 m7">
                <div class="card horizontal">
                  <div class="card-image">
                    <img src="https://lorempixel.com/100/190/nature/6">
                  </div>
                  <div class="card-stacked">
                    <div class="card-content">
                      <span class="card-title">{{$notebook->name}}</span>
                      <p>I am a very simple card. I am good at containing small bits of information.</p>
                    </div>
                    <div class="card-action">
                      <a class="card-link" href="/notebooks/{{$notebook->id}}/edit">
                          Edit Notebook
                        </a>
                      <form action="/notebooks/{{$notebook->id}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                          <input class="btn btn-sm btn-danger red darken-1" type="submit" value="Delete">

                      </form>
                    </div>
                  </div>
              </div>
            @endforeach

                {{-- @foreach ($notebooks as $notebook) --}}
                {{-- <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <a href="#">
                                <h4 class="card-title">
                                    {{$notebook->name}}
                                </h4>
                            </a>
                        </div>
                        <a href="#">
                            <img alt="Responsive image" class="img-fluid" src="dist/img/notebook.jpg"/>
                        </a>
                        <div class="card-block">
                            <a class="card-link" href="/notebooks/{{$notebook->id}}/edit">
                                Edit Notebook
                            </a>
                            <form action="/notebooks/{{$notebook->id}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                              {{csrf_field()}}
                              {{method_field('DELETE')}}
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete">

                            </form>
                        </div>
                    </div>
                </div> --}}
              </div>
                </br>
@endsection
