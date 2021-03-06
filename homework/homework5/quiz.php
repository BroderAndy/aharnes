<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title> Homework 5 </title>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="content">
        <h1>Quiz</h1>

        <h3>Is html a programming language?</h3>
        <input type="radio" name="Q1" value="Yes"> Yes<br>
        <input type="radio" name="Q1" value="No"> No<br>
        <p id="Q1Answer"></p>
        <img id="img1" height="30" width="30"></img>
        <p id="Q1RightAnswer"></p><br>

        <h3>Can Javascript be used for back end?</h3>
        <select id="Q2">
            <option>Please Select:</option>
            <option>Yes</option>
            <option>No</option>
        </select>
        <p id="Q2Answer"></p>
        <img id="img2" height="30" width="30"></img>
        <p id="Q2RightAnswer"></p><br>

        <h3>whats does a &lt;ul&gt; tag do?</h3>
        <select id="Q3">
            <option>Please select:</option>
            <option>The &lt;ul&gt; tag defines an unordered list</option>
            <option>The &lt;ul&gt; tag defines an ordered list</option>
        </select>
        <p id="Q3Answer"></p>
        <img id="img3" height="30" width="30"></img>
        <p id="Q3RightAnswer"></p><br>

        <h3>Is Javascript run on the client-side or the host-side?</h3>
        <input id="q4" type="text" name="Q4" />
        <p id="Q4Answer"></p>
        <img id="img4" height="30" width="30"></img>
        <p id="Q4RightAnswer"></p><br>

        <h3>What does HTML stand for?</h3>
        <input id="q5" type="text" name="Q5" />
        <p id="Q5Answer"></p>
        <img id="img5" height="30" width="30"></img>
        <p id="Q5RightAnswer"></p><br>

        <h3>Where did the creater of CSS get his bachelor degree?</h3>
        <input id="q6" type="text" name="Q6" />
        <p id="Q6Answer"></p>
        <img id="img6" height="30" width="30"></img>
        <p id="Q6RightAnswer"></p><br>
        <br>

        <h3 id="txtTotalPoints"></h3><br>
        <button id="btnSubmit">Submit</button>
    </div>
    <div id="scoreboard">

    </div>
    <script src="functions.js"></script>
</body>

</html>
