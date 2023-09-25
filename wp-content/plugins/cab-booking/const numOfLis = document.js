const numOfLis = document.getElementsByClassName("elementor-icon-list-text").length; 
alert(numOfLis);
for(var i=0;i < numOfLis;i++){
    // for (let i = 1; i <= 10; i++)
var span = document.getElementsByClassName("elementor-icon-list-text")[i].innerText

console.log(span);
console.log(capitalize(span)) + "<br>";
console.log(i);
}

function capitalize(string) {   
        // if (typeof string !== 'string') {
        //     return 'Please provide a valid string.';
        // }
    
        return string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
    }
