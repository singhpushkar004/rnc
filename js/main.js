function price()
{
    //alert("HIIII");
    var qt=document.getElementById("qty").value;
    //window.alert(qt);
    var one=document.getElementById("rs").innerHTML;
    //window.alert(parseFloat(one));
    var total=parseInt(qt)*parseInt(one);
    //alert(total);
    document.getElementById("price1").innerHTML="("+qt+" items)"+total+".00 </b>";
    document.getElementById("price2").innerHTML="("+qt+" items)"+total+".00 </b>";
}