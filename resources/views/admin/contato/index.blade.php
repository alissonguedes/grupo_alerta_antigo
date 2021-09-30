@extends('admin.layouts.app')

@section('title', 'Notícias')

@section('content')

    <div class="container_right panel">
        <!-- Header search bar starts -->
        <div class="title_pg f_avante">
            <div class="mr-2">Notícias - Lista</div>
            <div class="input-field outlined">
                <i class="material-icons prefix">search</i>
                <input type="search" class="dataTable_search white-text" placeholder="Pesquisar notícias">
            </div>
        </div>
        <!-- Header search bar Ends -->
        <!-- BEGIN panel-content -->
        <div class="panel-content">
            <!-- BEGIN panel-header -->
            <div class="panel-header no-border">
                <!-- BEGIN Toolbar -->
                <div class="toolbar bts_acao f_bebas">
                    <!-- BEGIN Lista de Botões -->
                    <div class="buttons">
                        <div class="buttons show-buttons">
                            <button class="btn btn-large waves-effect" data-href="{{ route('admin.noticias.add') }}" style="border: none">
                                <i class="material-icons">add</i>
                            </button>
                        </div>
                        <div class="buttons hide-buttons">

                            <button class="btn btn-large waves-effect translator" data-link="{{ route('admin.dicionario') }}" data-tooltip="Traduzir" style="border: none">
                                <i class="material-icons">translate</i>
                            </button>

                            <button class="btn btn-large update waves-effect" name="status" value="0" data-tooltip="" data-on="Bloquear" data-off="Desbloquear" data-link="{{ route('admin.noticias.patch', 'status') }}" data-method="patch">
                                <i class="material-icons" data-on="lock" data-off="lock_open"></i>
                            </button>

                            <button class="btn btn-large excluir waves-effect" disabled="disabled" data-link="{{ route('admin.noticias.delete') }}" style="border: none" data-tooltip="Excluir">
                                <i class="material-icons">delete_forever</i>
                            </button>

                            <div class="divider"></div>

                            <div class="buttons selecteds-label white-text"> </div>

                        </div>
                    </div>
                    <!-- END Lista de Botões -->
                </div>
                <!-- END Toolbar -->
            </div>
            <!-- END panel-header -->

            <!-- BEGIN panel-body -->
            <div class="area_dashboard panel-body p-0">
                <table class="datatable responsiveDatatable" data-link="{{ route('admin.noticias') }}">
                    <thead>
                        <tr>
                            <th class="disabled sortable white-text" width="1%" data-orderable="false">
                                <label>
                                    <input type="checkbox" class="amber" id="check-all">
                                    <span> </span>
                                </label>
                            </th>
                            <th class="white-text">Titulo</th>
                            <th class="white-text center-align">Status</th>
                            <th class="disabled white-text center-align" data-orderable="false"></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- END panel-body -->

        </div>
        <!-- END panel-content -->
    </div>

@endsection
