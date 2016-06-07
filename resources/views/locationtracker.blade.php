@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Location Manager</h3>
                </div>
                <div class="box-body">
                    <div id="location_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-6">
                                <div id="location_length" class="dataTables_length">
                                    <label>
                                        Show
                                        <select class="form-control input-sm" name="location_length" aria-controls="location">
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
                                <div id="location_filter" class="dataTables_filter">
                                    <label>
                                        Search:
                                        <input class="form-control input-sm" type="search" placeholder="" aria-controls="location">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="location" class="table table-bordered table-striped dataTable" role="grid" aria-describedBy="location_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="location" rowspan="1" colspan="1" style="width: 180px;" aria-sort="ascending" aria-label="LocationID: activate to sort column descending">Location ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="location" rowspan="1" colspan="1" style="width: 229px;" aria-label="LocationName: activate to sort column ascending">Location Name</th>
                                    </thead>
                                    <tbody></tbody>
                                    <tfoot></tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div id="location_info" class="dataTables_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 100 entries
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div id="location_paginate" class="dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li id="location_previous" class="paginate_button previous disabled">
                                            <a href="#" aria-controls="location" data-dt-idx="0" tabindex="0">Previous</a>
                                        </li>
                                        <li class="paginate_button active">
                                            <a href="#" aria-controls="location" data-dt-idx="1" tabindex="0">1</a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="location" data-dt-idx="2" tabindex="0">2</a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="location" data-dt-idx="3" tabindex="0">3</a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="location" data-dt-idx="4" tabindex="0">4</a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="location" data-dt-idx="5" tabindex="0">5</a>
                                        </li>
                                        <li class="paginate_button ">
                                            <a href="#" aria-controls="location" data-dt-idx="6" tabindex="0">6</a>
                                        </li>
                                        <li id="location_next" class="paginate_button next">
                                            <a href="#" aria-controls="location" data-dt-idx="7" tabindex="0">Next</a>
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
