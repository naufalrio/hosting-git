function pilih()
{
    var buah = document.getElementById("buah");
    var pilihan = document.getElementById("pilihan");
    var option = document. createElement("option");

    option.text = buah.option[buah.selectedIndex].text;
    try
    {
        pilihan.add(option.null);
    }
    catch(ex)
    {
        pilihan.add(option); //Khusus IE
    }
}