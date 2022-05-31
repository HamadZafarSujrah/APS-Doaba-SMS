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
				<div class="col-md-8"> @if (Session::get('success'))
					<div class="alert alert-success"> {{Session::get('success')}} </div> @endif @if (Session::get('fail'))
					<div class="alert alert-danger"> {{Session::get('fail')}} </div> @endif
					<!-- general form elements -->{{--
					<div class="card card-outline card-success"> --}}
						<div class="card card-primary">
							<div class="card-header">
								<div class=" text-center">
									<h3><b> Teacher Hiring</b></h3> <a href="{{ route('auth.logout')}}" class="float-sm-right breadcrumb-item "> Logout</a> <a href="{{url('/dashboard') }}" class="float-sm-right breadcrumb-item">Home\</a></div>
							</div>
							<!-- /.card-header -->
							<!-- form start -->
							<form action="" method="post" enctype="multipart/form-data">
                              
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
																	<label for="Student Name">Name<span class="requiredInput" style="color: red">*</span></label>
																	<input type="text" class="form-control" name="std_first_name" placeholder="Enter First Name" required>
																	<br>
																	<input type="text" class="form-control" name="std_last_name" placeholder="Enter Last Name" required> 
                                                                </div>
																<div class="form-group">
																	<label>Date of Birth<span class="requiredInput" style="color: red">*</span></label>
																	<div class="input-group"> <span class="input-group-addon"><i class=""></i></span>
																		<input type="date" name="dob" class="form-control border-primary controls" required> </div>
																</div>
                                                                <div class="form-group">
                                                                    <label for="Father Name">Father Name<span class="requiredInput" style="color: red">*</span></label>
                                                                    <input type="text" class="form-control" id="fathername" name="father_name" placeholder="Enter Father Name" required class="form-control">
                                                                    <br> 
                                                                </div>
															</div>
															<div class="col-md-4"> </div>
															<div class="col-md-4"> {{--
																<div class="card-body">
																	<div class="container mt-3">
																		<div class="card" style="width:250px;height:260px"> <img class="card-img-top" alt="profile Picture"> </div>
																	</div>
																</div> --}}
																<div id="preview"></div>
															</div>
														</div>
														<div class="row">
                                                            <div class="col-md-4">
																<div class="form-group">
                                                                <label for="B-Form/Cnic No.  ">Cnic Number<span class="requiredInput" style="color: red">*</span></label>
																	<input type="text" data-inputmask="'mask': '99999-9999999-9'" placeholder="XXXXX-XXXXXXX-X" name="cnic" id="cnic" class="form-control" maxlength="15" required="">
																	<br>
                                                                 </div>
                                                            </div>
															<div class="col-md-4">
																<div class="form-group" >
																	<label for="Gender">Gender<span class="requiredInput" style="color: red">*</span></label>
																	<br>
																	<div style="height: 100%">
																		<input type="radio" name="gender" value="male" style="width: 15% " required> Male </div>
																	<div style="">
																		<input type="radio" name="gender" value="female" style="width: 15%" required> Female </div>
																</div>
															</div>
															
															<div class="col-md-4">
																<div class="form-group">
																	<label for="Profile picture">Profile picture<span class="requiredInput" style="color: red">*</span></label>
																	<input type="file" name="profile_picture" class="form-control" id="upload_file" required class="form-control"> </div>
															</div>
														</div>
													</div>
												</div>
												{{--<----------------------------Contact Information---------------------------------> --}}	
												<div class="card card-outline card-success">
													<div class="card-header ">
														<h5><b>Contact Information</b></h5></div>
														<div class="card-body">
															<div class="row">
																
																<div class="col-md-4">
																	<div class="form-group">
																		<label>Email Address</label>
																		<div class="input-group">
																			<div class="input-group-prepend"> <span class="input-group-text"><i class="fas fa-envelope"></i></span> </div>
																			<input type="email" class="form-control" placeholder="Enter Email address" name="email_address"> </div>
																	</div> 
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>1st Contact Number<span class="requiredInput" style="color: red">*</span></label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"> <span class="input-group-text"><i class="fas fa-phone"></i></span> </div>
                                                                            <input type="text" class="form-control" id="f_contact_number" name="f_contact_number" placeholder="03XX-XXXXXXX" required class="form-control" maxlength="12"> </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>2nd Contact Number</label>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"> <span class="input-group-text"><i class="fas fa-phone"></i></span> </div>
                                                                            <input type="text" class="form-control" placeholder="03XX-XXXXXXX" id="s_contact_number" name="s_contact_number" maxlength="12"> </div>
                                                                    </div>
                                                                </div>
															</div>

															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="Caste">Address<span class="requiredInput" style="color: red">*</span></label>
																		<input type="text" class="form-control" id="name" name="address" placeholder="Enter Address" required class="form-control">
																		<br> </div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label for="Gender">Tehsil<span class="requiredInput" style="color: red">*</span></label>
																		<br>
																		<select required style="width: 100%" class="form-control" name="tehsil">
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
																		<select required style="width: 100%" class="form-control" name="district">
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
														<h5><b>Qualificaion</b></h5></div>
														<div class="card-body">
															<div class="row">
																
																<div class="col-md-4">
																	<div class="form-group">
																		<label>Latest Degree<span class="requiredInput" style="color: red">*</span></label>
																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label>B-form<span class="requiredInput" style="color: red">*</span></label>
																	</div>
																</div>
																<div class="col-md-4">
																	<div class="form-group">
																		<label>B-form<span class="requiredInput" style="color: red">*</span></label>
																	</div>
																</div>
															</div>
														</div>
												</div>
														
															
														
															
																
																	
																
															
																	
																		<div class="card-body">
																			<div class="row">
																				<div class="col-md-4">
																					<div class="form-group">
																						<label>B-form<span class="requiredInput" style="color: red">*</span></label>
																						<input type="file" name="b_form_pic" id="b_form_pic" required class="form-control" onchange="getImagePreview(bform)"> </div>
																				</div>
																				<div class="col-md-2"></div>
																				<div class="col-md-6">
																					<div class="form-group" id='b_form_preview'></div>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-md-4">
																					<div class="form-group">
																						<label>Father Cnic<span class="requiredInput" style="color: red">*</span></label>
																						<input type="file" name="f_cnic_pic" id="f_cnic_pic" required class="form-control" onchange="getImagePreview(cnic)"> </div>
																				</div>
																				<div class="col-md-2"></div>
																				<div class="col-md-6">
																					<div class="form-group" id="f_cnic_preview"></div>
																				</div>
																			</div>
																		</div>
																	
											
										 {{--
										<----------------------------Pay Detail--------------------------------> --}}
											<div class="card card-outline card-success">
												<div class="card-header">
													<div>
														<h5><b>Pay Detail</b></h5></div>
												</div>
												<div class="card-body">
													<div class="row">
														<div class="col-md-5">
															<div class="form-group">
																<label for="Class">Select Basic pay Scale <span class="requiredInput" style="color: red">*</span></label>
																<br>
																<select class="form-control" id="select_bps" name="select_bps" required style="width: 50%">
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
																<label style="margin-top: 15px">Basic pay <span class="requiredInput" style="color: red">*</span></label>
																<br>
																<label style="margin-top: 30px">Conveyance Allowance <span class="requiredInput" style="color: red">*</span></label>
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
																	<input type="number" id="basic_pay" name="basic_pay" class="form-control" required>
																	<br>
																	<input type="number" id="convey_allowance" name="convey_allowance" class="form-control" required>
																	<br>
																	<input type="number" id="health_allowance" name="health_allowance" class="form-control">
																	<br>
																	<input type="text" id="total_pay" name="total_pay" class="form-control">
																	<br> </div>
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
				newimg.height = "400";
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
			
			
		{{--<--------------------------------------------Contact number layout--------------------------------------------------------> --}}
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
					var basic_pay = 0;
					$('#select_bps').on('change', function() {
						var selected_bps = this.value;
						switch(selected_bps) {
							
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
						$('#total_pay').val('')
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
</body>

</html>