@extends('layouts.template')
@section('content')
<!-- Stats -->
<div class="row">
    <div class="col-6 col-md-3 col-lg-6 col-xl-3">
        <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
            <div class="block-content block-content-full">
                <div class="font-size-sm font-w600 text-uppercase text-muted">Visitors</div>
                <div class="font-size-h2 font-w400 text-dark">120,580</div>
            </div>
        </a>
    </div>
    <div class="col-6 col-md-3 col-lg-6 col-xl-3">
        <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
            <div class="block-content block-content-full">
                <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                <div class="font-size-h2 font-w400 text-dark">150</div>
            </div>
        </a>
    </div>
    <div class="col-6 col-md-3 col-lg-6 col-xl-3">
        <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
            <div class="block-content block-content-full">
                <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                <div class="font-size-h2 font-w400 text-dark">$3,200</div>
            </div>
        </a>
    </div>
    <div class="col-6 col-md-3 col-lg-6 col-xl-3">
        <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
            <div class="block-content block-content-full">
                <div class="font-size-sm font-w600 text-uppercase text-muted">Avg Sale</div>
                <div class="font-size-h2 font-w400 text-dark">$21</div>
            </div>
        </a>
    </div>
</div>
<!-- END Stats -->

<!-- Customers and Latest Orders -->
<div class="row row-deck">
    <!-- Latest Customers -->
    <div class="col-lg-6">
        <div class="block block-mode-loading-oneui">
            <div class="block-header border-bottom">
                <h3 class="block-title">Latest Customers</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                        <i class="si si-settings"></i>
                    </button>
                </div>
            </div>
            <div class="block-content block-content-full">
                <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                    <thead class="thead-dark">
                        <tr class="text-uppercase">
                            <th class="font-w700" style="width: 80px;">ID</th>
                            <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 100px;">Photo</th>
                            <th class="font-w700">Name</th>
                            <th class="d-none d-sm-table-cell font-w700 text-center" style="width: 80px;">Orders</th>
                            <th class="font-w700 text-center" style="width: 60px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="font-w600">#01368</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                            </td>
                            <td class="font-w600">
                                Thomas Riley                                </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <a class="link-fx font-w600" href="javascript:void(0)">5</a>
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-w600">#01368</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar4.jpg" alt="">
                            </td>
                            <td class="font-w600">
                                Carol Ray                                </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <a class="link-fx font-w600" href="javascript:void(0)">14</a>
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-w600">#01368</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar12.jpg" alt="">
                            </td>
                            <td class="font-w600">
                                Scott Young                                </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <a class="link-fx font-w600" href="javascript:void(0)">15</a>
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-w600">#01368</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar1.jpg" alt="">
                            </td>
                            <td class="font-w600">
                                Laura Carr                                </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <a class="link-fx font-w600" href="javascript:void(0)">36</a>
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-w600">#01368</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                            </td>
                            <td class="font-w600">
                                Jose Wagner                                </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <a class="link-fx font-w600" href="javascript:void(0)">3</a>
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-w600">#01368</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar1.jpg" alt="">
                            </td>
                            <td class="font-w600">
                                Lori Moore                                </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <a class="link-fx font-w600" href="javascript:void(0)">1</a>
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-w600">#01368</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar14.jpg" alt="">
                            </td>
                            <td class="font-w600">
                                David Fuller                                </td>
                            <td class="d-none d-sm-table-cell text-center">
                                <a class="link-fx font-w600" href="javascript:void(0)">12</a>
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Edit">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Latest Customers -->

    <!-- Latest Orders -->
    <div class="col-lg-6">
        <div class="block block-mode-loading-oneui">
            <div class="block-header border-bottom">
                <h3 class="block-title">Latest Orders</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                        <i class="si si-settings"></i>
                    </button>
                </div>
            </div>
            <div class="block-content block-content-full">
                <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                    <thead class="thead-dark">
                        <tr class="text-uppercase">
                            <th class="font-w700">ID</th>
                            <th class="d-none d-sm-table-cell font-w700">Date</th>
                            <th class="font-w700">State</th>
                            <th class="d-none d-sm-table-cell font-w700 text-right" style="width: 120px;">Price</th>
                            <th class="font-w700 text-center" style="width: 60px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="font-w600">#07835</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="font-size-sm text-muted">today</span>
                            </td>
                            <td>
                                <span class="font-w600 text-warning">Pending..</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-right">
                                $999,99
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-w600">#07834</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="font-size-sm text-muted">today</span>
                            </td>
                            <td>
                                <span class="font-w600 text-warning">Pending..</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-right">
                                $2.299,00
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-w600">#07833</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="font-size-sm text-muted">today</span>
                            </td>
                            <td>
                                <span class="font-w600 text-success">Completed</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-right">
                                $1200,00
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-w600">#07832</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="font-size-sm text-muted">today</span>
                            </td>
                            <td>
                                <span class="font-w600 text-danger">Cancelled</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-right">
                                $399,00
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-w600">#07831</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="font-size-sm text-muted">yesterday</span>
                            </td>
                            <td>
                                <span class="font-w600 text-success">Completed</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-right">
                                $349,00
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-w600">#07830</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="font-size-sm text-muted">yesterday</span>
                            </td>
                            <td>
                                <span class="font-w600 text-success">Completed</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-right">
                                $999,00
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-w600">#07829</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="font-size-sm text-muted">yesterday</span>
                            </td>
                            <td>
                                <span class="font-w600 text-success">Completed</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-right">
                                $39,99
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-w600">#07828</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="font-size-sm text-muted">yesterday</span>
                            </td>
                            <td>
                                <span class="font-w600 text-success">Completed</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-right">
                                $499,00
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-w600">#07827</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="font-size-sm text-muted">yesterday</span>
                            </td>
                            <td>
                                <span class="font-w600 text-success">Completed</span>
                            </td>
                            <td class="d-none d-sm-table-cell text-right">
                                $325,00
                            </td>
                            <td class="text-center">
                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="Manage">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Latest Orders -->
</div>
<!-- END Customers and Latest Orders -->
@stop