<?php if ($this->_var['promotion_goods']): ?>
<div id="sales" class="f_l clearfix">
      <h1><a href="search.php?intro=promotion"><img src="themes/default/images/more.gif" /></a></h1>
       <div class="clearfix goodBox">
         <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_46428700_1353833997');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_46428700_1353833997']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
         <?php if (($this->_foreach['promotion_foreach']['iteration'] - 1) <= 3): ?>
           <div class="goodList">
           <a href="<?php echo $this->_var['goods_0_46428700_1353833997']['url']; ?>"><img src="<?php echo $this->_var['goods_0_46428700_1353833997']['thumb']; ?>" border="0" alt="<?php echo htmlspecialchars($this->_var['goods_0_46428700_1353833997']['name']); ?>"/></a><br />
					 <p><a href="<?php echo $this->_var['goods_0_46428700_1353833997']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_46428700_1353833997']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_46428700_1353833997']['short_name']); ?></a></p>
           <?php echo $this->_var['lang']['promote_price']; ?><font class="f1"><?php echo $this->_var['goods_0_46428700_1353833997']['promote_price']; ?></font>
           </div>
         <?php endif; ?>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </div>
      </div>
<?php endif; ?>