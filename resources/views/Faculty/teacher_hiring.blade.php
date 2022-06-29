@include('index')
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Teacher Hiring</title>
  </head>
  <body>
    <!-- Main content -->
    <div class="card card-outline card-primary">
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-success">
                <div class="card-header text-center">
                  <a href="" class='h1'>
                    <b>Al-Hikma School</b>|Doaba </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-2"></div>
          <div class="col-md-8"> @if (Session::get('success')) <div class="alert alert-success"> {{Session::get('success')}} </div> @endif @if (Session::get('fail')) <div class="alert alert-danger"> {{Session::get('fail')}} </div> @endif
            <!-- general form elements -->{{-- <div class="card card-outline card-success"> --}}
            <div class="card card-primary">
              <div class="card-header">
                <div class="">
                  <h4>
                    <b> Teacher Hiring</b>
                    <a href="{{ route('auth.logout')}}" class="float-sm-right breadcrumb-item "> Logout</a>
                    <a href="{{url('/dashboard') }}" class="float-sm-right breadcrumb-item">Home\</a>
                </div>
                </h4>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action=" {{url('/hiring')}}" method="post" enctype="multipart/form-data"> @csrf <div class="card-body"> {{-- <----------------------------Personal Information---------------------------------> --}}
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card card-outline card-success">
                        <div class="card-header ">
                          <h5>
                            <b>Personal Information</b>
                          </h5>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div style="height: 1cm"></div>
                              <div class="form-group">
                                <label for="Student Name">Name <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <input type="text" class="form-control border-success controls" name="first_name" placeholder="Enter First Name" required>
                                <br>
                                <input type="text" class="form-control border-success controls" name="last_name" placeholder="Enter Last Name" required>
                              </div>
                              <div class="form-group">
                                <label for="Father Name">Father Name <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <input type="text" class="form-control border-success controls" id="father_name" name="father_name" placeholder="Enter Father Name" required class="form-control">
                                <br>
                              </div>
                              <div class="form-group">
                                <label>Date of Birth <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <div class="input-group">
                                  <span class="input-group-addon">
                                    <i class=""></i>
                                  </span>
                                  <input type="date" name="dob" class="form-control border-success controls" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-5">
								 {{-- <div class="card-body">
									<div class="container mt-3">
									<div class="card" style="width:250px;height:260px">
										<img class="card-img-top" alt="profile Picture">
									</div>
									</div>
									</div> --}}
                              <div id="preview"></div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="B-Form/Cnic No.  ">Cnic Number <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <input type="text" data-inputmask="'mask': '99999-9999999-9'" placeholder="XXXXX-XXXXXXX-X" name="cnic" id="cnic" class="form-control border-success controls" maxlength="15" required="">
                                <br>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="Gender">Gender <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <br>
                                <div style="height: 100%">
                                  <input type="radio" name="gender" value="male" style="width: 15% " class="border-success controls" required> Male
                                </div>
                                <div style="">
                                  <input type="radio" name="gender" value="female" style="width: 15%" class="border-success controls" required> Female
                                </div>
                              </div>
                            </div>
                            <div class="col-md-5">
                              <div class="form-group">
                                <label for="Profile picture">Profile picture</label>
                                <input type="file" name="profile_picture" class="form-control border-success controls" id="upload_file" required class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{--<----------------------------Contact Information---------------------------------> --}}
                      <div class="card card-outline card-success">
                        <div class="card-header ">
                          <h5>
                            <b>Contact Information</b>
                          </h5>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Email Address</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="fas fa-envelope"></i>
                                    </span>
                                  </div>
                                  <input type="email" class="form-control border-success controls" placeholder="Enter Email address" name="email">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Contact Number <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text ">
                                      <i class="fas fa-phone"></i>
                                    </span>
                                  </div>
                                  <input type="text" class="form-control border-success controls" id="f_contact_number" name="f_contact_number" placeholder="03XX-XXXXXXX" required class="form-control" maxlength="12">
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>other Contact Number</label>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text ">
                                      <i class="fas fa-phone"></i>
                                    </span>
                                  </div>
                                  <input type="text" class="form-control border-success controls" placeholder="03XX-XXXXXXX" id="s_contact_number" name="s_contact_number" maxlength="12">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="Caste">Address <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <input type="text" class="form-control border-success controls" id="name" name="address" placeholder="Enter Address" required class="form-control">
                                <br>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="Gender">Tehsil <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <br>
                                <select required style="width: 100%" class="form-control border-success controls" name="tehsil">
                                  <option value="null"></option>
                                  <option>Mianwali</option>
                                  <option>Piplan</option>
                                  <option>Isa-Khel</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="Gender">District <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <br>
                                <select required style="width: 100%" class="form-control border-success controls" name="district">
                                  <option value="null"></option>
                                  <option>Mianwali</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card card-outline card-success">
                        <div class="card-header ">
                          <h5>
                            <b>Qualificaion</b>
                          </h5>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Latest Degree <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <select required style="width: 100%" class="form-control border-success controls" name="latest_degree">
                                  <option value="null"></option>
                                  <option>Inter</option>
                                  <option>B.A</option>
                                  <option>B.S.c</option>
                                  <option>B.com</option>
                                  <option>B.S(4-years)</option>
                                  <option>M.A</option>
                                  <option>M.S.c</option>
                                  <option>M.phil</option>
                                  <option>M.S</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Subject Specialist <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <select required style="width: 100%" class="form-control border-success controls" name="subject_specialist">
                                  <option selected value=""></option>
                                  <option value="chemistry">Chemistry</option>
                                  <option value="computer">Computer</option>
                                  <option value="english">English</option>
                                  <option value="islamiat">Islamiat</option>
                                  <option value="math">Math</option>
                                  <option value="physics">Physics</option>
                                  <option value="pak_study">Pak Study</option>
                                  <option value="urdu">Urdu</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Additional Skill Subjects <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <select name="additional_skill_subjects[]" id="select_skill" multiple="multiple" class="form-control border-success controls" data-placeholder="Other skill Subjects" style="width: 100%">
                                  <option value="Chemistry">Chemistry</option>
                                  <option value="Computer">Computer</option>
                                  <option value="English">English</option>
                                  <option value="Islamiat">Islamiat</option>
                                  <option value="Math">Mathematics</option>
                                  <option value="Physics">Physics</option>
                                  <option value="Pak_study">Pak Study</option>
                                  <option value="Urdu">Urdu</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Teaching Experience</label>
                                <input type="number" style="width: 100%" class="form-control border-success controls" name="teaching_experience" placeholder="enter Teaching Experience">
                              </div>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <u>
                                  <h5>
                                    <b> Previous Professional Information</b>
                                  </h5>
                                </u>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="Caste">Previous Institution name <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <input type="text" class="form-control border-success controls" name="pre_institution_name" placeholder="Enter Address" required class="form-control">
                                <br>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="">Joining Date-Leaving Date <i class="fa fa-calendar-alt"></i>
                                </label>
                                <br>
                                <input type="text" name="joining_leaving_date" id="daterange" placeholder="MM/DD/YYYY - MM/DD/YYYY" class="form-control border-success controls ">
                              </div>
                            </div>
                            <div class="col-md-4"></div>
                          </div>
                        </div>
                      </div>
                      <div class="card card-outline card-success">
                        <div class="card-header ">
                          <h5>
                            <b>Attachments</b>
                          </h5>
                        </div>
                        <div class="card-body">
                          <div class="row" id="cnic_pic_attachment">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Cnic <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <input type="file" name="cnic_pic" id="cnic_pic" required class="form-control border-success controls">
                              </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-6">
                              <div class="form-group" id="t_cnic_preview"></div>
                            </div>
                          </div>
                          <div class="row" id="cv_pic_attachment">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>CV <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <input type="file" name="cv_pic" id="cv_pic" required class="form-control border-success controls">
                              </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-6">
                              <div class="form-group" id="cv_preview"></div>
                            </div>
                          </div>
                          <div class="row" id="latest_degree_pic_attachment">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Latest Degree <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <input type="file" name="latest_degree_pic" id="latest_degree_pic" required class="form-control border-success controls">
                              </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-6">
                              <div class="form-group" id="degree_preview"></div>
                            </div>
                          </div>

                          <div class="row">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#AddAttachment">
                              <i class="fa fa-plus"> Add Attachment </i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="AddAttachment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Attachments</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <select name="attachment_category" id="attachment_category" class="form-control">
                                        <option selected value="" disabled>Select Attachment Category</option>
                                        <option value="CNIC">Cnic</option>
                                        <option value="CV">CV</option>
                                        <option value="Latest_Degree">Latest Degree</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{-- <----------------------------Pay Detail--------------------------------> --}}
                      <div class="card card-outline card-success">
                        <div class="card-header">
                          <div>
                            <h5>
                              <b>Pay Detail</b>
                            </h5>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-5">
                              <div class="form-group">
                                <label for="Class">Select Basic pay Scale <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <br>
                                <select class="form-control border-success controls" id="select_bps" name="select_bps" required style="width: 50%">
                                  <option disabled selected>Select Class</option>
                                  <option value="one">BPS-1</option>
                                  <option value="two">BPS-2</option>
                                  <option value="three">BPS-3</option>
                                  <option value="four">BPS-4</option>
                                  <option value="five">BPS-5</option>
                                  <option value="six">BPS-6</option>
                                  <option value="seven">BPS-7</option>
                                  <option value="eight">BPS-8</option>
                                  <option value="nine">BPS-9</option>
                                  <option value="ten">BPS-10</option>
                                  <option value="eleven">BPS-11</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label style="margin-top: 15px">Basic pay <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <br>
                                <label style="margin-top: 30px">Conveyance Allowance </label>
                                <br>
                                <label style="margin-top: 30px">Heath Allowance </label>
                                <br>
                                <label style="margin-top: 30px">Total Pay </label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="row" style="pt-3">
                                <div class="form-group"></div>
                              </div>
                              <div class="row">
                                <div class="form-group">
                                  <input type="number" id="basic_pay" name="basic_pay" class="form-control border-success controls" required>
                                  <br>
                                  <input type="number" id="convey_allowance" name="convey_allowance" class="form-control border-success controls">
                                  <br>
                                  <input type="number" id="health_allowance" name="health_allowance" class="form-control border-success controls">
                                  <br>
                                  <input type="text" id="total_pay" name="total_pay" class="form-control border-success controls">
                                  <br>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      {{--<----------------------------Selection --------------------------------> --}}
                      <div class="card card-outline card-success">
                        <div class="card-header ">
                          <h5>
                            <b>Selection Procedure</b>
                          </h5>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <u>
                                  <h5>
                                    <b>Selection Test Conducted by <span class="requiredInput" style="color: red">*</span>
                                    </b>
                                  </h5>
                                </u>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Name <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <input type="text" name="tester_name" required class="form-control border-success controls">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Designation <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <select required style="width: 100%" class="form-control border-success controls" name="tester_designation">
                                  <option selected value="" disabled>Select Designation</option>
                                  <option value="Director">Director</option>
                                  <option value="Principal">Principal</option>
                                  <option value="Vice principal">Vice principal</option>
                                  <option value="Board Member">Board Member</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Remarks <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <input type="text" name="tester_remarks" required class="form-control border-success controls">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Test date <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <div class="input-group">
                                  <span class="input-group-addon">
                                    <i class=""></i>
                                  </span>
                                  <input type="date" name="test_date" class="form-control border-success controls" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr>
                          
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <u>
                                  <h5>
                                    <b>1st Interviewer <span class="requiredInput" style="color: red">*</span>
                                    </b>
                                  </h5>
                                </u>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Name <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <input type="text" name="f_interviewer_name" required class="form-control border-success controls">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Designation <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <select required style="width: 100%" class="form-control border-success controls" name="f_interviewer_designation">
                                  <option selected value="" disabled>Select Designation</option>
                                  <option value="Director">Director</option>
                                  <option value="Principal">Principal</option>
                                  <option value="Vice principal">Vice principal</option>
                                  <option value="Board Member">Board Member</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Remarks <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <input type="text" name="f_interviewer_remarks" required class="form-control border-success controls">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Interview Date <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <div class="input-group">
                                  <span class="input-group-addon">
                                    <i class=""></i>
                                  </span>
                                  <input type="date" name="f_interviewer_date" class="form-control border-success controls" required>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row" id="Second_Interviewer">
                            <div class="col-md-12">
                              <div class="form-group">
                                <u>
                                  <h5>
                                    <b>2nd Interviewer</b>
                                  </h5>
                                </u>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="s_interviewer_name" id="t_cnic" required class="form-control border-success controls">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Designation</label>
                                <select required style="width: 100%" class="form-control border-success controls" name="s_interviewer_designation">
                                  <option selected value="" disabled>Select Designation</option>
                                  <option value="Director">Director</option>
                                  <option value="Principal">Principal</option>
                                  <option value="Vice principal">Vice principal</option>
                                  <option value="Board Member">Board Member</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Remarks</label>
                                <input type="text" name="s_interviewer_remarks" required class="form-control border-success controls">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Interview Date</label>
                                <div class="input-group">
                                  <span class="input-group-addon">
                                    <i class=""></i>
                                  </span>
                                  <input type="date" name="s_interviewer_date" class="form-control border-success controls" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row" id="Third_Interviewer">
                            <div class="col-md-12">
                              <div class="form-group">
                                <u>
                                  <h5>
                                    <b>3rd Interviewer</b>
                                  </h5>
                                </u>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="t_interviewer_name" required class="form-control border-success controls">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Designation</label>
                                <select required style="width: 100%" class="form-control border-success controls" name="t_interviewer_designation">
                                  <option selected value="" disabled>Select Designation</option>
                                  <option value="Director">Director</option>
                                  <option value="Principal">Principal</option>
                                  <option value="Vice principal">Vice principal</option>
                                  <option value="Board Member">Board Member</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Remarks</label>
                                <input type="text" name="t_interviewer_remarks" required class="form-control border-success controls">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Interview Date</label>
                                <div class="input-group">
                                  <span class="input-group-addon">
                                    <i class=""></i>
                                  </span>
                                  <input type="date" name="t_interviewer_date" class="form-control border-success controls" required>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#AddInterviewer">
                              <i class="fa fa-plus"> Add Interviewer </i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="AddInterviewer" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Interviewers</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <select name="" id="Add_Interviewer" class="form-control">
                                        <option selected value="" disabled>Add more Interviewer</option>
                                        <option value="Second_Interviewer">2nd Interviewer</option>
                                        <option value="Third_Interviewer">3rd Interviewer</option>
                                        
                                      </select>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <hr>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <u>
                                  <h5>
                                    <b>Final Selection By <span class="requiredInput" style="color: red">*</span>
                                    </b>
                                  </h5>
                                </u>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Name <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <input type="text" name="selector_name" required class="form-control border-success controls">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Designation <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <select required style="width: 100%" class="form-control border-success controls" name="selector_designation">
                                  <option selected value="" disabled>Select Designation</option>
                                  <option value="Director">Director</option>
                                  <option value="Principal">Principal</option>
                                  <option value="Vice principal">Vice principal</option>
                                  <option value="Board Member">Board Member</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Remarks <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <input type="text" name="selector_remarks" required class="form-control border-success controls">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Selection Date <span class="requiredInput" style="color: red">*</span>
                                </label>
                                <div class="input-group">
                                  <span class="input-group-addon">
                                    <i class=""></i>
                                  </span>
                                  <input type="date" name="selection_date" class="form-control border-success controls" required>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="save">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.card -->{{-- <----------------------------------Script for auto images preview --------------------------------------------------------> --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#upload_file').on('change', function getImagePreview() {
          var image = URL.createObjectURL(event.target.files[0]);
          var imagediv = document.getElementById('preview');
          var newimg = document.createElement('img');
          imagediv.innerHTML = '';
          newimg.src = image;
          newimg.width = "320";
          newimg.height = "400";
          imagediv.appendChild(newimg);
        })
      })
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#cnic_pic').on('change', function getImagePreview() {
          var image = URL.createObjectURL(event.target.files[0]);
          var imagediv = document.getElementById('t_cnic_preview');
          var newimg = document.createElement('img');
          imagediv.innerHTML = '';
          newimg.src = image;
          newimg.width = "450";
          newimg.height = "280";
          imagediv.appendChild(newimg);
        })
      })
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#cv_pic').on('change', function getImagePreview() {
          var image = URL.createObjectURL(event.target.files[0]);
          var imagediv = document.getElementById('cv_preview');
          var newimg = document.createElement('img');
          imagediv.innerHTML = '';
          newimg.src = image;
          newimg.width = "320";
          newimg.height = "430";
          imagediv.appendChild(newimg);
        })
      })
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#latest_degree_pic').on('change', function getImagePreview() {
          var image = URL.createObjectURL(event.target.files[0]);
          var imagediv = document.getElementById('degree_preview');
          var newimg = document.createElement('img');
          imagediv.innerHTML = '';
          newimg.src = image;
          newimg.width = "320";
          newimg.height = "430";
          imagediv.appendChild(newimg);
        })
      })
    </script>
    {{--<--------------------------------------------Cnic layout--------------------------------------------------------> --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#cnic').keypress(function() {
          var cnic = $('#cnic').val();
          if (cnic.length == 5 || cnic.length == 13) {
            $("#cnic").val($('#cnic').val() + '-');
          }
        });
      });
    </script>
    {{--<--------------------------------------------Contact number layout--------------------------------------------------------> --}}
    <script type="text/javascript">
      $(document).ready(function() {
        $('#f_contact_number').keypress(function() {
          var f_contact_number = $('#f_contact_number').val();
          if (f_contact_number.length == 4) {
            $("#f_contact_number").val($('#f_contact_number').val() + '-');
          }
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#s_contact_number').keypress(function() {
          var s_contact_number = $('#s_contact_number').val();
          if (s_contact_number.length == 4) {
            $("#s_contact_number").val($('#s_contact_number').val() + '-');
          }
        });
      });
    </script>
    {{--<----------------------------------for auto fee detection--------------------------------------------------------> --}}
    <script>
      $(document).ready(function() {
        var basic_pay = 0;
        $('#select_bps').on('click', function() {
          var selected_bps = this.value;
          switch (selected_bps) {
            case 'one':
              basic_pay = 7000;
              break;
            case 'two':
              basic_pay = 7500;
              break;
            case 'three':
              basic_pay = 8000;
              break;
            case 'four':
              basic_pay = 8500;
              break;
            case 'five':
              basic_pay = 9000;
              break;
            case 'six':
              basic_pay = 9500;
              break;
            case 'seven':
              basic_pay = 10000;
              break;
            case 'eight':
              basic_pay = 10500;
              break;
            case 'nine':
              basic_pay = 11000;
              break;
            case 'ten':
              basic_pay = 11500;
              break;
            case 'eleven':
              basic_pay = 12000;
              break;
          }
          $('#basic_pay').val(basic_pay)
          $('#convey_allowance').val('')
          $('#health_allowance').val('')
          var Total_pay = parseInt(basic_pay);
          $('#total_pay').val(Total_pay)
        });
        $('#convey_allowance').on('keyup', function() {
          var Basic_pay = basic_pay;
          var Convey_allowance = $('#convey_allowance').val()
          var Total_pay = (parseInt(Basic_pay) + parseInt(Convey_allowance));
          $('#total_pay').val(Total_pay)
        })
        $('#health_allowance').on('keyup', function() {
          var Basic_pay = basic_pay;
          var Convey_allowance = $('#convey_allowance').val()
          var Health_allowance = $('#health_allowance').val()
          var Total_pay = (parseInt(Basic_pay) + parseInt(Convey_allowance) + parseInt(Health_allowance));
          $('#total_pay').val(Total_pay)
        })
      })
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#select_skill').select2({
          theme: 'bootstrap4',
          closeOnSelect: false,
        });
      })
    </script>
    <script>
      $(function() {
        $('input[id="daterange"]').daterangepicker({
            opens: 'left'
          }
          // 	  ,
          // 	  function(start, end, label) {
          //      document.getElementById('joinig_date').value = start.format('YYYY-MM-DD');
          //      document.getElementById('leaving_date').value = end.format('YYYY-MM-DD');
          //   }
        );
      });
    </script>
    <script type="text/javascript">
      $("#cnic_pic_attachment").hide();
      $("#cv_pic_attachment").hide();
      $("#latest_degree_pic_attachment").hide();
      $(function() {
        $("#attachment_category").change(function() {
          switch (this.value) {
            case 'CNIC':
              $("#cnic_pic_attachment").show();
              break;
            case 'CV':
              $("#cv_pic_attachment").show();
              break;
            case 'Latest_Degree':
              $("#latest_degree_pic_attachment").show();
              break;
          }
        });
      });
    </script>

<script type="text/javascript">
  $("#Second_Interviewer").hide();
  $("#Third_Interviewer").hide();
 
  $(function() {
    $("#Add_Interviewer").change(function() {
      switch (this.value) {
        case 'Second_Interviewer':
          $("#Second_Interviewer").show();
          break;
        case 'Third_Interviewer':
          $("#Third_Interviewer").show();
          break;
      }
    });
  });
</script>

  </body>
</html>