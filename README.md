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

1.删除了不必要的index.html