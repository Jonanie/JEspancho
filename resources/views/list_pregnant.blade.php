@extends('layout.app')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
    <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
            <div class="card-body">
                <div class="bg-primary rounded h-50 p-2">
                    <h6 class="mb-8">PREGNANT LIST</h6>
                </div>
                
                <table class="table">
                <div class="card-body">
                    <div class="row">
                    <thead>
                    <tbody>
                            <tr class="group"><td colspan="16"><b> February, 2023 </b></td></tr>

                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">FIRST NAME</th>
                            <th scope="col">MIDDLE NAME</th>
                            <th scope="col">LAST NAME</th>
                            <th scope="col">BIRTH DATE</th>
                            <th scope="col">ADDRESS</th>
                            <th scope="col">MOBILE</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">BLOOD PRESSURE</th>
                            <th scope="col">HEIGHT</th>
                            <th scope="col">WEIGHT</th>
                            <th scope="col">BLOOD</th>
                            <th scope="col">URINALYSIS</th>
                            <th scope="col">DATE</th>
                            <th scope="col">ACTION</th>
                    </thead>
                        
                        @if(isset($Pregnant))
                        @foreach($Pregnant as $Pregnant)
                        <tr>
                            <th scope="row">{{ $Pregnant->PregnantID }}</th>
                            <td>{{ $Pregnant->FirstName }}</td>
                            <td>{{ $Pregnant->MiddleName }}</td>
                            <td>{{ $Pregnant->LastName}}</td>
                            <td>{{ $Pregnant->BirthDate }}</td>
                            <td>{{ $Pregnant->Address }}</td>
                            <td>{{ $Pregnant->Mobile }}</td>
                            <td>{{ $Pregnant->Email }}</td>
                            <td>{{ $Pregnant->BloodPressure }}</td>
                            <td>{{ $Pregnant->Height }}</td>
                            <td>{{ $Pregnant->Weight }}</td>
                            <td>{{ $Pregnant->Blood }}</td>
                            <td>{{ $Pregnant->Urinalysis }}</td>
                            <td>{{ $Pregnant->Date }}</td>


                            <td>
                                <!-- data-bs-toggle="modal" data-bs-target="#edit_pregnant"  -->
                                <button type="button" data-toggle="modal" data-target="#edit_pregnant" onclick="edit_pregnant('{{ $Pregnant->PregnantID }}','{{ $Pregnant->FirstName }}','{{ $Pregnant->MiddleName }}','{{ $Pregnant->LastName }}','{{ $Pregnant->BirthDate }}','{{ $Pregnant->Address }}','{{ $Pregnant->Mobile }}','{{ $Pregnant->Email }}','{{ $Pregnant->BloodPressure }}','{{ $Pregnant->Height }}','{{ $Pregnant->Weight }}','{{ $Pregnant->Blood }}','{{ $Pregnant->Urinalysis }}','{{ $Pregnant->Date }}')"
                                class="btn btn-outline-info m-2">Edit</button>
                                <a href="list/delete/{{$Pregnant->PregnantID}}" class="btn btn-outline-danger m-2" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                        </tbody>
                </table>

                <!-- Modal -->
<div class="modal fade" id="edit_pregnant" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content" style="background-color: #191C24 !important;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT PREGNANT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">

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
                    </div>
                    </div>
   
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" onclick="save_edit_pregnant()" class="btn btn-outline-primary m-2">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
</div>
</div>
</div>



@endsection
@section('script')
<script>
//    $(function() {

    function edit_pregnant(PregnantID, FirstName, MiddleName, LastName, BirthDate, Address, Mobile, Email, BloodPressure, Height, Weight, Blood, Urinalysis, Date){
        $('#edit_pregnant').modal('toggle');
        $('#PregnantID').val(PregnantID);
        $('#FirstName').val(FirstName);
        $('#MiddleName').val(MiddleName);
        $('#LastName').val(LastName);
        $('#BirthDate').val(BirthDate);
        $('#Address').val(Address);
        $('#Mobile').val(Mobile);
        $('#Email').val(Email);
        $('#BloodPressure').val(BloodPressure);
        $('#Height').val(Height);
        $('#Weight').val(Weight);
        $('#Blood').val(Blood);
        $('#Urinalysis').val(Urinalysis);
        $('#Date').val(Date);
    }

// });



    function save_edit_pregnant(){
        var PregnantID = $('#PregnantID').val();
        var FirstName = $('#FirstName').val();
        var MiddleName = $('#MiddleName').val();
        var Height = $('#Height').val();
        var LastName = $('#LastName').val();
        var Blood = $('#Blood').val();
        var BirthDate = $('#BirthDate').val();
        var Address = $('#Address').val();
        var Mobile = $('#Mobile').val();
        var Email = $('#Email').val();
        var BloodPressure = $('#BloodPressure').val();
        var Weight = $('#Weight').val();
        var Urinalysis = $('#Urinalysis').val();
        var Date = $('#Date').val();

        var pregnant_Data = new FormData()
        pregnant_Data.append('PregnantID',PregnantID)
        pregnant_Data.append('FirstName',FirstName)
        pregnant_Data.append('MiddleName',MiddleName)
        pregnant_Data.append('BirthDate',BirthDate)
        pregnant_Data.append('LastName',LastName)
        pregnant_Data.append('Address',Address)
        pregnant_Data.append('Mobile',Mobile)
        pregnant_Data.append('Email',Email)
        pregnant_Data.append('BloodPressure',BloodPressure)
        pregnant_Data.append('Height',Height)
        pregnant_Data.append('Weight',Weight)
        pregnant_Data.append('Blood',Blood)
        pregnant_Data.append('Urinalysis',Urinalysis)
        pregnant_Data.append('Date',Date)

        $.ajax({
            method: "POST",
            url: "{{route('PregnantSave')}}",
            dataType: 'json',
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            data: pregnant_Data,

        }).done(function( msg ) {
            if(msg.result ==true){
                Swal.fire(
                'Update',
                msg.message,
                'success'
                )
            } else {
                Swal.fire(
                'Update',
                msg.message,
                'error'
                )
            }
        });
    }
    
</script>
@endsection
