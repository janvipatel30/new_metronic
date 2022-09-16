@extends('backend.layouts.layouts')

@section('section')

<div class="tab-content">
    <div class="tab-pane active" id="tab_0">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Form Actions On Bottom </div>

            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="#" class="form-horizontal">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">First Name</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-circle" placeholder="Enter first name">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Last Name</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-circle" placeholder="Enter last name">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mobile Number</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-circle" placeholder="Enter mobile number">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-circle" placeholder="Enter password">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email Address</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon input-circle-left">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="email" class="form-control input-circle-right" placeholder="Email Address"> </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password</label>
                            <div class="col-md-4">
                                <div class="input-group">

                                    <span class="input-group-addon input-circle-left">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input type="password" class="form-control input-circle-right" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Status</label>
                            <div class="input-group mt-radio-inline ml-3">&nbsp;&nbsp;&nbsp;
                                <label class="mt-radio">
                                    <input type="radio" name="optionsRadios" id="optionsRadios4" value="A" checked> Active
                                    <span></span>
                                </label>
                                <label class="mt-radio">
                                    <input type="radio" name="optionsRadios" id="optionsRadios5" value="I"> Inactive
                                    <span></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Address</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-circle" placeholder="Enter address">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Country</label>
                            <div class="col-md-4">

                                    <select class="form-control">
                                        <option>Select Country</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">State</label>
                            <div class="col-md-4">

                                    <select class="form-control">
                                        <option>Select State</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">City</label>
                            <div class="col-md-4">

                                    <select class="form-control">
                                        <option>Select City</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Date of Birth</label>
                            <div class="col-md-4">
                                <input type="date" class="form-control input-circle" placeholder="Enter address">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Date of Joining</label>
                            <div class="col-md-4">
                                <input type="date" class="form-control input-circle" placeholder="Enter Joining Date">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Current Salary</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-circle" placeholder="Enter current salary">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Expected Salary</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-circle" placeholder="Enter expected salary">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Designation</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-circle" placeholder="Enter designation">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Skills</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control input-circle" placeholder="Enter skills">

                            </div>
                        </div>


                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn btn-circle green">Submit</button>
                                <button type="button" class="btn btn-circle grey-salsa btn-outline">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>

    </div>
</div>


@endsection
