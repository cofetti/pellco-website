@extends('layouts.app')

@section('content')

<div class="container-fluid block block-one">
  <div class="img img-1"></div>
  <h1>Meidän puupellettimme</h1>
  <div class="header-link">
    <a href="#order">Kokeile niitä ilmaiseksi</a>
  </div>
</div>
<div id="pellets" class="container-fluid block block-text">
  <h1>Mitä pelletti on?</h1>
  <div class="col-sm-4 sub-block">
    Pelletti on puunjalostuksen sivutuotteista, turpeesta, oljista, puulastuista yms. valmistettu  biopolttoaine. Laadultaan paras pelletti saadaan puupuruista. Pelletti on ympäristöystävällinen polttoaine, tuhkapitoisuus laadukkaassa pelletissä on 1 - 3 %.
  </div>
  <div class="col-sm-4 sub-block">
    Toisin kuin tavallinen polttopuu laadukas pelletti on erittäin kuiva, kosteuspitoisuus on noin 10%. Pelletti on suunnilleen puolitoista kertaa tiiviimpi puuaines kuin tavallinen puu, mikä takaa pelletin korkean lämpöarvon.
  </div>
  <div class="col-sm-4 sub-block">
    Siirtyminen talojen lämmityksessä öljystä, sähköstä ja kaasusta pelletin käyttöön johtaa säästöön lämmitys-kustannuksissa ja koko maapallon mittakaavassa olennaiseen hiilidioksidipäästöjen alentamiseen.
  </div>
</div>
<div class="container-fluid block block-two">
  <div class="col-sm-12">
    Text here
  </div>
</div>
<div id="product" class="container-fluid block block-text">

  @include('layouts.posts_trio')

</div>
<div class="container-fluid block block-three">
  More text
</div>
<div id="order" class="container-fluid block block-text">

  @include('layouts.form')

</div>
<div class="container-fluid block block-four">
  Orange text
</div>
<div class="container-fluid block block-text">
  Map and stuff
</div>
<div id="contacts" class="container-fluid block block-five">
  <div class="col-sm-4">
    <div class="col-md-12">Pellco Oy</div>
    <div class="col-md-12">7600 Glover Road</div>
    <div class="col-md-12">Some Small City</div>
  </div>
  <div class="col-sm-4">
    <div class="col-md-12"><a href="callto:+358 40 123 4567">+358 40 123 4567</a></div>
    <div class="col-md-12"><a href="mailto:info@pellcompany.fi">info@pellco.fi</a></div>
    <div class="col-md-12"></div>
  </div>
  <div class="col-sm-4">
    <div class="col-md-12">More info</div>
  </div>
</div>

<div class="popup" id="popup">
  Kiitos tilauksestasi! Olemme sinuun pian yhteydessä tilaukseesi liittyen.
  <button class="form-control ok-btn">OK</button>
</div>

@endsection