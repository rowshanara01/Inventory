@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Supplier Page </h4><br><br>



                            <form method="post" action="{{ route('supplier.update', $supplier->id) }}" id="myForm" >
                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Name </label>
                                    <div class="form-group col-sm-10">
                                        <input name="name" class="form-control" type="text" value="{{ $supplier->name }}">
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Mobile </label>
                                    <div class="form-group col-sm-10">
                                        <input name="mobile_no" class="form-control" type="text" value="{{ $supplier->mobile_no }}">
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Email </label>
                                    <div class="form-group col-sm-10">
                                        <input name="email" class="form-control" type="email" value="{{ $supplier->email }}">
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Address
                                    </label>
                                    <div class="form-group col-sm-10">
                                        <input name="address" class="form-control" type="text" value="{{ $supplier->address }}">
                                    </div>
                                </div>
                                <!-- end row -->





                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Supplier">
                            </form>



                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
