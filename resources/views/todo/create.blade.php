@extends('layout.app')

{{--@section('title','Todo Lists')--}}

@section('body')
    <br/>
    <a href="/todolist_manager/todo" class="btn btn-info">Back</a>
    <div class="col-lg-4 col-lg-offset-4">
        <h1>{{substr(Route::currentRouteName(),5)}} Item</h1>
        <form class="form-horizontal" action="/todolist_manager/todo/@yield('editId')" method="post">
            {{csrf_field()}}
			@section('editMethod')
			@show
            <fieldset>
                <div class="form-group">
                    <!--<label for="textArea" class="col-lg-2 control-label">Textarea</label>-->
                    <div class="col-lg-10">
                        <input class="form-control" name="title" value="@yield('editTitle')">
                    </div>
                </div>
                <div class="form-group">
                    <!--<label for="textArea" class="col-lg-2 control-label">Textarea</label>-->
                    <div class="col-lg-10">
                        <textarea class="form-control" name="body" rows="3" id="textArea">@yield('editBody')</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
        @include('todo.partials.errors')
    </div>
@endsection