@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('{{  asset('/assets/img/curved-images/curved0.jpg')}}'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6">
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
                            @if ( $user->name)
                                {{ $user->name }}
                            @else    
                            @endif
                        </h5>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                            <li class="nav-item active">
                                <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#menu1">
                                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>settings</title>
                                        <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                            <g id="Rounded-Icons" transform="translate(-2020.000000, -442.000000)"
                                                fill="#FFFFFF" fill-rule="nonzero">
                                                <g id="Icons-with-opacity"
                                                    transform="translate(1716.000000, 291.000000)">
                                                    <g id="settings" transform="translate(304.000000, 151.000000)">
                                                        <polygon class="color-background" id="Path"
                                                            opacity="0.596981957"
                                                            points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                        </polygon>
                                                        <path class="color-background"
                                                            d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                            id="Path" opacity="0.596981957"></path>
                                                        <path class="color-background"
                                                            d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"
                                                            id="Path">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="ms-1">{{ __('Profil') }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="#menu2" role="tab"
                                    aria-controls="teams" aria-selected="false">
                                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>document</title>
                                        <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                            <g id="Rounded-Icons" transform="translate(-1870.000000, -591.000000)"
                                                fill="#FFFFFF" fill-rule="nonzero">
                                                <g id="Icons-with-opacity"
                                                    transform="translate(1716.000000, 291.000000)">
                                                    <g id="document" transform="translate(154.000000, 300.000000)">
                                                        <path class="color-background"
                                                            d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                            id="Path" opacity="0.603585379"></path>
                                                        <path class="color-background"
                                                            d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"
                                                            id="Shape"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="ms-1">{{ __('Operatsiyalar') }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="#menu3" role="tab"
                                    aria-controls="dashboard" aria-selected="false">
                                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                            <g id="Rounded-Icons" transform="translate(-2319.000000, -291.000000)"
                                                fill="#FFFFFF" fill-rule="nonzero">
                                                <g id="Icons-with-opacity"
                                                    transform="translate(1716.000000, 291.000000)">
                                                    <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                                                        <path class="color-background"
                                                            d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"
                                                            id="Path"></path>
                                                        <path class="color-background"
                                                            d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                            id="Path" opacity="0.7"></path>
                                                        <path class="color-background"
                                                            d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                            id="Path" opacity="0.7"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="ms-1">{{ __('Ombor') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="tab-content">
            <div id="menu1" class="tab-pane fade show active">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">{{ __('Profile Information') }}</h6>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">
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
                            
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes'
                                    }}</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                           
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Agent</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Vazn &
                                Summa</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Tur</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Sana</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bases as $index => $base)
                            @if ($user->id == $base->user_id)
                                
                            {{-- Retrieve the type information for the current base --}}
                            @php
                                $bType = \DB::table('types')->where('id', $base->type_id)->first();
                                $client = \DB::table('users')->where('id', $base->client_id)->first();
                                
                                // Retrieve the category associated with the type
                                $category = \DB::table('categories')->where('id', $bType->category_id)->first();

                                $categoryColors = [
                                    1 => 'bg-info',
                                    2 => 'bg-secondary',
                                    3 => 'bg-warning',
                                    4 => 'bg-danger',
                                    5 => 'bg-success',
                                    6 => 'bg-primary',
                                ];
                                
                                // Get the background color based on the category's ID
                                $backgroundColor = $categoryColors[$category->id] ?? '';
                            @endphp
                        
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            @if ($client->photo)
                                            <img src="{{ asset('storage/'.$client->photo) }}" alt="User's Photo"
                                                class="avatar avatar-sm me-3">
                                            @else
                                            <img src="{{ asset('assets/img/avatar.jpg') }}" alt="Default Avatar"
                                                class="avatar avatar-sm me-3">
                                            @endif
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{$client->name}}</h6>
                                            @foreach ($areas as $area)
                                            @if ($client->area_id == $area->id )
                                            <p class="text-xs text-secondary mb-0"> {{$area->name }}</p>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs text-dark font-weight-bold text-secondary mb-0">
                                        @if ($base->export > 0)
                                            <span class="badge" style="font-size: 14px; color: #ffffff; background:#420606">{{ $base->export }} kg</span>
                                        @else
                                        <span class="badge" style="font-size: 12px; color: #ffffff; background:#064221">{{ $base->import }} kg</span>
                                        @endif
                                    </p>
                                    <p class="text-xs font-weight-bold mb-0">
                                        @if ($base->export > 0)
                                            {{ number_format($base->import * $bType->price, 0, '.', ',') }} som
                                        @else
                                            {{ number_format($base->import * $bType->price, 0, '.', ',') }} som
                                        @endif
                                    </p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm {{ $backgroundColor }}">{{ $category->name }}</span>
                                    <p class="text-xs text-secondary mb-0">{{ $bType->name }}</p>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $base->created_at }}</span>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                        
                    </tbody>
                </table>
            </div>
            <div id="menu3" class="tab-pane fade">
                <div class="card h-100 mb-4">
                    <div class="card-header pb-0 px-3">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-2">Ombordagi Mahsulotlar</h6>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body pt-4 p-3">
                        @php
                        // Define an array of background colors for each category ID
                        $categoryColors = [
                            1 => 'bg-info',
                            2 => 'bg-secondary',
                            3 => 'bg-warning',
                            4 => 'bg-danger',
                            5 => 'bg-success',
                            6 => 'bg-primary', // Add a color for the 6th category
                        ];
                        
                        // Get all unique category names and IDs for the user
                        $categories = $user->bases()
                            ->join('types', 'bases.type_id', '=', 'types.id')
                            ->join('categories', 'types.category_id', '=', 'categories.id')
                            ->select('categories.id as category_id', 'categories.name as category_name')
                            ->distinct()
                            ->get();
                        @endphp
                        
                        @foreach ($categories as $category)
                            @php
                            $backgroundColor = $categoryColors[$category->category_id];
                            
                            $typeImport = $user->bases()
                                ->join('types', 'bases.type_id', '=', 'types.id')
                                ->join('categories', 'types.category_id', '=', 'categories.id')
                                ->where('types.category_id', $category->category_id)
                                ->sum('import');
                            
                            $typeExport = $user->bases()
                                ->join('types', 'bases.type_id', '=', 'types.id')
                                ->join('categories', 'types.category_id', '=', 'categories.id')
                                ->where('types.category_id', $category->category_id)
                                ->sum('export');
                            
                            $net = $typeImport - $typeExport; // Calculate the net result
                            @endphp
                            
                            <h6 class="text-uppercase text-s font-weight-bolder mb-3 px-3 py-1 {{ $backgroundColor }} d-flex justify-content-between">
                                <span>{{ $category->category_name }}</span>
                                <span>{{ $net }} kg</span>
                            </h6>
                        
                            @php
                            // Get all unique type names within the current category
                            $typeNames = $user->bases()
                                ->join('types', 'bases.type_id', '=', 'types.id')
                                ->join('categories', 'types.category_id', '=', 'categories.id')
                                ->where('categories.id', $category->category_id)
                                ->select('types.name as type_name')
                                ->distinct()
                                ->pluck('type_name');
                            @endphp
                        
                            @foreach ($typeNames as $typeName)
                                <ul class="list-group">
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-1 text-dark text-sm">{{ $typeName }}</h6>
                                            </div>
                                        </div>
                                        @php
                                        // Get the import and export sums for the current type within the current category
                                        $typeImportSum = $user->bases()
                                            ->join('types', 'bases.type_id', '=', 'types.id')
                                            ->join('categories', 'types.category_id', '=', 'categories.id')
                                            ->where('categories.id', $category->category_id)
                                            ->where('types.name', $typeName)
                                            ->sum('import');
                        
                                        $typeExportSum = $user->bases()
                                            ->join('types', 'bases.type_id', '=', 'types.id')
                                            ->join('categories', 'types.category_id', '=', 'categories.id')
                                            ->where('categories.id', $category->category_id)
                                            ->where('types.name', $typeName)
                                            ->sum('export');
                        
                                        // Calculate the net result for the current type within the current category
                                        $netResult = $typeImportSum - $typeExportSum;
                                        @endphp
                        
                                        <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
                                            {{ $netResult }} <span class="mx-2">kg</span>
                                        </div>
                                    </li>
                                </ul>
                            @endforeach
                        @endforeach
                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection