WP Kakao Plusfriend
==

이 플러그인은 워드프레스 사이트에 카카오톡 플러스친구 추가하기 버튼과 1:1 채팅 버튼을 사용할 수 있게 도와줍니다.
https://wordpress.org/plugins/wp-kakao-plusfriend/

플러그인 설치
--

1. 워드프레스 플러그인 디렉터리에서 [WP Kakao Plusfriend](https://wordpress.org/plugins/wp-kakao-plusfriend/) 플러그인을 검색
2. 플러그인 설치 방법에 따라 설치!

사용법
--

1. [Kakao developers](https://developers.kakao.com) 페이지에 접속 후 "시작하기" 버튼을 눌러 새 애플리케이션을 등록(추가)합니다.
2. 워드프레스 관리자 대시보드 "설정 > Kakao Plusfriend" 메뉴에서 앞서 등록한 앱 키(APP KEY)와 [플러스친구 관리자 센터](https://center-pf.kakao.com/profiles)에서 발급받은 플러스친구 페이지 ID(예: '_xcLqmC')를 추가합니다.
3. **플러스친구 추가 버튼** 또는 **플러스친구 1:1 채팅 버튼**을 활성화시킵니다.


스타일 변경
--

이 플러그인에서 사용한 기본 CSS 스타일은 아래와 같으며, 사용자 사이트 환경에 맞게 자유롭게 스타일을 변경(override)하여 사용하면 됩니다.

    #plusfriend-addfriend-button,
    #plusfriend-chat-button {
        position: fixed;
        bottom: 0;
        right: 0;
    }
    #plusfriend-addfriend-button {
        z-index: 998;
    }
    #plusfriend-chat-button {
        z-index: 999;
    }


참고 문서
--

* [카카오톡 채널 JavaScript 개발자 문서](https://developers.kakao.com/docs/latest/ko/kakaotalk-channel/js)


License
--

[GPLv2](https://www.gnu.org/licenses/gpl-2.0.html)