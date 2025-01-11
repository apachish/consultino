<div class="tm-myaccount-orders">
    <div class="table-responsive">
        <table class="table table-bordered mb-0">
            <thead>
            <tr>
                <th class="tm-myaccount-orders-col-id">{{__("Tracking Code")}}</th>
                <th class="tm-myaccount-orders-col-date">{{__("DATE")}}</th>
                <th class="tm-myaccount-orders-col-status">{{__("Doctor")}}</th>
                <th class="tm-myaccount-orders-col-total">{{__("Status")}}</th>
                <th class="tm-myaccount-orders-col-view">{{__("VIEW")}}</th>
            </tr>
            </thead>
            <tbody>
            @if($orders->count())
            @foreach($orders as $order)
            <tr>
                <td>#{{$order->id}}</td>
                <td>#{{toJalali($order->date)}}</td>
                <td>#{{data_get($order,'doctor.user.name')}}</td>
                <td>#{{$order->status}}</td>
                <td><a href="#" class="tm-button tm-button-sm">{{__("View")}} <b></b></a></td>
            </tr>
            @endforeach
            @else
                <tr >
                    <td COLSPAN="5" class="alert alert-info">{{__("Doctor's appointment not set.")}}</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
