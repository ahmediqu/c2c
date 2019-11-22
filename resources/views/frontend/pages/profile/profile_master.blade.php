<div class="profile-head">
    <h5 style="margin-bottom: 10px;text-transform: uppercase;">
    {{ Auth::user()->name }}
    </h5>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="{{url('profile')}}">My Post</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('profile/setting')}}">Profile Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('profile/change-password')}}">Change Password</a>
        </li>
    </ul>
</div>