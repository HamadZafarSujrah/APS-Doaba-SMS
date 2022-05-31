@include('index')
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Edit Enrollememnt Record</title>
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
							<div class="card-header text-center"> <a href="" class='h1'><b>Al-Hikma School</b>|Doaba</a> </div>
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
				<div class="col-md-8"> 
					@if (Session::get('success'))
					<div class="alert alert-success"> {{Session::get('success')}} </div>
					 @endif 
					 @if (Session::get('fail'))
					<div class="alert alert-danger"> {{Session::get('fail')}} </div> 
					@endif
					<!-- general form elements -->{{--
					<div class="card card-outline card-success"> --}}
						<div class="card card-primary">
							<div class="card-header">
								<div class=" text-center">
									<h3><b>Edit Student Profile</b></h3> <a href="{{url('/enrollement')}}" class="float-sm-right breadcrumb-item btn  btn-success float-end">Back</a> <a href="{{url('/dashboard') }}" class="float-sm-right breadcrumb-item btn  btn-success float-end">Home</a></div>
							</div>
							<!-- /.card-header -->
							<!-- form start -->
							<form action="{{url('/update_record').'/'.$student->id }}" method="post" enctype="multipart/form-data"> 
								@csrf
								<div class="card-body"> {{--
									<----------------------------Personal Information---------------------------------> --}}
										<div class="row">
											<div class="col-md-12">
												<div class="card card-outline card-success">
													<div class="card-header ">
														<h5><b>Personal Information</b></h5></div>
													<div class="card-body">
														<div class="row">
															<div class="col-md-4">
																<div style="height: 1cm"></div>
																<div class="form-group">
																	<label for="Student Name">Student Name<span class="requiredInput" style="color: red">*</span></label>
																	<input type="text" class="form-control" name="std_first_name" value="{{$student->std_first_name}}" required>
																	<br>
																	<input type="text" class="form-control" name="std_last_name" value="{{$student->std_last_name}}" required> </div>
																<div class="form-group">
																	<label for="B-Form/Cnic No.  ">B-Form/Cnic Number<span class="requiredInput" style="color: red">*</span></label>
																	<input type="text" value="{{$student->cnic}}" name="cnic" id="cnic" class="form-control" maxlength="15" required="">
																	<br> </div>
															</div>
															<div class="col-md-4"> </div>
															<div class="col-md-4"> {{--
																<div class="card-body">
																	<div class="container mt-3">
																		<div class="card" style="width:250px;height:260px"> <img class="card-img-top" alt="profile Picture"> </div>
																	</div>
																</div> --}}
																<div id="preview"><img class=" img-fluid img-reponsive" src="{{ asset('Students/Profile_Pictures/'.$student->picture )  }}" width="300px" height="300px"></div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-4">
																<div class="form-group">
																	<label>Date of Birth<span class="requiredInput" style="color: red">*</span></label>
																	<div class="input-group"> <span class="input-group-addon"><i class=""></i></span>
																		<input type="date" name="dob" class="form-control border-primary controls" value="{{$student->dob}}" required> </div>
																</div>
															</div>
															<div class="col-md-4">
																<div class="form-group" style="width: 100%">
																	<label for="Gender">Gender<span class="requiredInput" style="color: red">*</span></label>
																	<br>
																	<div style="height: 100%">
																		<input type="radio" name="gender" value="{{$student->gender}}" style="width: 15% " required> Male </div>
																	<div style="">
																		<input type="radio" name="gender" value="{{$student->gender}}" style="width: 15%" required> Female </div>
																</div>
															</div>
															<div class="col-md-4">
																<div class="form-group">
																	<label for="Profile picture">Profile picture<span class="requiredInput" style="color: red">*</span></label>
																	<input type="file" name="profile_picture" class="form-control" id="upload_file" required class="form-control" value="{{$student->picture}}"> </div>
															</div>
														</div>
													</div>
												</div> {{--
												<----------------------------Parental Information---------------------------------> --}}
													<div class="card card-outline card-success">
														<div class="card-header">
															<div>
																<h5><b>Parental Information</b></h5></div>
														</div>
														<div class="card-body">
															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="Father Name">Father Name<span class="requiredInput" style="color: red">*</span></label>
																		<input type="text" class="form-control" id="fathername" name="father_name" value="{{$student->father_name}}" required class="form-control">
																		<br> </div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="Father Name">Father Occupation<span class="requiredInput" style="color: red">*</span></label>
																		<input type="text" class="form-control" id="fathername" name="father_occupation" value="{{$student->father_occupation}}"  required class="form-control">
																		<br> </div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="Father Name">Father Cnic Number<span class="requiredInput" style="color: red">*</span></label>
																		<input type="text" class="form-control" id="father_cnic" name="father_cnic" value="{{$student->father_cnic}}"  required class="form-control" maxlength="15">
																		<br> </div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="Caste">Guardian Name<span class="requiredInput" style="color: red">*</span></label>
																		<input type="text" class="form-control" id="guardian_name" name="guardian_name" value="{{$student->gaurdian_name}}"  required class="form-control">
																		<br> </div>
																</div>
															</div>
														</div>
													</div> {{--
													<----------------------------Contact Information---------------------------------> --}}
														<div class="card card-outline card-success">
															<div class="card-header">
																<div>
																	<h5><b>Contact Information</b></h5></div>
															</div>
															<div class="card-body">
																<div class="row">
																	<div class="col-md-4">
																		<div class="form-group">
																			<label>1st Contact Number<span class="requiredInput" style="color: red">*</span></label>
																			<div class="input-group">
																				<div class="input-group-prepend"> <span class="input-group-text"><i class="fas fa-phone"></i></span> </div>
																				<input type="text" class="form-control" id="f_contact_number" name="f_contact_number" value="{{$student->f_contact_number}}"  required class="form-control" maxlength="12"> </div>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="form-group">
																			<label>2nd Contact Number</label>
																			<div class="input-group">
																				<div class="input-group-prepend"> <span class="input-group-text"><i class="fas fa-phone"></i></span> </div>
																				<input type="text" class="form-control" value="{{$student->s_contact_number}}" id="s_contact_number" name="s_contact_number" maxlength="12"> </div>
																		</div>
																	</div>
																	<div class="col-md-4">
																		<div class="form-group">
																			<label>Email Address</label>
																			<div class="input-group">
																				<div class="input-group-prepend"> <span class="input-group-text"><i class="fas fa-envelope"></i></span> </div>
																				<input type="email" class="form-control" value="{{$student->email}}" name="email_address"> </div>
																		</div>
																	</div>
																</div>
															</div>
														</div> {{--
														<----------------------------Address---------------------------------> --}}
															<div class="card card-outline card-success">
																<div class="card-header">
																	<div>
																		<h5><b>Address</b></h5></div>
																</div>
																<div class="card-body">
																	<div class="row">
																		<div class="col-md-4">
																			<div class="form-group">
																				<label for="Caste">Address<span class="requiredInput" style="color: red">*</span></label>
																				<input type="text" class="form-control" id="name" name="address" value="{{$student->address}}" required class="form-control">
																				<br> </div>
																		</div>
																		<div class="col-md-4">
																			<div class="form-group">
																				<label for="Gender">Tehsil<span class="requiredInput" style="color: red">*</span></label>
																				<br>
																				<select required style="width: 100%" class="form-control" name="tehsil" value="{{$student->tehsil}}">
																					<option value="null"></option>
																					<option>Mianwali</option>
																					<option>Piplan</option>
																					<option>Isa-Khel</option>
																				</select>
																			</div>
																		</div>
																		<div class="col-md-4">
																			<div class="form-group">
																				<label for="Gender">District<span class="requiredInput" style="color: red">*</span></label>
																				<br>
																				<select required style="width: 100%" class="form-control" name="district" value="{{$student->district}}">
																					<option value="null"></option>
																					<option>Mianwali</option>
																				</select>
																			</div>
																		</div>
																	</div>
																</div>
															</div> {{--
															<----------------------------Academic Information---------------------------------> --}}
																<div class="card card-outline card-success">
																	<div class="card-header">
																		<div>
																			<h5><b>Academic Information</b></h5></div>
																	</div>
																	<div class="card-body">
																		<div class="row">
																			<div class="col-md-4">
																				<div class="form-group">
																					<label for="Class">Class<span class="requiredInput" style="color: red">*</span></label>
																					<br>
																					<select required style="width: 100%" class="form-control" name="class" value="{{$student->class}}">
																						<option value="null"></option>
																						<option>Nursery</option>
																						<option>Prep</option>
																						<option>One</option>
																						<option>Two</option>
																						<option>Three</option>
																						<option>Four</option>
																						<option>Five</option>
																						<option>Six</option>
																						<option>Seven</option>
																						<option>Eight</option>
																						<option>Nine</option>
																						<option>Ten</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-md-4">
																				<div class="form-group">
																					<label for="Caste">Obtained Marks in Previous Class</label>
																					<input type="number" class="form-control" name="o_marks" value="{{$student->obtained_marks}}" class="form-control">
																					<br> </div>
																			</div>
																			<div class="col-md-4">
																				<div class="form-group">
																					<label for="Father Name">Total marks in Previous Class</label>
																					<input type="number" class="form-control" name="t_marks" value="{{$student->total_marks}}" class="form-control">
																					<br> </div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-4">
																				<div class="form-group">
																					<label for="Previous School Name">Previous School Name</label>
																					<input type="text" class="form-control" name="p_school" value="{{$student->pre_school}}" class="form-control">
																					<br> </div>
																			</div>
																			<div class="col-md-4">
																				<div class="form-group">
																					<label for="Previous School Name">Previous School Registration Number</label>
																					<input type="text" class="form-control" name="p_school_reg" value="{{$student->pre_school_reg}}" class="form-control">
																					<br> </div>
																			</div>
																			<div class="col-md-4"></div>
																		</div>
																	</div>
																</div> {{--
																<----------------------------Attachments---------------------------------> --}}
																	<div class="card card-outline card-success">
																		<div class="card-header">
																			<div>
																				<h5><b>Attachments</b></h5></div>
																		</div>
																		<div class="card-body">
																			<div class="row">
																				<div class="col-md-4">
																					<div class="form-group">
																						<label>B-form<span class="requiredInput" style="color: red">*</span></label>
																						<input type="file" name="b_form_pic" id="b_form_pic" required class="form-control" onchange="getImagePreview(bform)" value="{{$student->b_form_pic}}" > </div>
																				</div>
																				<div class="col-md-2"></div>
																				<div class="col-md-6">
																					<div class="form-group" id='b_form_preview'><img class=" img-fluid img-reponsive" src="{{ asset('Students/Bform_Pictures/'.$student->b_form_pic )  }}" width="350px" height="550px"></div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-4">
																					<div class="form-group">
																						<label>Father Cnic<span class="requiredInput" style="color: red">*</span></label>
																						<input type="file" name="f_cnic_pic" id="f_cnic_pic" required class="form-control" onchange="getImagePreview(cnic)" value="{{$student->f_cnic_pic}}" > </div>
																				</div>
																				<div class="col-md-2"></div>
																				<div class="col-md-6">
																					<div class="form-group" id="f_cnic_preview"><img class=" img-fluid img-reponsive" src="{{ asset('Students/Fcnic_Pictures/'.$student->f_cnic_pic)  }}" width="500px" height="300px"></div>
																				</div>
																			</div>
																		</div>
																	</div>
											</div>
										</div> {{--
										<----------------------------Fee Detail--------------------------------> --}}
											<div class="card card-outline card-success">
												<div class="card-header">
													<div>
														<h5><b>Fee Detail</b></h5></div>
												</div>
												<div class="card-body">
													<div class="row">
														<div class="col-md-5">
															<div class="form-group">
																<label for="Class">Select Class <span class="requiredInput" style="color: red">*</span></label>
																<br>
																<select class="form-control" id="select-class" name="select_class" required style="width: 50%">
																	<option disabled selected>Select Class</option>
																	<option value="nursery">Nursery</option>
																	<option value="prep">Prep</option>
																	<option value="one">One</option>
																	<option value="two">Two</option>
																	<option value="three">Three</option>
																	<option value="four">Four</option>
																	<option value="five">Five</option>
																	<option value="six">Six</option>
																	<option value="seven">Seven</option>
																	<option value="eight">Eight</option>
																	<option value="nine">Nine</option>
																	<option value="ten">Ten</option>
																</select>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label style="margin-top: 15px">Tution Fee (Monthaly) <span class="requiredInput" style="color: red">*</span></label>
																<br>
																<label style="margin-top: 30px">Admission Fee (Annual) <span class="requiredInput" style="color: red">*</span></label>
																<br>
																<label style="margin-top: 30px">Examination Fee (Annual) </label>
																<br>
																<label style="margin-top: 30px">Sports Fee (Annual) </label>
																<br>
																<label style="margin-top: 30px">Library Fee (Annual) </label>
																<br>
																<label style="margin-top: 30px">Lab Fee (Annual) </label>
																<br>
																<br>
																<label style="margin-top: 30px">Total Fee </label>
															</div>
														</div>
														<div class="col-md-6">
															<div class="row" style="pt-3">
																<div class="form-group"></div>
															</div>
															<div class="row">
																<div class="form-group">
																	<input type="number" id="tution_fee" name="tution_fee" class="form-control" value="{{$student->tution_fee}}" required>
																	<br>
																	<input type="number" id="admission_fee" name="admission_fee" class="form-control" value="{{$student->admission_fee}}" required>
																	<br>
																	<input type="number" id="exam_fee" name="exam_fee" class="form-control" value="{{$student->exam_fee}}">
																	<br>
																	<input type="number" id="sports_fee" name="sports_fee" class="form-control" value="{{$student->sports_fee}}">
																	<br>
																	<input type="number" id="library_fee" name="library_fee" class="form-control" value="{{$student->library_fee}}">
																	<br>
																	<input type="number" id="lab_fee" name="lab_fee" class="form-control" value="{{$student->lab_fee}}">
																	<br>
																	<input type="text" id="total_fee" name="total_fee" class="form-control" value="{{$student->total_fee}}">
																	<br> </div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="card-footer">
													<button type="submit" class="btn btn-primary" name="update">Update</button>
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
	<!-- /.card -->{{--
	<----------------------------------Script for auto images preview --------------------------------------------------------> --}}
		<script type="text/javascript">
		$(document).ready(function() {
			$('#upload_file').on('change', function getImagePreview() {
				var image = URL.createObjectURL(event.target.files[0]);
				var imagediv = document.getElementById('preview');
				var newimg = document.createElement('img');
				imagediv.innerHTML = '';
				newimg.src = image;
				newimg.width = "300";
				newimg.height = "300";
				imagediv.appendChild(newimg);
			})
		})
		</script>
		<script type="text/javascript">
		$(document).ready(function() {
			$('#b_form_pic').on('change', function getImagePreview() {
				var image = URL.createObjectURL(event.target.files[0]);
				var imagediv = document.getElementById('b_form_preview');
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
			$('#f_cnic_pic').on('change', function getImagePreview() {
				var image = URL.createObjectURL(event.target.files[0]);
				var imagediv = document.getElementById('f_cnic_preview');
				var newimg = document.createElement('img');
				imagediv.innerHTML = '';
				newimg.src = image;
				newimg.width = "450";
				newimg.height = "280";
				imagediv.appendChild(newimg);
			})
		})
		</script> 
		{{--<--------------------------------------------Cnic layout--------------------------------------------------------> --}}
			<script type="text/javascript">
			$(document).ready(function() {
				$('#cnic').keypress(function() {
					var cnic = $('#cnic').val();
					if(cnic.length == 5 || cnic.length == 13) {
						$("#cnic").val($('#cnic').val() + '-');
					}
				});
			});
			</script> 
			
			<script type="text/javascript">
				$(document).ready(function() {
					$('#father_cnic').keypress(function() {
						var father_cnic = $('#father_cnic').val();
						if(father_cnic.length == 5 || father_cnic.length == 13) {
							$("#father_cnic").val($('#father_cnic').val() + '-');
						}
					});
				});
				</script>
		{{--<--------------------------------------------Cnic layout--------------------------------------------------------> --}}
                <script type="text/javascript">
	            $(document).ready(function() {
		            $('#f_contact_number').keypress(function() {
			            var f_contact_number = $('#f_contact_number').val();
			            if(f_contact_number.length == 4) {
				            $("#f_contact_number").val($('#f_contact_number').val() + '-');
			            }
		            });
	            });
	            </script>
				
				<script type="text/javascript">
				$(document).ready(function() {
					$('#s_contact_number').keypress(function() {
						var s_contact_number = $('#s_contact_number').val();
						if(s_contact_number.length == 4) {
							$("#s_contact_number").val($('#s_contact_number').val() + '-');
						}
					});
				});
				</script>
								
			
			{{--<----------------------------------for auto fee detection--------------------------------------------------------> --}}
				<script>
				$(document).ready(function() {
					var class_fee = 0;
					$('#select-class').on('change', function() {
						var selected_class = this.value;
						switch(selected_class) {
							case 'nursery':
								class_fee = 750;
								break;
							case 'prep':
								class_fee = 750;
								break;
							case 'one':
								class_fee = 750;
								break;
							case 'two':
								class_fee = 750;
								break;
							case 'three':
								class_fee = 750;
								break;
							case 'four':
								class_fee = 750;
								break;
							case 'five':
								class_fee = 750;
								break;
							case 'six':
								class_fee = 1050;
								break;
							case 'seven':
								class_fee = 1050;
								break;
							case 'eight':
								class_fee = 1050;
								break;
							case 'nine':
								class_fee = 1450;
								break;
							case 'ten':
								class_fee = 1450;
								break;
						}
						$('#tution_fee').val(class_fee)
						$('#admission_fee').val('')
						$('#exam_fee').val('')
						$('#sports_fee').val('')
						$('#library_fee').val('')
						$('#lab_fee').val('')
						$('#total_fee').val('')
					});
					$('#admission_fee').on('focusout', function() {
						var tution = class_fee;
						var admission = $('#admission_fee').val()
						var total_fee = (parseInt(tution) + parseInt(admission));
						$('#total_fee').val(total_fee)
					})
					$('#exam_fee').on('keyup', function() {
						var tution = class_fee;
						var admission = $('#admission_fee').val()
						var exam = $('#exam_fee').val()
						var total_fee = (parseInt(class_fee) + parseInt(admission) + parseInt(exam));
						$('#total_fee').val(total_fee)
					})
					$('#sports_fee').on('keyup', function() {
						var tution = class_fee;
						var admission = $('#admission_fee').val()
						var exam = $('#exam_fee').val()
						var sports = $('#sports_fee').val()
						var total_fee = (parseInt(class_fee) + parseInt(admission) + parseInt(exam) + parseInt(sports));
						$('#total_fee').val(total_fee)
					})
					$('#library_fee').on('keyup', function() {
						var tution = class_fee;
						var admission = $('#admission_fee').val()
						var exam = $('#exam_fee').val()
						var sports = $('#sports_fee').val()
						var library = $('#library_fee').val()
						var total_fee = (parseInt(class_fee) + parseInt(admission) + parseInt(exam) + parseInt(sports) + parseInt(library));
						$('#total_fee').val(total_fee)
					})
					$('#lab_fee').on('keyup', function() {
						var tution = class_fee;
						var admission = $('#admission_fee').val()
						var exam = $('#exam_fee').val()
						var sports = $('#sports_fee').val()
						var library = $('#library_fee').val()
						var lab = $('#lab_fee').val()
						var total_fee = (parseInt(class_fee) + parseInt(admission) + parseInt(exam) + parseInt(sports) + parseInt(library) + parseInt(lab));
						$('#total_fee').val(total_fee)
					})
				})
				</script>
</body>

</html>