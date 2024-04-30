@extends('TokoIBIK.layouts.index')

@section('main-content')
    <div class="mt-3">
        <a href="/" class="text-decoration-none ">
            <i class="bi bi-arrow-left"></i>
            <span>Back to Dashboard</span>
        </a>
        <div class="name mt-4">
            <span class="text-secondary">Product :</span>
            <h2>{{ $data->name }}</h2>
        </div>
        <div class="desc mt-4">
            <span class="text-secondary">Description :</span>
            <h2>{{ $data->description }}</h2>
        </div>
        <div class="price mt-4">
            <span class="text-secondary">Price :</span>
            <h2>Rp {{ $data->price }}</h2>
        </div>
    </div>
@endsection
