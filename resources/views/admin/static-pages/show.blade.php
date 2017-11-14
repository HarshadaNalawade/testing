@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading">StaticPage</div>
                    <div class="panel-body">

                        <a href="{{ url('/static-pages') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/static-pages/' . $staticpage->page_id . '/edit') }}" title="Edit StaticPage"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/staticpages' . '/' . $staticpage->page_id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete StaticPage" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr><th> Page Title </th><td> {{ $staticpage->page_title }} </td></tr><tr><th> Page Content </th><td> {!! html_entity_decode($staticpage->page_content) !!} </td></tr>
                                </tbody>
                            </table>
                        </div>

                        @if (count($errors) > 0)
                            <div class="alert alert-danger alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">X</a>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{ Form::open(array('url' => '/static-pages/upload_content','files'=>'true')) }}
                        <h3>Upload {{$staticpage->page_title}} document</h3>
                        {{ Form::file('page_content') }}
                        {{ Form::hidden('page_id',$staticpage->page_id) }}
                        {{ Form::submit('Upload File',['class'=>'btn btn-primary']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
