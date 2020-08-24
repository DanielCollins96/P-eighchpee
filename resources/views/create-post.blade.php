@extends('layouts.app')

@section('content')

<form action="">
<fieldset class="form-group">
    <legend>Create Post</legend>
    <div class="form-group">
    <label class="form-control-label" for="title">Title</label>
    <input class="form-control" type="text" id="title" placeholder="Title">
    </div><!-- form group -->
    <div class="form-group">
        <label class="form-control-label" for="file">File</label>
        <input class="form-control" type="file" id="file" placeholder="File">
        </div><!-- form group -->
    <div class="form-group">
        <label class="form-control-label" for="content">Content</label>
        <textarea class="form-control" id="content" rows="3"></textarea>
    </div><!-- form group -->

</fieldset>
<button class="btn btn-primary">Submit</button>
</form>


@endsection



