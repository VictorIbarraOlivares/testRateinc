@extends('master')

@section('title', 'Encuesta')

@push('css-head')
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/select2/select2_conquer.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/plugins/data-tables/DT_bootstrap.css')}}"/>
<!-- END PAGE LEVEL STYLES -->
<style type="text/css">
    .cc-selector input{
        margin:0;padding:0;
        -webkit-appearance:none;
           -moz-appearance:none;
                appearance:none;
    }

    .drinkcard-cc, .cc-selector input:active +.drinkcard-cc{opacity: .9;}
    .drinkcard-cc, .cc-selector input:checked +.drinkcard-cc{
        -webkit-filter: none;
           -moz-filter: none;
                filter: none;
    }
    .drinkcard-cc{
        cursor:pointer;
        background-size:contain;
        background-repeat:no-repeat;
        display:inline-block;
        width:60px;height:60px;
        -webkit-transition: all 100ms ease-in;
           -moz-transition: all 100ms ease-in;
                transition: all 100ms ease-in;
        -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
           -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
                filter: brightness(1.8) grayscale(1) opacity(.7);
    }
    .drinkcard-cc:hover{
        -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
           -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
                filter: brightness(1.2) grayscale(.5) opacity(.9);
                /*
        background-color: #ababf9;
        */
    }

    textarea {
      resize: none;
    }

    .cabecera {
        color: #5419de;font-weight: bold !important;
    }

    /*.radio oculta los radio, hay que dajar la imagen marcada*/
    /*
    .radio{ 
        position: absolute;
        margin-left: -5px;
        opacity: 1;
    }
    */
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
                                <i class="fa fa-check-square" style="color: black;"></i> Contesta nuestra encuesta por favor
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <form action="{{ url('encuesta/respuesta') }}" method="post" class="horizontal-form" id="form-encuesta">
                                <div class="form-body">
                                    <h4 class="cabecera">En una escala de 1 a 10: ¿Qué te parecó el proceso de selección de Rateinc?</h4>

                                    <div class="form-group ">
                                        <div class="cc-selector">
                                            <label style="background-image:url({{ asset('triste.png') }});" class="drinkcard-cc tristes" for="triste_00" id="triste_00_l"></label>
                                            <input id="triste_00" type="radio" name="respuesta" value="0" class="radio" />

                                            <label style="background-image:url({{ asset('triste.png') }});" class="drinkcard-cc tristes" for="triste_01"></label>
                                            <input id="triste_01" type="radio" name="respuesta" value="1" class="radio" />

                                            <label style="background-image:url({{ asset('triste.png') }});" class="drinkcard-cc tristes" for="triste_02"></label>
                                            <input id="triste_02" type="radio" name="respuesta" value="2" class="radio" />

                                            <label style="background-image:url({{ asset('triste.png') }});" class="drinkcard-cc tristes" for="triste_03"></label>
                                            <input id="triste_03" type="radio" name="respuesta" value="3" class="radio" />

                                            <label style="background-image:url({{ asset('triste.png') }});" class="drinkcard-cc tristes" for="triste_04"></label>
                                            <input id="triste_04" type="radio" name="respuesta" value="4" class="radio" />

                                            <label style="background-image:url({{ asset('triste.png') }});" class="drinkcard-cc tristes" for="triste_05"></label>
                                            <input id="triste_05" type="radio" name="respuesta" value="5" class="radio" />

                                            <label style="background-image:url({{ asset('triste.png') }});" class="drinkcard-cc tristes" for="triste_06"></label>
                                            <input id="triste_06" type="radio" name="respuesta" value="6" class="radio" />
                                          

                                            <label style="background-image:url({{ asset('neutral.svg') }});" class="drinkcard-cc neutral" for="neutral_07"></label>
                                            <input id="neutral_07" type="radio" name="respuesta" value="7"  class="radio" />

                                            <label style="background-image:url({{ asset('neutral.svg') }});" class="drinkcard-cc neutral" for="neutral_08"></label>
                                            <input id="neutral_08" type="radio" name="respuesta" value="8"  class="radio" />


                                            <label style="background-image:url({{ asset('feliz.png') }});" class="drinkcard-cc felices" for="feliz_09"></label>
                                            <input id="feliz_09" type="radio" name="respuesta" value="9"  class="radio" />

                                            <label style="background-image:url({{ asset('feliz.png') }});" class="drinkcard-cc felices" for="feliz_10"></label>
                                            <input checked="checked" id="feliz_10" type="radio" name="respuesta" value="10"  class="radio" />
                                          
                                        </div>
                                    </div>


                                    <h4 class="form-section" id="pregunta">
                                        Gracias por tu evaluación, nos puedes dejar tus comentarios o sugerencias a continuación
                                    </h4>
                                    <div class="form-group">
                                        <textarea class="form-control rounded-0" id="textoRespuesta" name="textoRespuesta" rows="5" required></textarea>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                                <div class="form-actions right">
                                    <button  type="submit" title="Guardar Respuesta" class="btn btn-info"><i class="fa fa-check"></i> Guardar Respuesta</button>
                                </div>
                            </form>
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
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/scripts/app.js') }} "></script>
<script src="{{ asset('assets/scripts/table-advanced.js') }} "></script>



<script type="text/javascript">
    $(document).ready(function(){
        App.init(); // initlayout and core plugins
        TableAdvanced.init();

        $("#home").addClass( "active" );
        $("#home-li").addClass( "active" );
        $("#home-a").append( '<span class="selected"></span>' );

        $("input[name=respuesta]").click(function () {    
            //alert("La edad seleccionada es: " + $('input:radio[name=respuesta]:checked').val());
            //alert("La edad seleccionada es: " + $(this).val());
            let respuesta = $(this).val();

            if (respuesta == 10 || respuesta == 9) {
                $('#pregunta').html('Gracias por tu evaluación, nos puedes dejar tus comentarios o sugerencias a continuación');
            } else if (respuesta < 9 && respuesta >6) {
                $('#pregunta').html('¿Qué podemos mejorar en el proceso de selección para que si lo recomiendes?');
            } else {
                $('#pregunta').html('¿Por qué NO recomendaría el proceso de selección?');
            }
        });
        
    });
</script>

@endpush