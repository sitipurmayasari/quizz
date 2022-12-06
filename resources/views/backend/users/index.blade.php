@extends('backend.layouts.default')

@section('page_title', 'Listing Users')

@section('style')
@stop

@section('content')

    @if( ! Auth::user()->can('manage_user'))
        @include('errors.401')
    @else        
        <div class="x_panel">
            <div class="x_title">
                <h2>
                    Daftar Users
                </h2>
                <a href="{{ route('user.create') }}" class="btn btn-success pull-right">Tambah User</a>

                <div class="col-md-6 col-sm-6 col-md-offset-1">
                    <form method="GET" action="{{ route('search-user') }}">
                        <div class="input-group">
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter name or email..." class="form-control">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-info">Cari</button>
                            </span>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Date/Time Added</th>
                                <th>User Roles</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ (($users->currentPage() - 1 ) * $users->perPage() ) + $loop->iteration }}</td>
                                <td>{{ ucwords($user->name) }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                                <td>{{  ucwords($user->roles()->pluck('name')->implode(', ')) }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                                <td>{{$user->asal}}</td>
                                <td>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-info action_btn" style="margin-right: 3px;">Edit</a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="post"
                                        onsubmit="return confirm('Delete this record?');">
                                        <input type="hidden" name="_method" value="DELETE" />
                                        {{ csrf_field() }}
                                        <button type="submit" name="Delete" class="btn btn-sm btn-danger action_btn">Delete</button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                    <div>Showing
                        {{ ($users->currentpage()-1) * $users->perpage()+1}} to
                        {{(($users->currentpage()-1) * $users->perpage())+$users->count()}} of
                        {{$users->total()}} records
                    </div>

                    {{ $users->links() }}
                </div>

            </div>
        </div>
    @endif

@stop