<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    @if(@session('success'))
        <p>{{session('success')}}</p>
    @endif

    <form action="{{route('question.edit', $question->id)}}" method="POST">
        @csrf
        @method('PUT')

        <label for="subject_id">Select subject</label>
        <select name="subject_id" id="subject_id">
            @foreach ($subjects as $subject)
                <option value="{{$subject->id}}">{{$subject->subject_name}}</option>
            @endforeach
        </select>
        <label for="question_text">Question:</label>
        <input type="text" name="question_text" id="question_text" value="{{$question->question_text}}"><br>

        <label for="answers">Answers</label>
        @foreach ($question->answers as $index => $answer)
            <input type="hidden" name="answers[{{$index}}][id]" value="{{$answer->id}}">
            <input type="text" name="answers[{{$index}}][answer_text]" value="{{$answer->answer_text}}">
            <input type="checkbox" name="answers[{{$index}}][is_correct]" {{$answer->is_correct ? 'checked' : ''}}> <br>
        @endforeach

        <button type="submit">Update question</button>
    </form>


</body>
</html>