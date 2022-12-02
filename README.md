## 關於Lai_Laravel9這個branch  
是我新建的一個專案，版本是Laravel 9，所以如果要用這版的話可能要你們pull下來看看可不可以跑  
我有把大家之前寫的東西全部複製過來了，但可能要再檢查一下有沒有漏  
目前這個版本已經可以使用者註冊跟登入了，頁面也都有預設的，要測試的話記得改一下.env檔的DataBase名稱成跟你自己資料庫的一樣，不然連不上  
另外User的假資料我也寫好了，可以用`php artisan migrate --seed`, `php artisan migrate` 兩個指令，資料庫那邊重整應該就可以看到有10個假的使用者資料了  
`php artisan migrate:refresh` 是重整資料表，會把資料表上現有的內容清空，如果有新增欄位或是改欄位名字之類的才需要跑  

統一用Laravel 版本 8.83.26 (php artisan --version可以查詢)  
記得要下載xampp，手動建一個資料庫取名ncu_court_reservation_system(不要複製貼上，多一個空格很容易跳錯)  
程式碼clone下來後依序下指令: `composer install`, `php artisan event:generate`, `php artisan key:generate`, `npm install`, `npm run dev`  
( 如果在下 `php artisan key:generate`時，`ErrorException file_get_contents(D:\大三上\NCU_Court_Reservation_System\.env.): Failed to open stream: No such file or directory`，可以將.env.example檔名改成.env )  
**ㄜ對，如果發現沒有.env檔的話一定要複製一個.env.example檔然後檔名改成.env，第1行跟第14行要改成跟下圖一樣**  
<img width="399" alt="image" src="https://user-images.githubusercontent.com/83395975/204447106-1fa503ee-17e0-487d-a7bd-aabb8faba553.png">


都好了之後`php artisan serve`，可以開啟伺服器  

`php artisan make:migration create_名字_table`可以新建資料庫的資料表  
`php artisan migrate`新建立的table更新到資料庫，`php artisan migrate:refresh`修改欄位後更新到資料庫上，只要table有更新就要記得跑這兩個指令


## 前端的部分
在resources>views那邊新增了courts, reservations, users 三個資料夾，還有homepage 
詳細每個代表什麼也有寫在註解裡面了  
* homepage.blade.php 寫首頁 

**courts**
* courts>create: 管理員新增場地的頁面 
* courts>edit: 管理員編輯場地的頁面 
* courts>index: 點進該場地顯示場地詳細資訊的頁面 
* courts>show: 顯示所有場地的頁面  

**reservations**  
* reservations>create: 使用者要預約場地的畫面   
* reservations>edit: 使用者、管理員要編輯預約紀錄的畫面   
* reservations>index: 使用者查看自己預約紀錄的畫面   
* reservations>show: 管理員查看所有預約紀錄的畫面  

**users**  
* users>create: 使用者註冊的畫面  
* users>edit: 使用者編輯修改自己資料的畫面   
* users>index: 使用者查看自己資料的頁面   
* users>show: 管理員查看全部使用者資料的頁面  
以上寫完可以加到routes>web.php那邊，之後輸入指定的網址就可以查看自己寫出來的東西
