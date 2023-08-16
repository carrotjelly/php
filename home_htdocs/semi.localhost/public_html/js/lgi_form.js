function check_input(){
    let myform = document.myform;
    if(!myform.u_id.value){
        alert("아이디를 입력하세요.");
        myform.u_id.focus();
        return;
    }
    if(!myform.u_pass.value){
        alert("비밀번호를 입력하세요.");
        myform.u_pass.focus();
        return;
    }
    myform.submit();
}