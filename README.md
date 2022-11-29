統一用Laravel 版本 8.83.26 (php artisan --version可以查詢)  
記得要下載xampp，手動建一個資料庫取名ncu_court_reservation_system(不要複製貼上，多一個空格很容易跳錯)  
程式碼clone下來後依序下指令: `composer install`, `php artisan event:generate`, `php artisan key:generate`, `npm install`, `npm run dev`  
( 如果在下 `php artisan key:generate`時，`ErrorException file_get_contents(D:\大三上\NCU_Court_Reservation_System\.env.): Failed to open stream: No such file or directory`，可以將.env.example檔名改成.env )  
**ㄜ對，如果發現沒有.env檔的話一定要複製一個.env.example檔然後檔名改成.env，第1行跟第14行要改成跟下圖一樣**  
<img width="399" alt="image" src="https://user-images.githubusercontent.com/83395975/204447106-1fa503ee-17e0-487d-a7bd-aabb8faba553.png">


都好了之後`php artisan serve`，可以開啟伺服器  

`php artisan make:migration create_名字_table`可以新建資料庫的資料表  
`php artisan migrate`新建立的table更新到資料庫，`php artisan migrate:refresh`修改欄位後更新到資料庫上，只要table有更新就要記得跑這兩個指令
