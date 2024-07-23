@extends('backend.layouts.app')

<!--for custom styling-->
@section('style')
@endsection

@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    @include('layouts._messages')
                    <div class="card-body">
                        <h5 class="card-title">User List
                            <a href="{{url('panel/user/add')}}" class="btn btn-primary" style="float: right; margin-top: -12px">Add New</a>
                        </h5>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Email verified</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $counter = 1; @endphp
                                @forelse ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $counter }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ !empty($user->email_verified_at) ? 'Yes' : 'No' }}</td>
                                        <td>{{ !empty($user->status) ? 'Verified' : 'Not verified' }}</td>
                                        <td>{{ date('d-m-Y H:i A', strtotime($user->created_at)) }}</td>
                                        <td>
                                            <a href="{{ url('panel/user/edit/' .$user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a onclick="return confirm('Are you sure you want to delete?')" href="{{ url('panel/user/delete/' .$user->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    @php $counter++; @endphp
                                @empty
                                    <tr>
                                        <td colspan="100%">Record not Found</td>
                                    </tr>
                                @endforelse
                            </tbody>

                        </table>
                        <!--for pagination-->
                        {!! $users->appends(Request::except('page'))->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->



@endsection

<!--customer js-->
@section('script')
@endsection
