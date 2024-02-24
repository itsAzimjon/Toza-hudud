@extends('layouts.user_type.auth')

@section('content')

<div>
    <div>
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('{{  asset('/assets/img/curved-images/curved0.jpg')}}'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mt-n6">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        @if ($user->photo)
                            <img src="{{ asset('storage/'.$user->photo) }}" alt="User's Photo" class="w-100 border-radius-lg shadow-sm">
                        @else
                            <img src="{{ asset('assets/img/avatar.jpg') }}" alt="Default Avatar" class="w-100 border-radius-lg shadow-sm">
                        @endif 
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ $user->name }}
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#menu1">
                                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                            <g id="Rounded-Icons" transform="translate(-2319.000000, -291.000000)"
                                                fill="#FFFFFF" fill-rule="nonzero">
                                                <g id="Icons-with-opacity"
                                                    transform="translate(1716.000000, 291.000000)">
                                                    <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                                                        <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z" id="Path"></path>
                                                        <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" id="Path" opacity="0.7"></path>
                                                        <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" id="Path" opacity="0.7"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="ms-1">{{ __('Umumiy') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="py-4">
        <div class="tab-content">
            <div id="menu1" class="tab-pane fade show active">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">{{ __('Profil Ma\'lumotlari') }}</h6>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <form action="{{ route('user-profile.update', ['user_profile' => $user->id])}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')                              
                            @csrf
                            @if($errors->any())
                            <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                                <span class="alert-text text-white">
                                    {{$errors->first()}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </button>
                            </div>
                            @endif
                            @if(session('success'))
                            <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success"
                                role="alert">
                                <span class="alert-text text-white">
                                    {{ session('success') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </button>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-name" class="form-control-label">F.I.O</label>
                                        <div class="@error('user.name')border border-danger rounded-3 @enderror">
                                            <input class="form-control" value="{{ $user->name }}" type="text"
                                                placeholder="Name" id="user-name" name="name">
                                            @error('name')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="photo" class="form-control-label">Surat</label>
                                    <span style="font-size:10px">hajm 2mb dan yuqori bo'lmasligi kerak</span>   
                                    <div class="input-group mb-3">
                                        <input type="file" name="photo" class="form-control col-12" id="inputGroupFile02" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user.phone" class="form-control-label">Telefon</label>
                                        <div class="@error('user.phone_nuber')border border-danger rounded-3 @enderror">
                                            <input class="form-control" type="tel" placeholder="+998901234567"
                                                id="number" name="phone_number" value="{{ $user->phone_number }}">
                                            @error('phone')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-inn" class="form-control-label">Stir</label>
                                        <div class="@error('inn')border border-danger rounded-3 @enderror">
                                            <input class="form-control" value="{{ $user->inn }}" type="number"
                                                placeholder="307546789" id="user-inn" name="inn">
                                            @error('inn')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user.location" class="form-control-label">Hudud</label>
                                        <div class="@error('area_id') border border-danger rounded-3 @enderror">
                                            <select class="form-select" aria-label="Default select example" name="area_id" >
                                                @foreach ($areas as $area)
                                                    <option {{ $user->area_id == $area->id ? 'selected' : '' }} value="{{ $area->id }}">{{ $area->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user.location" class="form-control-label">Manzil</label>
                                        <div class="@error('user.address') border border-danger rounded-3 @enderror">
                                            <input class="form-control" type="text" placeholder="Manzil" id="name"
                                                name="address" value="{{ $user->address }}">
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-Passport" class="form-control-label">Passport raqam</label>
                                        <div class="@error('Passport')border border-danger rounded-3 @enderror">
                                            <input class="form-control" value="{{ $user->passport }}" type="text"
                                                placeholder="AB 1112233" id="user-Passport" name="passport">
                                            @error('Passport')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user-password" class="form-control-label">Parol</label>
                                        <div class="@error('password')border border-danger rounded-3 @enderror">
                                            <input class="form-control" type="password" placeholder="******"
                                                id="user-password" name="password">
                                            @error('password')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                           @cannot('admin')
                            <div class="row mx-1 mt-3">
                                @foreach ($types->groupBy('category_id') as $categoryID => $categoryTypes)
                                    @php
                                        $category = \DB::table('categories')->where('id', $categoryID)->first();
                                    @endphp
                                    <hr class="mt-3">
                                    <p class="m-3" style="color: #000">{{ $category->name }}</p>
                                    @foreach ($categoryTypes as $index => $item)
                                        <div class="form-check col-sm-6 col-md-3 col-lg-3">
                                            <input class="form-check-input" name="types[]" type="checkbox" value="{{ $item->id }}" id="fcustomCheck{{ $index }}"
                                                @if (in_array($item->id, $user->types->pluck('id')->toArray())) checked @endif>
                                            <label class="custom-control-label px-2" for="customCheck{{ $index }}">{{ $item->name }}</label>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                           @endcannot
                            
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes'
                                    }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection