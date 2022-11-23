
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Professor</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($professores as $professor)
            <tr>
                <td>{{$professor->id}}</td>
                <td>{{$professor->name}}</td>
                <td>{{$professor->description}}</td>
            </tr>
        @endforeach
    </tbody>
<table>
