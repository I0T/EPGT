    <nav class="utility">
      <li class="save"><a href="#" onclick="javascript:submitform()" class="toolbar">保存</a></li>
      <li class="back"><a href="<?php echo url_for("wiki/index")?>">返回列表</a></li>
   <li class="delete"><a href="<?php echo url_for('wiki/delete?id='.$id); ?>" onclick="if (confirm('确认删除吗？')) { var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'post'; f.action = this.href;var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', 'sf_method'); m.setAttribute('value', 'delete'); f.appendChild(m);var m = document.createElement('input'); m.setAttribute('type', 'hidden'); m.setAttribute('name', '_csrf_token'); m.setAttribute('value', '7ae5f9bb4952382f3637ea68bfafe589'); f.appendChild(m);f.submit(); };return false;">删除</a></li> 
	 <!--<li class="delete"><a class="toolbar" onclick="javascript:if(confirm('确定还是删除？')){submitform('batchDelete')}" href="<?php echo url_for('wiki/delete?id='.$id); ?>">删除</a></li>-->
    </nav>