-->>beauty-webtech<<--

1. �Դ��� composer �������ҧ��� .env 
2.create table database � laravel 
- ���ҧ database Name: webtechproject 
             Collation: utf8_general_ci
- ���ҧ user ����Ѻ database ��� local ���� emptyy ����� Password
3.php artisan migrate
4.php db:seed
5.����ö�Դ˹����������� 
>�����ҹ�����
- http://beauty-webtech.dev/ ���繡���ʴ�˹�� home �ͧ���
- http://beauty-webtech.dev/service �ʴ�˹��service ������������´֧�Ҩҡ database
- http://beauty-webtech.dev/voucher �ʴ�˹��voucher ������������´֧�Ҩҡ database
>�������Ѥ���Ҫԡ (username :  tar.ksb@ku.th password : 111111 )
- http://beauty-webtech.dev/ ���繡���ʴ�˹�� home �ͧ���
- http://beauty-webtech.dev/service �ʴ�˹��service ������������´֧�Ҩҡ database
- http://beauty-webtech.dev/voucher �ʴ�˹��voucher ������������´֧�Ҩҡ database
- http://beauty-webtech.dev/profile �ʴ�˹��profile�ͧ�����ҹ�������駻���ѵԡ�ë��� course
- http://beauty-webtech.dev/home ���ʴ�˹�� home �ͧ user ���login ���Ǩ��տ���������Ѻ user ����������������͡��� navbar
>�ʹ�Թ(username :  jompol.s@ku.th password : 111111 )
�ҡ��ͧ������� user ����Ѻ admin ���ӡ�������� /database/seeds/DatabaseSeeder.php 
������÷Ѵ��� 45 �繵�� �¡�˹���� role_id �� 1



------------------------
�ء�����¡ѹ�͡Ẻdatabase
1. ��¨���� ������آ 5610450063 (Facebook : Jompol Sermsook)
���ҧ Model, Migration, DBseeder ����Ѻ project
��䢺Ѥ��ҧ����Դ��������ҧ��þѲ�ҵ���� .env ��� vendor ��� ����������֧��䢻ѭ�Ҩҡ��� Merge git �Դ��Ҵ
�Ǻ����������ҧ���Ҵ��¡ѹ ��Ѻ���鴺ҧ��ǹ�˭���ҹ���¢�� 
���к� Auth user ��� Login, Register, Forget/Change password.
�Ѵ�ӿ���������ǡѺ����Ѻ�� email ���� Gmail �繵�ǡ�ҧ�����������ҧ account ��������Ѻ���� sender ���ਤ
�Ѳ���к���email ����ա�����ѵ��ѵԵ����ǧ���ҷ���˹� ���������͹�֧��������������ҧ��ԹԤ�Ѵ�Ӣ��
2. �ҧ��� ���ҳ� �آ����ԭ 5710404462 (Facebook : NOok Piyanee )
-��˹�� Home (homepage.blade.php)˹�� Service(servicpage.blade.php) ���˹�� Voucher(voucherpage.blade.php)������
 ���繡�ô֧�����Ũҡdatabase��ҹcontroller���ʴ�������͹䢷������������� vue js ���javascript
-��css
-�������͹�Դ�˹����
3. ��¨ѡþѹ�� ������غ�ó 5710404276 (Facebook : Tar Ksb)
-��˹�� user.blade, user controller ��Ъ��·�˹�� layouts.app �Դ˹���
-query �ҡ database ���ǹ�ͧ user profile ��� histories
4. ��¡��Ԫ�� �Է�Թѹ��س 5610404169 (Facebook : Koravit Sittinantakhun)
- ��˹�� Admin ��ǹ�ʴ������� Users, Courses ��� Vouchers �͡���繵��ҧ�´֧�ҡ database
�� Laravel 㹡�÷� �����ҧ controller ���� query �����Ũҡ database ��������ʴ����繵������ǹ view.blade
-customize ��ǹ��ҧ�ͧ���䫵� ����� ��¹�� inline css ����դ�����§�� ������Ƿҧ������ǡѹ�ҡ��觢��
5. ������ز� �ԵԸ�������� 5710404616 (Facebook : Worawut Tititumjariya) 
-��˹�� insert course, vourcher, set promotion ��� ˹�� buy course ��� get vourcher 㹡�� update �ӹǳ���point����纻���ѵԡ�ë���
���� laravel ��㹡���Ѻ�����д֧�����¡�õ�ҧ�ҡdatabase���ʴ��dropdown ���ǹ�ͧ .blade ,controller ���  Modle �ҧ��ǹ