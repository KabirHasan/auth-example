@extends('layouts.master')
@section('content')


    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="post" action="/admins">
        <h2>Create User</h2>
        @csrf
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="name"  class="form-control col-md-7 col-xs-12" data-parsley-id="8976" required><ul class="parsley-errors-list" id="parsley-id-8976"></ul>
                @if($errors->has('name'))
                    <span style="color: red;">required</span>
                @endif
            </div>

        </div>

        <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input name="email" id="middle-name" class="form-control col-md-7 col-xs-12" type="email" data-parsley-id="8197" required><ul class="parsley-errors-list" id="parsley-id-8197"></ul>
                @if($errors->has('email'))
                    <span style="color: red;">required</span>
                @endif
            </div>

        </div>
        <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="password" name="password" data-parsley-id="8197" required><ul class="parsley-errors-list" id="parsley-id-8197"></ul>
                @if($errors->has('password'))
                    <span style="color: red;">required</span>
                @endif
            </div>

        </div>

        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-primary">Cancel</button>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>

    </form>
@endsection