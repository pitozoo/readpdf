# ReadPdf
> 2020-11-13
> 本项目仅提供给自己使用,代码非自创,谢谢



### branch 

+ main  正式打包发布的分支
+ develop  带有演示案例的分支
                  
                  

### 特别感谢:      
> 首先，必须要说明，本项目是基于几个开源代码包的整合而成

+ FPDF
+ FPDI
+ cd_FPDF    

```
https://github.com/Setasign/FPDI
https://github.com/Setasign/FPDf
https://github.com/DCgithub21/cd_FPDF
```

                  
                  
                  


### 已实现的功能:

1. 读取现有pdf文件
2. 往pdf文件中写入新内容:支持中文内容
3. 输出为 \ 下载为 \ 导出为 : pdf文件

                  
                  
                  
                  
                  
                  

### 文件说明

```
+ 用于被读取的pdf文件
test.pdf

+ 案例
test.php

```

                 
                 
                 
                 

### 坑

+ 1. 多余的功能与多余的代码比较多(我暂时只实现读取和导出pdf、写入中文字符,其他的功能并没有去做测试，抱歉)


+ 2. 中文字体包 : 文件占磁盘空间比较大
src/font/simhei.ttf
src/font/simhei.z
src/font/simhei.afm




