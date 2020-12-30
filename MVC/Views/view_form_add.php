<?php
    require_once "view_begin.php";
?>

    <h1> Add a Nobel Prize </h1>
    <form action = "?controller=set&action=add" method="post">
        <p> <label> Name: <input type="text" name="Name"/> </label> </p>
        <p> <label> Year: <input type="text" name="Year"/> </label></p>
        <p> <label> Birth Date: <input type="text" name="BirthDate"/></label> </p>
        <p> <label> Birth Place: <input type="text" name="BirthPlace"/> </label></p>
        <p> <label> County: <input type="text" name="Country"/></label> </p>

        <p>
            <label> <input type="radio" name="Category" value="chemistry" /> Chemistry </label>
            <label> <input type="radio" name="Category" value="economics" /> Economics </label>
            <label> <input type="radio" name="Category" value="literature" /> Literature </label>
            <label> <input type="radio" name="Category" value="medicine" /> Medicine </label>
            <label> <input type="radio" name="Category" value="peace" /> Peace </label>
            <label> <input type="radio" name="Category" value="physics" /> Physics </label>
        </p>

        <textarea name="Motivation" cols="70" rows="10"></textarea>
        <p>  <input type="submit" value="Add in database"/> </p>
    </form>
<?php
    require_once "view_end.php";
?>
