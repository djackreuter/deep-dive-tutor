<h1>Tutors</h1>
<hr/>
<ul>
  @foreach($users as $user)
    <li>
      <a href="/users/{{ $user->id }}">
        {{ $user->name }}
      </a>
    </li>
  @endforeach
</ul>
