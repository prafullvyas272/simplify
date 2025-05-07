<!DOCTYPE html>
<html>
<head>
    <title>White List Account Created</title>
</head>
<body>
    <h1>Hello,</h1>
    <p>A new whitelist account is created.</p>
    <p>Details:</p>
    <ul>
        <li>Name: {{ $user->first_name }} {{ $user->last_name }}</li>
        <li>Email: {{ $user->email }}</li>
        <li>Phone: {{ $user->phone }}</li>
        <li>Learning Style: {{ $user->learning_style }}</li>
        <li>Calendar Invite Link: {{ $data }}</li>
    </ul>
</body>
</html>
