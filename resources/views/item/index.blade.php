@extends('layouts.layout')
@section('title')
    Items
@endsection
@section('content')
    <x-app-layout>
        <div class="container p-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Edit Qty</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $item )
                        <tr>
                            <td>{{ $item['id'] }}</td>
                            <td>{{ $item['cat'] }}</td>
                            <td>{{ $item['type'] }}</td>
                            <td>{{ $item['price'] }}</td>
                            <td>{{ $item['qty'] }}</td>

                            <form action="{{ route('item.update',$item->id) }}" method="POST">
                                @csrf
                                @method("PUT")
                                <td>
                                    <input type="text" placeholder="QTY"  name="qty" style="width: 100%" >
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-outline-success">Submit</button>
                                </td>

                            </form>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="{{ route('company.index') }}" class="btn btn-outline-info btn-lg">Tickes</a>
            </div>
        </div>
    </x-app-layout>
@endsection
