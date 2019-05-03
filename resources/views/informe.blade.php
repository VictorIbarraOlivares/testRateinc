@extends('master')

@section('title', 'Informe')

@push('css-head')
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/select2/select2_conquer.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/data-tables/DT_bootstrap.css')}}"/>
<!-- END PAGE LEVEL STYLES -->
<style type="text/css">
   
</style>
@endpush

@section('content')

<!-- BEGIN CONTENT -->

<div class="page-content-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">

            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-files-o" style="color: black;"></i> Informe sobre la encuesta
                            </div>
                        </div>
                        <div class="portlet-body form">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->

        </div> <!--/div class="page-content" -->
    </div> <!--/div class="page-content-wrapper" -->
</div><!--/div class="page-content-wrapper" -->
<!-- END CONTENT -->
@endsection

@push('script-footer')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="{{ asset('assets/plugins/select2/select2.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('assets/plugins/data-tables/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/data-tables/DT_bootstrap.js') }}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="{{ asset('assets/plugins/flot/jquery.flot.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/plugins/flot/jquery.flot.resize.js') }}"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/scripts/app.js') }} "></script>
<script src="{{ asset('assets/scripts/table-advanced.js') }} "></script>
<script src="{{ asset('assets/scripts/charts.js') }} "></script>

<script type="text/javascript">
    $(document).ready(function(){
        App.init(); // initlayout and core plugins
        TableAdvanced.init();

        $("#informe").addClass( "active" );
        $("#informe-li").addClass( "active" );
        $("#informe-a").append( '<span class="selected"></span>' );

        
    });
</script>

@endpush
