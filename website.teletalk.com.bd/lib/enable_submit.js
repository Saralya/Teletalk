EnableSubmit = function(val)
{
    var sbmt = document.getElementById("button");

    if (val.checked == true)
    {
        sbmt.disabled = false;
    }
    else
    {
        sbmt.disabled = true;
    }
}