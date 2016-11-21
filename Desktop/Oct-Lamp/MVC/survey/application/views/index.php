<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submission</title>
    <style type="text/css">
       
    fieldset>button {
            display: block;
            border: none;
            color: #FFFFFF ;
            background-color: blue;
            border-radius: 5px;
        }
        fieldset>legend, fieldset>select{
            display: inline-block;
        }
        form {
            width: 300px;
            margin-left: auto;
            margin-right: auto;
        }
        fieldset{
            padding: 15px;
        }
        legend, textarea{
            margin-bottom: 10px;
        }

       }
    </style>
</head>
<body>
   <form action="/Surveys/process_form" method='POST'>

    <fieldset>
     
    
    <legend class="center">Your Name:</legend>
    <input type="text" name="name">
    <legend class="center">Dojo Location</legend>
    <select name="location">
        <option>Burbank</option>
        <option>Seattle</option>
        <option>San Diego</option>
    </select>
    <legend class="center">Favorite Languages</legend>
    <select name="language">
        <option>HTML</option>
        <option>Java Script</option>
        <option>CSS</option>
        <option>PHP</option>
    </select>
    <legend class="center">Comment(optional)</legend>
    <textarea name="comment"></textarea>
    <button>Submit</button>
    </fieldset>
    




   </form>
</body>
</html>