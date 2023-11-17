<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


참고 동영상: https://www.youtube.com/watch?v=TBDEEsXgDxc&list=PLDW68yr8aAbb65OBEzX0VcXb6En5NhhM8&index=3

# 라라벨 성치 순서
1. 라라벨 설치 순서
1.1. composer 설치
1.1.1. composer 버전 확인: composer

1.2. php 설치 - xampp
1.2.1. php 버전확인: php -v

1.3. 라라벨 설치
1.3.1. 설치하려는 디렉토리로 이동
1.3.2. composer create-project --prefer-dist laravel/laravel "버전" 프로젝트명(폴더명)
1.3.3. 예) composer create-project --prefer-dist laravel/laravel laravel8_board "버전"

1.4. 서버 실행
1.4.1. php artisan serve

2. 라라벨 설치 후
2.1. .env파일 설정 변경

3. migration
3.1. 테이블 생성: php artisan make:migration create_boards_table --create=boards ==> /database/migrations/YYYY_MM_DD_xxxxxx_create_boards_table.php 파일이 생성됨
3.2. 위에서 생성된 파일을 열어 테이블 생성에 필요한 내용 수정 후 저장
3.3. migration실행
3.3.1. php artisan migrate

4. controller 
4.1. php artisan make:controller BoardsController --resource	//(resource생성) 또는 
4.2. php artisan make:controller BoardsController --resource --model=Board	//(resource, model동시 생성)
4.3. app\Http\Controllers\BoardsController.php 파일 생성
4.4. app\Models\Board.php 파일 생성

5. 라우터 설정(routes)
5.1. routes\web.php 파일

6. 



# 개발 완료
`1. 사용자단`
- `1.` 목록(계층형-답변형) (계속 updagrade 예정)
- `2.` 글 상세 보기
- `3.` 조회 수 증가 (글 상세페이지에서 새로고침을 해도 증가되지 않고 오로지 글 목록에서 클릭했을때만 증가함)
- `4.` 게시판 글 수정
- `5.` 게시판 답변 기능
- `6.` 회원가입(아이디 중복 체크 - 예정)
- `7.` 로그인, 로그아웃
- `8.` 게시판 Pagenation
- `9.1.` 에디터 추가(ckeditor5) - CDN
- `9.2.` 에디터 이미지 업로드


`2. 관리자단`


## 개발 진행 & 개발 예정
`1. 사용자 기능`
- 회원가입(아이디 중복 체크)
- 정보수정

- 게시판 검색
- 게시판 글쓰기 (첨부파일) - multer
- 게시판 삭제(상세페이지, 목록) - 첨부파일이 있으면 같이 삭제 처리
- 첨부파일 다운로드
- comment 기능 (참고: https://binaryjourney.tistory.com/22)
- 아이디 찾기 / 비번 초기화
- 게시글에 좋아요 (카운트)
- 게시판 히스토리(CRUD...)
- 출석(캘린더)
- 포인트 기능(로그인 출첵 포인트, 캘린더 출첵 포인트)
- 포인트 사용 기능(실제로 사용한다는 가정하에 진행 (시용포인트 입력방식))
- 일정관리

`2. 관리자 기능`
- 로그인(관리자)
- 로그인 정보수정
- 회원 관리(CRUD)
- 게시판 관리(CRUD, 답변, 좋아요)
- 포인트 관리(포인트 가감)
- 메일발송

`3. 공통 기능`
- 공통단 만들기
- Tansaction 처리
- Calendar




# 진행 상황
`1 개발 완료`
`1.` 

`2 개발 예정`
`1.` 회원가입
`2.` 로그인
`3.` 게시판
`3-1.` 게시판 글 목록
`3-2.` 게시판 글 읽기
`3-2.` 게시판 글 수정
`3-3.` 게시판 글 쓰기(계층형)
`3-4.` 게시판 첨부파일 등록, 삭제
`3-5.` 게시판 좋아요, 조아요 취소
`3-5.` 게시판 댓글 목록
`3-6.` 게시판 댓글 쓰기
`3-7.` 게시판 댓글 삭제
`3-8.` 게시판 히스토리(CRUD...)



`3` 관리자 기능

`4` 공통 기능