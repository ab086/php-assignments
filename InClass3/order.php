<h2> Hello <?=$userName ?></h2>
<form action = "" method = "post">
    <select name = "ccard" id = "">
        <option value = "v">Visa</option>
        <option value = "d">Discover</option>
        <option value = "m">Master Card</option>


    </select>

    <!-- radio buttons -->
    <input type = "radio" name = "drink" value = "dp">Dr Pepper<br/>
    <input type = "radio" name = "drink" value = "sp">Sprite<br/>
    <input type = "radio" name = "drink" value = "co">Coke<br/>

    <!-- text area -->
    <textarea name = "comments" id="" cols="30" rows ="10">

    <!--Checkboxes -->
    <input type = "checkbox" name = "top[]"> Pep<br/>
    <input type = "checkbox" name = "top[]"> Mushroom<br/>
    <input type = "checkbox" name = "top[]"> Olives<br/>

    
    <input type = "submit" value = "login">
    <input tpye = "hidden" name = "formType" value = "order">




</form>
