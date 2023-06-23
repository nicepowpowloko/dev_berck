<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
</head>

<body>

<div class="parent1">
<div class="footer"> </div>
<div class="div2"> </div>
<div class="div3"> </div>
<div class="div4"> </div>
<div class="div5"> </div>
<div class="div6"> </div>
</div>

</body>

<style>

*{
    box-sizing: border-box;
    margin: 0;
}

.parent1 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(1, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.footer { grid-area: 1 / 1 / 2 / 6; 
    background-color: black;
    height: 150px;
    width: 100%;

}

.div2 { grid-area: 1 / 1 / 2 / 2; }

.div3 { grid-area: 1 / 2 / 2 / 3; }

.div4 { grid-area: 1 / 3 / 2 / 4; }

.div5 { grid-area: 1 / 4 / 2 / 5; }

.div6 { grid-area: 1 / 5 / 2 / 6; }

</style>

</html>