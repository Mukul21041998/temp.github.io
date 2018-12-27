var addButton = document.getElementById("add");
addButton.addEventListener("click", addItem);

var removeButton = document.getElementById("remove");
removeButton.addEventListener("click",removeItem);


function addItem(){

  var txtval = document.getElementById("text").value;

  if(txtval == ""){
    return false;
  }

  else{

    var txtnode = document.createTextNode(txtval);
  var li = document.createElement("li");
  var input = document.createElement('input');
  input.type = 'checkbox';
  li.appendChild(input);
  li.appendChild(txtnode);
  var node = document.getElementById("list-item");
  node.appendChild(li);  

  }
  
}



function removeItem(){

  var ul = document.getElementById("list-item");
  li = ul.children;
  for (let index = 0; index < li.length; index++) {
    while (li[index].children[0].checked) {

      ul.removeChild(li[index]);
      
    }
  }
  
}


