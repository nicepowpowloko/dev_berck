function openNav() {
    document.getElementById("nav").style.width = "20vw"
    document.body.style.transform = 'translate(50vw)'
    document.body.style.backgroundColor = 'red'

        
    }

function closeNav() {
    document.getElementById("nav").style.width = "0"
    document.body.style.transform = 'translate(0)'
    document.body.style.backgroundColor = 'green'
}