function myFunction() {
    var element = document.getElementById("buble");
    element.classList.add("hide");
    var d = new Date();
    var n = d.getDay();
    document.getElementById("nadpis").innerHTML = n;
}