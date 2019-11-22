@extends('frontend.layouts.master') @section('front-page-title',' | Job Details ') @section('frontend-content')
<div class="container mt-5 mb-5 job_details" style="background:#fff;">
    <div class="row">
        <div class="col-md-7">
            <div class="job-tiltle">
                <h1>{{$job->job_title}}</h1>
            <h3>{{$job->company_name}}</h3>
                <h2>Vacancy</h2>
            <p>{{$job->vacancies}}</p>
            </div>
            <div class="job-repesebileti">
            <h2>Job Responsibilities</h2>
                <ul class="job-list">
                    <li>Job Details</li>
                    <li>Job all</li>
                    <li>job think</li>
                </ul>
            </div>
            <div class="employe-status">
                <h2>Employment Status</h2>
            <p>{{$job->job_type}}</p>
            </div>
            <div class="education-req">
                <h2>Educational Requirements</h2>
                <ul class="job-list">
                <li>{{$job->education_qualification}}</li>
                </ul>
            </div>
            <div class="education-req">
                <h2>Experience Requirements</h2>
                <ul class="job-list">
                <li>{{$job->exprience}}</li>
                </ul>
            </div>
            <div class="education-req">
                <h2>Additional Requirements</h2>
                <ul class="job-list">
                    <li>Both males and females are allowed to apply</li>
                    <li> Excellent communication and presentation skills.</li>
                    <li>Possess in-depth knowledge about Accounts.</li>
                </ul>
            </div>
            <div class="job-location">
                <h2>Job Location</h2>
                <p>Dhaka</p>
            </div>
            <div class="job-salary">
                <h2>Salary</h2>
            <p>{{$job->salary_to}}-{{$job->salary_from}}</p>
            </div>
            <div class="job-comp-det">
                <h2>Company Information</h2>
                <p></p>
            </div>
        </div>
        <div class="col-md-5">
            <div class="job-card">
                <ul class="list-group">
                    <li class="list-group-item active">Job Summary</li>
                <li class="list-group-item"><span class="job-span">Published on:</span>{{$job->created_at}}</li>
                    <li class="list-group-item"><span class="job-span">Vacancy:</span>{{$job->vacancies}}</li>
                    <li class="list-group-item"><span class="job-span">Employment Status:</span>{{$job->job_type}}</li>
                    <li class="list-group-item"><span class="job-span">Experience: </span>{{$job->exprience}}</li>
                <li class="list-group-item"><span class="job-span">Gender:</span>{{$job->gender}}</li>
                    <li class="list-group-item"><span class="job-span">Job Location:</span>Dhaka</li>
                    <li class="list-group-item"><span class="job-span">Salary:</span> {{$job->salary_to}}-{{$job->salary_from}}</li>
                <li class="list-group-item"><span class="job-span">Application Deadline:</span>{{$job->application_last_date}}</li>
                  </ul>
            </div>
        </div>
    </div>
</div>
@endsection
