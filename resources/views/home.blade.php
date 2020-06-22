@extends('layouts.master')

@section('content')
<div class="main-content">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="overview-wrap">
<h2 class="title-1">overview</h2>
<button class="au-btn au-btn-icon au-btn--blue">
<i class="zmdi zmdi-plus"></i>add item</button>
</div>
</div>
</div>
<div class="row m-t-25">
<div class="col-sm-6 col-lg-4">
<div class="overview-item overview-item--c1">
<div class="overview__inner">
<div class="overview-box clearfix">
<div class="icon">
<i class="zmdi zmdi-account-o"></i>
</div>
<div class="text">
<h2>10368</h2>
<span>members online</span>
</div>
</div>
<div class="overview-chart">
<canvas id="widgetChart1"></canvas>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="overview-item overview-item--c2">
<div class="overview__inner">
<div class="overview-box clearfix">
<div class="icon">
<i class="zmdi zmdi-shopping-cart"></i>
</div>
<div class="text">
<h2>388,688</h2>
<span>items solid</span>
</div>
</div>
<div class="overview-chart">
<canvas id="widgetChart2"></canvas>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="overview-item overview-item--c3">
<div class="overview__inner">
<div class="overview-box clearfix">
<div class="icon">
<i class="zmdi zmdi-calendar-note"></i>
</div>
<div class="text">
<h2>1,086</h2>
<span>this week</span>
</div>
</div>
<div class="overview-chart">
<canvas id="widgetChart3"></canvas>
</div>
</div>
</div>
</div>

</div>

<div class="row ">
    <div class="col-lg-12 ">
            <div class="row form-group">
                    <div class="col col-md-2">
                        <label for="select" class=" form-control-label">Typologie</label>
                    </div>
                    <div class="col col-md-2">
                            <label for="select" class=" form-control-label">Annee</label>
                    </div>
                    <div class="col col-md-2">
                            <label for="select" class=" form-control-label">Mois</label>
                    </div>
                    <div class="col col-md-2">
                            <label for="select" class=" form-control-label">Semaine</label>
                    </div>
                    <div class="col col-md-2">
                            <label for="select" class=" form-control-label">jour</label>
                    </div>

                </div>
    </div>
</div>
<div class="row ">
    <form method="post"  action="{{ route('GetData') }}" >
            {!! csrf_field() !!}
        <div class="col-lg-12" >
                <div class="row form-group">
    <div class="col-12 col-md-2">
        <select name="typo" id="typo" class="form-control">
            <option value="all">Toutes les typologie</option>
            <option value="1">Dépannage</option>
            <option value="2">Entretien</option>
        </select>
    </div>
    <div class="col-12 col-md-2">
            <select name="annee" id="annee" class="form-control" >
                <option value="all">Toutes les années</option>
                @foreach($annee as $a)
                <option value="{{ $a->S_LAN }}">{{ $a->S_LAN }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12 col-md-2">
                <select name="mois" id="mois" class="form-control" >


                </select>
            </div>
            <div class="col-12 col-md-2">
                    <select name="semaine" id="semaine" class="form-control" >


                    </select>
                </div>
                <div class="col-12 col-md-2">
                        <select name="jour" id="jour" class="form-control">


                        </select>
                    </div>

                    <div class="col-12 col-md-2">
                            <button type="submit" class="btn btn-success">
                                    <i class="fa fa-magic"></i>&nbsp; chercher</button>
                        </div>


</div>
</div>
</form>
</div>
<div class="row m-b-25 m-t-25">
<div class="col-lg-12">
<h2 class="title-1 m-b-25">Earnings By Items</h2>
<div class="table-responsive table--no-card m-b-40">
<table class="table table-borderless table-striped table-earning">
<thead>
<tr>
<th style="background: #e5e5e5;">
        Note ≥85 / Note 85 </th>
<th style="background: #e5e5e5;"></th>
<th>Individuel</th>
<th class="text-right">Collectif</th>
<th class="text-right">Ensemble</th>

</tr>
</thead>
<tbody>
<tr>
<td>2018-09-29 05:57</td>
<td>{{ 100398 }}</td>
<td>iPhone X 64Gb Grey</td>
<td class="text-right">$999.00</td>
<td class="text-right">1</td>

</tr>
<tr>
<td>2018-09-28 01:22</td>
<td>100397</td>
<td>Samsung S8 Black</td>
<td class="text-right">$756.00</td>
<td class="text-right">1</td>

</tr>
<tr>
<td>2018-09-27 02:12</td>
<td>100396</td>
<td>Game Console Controller</td>
<td class="text-right">$22.00</td>
<td class="text-right">2</td>

</tr>
<tr>
<td>2018-09-26 23:06</td>
<td>100395</td>
<td>iPhone X 256Gb Black</td>
<td class="text-right">$1199.00</td>
<td class="text-right">1</td>

</tr>
<tr>
<td>2018-09-25 19:03</td>
<td>100393</td>
<td>USB 3.0 Cable</td>
<td class="text-right">$10.00</td>
<td class="text-right">3</td>

</tr>
<tr>
<td>2018-09-29 05:57</td>
<td>100392</td>
<td>Smartwatch 4.0 LTE Wifi</td>
<td class="text-right">$199.00</td>
<td class="text-right">6</td>

</tr>
<tr>
<td>2018-09-24 19:10</td>
<td>100391</td>
<td>Camera C430W 4k</td>
<td class="text-right">$699.00</td>
<td class="text-right">1</td>

</tr>
<tr>
<td>2018-09-22 00:43</td>
<td>100393</td>
<td>USB 3.0 Cable</td>
<td class="text-right">$10.00</td>
<td class="text-right">3</td>

</tr>
</tbody>
</table>
</div>
</div>

</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
    $("select[name='annee']").change(function(){
            $.ajax({
                url: "/mois/" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#mois').html(data.html);

                }
            });
        });
        $("select[name='mois']").change(function(){
            $.ajax({
                url: "/semaine/" + $("#annee").val()+"/"+$("#mois").val(),
                method: 'GET',
                success: function(data) {
                    $('#semaine').html(data.html);

                }
            });
        });
        $("select[name='semaine']").change(function(){
            $.ajax({
                url: "/jour/" + $("#annee").val()+"/"+$("#mois").val()+"/"+$("#semaine").val(),
                method: 'GET',
                success: function(data) {
                    $('#jour').html(data.html);

                }
            });
        });

  </script>
@endsection
