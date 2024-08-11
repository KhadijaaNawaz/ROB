@extends('layouts.app')

@section('content')
<div class="container-fluid pt-4">
    <!-- Dashboard Content -->
    <div class="row">
        <div class="col-md-3">
            <div class="card shadow-lg" style="width: 18rem;">
                <div class="card-header bg-1" style="height: 5px;"></div> <!-- Top color bar -->

                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title mb-0 me-2">68</h4>
                                <span class="card-text ps-2">New Order</span>
                            </div>
                            <p class="mb-1 mt-2">
                                <span>&#2547;</span> <!-- This represents the currency symbol -->
                                65238
                            </p>
                            <a href="#" class="text-muted">More info
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </div>
                        <div class="ms-3">
                            <img src="img/png/1.png" alt="Order Icon" class="img-fluid" style="width: 50px; height: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Repeat cards as needed -->
    </div>
</div>
@endsection
