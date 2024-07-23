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
                        <h5 class="card-title">Blog List (Total: {{$total}})</h5>
                            <a href="{{url('panel/blog/add')}}" class="btn btn-primary" style="float: right; margin-top: -12px">Add New</a>
                        </h5>

                              <!-- Vertical Form -->
                              <form class="row" action="" method="GET">
                                {{-- <div class="col-md-1" style="margin-bottom: 10px;">
                                  <label  class="form-label">ID</label>
                                  <input type="text" class="form-control" name="id">
                                </div> --}}

                                <div class="col-md-2"  style="margin-bottom: 10px;">
                                    <label  class="form-label">Username</label>
                                    <input type="text" class="form-control" value="{{ Request::get('username') }}" name="username">
                                  </div>

                                  <div class="col-md-2" style="margin-bottom: 10px;">
                                    <label  class="form-label">Title</label>
                                    <input type="text" class="form-control" {{ Request::get('title') }} name="title">
                                  </div>

                                  <div class="col-md-2"  style="margin-bottom: 10px;">
                                    <label  class="form-label">Category</label>
                                    <input type="text" class="form-control"  {{ Request::get('category') }}  name="category">
                                  </div>

                                  <div class="col-md-1" style="margin-bottom: 10px;">
                                    <label  class="form-label">Publish</label>
                                    <select class="form-control" name="is_publish">
                                        <option value="">Select</option>
                                        <option {{ (Request::get('is_publish') == 1)? 'selected' : ''}} value="1">Yes</option>
                                        <option {{ (Request::get('is_publish') == 100)? 'selected' : ''}} value="100">No</option>
                                       </select>
                                  </div>

                                  <div class="col-md-3" style="margin-bottom: 10px;">
                                    <label  class="form-label">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="">Select</option>
                                        <option {{ (Request::get('status') == 1)? 'selected' : ''}} value="1">Active</option>
                                        <option {{ (Request::get('status') == 100)? 'selected' : ''}} value="100">In Active</option>
                                       </select>
                                  </div>

                                  <div class="col-md-2"  style="margin-bottom: 10px;">
                                    <label  class="form-label">Start Date</label>
                                    <input type="date" class="form-control"  {{ Request::get('start_date') }}  name="start_date">
                                  </div>



                                <div class="col-md-12">
                                  <button type="submit" class="btn btn-primary">Search</button>
                                  <a href="{{url('panel/blog/list')}}" class="btn btn-secondary">Reset</a>
                                </div>
                              </form>

                     <hr />

                        <table class="table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Publish Status</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($getRecord as $value)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>
                                                @if(!empty($value->image_url))
                                                    <img src="{{ $value->image_url }}" alt="" style="height:50px; width:50px">
                                                @endif
                                            </td>
                                            <td>{{ $value->user_name }}</td>
                                            <td>{{ $value->title }}</td>
                                            <td>{{ $value->category_name }}</td>
                                            <td>{{ empty($value->status) ? 'Active' : 'Not Active' }}</td>
                                            <td>{{ empty($value->is_publish) ? 'Active' : 'Not Active' }}</td>
                                            <td>{{ date('d-m-Y H:i A', strtotime($value->created_at)) }}</td>
                                            <td>
                                                <a href="{{ url('panel/blog/edit/' . $value->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <a onclick="return confirm('Are you sure you want to delete?')" href="{{ url('panel/blog/delete/' . $value->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9">No records found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                        </table>

                        {{-- {!! $getRecord->appends(Request::except('page'))->links() !!} --}}

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

<!--customer js-->
@section('script')
@endsection
