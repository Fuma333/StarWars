function myFunction() {
    var element = document.getElementById("bubble"); // ulozim do premenej element ako sa dostanem k bubble 
    element.classList.add("hide"); // poviem ze moj element kotry som ulozil ma mu pridat class hide aby to fungovalo treba dat do style.css toto .hide{ display:none}
    var d = new Date(); // vytvory objekt date
    var n = d.getDay(); // premenej n nastavy cislo dna s objektu date 
    document.getElementById("nadpis").innerHTML = n; // cislo dna v prmenej n vloz do div co ma atribut id="nadpis" 
}