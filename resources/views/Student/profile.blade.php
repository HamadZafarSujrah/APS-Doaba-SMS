@extends('dashboard')

@section('contant')
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>  </head>

<body> 
	<div class="col-md-12">
		<!-- Content Wrapper. Contains page content -->
		{{-- <div class="content-wrapper"> --}}
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="card card-success">
					<div class="card-header">
						<div class="container-fluid">
							<div class="row mb-2">
								<div class="col-sm-6">
									<h1>Profile</h1> </div>
								<div class="col-sm-6">
									<ol class="breadcrumb float-sm-right">
										{{-- <li class="breadcrumb-item"><a href="{{url('/dashboard') }}">Home</a></li>
										<li class="breadcrumb-item active"> <a href="{{ url('enrollement_record')}}">Back</a> </li> --}}
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.container-fluid -->
			</section>
			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3">
							<!-- Profile Image -->
							<div class="card card-success card-outline">
								<div class="card-body box-profile">
									<div class="text-center"> <img class=" img-fluid img-reponsive" src="{{ asset('Students/Profile_Pictures/'.$profile->picture )  }}" alt="User profile picture" width="280px" height="350"> </div>
									<h4 class="profile-username text-center text-bold">{{ $profile->std_first_name}} {{ $profile->std_last_name}}</h4>
									<h2 class="profile-username text-center">{{ $profile->father_name}}</h2>
									<h2 class="profile-username text-center">{{ $profile->std_id}}</h2>
									<p class="text-muted text-center"></p>
									<ul class="list-group list-group-unbordered mb-3">
										<li class="list-group-item"> <b>Contact Number</b> <a class="float-right">{{ $profile->f_contact_number}}</a> </li>
										<li class="list-group-item"> <b>Campus</b> <a class="float-right">{{ $profile->campus}}</a> </li>
										<li class="list-group-item"> <b>Class</b> <a class="float-right">{{ $profile->class}}({{ $profile->section}})</a> </li>
										<li class="list-group-item"> <b>Edit Profile</b><a href="{{ asset( '/edit_student').'/'. $profile->id}}" class="btn btn-primary btn-sm float-right"><i class="fa fa-pen"></i></a>
										


									</ul> {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> </div> --}}
								<!-- /.card-body -->
							</div>
							<!-- /.card -->{{--
							<!-- About Me Box -->
							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title">About Me</h3> </div>
								<!-- /.card-header -->
								<div class="card-body"> <strong><i class="fas fa-book mr-1"></i> Education</strong>
									<p class="text-muted"> B.S. in Computer Science from the University of Tennessee at Knoxville </p>
									<hr> <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
									<p class="text-muted">Malibu, California</p>
									<hr> <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
									<p class="text-muted"> <span class="tag tag-danger">UI Design</span> <span class="tag tag-success">Coding</span> <span class="tag tag-info">Javascript</span> <span class="tag tag-warning">PHP</span> <span class="tag tag-primary">Node.js</span> </p>
									<hr> <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
									<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
								</div>
								<!-- /.card-body -->
							</div> --}}
							<!-- /.card -->
						</div>
					</div>
					<!-- /.col -->
					<div class="col-md-9">
						<div class="card card-success card-outline">
							<div class="card-body">
								<div class="card-header p-2">
									<ul class="nav nav-pills">
										<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Primary Details</a></li>
										<li class="nav-item"><a class="nav-link " href="#attachments" data-toggle="tab">Attachments</a></li>
										<li class="nav-item"><a class="nav-link " href="#fee_detail" data-toggle="tab">Fee detail</a></li>
										{{-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li> --}}
									</ul>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<div class="tab-content">
										<div class="active tab-pane" id="activity">
											<div class="row">
												<div class="col-md-3">
													<div class="form-group">
														<label>First Name</label>
														<input type="text" class="form-control" value="{{ $profile->std_first_name}}" disabled> </div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Last Name</label>
														<input type="text" class="form-control" value="{{ $profile->std_last_name}}" disabled> </div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>B-Form/Cnic Number</label>
														<input type="text" d class="form-control" value="{{ $profile->cnic}}" disabled>
														<br> </div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Date of Birth</label>
														<input type="text" class="form-control" value="{{ $profile->dob}}" disabled> </div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-3">
													<div class="form-group">
														<label>Gender</label>
														<input type="text" class="form-control" value="{{ $profile->gender}}" disabled> </div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Class</label>
														<input type="text" d class="form-control" value="{{ $profile->class}}({{ $profile->section}})" disabled>
														<br> </div>
												</div>
												
												<div class="col-md-3">
													<div class="form-group">
														<label>Father Name</label>
														<input type="text" class="form-control" value="{{ $profile->father_name}}" disabled> </div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Father Occupation</label>
														<input type="text" class="form-control" value="{{ $profile->father_occupation}}" disabled> </div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-3">
													<div class="form-group">
														<label>Father Cnic Number</label>
														<input type="text" d class="form-control" value="{{ $profile->father_cnic}}" disabled>
														<br> </div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Guardian Name</label>
														<input type="text" class="form-control" value="{{ $profile->gaurdian_name}}" disabled> </div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>1st Contact Number</label>
														<input type="text" class="form-control" value="{{ $profile->f_contact_number}}" disabled> </div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>2nd Contact Number</label>
														<input type="text" d class="form-control" value="{{ $profile->s_contact_number}}" disabled>
														<br> </div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-3">
													<div class="form-group">
														<label>Email Address</label>
														<input type="text" class="form-control" value="{{ $profile->email}}" disabled> </div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Adress</label>
														<input type="text" class="form-control" value="{{ $profile->address}}" disabled> </div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Tehsil</label>
														<input type="text" d class="form-control" value="{{ $profile->tehsil}}" disabled>
														<br> </div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>District</label>
														<input type="text" class="form-control" value="{{ $profile->district}}" disabled> </div>
												</div>
											</div>
											<div class="row form-group">
												<div class="col-md-3">
													<div class="form-group">
														<label>Previous School Name</label>
														<input type="text" class="form-control" style="margin-top: 25px" value="{{ $profile->pre_school}}" disabled> </div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Obtained Marks in Previous Class</label>
														<input type="text" class="form-control" style="margin-top: 25px" value="{{ $profile->obtained_marks}}" disabled> </div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Total marks in Previous Class</label>
														<input type="text" d class="form-control" style="margin-top: 25px" value="{{ $profile->total_marks}}" disabled>
														<br> </div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Previous School Registration Number</label>
														<input type="text" class="form-control" value="{{ $profile->pre_school_reg}}" disabled> </div>
												</div>
											</div>
											<!-- Post -->{{--
											<div class="post">
												<div class="user-block"> <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image"> <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span> <span class="description">Shared publicly - 7:30 PM today</span> </div>
												<!-- /.user-block -->
												<p> Lorem ipsum represents a long-held tradition for designers, typographers and the like. Some people hate it and argue for its demise, but others ignore the hate as they create awesome tools to help create filler text for everyone from bacon lovers to Charlie Sheen fans. </p>
												<p> <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a> <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a> <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span> </p>
												<input class="form-control form-control-sm" type="text" placeholder="Type a comment"> </div> --}}
											<!-- /.post -->
											<!-- Post -->
											<!-- /.post -->
											<!-- Post -->
											<!-- /.post -->
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="attachments">
											<!-- The timeline -->
											<div class="row" form-group>
												<div class="col-md-3">
													<label for=""><b>B-form</b></label>
												</div>
												<div class="col-md-3"> </div>
												<div class="col-md-6">
													<div class="text-center"> <img class=" img-fluid img-responsive" src="{{ asset('Students/Bform_Pictures/'.$profile->b_form_pic )  }}" alt="B-form picture" width="270px" height="550px"> </div>
												</div>
											</div>
											<div class="row" form-group style="margin-top: 5%">
												<div class="col-md-3">
													<label for=""><b>Father Cnic</b></label>
												</div>
												<div class="col-md-3"> </div>
												<div class="col-md-6">
													<div class="text-center"> <img class="img-fluid img-responsive" src="{{ asset('Students/Fcnic_Pictures/'.$profile->f_cnic_pic )  }}" alt="Father Cnic picture" width="450px" height="270px"> </div>
												</div>
											</div>
										</div>
										<!-- /.tab-pane -->
										<div class="tab-pane" id="fee_detail">
											<!-- The timeline -->
											<div class="card card-primary card-outline">
												<div class="card-body">
													<table class="table table-border tablle-striped" border="1">
														<thead>
															<tr>
																<th>Tution Fee</th>
																<th>Admission Fee</th>
																<th>Examination Fee</th>
																<th>Sports Fee</th>
																<th>Library Fee</th>
																<th>Lab Fee</th>
																<th>Other Fee</th>
																<th>Total Fee</th>
																<th>Discount</th>
																<th>Fee After Discount</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>{{ $profile->tution_fee}}</td>
																<td>{{ $profile->admission_fee}}</td>
																<td>{{ $profile->exam_fee}}</td>
																<td>{{ $profile->sports_fee}}</td>
																<td>{{ $profile->library_fee}}</td>
																<td>{{ $profile->lab_fee}}</td>
																<td>{{ $profile->other_fee}}</td>
																<td ><b>{{ $profile->total_fee}}</b></td>
																<td>{{ $profile->discount}}</td>
																<td ><b>{{ $profile->fee_payable}}</b></td>
																
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>


										{{-- <div class="tab-pane" id="settings">
											
										</div> --}}
										<!-- /.tab-pane -->
									</div>
									<!-- /.tab-content -->
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
					</div>
				</div>
				<!-- /.col -->
		<!-- /.row -->
	<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
	{{-- </div> --}}
	<!-- /.content-wrapper -->
	</div>
</body>

</html>
@endsection