<?php
require_once("$_SERVER[DOCUMENT_ROOT]/../lib/ysolib.inc");
$lib = new lib_road();
$lib->lib_road_dir_("$_SERVER[DOCUMENT_ROOT]/../lib"); // 라이브러리 폴더
$lib->ulib_road_dir_("$_SERVER[DOCUMENT_ROOT]/../lib_u"); // 사용자가 작성한 라이브러리 폴더
//$lib->lib_token_(""); //license_installation.key 키 값
//$lib->lib_period_(""); //업로드 기간 (마지막 업로드 일자: YYYY-MM-DD)
$lib->lib_password_("96I0ecDX"); //업로드 패스워드
$lib->update_yn = "Y"; // 라이브러리 업데이트 유무 (Y,N)
$lib->upload_yn = "Y"; // 라이브러리 업로드 유무 (Y,N)
$lib->upload_interval = "1 day"; // 업로드 주기
$lib->update_interval = "1 day"; // 업데이트 주기
$lib->update_run_yn = "Y"; // 업로드, 업데이트 즉시 실행
$lib->lib_start(); // 인증 토큰 발급 함수, 토큰 발급 후 라이브러리 업데이트, 업로드 체크
?>