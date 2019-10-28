.header{
    padding: 20px 0px;
}
.header .logo{
    font-family: 楷体;
    font-size: 10px;
}
.header .search-bar{
    border: 2px solid #dd182b;
    background-color: #dd182b;
}
.header .search-bar input,
.header .search-bar button{
    border-width: 0px;
    padding: 10px;
    display: block;
    float: left;
    outline: 0px;
}
.header .search-bar input{
    width: 80%;
}
.header .search-bar button{
    width: 20%;
    background:#dd182b;
    color: #fff;
}
.header .search-bar input:focus{
    box-shadow: inset 0 0 2px 2px rgba(0,0,0, 0.5);
}
.header .search-bar button:hover{
    background:#90111d;
}
.header .cart{
    text-align: center;
}
.header .cart a{
    float: right;
    width: 80%;
    border: 2px solid #eee;
    padding: 10px;
    background:#fff;
    color: #dd182b;
}
.col-1,
.col-2,
.col-3{
    float: left;
    display: block;
    position: relative;
    min-height: 1px;
}
.col-1{
    width: 20%;
}
.col-2{
    width: 50%;
}
.col-3{
    width: 30%;
}
<header class="header clearfix">
    <div class="container">
        <div class="logo col-1">LOGO</div>
        <div class="col-2 search-bar">
            <input type="text" name="">
            <button type="button" name="button">搜索</button>
        </div>
        <div class="col-3 cart">
            <a href="">我的购物车</a>
        </div>
    </div>
</header>
