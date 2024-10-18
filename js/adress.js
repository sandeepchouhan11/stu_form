function checkbox(){
    if(ch.checked==true){
      document.getElementById('parmanant').value=document.getElementById('local').value;
    }
    else{
      document.getElementById('parmanant').value = '';
    }
  }