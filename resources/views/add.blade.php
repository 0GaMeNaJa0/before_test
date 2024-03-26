<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    div {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }

    button {
        display: block;
        margin: 30px auto;
    }
</style>

<body>
    <div>
        <h1>Add form</h1>
        <form action="/customers" method = "POST">
            @csrf
            <label for="">name</label>
            <br>
            <input type="text" name = "name">
            <br>
            <label for="">pincode</label>
            <br>
            <input type="text" name = "pin">
            <br>
            <br>
            <label for="">Choose a car:</label>
            <select name="cars" id="cars">
                <?php $arrays = [1,2,3,4,5,6,7,8,9,10] ?>
                <?php foreach($arrays as $index => $array) {?>
                <option value={{$array}}>{{$array}}</option>
                <?php } ?>
            </select>
            <button type = "submit">Submit</button>
        </form>
    </div>
</body>

</html>
