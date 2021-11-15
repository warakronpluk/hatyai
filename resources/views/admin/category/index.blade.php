@extends('layouts.admin.admin')
@section('body')
<div class="table-responsive">
    <h2>Create New Content</h2>
    <form action="" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name"  placeholder="Content Name">
        </div>
        
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection