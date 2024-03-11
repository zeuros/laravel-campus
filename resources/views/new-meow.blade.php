@extends('layouts.app')



@section('content')
    <form id="target" class="form-horizontal">
        @csrf
        <fieldset>

            <div class="form-group">
                <label class="col-md-4 control-label" for="Meow title">Meow title</label>
                <div class="col-md-4">
                    <input id="Meow title" name="title" type="text" placeholder="Title" class="form-control input-md"
                           required="">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="Meow contents">Meow message</label>
                <div class="col-md-4">
                    <input id="Meow contents" name="meowContents" type="text" placeholder="meow contents"
                           class="form-control input-md"
                           required="">
                </div>
            </div>


            <input type="submit" formmethod="post" value="Go !">
        </fieldset>
    </form>
@endsection
