<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grid</title>
</head>
<body>
    
<style>


.parent {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(5, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.div1 { grid-area: 1 / 1 / 2 / 6; }

.div1{
    background-color: blanchedalmond;
    width: auto;
    height: 20vh;
}

.div2 { grid-area: 2 / 1 / 5 / 6; }

.div2{
    background-color:blue;
    width: auto;
    height: auto;
    display: flex;
    flex-wrap: nowrap;
    justify-content: space-around;
    align-items: center;
}

.div3 { grid-area: 5 / 1 / 6 / 6; } 

.div3{
    background-color:red;
    width: auto;
    height: 20vh;
}

img{
    height: 300px;
    width: 300px;
    display: flex;
    flex-wrap: nowrap;
}

</style>







<div class="parent">
<div class="div1"></div>


<div class="div2"> 

<img src="./image/cssc.jpg" alt="">
<img src="./image/golden-state-warriors-picture-backgrounds-wallpaper-preview.jpg" alt="">

</div>



<div class="div3"></div>
</div> 


</body>
</html>