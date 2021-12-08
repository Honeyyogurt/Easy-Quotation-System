# Easy-Quotation-System
with PHP+MySQL

Operate step by step:

1.
請先將mysqldump裡面的sql檔案匯入本地的mysql
-->schema:price下面兩個table:products跟users

2.到config.php程式碼裡面Line 5跟line6
更改成本地mysql密碼 確認可以與mysql檔案連線

3.先連register.php註冊帳號
有兩種帳號分別是
customer(代表客戶)
staff(代表業務)

4.註冊完會自動分別到不同頁面
如果是customer會連到welcome.php
就可以開始報價

如果是staff會連到staffcheck.php
就可以開始回覆報價

5.如果customer有報價成功
然後staff有去回覆價格
用剛剛申請的customer帳號再登入
可以到 "查看價格"
檢查報價的更新
