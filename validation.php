<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 유효성 검사 반환 한글화
    |--------------------------------------------------------------------------
    |
    | KEY & VALUE 형식의 배열로 정의합니다.
    | KEY에는 유효 검사명을 입력하세요.
    | VALUE는 한글 반환 에러 메시지를 정의해주세요.
    | 속성 정의는 하단의 attribute 정의에서 한글화 시켜주세요.
    |
    */

    "accepted"             => ":attribute을(를) 반드시 동의해야 합니다.",
    "active_url"           => ":attribute은(는) 유효한 URL이 아닙니다.",
    "after"                => ":attribute은(는) 반드시 :date 이후 날짜여야 합니다.",
    "alpha"                => ":attribute은(는) 문자만 포함할 수 있습니다.",
    "alpha_dash"           => ":attribute은(는) 문자, 숫자, 대쉬(-)만 포함할 수 있습니다.",
    "alpha_num"            => ":attribute은(는) 문자와 숫자만 포함할 수 있습니다.",
    "array"                => ":attribute은(는) 반드시 배열이어야 합니다.",
    "before"               => ":attribute은(는) 반드시 :date 이전 날짜여야 합니다.",
    "between"              => [
    "numeric" => ":attribute은(는) 반드시 :min에서 :max 사이여야 합니다.",
    "file"    => ":attribute은(는) 반드시 :min에서 :max 킬로바이트 사이여야 합니다.",
    "string"  => ":attribute은(는) 반드시 :min에서 :max 문자 사이여야 합니다.",
    "array"   => ":attribute은(는) 반드시 :min에서 :max 아이템 사이여야 합니다.",
    ],
    "boolean"              => ":attribute은(는) 반드시 true 또는 false 여야 합니다.",
    "confirmed"            => ":attribute 확인 항목이 일치하지 않습니다.",
    "date"                 => ":attribute은(는) 유효한 날짜가 아닙니다.",
    "date_format"          => ":attribute은(는) :format 형식과 일치하지 않습니다.",
    "different"            => ":attribute와(과) :other은(는) 반드시 서로 달라야 합니다.",
    "digits"               => ":attribute은(는) 반드시 :digits 자릿수여야 합니다.",
    "digits_between"       => ":attribute은(는) 반드시 :min에서 :max 자릿수 사이여야 합니다.",
    "email"                   => ":attribute 형식은 유효하지 않습니다.",
    "filled"               => ":attribute 필드는 필수입니다.",
    "exists"               => "선택된 :attribute은(는) 유효하지 않습니다.",
    "image"                => ":attribute은(는) 반드시 이미지여야 합니다.",
    "in"                   => "선택된 :attribute은(는) 유효하지 않습니다.",
    "integer"              => ":attribute은(는) 반드시 정수여야 합니다.",
    "ip"                   => ":attribute은(는) 반드시 유효한 IP 주소여야 합니다.",
    "max"                  => [
    "numeric" => ":attribute은(는) 반드시 :max 보다 작아야 합니다.",
    "file"    > ":attribute은(는) 반드시 :max 킬로바이트보다 작아야 합니다.",
    "string"    => ":attribute은(는) 반드시 :max 자리보다 작아야 합니다.",
    "array"        => ":attribute은(는) 반드시 :max 아이템보다 작아야 합니다.",
    ],
    "mimes"                => ":attribute은(는) 반드시 다음의 파일 타입이어야 합니다: :values.",
    "min"                  => [
    "numeric" => ":attribute은(는) 반드시 :min 보다 커야 합니다.",
    "file"    => ":attribute은(는) 반드시 :min 킬로바이트보다 커야 합니다.",
    "string"  => ":attribute은(는) 반드시 :min 자리보다 커야 합니다.",
    "array"   => ":attribute은(는) 반드시 :max 아이템보다 커야 합니다.",
    ],
    "notin"                => "선택된 :attribute은(는) 유효하지 않습니다.",
    "numeric"            => ":attribute은(는) 반드시 숫자여야 합니다.",
    "regex"                => ":attribute 형식은 유효하지 않습니다.",
    "required"            => ":attribute 필드는 필수입니다.",
    "required_if"        => ":other이(가) :value 일때 :attribute 필드는 필수입니다.",
    "required_with"        => ":values이(가) 있을 경우 :attribute 필드는 필수입니다.",
    "required_with_all"    => ":values이(가) 있을 경우 :attribute 필드는 필수입니다.",
    "required_without"    => ":values이(가) 없을 경우 :attribute 필드는 필수입니다.",
    "required_without_all" => "T:values이(가) 없을 경우 :attribute 필드는 필수입니다.",
    "same"                => ":attribute와(과) :other은(는) 반드시 일치해야 합니다.",
    "size"                 => [
    "numeric" => ":attribute은(는) 반드시 :size (이)여야 합니다.",
    "file"    => ":attribute은(는) 반드시 :size 킬로바이트여야 합니다.",
    "string"  => ":attribute은(는) 반드시 :size 자릿수여야 합니다.",
    "array"   => ":attribute은(는) 반드시 :max 개의 아이템을 포함해야 합니다.",
    ],
    "unique"               => ":attribute은(는) 이미 사용중 입니다.",
    "url"                  => ":attribute 형식은 유효하지 않습니다.",
    "timezone"             => ":attribute은(는) 올바르지 않은 시간대입니다.",

    
    'custom' => [
     'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | 속성 정의
    |--------------------------------------------------------------------------
    |
    | KEY & VALUE 형식의 배열로 정의합니다.
    | KEY에는 유효 속성명을 입력하세요.
    | VALUE는 속성의 한글명을 입력해주세요
    |
    */

    'attributes' => [
        "name" => "이름",
        "email" => "이메일",
        "password" => "비밀번호",
        "password_confirmation" => "비밀번호 확인",
        "title" => "제목",
        "content" => "내용",
        "tag" => "태그"

    ],

];
