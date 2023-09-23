@extends('layout')

@section('title')
    List of categories
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Category name</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            <?php foreach ($category as $categories) :  ?>
            <tr>
                <td><?= $categories ?></td>
            </tr>
            <?php endforeach  ?>
        </tbody>
    </table>
@endsection
