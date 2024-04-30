@extends('TokoIBIK.layouts.index')

@section('main-content')
    <div class="row mt-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header fw-bold ">
                    List of Products
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $product)
                                <tr>
                                    <th>{{ $loop->index + 1 }}</th>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>Rp {{ $product->price }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group">
                                            <a href="/details/{{ $product->id }}">
                                                <button type="button" class="btn btn-primary btn-sm">
                                                    <i class="bi bi-eye-fill"></i>
                                                </button>
                                            </a>
                                            <a href="/update/{{ $product->id }}">
                                                <button type="button" class="btn btn-success btn-sm">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                            </a>
                                            <a href="/delete/{{ $product->id }}">
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah data tersebut mau dihapus?')">
                                                    <i class="bi bi-trash-fill"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mt-3">
                {{ $data->links() }}
            </div>
        </div>
        <div class="col-lg-4">
            @include('TokoIBIK.modules.products.create')
        </div>
    </div>
@endsection
