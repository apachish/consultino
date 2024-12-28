<div class="tm-section tm-my-account-area bg-white tm-padding-section">
    <div class="container">
        <div class="tm-myaccount">
            <ul class="nav tm-tabgroup justify-content-start justify-content-lg-center" id="account" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="account-dashboard-tab" data-toggle="tab" href="#account-dashboard"
                       role="tab" aria-controls="account-dashboard" aria-selected="true">{{__("New Request")}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="account-orders-tab" data-toggle="tab" href="#account-orders"
                       role="tab" aria-controls="account-orders" aria-selected="false">{{__("Doctor appointment time")}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="account-address-tab" data-toggle="tab" href="#account-address"
                       role="tab" aria-controls="account-address" aria-selected="false">{{__("Files")}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="account-acdetails-tab" data-toggle="tab" href="#account-acdetails"
                       role="tab" aria-controls="account-acdetails" aria-selected="false">{{__("Profile")}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="account-logout-tab" wire:click="logout" role="tab" class=" btn btn-danger"
                       aria-controls="account-address" aria-selected="false">{{__("Logout")}}</a>
                </li>
            </ul>

            <div class="tab-content" id="account-ontent">
                <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel"
                     aria-labelledby="account-dashboard-tab">
                    <livewire:account.register-order :customer="$customer"/>
                </div>
                <div class="tab-pane fade" id="account-orders" role="tabpanel" aria-labelledby="account-orders-tab">
                    <livewire:account.list-order :customer="$customer"/>
                </div>
                <div class="tab-pane fade" id="account-address" role="tabpanel" aria-labelledby="account-address-tab">
                    <livewire:account.list-file :customer="$customer"/>
                </div>
                <div class="tab-pane fade" id="account-acdetails" role="tabpanel" aria-labelledby="account-acdetails-tab">
                    <livewire:account.profile :customer="$customer"/>
                </div>
            </div>
        </div>
    </div>
</div>
