<!-- Employee Modal -->

<div class="modal fade" id="employeeModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add New Employee</h4>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="employeeForm" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="fullName" class="control-label col-md-2">Full Name: </label>
                        <div class="col-md-9">
                            <input type="text" name="fullName" id="fullName" class="form-control"
                                placeholder="Enter Full Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-2 control-label">Email: </label>
                        <div class="col-md-9">
                            <input class="form-control" id="email" name="email" type="text" placeholder="Enter Email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-md-2 control-label">Phone: </label>
                        <div class="col-md-9">
                            <input class="form-control" id="phone" name="phone" type="text" placeholder="Enter Phone" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-md-2 control-label">Address: </label>
                        <div class="col-md-9">
                            <input class="form-control" id="address" name="address" type="text"
                                placeholder="Enter Address" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jobTitle" class="col-md-2 control-label">Job Title: </label>
                        <div class="col-md-9">
                            <input class="form-control" id="jobTitle" name="jobTitle" type="text"
                                placeholder="Enter Job Title" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="department_id" class="col-md-2 control-label">Department: </label>
                        <div class="col-md-9">
                            <select class="form-control" name="department_id" id="department_id">
                                @foreach ($departments as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="skill_id" class="col-md-2 control-label">Skills: </label>
                        <div class="col-md-9">
                            <select class="form-control" id="skill_id" name="skill_id[]" multiple>
                                @foreach ($skills as $skill)
                                <option value="{{$skill->id}}">{{$skill->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="action" id="action" />
                        <input type="hidden" name="hidden_id" id="hidden_id" />
                        <button type="submit" class="btn btn-primary" id="action_button" name="action_button"
                            value="Add"><i class="fas fa-save"></i>
                            Save changes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            <i class="fa fa-times" aria-hidden="true"></i>
                            Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Confirm Delete -->

<div class="modal fade" id="confirmModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <h4 style="margin: 0;" class="text-center">Are you sure you want to remove this data?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" name="ok_button" id="ok_button">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    Delete</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i>
                    Close</button>
            </div>
        </div>
    </div>
</div>