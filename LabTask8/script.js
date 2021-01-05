var block = document.getElementById("block");

window.addEventListener("keydown", checkKeyPress, false);

function checkKeyPress(key) 
{
    if (key.keyCode == "13") 
    {
        block.style.right = 625 + 'px';
    }
}

function jump()
{
    if(block.classList != "animate")
    {
        block.classList.add("animate");
    }
    setTimeout(function()
    {
        block.classList.remove("animate");
    },300);
}

window.addEventListener("keydown", checkKeyPress, false);

function checkKeyPress(key) 
{
    if (key.keyCode == "32") 
    {
        jump();
    }
}