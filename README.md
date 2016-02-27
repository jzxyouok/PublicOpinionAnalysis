PublicOpinionAnalysis
---

## database

sql导入的文件放在[这里](https://coding.net/u/mkliu/p/PublicOpinionAnalysis/attachment)

加载项目时需要导入数据

## 注意

里面添加了创建数据库的语句，并且在导入的时候回清空原来的数据

## 项目依赖

1. ThinkPHP

    改文件夹没有放在仓库中，在根目录下执行```curl ...```导入依赖。

##2016/2/17更新内容

1. 把右上角的搜索的post改为了get
2. 新建了新的微博内容,具体形式为new+原来的名字
3. 更新了数据库的部分字段名
4. 编写NewWeiboUserModel和NewWeiboContentModel,初步测试通过,在NewWeiboController里面的搜索type1-3都能正常显示
5. 编写NewWeiboController,更改了index,search方法并部分改写了view里面的index.html,但是结果没有正常显示(数组内容正确)
6. view有待更新

##2016/2/18更新内容

1. 删除了不必要的index.html，和一些乱糟糟的文件布局。
2. 用的是第一份上传的.sql暂不改动。字段不明。。
3. 各种改原先的字段名。重新熟悉了下ThinkPHP。目前可以正常使用。
4. 改完，很多明显的问题出现。一会开讨论，具体说下。

##2016/2/19更新内容

1. 昨天剩下了几个字段忘改了，改好了
2. 金波正在写新的前端。。那现在就将就着。。

##2016/2/20更新内容
1. 编写了两个统计的model并在c层测试通过
2. 添加数据库密码配置文件到.gitignore
3. 图表显示已完成，访问NewWeibo/analysis_1，NewWeibo/analysis_2

##2016/2/21更新内容
1. 精简内容,删除weibo相关的mvc,删除tieba相关的mv,贴吧c层只剩一个_empty方法
2. 更新数据库,删除了无关内容
3. 通过Application/Home/Conf/configFile.php来配置本地文件,详见讨论内容