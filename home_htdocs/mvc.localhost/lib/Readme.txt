
------------------------------※ 개발 환경 구성------------------------------------------

1. php.ini에서 allow_url_fopen = On으로 입력한다.

2. php.ini에서 extension=php_curl.dll의 주석처리를 해제하거나 입력해준다.

3. httpd.conf에서 LoadFile "C:\php-7.4.25-Win32-vc15-x64\libssh2.dll" (자신의 작업환경에 맞는 경로로 변경)을 추가한다.

3. ionCube로 인코딩 되어있기 때문에 필히 ionCube Loader를 PHP에 적용시켜야 한다.
    1. https://www.ioncube.com/loaders.php 에서 Window VC15 (32 bits / 64 bits) zip파일을 다운로드 받는다.
    2. 압축을 해제해 ioncube_loader_win_7.4.dll 파일을 PHP의 ext폴더로 이동시킨다.
    3. php.ini을 편집하여 zend_extension=ioncube_loader_win_7.4.dll를 입력한다.
        - extension_dir이 동작하지 않은 경우 절대경로로 변경한다.
        - zend_extension="D:\php7.4\ext\ioncube_loader_win_7.4.dll"
    4. 서버를 재시작한다.



------------------------------※ lib_road 라이브러리 사용법------------------------------

1. 라이브러리를 사용할 프로젝트의 폴더 구조를 다음과 같이 변경한다.
    - lib
    - public_html [Document Root]

2. 라이브러리 파일[lib_road.inc, ysolib.inc]을 lib 폴더에 위치시킨다.

3. lib_road.inc 파일을 편집한다.
    - $lib->lib_road_dir_($dir) : 명리 라이브러리 폴더 위치를 지정한다.
    - $lib->ulib_road_dir_($dir) : 사용자의 라이브러리 폴더 위치를 지정한다.
    - $lib->lib_token($token) : license_installation.key 파일에 작성된 토큰값을 입력한다.
    - $lib->lib_password_($password)
        - 사용자 라이브러리 업로드 시 필요한 패스워드.
        - 개발자 홈페이지(http://dev.yso.co.kr) 로그인 후 회원정보 변경에서 확인 가능하다.
        - 모든 사용자 라이브러리 함수에 일괄 적용된다. (라이브러리 패스워드 변수에 관계없이 적용)
    - $lib->lib_period_($period) : 사용자 라이브러리 업로드 기간을 지정한다. (형식: YYYY-MM-DD)
    - $lib->update_yn : Y, N 값을 넣어 라이브러리 파일 업데이트 여부를 체크한다. 
    - $lib->upload_yn : Y, N 값을 넣어 라이브러리 파일 업로드 여부를 체크한다. 
    - $lib->lib_start_() : 토큰 유효성을 체크하고, 라이브러리 업데이트 및 업로드를 여부를 체크하여 실행한다.

4. $lib->lib_fun() 함수에 원하는 라이브러리명을 작성하여 라이브러리 파일을 다운로드 받는다.
    - 개발자 홈페이지 : http://dev.yso.co.kr/library/library.html
    - 블로그 : https://blog.naver.com/mlits
    - github : https://github.com/myungli/lib_road



------------------------------※ 사용자 라이브러리 사용법--------------------------------

1. lib_road.inc 에서 사용자 라이브러리 폴더를 지정해준다.
    - $lib->ulib_road_dir_("$_SERVER[DOCUMENT]/../lib_user")

2. 라이브러리 작성 시 클래스 변수로 아래와 같이 작성해준다.

class temporary extends lib_road
{
    var $prevention = false;
    var $priority = 1;
    var $version = "PHP3|PHP4|PHP5";
    var $type = "PHP|JavaScript|CSS";
    var $description = "간단한 설명이 들어갈 항목입니다.";
    function temporary_()
    {
        ....
    }
}

＃ 클래스 변수 설명 (선택적으로 입력하는 변수)
    - $prevention : 자동 업로드 방지 변수. 자동 업로드 기능을 사용할 경우, 업로드 하지않을 라이브러리를 선택하여 설정할 수 있다.
        - 업로드 하지 않을 경우 : false, 업로드 할 경우 : true (기본값: true)
    - $priority : 자동 업로드 우선순위 설정 변수. 자동 업로드 기능을 사용할 경우, 서버에 라이브러리가 이미 존재할 때, 우선순위에 따라서 라이브러리의 업로드 유무를 결정한다.
        - 양의 정수만 사용해야 한다.
        - 숫자가 큰 값을 우선하여 업로드 한다. (기본값: 0)
    - $version : PHP 버전 입력 변수. PHP3~PHP8까지 입력 가능하다.
    - $type : 라이브러리 유형 입력 변수. 아래의 항목으로 입력 가능하다.
        - PHP, JavaScript, CSS, HTML, SQL, Java, C#, C++, Apache, Bash, CoffeeScript, Diff, XML, HTTP, Ini, Json, Makefile, Nginx, ObjectiveC, Perl, Python, Ruby
    - $description : 라이브러리 설명 입력 변수. 라이브러리에 대한 간단한 설명을 작성한다.

3. 사용자가 작성한 라이브러리 파일을 사용자 라이브러리 폴더에 위치시킨다.



------------------------------※ 프로젝트 배포 시 주의점---------------------------------

1. 개발자 홈페이지에서 토큰을 새로 발급하여 lib_road.inc에 설정해야 한다.
    - token_certification.key 파일 삭제해야 한다.

2. lib_road.inc에서 업로드 패스워드를 삭제해야 한다.

