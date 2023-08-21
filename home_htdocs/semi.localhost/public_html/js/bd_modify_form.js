function check_input(){
    let myform = document.myform;
    if(!myform.subject.value){
        alert('제목을 입력해 주세요.');
        myform.subject.focus();
        return false;
    }
    if(!myform.content.value){
        alert('내용을 입력해 주세요.');
        myform.content.focus();
        return false;
    }
    myform.submit();
}