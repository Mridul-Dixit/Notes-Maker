const card=document.querySelectorAll(".card-body")
const search= document.getElementById('search');
search.addEventListener("input",()=>{
const input= search.value.toLowerCase() ;
card.forEach(element=>{
    
const ttle =element.children[0].innerText. toLowerCase();
const not=  element.children[1].innerText.toLowerCase();
if(ttle.includes(input)|| not.includes(input)){
    element.parentElement.style.display="block";
    
}
else
element.parentElement.style.display="none";
})

}
    
)
