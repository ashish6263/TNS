@section('title','Update Member')
@extends('admin.main')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>
            <a onclick="window.history.back()" class="btn btn-primary float-end">BACK</a>
        </h4>
    </div>
    <div class="card-body">
        <h6>Edit Member</h6>
        <form action="{{ route('admin.updateMember',$team->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group py-4 mb-3">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{$team->name}}">
            </div>
            <div class="form-group py-4 mb-3">
                <label for="">Profession</label>
                <input type="text" name="profession" class="form-control" value="{{$team->profession}}">
            </div>
            <div class="form-group mb-3">
                <label for="">Picture</label>
                <input type="file" name="picture" class="form-control">
                <img src="{{ asset('uploads/team/'.$team->image) }}"  alt="Image">
                        
            </div>
            <div class="form-group py-4 mb-3">
                <button type="submit" class="btn btn-primary">Update Member</button>
            </div>

        </form>

    </div>
</div>
@endsection