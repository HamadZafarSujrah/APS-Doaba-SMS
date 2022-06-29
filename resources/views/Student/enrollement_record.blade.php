@include('index')
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Enrollment Record</title>
</head>

<body>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<!-- general form elements -->{{--
					<div class="card card-outline card-success"> --}}
						<section class="content-header">
							<div class="card card-success">
								<div class="card-header">
									<div class="container-fluid">
										<div class="row mb-2">
											<div class="col-sm-6">
												<h1>Enrollement Record</h1> </div>
											<div class="col-sm-6">
												<ol class="breadcrumb float-sm-right">
													<li class="breadcrumb-item"><a href="{{url('/admission') }}">Add New Student</a></li>
													<li class="breadcrumb-item"><a href="{{url('/dashboard') }}">Home</a></li>
													<li class="breadcrumb-item active"> <a href="{{ route('auth.logout')}}">Logout</a> </li>
												</ol>
											</div>
										</div>
									</div>
								</div>
								<table class="table table-border tablle-striped" border="1">
									<thead>
										<tr>
											<th>Student Id</th>
											<th>Student name</th>
											<th>Cnic</th>
											<th>Date of Birth</th>
											<th>Gender</th>
											<th>Father Name</th>
											<th>Conatct Number</th>
											<th>Email Adress</th>
											<th>Adress</th>
											<th>Section</th>
											<th>Class</th>
											<th>Total Fee</th>
											<th>Discount</th>
											<th>Fee after Discount</th>

											<th>Edit</th>
											{{-- <th>Delete</th> --}}
										</tr>
									</thead>
									<tbody> @foreach ($items as $item)
										<tr>
											<td>{{ $item->std_id}}</td>
											<td> <a href="{{url('/profile').'/'.$item->id }}">{{ $item->std_first_name}} {{ $item->std_last_name}}</a></td>
											<td>{{ $item->cnic}}</td>
											<td>{{ $item->dob}}</td>
											<td>{{ $item->gender}}</td>
											<td>{{ $item->father_name}}</td>
											<td>{{ $item->f_contact_number}}</td>
											<td>{{ $item->email}}</td>
											<td>{{ $item->address}}</td>
											<td>{{ $item->class}}{{ $item->section}}</td>
											<td>{{ $item->class}}</td>
											<td>{{ $item->total_fee}}</td>
											<td>{{ $item->discount}}</td>
											<td>{{ $item->fee_payable}}</td>
											<td>
												<a href="{{ asset( '/edit_student').'/'. $item->id}}" class="btn btn-primary btn-sm"><i class="fa fa-pen"></i></a>
											</td>
									        {{-- <td>
												<a href="{{ asset( '/delete_student').'/'. $item->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
											</td> --}}
										</tr> @endforeach </tbody>
								</table>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</section> {{-- </body>

</html> --}}