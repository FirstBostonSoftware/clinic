<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@section('htmlheader')
    @include('adminlte::layouts.partials.htmlheader')
@show
<style type="text/css">
    .tableBodyScroll tbody.dtl {
    display:block;
    max-height:100px;
    overflow-y:scroll;
    }
    .tableBodyScroll thead.dtl, tbody.dtl tr.dtl {
    display:table;
    width:100%;
    table-layout:fixed;
    }
</style>

<body class="skin-blue sidebar-mini">
<div id="app" v-cloak>
    <div class="wrapper">

    @include('adminlte::layouts.partials.mainheader')

<aside class="main-sidebar">
    <ul class="sidebar-menu">
        <li class="header"><b style="color: white;font-size: 7.5pt;">NEGROS FAMILY HEALTH SERVICES, INC.</b></li>

        <li class="active"><a href="/dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
        <li><a href="/myinfo"><i class="fa fa-info-circle"></i> <span>My Info</span></a></li>
        <li class="treeview"><a href="/NFHSI"><i class="fa fa-users"></i> <span>Patients</span><span class="pull-right-container"></span></a>
            <ul style="display: block;" class="treeview-menu menu-open">
                <li><a href="/newvisit"><i class="fa fa-circle-o"></i> New Visit</a></li>
                <li><a href="/NFHSI"><i class="fa fa-circle-o"></i> Patient List</a></li>
                <li><a href="/generate/medcert"><i class="fa fa-circle-o"></i> Create Medical Certificate</a></li>
            </ul>
        </li>
        @if(Session::get('user') == 1)
        <li><a href="/NFHSI/users"><i class="fa fa-user-md"></i> <span>Users</span></a></li>
        <li><a href="/reports/{{Session::get('user')}}"><i class="fa fa-bar-chart"></i> <span>Reports</span></a></li>
        <li><a href="/NFHSI/services"><i class="fa fa-flask"></i> <span>Services</span></a></li>
        @elseif(Session::get('user') > 1)
        <li><a href="/reports/{{Session::get('user')}}"><i class="fa fa-bar-chart"></i> <span>Reports</span></a></li>
        @endif
        <li><a href="/logout"><i class="fa fa-sign-out"></i> <span>Sign out</span></a></li>
    </ul>
</aside>
    
    <!-- Content Wrapper. Contains page content -->
    <div style="min-height: 245px;" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><i class="fa fa-tachometer"></i> Dashboard</h1>
        <ol class="breadcrumb">
            <li class="active"><a href="/dashboard"><b>Dashboard</b></a></li>
        </ol>
    </section>
    
    <section class="content">
        <div class="box">
            <div class="box-body">
                <div class="nav-tabs-custom">
                        <div role="tabpanel" class="tab-pane active" id="personal_info">
                            <div class="col-md-12">
                                <div class="mb-0 mt-4">
                                    <i class="fa fa-users fa-lg"></i>
                                    <?php $datenow = date("F");?>
                                    No. of Patient for the month of <b>{{$datenow}}</b>
                                    <i style="margin-left: 50%;"><b>{{$count}} Results Found</b></i>
                                </div>
                                <hr class="mt-2">
                                
                                <table class="tableBodyScroll table-striped">
                                    <thead class="dtl">
                                        <tr class="dtl">
                                            <th width="5%">ID</th>
                                            <th width="30%">Name</th>
                                            <th width="34%">Address</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Number of Visit</th>
                                            <th width="1%"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="dtl">
                                    @foreach($pv as $patient)
                                        <tr class="dtl">
                                            <td width="6%">{{$patient->patient_id}}</td>
                                            <td width="31%">{{$patient->f_name}} {{$patient->m_name}} {{$patient->l_name}}</td>
                                            <td width="34%">{{$patient->address}}</td>
                                            <td>{{$patient->gender}}</td>
                                            <td>{{$patient->age}}</td>
                                            <td>{{$patient->counter}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-body">
                <div class="nav-tabs-custom">
                        <div role="tabpanel" class="tab-pane active" id="personal_info">
                            <div class="col-md-12">
                                <div class="mb-0 mt-4">
                                    <i class="fa fa-money fa-lg"></i>
                                    Income for the month of <b>{{$datenow}}</b>
                                    <?php $datenow2 = date("Y-m-d"); ?>
                                    <i style="margin-left: 40%;"><b>Total as of {{$datenow2}} :</b> Php. <?php echo number_format($income, 2);?></i>
                                </div>
                                <hr class="mt-2">
                                
                                <table class="tableBodyScroll table-striped">
                                    <thead class="dtl">
                                        <tr class="dtl">
                                            <th width="30%">Patient Name</th>
                                            <th width="10%">Visit Date</th>
                                            <th width="40%">Purpose of Visit</th>
                                            <th width="20%">Total Bill</th>
                                            <th width="1%"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="dtl">
                                    @foreach($pv2 as $income)
                                        <tr class="dtl">
                                            <td width="30%">{{$income->patient->f_name}} {{$income->patient->m_name}} {{$income->patient->l_name}}</td>
                                            <td width="10%">{{$income->visit_date}}</td>
                                            <td width="40%">{{$income->purpose_visit}}</td>
                                            <td width="20%" style="text-align: right;">{{$income->totalbill}}</td>
                                            <td width="1%"></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    </div>

    @include('adminlte::layouts.partials.controlsidebar')

    <footer class="main-footer">
        <div style="text-align: right;">
            <b>Powered by </b> <img src="{{ asset('/img/fbismain.png') }}" alt="" height="40" width="200">
        </div> 
    </footer>

</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('adminlte::layouts.partials.scripts')
    <script type="text/javascript">
        $(document).ready(function() {
        setTimeout(function(){ 
            $('.topmessage').hide();
        }, 2000);
    })
    </script>
@show

</body>
</html>