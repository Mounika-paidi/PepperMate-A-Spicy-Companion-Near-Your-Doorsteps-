
document.addEventListener("DOMContentLoaded", function() {
    const words = document.querySelectorAll(".tagline .word");
    let delay = 200; 
    const totalDelay = delay * words.length; 

    words.forEach((word, index) => {
        setTimeout(() => {
            word.style.opacity = 1;  
        }, delay * index);  
    });

    
    setTimeout(() => {
        window.location.href = "secondpage.php";
    }, totalDelay + 1000); 
});
