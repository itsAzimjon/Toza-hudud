<div class="card">
    <div class="card-body pt-4 p-3">
        <form action="{{ route('sale.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="hidden" name="user_id" value="{{$user->id}}">
            </div>
            <div class="form-group">
                <label for="type_id">Mahsulot turini tanlang</label>
                <input type="text" id="type_search" class="form-control form-control-sm" placeholder="Mahsulot turnini izlash...">
                <select required name="type_id" class="form-select" aria-label="Default select example">
                    <option selected disabled>Tur</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }} {{ $type->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="client_id">Mijozni tanlang</label>
                <input type="text" id="client_search" class="form-control form-control-sm" placeholder="Mijozni izlash...">
                <select name="client_id" class="form-select" aria-label="Default select example" required>
                    <option selected disabled>Mijoz</option>
                    @foreach ($users as $user)
                        @if ($user->role_id == 5 && auth()->user()->can('agent')) 
                            <option value="{{ $user->id }}">{{ $user->phone_number }} ( {{ $user->id }} )</option>
                        @endif
                        @if ($user->role_id != 5 && $user->role_id != auth()->user()->id) 
                            <option value="{{ $user->id }}">{{ $user->phone_number }} ( {{ $user->id }} )</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="sale">Mahsulot vazni (kg)</label>
                <input required type="number" name="sale" class="form-control">
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Saqlash' }}</button>
            </div>
        </form>        
    </div>
</div>

