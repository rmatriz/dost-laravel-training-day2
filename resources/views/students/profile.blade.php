@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
		 	@foreach ($profiles as $profile)
		 	<div class="col-md-3">
	            <div class="card" style="width: 18rem;">
	              <img src="{{ asset('storage/avatar/avatar-female-1.png') }}" class="card-img-top" alt="...">
	              <div class="card-body">
	                <h5 class="card-title"><strong>{{ $profile['student_name'] }}</strong></h5>
					<p class="card-text">Time           : {{ $profile['student_id'] }} </p>
					<p class="card-text">Room           : {{ $profile['course'] }} </p>
					<p class="card-text">Instructor     : {{ $profile['birthdate'] }} </p>
					<p class="card-text">Address        : {{ $profile['address'] }} </p>
					<p class="card-text">Contact Info   : {{ $profile['contact_info'] }} </p>
	              </div>
	            </div>
	        </div>
		 	@endforeach
	        <div class="col-md-9">
	            <div class="card">
	                <div class="card-header">{{ __('Student Details') }}</div>
	                <div class="card-body">
	                    @if (session('status'))
	                        <div class="alert alert-success" role="alert">
	                            {{ session('status') }}
	                        </div>
	                    @endif

	                    <h4>Enrolled Subjects</h1>

	                    <table class="table table-striped table-hover table-bordered">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Subject Name</th>
						      <th scope="col">Daily Schedule</th>
						      <th scope="col">Time</th>
						      <th scope="col">Room</th>
						      <th scope="col">Instructor</th>
						    </tr>
						  </thead>
						  @foreach ($subjects as $subject)
						  <tbody>
						    <tr>
						      <th scope="row">{{ $subject['id'] }}</th>
						      <td>{{ $subject['subject_name'] }}</td>
						      <td>{{ $subject['daily_sched'] }}</td>
						      <td>{{ $subject['time'] }}</td>
						      <td>{{ $subject['room'] }}</td>
						      <td>{{ $subject['instructor'] }}</td>
						    </tr>
						  </tbody>
						  @endforeach
						</table>

						<div><br>
							<h4>Grades</h1>

		                    <table class="table table-striped table-hover table-bordered">
							  <thead>
							    <tr>
							      <th scope="col">#</th>
							      <th scope="col">Subject Name</th>
							      <th scope="col">Midterm</th>
							      <th scope="col">Finalterm</th>
							      <th scope="col">Average</th>
							    </tr>
							  </thead>
							  @foreach ($grades as $grade)
							  <tbody>
							    <tr>
							      <th scope="row">1</th>
							      <td>{{ $grade['subject'] }}</td>
							      <td>{{ $grade['midterm'] }}</td>
							      <td>{{ $grade['finalterm'] }}</td>
							      <td>{{ $grade['average'] }}</td>
							    </tr>
							  </tbody>
							  @endforeach
							</table>
						</div>
	                </div>
	            </div>
	        </div>  
	    </div>

	   
		
	</div>
@endsection

