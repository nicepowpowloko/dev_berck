//  regarder sur le HTML pour savoir 'button onclick = 'openNav'
function openNav(){
    document.getElementById("nav").style.width = "120vw";
    document.body.style.transform = 'translate(30w)';
    document.body.style.backgroundColor = 'skyblue';
}
// idem
function closeNav(){
    document.getElementById("nav").style.width = "0";
    document.body.style.transform = 'translate(0)';
    document.body.style.backgroundColor = 'blue';
}