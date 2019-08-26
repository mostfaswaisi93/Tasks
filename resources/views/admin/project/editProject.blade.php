@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>
                        Edit Project
                        <a href="/admin/projects" class="btn btn-default pull-right">Go Back</a>
                    </h2>
                </div>
                <div class="panel-body">
                    <form method="POST" action="/admin/projects/{{$project->id}}" accept-charset="UTF-8"
                        class="form-horizontal" role="form">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title" class="col-md-2 control-label">Title</label>
                            <div class="col-md-8">
                                <input class="form-control" required="required" autofocus="autofocus" name="title"
                                    type="text" id="title" value="{{$project->title}}" />
                                <span class="help-block">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-md-2 control-label">Description</label>
                            <div class="col-md-8">
                                <textarea class="form-control" required="required" name="description" cols="50"
                                    rows="10" id="description">{{$project->description}}</textarea>
                                <span class="help-block">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="department_id" class="col-md-2 control-label">Department</label>
                            <div class="col-md-8">
                                <select class="form-control" required="required" id="department_id"
                                    name="department_id">
                                    @foreach ($departments as $department)
                                    <option value="{{$department->id}}" @if($department->id == $project->department_id)
                                        selected @endif>{{$department->name}}</option>
                                    @endforeach
                                </select>
                                <span class="help-block">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
