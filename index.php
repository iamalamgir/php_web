<?php include 'header.php'; ?>

<script>
    function selectOption(){
        var index = document.myform.coder.selectedIndex;
        var value = document.myform.coder.options[index].value;
        var showData = "You are "+value+" Coder.";
        document.getElementById('output').innerHTML = showData;
    }
</script>

<div id="output"></div>
<form action="" method="post" name="myform" id="myform" onsubmit="selectOption(); return false;">
    <table>
        <tr> 
            <td>Language: </td> 
            <td>
                <select name="coder">
                    <option>Select One</option>
                    <option value="JAVA">JAVA</option>
                    <option value="PHP">PHP</option>
                    <option value="C#">C#</option>
                    <option value="C++">C++</option>
                    <option value="HTML">HTML</option>
                    <option value="C">C</option>
                    <option value="CSS">CSS</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
            <input type="submit" name="submit" value="Submit"/>
            <input type="reset" value="Clear"/>
            </td>
        </tr>
    </table>
</form> 
              
<?php include 'footer.php'; ?>