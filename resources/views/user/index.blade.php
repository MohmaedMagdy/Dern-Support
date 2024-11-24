@extends('layouts.layout')
@section('title')
    Home
@endsection
@section('content')
<x-app-layout>

<div class="container text-center mt-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>

            </tr>
        </thead>
        <tbody>
            @foreach ( $tickets as $ticket )
                <tr>
                    <td>{{ $ticket->cat }}</td>
                    <td>{{ $ticket->desc }}</td>
                    <td>{{ $ticket->price }} </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="{{ route('ticket.create') }}" class="btn btn-outline-info btn-lg" type="submit">Create tickes</a>
    </div>
</div>
</x-app-layout>
@endsection



