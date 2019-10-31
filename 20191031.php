  .cat-promote .title::before {
        content: '';
        display: inline-block;
        width: 5px;
        height: 22px;
        background:#dd182b;
        vertical-align: middle;
        margin-right: 10px;
    }
    .cat-promote .title{
        font-size: 22px;
    }
    .cat-promote .card{
        height: 300px;
        background:#ccc;
        border-radius: 3px;
        box-shadow: 0 2px 2px rgba(0,0,0,0.1);
    }
    <!-- 电子产品 -->
 
<div class="container">
    {hkcms:position action="position" posid="2" order="listorder asc"}
    {volist name="data" id="vo"}
    <div class="cat-promote clearfix" style="float: left;" >
        <div class="title">{$vo.data.title}</div>
        <div class="content">
            <div class="col-2 item">
                <div class="card">
                    <img src="{$vo['data']['thumb']?$vo['data']['thumb']:$config_siteurl.'statics/default/images/dpic.gif'}" alt="{$vo.data.title}" width="400px" height="300px" />
                </div>
            </div>
        </div>
    </div>
{/volist}
                        {/hkcms:position}
<!-- 电子产品 -->
