<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('question.store')}}" method="POST">
        @csrf
        <select name="subject_id" id="subject_id">
            @foreach ($subjects as $subject)
                <option value="{{$subject->id}}">{{$subject->subject_name}}</option>
            @endforeach
        </select><br>

        <label for="question_text">Question:</label>
        <input type="text" name="question_text" id="question_text"><br>

        <label for="answer1">Answer 1</label>
        <input type="text" name="answers[0][answer_text]" id="answers[0][answer_text]">
        <input type="hidden" name="answers[0][is_correct]" value="0">
        <input type="checkbox" name="answers[0][is_correct]" value="1"> Correct answer <br>    
        <label for="answer1">Answer 2</label>
        <input type="text" name="answers[1][answer_text]" id="answers[1][answer_text]">
        <input type="hidden" name="answers[1][is_correct]" value="0">
        <input type="checkbox" name="answers[1][is_correct]" value="1"> Correct answer <br>
        <label for="answer1">Answer 3</label>
        <input type="text" name="answers[2][answer_text]" id="answers[2][answer_text]">
        <input type="hidden" name="answers[2][is_correct]" value="0">
        <input type="checkbox" name="answers[2][is_correct]" value="1"> Correct answer <br>
        <label for="answer1">Answer 4</label>
        <input type="text" name="answers[3][answer_text]" id="answers[3][answer_text]">
        <input type="hidden" name="answers[3][is_correct]" value="0">
        <input type="checkbox" name="answers[3][is_correct]" value="1"> Correct answer <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>