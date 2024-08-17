@extends('dashboard')
@section('content')
<div class="tab-content pt-2">

<div class="tab-pane fade profile-edit pt-3 active show" id="profile-edit" role="tabpanel">

    <!-- Profile Edit Form -->
    <form action="{{route('account.update',$user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="row mb-3">
        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">صورة الملف الشخصي</label>
        <div class="col-md-8 col-lg-9">
        <img src="assets/img/profile-img.jpg" alt="Profile">
        <div class="pt-2">
            <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
        </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">الاسم</label>
        <div class="col-md-8 col-lg-9">
        <input name="name" type="text" class="form-control" id="name" value="{{$user->name}}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">تغيير كلمة المرور</label>
        <div class="col-md-8 col-lg-9">
        <input name="password" type="password" class="form-control" id="password">
        @error('password')
            <h1>{{$message}}</h1>
        @enderror
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
    </form><!-- End Profile Edit Form -->

</div>

<div class="tab-pane fade pt-3" id="profile-settings" role="tabpanel">

    <!-- Settings Form -->
    <form>

    <div class="row mb-3">
        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
        <div class="col-md-8 col-lg-9">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="changesMade" checked="">
            <label class="form-check-label" for="changesMade">
            Changes made to your account
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="newProducts" checked="">
            <label class="form-check-label" for="newProducts">
            Information on new products and services
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="proOffers">
            <label class="form-check-label" for="proOffers">
            Marketing and promo offers
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="securityNotify" checked="" disabled="">
            <label class="form-check-label" for="securityNotify">
            Security alerts
            </label>
        </div>
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>
    </form><!-- End settings Form -->

</div>

<div class="tab-pane fade pt-3" id="profile-change-password" role="tabpanel">
    <!-- Change Password Form -->
    <form>

    <div class="row mb-3">
        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
        <div class="col-md-8 col-lg-9">
        <input name="password" type="password" class="form-control" id="currentPassword">
        </div>
    </div>

    <div class="row mb-3">
        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
        <div class="col-md-8 col-lg-9">
        <input name="newpassword" type="password" class="form-control" id="newPassword">
        </div>
    </div>

    <div class="row mb-3">
        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
        <div class="col-md-8 col-lg-9">
        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Change Password</button>
    </div>
    </form><!-- End Change Password Form -->

</div>

</div>
    
@endsection