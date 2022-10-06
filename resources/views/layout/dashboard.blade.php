@extends('parent')

@section('author')
    <h1>Author : {{ $author }}</h1>
@endsection

@section('content')
    <table class="table table-stripe border border-1">
        <thead>
            <tr>
                <th>id</th>
                <th>user id</th>
                <th>name</th>
                <th>text</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($comments as $item)
                <tr>
                    <td>{{ $item->user_id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->text }}</td>
                    <td><a class='delete'>delete</a></td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            var html;

            $.ajax({
                type: "get",
                url: "http://bengkel-api.test/api/comments",
                data: "data",
                dataType: "json",
                success: function(response) {
                    // 6 row of data
                    console.log(response);
                    response.forEach(element => {
                        html += `<tr>
                            <td class="comment_id">${element.id}</td>
                            <td class="user_id">${element.user_id}</td>
                            <td>${element.name}</td><td>${element.text}</td>
                            <td class="clickable">
                                <a class="delete" id="delete">Delete</a>
                                </td>
                            </tr>`;
                    });
                    $('table').find('tbody').append(html);


                    $('a').on('click', function() {
                        //assign tr
                        var tr = $(this).closest('tr');
                        var user_id = tr.find('td.comment_id').text();

                        $.ajax({
                            type: "delete",
                            url: "http://bengkel-api.test/api/comments/"+ user_id,
                            data: "data",
                            dataType: "json",
                            success: function(response) {

                                //remove tr
                                tr.remove();
                            }

                        });
                    });
                }
            });


        });
    </script>
@endpush
