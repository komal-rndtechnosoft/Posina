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
                            <h3 class="m-b-10">Update </h3>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('home')}}"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{url('')}}"></a></li>
                            <li class="breadcrumb-item"><a href="#!">Update </a></li>
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
                        <h3>Update </h3>
                        <div class="card-body table-border-style">
                                         <!-- [ form-element ] start -->
                                            <div class="col-sm-12">
                                                <div class="col-md-12 mb-3 sm-6">
                                                    <div class="form-group" style="margin-bottom:3rem;">
                                                        <hr>
                                                        <label>Multi Images</label>
                                                         <div class="">
                                                             <div class="row">
                                                             @php
                                                                $multiImages = explode('|', $product->multiimage);
                                                            @endphp

                                                            @if (!empty($multiImages[0]))
                                                                @foreach ($multiImages as $index => $image)
                                                   
                                                                        <div class="col-md-2 mb-2">
                                                                            <div class="position-relative">
                                                                                <a href="{{ asset('/Backend/images/product') . '/' . $image }}">
                                                                                    <img src="{{ asset('/Backend/images/product') . '/' . $image }}" class="img-thumbnail" style="width:150px;height:150px;">
                                                                                </a>
                                                            <form action="{{ route('product.remove1', ['id' => $product->id, 'image' => $image, $index]) }}" method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{$index}}" style="padding-top: 3px;margin-top: 5px; padding-left: 7px; padding-right: 10px; margin-left: 13px;">Delete</button>
                                                                    
                                                                            <!-- Delete Modal -->
                                                                            <div class="modal fade" id="deleteModal{{ $index}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $index}}" aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title" id="deleteModalLabel{{$index}}">Confirm Delete</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            Are you sure you want to delete this Image?
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                                                                  
                                                                 </div>
                                                                        </div>
                                                                    @endforeach
                                                                @else
                                                                    <p>No images added.</p>
                                                                @endif
    
                                                                </div>
                                                                 </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                <div class="row">
                                    <div class="col-md-6">
                            <form id="main" action="{{ route('product.update', $product->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                    {{ method_field('PATCH') }}
                                    {{ csrf_field() }}

                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Category_Name</label>
                                        <div class="col-sm-8">
                                            <select id="categorySelect" name="category_id" class="form-control">
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    @if(isset($selectedCategory) && $selectedCategory->id ==
                                                    $category->id) selected @endif>{{ $category->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            <span class="messages"></span>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Product_Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Product_Name" value="{{$product->name}}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">Slug</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="slug" id="slug"
                                                placeholder="Slug" value="{{ $product->slug }}">
                                            <span class="messages"></span>
                                        </div>
                                    </div>
                                            <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Price</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="price" id="name"
                                            placeholder="Product_Price" value="{{ $product->price }}" >
                                        <span class="messages"></span>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Description</label>
                                                <div class="col-sm-8">
                                                    <textarea class="textarea"  rows="3" cols="50" type="text" name="desc1"
                                                        class="form-control" placeholder="Enter Description"style="width:500px;height:400px">{{ $product->desc1 }}</textarea>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>


                                                 <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Image<h6 style="font-size: 14px; color: red;">Size:(710 X 300px)</h6></label>
                                                    <div class="col-sm-8">
                                                       <input type="file" class="form-control" name="image" id="p_img">
                                                       <span class="messages"></span>

                                                    </div>
                                                </div>
                                                
                                                   <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Image Alt</label>
                                                    <div class="col-sm-8">
                                                    <input type="text" name="alt" id="alt" class="form-control"  value="{{$product->alt}}">
                                                       <span class="messages"></span>

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label"></label>
                                                    <div class="col-sm-8">
                                                        <img class="form-control"  style="height: 300px; width: 710px;" src="{{ asset('/Backend/images/product/'.$product->image) }}" alt="Card image cap"><br><br><br>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Multimages
                                                    <h6 style="font-size: 14px; color: red;">Size:(710 X 300px)</h6>
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="file" class="form-control" name="multiimage[]" id="p_img" multiple="multiple">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                              <div class="row">
                                                 @php
                                              $multiImages = explode('|', $product->multiimage);
                                                @endphp
                                                   @if (!empty($multiImages[0]))
                                                 @foreach ($multiImages as $index => $image)
                                                <div class="col-md-4 mb-2">
                                                 <div class="position-relative">
                                                    <a href="{{ asset('/Backend/images/product') . '/' . $image }}">
                                                   <img src="{{ asset('/Backend/images/product') . '/' . $image }}" class="img-thumbnail" style="width:200px;height:200px;">
                                                    </a>
                                                       </div>
                                                     </div>
                                                     @endforeach
                                                     @else
                                                      <p>No images added.</p>
                                                     @endif
                                                                </div>
                                                  <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Multiimage Alt</label>
                                                    <div class="col-sm-8">
                                                    <input type="text" name="alt1" id="alt" class="form-control"  value="{{$product->alt1}}">
                                                       <span class="messages"></span>

                                                    </div>
                                                </div>
                                                  <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Meta Title</label>
                                                    <div class="col-sm-8">
                                                     <input type="text" name="meta_title" class="form-control" placeholder="Enter Meta Title" value="{{$product->meta_title}}">
                                                     <span class="messages"></span>
                                                    </div>
                                                 </div>
                                                 
                                                 <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Meta Description</label>
                                                    <div class="col-sm-8">
                                                     <input type="text" name="meta_description" class="form-control" placeholder="Enter Meta Description" value="{{$product->meta_description}}">
                                                     <span class="messages"></span>
                                                    </div>
                                                 </div>
                                                 
                                                 <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Meta Keyword</label>
                                                    <div class="col-sm-8">
                                                     <input type="text" name="meta_keyword" class="form-control" placeholder="Enter Meta Keyword" value="{{$product->meta_keyword}}">
                                                     <span class="messages"></span>
                                                    </div>
                                                 </div>
                                                 
                                                 <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Meta Canonical</label>
                                                    <div class="col-sm-8">
                                                     <input type="text" name="meta_canonical" class="form-control" placeholder="Enter Meta Canonical" value="{{$product->meta_canonical}}">
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                        <script>
                        $(document).ready(function(){
                            $("#name").on("input", function(){
                                // Print entered value in a div box
                                    $("#slug").val($(this).val().split(' ').join('_').toLowerCase());

                            });
                        });
                        </script>
<!-- [ Main Content ] end -->
@include('admin.footer')
