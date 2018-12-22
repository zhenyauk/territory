@extends('layouts.master')

@section('content')
    <div class="page-header">
        <h1 class="page-title">{{$page->title or 'No title'}}</h1>
    </div>


    <div class="page-content">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{$page->title2 or ''}}</h3>
            </div>
            <div class="panel-body" style="min-height:400px;">
                <!-- content -->


                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Task</th>
                        <th>Progress</th>
                        <th>Deadline</th>
                        <th class="text-nowrap">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Lunar probe project</td>
                        <td>
                            <div class="progress progress-xs margin-vertical-10 ">
                                <div class="progress-bar progress-bar-danger" style="width: 35%"></div>
                            </div>
                        </td>
                        <td>May 15, 2015</td>
                        <td class="text-nowrap">
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon md-wrench" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                                <i class="icon md-close" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Dream successful plan</td>
                        <td>
                            <div class="progress progress-xs margin-vertical-10 ">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </td>
                        <td>July 1, 2015</td>
                        <td class="text-nowrap">
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon md-wrench" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                                <i class="icon md-close" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Office automatization</td>
                        <td>
                            <div class="progress progress-xs margin-vertical-10 ">
                                <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                            </div>
                        </td>
                        <td>Apr 12, 2015</td>
                        <td class="text-nowrap">
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon md-wrench" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                                <i class="icon md-close" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>The sun climbing plan</td>
                        <td>
                            <div class="progress progress-xs margin-vertical-10 ">
                                <div class="progress-bar progress-bar-primary" style="width: 70%"></div>
                            </div>
                        </td>
                        <td>Aug 9, 2015</td>
                        <td class="text-nowrap">
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon md-wrench" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                                <i class="icon md-close" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Open strategy</td>
                        <td>
                            <div class="progress progress-xs margin-vertical-10 ">
                                <div class="progress-bar progress-bar-primary" style="width: 85%"></div>
                            </div>
                        </td>
                        <td>Apr 2, 2015</td>
                        <td class="text-nowrap">
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon md-wrench" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                                <i class="icon md-close" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Tantas earum numeris</td>
                        <td>
                            <div class="progress progress-xs margin-vertical-10 ">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </td>
                        <td>July 11, 2015</td>
                        <td class="text-nowrap">
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon md-wrench" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                                <i class="icon md-close" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>









            <!-- endcontent -->
            </div>
        </div>
    </div>
@endsection