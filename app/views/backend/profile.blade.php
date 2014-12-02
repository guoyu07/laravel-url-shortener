@extends('layouts.backend.default')

@section('content')

    @include('backend.partials.page-head', array(
        'pageTitle' => 'Profile',
        'pageTagline' => 'Manage all your account settings here!'
    ))

    <div class="dashboard-content light_grey ptb60">

        <div class="container-fluid settings-content">
            <div class="row-fluid">
                <div class="span10 offset1">

                    <div class="events-list p10" style="margin-bottom: 10px;">
                        {{-- Form::open(array('route' => 'updateProfile', 'method' => 'post')) --}}
                        {{ Form::model($user, array('route' => 'updateUser', 'method' => 'post')) }}
                            <div class="tab-pane active" id="personal-settings">
                                <div class="row-fluid">
                                    <div class="span1"></div>
                                    <div class="span10">

                                        <br>
                                        <h3 class="settings-head">Account Settings</h3>
                                        <br>

                                        {{ Form::text('firstname', null, array('id' => 'firstname', 'placeholder' => 'First Name')) }}
                                        {{ Form::text('lastname', null, array('id' => 'firstname', 'placeholder' => 'First Name')) }}

                                        {{ Form::text('Username', null, array('id' => 'firstname', 'placeholder' => 'Username')) }}

                                        {{ Form::text('email', null, array('id' => 'email', 'placeholder' => 'Email')) }}

                                        {{ Form::password('password', array('id' => 'password', 'placeholder' => 'Old Password')) }}

                                        {{ Form::password('newpassword', array('id' => 'newpassword', 'placeholder' => 'New Password')) }}
                                        {{ Form::password('confirmnewpassword', array('id' => 'confirmnewpassword', 'placeholder' => 'Confirm New Password')) }}

                                        {{ Form::submit('Save Changes', array('class' => 'button red-button')) }}

                                        <div class="row-fluid">
                                            <div class="alert error">
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                <p>Invalid Username entered, it must not contain any spaces</p>
                                                <p>Password must be 6 to 10 characters</p>
                                                <p class="m0">Passwords don't match</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="span1"></div>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>

                </div>
                <div class="span1"></div>
            </div>
        </div>
    </div>
@stop