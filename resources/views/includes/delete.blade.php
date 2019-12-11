<div class="modal fade" id="upload-product" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="name" placeholder="Product name" class="form-control">
                        </div>

                        <div class="col">
                            <input type="text" name="sku" placeholder="SKU" class="form-control">
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <div class="col">
                            <input type="text" name="price" placeholder="Price" class="form-control">
                        </div>
                        <div class="col">
                            <input type="number" name="quantity" placeholder="Quantity" class="form-control">
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <div class="col">
                            <textarea name="description" placeholder="Description" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-row mt-2">
                        <div class="col">
                            <small class="text-muted">Product image</small>
                            <input type="file" name="image" placeholder="Price" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-block">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
