<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="name" class="required">Nome </label>
        <input type="text" name="name" id="name" autofocus class="form-control" required value="{{ old('name', $user->name) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="email" class="required">E-mail </label>
        <input type="email" name="email" id="email" class="form-control" required value="{{ old('email', $user->email) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="birth_date" class="required">Data de Nascimento </label>
        <input type="date" name="birth_date" id="birth_date" class="form-control" required value="{{ old('birth_date', $user->birth_date) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="work_time" class="required">Turno de trabalho</label>
        <input type="text" name="work_time" id="work_time" class="form-control" required value="{{ old('work_time', $user->work_time) }}" @if(!auth()->user()->isAdmin()) readonly @endif>
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="address" class="required">Endereço </label>
        <input type="text" name="address" id="address" autofocus class="form-control" required value="{{ old('address', $user->address) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="phone" class="required">Número de telefone </label>
        <input type="text" name="phone" id="phone" autofocus class="form-control" required value="{{ old('phone', $user->phone) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="office" class="required">Cargo</label>
        <input type="text" name="office" id="office" autofocus class="form-control" required value="{{ old('office', $user->office) }}" @if(!auth()->user()->isAdmin()) readonly @endif>
    </div>
    @if (Auth::user()->isAdmin() || Auth::user()->id == $user->id)
    <div class="form-group col-sm-12 col-md-4">
        <label for="password" class="required">Senha</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    @endif
    
</div>