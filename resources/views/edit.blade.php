<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Laravel 11 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-dark py-2">
        <h1 class="text-white text-center">Simple Laravel 11 CRUD</h1>
    </div>
    <div class="container">
    <div class="row justify-content-center mt-4">
          <div class="col-md-10 d-flex justify-content-end">
            <a href="{{route('products.list')}}" class="btn btn-dark">Back</a>
          </div>
        </div>
     <div class="row d-flex justify-content-center">
        <div class="col-md-9">
         <div class="card border-0 shadow-lg my-3">
            <div class="card-header bg-dark">
                <h3 class="text-white">Edit Product</h3>
            </div>
          <form enctype="multipart/form-data" action="{{ route('products.update',$product->id) }}" method="post" enctype="multipart/form-data">
                 @method('put')
                 @csrf
              <div class="card-body">
                 <div class="mb-3">
                    <label for="name" class="form-label h5">Name</label>
                    <input value="{{ old('name',$product->name) }}" type="text" class=" @error('name') is-invalid @enderror form-control form-control-lg" placeholder="Name"
                    name="name">
                    @error('name')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                 </div>
                 <div class="mb-3">
                    <label for="sku" class="form-label h5 @error('sku') is-invalid @enderror">Sku</label>
                    <input value="{{ old('sku',$product->sku) }}" type="text" class="form-control form-control-lg" placeholder="Sku"
                    name="sku">
                    @error('sku')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                 </div>
                 <div class="mb-3">
                    <label for="price" class="form-label h5">Price</label>
                    <input value="{{ old('price',$product->price) }}" type="text" class=" @error('price') is-invalid @enderror form-control form-control-lg" placeholder="Price"
                    name="price">
                    @error('price')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                 </div>
                 <div class="mb-3">
                    <label for="description" class="form-label h5">Description</label>
                    <textarea name="description" placeholder="Description" class="form-control" cols="30" rows="5">{{ old('description',$product->description) }}</textarea>
                    @error('description')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                 </div>
                 <div class="mb-3">
                    <label for="image" class="form-label h5">Image</label>
                    <input type="file" class="form-control form-control-lg" name="image">
                    @if ($product->image != "")
                  <img class="w-50 my-2" src="{{asset('uploads/products/'.$product->image)}}" alt="">
                  @endif
                 </div>
                 <div class="d-grid">
                    <button class="btn btn-lg btn-primary">Update</button>
                 </div>
               </div>
          </form>
         </div>
        </div>
     </div>
    </div>
  </body>
</html>
