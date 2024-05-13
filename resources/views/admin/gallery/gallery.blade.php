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
                           <h3>Gallery</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Gallery</a></li>
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
                    <a href="{{route('gallery.create')}}"><button type="submit" class="btn btn-primary">Add Image</button></a>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Id</th>
                                        <th>Category Name</th>
                                        <th>Image</th>
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    @foreach($data as $d)
                                        <td>{{$d->id}}</td>
                                        <td>{{$d->cat_id}}</td>
                                        <td>{{$d->cat_name}}</td>
                                        <td><img src="{{asset('admin/assets/images/gallery/'.$d->image)}}" height="150px;" width="150px;" alt="Responsive image"></td>
                                        <td>
                                        <form method="POST" action="{{route('gallery.destroy',$d->id)}}">
                                        <center><a class="btn btn-primary" href="{{route('gallery.edit',$d->id)}}">Edit</a>
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn  btn-danger">Delete</button></center>
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
