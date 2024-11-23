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
                <a href="#" class="btn btn-dark">Create</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-4">
                <div class="alert alert-success" style="display: none;">
                    Success message here
                </div>
            </div>
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h4 class="text-white">Products</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th></th>
                                <th>Name</th>
                                <th>Sku</th>
                                <th>Price</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            <!-- Example Product Row -->
                            <tr>
                                <td>1</td>
                                <td>
                                    <img width="50" src="path/to/image.jpg" alt="">
                                </td>
                                <td>Product Name</td>
                                <td>SKU123</td>
                                <td>$99.99</td>
                                <td>01 Jan, 2023</td>
                                <td>
                                    <a href="#" class="btn btn-dark">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                    <form id="delete-product-form-1" method="post" style="display: none;">
                                        <!-- Hidden delete form -->
                                    </form>
                                </td>
                            </tr>
                            <!-- Repeat rows as needed -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  </body>
</html>

<script>

</script>
