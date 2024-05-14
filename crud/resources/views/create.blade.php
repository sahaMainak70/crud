@extends('layouts.masterLayout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

@section('content')
    <div class="form-container">
        <form id="create-form" action="#" method="POST">
            @csrf
            <h2>Create</h2>
            <div class="row">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                    <div class="error-message" id="name-error"></div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                    <div class="error-message" id="email-error"></div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" id="phone" class="form-control">
                    <div class="error-message" id="phone-error"></div>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control">
                    <div class="error-message" id="address-error"></div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <div class="error-message" id="password-error"></div>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">
                        Confirm Password
                    </label>
                    <input type="password" name="confirmPassword" id="confirmPassword" class="form-control">
                    <div class="error-message" id="confirmPassword-error"></div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <button type="submit" id="submit-btn" class="btn">Create</button>
                </div>
            </div>
        </form>
    </div>
@endsection
