@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
    @extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Equipments</h3>
                </div>
                <div class="box-body">
                    <div id="equipment_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="equipment_length" class="dataTables_length">
                                    <label>
                                        Show
                                        <select class="form-control input-sm" name="equipment_length" aria-controls="equipment">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        entries
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div id="equipment_filter" class="dataTables_filter">
                                    <label>
                                        Search:
                                        <input class="form-control input-sm" type="search" placeholder="" aria-controls="equipment">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="equipment" class="table table-bordered table-striped dataTable" role="grid" aria-describedBy="equipment_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="equipment" rowspan="1" colspan="1" style="width: 180px;" aria-sort="ascending" aria-label="EquipmentID: activate to sort column descending">Equipment ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="equipment" rowspan="1" colspan="1" style="width: 229px;" aria-label="EquipmentName: activate to sort column ascending">Equipment Name</th>
                                    </thead>
                                    <tbody></tbody>
                                    <tfoot></tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div id="equipment_info" class="dataTables_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 100 entries
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div id="equipment_paginate" class="dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li id="equipment_previous" class="paginate_button previous disabled">
                                            <a href="#" aria-controls="equipment" data-dt-idx="0" tabindex="0">Previous</a>
                                        </li>
                                        <li class="paginate_button active">
                                            <a href="#" aria-controls="equipment" data-dt-idx="1" tabindex="0">1</a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="equipment" data-dt-idx="2" tabindex="0">2</a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="equipment" data-dt-idx="3" tabindex="0">3</a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="equipment" data-dt-idx="4" tabindex="0">4</a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="equipment" data-dt-idx="5" tabindex="0">5</a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="equipment" data-dt-idx="6" tabindex="0">6</a>
                                        </li>
                                        <li id="equipment_next" class="paginate_button next">
                                            <a href="#" aria-controls="equipment" data-dt-idx="7" tabindex="0">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@endsection