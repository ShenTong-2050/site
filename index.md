---
title: 平凡的世界
---

---

### 原始HTML

<textarea>HTML文本域</textarea>

---


### 粗体、斜体 与 删除线

*斜体1*
_斜体2_
**粗体1**
__粗体2__
这是一个 ~~删除线~~
***斜粗体1***
___斜粗体2___
***~~斜粗体删除线1~~***
~~***斜粗体删除线2***~~

---
### HTML嵌套MarkDown文本
<p>hello **world!**</p>
<p markdown="1">hello **world!**</p>
<p markdown="1">
```php
echo "代码块";
```
</p>

<div markdown="1">
Hello **World!**
</div>

<table>
    <tr>
        <td>单元格**行内元素**</td>
    </tr>
    <tr>
        <td markdown="1">单元格**行内元素**</td>
    </tr>
    <tr>
        <td><div>单元格块级元素</div><span>单元格行内元素</span></td>
    </tr>
</table>

* _Markdown_ 文本<div>块级元素</div><span>行内元素</span>
* 2

---

### 给 Markdown 内容添加 HTML 属性

##### id 属性

[给a链接添加id属性](https://www.baidu.com "百度一下") {#baidu}
[给a链接添加class属性](https://www.jd.com "京东") {.jingdong}
[自定义属性](https://www.taobao.com "淘宝一下"){#taobao .taobao}

![Stt](https://octodex.github.com/images/minion.png "标题") {#img .img}


---

##### 代码块另一种写法

~~~~~~~~~~
function p($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
~~~~~~~~~~

````
function p($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
````

---

# <<标题>>
###### <<标题>>

___
---
***


PHP 是世界上最好的语言
换行

新起一段....

<!--关于 `平凡的世界` **田晓霞** 最后还是没回来这件事....-->

Paragraph in Markdown
<div class="name">
    This is <b>HTML</b>
</div>
Paragraph in Markdown

**粗体**
_斜体_
~~删除线~~

> **数据结构**
>> **树**
>>> **二叉树**
>>>> **平衡二叉树**
>>>>> **满二叉树**


<!--无需列表 可以使用 * - + 中的任意一个符号-->
* 苹果
    - 苹果汁
* 香蕉

<!--有序列表 -->
1. 入口文件
1. 控制器
1. 模型
1. 视图


2. PHP
3. JavaScript
4. Golang

**加粗** 与使用 `<b></b>` 表示的效果一样

    // some comments
    function calc() {
        echo 'hello world!';
    }

---

```php
function p($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
```

| id | name | age | province | function |
| --- | ---: | --- | --- | --- |
| 1 | **张三** | 18 | ~~山西~~ | `array_filter()` |
| 2 | **李四** | 19 | ~~北京~~ | `array_map()` |
| 3 | **王五** | 20 |~~上海~~ | `call_user_func()` |





[英才网联](http://www.800hr.com "标题")

#####指定 a 链接的锚点
* [to chapter-1](#chapter-1)
* [to chapter-2](#chapter-2)

<div class="name">
<a id="chapter-1">chapter 1</a>
<a id="chapter-2">chapter 2</a>
</div>

######图片

![Stt](https://octodex.github.com/images/minion.png "标题")

![Alt text][stt-id]
[stt-id]: https://octodex.github.com/images/dojocat.jpg  "????"

<http://www.baidu.com>

