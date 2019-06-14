@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Contacts
                    <span class="float-right">
                        <a href="{{route('contact.index')}}">Contacts</a>
                    </span>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{route('contact.update',[$contacts->id])}}">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{$contacts->name}}">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" value="{{$contacts->address}}">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{$contacts->phone}}">
                        </div><div class="form-group">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
