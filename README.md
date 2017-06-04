# 哈工大（威海）校园学习助手  

使用了PHP和mysql，搭建在阿里云上，采用了centos系统  

## 这不是最终版本，有些地方写的不是很完善：<br>
* 每个功能的菜单项与其他页面的连接有问题，包括连接不到页面，当前选项没有变成灰色<br>
* 在class中的提醒功能存在逻辑问题。  

### 提醒功能的设计思路：<br>
首先是Linux里的crontab提供了一个守护的功能，可以定时执行操作。我这里是写了一个php a.php的.sh文件，可以用crontab定时执行.sh文件。  
最多一天有四次提醒，分别对应a.sh、b.sh、c.sh和d.sh。  
我在某一个.sh文件中写的是  
```/usr/local/php/bin/php /data/wwwroot/www.kashingliu.xyz/test/wordpress/mail/mail.php```  
而在我的crontab中有四个任务（使用crontab -e来新建一个定时任务，使用crontab -l来查看所有任务）  
```0 7 * * * /data/wwwroot/www.kashingliu.xyz/a.sh >/dev/null 2>&1```  
```0 10 * * * /data/wwwroot/www.kashingliu.xyz/b.sh >/dev/null 2>&1```  
```30 14 * * * /data/wwwroot/www.kashingliu.xyz/c.sh >/dev/null 2>&1```  
```50 15 * * * /data/wwwroot/www.kashingliu.xyz/d.sh >/dev/null 2>&1```  
现在可以通过控制.sh文件中的内容来实现是否发送邮件，php中的fwrite可以实现文件的写入，我用的是  
```file_put_contents($myphp, $txt1 , FILE_APPEND);```  
最后的file_append代表追加式写入，这样的话能避免用户在提醒的时候被覆盖，但是在取消提醒的时候，前一个用户的也被去掉了。所以问题就产生了  
  
### 使用须知 
* 要先安装wordpress
* 把我代码中被*****掉的地方换成你自己的内容，比如数据库的名字和密码
