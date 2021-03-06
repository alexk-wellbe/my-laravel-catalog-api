@extends('admin.layouts.main')

@section('title', 'Categories')
@section('h1-header', 'Categories')

@section('breadcrumbs')
  <li>Home</li>
  <li>Categories</li>
@stop

@section('content')
    <div class="col-xs-12 content-body">
        <div class="nav-submit">
            <div class="nav-pull-right mw-title-navigation">
                <a href="/admin/catalog/categories/create" data-toggle="tooltip" class="btn btn-primary btn-submit" data-original-title="Add Category">
                    <i class="fa fa-plus"></i>
                    <span class="btn-label-visible">Add Category</span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="main-wrapper-title">
                <h5>Categories list</h5>
            </div>
        </div>
        <div class="main-wrapper-content">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name<span class="fa fa-caret-down"></span></th>
                        <th class="hide-480">Sort Order<span class="fa fa-caret-down"></span></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Laptops & Notebooks</td>
                        <td class="hide-480">10</td>
                        <td>
                            <div class="btn-group btn-group-xs" role="group" aria-label="Action">
                                <a href="/admin/catalog/categories/1" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-default">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>MP3 Players</td>
                        <td class="hide-480">20</td>
                        <td>
                            <div class="btn-group btn-group-xs" role="group" aria-label="Action">
                                <a href="/admin/catalog/categories/2" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-default">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Printers</td>
                        <td class="hide-480">30</td>
                        <td>
                            <div class="btn-group btn-group-xs" role="group" aria-label="Action">
                                <a href="/admin/catalog/categories/3" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-default">Delete</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-sm pull-right">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div>
    </div>
@stop
