<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetVit - Resumo Consultas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>VetVit</h1>
    <h3>Nome funcionario: {{ Auth::user()->name }}  </h3>
    <h3>Data e hora de emissão: {{ now()->format('d/m/Y H:i:s') }} </h3>

    @foreach($consultations as $consultation)

        <h2>Mês: {{ (new DateTime($consultation->start_time))->format('F') }} </h2>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Pet</th>
                <th scope="col">Responsável</th>
                <th scope="col">Tratamento</th>
                <th scope="col">Data e hora da Consulta</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                <td>{{ $consultation->pet->name }}</td>
                <td> {{$consultation->pet->owner->name}} </td>
                <td>{{ $consultation->pet->treatments_done }}</td>
                <td>{{ $consultation->start_time }}</td>
                </tr>
            </tbody>
        </table>
    @endforeach

</body>
</html>