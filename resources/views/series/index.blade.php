@extends('layout')

@section('title')
    Series List
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Serie name</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            <?php foreach ($series as $serie) :  ?>
            <tr>
                <td><?= $serie ?></td>
            </tr>
            <?php endforeach  ?>
        </tbody>
    </table>
@endsection
