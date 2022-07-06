<?php 

return [
    'baseUrl'     => 'https://aqayepardakht.ir/api/v2',
    'pin'         => 'sandbox',
    'callbackUrl' => 'http://127.0.0.1/SDK/callbackTransction.php',
    'errors' => [
        '2'  => 'تراکنش قبلا وریفای شده است',
        '-1' => 'مقدار پول را وارد نمایید',
        '-3' => 'error',
        '0'  => 'پرداخت انجام نشد',
        '-2' => 'پین درگاه را وارد نمایید',
        '-4' => 'مقدار پول باید عددی باشد',
        '-5' => 'مبلغ تراکنش باید حداقل 100 تومان و حداکثر 50 میلیون تومان باشد',
        '-6' => 'کد پین درگاه اشتباه هست', 
        '-7' => 'ایپی سرور با ایپی درگاه مطابقت ندارد', 
        '-8' => 'کد رهگیری را وارد نمایید (traceCode)', 
        '-9' => 'تراکنش مورد نظر وجود ندارد', 
        '-10' => 'کد پین درگاه با درگاه تراکنش مطابقت ندارد',
        '-11' =>  'مبلغ با مبلغ تراکنش مطابقت ندارد', 
        '-12' => 'بانک وارد شده اشتباه میباشد',
        '-13' => 'درگاه غیر فعال است',
        '-14' => 'درگاه برروی سایت دیگری درحال استفاده است',
        '-16' => 'زیرساخت بانکی قطع است',
        '-17' => 'تراکنش پس از 15 دقیقه منقضی شده است',
        '-20' => 'پرداخت لغو شده است',
        '-18' => 'پرداخت فقط با ip داخلی امکان پذیر است',
        '-19' => ' خطای غیر منتظره رخ داده است',
        '-21' => 'در انتظار پردخت',
        '-22' =>  'پرداخت شده - تاییدشده',
        '-23' => 'پرداخت شده - تاییدنشده',  
        '-24' => 'لغوشده توسط کاربر',
        '-25' => 'شماره کارت نامعتبر می‌باشد', 
        '-26' => '‌موجودی حساب کافی نمی‌باشد',
        '-27' =>  'رمز واردشده اشتباه می‌باشد',
        '-28' => 'تعداد درخواست‌ها بیش از حد مجاز می‌باشد', 
        '-30' => 'مبلغ پرداخت اینترنتی روزانه بیش از حد مجاز می‌باشد',
        '-31' => '‌صادرکننده‌ی کارت نامعتبر می‌باشد',
        '-32' => '‌خطای سوییچ',
        '-33' => 'کارت قابل دسترسی نمی‌باشد',
        '-29' => 'تعداد پرداخت اینترنتی روزانه بیش از حد مجاز می‌باشد',
        '-34' => 'پرداخت توسط کاربر لغو شده است' 
    ]
];