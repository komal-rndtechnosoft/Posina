@include('admin.header')

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                           <h3>Testimonials</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('testimonials')}}">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
          
            <!-- [ stiped-table ] start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                    <a href="{{route('testimonials.create')}}"><button type="submit" class="btn btn-primary">Add Testimonials</button></a>
                    <a href="{{route('show5')}}"><button type="submit" class="btn btn-primary">Update Testimonials Title</button></a>

                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                        <table id="cbtn-selectors" class="table table-striped table-bordered nowrap">
                       <thead>
                           <tr style="text-transform: capitalize;">
                              <th>Id</th>
                                   <th>Name</th>
                                 <th>Action</th>
                              </tr>
                                   </thead>
                                <tbody>
                              <tr>
                                 @foreach($data as $d)
                                 <td>{{$d->id}}</td>
                                  <td>{{$d->name}}</td>
                                   <td> 
                                     <form action="{{ route('testimonials.destroy',$d->id) }}"
                                     method="Post">
                                       <a class="btn btn-primary"
                                        href="{{ route('testimonials.edit',  $d->id) }}">Edit</a>
                                           @csrf
                                             @method('DELETE')
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$d->id}}">Delete</button>
                                                            <!-- Delete Modal -->
                                                            <div class="modal fade" id="deleteModal{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$d->id}}" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="deleteModalLabel{{$d->id}}">Confirm Delete</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Are you sure you want to delete this data?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    </table>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- [ stiped-table ] end -->
                                    </div>
                                    <!-- [ Main Content ] end -->
                                </div>
                            </section>
                            <!-- [ Main Content ] end -->

                            @include('admin.footer')
