    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">The Lunchbox - Admin Dashboard</h2>
            </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="statistic-block block">
                            <div class="progress-details d-flex align-items-end justify-content-between">
                                <div class="title">
                                    <div class="icon"><i class="icon-user-1"></i></div><strong>New Users</strong>
                                </div>
                                <div class="number dashtext-1">27</div>
                            </div>
                            <div class="progress progress-template">
                                <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="statistic-block block">
                            <div class="progress-details d-flex align-items-end justify-content-between">
                                <div class="title">
                                    <div class="icon"><i class="icon-contract"></i></div><strong>New Recipes</strong>
                                </div>
                                <div class="number dashtext-2">375</div>
                            </div>
                            <div class="progress progress-template">
                                <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="statistic-block block">
                            <div class="progress-details d-flex align-items-end justify-content-between">
                                <div class="title">
                                    <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>New Reviews</strong>
                                </div>
                                <div class="number dashtext-3">140</div>
                            </div>
                            <div class="progress progress-template">
                                <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="statistic-block block">
                            <div class="progress-details d-flex align-items-end justify-content-between">
                                <div class="title">
                                    <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>Total Recipes</strong>
                                </div>
                                <div class="number dashtext-4">512</div>
                            </div>
                            <div class="progress progress-template">
                                <div role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('admin.charts')
        <section class="no-padding-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checklist-block block">
                            <div class="title"><strong>Tasks</strong></div>
                            <div class="checklist">
                                <div class="item d-flex align-items-center">
                                    <input type="checkbox" id="task-1" name="task-1" class="checkbox-template">
                                    <label for="task-1">Approve new recipe submissions</label>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <input type="checkbox" id="task-2" name="task-2" class="checkbox-template">
                                    <label for="task-2">Review reported comments</label>
                                </div>
                                <div class="item d-flex align-items-center">
                                    <input type="checkbox" id="task-3" name="task-3" class="checkbox-template">
                                    <label for="task-3">Update featured recipes</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        @include('admin.latestreview')
                    </div>
                </div>
            </div>
        </section>
    </div>
    