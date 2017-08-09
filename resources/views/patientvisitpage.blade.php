<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini">
<script src="{{ asset('/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<div id="app" v-cloak>
    <div class="wrapper">

    @include('adminlte::layouts.partials.mainheader')

    <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview active"><a href="#"><i class="fa fa-users"></i> <span>Patients</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                <ul style="display: block;" class="treeview-menu menu-open">
                    <li class="active"><a href="#"><i class="fa fa-circle-o"></i> New Visit</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Patient List</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Create Medical Certificate</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-user-md"></i> <span>Users</span></a></li>
            <li><a href="#"><i class="fa fa-cogs"></i> <span>Settings</span></a></li>
            <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign out</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

    <!-- Content Wrapper. Contains page content -->
    <div style="min-height: 245px;" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><i class="fa fa-users"></i> Patients</h1>
        <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Patients</a></li>
            <li class="active">Visit</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Patient Visit 
                    <a href="#" class="btn btn-warning btn-sm" target="_blank"> Generate Medical Certificate</a>
                    <a href="#" class="btn btn-info btn-sm" target="_blank"> Preview</a>
                </h3>
            </div>
            <div class="box-body">
                <input id="pid" name="pid" value="1" type="hidden">
                <input id="vid" name="vid" value="1" type="hidden">
            <div class="nav-tabs-custom">
    <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#personal_info" aria-controls="personal_info" role="tab" data-toggle="tab">Personal Info</a>
                    </li>
                    <li role="presentation">
                        <a href="#consult_reason" aria-controls="consult_reason" role="tab" data-toggle="tab">Reason for Consulation</a>
                    </li>
                    <li role="presentation">
                        <a href="#medical_history" aria-controls="medical_history" role="tab" data-toggle="tab">Past Medical History</a>
                    </li>
                    <li role="presentation">
                        <a href="#social_history" aria-controls="social_history" role="tab" data-toggle="tab">Social History</a>
                    </li>
                    <li role="presentation">
                        <a href="#physical_exam" aria-controls="physical_exam" role="tab" data-toggle="tab">Physical Exam</a>
                    </li>
                    <li role="presentation">
                        <a href="#diagnosis" aria-controls="diagnosis" role="tab" data-toggle="tab">Diagnosis</a>
                    </li>
                    <li role="presentation">
                        <a href="#plan" aria-controls="plan" role="tab" data-toggle="tab">Plan</a>
                    </li>
                    <li role="presentation">
                        <a href="#medications" aria-controls="medications" role="tab" data-toggle="tab">Medications</a>
                    </li>
                    <li role="presentation">
                        <a href="#xray" aria-controls="xrays" role="tab" data-toggle="tab">X-ray</a>
                    </li>
                </ul>

                <div role="tabpanel" class="tab-pane fade" id="xray">
                    <div class="col-md-12">
                        <h3>X-ray 
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_xraynew" data-backdrop="static">Add New
                            </button>
                            <a href="http://demo_emr.jwits.co/patients/visit/print-medication/1" target="_blank" class="btn btn-warning">Generate Record</a>
                        </h3>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Physician</th>
                                        <th class="text-center">Result</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="medication_list">
                                    <tr id="med1">
                                        <td>08/09/2017</td>
                                        <td>Samuel S. Martinez, M.D. (Sonologist/Radiologist)</td>
                                        <td>Normal</td>
                                        <td>New</td>
                                        <td><button class="btn btn-sm btn-primary btn-edit-xray">Edit</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="modal fade" id="modal_xraynew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Patient X-ray</h4>
                            </div>
                            <div class="modal-body">

                                <div class="table-responsive">
                                    <div class="col-md-12">
                                        <center><h3>NEGROS FAMILY HEALTH SERVICES INC.</h3></center>
                                        <center>North Road, Daro(in front of NOPH) Dumaguete City, Negros Oriental</center>
                                        <center>Tel. No. (035) 225-3544</center>
                                        <h4><b>X-RAY / ULTRASOUND</b></h4>

                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">Name:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="P_name" required="" class="form-control" placeholder="Name">
                                                </div>
                                                <label class="col-sm-2 control-label">O.R. No.</label>
                                                <div class="col-sm-3">
                                                    <input type="text" name="orno" required="" class="form-control" placeholder="O.R. No.">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">Address:</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="address" required="" class="form-control" placeholder="Address">
                                                </div>
                                                <label class="col-sm-2 control-label">Age/Sex:</label>
                                                <div class="col-sm-3">
                                                    <input type="text" name="AgeSex" required="" class="form-control" placeholder="Age / Sex">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-1 control-label">Physician:</label>
                                                <div class="col-sm-6">
                                                    <select id="physician" name="physician" class="form-control"> 
                                                        <option value="">- Select -</option>
                                                        <option value="SAMUEL S. MARTINEZ, M.D. (SONOLOGIST/RADIOLOGIST)">SAMUEL S. MARTINEZ, M.D.</option>
                                                        <option value="TERESITO V. ORBETA, M.D. (SONOLOGIST)">TERESITO V. ORBETA, M.D.</option>
                                                        <option value="JOSE U. CHU, M.D. (SONOLOGIST/RADIOLOGIST)">JOSE U. CHU, M.D.</option>
                                                        <option value="SYLVANO M. ALCANTARA, M.D. (SONOLOGIST/RADIOLOGIST)">SYLVANO M. ALCANTARA, M.D.</option>
                                                    </select>
                                                </div>
                                                <label class="col-sm-2 control-label">Date:</label>
                                                <div class="col-sm-3">
                                                    <input type="text" id="datepicker" name="xraydate" class="form-control">
                                                </div>
                                            </div>

                                            <h5><b>Result / Finding :</b></h5>

                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" checked="" value="">Normal</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" value="">Not Normal</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-3 control-label"></label>
                                                <div class="col-sm-3">
                                                    <button class="btn btn-lg btn-primary btn-block" id="btn-submit-social_history" type="button" data-loading-text="Submitting..." autocomplete="off">Submit</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
    <!-- /.content-wrapper -->

    @include('adminlte::layouts.partials.controlsidebar')

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
            All rights reserved.
    </footer>

</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('adminlte::layouts.partials.scripts')
@show

</body>
</html>