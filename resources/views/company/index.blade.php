@extends('layouts.layout')
@section('title')
    Home
@endsection
@section('content')
    <x-app-layout>
        <div class="container py-4">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Priority</th>
                        <th scope="col">Edit Priority</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>

                    @forelse ($data as $ticket)
                        <tr>
                            <td>{{ $ticket['cat'] }}</td>
                            <td>{{ $ticket['desc'] }}</td>
                            <td>{{ $ticket['priority'] }}</td>
                            <td>
                                <form action="{{ route('priority.create', $ticket->id) }}", method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="radio" id="Urgent" name="priority" value="Urgent">
                                    <label for="Urgent">Urgent</label>
                                    <input type="radio" id="css" name="priority" value="Important">
                                    <label for="Important">Important</label>
                                    <input type="radio" id="NotUrgent" name="priority" value="NotUrgent">
                                    <label for="NotUrgent">Not Urgent</label>
                                    <td>
                                        <button class="btn btn-success" type="submit">Submit</button>
                                    </td>
                                </form>
                            </td>
                        </tr>
                    @empty
                    @endforelse

                </tbody>
            </table>

            <div class="d-grid gap-2 col-6 mx-auto">
                <a href="{{ route('item.index') }}" class="btn btn-outline-info btn-lg" >Items</a>
            </div>
        </div>
    </x-app-layout>
@endsection
