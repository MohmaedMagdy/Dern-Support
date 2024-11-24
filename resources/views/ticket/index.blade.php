@extends('layouts.layout')
@section('title')
    Create Ticket
@endsection
@section('content')
    <div class="container p-4">
        <h2 class="text-center">Create Product</h2>
        <form action="{{ route('ticket.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <div class="mb-3">

                    <label for="cat" class="form-label">Category</label>
                    <select name="cat" class="form-select mt-10" aria-label="Default select example">
                        <option selected> Select Your Ticket Category </option>
                        <option value="Screen">Screen</option>
                        <option value="Mouse">Mouse</option>
                        <option value="Processor">Processor</option>
                        <option value="SSD">SSD</option>
                        <option value="Ram">Ram</option>
                      </select>
                        </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">Description</label>
                    <input name="desc" type="textarea" class="form-control" id="desc">
                </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>
            </div>
            </div>
        </form>
    </div>
@endsection
