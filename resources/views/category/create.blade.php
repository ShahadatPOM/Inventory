@extends('layouts.backend.master')
@section('master.content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!--left-column-->
                <div class="col-md-6 offset-sm-2">
                    <div class="box box-success col-lg-12">
                        <div class="box box-header"  style="font-size: 20px">
                            <p class="pull-left">Add Category</p>
                            <button class="pull-right btn btn-sm btn-success"><a style="color: #ffffff" href="{{ route('category.list') }}">View List</a></button>
                        </div>
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" name="categoryName" class="form-control" placeholder="Enter category name">
                                @if($errors->has('categoryName'))
                                    <span class="error" style="color: red">{{ $errors->first('categoryName') }}</span>
                                    @endif
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected disabled>Select</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                @if($errors->has('status'))
                                    <span class="error" style="color: red">{{ $errors->first('status') }}</span>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary" style="margin-bottom: 5px">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
