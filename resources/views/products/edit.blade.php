<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple CRUD Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Simple CRUD Template</h3>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="#" class="btn btn-dark">Back</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h4 class="text-white">Edit Product</h4>
                    </div>
                    <form enctype="multipart/form-data" method="post">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label h6">Name</label>
                                <input type="text" class="form-control form-control" placeholder="Name" name="name" id="name">
                            </div>
                            <div class="mb-3">
                                <label for="sku" class="form-label h6">Sku</label>
                                <input type="text" class="form-control form-control" placeholder="Sku" name="sku" id="sku">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label h6">Price</label>
                                <input type="text" class="form-control form-control" placeholder="Price" name="price" id="price">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label h6">Description</label>
                                <textarea placeholder="Description" class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label h6">Image</label>
                                <input type="file" class="form-control form-control" name="image" id="image">
                                <img class="w-50 my-3" src="#" alt="Preview Image" style="display: none;">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
  </body>
</html>
