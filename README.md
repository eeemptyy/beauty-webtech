-->>beauty-webtech<<--

1. ติดตั้ง composer แล้วสร้างไฟล์ .env 
2.create table database ใน laravel 
- สร้าง database Name: webtechproject 
             Collation: utf8_general_ci
- สร้าง user สำหรับ database ที่ local ชื่อ emptyy ไม่มี Password
3.php artisan migrate
4.php db:seed
5.สามารถเปิดหน้าเว็ปได้โดยใช้ 
>ผู้ใช้งานทั่วไป
- http://beauty-webtech.dev/ จะเป็นการแสดงหน้า home ของเว็ป
- http://beauty-webtech.dev/service แสดงหน้าservice ทั้งหมดที่มีโดยดึงมาจาก database
- http://beauty-webtech.dev/voucher แสดงหน้าvoucher ทั้งหมดที่มีโดยดึงมาจาก database
>ผู้ที่สมัครสมาชิก (username :  tar.ksb@ku.th password : 111111 )
- http://beauty-webtech.dev/ จะเป็นการแสดงหน้า home ของเว็ป
- http://beauty-webtech.dev/service แสดงหน้าservice ทั้งหมดที่มีโดยดึงมาจาก database
- http://beauty-webtech.dev/voucher แสดงหน้าvoucher ทั้งหมดที่มีโดยดึงมาจาก database
- http://beauty-webtech.dev/profile แสดงหน้าprofileของผู้ใช้งานพร้อมทั้งประวัติการซื้อ course
- http://beauty-webtech.dev/home จะแสดงหน้า home ของ user ที่login แล้วจะมีฟีเจอร์สำหรับ user ประเภทนั้นๆให้เลือกที่ navbar
>แอดมิน(username :  jompol.s@ku.th password : 111111 )
หากต้องการเพิ่ม user สำหรับ admin ให้ทำการแก้ไขไฟล์ /database/seeds/DatabaseSeeder.php 
ตั้งแต่บรรทัดที่ 45 เป็นต้นไป โดยกำหนดให้ role_id เป็น 1



------------------------
ทุกคนช่วยกันออกแบบdatabase
1. นายจอมพล เสริมสุข 5610450063 (Facebook : Jompol Sermsook)
สร้าง Model, Migration, DBseeder สำหรับ project
แก้ไขบัคต่างๆที่เกิดขึ้นระหว่างการพัฒนาตั้งแต่ .env หาย vendor หาย ไฟล์หายรวมถึงแก้ไขปัญหาจากการ Merge git ผิดพลาด
รวบรวมฟีเจอร์ต่างๆเข้าด้วยกัน ปรับแต่งโค้ดบางส่วนใหญ่ใช้งานง่ายขึ้น 
ทำระบบ Auth user ทั้ง Login, Register, Forget/Change password.
จัดทำฟีเจอร์เกี่ยวกับการรับส่ง email โดยใช้ Gmail เป็นตัวกลางพร้อมทั้งสร้าง account ใหม่สำหรับใช้เป็น sender ในโปรเจค
พัฒนาระบบส่งemail ให้มีการส่งอัตโนมัติตามช่วงเวลาที่กำหนด และส่งแจ้งเตือนถึงโปรโมชั่นใหม่ๆที่ทางคลินิคจัดทำขึ้น
2. นางสาว ปิยาณี สุขจำเริญ 5710404462 (Facebook : NOok Piyanee )
-ทำหน้า Home (homepage.blade.php)หน้า Service(servicpage.blade.php) และหน้า Voucher(voucherpage.blade.php)ทั้งหมด
 โดยเป็นการดึงข้อมูลจากdatabaseผ่านcontrollerมาแสดงตามเงื่อนไขที่ได้ตั้งไว้โดยใช้ vue js และjavascript
-ทำcss
-ช่วยเพื่อนนิดๆหน่อยๆ
3. นายจักรพันธ์ คล้ายสุบรรณ 5710404276 (Facebook : Tar Ksb)
-ทำหน้า user.blade, user controller และช่วยทำหน้า layouts.app นิดหน่อย
-query จาก database ในส่วนของ user profile และ histories
4. นายกรวิชญ์ สิทธินันทคุณ 5610404169 (Facebook : Koravit Sittinantakhun)
- ทำหน้า Admin ส่วนแสดงข้อมูล Users, Courses และ Vouchers ออกมาเป็นตารางโดยดึงจาก database
ใช้ Laravel ในการทำ โดยสร้าง controller เพื่อ query ข้อมูลจาก database แล้วส่งไปแสดงผลเป็นตาราในส่วน view.blade
-customize ส่วนต่างๆของเว็ปไซต์ โดยรวม เขียนเป็น inline css ให้มีความสวยงาม และไปในแนวทางธีมเดียวกันมากยิ่งขึ้น
5. นายวรวุฒิ ฐิติธรรมจริยา 5710404616 (Facebook : Worawut Tititumjariya) 
-ทำหน้า insert course, vourcher, set promotion และ หน้า buy course และ get vourcher ในการ update คำนวณค่าpointและเก็บประวัติการซื้อ
โดยใช้ laravel ใช้ในการรับค่าและดึงค่ารายการต่างๆจากdatabaseมาแสดงในdropdown ในส่วนของ .blade ,controller และ  Modle บางส่วน