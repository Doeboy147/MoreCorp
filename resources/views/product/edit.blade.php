@extends('layouts.admin')
@section('content')
    <div class="row">
        @include('includes.sidebar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
               <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                   <h2 class="h3">Edit Product</h2>
               </div>

            <center>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid img-rounded img-thumbnail" width="200" src="{{ asset('images/thumbnail.svg') }}">
                            <form>
                                <div class="form-row mt-2">
                                    <div class="col">
                                        <small class="float-left">Product name</small>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="form-row mt-2">
                                    <div class="col">
                                        <small class="float-left">Price</small>
                                        <input type="text" name="price" class="form-control">
                                    </div>
                                    <div class="col">
                                        <small class="float-left">SKU</small>
                                        <input type="text" name="sku" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="col">
                                        <small class="float-left">Quantity</small>
                                        <input type="text" name="quantity" class="form-control">
                                    </div>
                                    <div class="col">
                                        <small class="float-left">Product image</small>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="col">
                                        <small class="float-left">Description</small>
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="col">
                                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </center>

        </main>
    </div>

@stop