function mode(){
    let body=document.getElementById("id"); // recuperer la balise et la transformer en objet js pouur pourvpir la manipuler
    if(body.style.backgroundColor=="white"){

    //si le backgroud est white on le change
    body.style.backgroundColor = 'black';
    body.style.color='white';
}
else{
  
    body.style.backgroundColor = 'white'
    body.style.color='black';
    // java script object notation JSON;
    // ne pas oublier comment faire la suppression 
}
}