@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12 ">
        @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3>Users
                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary  btn-sm text-white float-end">
                Add User
                    </a>

                </h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @if ($user->role_as =='0')
                                <label class="badge btn-primary">user</label>
                                @elseif ($user->role_as =='1')
                                <label class="badge btn-success">Admin</label>
                                @else
                                <label class="badge btn-danger">none</label>


                                @endif
                            </td>
                            <td>
                                <a href="{{url('admin/users/' .$user->id.'/edit') }}" class="btn btn-sm btn-success">Edit</a>
                                {{-- <a href="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this data?')" class="btn btn-sm btn-danger">Delete</a> --}}
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this data?')">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>


                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">No users Available</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
            {{-- {{$users->link()}} --}}
        </div>
    </div>
</div>


@endsection
