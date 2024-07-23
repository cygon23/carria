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
                        <h5 class="card-title">Category List
                            <a href="{{url('panel/category/add')}}" class="btn btn-primary" style="float: right; margin-top: -12px">Add New</a>
                        </h5>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Meta Title</th>
                                    <th scope="col">Meta Description</th>
                                    <th scope="col">Meta Keywords</th>

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
                                        <td>{{ $user->slug }}</td>
                                        <td>{{ $user->title }}</td>
                                        <td>{{ $user->meta_title }}</td>
                                        <td>{{ $user->meta_description }}</td>
                                        <td>{{ $user->meta_keywords }}</td>
                                        <td>{{ empty($user->status) ? 'Active' : 'Not Active' }}</td>
                                        <td>{{ date('d-m-Y H:i A', strtotime($user->created_by)) }}</td>
                                        <td>
                                            <a href="{{ url('panel/category/edit/' .$user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a onclick="return confirm('Are you sure you want to delete?')" href="{{ url('panel/category/delete/' .$user->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
