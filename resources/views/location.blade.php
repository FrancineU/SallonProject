<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Location </h1>
     <form  action="/location" method="post">
     @csrf
     <input type="text" name="province" placeholder="Fill the Provicne" required />
     <input type="text" name="district" placeholder="Fill the  District" required />
     <input type="text" name="cell" placeholder="Fill the  Cell" required/>
     <button type="submit">Save </button>
     </form> 
     
</body>
</html>