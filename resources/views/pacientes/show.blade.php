@extends('layouts.admin')

@section('content')

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Cadastro</h1>

                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Plan</h3>
                        <div class="section-intro">Settings section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="help.html">Learn more</a></div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">

                            <div class="app-card-body">
                                <div class="mb-2"><strong>Current Plan:</strong> Pro</div>
                                <div class="mb-2"><strong>Status:</strong> <span class="badge bg-success">Active</span></div>
                                <div class="mb-2"><strong>Expires:</strong> 2030-09-24</div>
                                <div class="mb-4"><strong>Invoices:</strong> <a href="#">view</a></div>
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <a class="btn app-btn-primary" href="#">Upgrade Plan</a>
                                    </div>
                                    <div class="col-auto">
                                        <a class="btn app-btn-secondary" href="#">Cancel Plan</a>
                                    </div>
                                </div>

                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card-->
                    </div>
                </div>
                <!--//row-->
              
            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->

    @endsection
