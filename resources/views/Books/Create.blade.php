@extends('Shared._layout')
@section('title', 'Books Create')
@section('content')
    <h2>Create</h2>
    <h4>Books</h4>
    <hr />
    <div class="row">
        <div class="col-md-4">
            <form method="post" action="{{url('Books/Create')}}">
                @csrf
                <div class="form-group">
                    <label  class="control-label">book_isbn</label>
                    <input name="isbn" class="form-control" />
                </div>
                <div class="form-group">
                    <label  class="control-label">book_title</label>
                    <input name="title" class="form-control" />
                </div>
                <div class="form-group">
                    <label  class="control-label">book_author</label>
                    <input name="author" class="form-control" />
                </div>
                <div class="form-group">
                    <label  class="control-label">book_image</label>
                    <input name="image" class="form-control" />
                </div>
                <div class="form-group">
                    <label  class="control-label">book_descr</label>
                    <input name="descr" class="form-control" />
                </div>
                <div class="form-group">
                    <label  class="control-label">book_price</label>
                    <input name="price" class="form-control" />
                </div>
                <div class="form-group">
                    <label  class="control-label">supplier_id</label>
                    <input name="supplier_id" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit"  class="btn btn-default" />
                </div>
            </form>
        </div>
    </div>
    <div>
        <a href="{{url('Books/')}}">Back to List</a>
    </div>
@endsection

