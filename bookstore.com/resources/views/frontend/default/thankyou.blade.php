@extends('frontend.default.master')
@section('content')
<section id="thankyou" style="padding-top: 2%">
    <div class="container">
        @php
            $deliverDay = mktime(0,0,0,date('m'),date('d')+2,date('Y'));
        @endphp
        <div class="col-md-12">
            <h3 class="page-header">Cảm ơn bạn đã đặt hàng tại website của chúng tôi.</h3>
            <p>Thời gian giao hàng dự kiến là <b>{{date('d/m/Y',$deliverDay)}}</b></p>
            <div class="alert alert-success" style="width: fit-content">
                Mã đơn hàng #{{session('orderID')}} đã được đặt hàng thành công.
            </div>
        </div>
    </div>
</section>
@endsection