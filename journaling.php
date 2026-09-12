
<html>
    <head>
        <title>Journaling</title>
        <style>
            *{
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
            input::placeholder{
                font-size:15px;
            }
            button:hover{
                 transform:translateY(-6px);
            }
        </style>
    </head>
    <body>
        <div style="background-color: #FFB7C5; height:100hv">
            
        <h1 style="text-align: center; font-family: cursive;color:#f08a8a;font-size:50px">My Journal</h1>
        <p style="text-align: center; font-size:30px;color:#6fa3a9">today i felt...</p>
        <form method="POST">
            <h3>Date:</h3><input type="date" name="date" style="background-color:#FADADD; font-size:20px"><br><br>
            <h3>Day:</h3><input type="text" name="day" style="background-color:#FADADD;font-size:20px"><br><br>
            <h3>Time:</h3><input type="time" name="time" style="background-color:#FADADD;font-size:20px"><br><br><br>
            <textarea  rows="20" name="entry" placeholder="Write about your day..." style="width:1350px; height: 500px;background-color:wheat"  ></textarea><br><br>
            <button type="submit" style="margin-left: 600px; width:120px;height:40px;border-radius:100px;background-color:#FF69B4" name="done" ><h3>Save Entry</h3></button>
        </form>
        </div>
    </body>
</html>
<?php
if(isset($_POST['done'])){         //isset()--means run php code 
    $date=$_POST['date'];
    $day=$_POST['day'];
    $time=$_POST['time'];
    $entry=$_POST['entry'];

    $data=
    "Date:$date\n" .
    "Day:$day\n" .
    "Time:$time" .
    "Entry:\n$entry\n" .
    "------------------------\n";

    file_put_contents("Journaling.txt",$data,FILE_APPEND);
}
?>


