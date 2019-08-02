@extends('layouts.app')

@section('content')


       <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h3 class="display-4" style="text-align: center">Volo delle 8:30</h3>
                    </div>
                </div>
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h3 class="display-4" style="text-align: center">Volo delle 12:30</h3>
                    </div>
                </div>
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h3 class="display-4" style="text-align: center">Volo delle 19:30</h3>
                    </div>
                </div>
            </div>
           
                
                    @forelse($eventi as $evento)

                <div class="col-md-4">
                    <div class="card" style="margin-bottom:50px">
                        <div class="card-header">{{$evento->name}}</div>
                            <div class="card-body">



                                    <img src="{{$evento->images['0']->url}}" width="100%">
                                @if(isset($evento->pleaseNote))
                                    <p>{{$evento->pleaseNote}}</p>
                                @else
                                no text
                                @endif





                            </div>
                        <div class="card-footer"><a href="{{$evento->url}}" >VEDI EVENTO</a></div>
                        </div>
                    </div>

                    @empty

                    @endforelse

        </div>
        </div>





@endsection
