<div class="tm-loginregister-popup modal fade" id="tm-loginregister-popup" role="dialog" aria-hidden="true">
    <div class="container">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-10 col-sm-10 col-12">
                        <div class="tm-loginregister">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-times"></i>
                            </button>
                            <ul class="nav tm-tabgroup" id="bstab1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="bstab1-area1-tab" data-toggle="tab" href="#bstab1-area1"
                                       role="tab" aria-controls="bstab1-area1" aria-selected="true">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="bstab1-area2-tab" data-toggle="tab" href="#bstab1-area2"
                                       role="tab" aria-controls="bstab1-area2" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="bstab1-ontent">
                                <livewire:auth.login/>
                                <livewire:auth.register/>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
