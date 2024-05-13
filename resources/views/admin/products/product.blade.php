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
                           <h3>Products</h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{url('/product')}}">Product</a></li>
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
                    <a href="{{route('product.create')}}"><button type="submit" class="btn btn-primary">Add Product</button></a>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Product Name</th>
                                        <th>Product CAS No</th>
                                        <th>Pharmacopeia Status</th>
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    @foreach($product as $p)
                                        <td>{{$p->id}}</td>
                                        <td>{{$p->product_name}}</td>
                                        <td>{{$p->product_cas_no}}</td>
                                        <td>{{$p->status}}</td>
                                        <td>
                                        <form method="POST" action="{{route('product.destroy',$p->id)}}">
                                        <center><a class="btn btn-primary" href="{{route('product.edit',$p->id)}}">Edit</a>
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
