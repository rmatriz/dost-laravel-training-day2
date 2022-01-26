@extends('layouts.app')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 m-auto p-3">
				<h1 class="display-4s">Enrolled Subjects</h1>
			</div>
		</div>
		@foreach ($subjects as $subject)
		<div class="col-md-10 m-auto mt-2 p-3">
			{{-- <div class="card" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title"><strong>{{ $subject['subject_name'] }}</strong></h5>
			    <p class="card-text">Daily Schedule : {{ $subject['daily_sched'] }} </p>
			    <p class="card-text">Time           : {{ $subject['time'] }} </p>
			    <p class="card-text">Room           : {{ $subject['room'] }} </p>
			    <p class="card-text">Instructor     : {{ $subject['instructor'] }} </p>
			  </div>
			</div> --}}

			<div class="accordion" id="accordionExample">
			  <div class="accordion-item">
			    <h2 class="accordion-header" id="headingOne">
			      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			        {{ $subject['subject_name'] }}
			      </button>
			    </h2>
			    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
			      <div class="accordion-body">
			        <p class="card-text">Daily Schedule : {{ $subject['daily_sched'] }} </p>
				    <p class="card-text">Time           : {{ $subject['time'] }} </p>
				    <p class="card-text">Room           : {{ $subject['room'] }} </p>
				    <p class="card-text">Instructor     : {{ $subject['instructor'] }} </p>
			      </div>
			    </div>
			  </div>
			</div>


		</div>
		@endforeach
	</div>
@endsection
