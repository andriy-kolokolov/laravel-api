<h1>New user request</h1>
<h2>User data:</h2>
<ul>
    <li>Nome: {{ $lead->name }}</li>
    <li>Nome: {{ $lead->email }}</li>
</ul>

<h3>User message:</h3>
<p class="mt-3">
    {{ $lead->message }}
</p>
