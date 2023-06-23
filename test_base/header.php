<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>

<body>

<div class="parent">
<div class="barrenav1"> 
<div class="accueil"><h4> Accueil </h4></div>

<div class="pizza"> <h4> Nos pizza </h4></div>
<div class="logo"> <img src="../sitebouffe/images/pizza-icon-logo-design-template-download-pizza-icon-logo-desilogo.png" height="100%" width="100%" alt="cuisinier italien"> </div>
<div class="connexion"> <h4> Se connecter</h4> </div>
<div class="panier"> <h4> panier </h4></div>
</div>
<div class="barrenav2">  </div>
<div class="burger">  <div class="c-header"></div>

<input type="checkbox" class="c-btn-toggle"
id="btnToggle">
<label class="c-btn-icon" for="btnToggle">
    <div class="c-btn-bar c-btn-bar--diagonal diagonal-1"></div>
    <div class="c-btn-bar c-btn-bar--horizontal"></div>
    <div class="c-btn-bar c-btn-bar--diagonal diagonal-2">
        
    </div>
</label>

<div class="c-sidebar">
    <ul class="c-sidebar-items">
        <li>cqdsfdngf</li>   
        <li>cqdsfdngf</li>
        <li>cqdsfdngf</li>
        <li>coulisses tech
            <span> merci de nous suivre</span>
        </li>
    </ul>
</div></div>



</div>

<style>
/*menu burger css*/
* { 
    font-family: monospace;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}


.html, body{
    overflow-x: hidden;
    height: 100%;
}
.c-header{
    width: 100%;
    height: 60px;
    position: fixed;
}
.c-btn-icon {
    position: absolute;
    top: 190px;
    left: 25px;
    height: 22px;
    width: 22px;
    cursor: pointer;
}

.c-btn-bar {
    width: 100%;
    height: 3px;
    background-color: antiquewhite;
    position: absolute;
}

.c-btn-bar--horizontal{
    position: relative;
    float: left;
    margin-top: 3px;
    transition: all .3s;
}

.c-btn-bar--diagonal {
    position: relative;
    float: left;
    transition: all .3s;
}

.c-btn-bar--diagonal.diagonal-1 {
    transition: all .3s;

}

.c-btn-bar--diagonal.diagonal-2 {
    margin-top: 3px;
    transition: all .3s;

}

input[type="checkbox"] {
    display: none;
}

input[type="checkbox"]:checked ~ .c-btn-icon > .c-btn-bar--horizontal{
    opacity: 0;
    transition: all .3s;
}

input[type="checkbox"]:checked ~ .c-btn-icon > .c-btn-bar--diagonal.diagonal-1{
    transform: rotate(135deg);
    margin-top: 8px; 
    transition: all .3s;
}

input[type="checkbox"]:checked ~ .c-btn-icon > .c-btn-bar--diagonal.diagonal-2{
    transform: rotate(-135deg);
    margin-top: -8px;
    transition: all .3s;

}

.c-sidebar {
    position: fixed;
    width: 250px;
    height: 100%;
    left: 0px;
    margin-top: 835px;
    transform: translateX(-250px);
    transition: transform 250ms ease-in-out;
    background-color: green;
}

input[ type="checkbox"]:checked ~ .c-sidebar {
    transform: translateX(0);
}

.c-sidebar-items{
    border-top: 1px solid rgba(255, 255, 255, .10);
    margin: 0;
    padding: 0;

}

.c-sidebar-items li{
    cursor: pointer;
    list-style: none;
    text-transform: uppercase;
    color: #ffffff;
    font-weight: bold;
    padding: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, .10);
}

.c-sidebar-items li span{
    display: block;
    font-size: 10px;
    color:  rgba(255, 255, 255, .5);
}

h4{
    font-size: 20px;
    color: blue;
}

.parent {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(2, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

img{
    height: 100%;
    width: auto;
    display: flex;
}

.barrenav1 { grid-area: 1 / 1 / 2 / 6; 
    height: 150px;
  
    width: 100%;
    justify-content: space-between;
    display: flex;
    
}

.accueil { grid-area: 1 / 1 / 2 / 2;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20%;
    height: 100%;
  
   
}

.pizza{ grid-area: 1 / 2 / 2 / 3; 
   
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20%;
    height: 100%;

}

.logo { grid-area: 1 / 3 / 2 / 4; 
  
    justify-content: center;
    width: 20%;
    height: 100%;
    align-items: center;
    display: flex;


}

.connexion { grid-area: 1 / 4 / 2 / 5; 
  
    justify-content: center;
    width: 20%;
    height: 100%;
    align-items: center;
    display: flex;
}

.panier { grid-area: 1 / 5 / 2 / 6; 
   
    justify-content: center;
    width: 20%;
    height: 100%;
    align-items: center;
    display: flex;
}

.barrenav2{ grid-area: 2 / 1 / 3 / 6 ;
   
    height: 100px;
    width: 100%;
    background-color:red;
}

.burger{grid-area: 2 / 1 / 3 / 2 ;
   
    justify-content: center;
    align-items: center;
    display: flex;
    height: 100px;
    
}

</style>
    
</body>
</html>