<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('subject.store')}}">
        @csrf
        <label for="subject_name">Subject:</label>
        <input type="text" name="subject_name" id="subject_name">
        <button type="submit">Save</button>
    </form>
</body>
</html>