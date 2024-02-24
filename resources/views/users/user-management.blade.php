@extends('layouts.user_type.auth')
@section('content')

<div>
    <div class="alert alert-secondary" role="alert">
        <span class="text-white">
            <strong>Mijozlar ro‘yxati</strong>
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between mb-3">
                        <div>
                            <h5 class="mb-0" style="margin-right: 28px">Mijozlar</h5>
                        </div>
                        <div class="d-flex staff-slct">
                            <form id="search-form" action="{{ route('search.results') }}" method="GET" class="d-flex">
                                @csrf
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Izlash..." aria-label="Search users">
                                    <input type="hidden" name="role_id" value="5"> 
                                    <button type="submit" class="border border-secondary bg-secondary text-white px-3 btn-lg shadow-none p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                            <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" style="fill: #ffffff"/>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body mt-4 px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Foto
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ism
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Manzil
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Telefon
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Yaratilgan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tahrir
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)    
                                    @if ($user->role_id == 5) 
                                    <tr>
                                        <td class="ps-4">
                                            <p class="text-xs font-weight-bold mb-0">{{$user->id}}</p>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-xl position-relative">
                                                    @if ($user->photo)
                                                        <img src="{{ asset('storage/'.$user->photo) }}" alt="User's Photo" class="avatar avatar-sm object-fit-cover me-3">
                                                    @else
                                                        <img src="{{ asset('assets/img/avatar.jpg') }}" alt="Default Avatar" class="avatar avatar-sm object-fit-cover me-3">
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{$user->name}}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{$user->address}}</p>
                                            </td>
                                            <td class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">{{$user->phone_number}}</p>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{ ($user->created_at->format('m/d/Y')) }}</span>
                                            </td>
                                            <td class="justify-content-center align-items-center">
                                                <form class="col-1 mx-2 p-0" action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border border-white bg-white btn-lg shadow-none p-0" onclick="return confirm('{{ $user->id }} O‘chirishni tasdiqlaysizmi?')">
                                                        <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                                    </button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- <div class="container d-flex">
                <a href="#" class="col-md-3 btn bg-gradient-primary btn-sm justify-content-end" type="button">+&nbsp; Qo'shish</a>
            </div>   --}}
        </div>
    </div>
</div>


@endsection
