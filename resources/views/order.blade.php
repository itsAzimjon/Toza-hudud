@extends('layouts.user_type.auth')

@section('content')

  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header pb-0 px-3">
            <h6 class="mb-0">Barcha Buyurtmalar</h6>
          </div>
          <div class="card-body pt-4 p-3">
            <ul class="list-group">
              @foreach ($orders as $order)
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                      <h6 class="mb-3 text-sm">{{ $order->area}}, {{ $order->address }}</h6>
                      <span class="mb-2 text-xs">Buyurtmachi: <span class="text-dark font-weight-bold ms-sm-2">{{ $order->user->name }}</span></span>
                      <span class="mb-2 text-xs">Buyurtma turi: <span class="text-dark ms-sm-2 font-weight-bold">{{ $order->category->name }}</span></span>
                      <span class="mb-2 text-xs">Vazni: <span class="text-dark ms-sm-2 font-weight-bold">{{ $order->weight }} kg</span></span>
                      <span class="text-xs">{{ $order->created_at }}</span>
                  </div>
                  <div class="ms-auto text-end">
                    @if ( $order->status)
                        @if ( $order->status == 1)
                            <p class="btn btn-sm btn-link text-light px-5 mt-3 mb-0 shadow-none bg-info">Qabul qilindi</p>
                        @elseif ( $order->status == 2)
                            <p class="btn btn-sm btn-link text-light px-5 mt-3 mb-0 shadow-none bg-danger">Rad etildi</p>
                        @endif
                    @else
                    @can('admin')
                    <div class="btn-group">
                        <form method="POST" action="{{ route('order.reject', $order) }}">
                              @csrf
                              <input type="hidden" value="{{ auth()->user()->name }}" name="edited">
                              <button type="submit" class="btn btn-sm btn-gray text-danger shadow-none m-2  mx-5 p-1">Rad etish</button>
                          </form>
                          <form method="POST" action="{{ route('order.accept', $order) }}">
                              @csrf
                              <input type="hidden" name="edited" value="{{ auth()->user()->name }}">
                              <button type="submit" class="btn btn-sm btn-success shadow-none m-1">Qabul qilish</button>
                          </form>
                        </div>  
                    @endcan
                    @can('factory')
                        <p class="btn btn-sm btn-link text-dark px-5 mt-3 mb-0 shadow-none bg-warning">Ko'rib chiqilmoqda</p>
                    @endcan
                    @endif                  
                    <br>
                    <a class="btn btn-link text-light px-5 mt-3 mb-0 shadow-none bg-secondary" href="tel:{{ $order->user->phone_number }}">{{ $order->user->phone_number }}</a>
                  </div>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
 
@endsection
