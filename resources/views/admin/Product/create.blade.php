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
                     <h3 class="m-b-10">Add Product</h3>
                  </div>
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a></li>
                     <li class="breadcrumb-item"><a href="{{url('Product')}}">Product</a></li>
                     <li class="breadcrumb-item"><a href="#!">Create Product</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">
         <!-- [ form-element ] start -->
         <div class="col-sm-12">
            <div class="card">
               <div class="card-body">
                  <a href="{{url('product')}}"><button type="submit" class="btn btn-primary">Back</button></a>
                  <h3>Add Product</h3>
                  <div class="row">
                     <div class="col-md-6">
                        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                           @csrf

                           <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Category Name</label>
                              <div class="col-sm-8">
                                 <select id="categorySelect" name="category_id" class="form-control">
                                    <option>Select</option>
                                    @foreach($category as $c)
                              <option value="{{$c->id}}">{{$c->name}} </option>
                           @endforeach
                                 </select>
                                 <span class="messages"></span>
                              </div>
                           </div>

                           <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Product_Name</label>
                              <div class="col-sm-8">
                                 <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Product_Name" required>
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Slug</label>
                              <div class="col-sm-8">
                                 <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug"
                                    required>
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Price</label>
                              <div class="col-sm-8">
                                 <input type="text" class="form-control" name="price" id="name"
                                    placeholder="Product_Price" required>
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Minimum Order Quantity</label>
                              <div class="col-sm-8">
                                 <input type="text" class="form-control" name="qty" id="" placeholder="Minimum Order Quantity">
                                 <span class="messages"></span>
                              </div>
                           </div>

                           <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Description</label>
                              <div class="col-sm-8">
                                 <textarea class="textarea" name="desc1" cols="30" rows="10" placeholder="Description"></textarea>
                              </div>
                           </div>

                           <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Image</label>
                              <div class="col-sm-8">
                                 <input type="file" class="form-control" name="image" id="p_img">
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Alt Tag</label>
                              <div class="col-sm-8">
                                 <input type="text" name="alt" class="form-control"
                                    placeholder="Enter Alt Tag For  Image" required />
                                 <span class="messages"></span>
                              </div>
                           </div>

                           <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Multiimage</label>
                              <div class="col-sm-8">
                                 <input type="file" class="form-control" name="multiimage[]" id="p_img"
                                    multiple="multiple" required>
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Multiimage Alt Tag1</label>
                              <div class="col-sm-8 ">
                                 <input type="text" name="alt1" class="form-control"
                                    placeholder="Enter Alt Tag  Image" required />
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Meta Title</label>
                              <div class="col-sm-8">
                                 <input type="text" name="meta_title" class="form-control"
                                    placeholder="Enter Meta Title">
                                 <span class="messages"></span>
                              </div>
                           </div>

                           <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Meta Description</label>
                              <div class="col-sm-8">
                                 <input type="text" name="meta_description" class="form-control"
                                    placeholder="Enter Meta Description">
                                 <span class="messages"></span>
                              </div>
                           </div>

                           <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Meta Keyword</label>
                              <div class="col-sm-8">
                                 <input type="text" name="meta_keyword" class="form-control"
                                    placeholder="Enter Meta Keyword">
                                 <span class="messages"></span>
                              </div>
                           </div>

                           <div class="form-group row">
                              <label class="col-sm-4 col-form-label">Meta Canonical</label>
                              <div class="col-sm-8">
                                 <input type="text" name="meta_canonical" class="form-control"
                                    placeholder="Enter Meta Canonical">
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-4"></label>
                              <div class="col-sm-8">
                                 <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                              </div>
                           </div>
                        </form>

                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- [ form-element ] end -->
      </div>
      <!-- [ Main Content ] end -->

   </div>
</section>
<!-- [ Main Content ] end -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
   $(document).ready(function () {
      $("#name").on("input", function () {
         // Print entered value in a div box
         $("#slug").val($(this).val().split(' ').join('_').toLowerCase());

      });
   });
</script>
@include('admin.footer')
