@extends('layouts.app')

@section('content')
<div class="row m-2">

    <div class="col-md-12">
        <form role="form" action="{{ route('user.store') }}">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Job</label>
                <input type="text" class="form-control" name="job" />
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>

</div>
@endsection
