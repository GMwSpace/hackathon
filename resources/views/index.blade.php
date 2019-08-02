@extends('layouts.versione2')

@section('content')
<section class="hero_single version_2">
    <div class="wrapper">
        <div class="container">
            <h3>Scegli la Tua Destinazione</h3>
            <p>Dicci dove vuoi andare e ti diremo cosa fare</p>
            <form method="GET" action="/richiesta">
                @csrf
                <div class="row no-gutters custom-search-input-2">
                    <div class="col-lg-3">
                        <select class="wide" style="display: none;" name="partenza" required="required">
                            <option>Partenza</option>
                            <option value="roma">Roma</option>
                            <option value="milano">Milano</option>
                            <option value="catania">Catania</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <select class="wide" style="display: none;" name="arrivo" required="required">
                            <option>Arrivo</option>
                            <option value="345">New York</option>
                            <option value="319">Las Vegas</option>
                            <option value="324">Los Angeles</option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input class="form-control" type="text" name="dates" placeholder="Quando..." required="required">
                            <i class="icon_calendar"></i>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <input type="submit" class="btn_search" value="Cerca">
                    </div>
                </div>
                <!-- /row -->
            </form>
        </div>
    </div>
</section>
<!-- /hero_single -->


@endsection