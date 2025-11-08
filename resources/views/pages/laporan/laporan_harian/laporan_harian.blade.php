@extends('layouts.app')
@section('content')
<div class="page-content fade-in-up">
<div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Laporan Transaksi Harian</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Tanggal Awal</label>
                                            <input class="form-control" type="text" placeholder="First Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Tanggal Akhir</label>
                                            <input class="form-control" type="text" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih Laporan</label>
                                        <input class="form-control" type="text" placeholder="Email address">
                                    </div>
                                    <div class="form-group">
                                        <label>Type</label>
                                        <input class="form-control" type="username" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" type="password" placeholder="Password">
                                    </div>
                                    {{-- <div class="form-group">
                                        <label class="ui-checkbox">
                                            <input type="checkbox">
                                            <span class="input-span"></span>Remamber me</label>
                                    </div> --}}
                                    <div class="form-group">
                                        <button class="btn btn-default" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        {{-- <th width="50px"></th> --}}
                                        <th>Tanggal</th>
                                        <th>QTY</th>
                                        <th>Nama Hotel/Resto</th>
                                        <th>Pendapatan Per hari</th>
                                        <th>Tanggal Bergabung</th>
                                        <th>Ketersediaan</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        {{-- <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td> --}}
                                        <td>0001</td>
                                        <td>00001</td>
                                        <td>INDAH SINAR CAHAYA</td>
                                        <td>Rp.3,333,333,3,</td>
                                        <td>02/08/2017</td>
                                        <td>03</td>
                                        <td>
                                            <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td> --}}
                                        <td>0001</td>
                                        <td>00001</td>
                                        <td>INDAH SINAR CAHAYA</td>
                                        <td>Rp.3,333,333,3,</td>
                                        <td>02/08/2017</td>
                                        <td>03</td>
                                        <td>
                                            <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td> --}}
                                        <td>0001</td>
                                        <td>00001</td>
                                        <td>INDAH SINAR CAHAYA</td>
                                        <td>Rp.3,333,333,3,</td>
                                        <td>02/08/2017</td>
                                        <td>03</td>
                                        <td>
                                            <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                        </div>
                    </div>
                     
                </div>
                </div>
@endsection