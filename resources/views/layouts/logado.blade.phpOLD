@extends('layouts.app')

@section('content')

            
            <!-- Header -->
            <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
                <div class="container-fluid">
                    <div class="header-body">
                        <!-- Card stats -->
                        <div class="row">

                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0 mt-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">{{ $corrente->nome_sensor }}</h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                    <i class="fas fa-chart-bar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach($corrente->historicos as $historico)
                                        <?php
                                                $hoje = date('Y-m-d');
                                            
                                            if($historico->data == $hoje) {
                                            ?>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-success mr-2"> {{ $historico->dados }}</span>
                                            
                                                <span class="text-nowrap">{{ $historico->data }} - {{ $historico->hora }}</span>
                                        </p>
                                        <?php } ?>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0 mt-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">{{ $tensao->nome_sensor }}</h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                    <i class="fas fa-chart-bar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach($tensao->historicos as $historico)
                                        <?php
                                                $hoje = date('Y-m-d');
                                            
                                            if($historico->data == $hoje) {
                                            ?>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-success mr-2"> {{ $historico->dados }}</span>
                                            
                                                <span class="text-nowrap">{{ $historico->data }} - {{ $historico->hora }}</span>
                                        </p>
                                        <?php } ?>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0 mt-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">{{ $temperatura->nome_sensor }}</h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                    <i class="fas fa-chart-bar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach($temperatura->historicos as $historico)
                                        <?php
                                                $hoje = date('Y-m-d');
                                            
                                            if($historico->data == $hoje) {
                                            ?>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-success mr-2"> {{ $historico->dados }}</span>
                                            
                                                <span class="text-nowrap">{{ $historico->data }} - {{ $historico->hora }}</span>
                                        </p>
                                        <?php } ?>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0 mt-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">{{ $umidade->nome_sensor }}</h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                    <i class="fas fa-chart-bar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach($umidade->historicos as $historico)
                                        <?php
                                                $hoje = date('Y-m-d');
                                            
                                            if($historico->data == $hoje) {
                                            ?>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-success mr-2"> {{ $historico->dados }}</span>
                                            
                                                <span class="text-nowrap">{{ $historico->data }} - {{ $historico->hora }}</span>
                                        </p>
                                        <?php } ?>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6">
                                <div class="card card-stats mb-4 mb-xl-0 mt-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-muted mb-0">{{ $gas->nome_sensor }}</h5>
                                            </div>
                                            <div class="col-auto">
                                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                    <i class="fas fa-chart-bar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        @foreach($gas->historicos as $historico)
                                        <?php
                                                $hoje = date('Y-m-d');
                                            
                                            if($historico->data == $hoje) {
                                            ?>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                            <span class="text-success mr-2"> {{ $historico->dados }}</span>
                                            
                                                <span class="text-nowrap">{{ $historico->data }} - {{ $historico->hora }}</span>
                                        </p>
                                        <?php } ?>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


           @endsection