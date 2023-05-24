<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-home"></i></h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('assets/img/flower.jpg') }}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jonanie</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route('dashboard')}}" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Dashboard</a>
            <a href="{{route('add_pregnant')}}" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>Add Pregnant</a>
            <a href="{{route('list_pregnant')}}" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>List Pregnant</a>
        </div>
    </nav>
</div>