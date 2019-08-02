@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">PRENOTA</div>

                    <div class="card-body">
                        <form method="GET" action="/richiesta">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Luogo di Partenza</label>
                                    <select  class="form-control" name="partenza">
                                        <option value="roma">Roma</option>
                                        <option value="milano">Milano</option>
                                        <option value="catania">Catania</option>

                                    </select>


                                </div>

                                <div class="col-md-6">
                                    <label>Luogo di Arrivo</label>
                                    <select  class="form-control" name="arrivo">
                                        <option value="345">New York</option>
                                        <option value="319">Las Vegas</option>
                                        <option value="324">Los Angeles</option>

                                    </select>


                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-6">


                                    <input class="form-control" type="text" id="datepicker" lang="it" name="datepart" placeholder="Quando Vorresti Partire ?" required="required" autocomplete="off">


                                </div>

                                <div class="col-md-6">

                                    <input class="form-control" type="text" id="offdatepicker" lang="it" name="daterit" placeholder="Quando Vorresti Ritornare ?" required="required" autocomplete="off">


                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">
                                        INVIA
                                    </button>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
