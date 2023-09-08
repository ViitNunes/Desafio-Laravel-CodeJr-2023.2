<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="name" class="required">Nome </label>
        <input type="text" name="name" id="name" autofocus class="form-control" required value="{{ old('name', $owner->name) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="email" class="required">E-mail </label>
        <input type="email" name="email" id="email" class="form-control" required value="{{ old('email', $owner->id) }}">
    </div>

    <div class="form-group col-sm-12 col-md-4">
        <label for="cpf" class="required">CPF </label>
        <input type="text" name="cpf" id="cpf" autofocus class="form-control" required value="{{ old('cpf', $owner->name) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="birth_date" class="required">Data de Nascimento </label>
        <input type="date" name="birth_date" id="birth_date" class="form-control" required value="{{ old('birth_date', $owner->birth_date) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="address" class="required">Endereço </label>
        <input type="text" name="address" id="address" autofocus class="form-control" required value="{{ old('address', $owner->address) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="phone" class="required">Número de telefone </label>
        <input type="text" name="phone" id="phone" autofocus class="form-control" required value="{{ old('phone', $owner->phone) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="profile_image">Foto de Perfil</label>
        <input type="file" name="profile_image" id="profile_image" class="form-control-file">
    </div>
</div>