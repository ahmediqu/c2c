@extends('frontend.layouts.master')
@section('front-page-title','Sell Quicker | Login ')
@section('frontend-content')
<div class="container container-side post-section">
	<div class="row">
		<div class="col-md-12 post-job">
			<div class="row">
				<div class="col-md-12">
					<h1 class="is-main">Job Post</h1>
					<br>
					 <hr>
					<form  action="{{url('post-ads/job')}}" method="post" class="post-job-form" enctype="multipart/form-data">
					@csrf
						<input type="hidden" value="{{Auth::user()->id}}" name="user_id">
					<div class="post-job-selected">

						<div class="form-group">
							<label for="">Select Job Category</label>
							<select name="job_cat" id="" class="form-control" required>
								<option value="">Select Job Category</option>
								@foreach($jobs_category as $category)
								<option value="{{ $category->id}}"> {{ $category->category_name}} </option>
								@endforeach
							</select>
						</div>


						<div class="form-group">
				          <label for="exampleInputEmail1">Devesion</label>
				          <select name="devesion_id" id="" class="form-control">
				            <option value="">Select Devesion</option>
				            @foreach($divisions as $data)
				              <option value="{{$data->id}}">{{$data->devesion}}</option>
				            @endforeach
				          </select>
				        </div>


						<div class="form-group">
				          <label for="exampleInputEmail1">City</label>
				          <select name="city_id" id="" class="form-control">
				            <option value="">Select Devesion</option>
				            
				          </select>
				        </div>


						<hr>
					</div>
					<h2>About the job</h2><hr>
					
						<div class="form-group">
							<label for="">Job Title</label>
							<input type="text" name="job_title" placeholder="Exm. IT Executive Officer" class="form-control">
						</div>
						<div class="form-group">
							<span class="textarea-label">0/5000</span>
							<textarea class="form-control" cols="4" rows="7" name="job_description">Job description  </textarea>
						</div>
						<div class="row post-job-form-second">
							<div class="col-md-6">
								<div class="form-group">
									<select class="form-control" name="job_type">
									  <option>Job type</option>
									  <option>Overseas Jobs</option>
									  <option>Full Time</option>
									  <option>Part Time</option>
									  <option>Contartual</option>
									  <option>Intership</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="designation" placeholder="Role/Designation (Option)" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="post-job-labe">Receive applications via</label>
									<select class="form-control" name="recive_application_vie">
									  <option>Employer Daseboard</option>
									  <option>Receive applications via</option>
									  <option>Phone</option>
									</select>
								</div>
							</div>
						</div>
						<div class="fields-salary">
							<label class="">Salary (per month) (Tk) (optional)</label>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<input type="number" name="salary_from" placeholder="From" class="form-control">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<input type="number" name="salary_to" placeholder="To" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="number" name="vacancies" placeholder="Total vacancies (optional)" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Deadline</label>
										<input type="date" name="application_last_date" placeholder="Application deadline  " class="form-control">
									</div>
								</div>
							</div>
						</div>
						<h2>Candidate preferences</h2><hr>
						<div class="form-group">
							<label for="">Company Name</label>
							<input type="text" name="company_name" placeholder="Company Name" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Company Logo</label>
							<input type="file" name="company_logo" class="" value="Attach logo">
						</div>
						<h2>About the company / employer</h2><hr>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<select class="form-control" name="education_qualification">
									  <option>Minimum qualification (optional)</option>
									  <option>Primary School</option>
									  <option>High School</option>
									  <option>SSC/O Level</option>
									  <option>HSC/A Level</option>
									  <option>Diploma</option>
									  <option>Bachelor/Honors</option>
									  <option>Masters</option>
									  <option>Phd/Doctrate</option>
									</select>
								</div>
							</div>	
							<div class="col-md-6">
								<div class="form-group">
									<input type="number" name="exprience" class="form-control" placeholder="Required Experience(Years)">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="skill" class="form-control" placeholder="Skills(optional)">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="number" name="age" class="form-control" placeholder="Maximum age (Optional)">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<select class="form-control" name="gender">
									  <option>Gender Preference(Optonial)</option>
									  <option>Male</option>
									  <option>Female</option>
									  <option>Other</option>
									  <option>Any</option>
									</select>
								</div>
							</div>
						</div>
						<!-- <h2>Minimum application requirements</h2><hr>
						<p class="fields-applicatio">Fill this section if you have selected "Employer Dashboard" as the method to receive applications. Choose the information you wish to receive from each applicant.</p>
						<label class="fields-salary">Application requirements (optional)</label> -->
						<!-- <div class="row post-cheack-section">
							<div class="col-md-6">
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" checked="checked">
								  <label class="form-check-label post-cheack" for="inlineCheckbox3">Gender</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" checked="checked">
								  <label class="form-check-label post-cheack" for="inlineCheckbox3">Email</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" checked="checked">
								  <label class="form-check-label post-cheack" for="inlineCheckbox3">Highest education level</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" checked="checked">
								  <label class="form-check-label post-cheack" for="inlineCheckbox3">Current Industry</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" checked="checked">
								  <label class="form-check-label post-cheack" for="inlineCheckbox3">Salary</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" checked="checked">
								  <label class="form-check-label post-cheack" for="inlineCheckbox3">Date of birth</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" checked="checked">
								  <label class="form-check-label post-cheack" for="inlineCheckbox3">Living in</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" checked="checked">
								  <label class="form-check-label post-cheack" for="inlineCheckbox3">Total work experience</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" checked="checked">
								  <label class="form-check-label post-cheack" for="inlineCheckbox3">Current Business Function</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" checked="checked">
								  <label class="form-check-label" for="inlineCheckbox3">Attached CV</label>
								</div>
							</div>
						</div> -->
					
						<div class="post-cont-details">
						<h2 class="is-main">Contact details</h2>
						<p class="post-con-nam">Name</p>
						<p class="post-con-nam-info">{{Auth::user()->name}}</p>
						
						<div class="post-contact-boottom">
							<p>Email</p>
							<p class="post-contact-email">{{Auth::user()->email}}</p>
						</div>
						</div>
						<input type="submit" name="" value="Post ad" class="btn btn-info btn-md submit-btn">
				</form>
			</div>
			</div>
		</div>
	</div>
</div>


@section('scripts')
 <script>
		$(document).ready(function() {
        $('select[name=devesion_id]').change(function() {

            var url = '{{ url('devesion') }}' + '/' + $(this).val() + '/city/';

            $.get(url, function(data) {
                var select = $('form select[name= city_id]');

                select.empty();

                $.each(data,function(key, value) {
                    select.append('<option value=' + value.id + '>' + value.name + '</option>');
                });
            });
        });
    });

</script>
@endsection
@endsection