@extends('layout.app')
@section('title')
    <title>LetMobile - Create Brand </title>
@endsection
@section('content')
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Create Brand
            </h3>
        </div>
    </div>
    <form class="kt-form kt-form--label-right" id="brandForm" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="qdnlEIT73nFPV3xKpGBb4DtFeHYh7VvgsYcXhgTM">
        <div class="kt-portlet__body">
            <div class="row">
                <div class="col-sm-12 col-md-2 col-lg-2"></div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <ul class="errors" id="error-show"></ul>
                    <div class="alert alert-success" style="display: none;" id="success-msg">
                        Brand added Successfully
                    </div>
                    <div class="form-group ">
                        <label>Brand Title</label>
                        <div class="input-group input-group-lg-group">
                            <input type="text" class="form-control" name="brand" placeholder="Title" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__foot">
                <div class="row">
                    <div class="col-sm-12 col-md-2 col-lg-2"></div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="kt-form__actions">
                            <input type="submit" name="" value="Save" class="btn btn-secondary">
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        
    </div></form>
</div>
@endsection