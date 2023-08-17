function check_input(){
    let myform = document.myform;
   

    if(!myform.rv_id.value){
        alert('보낼 사용자를 입력하세요!');
        myform.rv_id.focus();
        return;
    }
    if(!myform.subject.value){
        alert('제목을 입력하세요!');
        myform.subject.focus();
        return;
    }
    if(!myform.content.value){
        alert('내용을 입력하세요!');
        myform.content.focus();
        return;
    }
    
    myform.submit();
}

