@extends('layouts.app')
@section('content')
<div class="page-content fade-in-up">
<div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Daftar Resto </div>
                        
                        <a href="addrestoran" class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="add"><i class="bi bi-calendar2-plus-fill">Tambah Resto</i></a>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="50px"></th>
                                        <th>Resto ID</th>
                                        <th>Bussines ID</th>
                                        <th>Nama Resto</th>
                                        <th>Type Resto</th>
                                        <th>Pendapatan Per HAri </th>
                                        <th>Tanggal Bergabung</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
                                        <td>0001</td>
                                        <td>00001</td>
                                        <td>Ayam Geprek </td>
                                        <td>restoran</td>
                                        <td>Rp.3,333,333,3,</td>
                                        <td>02/08/2017</td>
                                        <td>
                                            <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
                                        <td>0001</td>
                                        <td>00001</td>
                                        <td>Ayam Geprek </td>
                                        <td>restoran</td>
                                        <td>Rp.3,333,333,3,</td>
                                        <td>02/08/2017</td>
                                        <td>
                                            <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                        </td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="ui-checkbox">
                                                <input type="checkbox">
                                                <span class="input-span"></span>
                                            </label>
                                        </td>
                                        <td>0001</td>
                                        <td>00001</td>
                                        <td>Ayam Geprek </td>
                                        <td>restoran</td>
                                        <td>Rp.3,333,333,3,</td>
                                        <td>02/08/2017</td>
                                        <td>
                                            <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i></button>
                                            <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                        </td>
                                    </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
@endsection