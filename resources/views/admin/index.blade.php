@extends('layouts.admin')
@section('content')
    <div class="row">
        @include('includes.sidebar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2 class="h3">Manage Products</h2>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        @include('includes.upload')
                        <button data-toggle="modal" data-target="#upload-product"
                                class="btn btn-sm btn-outline-secondary">Upload</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped border table-sm">
                    <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>SKU</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Bids</th>
                        <th>Views</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1,001</td>
                        <td>Lorem</td>
                        <td>ipsum</td>
                        <td>dolor</td>
                        <td>sit</td>
                        <td>200</td>
                        <td>
                            <button class="btn btn-primary btn-sm">
                             <i class="fa fa-eye"></i>
                            </button>
                        </td>
                        <td>200</td>
                        <td>
                            <a href="/edit-product" class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="/delete" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>1,002</td>
                        <td>amet</td>
                        <td>consectetur</td>
                        <td>adipiscing</td>
                        <td>elit</td>
                        <td>200</td>
                        <td>
                            <button class="btn btn-primary btn-sm">
                                <i class="fa fa-eye"></i>
                            </button>
                        </td>
                        <td>200</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>1,003</td>
                        <td>Integer</td>
                        <td>nec</td>
                        <td>odio</td>
                        <td>Praesent</td>
                        <td>200</td>
                        <td>
                            <button class="btn btn-primary btn-sm">
                                <i class="fa fa-eye"></i>
                            </button>
                        </td>
                        <td>200</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@stop
