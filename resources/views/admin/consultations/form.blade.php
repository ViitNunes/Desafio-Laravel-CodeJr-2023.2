<div class="row">
    <div class="form-group col-sm-12 col-md-4">
        <label for="user_id">Funcionario</label>
        <select class="form-control form-select form-select-sm" name="user_id" id="user_id" value="{{old('user_id', $consultation->user->id ?? null )}}">
            <option value="" hidden>Selecione um Funcionário</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}"> {{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="pet_id">Pet</label>
        <select class="form-control form-select form-select-sm" name="pet_id" id="pet_id" value="{{old('pet_id', $consultation->pet->id ?? null )}}">
            <option value="" hidden>Selecione um Pet</option>
            @foreach ($pets as $pet)
                <option value="{{ $pet->id }}"> {{ $pet->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="pet_id">Tratamentos Realizados</label>
        <select class="form-control form-select form-select-sm" name="pet_id" id="pet_id" value="{{old('pet_id', $consultation->pet->id ?? null )}}">
            <option value="" hidden>Selecione o Tratamento Realizado</option>
            @foreach ($pets as $pet)
                <option value="{{ $pet->id }}"> {{ $pet->treatments_done }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="start_time" class="required">Data e Hora de Início </label>
        <input type="dateTime" name="start_time" id="start_time" class="form-control" required value="{{ old('start_time', $consultation->start_time) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="end_time" class="required">Data e Hora de Término </label>
        <input type="dateTime" name="end_time" id="end_time" autofocus class="form-control" required value="{{ old('end_time', $consultation->end_time) }}">
    </div>
    <div class="form-group col-sm-12 col-md-4">
        <label for="cost" class="required">Custo</label>
        <input type="float" name="cost" id="cost" autofocus class="form-control" required value="{{ old('cost', $consultation->cost) }}">
    </div>
</div>