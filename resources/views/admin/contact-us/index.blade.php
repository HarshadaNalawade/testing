@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading">Contact Us</div>
                    <div class="panel-body">
                        <!-- <a href="{{ url('/contact-us/create') }}" class="btn btn-success btn-sm" title="Add New ContactU">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a> -->
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Contact Address</th>
                                        <th>
                                            <a href="{{ url('/contact-us/1/edit') }}" class="btn btn-success btn-sm" title="Edit Contact Address">
                                                <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                            </a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contactaddress as $item)
                                    <tr>
                                        <td>{{ $item->address_line1 }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $item->address_line2 }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $item->city }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $item->state }}</td>
                                    </tr>
                                    <tr>
                                    <td>{{ $item->country }}</td>                                       
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        <form method="GET" action="{{ url('/contact-us') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Full Name</th><th>Email Id</th><th>Category</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contactus as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->contact_us_id }}</td>
                                        <td>{{ $item->full_name }}</td><td>{{ $item->email_id }}</td><td>{{ $item->category }}</td>
                                        <td>
                                            <a href="{{ url('/contact-us/' . $item->contact_us_id) }}" title="View Message"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="mailto:{{$item->email_id}}" title="Reply" class="btn btn-primary btn-xs"><i class="fa fa-envelope-o" aria-hidden="true"></i> Reply</a>

                                            <form method="POST" action="{{ url('/contact-us' . '/' . $item->contact_us_id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-xs" title="Delete ContactUs" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $contactus->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
