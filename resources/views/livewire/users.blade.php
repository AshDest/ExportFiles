<div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Posts</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @foreach($user->posts as $post)
                    <ul>
                        <li>{{ $post->title }}</li>
                        <li>{{$post->content}}</li>
                    </ul>
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>