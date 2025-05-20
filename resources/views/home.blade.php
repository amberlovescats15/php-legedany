<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <h1>amber</h1>
    {{ route("/test") }}

    <form action="/{{route("/formsubmitted")}}" method="POST">
        @csrf
        <label for="fullname">Full Name:</label>
        <input type="text"
                name="fullname"
                id="fullname"
                placeholder="Type your full name"
                required>
        <br>
        <label for="email">Email:</label>
        <input type="text"
               id="email"
               placeholder="Type your email"
               required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>