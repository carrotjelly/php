function check_input(){
    let myform = document.myform;
    if(!myform.u_pass.value){
        alert('비밀번호를 입력하세요!');
        myform.u_pass.focus();
        return;
    }
    if(!myform.u_pass_cf.value){
        alert('비밀번호 확인를 입력하세요!');
        myform.u_pass_cf.focus();
        return;
    }
    if(!myform.u_name.value){
        alert('이름를 입력하세요!');
        myform.u_name.focus();
        return;
    }
    if(!myform.email1.value){
        alert('이메일를 입력하세요!');
        myform.email1.focus();
        return;
    }
    if(!myform.email2.value){
        alert('이메일 주소를 입력하세요!');
        myform.email2.focus();
        return;
    }
    if(myform.u_pass.value!=myform.u_pass_cf.value){
        alert('비밀번호가 일치하지 않습니다.\n 다시 입력하세요!');
        myform.u_pass_cf.focus();
        myform.u_pass_cf.select();
        return;
    }
    myform.submit();
}

function reset_form(){
    let myform = document.myform;
    myform.reset();
}

function check_id(){
    window.open('mem_chk_id.html?id=' + document.myform.u_id.value,'IDcheck','left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes');
}