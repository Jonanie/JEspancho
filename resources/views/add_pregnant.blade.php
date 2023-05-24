@extends('layout.app')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-2"></div>

        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
            <div class="card-body">
                <div class="bg-primary rounded h-50 p-2">
                    <h6 class="mb-8">PREGNANT CHECKUP FORM</h6>
                </div>
                @if(isset($Success))

                <div class="alert alert-success" role="alert">
                    {{ $Success }}
                </div>

                @elseif(isset($Error))
                <div class="alert alert-danger" role="alert">
                    {{ $Error }}
                </div>
                @endif

                <form method="post" action="{{ route('PregnantSave') }}">
                @csrf

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-4">
                        <div class="form-group">
                            <label for="FirstName" class="form-label">FirstName</label>
                            <input type="text" class="form-control" name="FirstName" id="FirstName">
                        </div>
                        </div>
                   
                        <div class="col-md-2">
                        <div class="form-group">
                            <label for="MiddleName" class="form-label">MiddleName</label>
                            <input type="text" class="form-control" name="MiddleName" id="MiddleName">
                        </div>
                        </div>
                  
                        <div class="col-md-4">
                        <div class="form-group">
                            <label for="LastName" class="form-label">LastName</label>
                            <input type="text" class="form-control" name="LastName" id="LastName">
                        </div>
                        </div>
              
                        <div class="col-md-2">
                        <div class="form-group">
                            <label for="BirthDate" class="form-label">BirthDate</label>
                            <input type="date" class="form-control" name="BirthDate" id="BirthDate">
                        </div>
                        </div>

                        <div class="col-md-4">
                        <div class="form-group">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="Address" id="Address">
                        </div>
                        </div>

                        <div class="col-md-4">
                        <div class="form-group">
                            <label for="Mobile" class="form-label">Mobile</label>
                            <input type="text" class="form-control" name="Mobile" id="Mobile">
                        </div>
                        </div>
                    
                        <div class="col-md-4">
                        <div class="form-group">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="Email" id="Email">
                        </div>
                        </div>

                        <div class="col-md-4">
                        <div class="form-group">
                            <label for="BloodPressure" class="form-label">BloodPressure</label>
                            <input type="text" class="form-control" name="BloodPressure" id="BloodPressure">
                        </div>
                        </div>
                    
                        <div class="col-md-4">
                        <div class="form-group">
                            <label for="Height" class="form-label">Height</label>
                            <input type="text" class="form-control" name="Height" id="Height">
                        </div>
                        </div>

                        <div class="col-md-4">
                        <div class="form-group">
                            <label for="Weight" class="form-label">Weight</label>
                            <input type="text" class="form-control" name="Weight" id="Weight">
                        </div>
                        </div>

                        <div class="col-md-4">
                        <div class="form-group">
                            <label for="Blood" class="form-label">Blood</label>
                            <input type="text" class="form-control" name="Blood" id="Blood">
                        </div>
                        </div>
                        
                        <div class="col-md-4">
                        <div class="form-group">
                            <label for="Urinalysis" class="form-label">Urinalysis</label>
                            <input type="text" class="form-control" name="Urinalysis" id="Urinalysis">
                        </div>
                        </div>

                        <div class="col-md-4">
                        <div class="form-group">
                            <label for="Date" class="form-label">Date</label>
                            <input type="date" class="form-control" name="Date" id="Date">
                        </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-outline-primary m-2">Save</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        <div class="col-sm-12 col-xl-2"></div>
    </div>
</div>
@endsection