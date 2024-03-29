<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html_Table</title>
    <link rel="stylesheet" href="/webOps/weekTwoElements/bootstrap-5.3.2-dist/css/bootstrap.css">

<style>
    [class="col"]{
        padding: 1rem;
        background-color: aqua;
        border: 2px solid white;
        color:blue;
    }
    [class="container"]{
        padding: 1rem;
        background-color: aqua;
        border: 2px solid white;
        color:blue;
    }
   [class="but"]{
    padding: 1rem;
    background-color: brown;
    size: 2rem;
    border-radius: 30px;
    width: 100px;
    
   }
   [class="but"]:hover{
    color: rgb(25, 90, 148);
    background-color: yellow;

   }
   [class="but"]:visited{
    color:red;
    background-color:green;
   }

  
</style>
</head>
<body>
    <a href="lists.html">Click for Exercise three</a>
      <table border="3" bordercolor="blue" bgcolor="lightgreen" width="400" height="150" cellspacing = "3"> 
        <tr>
            <td>FirstName</td>
            <td>SecondName</td>
            <td>Age</td>
        </tr>
        <tr>
            <td>Jonah</td>
            <td>KamaJo</td>
            <td>16</td>
        </tr>
        <tr>
            <td>Junior</td>
            <td>Matayo</td>
            <td>20</td>
        </tr>
        <tr>
            <td>Senior</td>
            <td>Kijambo</td>
            <td>22</td>
        </tr>
        <tr>
            <td>Julia</td>
            <td>Teddy</td>
            <td>25</td>
        </tr>
        <tr>
            <td>Junior</td>
            <td>Kato</td>
            <td>10</td>
        </tr>
     
        
      </table>
    
<div class="Container-md border">
    <div class="row" >
        <div class="col">Head1</div>
        <div class="col">Head2</div>
        <div class="col">Head3</div>
        <div class="col">Head4</div>
        <div class="col">Head5</div>
        <div class="col">Head6</div>
        <div class="col">Head7</div>
        <div class="col">Head8</div>
        <div class="col">Head9</div>
        <div class="col">Head10</div>
        <div class="col">Head11</div>
        <div class="col">Head12</div>
        
    </div>
    <div class="row" >
        <div class="col">Tanga</div>
        <div class="col">KamaJo</div>
        <div>Jonah</div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">Heading1</div>
            <div class="col-4">Heading2</div>
        </div>
    </div>
</div>
      
<div class="container">
    <div class="row">
        <div class="col-2"><a href="/webOps/WebProjAswt/Aswt/index.html"><button class="but">col1</button></a>
        </div>
        <div class="col-2">col2</div>
        <div class="col-2">col3</div>
    </div>
</div>

<div class="container">
<table class="table table-stripped">
    <thead class="table-success">
        <td>FirstName</td>
        <td>SecondName</td>
        <td>Age</td>
    </thead>
    <thead class="table-danger">
        <td>Jonah</td>
        <td>KamaJo</td>
        <td>60</td>
    </thead>
    <thead class="table-secondary">
        <td>Nicholas</td>
        <td>Bill</td>
        <td>60</td>
    </thead>
    <thead class="table-danger">
        <td>Rachael</td>
        <td>Natu</td>
        <td>56</td>
    </thead>
    
</div>
</table>
</body>
</html>