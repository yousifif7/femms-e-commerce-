@extends('admin.main')

@section('active2')active text-danger @endsection

@section('content')
    <?php
    $messages = App\Models\Contact::get()->all();
    ?><br>
    <h4 class="text-center">Messages recieved from clients.</h4><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sender name</th>
                <th scope="col">content</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        @foreach ($messages as $message)
        <tbody>
                <?php
                $time = $message->created_at->setTimezone('Asia/Gaza');
                ?>
                <td>
                    <p>{{ $message->id }}</p>
                </td>
                <td>
                    <p>{{ $message->username }}</p>
                </td>
                <td>
                    <p>{{ $message->content }}</p>
                </td>
                <td>
                    {{ $time->format('Y-m-d') }}
                    <p class="text-primary">{{ $time->diffForHumans() }}</p>
                </td>
            </tbody>
            @endforeach
    </table>
@endsection