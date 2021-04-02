@extends('client.layout')

@section('content')
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="user_name">Full Name</label>
                <input type="text" class="form-control" id="user_name" placeholder="Enter your full name">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user_email">Email</label>
                        <input type="email" class="form-control" id="user_email" placeholder="Enter your email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user_phone">Phone</label>
                        <input type="text" class="form-control" id="user_phone" placeholder="Enter your phone">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" id="country" placeholder="Country">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" placeholder="State">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" placeholder="City">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="street">Street</label>
                        <input type="text" class="form-control" id="street" placeholder="Street">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="house_no">House</label>
                        <input type="text" class="form-control" id="house_no" placeholder="House">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="building">Building</label>
                        <input type="text" class="form-control" id="building" placeholder="Building">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="flat_no">Flat</label>
                        <input type="text" class="form-control" id="flat_no" placeholder="Flat">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="post_code">Post Code</label>
                        <input type="text" class="form-control" id="post_code" placeholder="Post Code">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea class="form-control" id="comment" rows="5" placeholder="Enter additional information"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
