@extends('auth.layouts')
@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    h1 {
        color: cadetblue;
        font-size: 30PX;
        margin-bottom: 20px;
        text-transform: uppercase;
    }
</style>
<h1>Customer Dashboard</h1>
<!-- First Row -->
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('img/jaffna.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Jaffna</h5>
                <p class="card-text">Unique in landscape and identity, and steeped in complex history both ancient...</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('img/mirissa.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Mirissa</h5>
                <p class="card-text">A small town on the South coast of Sri Lanka, Mirissa is...</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('img/ella.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Ella</h5>
                <p class="card-text">Majestic waterfalls, hidden caves, breathtaking vistas across the mountains: Ella is a...</p>
            </div>
        </div>
    </div>
</div>

<!-- Second  Row -->
<div class="row mt-4">
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('img/nuwerliya.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nuwara Eliya</h5>
                <p class="card-text">Renowned as ‘Little England’, here in the tea country, traditions, breathtaking views...</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('img/sigiriya.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Sigiriya</h5>
                <p class="card-text">A giant rock rising 370m above the surrounding flat landscape, this World...</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('img/yala.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Yala</h5>
                <p class="card-text">Diverse habitats, 44 mammal species, over 200 species of birds and a...</p>
            </div>
        </div>
    </div>
</div>

<!-- Third  Row -->
<div class="row mt-4">
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('img/trinco.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Trincomalee</h5>
                <p class="card-text">Ancient rulers and colonial powers fought over it; now it is the...</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('img/unawatuna.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Unawatuna</h5>
                <p class="card-text">Much sought out for its ‘chilled out’ atmosphere, Unawatuna is a beautiful...</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="{{ asset('img/wilpattu.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Wilpattu</h5>
                <p class="card-text">With over 131,000 hectares stretching from the North Western coast to the...</p>
            </div>
        </div>
    </div>
</div>
@endsection